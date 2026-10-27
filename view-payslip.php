<?php
error_reporting(E_ERROR | E_PARSE);
include '../config.php';

$employee_id = $_GET['employee_id'] ?? '';
$month       = $_GET['month'] ?? date('Y-m');
$year        = date('Y', strtotime($month));
$mon         = date('m',  strtotime($month));



/* ── EMPLOYEE ─────────────────────────────────────────────────────────────── */
$emp = $anjan->prepare("SELECT * FROM employee_tbl WHERE employee_id = :id");
$emp->execute([':id' => $employee_id]);
$employee = $emp->fetch(PDO::FETCH_ASSOC);

/* ── COMPANY ──────────────────────────────────────────────────────────────── */
$company = $anjan->query("SELECT * FROM company_tbl LIMIT 1")->fetch(PDO::FETCH_ASSOC);

/* ── WEEKOFFS ─────────────────────────────────────────────────────────────── */
$weekoffs = array_map('trim', explode(',', $company['weekoff_days'] ?? ''));

/* ── APPROVED LEAVES ──────────────────────────────────────────────────────── */
$lv = $anjan->prepare("
    SELECT from_date, to_date
    FROM leave_request_tbl
    WHERE employee_id = :id AND status = 'Approved'
");
$lv->execute([':id' => $employee_id]);
$leave_dates = [];
while ($row = $lv->fetch(PDO::FETCH_ASSOC)) {
    for ($d = strtotime($row['from_date']); $d <= strtotime($row['to_date']); $d += 86400) {
        $leave_dates[] = date('Y-m-d', $d);
    }
}

/* ── ATTENDANCE ───────────────────────────────────────────────────────────── */
$att = $anjan->prepare("
    SELECT DATE(punch_in) AS date
    FROM attendance_tbl
    WHERE employee_id = :id
      AND YEAR(punch_in)  = :year
      AND MONTH(punch_in) = :mon
");
$att->execute([':id' => $employee_id, ':year' => $year, ':mon' => $mon]);
$attendance = [];
while ($row = $att->fetch(PDO::FETCH_ASSOC)) {
    $attendance[$row['date']] = true;
}

/* ── CALCULATIONS ─────────────────────────────────────────────────────────── */
$present_days = 0;
$weekoff_count = 0;
$leave_count = 0;
$absent_days = 0;
$working_days = 0;
$total_days = cal_days_in_month(CAL_GREGORIAN, $mon, $year);
for ($i = 1; $i <= $total_days; $i++) {

    $date = $year . '-' . $mon . '-' . str_pad($i, 2, '0', STR_PAD_LEFT);
    $day  = date('l', strtotime($date));

    // ✅ WEEKOFF
    if (in_array($day, $weekoffs)) {
        $weekoff_count++;
        continue; // not a working day
    }

    $working_days++;

    // ✅ PRESENT
    if (isset($attendance[$date])) {
        $present_days++;
    }

    // ✅ APPROVED LEAVE
    elseif (in_array($date, $leave_dates)) {
        $leave_count++;
    }

    // ❌ ABSENT
    else {
        $absent_days++;
    }
}

$paid_days = $present_days + $weekoff_count + $leave_count;

$unpaid_days = $absent_days;

/* ── SALARY BREAKDOWN ─────────────────────────────────────────────────────── */
$gross    = (float) ($employee['monthly_salary'] ?? 0);
$per_day = $working_days > 0 ? $gross / $working_days : 0;

// earnings based on paid days
// $basic     = round($per_day * $paid_days * 0.45);
// $hra       = round($per_day * $paid_days * 0.18);
// $convey    = round($per_day * $paid_days * 0.01);
// $medical   = round($per_day * $paid_days * 0.075);
// $other_all = round($per_day * $paid_days * 0.185);

// present zero for basic all
$incentive = $incentive ?? 0;
$advance = $advance ?? 0;
$other_deductions = $other_deductions ?? 0;

$gross = (float) ($employee['monthly_salary'] ?? 0);
$per_day = $working_days > 0 ? $gross / $working_days : 0;

$paid_days = $present_days + $weekoff_count + $leave_count;
$unpaid_days = $absent_days;

// ✅ extra days logic
$extra_days = 0;
if ($paid_days > $working_days) {
    $extra_days = $paid_days - $working_days;
}

$extra_pay = round($per_day * $extra_days);

// ✅ BASIC FULL
$basic = $gross;

// ✅ totals
$total_earnings = $basic + $incentive + $extra_pay;

$lop_deduction = round($per_day * $unpaid_days);
$total_deductions = $lop_deduction + $advance + $other_deductions;

$net_salary = max(0, $total_earnings - $total_deductions);

/* ── MONTH LABEL ──────────────────────────────────────────────────────────── */
$month_label = strtoupper(date('M-y', strtotime($month . '-01')));

/* ── DOJ ──────────────────────────────────────────────────────────────────── */
$doj_raw = $employee['added_date'] ?? $employee['date_of_joining'] ?? '';
$doj     = $doj_raw ? date('d-M-y', strtotime($doj_raw)) : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payslip – <?= htmlspecialchars($employee['name'] ?? '') ?></title>
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<style>
   @media print {
    body {
        background: white !important;
    }

    .month-card,
    button,
    select,
    input {
        display: none !important;
    }

    .payslip-wrapper {
        margin: 0;
        max-width: 100%;
    }

    .payslip {
        box-shadow: none;
        border: none;
    }
}
    body { background: #f0f2f5; font-family: Arial, sans-serif; }

    .payslip-wrapper {
        max-width: 780px;
        margin: 30px auto;
    }

    /* Month selector card */
    .month-card {
        background: #fff;
        border-radius: 8px;
        padding: 16px 24px;
        margin-bottom: 16px;
        box-shadow: 0 1px 4px rgba(0,0,0,.08);
        display: flex;
        align-items: center;
        gap: 14px;
    }
    .month-card select { max-width: 200px; }
    .month-card .btn-download {
        margin-left: auto;
        background: #cc464b;
        color: #fff;
        border: none;
        padding: 8px 22px;
        border-radius: 5px;
        font-weight: 600;
        text-decoration: none;
    }
    .month-card .btn-download:hover { background: #253d6e; color:#fff; }

    /* Payslip card */
    .payslip {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 28px 32px;
        box-shadow: 0 1px 4px rgba(0,0,0,.08);
    }

    /* ── Top header ── */
    .ps-topbar {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 10px;
    }
    .ps-address { font-size: 12px; line-height: 1.7; color: #333; }
    .ps-brand   { text-align: right; }
    .ps-brand .brand-name {
        font-size: 26px;
        font-weight: 900;
        color: #cc464b;
        letter-spacing: 1px;
        line-height: 1.1;
    }
    .ps-brand .brand-sub {
        font-size: 10px;
        color: #cc464b;
        letter-spacing: 1.5px;
    }
    .ps-brand img { height: 44px; margin-bottom: 4px; }

    /* ── Title ── */
    .ps-title {
        text-align: center;
        font-size: 16px;
        font-weight: 700;
        margin: 10px 0 12px;
    }

    /* ── Tables ── */
    .ps-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 8px;
        font-size: 13px;
    }
    .ps-table th {
        background: #cc464b;
        color: #fff;
        font-weight: 600;
        text-align: center;
        padding: 7px 10px;
        border: 1px solid #b0b8c8;
    }
    .ps-table td {
        padding: 6px 10px;
        border: 1px solid #c8cdd6;
        text-align: center;
        font-weight: 600;
        color: #222;
    }
    .ps-table.teal th { background: black; }
    .ps-table.earn-table th { background: black; }

    /* Alternating rows */
    .ps-table tbody tr:nth-child(odd)  td { background: #fff; }
    .ps-table tbody tr:nth-child(even) td { background: #f2f2f2; }

    /* Left align for label cols */
    .ps-table td.left { text-align: left; font-weight: 400; }
    .ps-table td.right { text-align: right; }

    /* Total row */
    .ps-table tr.total-row td {
        background: #cc464b !important;
        color: #fff !important;
        font-weight: 700;
    }
    .ps-table tr.total-row td.left { text-align: left; }
    .ps-table tr.total-row td.right { text-align: right; }

    /* Net salary */
    .net-row {
        display: flex;
        justify-content: flex-end;
        margin-top: 0;
    }
    .net-table {
        width: 50%;
        border-collapse: collapse;
        font-size: 13px;
    }
    .net-table td {
        background: #cc464b;
        color: #fff;
        font-weight: 700;
        padding: 7px 10px;
        border: 1px solid #b0b8c8;
        text-align: center;
    }

    /* Signature */
    .signature-row {
        display: flex;
        justify-content: space-between;
        margin-top: 36px;
        font-size: 12px;
        color: #444;
    }
    .signature-row div { text-align: center; }
    .sig-line { border-top: 1px solid #888; width: 160px; margin: 30px auto 0; }

    .ps-footer { text-align: center; font-size: 11px; color: #888; margin-top: 18px; }
</style>
</head>
<body>

<div class="payslip-wrapper">

    <!-- Month selector + Download button -->
    <div class="month-card">
        <label style="font-weight:600; margin:0;">Pay Period:</label>
        <form method="GET" style="margin:0;">
            <input type="hidden" name="employee_id" value="<?= htmlspecialchars($employee_id) ?>">
            <select name="month" class="form-control" onchange="this.form.submit()">
                <?php for ($i = 0; $i < 12; $i++) {
                    $m = date('Y-m', strtotime("-$i months"));
                    $label = date('F Y', strtotime($m . '-01'));
                    $sel = ($m === $month) ? 'selected' : '';
                    echo "<option value='$m' $sel>$label</option>";
                } ?>
            </select>
     
        
        <!-- <a href="generate-payslip.php?employee_id=<?= urlencode($employee_id) ?>&month=<?= urlencode($month) ?>"
            
           class="btn-download">⬇ Download PDF</a> -->
    </div>
</form>
<form method="POST">
    <!-- Payslip preview -->
    <div class="payslip">

        <!-- Top bar: address | logo -->
        <div class="ps-topbar">
            <div class="ps-address">
                <?= nl2br(htmlspecialchars($company['company_address'] ?? 'Talwar Plaza, 4th, Beside Podium Mall,
Tolichowki, Hyderabad, Telangana 500008')) ?><br>
                Phone <?= htmlspecialchars($company['company_contact'] ?? '+91 9347713950') ?>
            </div>
            <div class="ps-brand">
                <?php if (!empty($company['company_logo'])): ?>
                    <img src="documents-uploads/company-logo/<?= htmlspecialchars($company['company_logo']) ?>" alt="Logo"><br>
                <?php endif; ?>
                <div class="brand-name"><?= htmlspecialchars($company['company_name'] ?? 'TEKOFY') ?></div>
                <div class="brand-sub"><?= htmlspecialchars($company['company_corporation'] ?? 'MEDIA PARTNER PVT.LTD') ?></div>
            </div>
        </div>

        <!-- Title -->
        <div class="ps-title">Pay Slip <?= $month_label ?></div>

        <!-- Employee info table -->
        <table class="ps-table" style="margin-bottom:10px;">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Employee ID</th>
                    <th>Designation</th>
                    <th>Date Of Joining</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($employee['name'] ?? '') ?></td>
                    <td><?= htmlspecialchars($employee['employee_id'] ?? '') ?></td>
                    <td><?= htmlspecialchars(ucwords(strtolower($employee['role'] ?? ''))) ?></td>
                    <td><?= $doj ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Days / Salary table -->
        <table class="ps-table teal" style="margin-bottom:10px;">
            <thead>
                <tr>
                    <th>Total Days</th>
                    <th>Paid Days</th>
                    <th>Unpaid Days</th>
                    <th>Gross Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $total_days ?></td>
                    <td>
  <input type="number" name="paid_days" id="paid_days" value="<?= $paid_days ?>" class="form-control">

</td>
                    <td><?= $unpaid_days ?></td>
                    <td>&#8377;<?= number_format($gross) ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Earnings & Deductions table -->
        <table class="ps-table earn-table">
            <thead>
                <tr>
                    <th style="width:30%">Earnings</th>
                    <th style="width:20%">Amount</th>
                    <th style="width:30%">Deductions</th>
                    <th style="width:20%">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="left">Basic</td>
                    <td class="right" id="basic"><?= number_format($basic) ?></td>
                    <td class="left">Leave / LOP</td>
                    <td class="right" id="lop"><?= number_format($lop_deduction) ?></td>
                </tr>
                <tr>
                    <td class="left">HRA</td>
                    <td class="right" id="hra"><?= number_format($hra) ?></td>
                    <td class="left">Advance</td>
                    <td class="right"><?= number_format($advance) ?></td>
                </tr>
                <tr>
                    <td class="left">Conveyance Allowance</td>
                    <td class="right" id="convey"><?= number_format($convey) ?></td>
                    <td class="left">Other Deductions</td>
                    <td class="right"><?= number_format($other_deductions) ?></td>
                </tr>
                <tr>
                    <td class="left">Medical Allowance</td>
                    <td class="right" id="medical"><?= number_format($medical) ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="left">Other Allowance</td>
                    <td class="right" id="other_all"><?= number_format($other_all) ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="left">Incentives</td>
                    <td class="right">
    <input type="number" name="incentive" id="incentive" value="<?= $incentive ?>" class="form-control">
</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="total-row">
                    <td class="left">Total Earnings</td>
                    <td class="right" id="total_earnings"><?= number_format($total_earnings) ?></td>
                    <td class="left">Total Deductions</td>
                    <td class="right" id="total_deductions"><?= number_format($total_deductions) ?></td>
                </tr>
            </tbody>
        </table>

        <!-- Net Salary -->
        <div class="net-row">
            <table class="net-table">
                <tr>
                    <td style="width:50%">Net Salary</td>
                    <td style="width:50%" id="net_salary"><?= number_format($net_salary) ?></td>
                </tr>
            </table>
        </div>
<button type="submit" class="btn btn-success">Save Payslip</button>
</form>
        <!-- Signatures -->
        <div class="signature-row">
            <div>
                <div class="sig-line"></div>
                Employer Signature
            </div>
            <div>
                <div class="sig-line"></div>
                Employee Signature
            </div>
        </div>

        <div class="ps-footer">This is a system generated payslip</div>

    </div><!-- /.payslip -->
</div>
<!--  -->
<script>
let gross = <?= $gross ?>;
let working_days = <?= $working_days ?>;
let unpaid_days_fixed = <?= $unpaid_days ?>; // ✅ FIXED
let advance = <?= (float)($advance ?? 0) ?>;
let other_deductions = <?= (float)($other_deductions ?? 0) ?>;

function calculateSalary() {

    let paid_days = parseFloat(document.getElementById('paid_days').value) || 0;
    let incentive = parseFloat(document.getElementById('incentive').value) || 0;

    let per_day = working_days > 0 ? gross / working_days : 0;

    // ✅ unpaid is FIXED (do not change)
    let unpaid_days = unpaid_days_fixed;

    // ✅ extra days logic
    let extra_days = 0;
    if (paid_days > working_days) {
        extra_days = paid_days - working_days;
    }

    let extra_pay = Math.round(per_day * extra_days);

    // ✅ BASIC FULL
    let basic = gross;

    let total_earnings = basic + incentive + extra_pay;

    let lop = Math.round(per_day * unpaid_days);
    let total_deductions = lop + advance + other_deductions;

    let net_salary = Math.max(0, total_earnings - total_deductions);

    // update UI
    document.getElementById('basic').innerText = basic;
    document.getElementById('hra').innerText = 0;
    document.getElementById('convey').innerText = 0;
    document.getElementById('medical').innerText = 0;
    document.getElementById('other_all').innerText = 0;

    document.getElementById('lop').innerText = lop;

    document.getElementById('total_earnings').innerText = total_earnings;
    document.getElementById('total_deductions').innerText = total_deductions;
    document.getElementById('net_salary').innerText = net_salary;
}

// trigger
document.getElementById('paid_days').addEventListener('input', calculateSalary);
document.getElementById('incentive').addEventListener('input', calculateSalary);
</script>


</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $paid_days = $_POST['paid_days'] ?? $paid_days;
    $incentive = $_POST['incentive'] ?? 0;

    // recalc extra days
    $extra_days = 0;
    if ($paid_days > $working_days) {
        $extra_days = $paid_days - $working_days;
    }

    $extra_pay = round($per_day * $extra_days);

    // totals
    $total_earnings = $gross + $incentive + $extra_pay;

    $lop_deduction = round($per_day * $unpaid_days);
    $total_deductions = $lop_deduction + $advance + $other_deductions;

    $net_salary = max(0, $total_earnings - $total_deductions);

        // check already exists
    $check = $anjan->prepare("
        SELECT id FROM payslip_tbl 
        WHERE employee_id = :emp AND pay_month = :month
    ");
    $check->execute([
        ':emp' => $employee_id,
        ':month' => $month
    ]);

    if ($check->fetch()) {

    // UPDATE
    $stmt = $anjan->prepare("
        UPDATE payslip_tbl SET
            paid_days = :paid_days,
            unpaid_days = :unpaid_days,
            incentive = :incentive,
            total_earnings = :total_earnings,
            total_deductions = :total_deductions,
            net_salary = :net_salary
        WHERE employee_id = :emp AND pay_month = :month
    ");

    $stmt->execute([
        ':emp' => $employee_id,
        ':month' => $month,
        ':paid_days' => $paid_days,
        ':unpaid_days' => $unpaid_days,
        ':incentive' => $incentive,
        ':total_earnings' => $total_earnings,
        ':total_deductions' => $total_deductions,
        ':net_salary' => $net_salary
    ]);

} else {

// Generate payslip_id like PYS001
$get_payslip_id = $anjan->prepare("SELECT MAX(id) FROM payslip_tbl");
$get_payslip_id->execute();
$payslip_row = $get_payslip_id->fetch(PDO::FETCH_ASSOC);

if ($payslip_row['MAX(id)'] > 0) {
    $n = $payslip_row['MAX(id)'] + 1;
    $payslip_id = 'PYS' . str_pad($n, 3, '0', STR_PAD_LEFT);
} else {
    $payslip_id = 'PYS001';
}
    // INSERT
    $stmt = $anjan->prepare("
        INSERT INTO payslip_tbl (
            employee_id, payslip_id, pay_month,
            paid_days, unpaid_days,
            incentive, total_earnings,
            total_deductions, net_salary
        ) VALUES (
            :emp, :payslip_id, :month,
            :paid_days, :unpaid_days,
            :incentive, :total_earnings,
            :total_deductions, :net_salary
        )
    ");

    $stmt->execute([
        ':emp' => $employee_id,
        ':payslip_id' => $payslip_id,
        ':month' => $month,
        ':paid_days' => $paid_days,
        ':unpaid_days' => $unpaid_days,
        ':incentive' => $incentive,
        ':total_earnings' => $total_earnings,
        ':total_deductions' => $total_deductions,
        ':net_salary' => $net_salary
    ]);
}
  echo "<script>
window.location.href='generate-payslip.php?employee_id=".$employee_id."
&month=".$month."
&paid_days=".$paid_days."
&incentive=".$incentive."';
</script>";
exit;
}
?>