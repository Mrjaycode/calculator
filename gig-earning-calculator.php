<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Free Gig Earnings Calculator | Rapido, Ola, Uber, Swiggy, Zomato Hourly Income | CalcSpeed</title>
    <meta name="description" content="Calculate your real hourly earnings as a gig worker — Rapido, Ola, Uber, Swiggy, Zomato. Find earnings per hour, fuel cost deduction, platform commission, and daily/weekly/monthly income projections.">
    <meta name="keywords" content="Gig Earnings Calculator, Rapido Earnings Calculator, Hourly Earnings Calculator, Ola Uber Income Calculator, Swiggy Zomato Earnings, Delivery Partner Income, Fuel Cost Deduction, Gig Worker Calculator, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">

    <link rel="canonical" href="https://www.calcspeed.com/gig-earnings-calculator">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Free Gig Earnings Calculator | CalcSpeed">
    <meta property="og:description" content="Find your real hourly income after fuel and commission — for Rapido, Ola, Uber, Swiggy, Zomato and any gig work.">
    <meta property="og:url" content="https://www.calcspeed.com/gig-earnings-calculator">
    <meta property="og:site_name" content="CalcSpeed">
    <meta property="og:image" content="https://www.calcspeed.com/img/logo-dark1.png">

    <link rel="icon" type="image/png" href="img/logo-dark1.png">
    <link rel="apple-touch-icon" href="img/logo-dark1.png">
    <meta name="theme-color" content="#0d6efd">

    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"WebApplication",
      "name":"Gig Earnings Calculator",
      "url":"https://www.calcspeed.com/gig-earnings-calculator",
      "description":"Free Gig Earnings Calculator for Rapido, Ola, Uber, Swiggy and Zomato — calculates real hourly earnings after fuel and commission.",
      "applicationCategory":"FinanceApplication",
      "operatingSystem":"All",
      "offers":{"@type":"Offer","price":"0","priceCurrency":"USD"}
    }
    </script>

    <style>
      *, *::before, *::after { box-sizing: border-box; }

      :root {
        --navy:   #0a1628;
        --navy3:  #162340;
        --blue:   #1a4fd6;
        --gold:   #f5a623;
        --green:  #059669;
        --red:    #dc2626;
        --amber:  #d97706;
        --purple: #7c3aed;
        --muted:  #64748b;
        --border: rgba(10,22,40,.09);
        --paper:  #f2f4f9;
        --white:  #fff;
        --r:      16px;
        --fh:     'Outfit', sans-serif;
      }

      input:not([type="checkbox"]):not([type="radio"]), select {
        line-height: 18px; padding: 10px 16px; min-height: 40px; font-size: 16px;
      }

      /* ── HERO ── */
      .gst-section {
  background: #006ef4;
  padding: 80px 0 60px;
}
      .gst-title { font-weight:700; font-size:clamp(28px,4vw,42px); margin-bottom:10px; }
      .gst-sub   { opacity:.95; margin-bottom:40px; font-size:16px; }
      .gst-card  {
        background:#fff; padding:40px; border-radius:14px;
        max-width:1020px; box-shadow:0 25px 50px rgba(0,0,0,.25); color:#333;
      }
      .gst-label {
        font-weight:700; margin-bottom:6px; font-size:14px;
        color:var(--navy); display:block;
      }
      .gst-input {
        height:48px; border-radius:8px; border:1.5px solid var(--border);
        width:100%; padding:0 14px; font-size:16px; color:var(--navy);
        transition:border-color .2s;
      }
      .gst-input:focus {
        outline:none; border-color:var(--amber);
        box-shadow:0 0 0 3px rgba(217,119,6,.12);
      }
      .gst-select {
        height:48px; border-radius:8px; border:1.5px solid var(--border);
        width:100%; padding:0 14px; font-size:15px; color:var(--navy);
        background:#fff; cursor:pointer;
      }

      /* ── PLATFORM PILLS ── */
      .platform-row {
        display:flex; gap:8px; flex-wrap:wrap; margin-bottom:20px;
      }
      .platform-pill {
        padding:9px 16px; border-radius:100px; font-family:var(--fh);
        font-size:12px; font-weight:700; cursor:pointer;
        border:1.5px solid var(--border); background:var(--paper);
        color:var(--muted); transition:all .2s;
      }
      .platform-pill.active {
        background:var(--navy); border-color:var(--navy); color:#fff;
      }

      /* ── RESULT CARDS ── */
      .result-card {
        background:var(--paper); border-radius:12px; padding:18px 14px;
        text-align:center; border:1.5px solid var(--border); transition:transform .2s;
      }
      .result-card:hover { transform:translateY(-3px); }
      .rc-label { font-size:11px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--muted); margin-bottom:8px; }
      .rc-value { font-size:26px; font-weight:800; font-family:var(--fh); line-height:1.1; }
      .rc-sub   { font-size:12px; color:var(--muted); margin-top:4px; }

      /* ── HOURLY HERO CARD ── */
      .hourly-hero {
        background: linear-gradient(135deg, var(--navy), var(--navy3));
        border-radius:16px; padding:28px; text-align:center;
        margin-bottom:20px; position:relative; overflow:hidden;
      }
      .hourly-hero::before {
        content:''; position:absolute; inset:0;
        background-image: linear-gradient(rgba(245,166,35,.05) 1px, transparent 1px),
                           linear-gradient(90deg, rgba(245,166,35,.05) 1px, transparent 1px);
        background-size: 30px 30px;
      }
      .hh-label { position:relative; z-index:1; font-size:12px; letter-spacing:2px; text-transform:uppercase; color:rgba(255,255,255,.5); font-weight:700; margin-bottom:8px; }
      .hh-value { position:relative; z-index:1; font-family:var(--fh); font-size:clamp(40px,6vw,64px); font-weight:900; color:var(--gold); letter-spacing:-2px; line-height:1; }
      .hh-unit  { position:relative; z-index:1; font-size:16px; color:rgba(255,255,255,.5); margin-top:6px; }
      .hh-compare { position:relative; z-index:1; margin-top:14px; font-size:13px; color:rgba(255,255,255,.7); }

      /* ── PROJECTION TABLE ── */
      .proj-table { width:100%; border-collapse:collapse; }
      .proj-table tr { border-bottom:1px solid var(--border); }
      .proj-table tr:last-child { border-bottom:none; }
      .proj-table th, .proj-table td { padding:10px 8px; font-size:13px; text-align:left; }
      .proj-table th { font-family:var(--fh); font-weight:700; color:var(--navy); background:var(--paper); }
      .proj-table td:not(:first-child), .proj-table th:not(:first-child) { text-align:right; }
      .proj-table .pt-gross { color:var(--blue); font-weight:700; }
      .proj-table .pt-net   { color:var(--green); font-weight:800; }
      .proj-table .pt-exp   { color:var(--red); }

      /* ── SECTION 1 ── */
      .s1 { padding:56px 5%; background:#fff; }
      .s1 .container { max-width:1100px; margin:0 auto; }
      .s1-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--amber); margin-bottom:12px; }
      .s1-h { font-family:var(--fh); font-size:clamp(24px,3vw,36px); font-weight:800; color:var(--navy); letter-spacing:-1.2px; line-height:1.1; margin-bottom:16px; }
      .s1-p { font-size:15px; color:var(--muted); line-height:1.8; margin-bottom:0; }
      .s1-accent { color:var(--amber); }

      /* ── STEP CARDS ── */
      .step-card { background:#fff; border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,.08); transition:.3s; }
      .step-card:hover { transform:translateY(-6px); }
      .step-icon  { font-size:32px; color:var(--amber); margin-bottom:10px; }
      .step-arrow { font-size:26px; color:var(--amber); }

      /* ── SECTION 3 ── */
      .s3 { padding:56px 5%; background:#fff; }
      .s3 .container { max-width:1100px; margin:0 auto; }
      .s3-header { text-align:center; margin-bottom:48px; }
      .s3-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--amber); margin-bottom:10px; }
      .s3-h   { font-family:var(--fh); font-size:clamp(24px,3vw,36px); font-weight:800; color:var(--navy); letter-spacing:-1px; line-height:1.1; margin-bottom:8px; }
      .s3-sub { font-size:14px; color:var(--muted); }
      .s3-grid { display:grid; grid-template-columns:1fr 1fr; gap:24px; }

      .ef-card { border:1.5px solid var(--border); border-radius:18px; overflow:hidden; }
      .ef-card-head { padding:18px 24px; border-bottom:1.5px solid var(--border); background:var(--paper); display:flex; align-items:center; gap:12px; }
      .ef-card-head-ico { width:40px; height:40px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0; }
      .ef-card-head-t { font-family:var(--fh); font-size:15px; font-weight:700; color:var(--navy); }
      .ef-card-head-s { font-size:12px; color:var(--muted); margin-top:2px; }
      .ef-card-body { padding:24px; background:#fff; }

      .loan-table { width:100%; border-collapse:collapse; }
      .loan-table tr { border-bottom:1px solid var(--border); }
      .loan-table tr:last-child { border-bottom:none; }
      .loan-table td { padding:10px 0; font-size:14px; }
      .loan-table .td-l { color:var(--muted); font-weight:500; }
      .loan-table .td-r { font-weight:700; color:var(--navy); text-align:right; }
      .td-r.green { color:var(--green); }
      .td-r.amber { color:var(--amber); }
      .td-r.blue  { color:var(--blue);  }
      .td-r.red   { color:var(--red);   }

      .formula-dark { background:var(--navy); border-radius:12px; padding:20px; text-align:center; margin-bottom:12px; }
      .formula-eq   { font-size:14px; font-weight:700; color:#fff; font-family:var(--fh); letter-spacing:.3px; line-height:1.8; }
      .formula-hint { font-size:11px; color:rgba(255,255,255,.38); margin-top:6px; }
      .vars-grid { display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-bottom:16px; }
      .var-box   { background:var(--paper); border:1px solid var(--border); border-radius:10px; padding:12px 10px; text-align:center; }
      .var-letter { font-family:var(--fh); font-size:18px; font-weight:800; color:var(--amber); line-height:1; margin-bottom:4px; }
      .var-desc   { font-size:11px; color:var(--muted); line-height:1.4; }
      .insight-box { background:#fffbf0; border:1.5px solid #fde68a; border-radius:12px; padding:14px 16px; }
      .insight-box p { font-size:13px; color:#92400e; line-height:1.65; margin:0; }
      .insight-box strong { color:#78350f; }

      /* ── CALC GRID ── */
      .cn-section { padding:64px 5%; }
      .cn-section.bg-paper { background:var(--paper); }
      .container-xl { max-width:1200px; margin:0 auto; }
      .eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--blue); margin-bottom:10px; }
      .sec-h { font-family:var(--fh); font-size:clamp(28px,4vw,44px); font-weight:800; line-height:1.05; letter-spacing:-1.5px; color:var(--navy); margin-bottom:14px; }
      .sec-p { font-size:16px; color:var(--muted); max-width:500px; line-height:1.65; }

      .cat-tabs { display:flex; gap:8px; flex-wrap:wrap; margin-bottom:28px; }
      .ctab { padding:8px 18px; border-radius:100px; font-family:var(--fh); font-size:13px; font-weight:600; border:1.5px solid var(--border); background:var(--white); color:var(--muted); cursor:pointer; transition:all .2s; }
      .ctab:hover { border-color:var(--navy); color:var(--navy); }
      .ctab.active    { background:var(--navy); border-color:var(--navy); color:#fff; }
      .ctab.active.tf { background:var(--blue); border-color:var(--blue); color:#fff; }
      .ctab.active.th { background:#059669;     border-color:#059669;     color:#fff; }
      .ctab.active.tt { background:#0057ff;     border-color:#0057ff;     color:#fff; }
      .ctab.active.td { background:#d97706;     border-color:#d97706;     color:#fff; }
      .ctab.active.ts { background:#7c3aed;     border-color:#7c3aed;     color:#fff; }

      .calcs-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(210px,1fr)); gap:14px; }
      .cc { background:whitesmoke; border-radius:var(--r); border:1.5px solid var(--border); padding:22px 18px 18px; display:flex; flex-direction:column; transition:transform .22s,box-shadow .22s,border-color .2s; position:relative; overflow:hidden; text-decoration:none; }
      .cc::after { content:''; position:absolute; top:0; left:0; right:0; height:3px; background:var(--cc-accent,var(--blue)); opacity:0; transition:opacity .2s; }
      .cc:hover { transform:translateY(-6px); box-shadow:0 18px 40px rgba(10,22,40,.1); border-color:rgba(10,22,40,.15); }
      .cc:hover::after { opacity:1; }
      .cc-ico { width:46px; height:46px; border-radius:13px; background:var(--cc-bg,#eef3ff); display:flex; align-items:center; justify-content:center; font-size:21px; margin-bottom:13px; transition:transform .2s; }
      .cc:hover .cc-ico { transform:scale(1.1) rotate(-6deg); }
      .cc-name { font-family:var(--fh); font-size:16px; font-weight:700; color:var(--navy); margin-bottom:5px; line-height:1.2; }
      .cc-desc { font-size:12px; color:var(--muted); line-height:1.5; flex:1; margin-bottom:13px; }
      .cc-cta  { font-family:var(--fh); font-size:12px; font-weight:700; color:var(--cc-accent,var(--blue)); display:flex; align-items:center; gap:4px; text-transform:uppercase; letter-spacing:.5px; }
      .cc-cta svg { transition:transform .2s; }
      .cc:hover .cc-cta svg { transform:translateX(4px); }

      @media(max-width:700px) { .s3-grid { grid-template-columns:1fr; } }
      @media(max-width:640px) { .calcs-grid { grid-template-columns:1fr 1fr; } .gst-card { padding:24px 18px; } }
      @media(max-width:400px) { .calcs-grid { grid-template-columns:1fr; } }
    </style>
</head>
<body>
<div class="body-inner">

<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════
     HERO – GIG EARNINGS CALCULATOR
═══════════════════════════════════════ -->
<section class="gst-section">
  <div class="container text-center">
    <h1 class="gst-title text-white">Free Gig Earnings Calculator</h1>
    <p class="gst-sub text-white">For Rapido, Ola, Uber, Swiggy, Zomato &amp; any gig work — find your <strong>real hourly income</strong> after fuel &amp; commission.</p>

    <div class="gst-card mx-auto pt-4">

      <!-- ── Platform Pills ── -->
      <div class="platform-row">
        <button class="platform-pill active" onclick="setPlatform('custom',this)">🛠️ Custom</button>
        <button class="platform-pill" onclick="setPlatform('rapido',this)">🛵 Rapido (~20%)</button>
        <button class="platform-pill" onclick="setPlatform('ola',this)">🚗 Ola/Uber (~25%)</button>
        <button class="platform-pill" onclick="setPlatform('swiggy',this)">🍔 Swiggy/Zomato (~18%)</button>
        <button class="platform-pill" onclick="setPlatform('none',this)">💼 No Platform Fee</button>
      </div>

      <!-- ── ROW 1: Earnings & Time ── -->
      <div class="row g-3 mb-3">
        <div class="col-md-4">
          <label class="gst-label">💰 Total Earnings This Session (₹)</label>
          <input type="number" id="totalEarnings" class="gst-input" placeholder="e.g. 1,200" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">⏱️ Hours Worked</label>
          <input type="number" id="hoursWorked" class="gst-input" placeholder="e.g. 6" min="0" step="0.1">
        </div>
        <div class="col-md-4">
          <label class="gst-label">🏷️ Platform Commission (%)</label>
          <input type="number" id="commissionPct" class="gst-input" placeholder="e.g. 20" min="0" max="100" value="0">
        </div>
      </div>

      <!-- ── ROW 2: Expenses ── -->
      <div class="row g-3 mb-3">
        <div class="col-md-4">
          <label class="gst-label">⛽ Fuel Cost (₹)</label>
          <input type="number" id="fuelCost" class="gst-input" placeholder="e.g. 150" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">🔧 Other Expenses (₹) <small style="font-weight:400;color:#999">food, toll, maintenance</small></label>
          <input type="number" id="otherExpenses" class="gst-input" placeholder="e.g. 50" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">📦 Number of Trips/Orders <small style="font-weight:400;color:#999">optional</small></label>
          <input type="number" id="numTrips" class="gst-input" placeholder="e.g. 12" min="0">
        </div>
      </div>

      <!-- ── ROW 3: Working pattern for projections ── -->
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label class="gst-label">📅 Days You Work Per Week</label>
          <input type="number" id="daysPerWeek" class="gst-input" placeholder="e.g. 6" min="1" max="7" value="6">
        </div>
        <div class="col-md-6 d-flex align-items-end">
          <button onclick="calculateGig()" class="btn w-100" style="height:48px;font-size:16px;font-weight:700;border-radius:8px;background:var(--navy);border:none;color:#fff;">
            ⚡ Calculate My Earnings
          </button>
        </div>
      </div>

      <hr class="my-3">

      <!-- ── RESULTS ── -->
      <div id="gigResults" style="display:none">

        <!-- Hero hourly rate -->
        <div class="hourly-hero">
          <div class="hh-label">Your Real Hourly Earning (After All Deductions)</div>
          <div class="hh-value" id="hhRate">₹0</div>
          <div class="hh-unit">per hour</div>
          <div class="hh-compare" id="hhCompare"></div>
        </div>

        <!-- 4 Key Metrics -->
        <div class="row g-3 text-center mb-3">
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Gross Earnings</div>
              <div class="rc-value" id="resGross" style="color:var(--blue)">₹0</div>
              <div class="rc-sub">before deductions</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Commission Deducted</div>
              <div class="rc-value" id="resCommission" style="color:var(--red)">₹0</div>
              <div class="rc-sub" id="resCommissionPct">0% platform fee</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Total Expenses</div>
              <div class="rc-value" id="resExpenses" style="color:var(--amber)">₹0</div>
              <div class="rc-sub">fuel + other costs</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Net Profit</div>
              <div class="rc-value" id="resNetProfit" style="color:var(--green)">₹0</div>
              <div class="rc-sub">in your pocket</div>
            </div>
          </div>
        </div>

        <!-- Per-trip stats -->
        <div class="row g-3 text-center mb-3" id="tripStatsRow" style="display:none">
          <div class="col-6 col-md-4">
            <div class="result-card">
              <div class="rc-label">Earnings per Trip (Gross)</div>
              <div class="rc-value" id="resPerTripGross" style="color:var(--blue)">₹0</div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="result-card">
              <div class="rc-label">Net per Trip</div>
              <div class="rc-value" id="resPerTripNet" style="color:var(--green)">₹0</div>
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="result-card">
              <div class="rc-label">Trips per Hour</div>
              <div class="rc-value" id="resTripsPerHour" style="color:var(--purple)">0</div>
            </div>
          </div>
        </div>

        <!-- Detailed Breakdown -->
        <div class="row g-3 mt-1 mb-3">
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📋 Session Breakdown</div>
              <table class="loan-table">
                <tr><td class="td-l">Gross Earnings</td>      <td class="td-r blue"  id="brkGross">₹0</td></tr>
                <tr><td class="td-l">Platform Commission</td> <td class="td-r red"   id="brkCommission">₹0</td></tr>
                <tr><td class="td-l">Earnings After Commission</td><td class="td-r" id="brkAfterComm">₹0</td></tr>
                <tr><td class="td-l">Fuel Cost</td>           <td class="td-r red"   id="brkFuel">₹0</td></tr>
                <tr><td class="td-l">Other Expenses</td>      <td class="td-r red"   id="brkOther">₹0</td></tr>
                <tr><td class="td-l">Net Profit</td>          <td class="td-r green" id="brkNet">₹0</td></tr>
                <tr><td class="td-l">Hours Worked</td>        <td class="td-r"       id="brkHours">0 hrs</td></tr>
                <tr><td class="td-l">Net Earning per Hour</td><td class="td-r green" id="brkPerHour">₹0/hr</td></tr>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📊 Profitability Analysis</div>
              <table class="loan-table">
                <tr><td class="td-l">Commission Rate</td>     <td class="td-r red"   id="brkCommRate">0%</td></tr>
                <tr><td class="td-l">Expense Ratio</td>       <td class="td-r amber" id="brkExpRatio">0%</td></tr>
                <tr><td class="td-l">Net Profit Margin</td>   <td class="td-r green" id="brkMargin">0%</td></tr>
                <tr><td class="td-l">Fuel % of Net Earnings</td><td class="td-r amber" id="brkFuelPct">0%</td></tr>
                <tr><td class="td-l">Effective Take-Home</td> <td class="td-r green" id="brkTakeHome">0%</td></tr>
                <tr><td class="td-l">Break-even Hours Worked</td><td class="td-r" id="brkBE">—</td></tr>
              </table>
            </div>
          </div>
        </div>

        <!-- Projection Table -->
        <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
          <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📅 Income Projections (based on your hourly rate)</div>
          <table class="proj-table">
            <thead>
              <tr><th>Period</th><th>Hours</th><th>Gross Income</th><th>Est. Expenses</th><th>Net Income</th></tr>
            </thead>
            <tbody id="projBody">
              <!-- Filled by JS -->
            </tbody>
          </table>
          <div style="margin-top:10px;font-size:12px;color:var(--muted)">
            * Projections assume you work the same hours per day for <span id="projDaysLabel">6</span> days/week. Expenses are scaled proportionally.
          </div>
        </div>

      </div><!-- /gigResults -->

      <!-- Placeholder -->
      <div id="gigPlaceholder" class="text-center py-3" style="color:var(--muted)">
        <span style="font-size:36px">🛵</span>
        <p style="margin-top:8px;font-size:14px">Enter your <strong>session earnings</strong>, <strong>hours worked</strong>, and any <strong>expenses</strong> — then click <strong>Calculate</strong> to see your real hourly income.</p>
      </div>

    </div><!-- /gst-card -->
  </div>
</section>


<!-- ══════════════════════════════════════
     SECTION 1 – What is this for
═══════════════════════════════════════ -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">For Gig Workers</p>
    <h2 class="s1-h">Know Your <span class="s1-accent">Real Hourly Earnings</span></h2>
    <p class="s1-p">If you ride for <strong>Rapido</strong>, drive for <strong>Ola/Uber</strong>, or deliver for <strong>Swiggy/Zomato</strong>, the amount shown in your app isn't what you actually take home. After <strong>platform commission</strong>, <strong>fuel costs</strong>, and other expenses like tolls, maintenance, or food — your real earning per hour can be very different from what it looks like.</p>
    <p class="s1-p" style="margin-top:12px">This calculator helps you answer the most important question: <strong>"Is this gig actually worth my time?"</strong> By entering your session earnings, hours worked, and expenses, you'll instantly see your <strong>true hourly rate</strong> — and can compare it across different days, platforms, or even other job opportunities.</p>
    <p class="s1-p" style="margin-top:12px">It also projects your <strong>daily, weekly, and monthly income</strong> based on your actual performance — so you can plan your finances realistically.</p>
  </div>
</section>


<!-- ══════════════════════════════════════
     HOW TO USE
═══════════════════════════════════════ -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="s1-h text-center mb-4">How to Use This Calculator</h2>
    <div class="row align-items-center text-center">

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">💰</div>
          <h4>Enter Earnings</h4>
          <p>Enter total earnings shown in your app for this session.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">⏱️</div>
          <h4>Hours Worked</h4>
          <p>Enter how many hours you were online/working.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🏷️</div>
          <h4>Set Commission</h4>
          <p>Pick your platform or enter custom commission %.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">⛽</div>
          <h4>Add Expenses</h4>
          <p>Enter fuel cost and any other expenses for the day.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2 p-3">
        <div class="step-card p-4">
          <div class="step-icon">📊</div>
          <h4>See Real Rate</h4>
          <p>Get your true hourly income plus daily/weekly/monthly projections.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════
     SECTION 3 – Example + Formula
═══════════════════════════════════════ -->
<section class="s3">
  <div class="container">
    <div class="s3-header">
      <p class="s3-eyebrow">Reference</p>
      <h2 class="s3-h">Worked example &amp; formulas</h2>
      <p class="s3-sub">A real Rapido session example with all calculations explained.</p>
    </div>
    <div class="s3-grid">

      <!-- Example Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#fef3e2">🛵</div>
          <div>
            <div class="ef-card-head-t">Worked example — Rapido, 6 hours</div>
            <div class="ef-card-head-s">Earnings ₹1,200 · Commission 20% · Fuel ₹150</div>
          </div>
        </div>
        <div class="ef-card-body">
          <table class="loan-table">
            <tr><td class="td-l">Gross Earnings (app shows)</td>  <td class="td-r blue">₹1,200</td></tr>
            <tr><td class="td-l">Platform Commission (20%)</td>   <td class="td-r red">−₹240</td></tr>
            <tr><td class="td-l">After Commission</td>            <td class="td-r">₹960</td></tr>
            <tr><td class="td-l">Fuel Cost</td>                   <td class="td-r red">−₹150</td></tr>
            <tr><td class="td-l">Other Expenses</td>              <td class="td-r red">−₹0</td></tr>
            <tr><td class="td-l">Net Profit</td>                  <td class="td-r green">₹810</td></tr>
            <tr><td class="td-l">Hours Worked</td>                <td class="td-r">6 hrs</td></tr>
            <tr><td class="td-l">Real Hourly Rate</td>            <td class="td-r green">₹135/hr</td></tr>
          </table>
          <div style="margin-top:14px;background:#fef3e2;border:1.5px solid #fed7aa;border-radius:10px;padding:12px 14px">
            <p style="font-size:13px;color:#9a3412;margin:0">💡 The app shows ₹1,200 (₹200/hr), but your <strong>real take-home is ₹135/hr</strong> — a 32% difference after commission and fuel.</p>
          </div>
        </div>
      </div>

      <!-- Formula Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#eef3ff">🔢</div>
          <div>
            <div class="ef-card-head-t">All formulas used</div>
            <div class="ef-card-head-s">From gross earnings to real hourly rate</div>
          </div>
        </div>
        <div class="ef-card-body">
          <div class="formula-dark">
            <div class="formula-eq">Commission Amount = Gross Earnings × (Commission % ÷ 100)</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">After Commission = Gross Earnings − Commission Amount</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Net Profit = After Commission − Fuel − Other Expenses</div>
          </div>
          <div class="formula-dark" style="margin-bottom:16px">
            <div class="formula-eq">Real Hourly Rate = Net Profit ÷ Hours Worked</div>
          </div>
          <div class="vars-grid">
            <div class="var-box"><div class="var-letter">GE</div><div class="var-desc">Gross Earnings shown in the app</div></div>
            <div class="var-box"><div class="var-letter">C%</div><div class="var-desc">Platform commission percentage</div></div>
            <div class="var-box"><div class="var-letter">FC</div><div class="var-desc">Fuel cost for the session</div></div>
            <div class="var-box"><div class="var-letter">H</div><div class="var-desc">Total hours worked/online</div></div>
          </div>
          <div class="insight-box">
            <p><strong>Key insight:</strong> Always track fuel and maintenance separately from commission. Many gig workers underestimate fuel cost — over a month, this can be ₹3,000–6,000, significantly affecting your real hourly rate.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════
     ALL CALCULATORS GRID
═══════════════════════════════════════ -->
<section class="cn-section bg-paper" id="calculators">
  <div class="container-xl">
    <p class="eyebrow">All Tools</p>
    <h2 class="sec-h">Find Your Calculator</h2>
    <p class="sec-p" style="margin-bottom:28px">20+ free calculators across 5 categories.</p>

    <nav class="cat-tabs">
      <button class="ctab active" onclick="filterCat('all',this)">All</button>
      <button class="ctab tf"    onclick="filterCat('finance',this)">💰 Finance</button>
      <button class="ctab th"    onclick="filterCat('health',this)">❤️ Health</button>
      <button class="ctab tt"    onclick="filterCat('time',this)">🕐 Time &amp; Date</button>
      <button class="ctab td"    onclick="filterCat('discount',this)">🏷️ Discount</button>
      <button class="ctab ts"    onclick="filterCat('student',this)">🎓 Student</button>
    </nav>

    <div class="calcs-grid" id="calcsGrid">
      <?php
      $cards = [
        ['finance','emi-calculator.php','🏦','EMI Calculator','Monthly loan EMI with interest breakdown.','#1a4fd6','#eef3ff'],
        ['finance','gst-calculator.php','₹','GST Calculator','Compute GST and final price for any product.','#1a4fd6','#eef3ff'],
        ['finance','salary-calculator.php','💼','Salary Calculator','In-hand salary after tax and deductions.','#1a4fd6','#eef3ff'],
        ['finance','compound-interest.php','📈','Compound Interest','See how your investments grow over time.','#1a4fd6','#eef3ff'],
        ['finance','simple-interest.php','💹','Simple Interest','Interest on any principal, rate and time.','#1a4fd6','#eef3ff'],
        ['finance','fd-calculator.php','🏛️','FD Calculator','Fixed Deposit maturity and interest earned.','#1a4fd6','#eef3ff'],
        ['finance','rd-calculator.php','💰','RD Calculator','Recurring Deposit returns and maturity value.','#1a4fd6','#eef3ff'],
        ['finance','roi-calculator.php','📊','ROI Calculator','Return on investment, CAGR and net profit.','#1a4fd6','#eef3ff'],
        ['finance','breakeven-calculator.php','📉','Break-Even Calculator','Units & revenue needed to cover all costs.','#1a4fd6','#eef3ff'],
        ['finance','profit-margin-calculator.php','💹','Profit Margin','Gross, net & operating margin with markup %.','#1a4fd6','#eef3ff'],
        ['finance','invoice-calculator.php','🧾','Invoice Calculator','Build GST invoices with line items & totals.','#1a4fd6','#eef3ff'],
        ['finance','currency-converter.php','🌍','Currency Converter','Live exchange rates for 150+ currencies.','#1a4fd6','#eef3ff'],
        ['finance','gig-earnings-calculator.php','🛵','Gig Earnings Calculator','Real hourly income for Rapido, Ola, Swiggy & more.','#1a4fd6','#eef3ff'],
        ['health','bmi-calculator.php','⚖️','BMI Calculator','Body Mass Index and ideal weight range.','#059669','#ecfdf5'],
        ['health','calorie-calculator.php','🔥','Calorie Calculator','Daily calorie needs by age, weight and activity.','#059669','#ecfdf5'],
        ['health','water-intake-calculator.php','💧','Water Intake','Recommended daily water intake for your body.','#059669','#ecfdf5'],
        ['time','age-calculator.php','🎂','Age Calculator','Exact age in years, months and days.','#0057ff','#eef4ff'],
        ['time','date-difference.php','📅','Date Difference','Gap between two dates in days, months or years.','#0057ff','#eef4ff'],
        ['time','workdays-calculator.php','🗓️','Work Days Calculator','Working days between dates, no weekends.','#0057ff','#eef4ff'],
        ['time','time-duration-calculator.php','⏱️','Time Duration','Hours and minutes between any two times.','#0057ff','#eef4ff'],
        ['discount','percentage-calculator.php','%','Percentage Calculator','Percentages, ratios, increase and decrease.','#d97706','#fef9ee'],
        ['discount','discount-calculator.php','🏷️','Discount Calculator','Final price after any percentage discount.','#d97706','#fef9ee'],
        ['discount','fuel-cost-calculator.php','⛽','Fuel Cost Calculator','Estimate trip fuel cost by distance and mileage.','#d97706','#fef9ee'],
        ['discount','unit-converter.php','🔄','Unit Converter','Convert length, weight, temperature and more.','#d97706','#fef9ee'],
        ['student','student-percentage.php','📊','Percentage Calculator','Exam percentage from marks obtained.','#7c3aed','#f5f0ff'],
        ['student','grade-calculator.php','📝','Grade Calculator','Convert marks to letter grades easily.','#7c3aed','#f5f0ff'],
        ['student','gpa-calculator.php','🎓','GPA Calculator','Cumulative GPA across all subjects.','#7c3aed','#f5f0ff'],
        ['student','attendance-calculator.php','✅','Attendance Calculator','Check if attendance meets the threshold.','#7c3aed','#f5f0ff'],
      ];
      $arrow = '<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 6h10M6 1l5 5-5 5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>';
      foreach($cards as $c) {
        [$cat,$href,$ico,$name,$desc,$accent,$bg] = $c;
        echo '<a href="'.$href.'" class="cc" data-cat="'.$cat.'" style="--cc-accent:'.$accent.';--cc-bg:'.$bg.'">';
        echo '<div class="cc-ico">'.$ico.'</div>';
        echo '<p class="cc-name">'.htmlspecialchars($name).'</p>';
        echo '<p class="cc-desc">'.htmlspecialchars($desc).'</p>';
        echo '<span class="cc-cta">Free Calc '.$arrow.'</span>';
        echo '</a>';
      }
      ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</div>

<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>

<script>
/* ══════════════════════════════════════
   GIG EARNINGS CALCULATOR – Core Logic
═══════════════════════════════════════ */

function fmtINR(n) {
  const sign = n < 0 ? '-' : '';
  return sign + '₹' + Math.abs(n).toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 2 });
}
function fmtPct(n, d = 1) {
  return n.toFixed(d) + '%';
}

/* ── Platform presets ── */
function setPlatform(platform, btn) {
  document.querySelectorAll('.platform-pill').forEach(p => p.classList.remove('active'));
  btn.classList.add('active');

  const commInput = document.getElementById('commissionPct');
  switch(platform) {
    case 'rapido': commInput.value = 20; break;
    case 'ola':     commInput.value = 25; break;
    case 'swiggy':  commInput.value = 18; break;
    case 'none':    commInput.value = 0;  break;
    case 'custom':  /* leave as-is for manual entry */ break;
  }
}

/* ── Main calculation ── */
function calculateGig() {
  const gross       = parseFloat(document.getElementById('totalEarnings').value) || 0;
  const hours       = parseFloat(document.getElementById('hoursWorked').value)   || 0;
  const commPct     = parseFloat(document.getElementById('commissionPct').value) || 0;
  const fuel        = parseFloat(document.getElementById('fuelCost').value)      || 0;
  const otherExp    = parseFloat(document.getElementById('otherExpenses').value) || 0;
  const numTrips    = parseFloat(document.getElementById('numTrips').value)      || 0;
  const daysPerWeek = parseFloat(document.getElementById('daysPerWeek').value)   || 6;

  if (gross <= 0)  { alert('Please enter your Total Earnings for this session.'); return; }
  if (hours <= 0)  { alert('Please enter Hours Worked greater than 0.'); return; }

  // ── Core calculations ──
  const commission   = gross * commPct / 100;
  const afterComm    = gross - commission;
  const totalExp     = fuel + otherExp;
  const netProfit    = afterComm - totalExp;
  const hourlyRate   = netProfit / hours;
  const grossHourly  = gross / hours;

  const expenseRatio = gross > 0 ? (totalExp / gross) * 100 : 0;
  const netMargin    = gross > 0 ? (netProfit / gross) * 100 : 0;
  const fuelPctNet   = afterComm > 0 ? (fuel / afterComm) * 100 : 0;
  const takeHomePct  = gross > 0 ? (netProfit / gross) * 100 : 0;

  // Break-even: hours needed to cover expenses only (at gross hourly rate after comm)
  const afterCommHourly = afterComm / hours;
  const breakEvenHours  = afterCommHourly > 0 ? (totalExp / afterCommHourly) : 0;

  // ═══ Update DOM — Hero hourly rate ═══
  document.getElementById('hhRate').textContent = '₹' + hourlyRate.toFixed(2);
  document.getElementById('hhRate').style.color = hourlyRate >= 0 ? 'var(--gold)' : 'var(--red)';

  const diffPct = grossHourly > 0 ? ((grossHourly - hourlyRate) / grossHourly) * 100 : 0;
  document.getElementById('hhCompare').textContent =
    `App shows ₹${grossHourly.toFixed(2)}/hr gross — your real take-home is ${diffPct >= 0 ? diffPct.toFixed(1) + '% lower' : 'higher'} after deductions.`;

  // ═══ 4 Key Metrics ═══
  document.getElementById('resGross').textContent       = fmtINR(gross);
  document.getElementById('resCommission').textContent  = fmtINR(commission);
  document.getElementById('resCommissionPct').textContent = commPct + '% platform fee';
  document.getElementById('resExpenses').textContent    = fmtINR(totalExp);
  document.getElementById('resNetProfit').textContent   = fmtINR(netProfit);
  document.getElementById('resNetProfit').style.color   = netProfit >= 0 ? 'var(--green)' : 'var(--red)';

  // ═══ Per-trip stats ═══
  if (numTrips > 0) {
    document.getElementById('tripStatsRow').style.display = 'flex';
    document.getElementById('resPerTripGross').textContent = '₹' + (gross / numTrips).toFixed(2);
    document.getElementById('resPerTripNet').textContent   = '₹' + (netProfit / numTrips).toFixed(2);
    document.getElementById('resTripsPerHour').textContent = (numTrips / hours).toFixed(1);
  } else {
    document.getElementById('tripStatsRow').style.display = 'none';
  }

  // ═══ Session Breakdown table ═══
  document.getElementById('brkGross').textContent      = fmtINR(gross);
  document.getElementById('brkCommission').textContent = '−' + fmtINR(commission);
  document.getElementById('brkAfterComm').textContent  = fmtINR(afterComm);
  document.getElementById('brkFuel').textContent       = '−' + fmtINR(fuel);
  document.getElementById('brkOther').textContent      = '−' + fmtINR(otherExp);
  document.getElementById('brkNet').textContent        = fmtINR(netProfit);
  document.getElementById('brkNet').style.color        = netProfit >= 0 ? 'var(--green)' : 'var(--red)';
  document.getElementById('brkHours').textContent      = hours + ' hrs';
  document.getElementById('brkPerHour').textContent    = '₹' + hourlyRate.toFixed(2) + '/hr';
  document.getElementById('brkPerHour').style.color    = hourlyRate >= 0 ? 'var(--green)' : 'var(--red)';

  // ═══ Profitability Analysis table ═══
  document.getElementById('brkCommRate').textContent  = fmtPct(commPct);
  document.getElementById('brkExpRatio').textContent  = fmtPct(expenseRatio);
  document.getElementById('brkMargin').textContent    = fmtPct(netMargin);
  document.getElementById('brkMargin').style.color    = netMargin >= 0 ? 'var(--green)' : 'var(--red)';
  document.getElementById('brkFuelPct').textContent   = fmtPct(fuelPctNet);
  document.getElementById('brkTakeHome').textContent  = fmtPct(takeHomePct);
  document.getElementById('brkBE').textContent        =
    breakEvenHours > 0 && breakEvenHours < hours
      ? breakEvenHours.toFixed(2) + ' hrs to cover costs'
      : (totalExp === 0 ? 'No expenses — instant profit' : 'N/A');

  // ═══ Projections ═══
  document.getElementById('projDaysLabel').textContent = daysPerWeek;
  const projections = [
    { label: 'Per Day',   hours: hours,                multiplier: 1 },
    { label: 'Per Week',  hours: hours * daysPerWeek,  multiplier: daysPerWeek },
    { label: 'Per Month', hours: hours * daysPerWeek * 4.33, multiplier: daysPerWeek * 4.33 },
  ];

  const projBody = document.getElementById('projBody');
  projBody.innerHTML = projections.map(p => {
    const grossInc = gross * p.multiplier;
    const expInc    = totalExp * p.multiplier;
    const commInc   = commission * p.multiplier;
    const netInc    = netProfit * p.multiplier;
    return `
      <tr>
        <td style="font-weight:700">${p.label}</td>
        <td>${p.hours.toFixed(1)} hrs</td>
        <td class="pt-gross">${fmtINR(grossInc)}</td>
        <td class="pt-exp">−${fmtINR(expInc + commInc)}</td>
        <td class="pt-net">${fmtINR(netInc)}</td>
      </tr>`;
  }).join('');

  // Show results
  document.getElementById('gigPlaceholder').style.display = 'none';
  document.getElementById('gigResults').style.display = 'block';
}

/* ── Filter tabs ── */
function filterCat(category, btn) {
  document.querySelectorAll('.ctab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#calcsGrid .cc').forEach(card => {
    card.style.display = (category === 'all' || card.dataset.cat === category) ? 'block' : 'none';
  });
}

/* ── Enter key ── */
document.querySelectorAll('.gst-input').forEach(inp => {
  inp.addEventListener('keydown', e => { if (e.key === 'Enter') calculateGig(); });
});
</script>

</body>
</html>