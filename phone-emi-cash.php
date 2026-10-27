<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Phone EMI vs Cash Calculator | Should You Buy on EMI or Pay Cash? | CalcSpeed</title>
    <meta name="description" content="Free Phone EMI vs Cash Calculator — find out how much extra you pay buying a phone on EMI vs cash, and how much your saved cash could grow if invested instead. Make a smarter buying decision.">
    <meta name="keywords" content="Phone EMI vs Cash Calculator, EMI vs Cash, No Cost EMI Calculator, Mobile EMI Calculator, Should I buy on EMI, Smartphone Finance Calculator, EMI Interest Cost, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">

    <link rel="canonical" href="https://www.calcspeed.com/phone-emi-vs-cash-calculator">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Phone EMI vs Cash Calculator | CalcSpeed">
    <meta property="og:description" content="See exactly how much extra an EMI plan costs you vs paying cash — and what your money could earn if invested instead.">
    <meta property="og:url" content="https://www.calcspeed.com/phone-emi-vs-cash-calculator">
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
      "name":"Phone EMI vs Cash Calculator",
      "url":"https://www.calcspeed.com/phone-emi-vs-cash-calculator",
      "description":"Free calculator comparing buying a phone on EMI vs paying cash, including opportunity cost of invested savings.",
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
        background: #3f62f4;
        padding: 80px 0 60px;
      }
      .gst-title { font-weight:700; font-size:clamp(28px,4vw,42px); margin-bottom:10px; }
      .gst-sub   { opacity:.9; margin-bottom:40px; font-size:16px; }
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
        outline:none; border-color:var(--purple);
        box-shadow:0 0 0 3px rgba(124,58,237,.12);
      }
      .gst-select {
        height:48px; border-radius:8px; border:1.5px solid var(--border);
        width:100%; padding:0 14px; font-size:15px; color:var(--navy);
        background:#fff; cursor:pointer;
      }

      /* ── VS BADGE ── */
      .vs-divider {
        display:flex; align-items:center; justify-content:center;
        margin: 8px 0 20px;
      }
      .vs-badge {
        background:var(--navy); color:#fff; font-family:var(--fh);
        font-size:13px; font-weight:800; padding:8px 24px;
        border-radius:100px; letter-spacing:1px;
      }

      /* ── COMPARISON CARDS ── */
      .compare-grid { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-top:20px; }
      .compare-card {
        border-radius:14px; padding:22px; border:2px solid var(--border);
        position:relative; overflow:hidden;
      }
      .compare-card.winner {
        border-color: var(--green); background: #ecfdf5;
      }
      .compare-card.loser {
        border-color: var(--red); background: #fef2f2;
      }
      .cc-badge {
        position:absolute; top:14px; right:14px;
        font-size:11px; font-weight:800; font-family:var(--fh);
        padding:5px 12px; border-radius:100px; letter-spacing:.5px;
      }
      .cc-badge.win  { background:var(--green); color:#fff; }
      .cc-badge.lose { background:var(--red); color:#fff; }
      .cc-title { font-family:var(--fh); font-size:14px; font-weight:700; color:var(--navy); margin-bottom:6px; }
      .cc-icon { font-size:28px; margin-bottom:8px; }
      .cc-total { font-family:var(--fh); font-size:32px; font-weight:900; line-height:1; letter-spacing:-1px; margin-bottom:4px; }
      .cc-total.green { color:var(--green); }
      .cc-total.red   { color:var(--red); }
      .cc-sub { font-size:12px; color:var(--muted); }

      /* ── RESULT CARDS ── */
      .result-card {
        background:var(--paper); border-radius:12px; padding:18px 14px;
        text-align:center; border:1.5px solid var(--border); transition:transform .2s;
      }
      .result-card:hover { transform:translateY(-3px); }
      .rc-label { font-size:11px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--muted); margin-bottom:8px; }
      .rc-value { font-size:26px; font-weight:800; font-family:var(--fh); line-height:1.1; }
      .rc-sub   { font-size:12px; color:var(--muted); margin-top:4px; }

      /* ── VERDICT BANNER ── */
      .verdict-banner {
        border-radius:14px; padding:20px 24px; margin-top:20px;
        text-align:center;
      }
      .verdict-banner.cash { background:#ecfdf5; border:1.5px solid #a7f3d0; }
      .verdict-banner.emi  { background:#fef9ee; border:1.5px solid #fde68a; }
      .verdict-icon { font-size:32px; margin-bottom:8px; }
      .verdict-text { font-family:var(--fh); font-size:17px; font-weight:800; color:var(--navy); margin-bottom:4px; }
      .verdict-sub  { font-size:13px; color:var(--muted); }

      /* ── SECTION 1 ── */
      .s1 { padding:56px 5%; background:#fff; }
      .s1 .container { max-width:1100px; margin:0 auto; }
      .s1-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--purple); margin-bottom:12px; }
      .s1-h { font-family:var(--fh); font-size:clamp(24px,3vw,36px); font-weight:800; color:var(--navy); letter-spacing:-1.2px; line-height:1.1; margin-bottom:16px; }
      .s1-p { font-size:15px; color:var(--muted); line-height:1.8; margin-bottom:0; }
      .s1-accent { color:var(--purple); }

      /* ── STEP CARDS ── */
      .step-card { background:#fff; border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,.08); transition:.3s; }
      .step-card:hover { transform:translateY(-6px); }
      .step-icon  { font-size:32px; color:var(--purple); margin-bottom:10px; }
      .step-arrow { font-size:26px; color:var(--purple); }

      /* ── SECTION 3 ── */
      .s3 { padding:56px 5%; background:#fff; }
      .s3 .container { max-width:1100px; margin:0 auto; }
      .s3-header { text-align:center; margin-bottom:48px; }
      .s3-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--purple); margin-bottom:10px; }
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
      .td-r.purple{ color:var(--purple);}

      .formula-dark { background:var(--navy); border-radius:12px; padding:20px; text-align:center; margin-bottom:12px; }
      .formula-eq   { font-size:14px; font-weight:700; color:#fff; font-family:var(--fh); letter-spacing:.3px; line-height:1.8; }
      .formula-hint { font-size:11px; color:rgba(255,255,255,.38); margin-top:6px; }
      .vars-grid { display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-bottom:16px; }
      .var-box   { background:var(--paper); border:1px solid var(--border); border-radius:10px; padding:12px 10px; text-align:center; }
      .var-letter { font-family:var(--fh); font-size:18px; font-weight:800; color:var(--purple); line-height:1; margin-bottom:4px; }
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
      @media(max-width:768px) { .compare-grid { grid-template-columns:1fr; } }
      @media(max-width:640px) { .calcs-grid { grid-template-columns:1fr 1fr; } .gst-card { padding:24px 18px; } }
      @media(max-width:400px) { .calcs-grid { grid-template-columns:1fr; } }
    </style>
</head>
<body>
<div class="body-inner">

<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════
     HERO – PHONE EMI vs CASH CALCULATOR
═══════════════════════════════════════ -->
<section class="gst-section">
  <div class="container text-center">
    <h1 class="gst-title text-white">Phone EMI vs Cash Calculator</h1>
    <p class="gst-sub text-white">Find out exactly how much extra an EMI plan costs you — and what your money could earn if invested instead.</p>

    <div class="gst-card mx-auto pt-4">

      <!-- ── ROW 1: Phone & Cash details ── -->
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="gst-label">📱 Phone Price (Cash Price, ₹)</label>
          <input type="number" id="phonePrice" class="gst-input" placeholder="e.g. 60,000" min="0">
        </div>
        <div class="col-md-6">
          <label class="gst-label">💵 Total EMI Plan Cost (₹) <small style="font-weight:400;color:#999">incl. interest/processing fee</small></label>
          <input type="number" id="emiTotalCost" class="gst-input" placeholder="e.g. 66,000" min="0">
        </div>
      </div>

      <!-- ── ROW 2: EMI details ── -->
      <div class="row g-3 mb-3">
        <div class="col-md-4">
          <label class="gst-label">📅 EMI Tenure (Months)</label>
          <input type="number" id="emiMonths" class="gst-input" placeholder="e.g. 12" min="1">
        </div>
        <div class="col-md-4">
          <label class="gst-label">💰 Down Payment (₹) <small style="font-weight:400;color:#999">if any</small></label>
          <input type="number" id="downPayment" class="gst-input" placeholder="e.g. 6,000" min="0" value="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">📈 If invested, expected annual return (%)</label>
          <input type="number" id="investReturn" class="gst-input" placeholder="e.g. 7 (FD/Debt fund)" min="0" max="50" value="7">
        </div>
      </div>

      <div class="row g-3 mb-4">
        <div class="col-12">
          <button onclick="calculateEmiVsCash()" class="btn w-100" style="height:48px;font-size:16px;font-weight:700;border-radius:8px;background:green;border:none;color:#fff;">
            ⚡ Compare EMI vs Cash
          </button>
        </div>
      </div>

      <hr class="my-3">

      <!-- ── RESULTS ── -->
      <div id="evcResults" style="display:none">

        <!-- Comparison cards -->
        <div class="compare-grid">
          <div class="compare-card" id="cashCard">
            <div class="cc-badge" id="cashBadge"></div>
            <div class="cc-icon">💵</div>
            <div class="cc-title">Pay Cash Today</div>
            <div class="cc-total green" id="cashTotal">₹0</div>
            <div class="cc-sub" id="cashSub">Total amount paid</div>
          </div>
          <div class="compare-card" id="emiCard">
            <div class="cc-badge" id="emiBadge"></div>
            <div class="cc-icon">💳</div>
            <div class="cc-title">Buy on EMI</div>
            <div class="cc-total red" id="emiTotal">₹0</div>
            <div class="cc-sub" id="emiSub">Total amount paid over tenure</div>
          </div>
        </div>

        <!-- Verdict -->
        <div class="verdict-banner" id="verdictBanner">
          <div class="verdict-icon" id="verdictIcon">💡</div>
          <div class="verdict-text" id="verdictText">—</div>
          <div class="verdict-sub" id="verdictSub">—</div>
        </div>

        <!-- 4 Key Metrics -->
        <div class="row g-3 text-center mt-3 mb-3">
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Extra EMI Cost</div>
              <div class="rc-value" id="resExtraCost" style="color:var(--red)">₹0</div>
              <div class="rc-sub">over cash price</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Monthly EMI</div>
              <div class="rc-value" id="resMonthlyEmi" style="color:var(--blue)">₹0</div>
              <div class="rc-sub" id="resEmiMonths">per month</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Effective Interest Rate</div>
              <div class="rc-value" id="resEffRate" style="color:var(--amber)">0%</div>
              <div class="rc-sub">approx. annualized</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Investment Growth</div>
              <div class="rc-value" id="resInvestGrowth" style="color:var(--green)">₹0</div>
              <div class="rc-sub">if cash invested instead</div>
            </div>
          </div>
        </div>

        <!-- Detailed Breakdown -->
        <div class="row g-3 mt-1">
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📋 Cost Comparison</div>
              <table class="loan-table">
                <tr><td class="td-l">Phone Cash Price</td>          <td class="td-r blue"   id="brkPhonePrice">₹0</td></tr>
                <tr><td class="td-l">Down Payment (EMI)</td>         <td class="td-r"        id="brkDownPay">₹0</td></tr>
                <tr><td class="td-l">Financed Amount</td>            <td class="td-r"        id="brkFinanced">₹0</td></tr>
                <tr><td class="td-l">Total EMI Cost</td>             <td class="td-r red"    id="brkEmiTotal">₹0</td></tr>
                <tr><td class="td-l">Extra Paid (Interest/Fees)</td> <td class="td-r red"    id="brkExtra">₹0</td></tr>
                <tr><td class="td-l">Extra as % of Price</td>        <td class="td-r amber"  id="brkExtraPct">0%</td></tr>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📈 If You Invested the Cash Instead</div>
              <table class="loan-table">
                <tr><td class="td-l">Amount Invested</td>          <td class="td-r blue"   id="brkInvested">₹0</td></tr>
                <tr><td class="td-l">Expected Annual Return</td>   <td class="td-r amber"  id="brkReturnRate">0%</td></tr>
                <tr><td class="td-l">Investment Period</td>        <td class="td-r"        id="brkPeriod">0 months</td></tr>
                <tr><td class="td-l">Maturity Value</td>           <td class="td-r green"  id="brkMaturity">₹0</td></tr>
                <tr><td class="td-l">Interest Earned</td>          <td class="td-r green"  id="brkInterestEarned">₹0</td></tr>
                <tr><td class="td-l">True Cost of EMI vs Investing</td><td class="td-r red" id="brkTrueCost">₹0</td></tr>
              </table>
            </div>
          </div>
        </div>

      </div><!-- /evcResults -->

      <!-- Placeholder -->
      <div id="evcPlaceholder" class="text-center py-3" style="color:var(--muted)">
        <span style="font-size:36px">📱</span>
        <p style="margin-top:8px;font-size:14px">Enter the phone's <strong>cash price</strong> and the <strong>total EMI plan cost</strong>, then click <strong>Compare</strong>.</p>
      </div>

    </div><!-- /gst-card -->
  </div>
</section>


<!-- ══════════════════════════════════════
     SECTION 1 – What this calculator does
═══════════════════════════════════════ -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">EMI vs Cash</p>
    <h2 class="s1-h">Is "No Cost EMI" really <span class="s1-accent">no cost</span>?</h2>
    <p class="s1-p">Phones advertised with <strong>"No Cost EMI"</strong> often hide the interest cost inside the product price itself — the cash discount you'd get by paying upfront is removed when you choose EMI. This calculator strips away the marketing and shows you the <strong>real difference</strong> between paying cash today vs spreading payments over time.</p>
    <p class="s1-p" style="margin-top:12px">It also shows the <strong>opportunity cost</strong> — if you have the cash ready but choose EMI to "save" your money, what could that cash have earned if invested in a Fixed Deposit, debt fund, or even a simple recurring deposit?</p>
    <p class="s1-p" style="margin-top:12px">In most cases, if you genuinely have the cash available and the EMI plan has any added interest or processing fee, <strong>paying cash is almost always cheaper</strong> — unless the EMI is truly zero-cost AND you can earn more by investing the cash than the EMI's hidden cost.</p>
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
          <div class="step-icon">📱</div>
          <h4>Cash Price</h4>
          <p>Enter the phone's price if you pay in full today.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">💳</div>
          <h4>EMI Total Cost</h4>
          <p>Enter the total amount you'll pay across all EMIs (check your bank statement).</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">📅</div>
          <h4>Tenure &amp; Down Payment</h4>
          <p>Enter EMI months and any down payment you'll make.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">📈</div>
          <h4>Investment Return</h4>
          <p>Enter what your saved cash could earn (FD ~7%, debt fund ~8%).</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2 p-3">
        <div class="step-card p-4">
          <div class="step-icon">⚡</div>
          <h4>Get Verdict</h4>
          <p>See which option saves you money and by how much.</p>
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
      <p class="s3-sub">A real-world phone purchase comparison.</p>
    </div>
    <div class="s3-grid">

      <!-- Example Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#f5f0ff">📱</div>
          <div>
            <div class="ef-card-head-t">Worked example — ₹60,000 phone</div>
            <div class="ef-card-head-s">Cash ₹60,000 vs EMI total ₹66,000 over 12 months</div>
          </div>
        </div>
        <div class="ef-card-body">
          <table class="loan-table">
            <tr><td class="td-l">Phone Cash Price</td>        <td class="td-r blue">₹60,000</td></tr>
            <tr><td class="td-l">Total EMI Plan Cost</td>     <td class="td-r red">₹66,000</td></tr>
            <tr><td class="td-l">Extra Cost on EMI</td>       <td class="td-r red">₹6,000</td></tr>
            <tr><td class="td-l">Extra as % of price</td>     <td class="td-r amber">10%</td></tr>
            <tr><td class="td-l">Monthly EMI</td>             <td class="td-r blue">₹5,500</td></tr>
            <tr><td class="td-l">Effective Annual Rate</td>   <td class="td-r amber">~18.5%</td></tr>
            <tr><td class="td-l">If ₹60,000 invested @ 7% for 1 yr</td><td class="td-r green">₹64,200</td></tr>
            <tr><td class="td-l">Investment Earnings</td>     <td class="td-r green">₹4,200</td></tr>
            <tr><td class="td-l">Total Loss Choosing EMI</td> <td class="td-r red">₹10,200</td></tr>
          </table>
          <div style="margin-top:14px;background:#fef2f2;border:1.5px solid #fca5a5;border-radius:10px;padding:12px 14px">
            <p style="font-size:13px;color:#991b1b;margin:0">❌ Choosing this EMI plan costs you <strong>₹10,200 more</strong> than paying cash AND investing the savings — nearly 17% of the phone's price.</p>
          </div>
        </div>
      </div>

      <!-- Formula Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#eef3ff">🔢</div>
          <div>
            <div class="ef-card-head-t">All formulas used</div>
            <div class="ef-card-head-s">EMI cost, effective rate &amp; opportunity cost</div>
          </div>
        </div>
        <div class="ef-card-body">
          <div class="formula-dark">
            <div class="formula-eq">Extra EMI Cost = Total EMI Cost − Cash Price</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Monthly EMI = (Total EMI Cost − Down Payment) ÷ Tenure</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Investment Maturity = P × (1 + r/12)<sup>n</sup></div>
            <div class="formula-hint">P = cash that would've been paid, r = annual return, n = months</div>
          </div>
          <div class="formula-dark" style="margin-bottom:16px">
            <div class="formula-eq">True Cost of EMI = Extra EMI Cost + Investment Earnings Foregone</div>
          </div>
          <div class="vars-grid">
            <div class="var-box"><div class="var-letter">CP</div><div class="var-desc">Cash Price of the phone</div></div>
            <div class="var-box"><div class="var-letter">ET</div><div class="var-desc">Total cost across all EMIs</div></div>
            <div class="var-box"><div class="var-letter">r</div><div class="var-desc">Annual return if cash invested</div></div>
            <div class="var-box"><div class="var-letter">n</div><div class="var-desc">EMI tenure in months</div></div>
          </div>
          <div class="insight-box">
            <p><strong>Key insight:</strong> Even "No Cost EMI" often removes a 5-10% cash discount that's available to upfront buyers. Always ask the seller for the cash price separately before comparing.</p>
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
        ['finance','phone-emi-vs-cash-calculator.php','📱','Phone EMI vs Cash','Compare EMI cost vs paying cash + investing.','#1a4fd6','#eef3ff'],
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
   PHONE EMI vs CASH CALCULATOR – Core Logic
═══════════════════════════════════════ */

function fmtINR(n) {
  const sign = n < 0 ? '-' : '';
  return sign + '₹' + Math.abs(n).toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 2 });
}
function fmtPct(n, d = 1) {
  return n.toFixed(d) + '%';
}

function calculateEmiVsCash() {
  const phonePrice   = parseFloat(document.getElementById('phonePrice').value)   || 0;
  const emiTotalCost = parseFloat(document.getElementById('emiTotalCost').value) || 0;
  const emiMonths    = parseFloat(document.getElementById('emiMonths').value)    || 0;
  const downPayment  = parseFloat(document.getElementById('downPayment').value)  || 0;
  const investReturn = parseFloat(document.getElementById('investReturn').value) || 0;

  // ── Validation ──
  if (phonePrice <= 0)   { alert('Please enter the Phone Cash Price.'); return; }
  if (emiTotalCost <= 0) { alert('Please enter the Total EMI Plan Cost.'); return; }
  if (emiMonths <= 0)    { alert('Please enter EMI Tenure in months.'); return; }
  if (downPayment > emiTotalCost) { alert('Down payment cannot exceed total EMI cost.'); return; }

  // ── Core calculations ──
  const extraCost   = emiTotalCost - phonePrice;        // Could be negative if EMI is cheaper
  const financed    = emiTotalCost - downPayment;
  const monthlyEmi  = financed / emiMonths;
  const extraPct    = (extraCost / phonePrice) * 100;

  // ── Effective annualized interest rate (approx, using average balance method) ──
  // Using simplified formula: rate ≈ (2 * n * extraCost) / (financed * (n+1)) * 100   ... approximate flat-to-reducing conversion
  let effRate = 0;
  if (financed > 0 && emiMonths > 0) {
    const n = emiMonths;
    effRate = (2 * 12 * extraCost) / (financed * (n + 1)) * 100;
    if (effRate < 0) effRate = 0;
  }

  // ── Investment scenario: invest the cash (phonePrice) for emiMonths at investReturn% annual ──
  const monthlyRate = investReturn / 100 / 12;
  const maturity = phonePrice * Math.pow(1 + monthlyRate, emiMonths);
  const interestEarned = maturity - phonePrice;

  // ── True cost of choosing EMI ──
  // If you pay cash, you spend phonePrice now (lose potential investment gains on that money)
  // If you choose EMI, you spend emiTotalCost spread out, but keep phonePrice invested
  // True cost of EMI = extraCost paid - what cash would've earned if NOT spent (i.e., kept earning while EMI is paid off gradually)
  // Simplified: True cost = extraCost + interestEarned (since with cash you'd both save extraCost AND earn interestEarned by not needing that cash locked)
  // Actually: if you pay cash, you can't invest that money. If you do EMI, you CAN invest the cash you didn't spend.
  // So: Cash option total "cost" = phonePrice (opportunity: could have invested, but you spent it)
  //     EMI option total "cost" = emiTotalCost - interestEarned (because cash stayed invested and grew)
  const emiEffectiveCost = emiTotalCost - interestEarned;
  const trueCostDiff = emiEffectiveCost - phonePrice; // positive = EMI is worse even after investing

  // ═══ Update DOM ═══

  // Comparison cards
  document.getElementById('cashTotal').textContent = fmtINR(phonePrice);
  document.getElementById('emiTotal').textContent  = fmtINR(emiTotalCost);
  document.getElementById('emiSub').textContent    = `Over ${emiMonths} months`;

  // Determine winner
  const cashCard = document.getElementById('cashCard');
  const emiCard  = document.getElementById('emiCard');
  const cashBadge = document.getElementById('cashBadge');
  const emiBadge  = document.getElementById('emiBadge');

  cashCard.className = 'compare-card';
  emiCard.className  = 'compare-card';
  cashBadge.className = 'cc-badge';
  emiBadge.className  = 'cc-badge';
  cashBadge.textContent = '';
  emiBadge.textContent  = '';

  if (trueCostDiff > 0) {
    // Cash wins
    cashCard.classList.add('winner');
    emiCard.classList.add('loser');
    cashBadge.classList.add('win'); cashBadge.textContent = '✓ BETTER CHOICE';
    emiBadge.classList.add('lose'); emiBadge.textContent  = '✗ COSTS MORE';

    document.getElementById('verdictBanner').className = 'verdict-banner cash';
    document.getElementById('verdictIcon').textContent = '💵';
    document.getElementById('verdictText').textContent = `Pay Cash — You Save ${fmtINR(trueCostDiff)}`;
    document.getElementById('verdictSub').textContent  =
      `Even after investing your cash at ${investReturn}% for ${emiMonths} months, paying cash today is the smarter choice by ${fmtINR(Math.abs(trueCostDiff))}.`;
  } else if (trueCostDiff < 0) {
    // EMI wins
    emiCard.classList.add('winner');
    cashCard.classList.add('loser');
    emiBadge.classList.add('win'); emiBadge.textContent  = '✓ BETTER CHOICE';
    cashBadge.classList.add('lose'); cashBadge.textContent = '✗ COSTS MORE (opportunity)';

    document.getElementById('verdictBanner').className = 'verdict-banner emi';
    document.getElementById('verdictIcon').textContent = '💳';
    document.getElementById('verdictText').textContent = `EMI is Better — You Gain ${fmtINR(Math.abs(trueCostDiff))}`;
    document.getElementById('verdictSub').textContent  =
      `By investing your cash at ${investReturn}% instead of spending it, you come out ahead by ${fmtINR(Math.abs(trueCostDiff))} compared to paying cash now.`;
  } else {
    cashCard.classList.add('winner');
    emiCard.classList.add('winner');
    document.getElementById('verdictBanner').className = 'verdict-banner cash';
    document.getElementById('verdictIcon').textContent = '⚖️';
    document.getElementById('verdictText').textContent = 'Both Options Are Roughly Equal';
    document.getElementById('verdictSub').textContent  = 'There is no meaningful financial difference between the two options.';
  }

  // 4 Key Metrics
  document.getElementById('resExtraCost').textContent = (extraCost >= 0 ? '' : '-') + fmtINR(extraCost);
  document.getElementById('resExtraCost').style.color = extraCost > 0 ? 'var(--red)' : 'var(--green)';
  document.getElementById('resMonthlyEmi').textContent = fmtINR(monthlyEmi);
  document.getElementById('resEmiMonths').textContent  = `for ${emiMonths} months`;
  document.getElementById('resEffRate').textContent    = fmtPct(effRate);
  document.getElementById('resInvestGrowth').textContent = fmtINR(interestEarned);

  // Breakdown table 1 — Cost Comparison
  document.getElementById('brkPhonePrice').textContent = fmtINR(phonePrice);
  document.getElementById('brkDownPay').textContent    = fmtINR(downPayment);
  document.getElementById('brkFinanced').textContent   = fmtINR(financed);
  document.getElementById('brkEmiTotal').textContent   = fmtINR(emiTotalCost);
  document.getElementById('brkExtra').textContent      = (extraCost >= 0 ? '' : '-') + fmtINR(extraCost);
  document.getElementById('brkExtra').style.color      = extraCost > 0 ? 'var(--red)' : 'var(--green)';
  document.getElementById('brkExtraPct').textContent   = fmtPct(extraPct);
  document.getElementById('brkExtraPct').style.color   = extraPct > 0 ? 'var(--red)' : 'var(--green)';

  // Breakdown table 2 — Investment scenario
  document.getElementById('brkInvested').textContent      = fmtINR(phonePrice);
  document.getElementById('brkReturnRate').textContent    = fmtPct(investReturn);
  document.getElementById('brkPeriod').textContent        = emiMonths + ' months';
  document.getElementById('brkMaturity').textContent      = fmtINR(maturity);
  document.getElementById('brkInterestEarned').textContent = fmtINR(interestEarned);
  document.getElementById('brkTrueCost').textContent      =
    (trueCostDiff >= 0 ? '' : '-') + fmtINR(trueCostDiff) + (trueCostDiff >= 0 ? ' (EMI costs more)' : ' (EMI saves more)');
  document.getElementById('brkTrueCost').style.color = trueCostDiff >= 0 ? 'var(--red)' : 'var(--green)';

  // Show results
  document.getElementById('evcPlaceholder').style.display = 'none';
  document.getElementById('evcResults').style.display = 'block';
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
  inp.addEventListener('keydown', e => { if (e.key === 'Enter') calculateEmiVsCash(); });
});
</script>

</body>
</html>