<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary SEO -->
    <title>Free ROI Calculator Online | Return on Investment Calculator | CalcSpeed</title>
    <meta name="title" content="Free ROI Calculator Online | Return on Investment Calculator | CalcSpeed">
    <meta name="description" content="Calculate Return on Investment (ROI) instantly with CalcSpeed's free ROI Calculator. Get accurate ROI percentage, net profit, annualized ROI, and break-even analysis for any business investment.">
    <meta name="keywords" content="ROI Calculator, Return on Investment Calculator, Business ROI Calculator, Investment Return Calculator, Net Profit Calculator, Annualized ROI, Break-even Calculator, Free ROI Calculator, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.calcspeed.com/roi-calculator">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Free ROI Calculator Online | CalcSpeed">
    <meta property="og:description" content="Calculate ROI for any business investment instantly. Get net profit, ROI %, annualized return and break-even analysis.">
    <meta property="og:url" content="https://www.calcspeed.com/roi-calculator">
    <meta property="og:site_name" content="CalcSpeed">
    <meta property="og:image" content="https://www.calcspeed.com/img/logo-dark1.png">
    <meta property="og:image:alt" content="CalcSpeed Logo">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Free ROI Calculator Online | CalcSpeed">
    <meta name="twitter:description" content="Calculate your Return on Investment, net profit, and annualized ROI instantly with CalcSpeed ROI Calculator.">
    <meta name="twitter:image" content="https://www.calcspeed.com/images/roi-calculator-banner.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/logo-dark1.png">
    <link rel="apple-touch-icon" href="img/logo-dark1.png">

    <!-- Theme Color -->
    <meta name="theme-color" content="#0d6efd">

    <!-- Stylesheets -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"WebApplication",
      "name":"ROI Calculator",
      "url":"https://www.calcspeed.com/roi-calculator",
      "description":"Free ROI Calculator to calculate return on investment, net profit, and annualized returns.",
      "applicationCategory":"FinanceApplication",
      "operatingSystem":"All",
      "offers":{
        "@type":"Offer",
        "price":"0",
        "priceCurrency":"USD"
      }
    }
    </script>

    <style>
      *, *::before, *::after { box-sizing: border-box; }

      :root {
        --navy: #0a1628;
        --blue: #1a4fd6;
        --gold: #f5a623;
        --muted: #64748b;
        --border: rgba(10,22,40,.09);
        --paper: #f2f4f9;
        --white: #fff;
        --green: #059669;
        --red: #dc2626;
        --fh: 'Outfit', sans-serif;
        --fb: 'Plus Jakarta Sans', sans-serif;
      }

      input:not([type="checkbox"]):not([type="radio"]), select {
        line-height: 18px;
        padding: 10px 16px;
        min-height: 40px;
        font-size: 16px;
      }

      /* ── HERO SECTION ── */
      .gst-section {
        background: linear-gradient(135deg, #2250fc, #4f6cf0);
        padding: 80px 0 60px;
      }
      .gst-title {
        font-weight: 700;
        font-size: clamp(28px, 4vw, 42px);
        margin-bottom: 10px;
      }
      .gst-sub {
        opacity: .9;
        margin-bottom: 40px;
        font-size: 16px;
      }
      .gst-card {
        background: #fff;
        padding: 40px;
        border-radius: 14px;
        max-width: 980px;
        box-shadow: 0 25px 50px rgba(0,0,0,.2);
        color: #333;
      }
      .gst-label {
        font-weight: 700;
        margin-bottom: 6px;
        font-size: 14px;
        color: var(--navy);
        display: block;
      }
      .gst-input {
        height: 48px;
        border-radius: 8px;
        border: 1.5px solid var(--border);
        width: 100%;
        padding: 0 14px;
        font-size: 16px;
        color: var(--navy);
        transition: border-color .2s;
      }
      .gst-input:focus {
        outline: none;
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(26,79,214,.12);
      }
      .gst-select {
        height: 48px;
        border-radius: 8px;
        border: 1.5px solid var(--border);
        width: 100%;
        padding: 0 14px;
        font-size: 15px;
        color: var(--navy);
        background: #fff;
        cursor: pointer;
      }

      /* Result Numbers */
      .gst-number { font-size: 32px; font-weight: 700; line-height: 1.1; }
      .gst-text   { font-size: 14px; color: #666; margin-top: 4px; }

      /* Result Cards */
      .result-card {
        background: var(--paper);
        border-radius: 12px;
        padding: 20px 16px;
        text-align: center;
        border: 1.5px solid var(--border);
        transition: transform .2s;
      }
      .result-card:hover { transform: translateY(-3px); }
      .result-card .label {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: var(--muted);
        margin-bottom: 8px;
      }

      /* ROI Meter */
      .roi-meter-wrap {
        margin-top: 24px;
        background: var(--paper);
        border-radius: 14px;
        padding: 20px 24px;
        border: 1.5px solid var(--border);
      }
      .roi-meter-label {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .5px;
        color: var(--muted);
        margin-bottom: 10px;
      }
      .roi-meter-track {
        height: 12px;
        border-radius: 100px;
        background: #e2e8f0;
        overflow: hidden;
        position: relative;
      }
      .roi-meter-fill {
        height: 100%;
        border-radius: 100px;
        background: linear-gradient(90deg, #059669, #34d399);
        width: 0%;
        transition: width .7s cubic-bezier(.4,0,.2,1);
      }
      .roi-meter-fill.negative {
        background: linear-gradient(90deg, #dc2626, #f87171);
      }
      .roi-verdict {
        margin-top: 12px;
        font-size: 13px;
        font-weight: 600;
        padding: 8px 14px;
        border-radius: 8px;
        display: inline-block;
      }
      .verdict-good    { background: #ecfdf5; color: #059669; }
      .verdict-average { background: #fef9ee; color: #d97706; }
      .verdict-poor    { background: #fef2f2; color: #dc2626; }

      /* ── SECTION 1 ── */
      .s1 { padding: 64px 5%; background: #fff; }
      .s1 .container { max-width: 1100px; margin: 0 auto; }
      .s1-eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 12px; }
      .s1-h { font-family: var(--fh); font-size: clamp(24px,3vw,38px); font-weight: 800; color: var(--navy); letter-spacing: -1.2px; line-height: 1.1; margin-bottom: 16px; }
      .s1-p { font-size: 15px; color: var(--muted); line-height: 1.8; margin-bottom: 0; }
      .s1-accent { color: var(--blue); }

      /* ── STEP CARDS ── */
      .step-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        transition: .3s;
      }
      .step-card:hover { transform: translateY(-6px); }
      .step-icon { font-size: 32px; color: #1a4fd6; margin-bottom: 10px; }
      .step-arrow { font-size: 26px; color: #2250fc; }

      /* ── SECTION 3 – Example + Formula ── */
      .s3 { padding: 64px 5%; background: #fff; }
      .s3 .container { max-width: 1100px; margin: 0 auto; }
      .s3-header { text-align: center; margin-bottom: 48px; }
      .s3-eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 10px; }
      .s3-h { font-family: var(--fh); font-size: clamp(24px,3vw,36px); font-weight: 800; color: var(--navy); letter-spacing: -1px; line-height: 1.1; margin-bottom: 8px; }
      .s3-sub { font-size: 14px; color: var(--muted); }
      .s3-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }

      .ef-card { border: 1.5px solid var(--border); border-radius: 18px; overflow: hidden; }
      .ef-card-head { padding: 18px 24px; border-bottom: 1.5px solid var(--border); background: var(--paper); display: flex; align-items: center; gap: 12px; }
      .ef-card-head-ico { width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0; }
      .ef-card-head-t { font-family: var(--fh); font-size: 15px; font-weight: 700; color: var(--navy); }
      .ef-card-head-s { font-size: 12px; color: var(--muted); margin-top: 2px; }
      .ef-card-body { padding: 24px; background: #fff; }

      .loan-table { width: 100%; border-collapse: collapse; }
      .loan-table tr { border-bottom: 1px solid var(--border); }
      .loan-table tr:last-child { border-bottom: none; }
      .loan-table td { padding: 10px 0; font-size: 14px; }
      .loan-table .td-l { color: var(--muted); font-weight: 500; }
      .loan-table .td-r { font-weight: 700; color: var(--navy); text-align: right; }
      .td-r.green { color: #059669; }
      .td-r.amber { color: #d97706; }
      .td-r.blue  { color: var(--blue); }
      .td-r.red   { color: #dc2626; }

      .progress-wrap { margin-top: 16px; }
      .progress-label { display: flex; justify-content: space-between; font-size: 11px; font-weight: 600; letter-spacing: .5px; text-transform: uppercase; margin-bottom: 6px; }
      .progress-label span:first-child { color: var(--green); }
      .progress-label span:last-child  { color: var(--blue); }
      .progress-track { height: 7px; border-radius: 100px; background: var(--paper); overflow: hidden; border: 1px solid var(--border); }
      .progress-fill  { height: 100%; border-radius: 100px; background: var(--green); width: 44.4%; }

      .formula-dark { background: var(--navy); border-radius: 12px; padding: 22px; text-align: center; margin-bottom: 16px; }
      .formula-eq   { font-size: 17px; font-weight: 700; color: #fff; font-family: var(--fh); letter-spacing: .3px; line-height: 1.7; }
      .formula-hint { font-size: 11px; color: rgba(255,255,255,.38); margin-top: 8px; }
      .vars-grid    { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 16px; }
      .var-box      { background: var(--paper); border: 1px solid var(--border); border-radius: 10px; padding: 12px 10px; text-align: center; }
      .var-letter   { font-family: var(--fh); font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1; margin-bottom: 4px; }
      .var-desc     { font-size: 11px; color: var(--muted); line-height: 1.4; }
      .insight-box  { background: #fffbf0; border: 1.5px solid #fde68a; border-radius: 12px; padding: 14px 16px; }
      .insight-box p { font-size: 13px; color: #92400e; line-height: 1.65; margin: 0; }
      .insight-box strong { color: #78350f; }

      /* ── CALC GRID ── */
      *, *::before, *::after { box-sizing: border-box; }
      :root {
        --navy: #0a1628; --navy2: #0d1e38; --navy3: #162340;
        --blue: #1a4fd6; --blue2: #1040b8;
        --gold: #f5a623; --gold2: #ffbe4d; --gold3: #ffd980;
        --white: #ffffff; --off: #f7f8fc; --paper: #f2f4f9;
        --muted: #64748b; --border: rgba(10,22,40,0.09);
        --r: 16px; --fh: 'Outfit', sans-serif; --fb: 'Plus Jakarta Sans', sans-serif;
        --shadow: 0 4px 24px rgba(10,22,40,0.08);
      }
      .cn-section { padding: 72px 5%; }
      .cn-section.bg-paper { background: var(--paper); }
      .container-xl { max-width: 1200px; margin: 0 auto; }
      .eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 10px; }
      .sec-h { font-family: var(--fh); font-size: clamp(28px,4vw,48px); font-weight: 800; line-height: 1.05; letter-spacing: -1.5px; color: var(--navy); margin-bottom: 14px; }
      .sec-p { font-size: 16px; color: var(--muted); max-width: 500px; line-height: 1.65; }

      .cat-tabs { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 28px; }
      .ctab { padding: 8px 18px; border-radius: 100px; font-family: var(--fh); font-size: 13px; font-weight: 600; border: 1.5px solid var(--border); background: var(--white); color: var(--muted); cursor: pointer; transition: all .2s; }
      .ctab:hover { border-color: var(--navy); color: var(--navy); }
      .ctab.active    { background: var(--navy); border-color: var(--navy); color: #fff; }
      .ctab.active.tf { background: var(--blue); border-color: var(--blue); color: #fff; }
      .ctab.active.th { background: #059669; border-color: #059669; color: #fff; }
      .ctab.active.tt { background: #0057ff; border-color: #0057ff; color: #fff; }
      .ctab.active.td { background: #d97706; border-color: #d97706; color: #fff; }
      .ctab.active.ts { background: #7c3aed; border-color: #7c3aed; color: #fff; }

      .calcs-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(210px,1fr)); gap: 14px; }
      .cc { background: whitesmoke; border-radius: var(--r); border: 1.5px solid var(--border); padding: 22px 18px 18px; display: flex; flex-direction: column; transition: transform .22s, box-shadow .22s, border-color .2s; position: relative; overflow: hidden; text-decoration: none; }
      .cc::after { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: var(--cc-accent, var(--blue)); opacity: 0; transition: opacity .2s; }
      .cc:hover { transform: translateY(-6px); box-shadow: 0 18px 40px rgba(10,22,40,.1); border-color: rgba(10,22,40,.15); }
      .cc:hover::after { opacity: 1; }
      .cc-ico { width: 46px; height: 46px; border-radius: 13px; background: var(--cc-bg, #eef3ff); display: flex; align-items: center; justify-content: center; font-size: 21px; margin-bottom: 13px; transition: transform .2s; }
      .cc:hover .cc-ico { transform: scale(1.1) rotate(-6deg); }
      .cc-name { font-family: var(--fh); font-size: 16px; font-weight: 700; color: var(--navy); margin-bottom: 5px; line-height: 1.2; }
      .cc-desc { font-size: 12px; color: var(--muted); line-height: 1.5; flex: 1; margin-bottom: 13px; }
      .cc-cta { font-family: var(--fh); font-size: 12px; font-weight: 700; color: var(--cc-accent, var(--blue)); display: flex; align-items: center; gap: 4px; text-transform: uppercase; letter-spacing: .5px; }
      .cc-cta svg { transition: transform .2s; }
      .cc:hover .cc-cta svg { transform: translateX(4px); }

      @media(max-width:700px) {
        .s3-grid { grid-template-columns: 1fr; }
        .vars-grid { grid-template-columns: 1fr 1fr; }
      }
      @media(max-width:640px) {
        .calcs-grid { grid-template-columns: 1fr 1fr; }
        .gst-card { padding: 24px 18px; }
      }
      @media(max-width:400px) {
        .calcs-grid { grid-template-columns: 1fr; }
      }
    </style>
</head>

<body>
<div class="body-inner">

<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════
     HERO – ROI CALCULATOR
═══════════════════════════════════════ -->
<section class="gst-section">
  <div class="container text-center">
    <h1 class="gst-title text-white">Free ROI Calculator</h1>
    <p class="gst-sub text-white">Calculate Return on Investment instantly — net profit, ROI %, annualized return &amp; break-even.</p>

    <div class="gst-card mx-auto pt-4">

      <!-- ── ROW 1: Core Inputs ── -->
      <div class="row g-3 mb-3">
        <div class="col-md-4">
          <label class="gst-label">💰 Initial Investment (₹)</label>
          <input type="number" id="initialInvestment" class="gst-input" placeholder="e.g. 1,00,000" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">📈 Final Value / Returns (₹)</label>
          <input type="number" id="finalValue" class="gst-input" placeholder="e.g. 1,44,000" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">📅 Investment Duration</label>
          <div class="d-flex gap-2">
            <input type="number" id="duration" class="gst-input" placeholder="e.g. 2" min="0" style="flex:1">
            <select id="durationUnit" class="gst-select" style="width:110px">
              <option value="years">Years</option>
              <option value="months">Months</option>
              <option value="days">Days</option>
            </select>
          </div>
        </div>
      </div>

      <!-- ── ROW 2: Optional Additional Costs ── -->
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <label class="gst-label">🧾 Additional Costs / Expenses (₹) <span style="font-weight:400;color:#999">(optional)</span></label>
          <input type="number" id="additionalCosts" class="gst-input" placeholder="e.g. 5,000" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">💸 Tax Rate (%) <span style="font-weight:400;color:#999">(optional)</span></label>
          <input type="number" id="taxRate" class="gst-input" placeholder="e.g. 15" min="0" max="100">
        </div>
        <div class="col-md-4 d-flex align-items-end">
          <button onclick="calculateROI()" class="btn btn-primary w-100" style="height:48px;font-size:16px;font-weight:700;border-radius:8px;background:var(--blue);border:none;">
            ⚡ Calculate ROI
          </button>
        </div>
      </div>

      <hr class="my-3">

      <!-- ── RESULTS ── -->
      <div id="roiResults" style="display:none">
        <div class="row g-3 text-center mb-3">
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="label">ROI %</div>
              <div class="gst-number text-success" id="roiPercent">0%</div>
              <div class="gst-text">Return on Investment</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="label">Net Profit</div>
              <div class="gst-number" id="netProfit" style="color:#1a4fd6">₹0</div>
              <div class="gst-text">After costs &amp; tax</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="label">Annualized ROI</div>
              <div class="gst-number text-warning" id="annualizedROI">0%</div>
              <div class="gst-text">Per year (CAGR)</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="label">Total Return</div>
              <div class="gst-number text-primary" id="totalReturn">₹0</div>
              <div class="gst-text">Final value received</div>
            </div>
          </div>
        </div>

        <!-- ROI Meter -->
        <div class="roi-meter-wrap">
          <div class="roi-meter-label">
            <span>Investment Performance</span>
            <span id="meterPct">0%</span>
          </div>
          <div class="roi-meter-track">
            <div class="roi-meter-fill" id="roiMeterFill"></div>
          </div>
          <div class="mt-2 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <span class="roi-verdict" id="roiVerdict">—</span>
            <span style="font-size:13px;color:var(--muted)" id="breakEvenNote">—</span>
          </div>
        </div>

        <!-- Detailed Breakdown -->
        <div class="row g-3 mt-1">
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📊 Detailed Breakdown</div>
              <table class="loan-table">
                <tr><td class="td-l">Initial Investment</td><td class="td-r blue" id="brkInitial">₹0</td></tr>
                <tr><td class="td-l">Additional Costs</td><td class="td-r red" id="brkCosts">₹0</td></tr>
                <tr><td class="td-l">Total Cost</td><td class="td-r" id="brkTotal">₹0</td></tr>
                <tr><td class="td-l">Final Value</td><td class="td-r green" id="brkFinal">₹0</td></tr>
                <tr><td class="td-l">Gross Profit</td><td class="td-r green" id="brkGross">₹0</td></tr>
                <tr><td class="td-l">Tax Deduction</td><td class="td-r red" id="brkTax">₹0</td></tr>
                <tr><td class="td-l">Net Profit</td><td class="td-r green" id="brkNet">₹0</td></tr>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📅 Time-Based ROI</div>
              <table class="loan-table">
                <tr><td class="td-l">Investment Period</td><td class="td-r blue" id="brkPeriod">—</td></tr>
                <tr><td class="td-l">Simple ROI</td><td class="td-r green" id="brkSimple">0%</td></tr>
                <tr><td class="td-l">Annualized ROI (CAGR)</td><td class="td-r amber" id="brkCagr">0%</td></tr>
                <tr><td class="td-l">Monthly Return</td><td class="td-r" id="brkMonthly">0%</td></tr>
                <tr><td class="td-l">Break-Even Point</td><td class="td-r" id="brkBreakEven">—</td></tr>
                <tr><td class="td-l">Profit Margin</td><td class="td-r green" id="brkMargin">0%</td></tr>
                <tr><td class="td-l">Return Multiple</td><td class="td-r blue" id="brkMultiple">0x</td></tr>
              </table>
            </div>
          </div>
        </div>
      </div><!-- /roiResults -->

      <!-- Placeholder before calculation -->
      <div id="roiPlaceholder" class="text-center py-3" style="color:var(--muted)">
        <span style="font-size:36px">📊</span>
        <p style="margin-top:8px;font-size:14px">Enter your investment details above and click <strong>Calculate ROI</strong></p>
      </div>

    </div><!-- /gst-card -->
  </div>
</section>


<!-- ══════════════════════════════════════
     SECTION 1 – What is ROI
═══════════════════════════════════════ -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">About ROI</p>
    <h2 class="s1-h">What is <span class="s1-accent">ROI</span> — Return on Investment?</h2>
    <p class="s1-p"><strong>ROI (Return on Investment)</strong> is a key financial metric used to evaluate the efficiency or profitability of an investment. It measures the <strong>net profit</strong> generated relative to the <strong>cost of investment</strong> — expressed as a percentage. A higher ROI means your money worked harder.</p>
    <p class="s1-p" style="margin-top:12px">ROI is used across <strong>stock market investing</strong>, <strong>business decisions</strong>, <strong>real estate</strong>, <strong>marketing campaigns</strong>, <strong>mutual funds</strong>, and any scenario where you spend money expecting a return.</p>
    <p class="s1-p" style="margin-top:12px"><strong>Annualized ROI (CAGR)</strong> adjusts the return for the time period — so you can fairly compare a 1-year investment with a 5-year one on equal terms.</p>
  </div>
</section>


<!-- ══════════════════════════════════════
     HOW TO USE
═══════════════════════════════════════ -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="s1-h text-center mb-4">How to Use This ROI Calculator</h2>
    <div class="row align-items-center text-center">

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">💰</div>
          <h4>Initial Investment</h4>
          <p>Enter the total amount you invested or plan to invest.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">📈</div>
          <h4>Final Value</h4>
          <p>Enter the final value or total returns you received.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">📅</div>
          <h4>Time Period</h4>
          <p>Enter investment duration in days, months or years.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🧾</div>
          <h4>Costs &amp; Tax</h4>
          <p>Optionally add extra costs and applicable tax rate.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2 p-3">
        <div class="step-card p-4">
          <div class="step-icon">⚡</div>
          <h4>Instant Results</h4>
          <p>See ROI %, net profit, CAGR and break-even instantly.</p>
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
      <h2 class="s3-h">ROI example &amp; formula</h2>
      <p class="s3-sub">A worked example and the exact formulas used in every calculation.</p>
    </div>

    <div class="s3-grid">

      <!-- Example Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#ecfdf5">📋</div>
          <div>
            <div class="ef-card-head-t">Worked example</div>
            <div class="ef-card-head-s">₹1,00,000 invested → ₹1,44,000 in 2 years</div>
          </div>
        </div>
        <div class="ef-card-body">
          <table class="loan-table">
            <tr><td class="td-l">Initial Investment</td>  <td class="td-r">₹1,00,000</td></tr>
            <tr><td class="td-l">Final Value</td>          <td class="td-r">₹1,44,000</td></tr>
            <tr><td class="td-l">Additional Costs</td>     <td class="td-r">₹5,000</td></tr>
            <tr><td class="td-l">Total Cost</td>           <td class="td-r">₹1,05,000</td></tr>
            <tr><td class="td-l">Gross Profit</td>         <td class="td-r green">₹44,000</td></tr>
            <tr><td class="td-l">Net Profit (after cost)</td><td class="td-r green">₹39,000</td></tr>
            <tr><td class="td-l">Simple ROI</td>           <td class="td-r green">37.1%</td></tr>
            <tr><td class="td-l">Annualized ROI (CAGR)</td><td class="td-r amber">16.9% p.a.</td></tr>
            <tr><td class="td-l">Return Multiple</td>      <td class="td-r blue">1.37x</td></tr>
          </table>
          <div class="progress-wrap">
            <div class="progress-label"><span>Net Profit 37.1%</span><span>Investment 62.9%</span></div>
            <div class="progress-track"><div class="progress-fill" style="width:37.1%;background:var(--green)"></div></div>
          </div>
        </div>
      </div>

      <!-- Formula Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#eef3ff">🔢</div>
          <div>
            <div class="ef-card-head-t">ROI formulas used</div>
            <div class="ef-card-head-s">Simple ROI, CAGR &amp; Net Profit</div>
          </div>
        </div>
        <div class="ef-card-body">
          <div class="formula-dark">
            <div class="formula-eq">ROI (%) = [ (FV − TC) ÷ TC ] × 100</div>
            <div class="formula-hint">FV = Final Value &nbsp;|&nbsp; TC = Total Cost (Investment + Expenses)</div>
          </div>
          <div class="formula-dark" style="margin-bottom:16px">
            <div class="formula-eq">CAGR = [ (FV ÷ TC)<sup>1/n</sup> − 1 ] × 100</div>
            <div class="formula-hint">n = number of years &nbsp;|&nbsp; Annualizes the return over the period</div>
          </div>
          <div class="vars-grid">
            <div class="var-box"><div class="var-letter">FV</div><div class="var-desc">Final Value or total returns received</div></div>
            <div class="var-box"><div class="var-letter">TC</div><div class="var-desc">Total Cost = Investment + Extra Costs</div></div>
            <div class="var-box"><div class="var-letter">NP</div><div class="var-desc">Net Profit = FV − TC − Tax</div></div>
            <div class="var-box"><div class="var-letter">n</div><div class="var-desc">Investment duration in years</div></div>
          </div>
          <div class="insight-box">
            <p><strong>Key insight:</strong> Simple ROI ignores time — a 100% ROI over 10 years is far less impressive than 100% in 1 year. Always compare using <strong>Annualized ROI (CAGR)</strong> to fairly evaluate investments of different durations.</p>
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
    <p class="sec-p" style="margin-bottom:28px">20+ free calculators across 5 categories. Pick one and get instant results.</p>

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
</div><!-- /body-inner -->

<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>

<script>
/* ══════════════════════════════════════
   ROI CALCULATOR – Core Logic
═══════════════════════════════════════ */
function fmt(n) {
  // Format number as Indian currency string
  return '₹' + Math.abs(n).toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}
function fmtPct(n, decimals = 2) {
  return (n >= 0 ? '+' : '') + n.toFixed(decimals) + '%';
}

function calculateROI() {
  const investment    = parseFloat(document.getElementById('initialInvestment').value) || 0;
  const finalVal      = parseFloat(document.getElementById('finalValue').value)        || 0;
  const duration      = parseFloat(document.getElementById('duration').value)          || 0;
  const durationUnit  = document.getElementById('durationUnit').value;
  const extraCosts    = parseFloat(document.getElementById('additionalCosts').value)   || 0;
  const taxRate       = parseFloat(document.getElementById('taxRate').value)           || 0;

  if (investment <= 0 || finalVal < 0) {
    alert('Please enter a valid Initial Investment and Final Value.');
    return;
  }

  // ── Convert duration to years ──
  let years = 0;
  if (duration > 0) {
    if (durationUnit === 'years')  years = duration;
    if (durationUnit === 'months') years = duration / 12;
    if (durationUnit === 'days')   years = duration / 365;
  }

  // ── Core calculations ──
  const totalCost   = investment + extraCosts;          // Total money out
  const grossProfit = finalVal - totalCost;             // Before tax
  const taxAmount   = (grossProfit > 0) ? (grossProfit * taxRate / 100) : 0;
  const netProfit   = grossProfit - taxAmount;          // After tax
  const simpleROI   = (netProfit / totalCost) * 100;   // Simple ROI %

  // ── Annualized ROI (CAGR) ──
  let cagr = 0;
  let monthlyReturn = 0;
  if (years > 0 && totalCost > 0 && finalVal > 0) {
    cagr = (Math.pow(finalVal / totalCost, 1 / years) - 1) * 100;
    monthlyReturn = (Math.pow(finalVal / totalCost, 1 / (years * 12)) - 1) * 100;
  }

  // ── Profit Margin ──
  const profitMargin = (netProfit / finalVal) * 100;

  // ── Return Multiple ──
  const returnMultiple = finalVal / totalCost;

  // ── Break-even needed ──
  const breakEvenReturn = totalCost;

  // ── Duration label ──
  let periodLabel = duration > 0
    ? duration + ' ' + durationUnit
    : 'Not specified';

  // ═══ Update DOM ═══
  document.getElementById('roiPercent').textContent   = fmtPct(simpleROI);
  document.getElementById('netProfit').textContent    = (netProfit >= 0 ? '' : '-') + fmt(netProfit);
  document.getElementById('annualizedROI').textContent = years > 0 ? fmtPct(cagr) : 'N/A';
  document.getElementById('totalReturn').textContent  = fmt(finalVal);

  // Color ROI based on value
  const roiEl = document.getElementById('roiPercent');
  roiEl.style.color = simpleROI >= 0 ? '#059669' : '#dc2626';

  const npEl = document.getElementById('netProfit');
  npEl.style.color = netProfit >= 0 ? '#1a4fd6' : '#dc2626';

  // Breakdown table
  document.getElementById('brkInitial').textContent  = fmt(investment);
  document.getElementById('brkCosts').textContent    = fmt(extraCosts);
  document.getElementById('brkTotal').textContent    = fmt(totalCost);
  document.getElementById('brkFinal').textContent    = fmt(finalVal);
  document.getElementById('brkGross').textContent    = (grossProfit >= 0 ? '' : '-') + fmt(grossProfit);
  document.getElementById('brkGross').style.color    = grossProfit >= 0 ? '#059669' : '#dc2626';
  document.getElementById('brkTax').textContent      = fmt(taxAmount);
  document.getElementById('brkNet').textContent      = (netProfit >= 0 ? '' : '-') + fmt(netProfit);
  document.getElementById('brkNet').style.color      = netProfit >= 0 ? '#059669' : '#dc2626';

  document.getElementById('brkPeriod').textContent   = periodLabel;
  document.getElementById('brkSimple').textContent   = fmtPct(simpleROI);
  document.getElementById('brkSimple').style.color   = simpleROI >= 0 ? '#059669' : '#dc2626';
  document.getElementById('brkCagr').textContent     = years > 0 ? fmtPct(cagr) : 'N/A (no duration)';
  document.getElementById('brkMonthly').textContent  = years > 0 ? fmtPct(monthlyReturn, 3) : 'N/A';
  document.getElementById('brkBreakEven').textContent = fmt(breakEvenReturn) + ' return needed';
  document.getElementById('brkMargin').textContent   = finalVal > 0 ? fmtPct(profitMargin) : 'N/A';
  document.getElementById('brkMargin').style.color   = profitMargin >= 0 ? '#059669' : '#dc2626';
  document.getElementById('brkMultiple').textContent = returnMultiple.toFixed(2) + 'x';

  // ── Meter ──
  const meterPct = Math.min(Math.max(simpleROI, 0), 200); // cap at 200% for display
  const meterWidth = Math.min((meterPct / 200) * 100, 100);
  const fill = document.getElementById('roiMeterFill');
  fill.style.width = meterWidth + '%';
  fill.className = 'roi-meter-fill' + (simpleROI < 0 ? ' negative' : '');
  document.getElementById('meterPct').textContent = fmtPct(simpleROI);

  // ── Verdict ──
  let verdictText, verdictClass;
  if (simpleROI >= 50)       { verdictText = '🔥 Excellent Return';  verdictClass = 'verdict-good'; }
  else if (simpleROI >= 20)  { verdictText = '✅ Good Return';       verdictClass = 'verdict-good'; }
  else if (simpleROI >= 5)   { verdictText = '⚠️ Average Return';   verdictClass = 'verdict-average'; }
  else if (simpleROI >= 0)   { verdictText = '😐 Low Return';        verdictClass = 'verdict-average'; }
  else                        { verdictText = '❌ Loss — Negative ROI'; verdictClass = 'verdict-poor'; }

  const vEl = document.getElementById('roiVerdict');
  vEl.textContent  = verdictText;
  vEl.className    = 'roi-verdict ' + verdictClass;

  document.getElementById('breakEvenNote').textContent =
    simpleROI >= 0
      ? 'You need ₹' + totalCost.toLocaleString('en-IN') + ' return to break even — achieved ✓'
      : 'Short by ₹' + Math.abs(netProfit).toLocaleString('en-IN', {maximumFractionDigits:0}) + ' to break even';

  // Show results
  document.getElementById('roiPlaceholder').style.display = 'none';
  document.getElementById('roiResults').style.display = 'block';
}

/* ── Filter tabs ── */
function filterCat(category, btn) {
  document.querySelectorAll('.ctab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#calcsGrid .cc').forEach(card => {
    card.style.display = (category === 'all' || card.dataset.cat === category) ? 'block' : 'none';
  });
}

/* ── Auto-calculate on Enter ── */
document.querySelectorAll('.gst-input').forEach(inp => {
  inp.addEventListener('keydown', e => { if (e.key === 'Enter') calculateROI(); });
});
</script>

</body>
</html>