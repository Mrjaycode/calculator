<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Free Profit Margin Calculator Online | Gross, Net & Operating Margin | CalcSpeed</title>
    <meta name="description" content="Calculate Gross Profit Margin, Net Profit Margin, and Operating Margin instantly with CalcSpeed's free Profit Margin Calculator. Get markup percentage, cost price from margin, and full profit analysis.">
    <meta name="keywords" content="Profit Margin Calculator, Gross Profit Margin, Net Profit Margin, Operating Margin, Markup Calculator, Profit Percentage, Business Profit Calculator, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">

    <link rel="canonical" href="https://www.calcspeed.com/profit-margin-calculator">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Free Profit Margin Calculator | CalcSpeed">
    <meta property="og:description" content="Calculate gross, net and operating profit margins instantly. Find markup %, selling price from margin, and complete profit breakdown.">
    <meta property="og:url" content="https://www.calcspeed.com/profit-margin-calculator">
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
      "name":"Profit Margin Calculator",
      "url":"https://www.calcspeed.com/profit-margin-calculator",
      "description":"Free Profit Margin Calculator for gross, net and operating margin with full profit analysis.",
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
        background: linear-gradient(135deg, #059669 0%, #0d9f75 50%, #047857 100%);
        padding: 80px 0 60px;
      }
      .gst-title { font-weight:700; font-size:clamp(28px,4vw,42px); margin-bottom:10px; }
      .gst-sub   { opacity:.9; margin-bottom:40px; font-size:16px; }
      .gst-card  {
        background:#fff; padding:40px; border-radius:14px;
        max-width:1000px; box-shadow:0 25px 50px rgba(0,0,0,.25); color:#333;
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
        outline:none; border-color:var(--green);
        box-shadow:0 0 0 3px rgba(5,150,105,.12);
      }
      .gst-select {
        height:48px; border-radius:8px; border:1.5px solid var(--border);
        width:100%; padding:0 14px; font-size:15px; color:var(--navy);
        background:#fff; cursor:pointer;
      }

      /* ── MODE TOGGLE ── */
      .mode-toggle {
        display:flex; gap:0; border-radius:10px; overflow:hidden;
        border:1.5px solid var(--border); margin-bottom:28px;
        width:100%; max-width:600px; margin-left:auto; margin-right:auto;
      }
      .mode-btn {
        flex:1; padding:12px 10px; font-family:var(--fh); font-size:13px;
        font-weight:700; cursor:pointer; border:none; background:var(--paper);
        color:var(--muted); transition:all .2s; text-align:center;
      }
      .mode-btn.active { background:var(--green); color:#fff; }

      /* ── RESULT CARDS ── */
      .result-card {
        background:var(--paper); border-radius:12px; padding:18px 14px;
        text-align:center; border:1.5px solid var(--border); transition:transform .2s;
      }
      .result-card:hover { transform:translateY(-3px); }
      .rc-label { font-size:11px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--muted); margin-bottom:8px; }
      .rc-value { font-size:28px; font-weight:800; font-family:var(--fh); line-height:1.1; }
      .rc-sub   { font-size:12px; color:var(--muted); margin-top:4px; }

      /* ── MARGIN GAUGE ── */
      .gauge-wrap {
        background:var(--paper); border-radius:14px;
        padding:22px 24px; border:1.5px solid var(--border); margin-top:20px;
      }
      .gauge-title { font-family:var(--fh); font-size:13px; font-weight:700; color:var(--navy); margin-bottom:16px; }
      .gauge-row { display:flex; align-items:center; gap:12px; margin-bottom:12px; }
      .gauge-lbl { font-size:12px; font-weight:600; color:var(--muted); width:130px; flex-shrink:0; }
      .gauge-track { flex:1; height:10px; border-radius:100px; background:#e2e8f0; overflow:hidden; }
      .gauge-fill  { height:100%; border-radius:100px; transition:width .7s cubic-bezier(.4,0,.2,1); }
      .gauge-val   { font-size:13px; font-weight:800; font-family:var(--fh); width:60px; text-align:right; flex-shrink:0; }
      .gauge-verdict {
        display:inline-block; padding:6px 14px; border-radius:8px;
        font-size:13px; font-weight:700; margin-top:4px;
      }
      .v-great  { background:#ecfdf5; color:var(--green); }
      .v-good   { background:#fffbf0; color:var(--amber); }
      .v-low    { background:#fef2f2; color:var(--red);   }

      /* ── SECTION 1 ── */
      .s1 { padding:64px 5%; background:#fff; }
      .s1 .container { max-width:1100px; margin:0 auto; }
      .s1-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--green); margin-bottom:12px; }
      .s1-h { font-family:var(--fh); font-size:clamp(24px,3vw,38px); font-weight:800; color:var(--navy); letter-spacing:-1.2px; line-height:1.1; margin-bottom:16px; }
      .s1-p { font-size:15px; color:var(--muted); line-height:1.8; margin-bottom:0; }
      .s1-accent { color:var(--green); }

      /* ── STEP CARDS ── */
      .step-card { background:#fff; border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,.08); transition:.3s; }
      .step-card:hover { transform:translateY(-6px); }
      .step-icon  { font-size:32px; color:var(--green); margin-bottom:10px; }
      .step-arrow { font-size:26px; color:var(--green); }

      /* ── SECTION 3 ── */
      .s3 { padding:64px 5%; background:#fff; }
      .s3 .container { max-width:1100px; margin:0 auto; }
      .s3-header { text-align:center; margin-bottom:48px; }
      .s3-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--green); margin-bottom:10px; }
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
      .var-letter { font-family:var(--fh); font-size:18px; font-weight:800; color:var(--green); line-height:1; margin-bottom:4px; }
      .var-desc   { font-size:11px; color:var(--muted); line-height:1.4; }
      .insight-box { background:#fffbf0; border:1.5px solid #fde68a; border-radius:12px; padding:14px 16px; }
      .insight-box p { font-size:13px; color:#92400e; line-height:1.65; margin:0; }
      .insight-box strong { color:#78350f; }

      /* ── INDUSTRY BENCHMARK TABLE ── */
      .bench-table { width:100%; border-collapse:collapse; margin-top:12px; }
      .bench-table th { background:var(--navy); color:#fff; padding:10px 12px; font-size:12px; font-family:var(--fh); text-align:left; }
      .bench-table th:last-child { text-align:right; }
      .bench-table td { padding:10px 12px; font-size:13px; border-bottom:1px solid var(--border); }
      .bench-table td:last-child { text-align:right; font-weight:700; }
      .bench-table tr:last-child td { border-bottom:none; }
      .bench-good { color:var(--green); }
      .bench-avg  { color:var(--amber); }
      .bench-low  { color:var(--red);   }

      /* ── CALC GRID ── */
      .cn-section { padding:72px 5%; }
      .cn-section.bg-paper { background:var(--paper); }
      .container-xl { max-width:1200px; margin:0 auto; }
      .eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--blue); margin-bottom:10px; }
      .sec-h { font-family:var(--fh); font-size:clamp(28px,4vw,48px); font-weight:800; line-height:1.05; letter-spacing:-1.5px; color:var(--navy); margin-bottom:14px; }
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
     HERO – PROFIT MARGIN CALCULATOR
═══════════════════════════════════════ -->
<section class="gst-section">
  <div class="container text-center">
    <h1 class="gst-title text-white">Free Profit Margin Calculator</h1>
    <p class="gst-sub text-white">Calculate Gross, Net &amp; Operating Profit Margin — plus Markup % and Selling Price from margin.</p>

    <div class="gst-card mx-auto pt-4">

      <!-- ── Mode Toggle ── -->
      <div class="mode-toggle">
        <button class="mode-btn active" onclick="setMode('margin',this)">📊 Calculate Margin %</button>
        <button class="mode-btn" onclick="setMode('price',this)">🏷️ Find Selling Price</button>
        <button class="mode-btn" onclick="setMode('cost',this)">🔧 Find Cost from Margin</button>
      </div>

      <!-- ── MODE 1: Calculate Margin % ── -->
      <div id="modeMargin">
        <div class="row g-3 mb-3">
          <div class="col-md-3">
            <label class="gst-label">💰 Revenue / Selling Price (₹)</label>
            <input type="number" id="m1Revenue" class="gst-input" placeholder="e.g. 1,00,000" min="0">
          </div>
          <div class="col-md-3">
            <label class="gst-label">🔧 Cost of Goods Sold — COGS (₹)</label>
            <input type="number" id="m1COGS" class="gst-input" placeholder="e.g. 60,000" min="0">
          </div>
          <div class="col-md-3">
            <label class="gst-label">📋 Operating Expenses (₹) <small style="font-weight:400;color:#999">optional</small></label>
            <input type="number" id="m1OpEx" class="gst-input" placeholder="e.g. 15,000" min="0">
          </div>
          <div class="col-md-3">
            <label class="gst-label">💸 Tax &amp; Interest (₹) <small style="font-weight:400;color:#999">optional</small></label>
            <input type="number" id="m1Tax" class="gst-input" placeholder="e.g. 5,000" min="0">
          </div>
        </div>
        <div class="row g-3 mb-2">
          <div class="col-12">
            <button onclick="calcMargin()" class="btn w-100" style="height:48px;font-size:16px;font-weight:700;border-radius:8px;background:var(--green);border:none;color:#fff;">
              ⚡ Calculate All Profit Margins
            </button>
          </div>
        </div>
      </div>

      <!-- ── MODE 2: Find Selling Price ── -->
      <div id="modePrice" style="display:none">
        <div class="row g-3 mb-3">
          <div class="col-md-4">
            <label class="gst-label">🔧 Cost Price (₹)</label>
            <input type="number" id="m2Cost" class="gst-input" placeholder="e.g. 400" min="0">
          </div>
          <div class="col-md-4">
            <label class="gst-label">🎯 Desired Profit Margin (%)</label>
            <input type="number" id="m2Margin" class="gst-input" placeholder="e.g. 30" min="0" max="99">
          </div>
          <div class="col-md-4 d-flex align-items-end">
            <button onclick="calcSellingPrice()" class="btn w-100" style="height:48px;font-size:16px;font-weight:700;border-radius:8px;background:var(--green);border:none;color:#fff;">
              ⚡ Find Selling Price
            </button>
          </div>
        </div>
      </div>

      <!-- ── MODE 3: Find Cost from Margin ── -->
      <div id="modeCost" style="display:none">
        <div class="row g-3 mb-3">
          <div class="col-md-4">
            <label class="gst-label">💰 Selling Price (₹)</label>
            <input type="number" id="m3Price" class="gst-input" placeholder="e.g. 600" min="0">
          </div>
          <div class="col-md-4">
            <label class="gst-label">🎯 Desired Profit Margin (%)</label>
            <input type="number" id="m3Margin" class="gst-input" placeholder="e.g. 35" min="0" max="99">
          </div>
          <div class="col-md-4 d-flex align-items-end">
            <button onclick="calcCostFromMargin()" class="btn w-100" style="height:48px;font-size:16px;font-weight:700;border-radius:8px;background:var(--green);border:none;color:#fff;">
              ⚡ Find Max Cost Price
            </button>
          </div>
        </div>
      </div>

      <hr class="my-3">

      <!-- ── RESULTS ── -->
      <div id="pmResults" style="display:none">

        <!-- 4 Key Metrics -->
        <div class="row g-3 text-center mb-3">
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Gross Profit</div>
              <div class="rc-value" id="resGrossProfit" style="color:var(--green)">₹0</div>
              <div class="rc-sub" id="resGrossSub">Revenue − COGS</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Gross Margin %</div>
              <div class="rc-value" id="resGrossMargin" style="color:var(--green)">0%</div>
              <div class="rc-sub">of revenue</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Net Profit</div>
              <div class="rc-value" id="resNetProfit" style="color:var(--blue)">₹0</div>
              <div class="rc-sub">after all deductions</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Markup %</div>
              <div class="rc-value" id="resMarkup" style="color:var(--amber)">0%</div>
              <div class="rc-sub">above cost price</div>
            </div>
          </div>
        </div>

        <!-- Margin Gauges -->
        <div class="gauge-wrap">
          <div class="gauge-title">📊 Margin Performance at a Glance</div>

          <div class="gauge-row">
            <div class="gauge-lbl">Gross Margin</div>
            <div class="gauge-track"><div class="gauge-fill" id="gfGross" style="background:var(--green);width:0%"></div></div>
            <div class="gauge-val" id="gvGross" style="color:var(--green)">0%</div>
          </div>
          <div class="gauge-row">
            <div class="gauge-lbl">Operating Margin</div>
            <div class="gauge-track"><div class="gauge-fill" id="gfOp" style="background:var(--blue);width:0%"></div></div>
            <div class="gauge-val" id="gvOp" style="color:var(--blue)">0%</div>
          </div>
          <div class="gauge-row" style="margin-bottom:14px">
            <div class="gauge-lbl">Net Margin</div>
            <div class="gauge-track"><div class="gauge-fill" id="gfNet" style="background:var(--amber);width:0%"></div></div>
            <div class="gauge-val" id="gvNet" style="color:var(--amber)">0%</div>
          </div>

          <div id="marginVerdict"></div>
        </div>

        <!-- Breakdown Tables -->
        <div class="row g-3 mt-1">
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📋 Full Profit Breakdown</div>
              <table class="loan-table">
                <tr><td class="td-l">Revenue / Selling Price</td>  <td class="td-r blue"   id="brkRev">₹0</td></tr>
                <tr><td class="td-l">Cost of Goods Sold (COGS)</td><td class="td-r red"    id="brkCOGS">₹0</td></tr>
                <tr><td class="td-l">Gross Profit</td>             <td class="td-r green"  id="brkGP">₹0</td></tr>
                <tr><td class="td-l">Operating Expenses</td>       <td class="td-r red"    id="brkOpEx">₹0</td></tr>
                <tr><td class="td-l">Operating Profit (EBIT)</td>  <td class="td-r green"  id="brkEBIT">₹0</td></tr>
                <tr><td class="td-l">Tax &amp; Interest</td>       <td class="td-r red"    id="brkTaxInt">₹0</td></tr>
                <tr><td class="td-l">Net Profit</td>               <td class="td-r green"  id="brkNetP">₹0</td></tr>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📊 Margin &amp; Markup Summary</div>
              <table class="loan-table">
                <tr><td class="td-l">Gross Profit Margin</td>      <td class="td-r green"  id="brkGPM">0%</td></tr>
                <tr><td class="td-l">Operating Profit Margin</td>  <td class="td-r blue"   id="brkOPM">0%</td></tr>
                <tr><td class="td-l">Net Profit Margin</td>        <td class="td-r amber"  id="brkNPM">0%</td></tr>
                <tr><td class="td-l">Markup on Cost (%)</td>       <td class="td-r purple" id="brkMU">0%</td></tr>
                <tr><td class="td-l">Cost-to-Revenue Ratio</td>    <td class="td-r red"    id="brkCRR">0%</td></tr>
                <tr><td class="td-l">Profit per ₹1 Revenue</td>    <td class="td-r green"  id="brkPPR">₹0</td></tr>
                <tr><td class="td-l">Selling Price</td>            <td class="td-r blue"   id="brkSP">₹0</td></tr>
              </table>
            </div>
          </div>
        </div>

      </div><!-- /pmResults -->

      <!-- Placeholder -->
      <div id="pmPlaceholder" class="text-center py-3" style="color:var(--muted)">
        <span style="font-size:36px">💹</span>
        <p style="margin-top:8px;font-size:14px">Choose a mode above, enter your figures, then click <strong>Calculate</strong>.</p>
      </div>

    </div><!-- /gst-card -->
  </div>
</section>


<!-- ══════════════════════════════════════
     SECTION 1 – What is Profit Margin
═══════════════════════════════════════ -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">About Profit Margin</p>
    <h2 class="s1-h">What is <span class="s1-accent">Profit Margin</span>?</h2>
    <p class="s1-p"><strong>Profit Margin</strong> is the percentage of revenue that remains as profit after deducting costs. It tells you how much money you actually keep for every rupee of sales — and is one of the most important indicators of a business's financial health.</p>
    <p class="s1-p" style="margin-top:12px">There are three key types: <strong>Gross Profit Margin</strong> (revenue minus cost of goods sold), <strong>Operating Profit Margin</strong> (after operating expenses like rent and salaries), and <strong>Net Profit Margin</strong> (after everything — taxes and interest included).</p>
    <p class="s1-p" style="margin-top:12px"><strong>Markup</strong> is different from margin — Markup is the percentage added <em>above cost</em>, while Margin is calculated as a percentage <em>of selling price</em>. A 50% markup gives only a 33.3% margin — a common source of confusion.</p>
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
          <div class="step-icon">🔄</div>
          <h4>Choose Mode</h4>
          <p>Pick "Calculate Margin %", "Find Selling Price" or "Find Cost".</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">💰</div>
          <h4>Enter Revenue</h4>
          <p>Enter your total revenue or selling price for the period.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🔧</div>
          <h4>Enter Costs</h4>
          <p>Enter COGS, operating expenses and tax/interest for full analysis.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">📊</div>
          <h4>See All Margins</h4>
          <p>Get gross, operating and net margin with visual gauges.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2 p-3">
        <div class="step-card p-4">
          <div class="step-icon">🏆</div>
          <h4>Compare Industry</h4>
          <p>See how your margin stacks up against industry benchmarks.</p>
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
      <h2 class="s3-h">Profit margin examples &amp; formulas</h2>
      <p class="s3-sub">All formulas explained with a worked retail business example.</p>
    </div>
    <div class="s3-grid">

      <!-- Example Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#ecfdf5">📋</div>
          <div>
            <div class="ef-card-head-t">Worked example — Retail Business</div>
            <div class="ef-card-head-s">Revenue ₹1,00,000 · COGS ₹55,000 · Expenses ₹20,000</div>
          </div>
        </div>
        <div class="ef-card-body">
          <table class="loan-table">
            <tr><td class="td-l">Revenue</td>               <td class="td-r blue">₹1,00,000</td></tr>
            <tr><td class="td-l">COGS</td>                  <td class="td-r red">₹55,000</td></tr>
            <tr><td class="td-l">Gross Profit</td>          <td class="td-r green">₹45,000</td></tr>
            <tr><td class="td-l">Gross Margin</td>          <td class="td-r green">45%</td></tr>
            <tr><td class="td-l">Operating Expenses</td>    <td class="td-r red">₹20,000</td></tr>
            <tr><td class="td-l">Operating Profit (EBIT)</td><td class="td-r green">₹25,000</td></tr>
            <tr><td class="td-l">Operating Margin</td>      <td class="td-r blue">25%</td></tr>
            <tr><td class="td-l">Tax &amp; Interest</td>    <td class="td-r red">₹5,000</td></tr>
            <tr><td class="td-l">Net Profit</td>            <td class="td-r green">₹20,000</td></tr>
            <tr><td class="td-l">Net Margin</td>            <td class="td-r amber">20%</td></tr>
            <tr><td class="td-l">Markup on Cost</td>        <td class="td-r purple">81.8%</td></tr>
          </table>
        </div>
      </div>

      <!-- Formula Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#ecfdf5">🔢</div>
          <div>
            <div class="ef-card-head-t">All formulas used</div>
            <div class="ef-card-head-s">Margin vs Markup — know the difference</div>
          </div>
        </div>
        <div class="ef-card-body">
          <div class="formula-dark">
            <div class="formula-eq">Gross Margin % = (Revenue − COGS) ÷ Revenue × 100</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Operating Margin % = (Gross Profit − OpEx) ÷ Revenue × 100</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Net Margin % = Net Profit ÷ Revenue × 100</div>
          </div>
          <div class="formula-dark" style="margin-bottom:16px">
            <div class="formula-eq">Markup % = (Selling Price − Cost) ÷ Cost × 100</div>
            <div class="formula-hint">Selling Price from Margin = Cost ÷ (1 − Margin%/100)</div>
          </div>
          <div class="vars-grid">
            <div class="var-box"><div class="var-letter">GP</div><div class="var-desc">Gross Profit = Revenue − COGS</div></div>
            <div class="var-box"><div class="var-letter">OP</div><div class="var-desc">Operating Profit = GP − OpEx</div></div>
            <div class="var-box"><div class="var-letter">NP</div><div class="var-desc">Net Profit = OP − Tax − Interest</div></div>
            <div class="var-box"><div class="var-letter">MU</div><div class="var-desc">Markup = Profit ÷ Cost × 100</div></div>
          </div>
          <div class="insight-box">
            <p><strong>Margin vs Markup:</strong> A 50% markup means you add 50% to cost — but your profit margin is only <strong>33.3%</strong> of selling price. Always use margin % when comparing businesses; use markup when pricing products.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Industry Benchmarks -->
    <div style="margin-top:32px;border:1.5px solid var(--border);border-radius:18px;overflow:hidden">
      <div style="background:var(--paper);padding:18px 24px;border-bottom:1.5px solid var(--border);display:flex;align-items:center;gap:12px">
        <div style="width:40px;height:40px;border-radius:10px;background:#ecfdf5;display:flex;align-items:center;justify-content:center;font-size:18px">🏭</div>
        <div>
          <div style="font-family:var(--fh);font-size:15px;font-weight:700;color:var(--navy)">Industry Net Profit Margin Benchmarks</div>
          <div style="font-size:12px;color:var(--muted);margin-top:2px">How does your margin compare to industry averages?</div>
        </div>
      </div>
      <div style="padding:20px 24px;background:#fff">
        <table class="bench-table">
          <thead>
            <tr><th>Industry</th><th>Gross Margin</th><th>Net Margin</th><th>Health</th></tr>
          </thead>
          <tbody>
            <tr><td>Software / SaaS</td>         <td>70–85%</td> <td>15–30%</td> <td class="bench-good">🟢 High</td></tr>
            <tr><td>E-commerce / Retail Online</td><td>40–60%</td><td>5–15%</td> <td class="bench-avg">🟡 Average</td></tr>
            <tr><td>Restaurant / Food</td>        <td>60–70%</td> <td>3–9%</td>  <td class="bench-avg">🟡 Thin</td></tr>
            <tr><td>Manufacturing</td>            <td>25–40%</td> <td>5–10%</td> <td class="bench-avg">🟡 Average</td></tr>
            <tr><td>Consulting / Services</td>    <td>60–80%</td> <td>15–25%</td><td class="bench-good">🟢 High</td></tr>
            <tr><td>Grocery / FMCG</td>           <td>20–30%</td> <td>1–5%</td>  <td class="bench-low">🔴 Very Thin</td></tr>
            <tr><td>Real Estate</td>              <td>15–25%</td> <td>10–20%</td><td class="bench-good">🟢 Good</td></tr>
            <tr><td>Healthcare / Pharma</td>      <td>50–70%</td> <td>10–20%</td><td class="bench-good">🟢 High</td></tr>
          </tbody>
        </table>
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
        ['finance','breakeven-calculator.php','📉','Break-Even Calculator','Units & revenue needed to cover all costs.','#1a4fd6','#eef3ff'],
        ['finance','profit-margin-calculator.php','💹','Profit Margin Calculator','Gross, net & operating margin with markup %.','#1a4fd6','#eef3ff'],
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
   PROFIT MARGIN CALCULATOR – Core Logic
═══════════════════════════════════════ */

function fmtINR(n) {
  const sign = n < 0 ? '-' : '';
  return sign + '₹' + Math.abs(n).toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}
function fmtPct(n, d = 1) {
  return n.toFixed(d) + '%';
}

/* ── Mode switcher ── */
function setMode(mode, btn) {
  document.querySelectorAll('.mode-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById('modeMargin').style.display = mode === 'margin' ? 'block' : 'none';
  document.getElementById('modePrice').style.display  = mode === 'price'  ? 'block' : 'none';
  document.getElementById('modeCost').style.display   = mode === 'cost'   ? 'block' : 'none';
  // Hide results when switching mode
  document.getElementById('pmResults').style.display     = 'none';
  document.getElementById('pmPlaceholder').style.display = 'block';
}

/* ── Show results helper ── */
function showResults() {
  document.getElementById('pmPlaceholder').style.display = 'none';
  document.getElementById('pmResults').style.display     = 'block';
}

/* ── Update gauge bar ── */
function setGauge(fillId, valId, pct, color) {
  const w = Math.min(Math.max(pct, 0), 100);
  document.getElementById(fillId).style.width     = w + '%';
  document.getElementById(fillId).style.background = color;
  document.getElementById(valId).textContent       = fmtPct(pct);
  document.getElementById(valId).style.color        = color;
}

/* ── Verdict badge ── */
function setVerdict(netMargin) {
  let txt, cls;
  if (netMargin >= 20)      { txt = '🔥 Excellent net margin — very profitable business!'; cls = 'v-great'; }
  else if (netMargin >= 10) { txt = '✅ Good net margin — healthy and sustainable.';       cls = 'v-great'; }
  else if (netMargin >= 5)  { txt = '⚠️ Average net margin — room for improvement.';      cls = 'v-good';  }
  else if (netMargin > 0)   { txt = '😐 Thin margin — vulnerable to cost increases.';     cls = 'v-good';  }
  else                      { txt = '❌ Negative margin — business is running at a loss.'; cls = 'v-low';   }
  document.getElementById('marginVerdict').innerHTML =
    `<span class="gauge-verdict ${cls}">${txt}</span>`;
}

/* ── Populate all result fields ── */
function populateResults(revenue, cogs, opEx, taxInt) {
  const grossProfit = revenue - cogs;
  const opProfit    = grossProfit - opEx;
  const netProfit   = opProfit - taxInt;
  const grossMargin = revenue > 0 ? (grossProfit / revenue) * 100 : 0;
  const opMargin    = revenue > 0 ? (opProfit    / revenue) * 100 : 0;
  const netMargin   = revenue > 0 ? (netProfit   / revenue) * 100 : 0;
  const markup      = cogs > 0    ? (grossProfit / cogs)    * 100 : 0;
  const costRatio   = revenue > 0 ? (cogs        / revenue) * 100 : 0;
  const profitPerRupee = revenue > 0 ? netProfit / revenue : 0;

  // 4 metric cards
  document.getElementById('resGrossProfit').textContent = fmtINR(grossProfit);
  document.getElementById('resGrossProfit').style.color = grossProfit >= 0 ? 'var(--green)' : 'var(--red)';
  document.getElementById('resGrossMargin').textContent = fmtPct(grossMargin);
  document.getElementById('resGrossMargin').style.color = grossMargin >= 0 ? 'var(--green)' : 'var(--red)';
  document.getElementById('resNetProfit').textContent   = fmtINR(netProfit);
  document.getElementById('resNetProfit').style.color   = netProfit >= 0 ? 'var(--blue)' : 'var(--red)';
  document.getElementById('resMarkup').textContent      = fmtPct(markup);

  // Gauges (cap at 100% for display)
  setGauge('gfGross', 'gvGross', Math.max(grossMargin, 0), 'var(--green)');
  setGauge('gfOp',    'gvOp',    Math.max(opMargin, 0),    'var(--blue)');
  setGauge('gfNet',   'gvNet',   Math.max(netMargin, 0),   'var(--amber)');
  setVerdict(netMargin);

  // Left breakdown
  document.getElementById('brkRev').textContent    = fmtINR(revenue);
  document.getElementById('brkCOGS').textContent   = fmtINR(cogs);
  document.getElementById('brkGP').textContent     = fmtINR(grossProfit);
  document.getElementById('brkGP').style.color     = grossProfit >= 0 ? 'var(--green)' : 'var(--red)';
  document.getElementById('brkOpEx').textContent   = fmtINR(opEx);
  document.getElementById('brkEBIT').textContent   = fmtINR(opProfit);
  document.getElementById('brkEBIT').style.color   = opProfit >= 0 ? 'var(--green)' : 'var(--red)';
  document.getElementById('brkTaxInt').textContent = fmtINR(taxInt);
  document.getElementById('brkNetP').textContent   = fmtINR(netProfit);
  document.getElementById('brkNetP').style.color   = netProfit >= 0 ? 'var(--green)' : 'var(--red)';

  // Right margin summary
  document.getElementById('brkGPM').textContent  = fmtPct(grossMargin);
  document.getElementById('brkOPM').textContent  = fmtPct(opMargin);
  document.getElementById('brkNPM').textContent  = fmtPct(netMargin);
  document.getElementById('brkMU').textContent   = fmtPct(markup);
  document.getElementById('brkCRR').textContent  = fmtPct(costRatio);
  document.getElementById('brkPPR').textContent  = '₹' + profitPerRupee.toFixed(4);
  document.getElementById('brkSP').textContent   = fmtINR(revenue);

  showResults();
}

/* ══ MODE 1: Calculate Margin % ══ */
function calcMargin() {
  const revenue = parseFloat(document.getElementById('m1Revenue').value) || 0;
  const cogs    = parseFloat(document.getElementById('m1COGS').value)    || 0;
  const opEx    = parseFloat(document.getElementById('m1OpEx').value)    || 0;
  const taxInt  = parseFloat(document.getElementById('m1Tax').value)     || 0;

  if (revenue <= 0) { alert('Please enter a valid Revenue / Selling Price.'); return; }
  if (cogs < 0)     { alert('COGS cannot be negative.'); return; }
  if (cogs > revenue) { alert('⚠️ COGS is greater than Revenue — you are selling at a loss!'); }

  document.getElementById('resGrossSub').textContent = 'Revenue − COGS';
  populateResults(revenue, cogs, opEx, taxInt);
}

/* ══ MODE 2: Find Selling Price from Margin ══ */
function calcSellingPrice() {
  const cost   = parseFloat(document.getElementById('m2Cost').value)   || 0;
  const margin = parseFloat(document.getElementById('m2Margin').value) || 0;

  if (cost <= 0)          { alert('Please enter a valid Cost Price.'); return; }
  if (margin <= 0 || margin >= 100) { alert('Margin must be between 1% and 99%.'); return; }

  // Selling Price = Cost ÷ (1 − margin/100)
  const sellingPrice = cost / (1 - margin / 100);
  const profit       = sellingPrice - cost;
  const markup       = (profit / cost) * 100;

  // Populate with opEx and tax as 0 (not applicable in this mode)
  document.getElementById('resGrossSub').textContent = 'Selling Price − Cost';
  populateResults(sellingPrice, cost, 0, 0);
}

/* ══ MODE 3: Find Cost from Margin ══ */
function calcCostFromMargin() {
  const price  = parseFloat(document.getElementById('m3Price').value)  || 0;
  const margin = parseFloat(document.getElementById('m3Margin').value) || 0;

  if (price <= 0)           { alert('Please enter a valid Selling Price.'); return; }
  if (margin <= 0 || margin >= 100) { alert('Margin must be between 1% and 99%.'); return; }

  // Cost = Selling Price × (1 − margin/100)
  const maxCost = price * (1 - margin / 100);

  document.getElementById('resGrossSub').textContent = 'Price − Max Cost';
  populateResults(price, maxCost, 0, 0);
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
  inp.addEventListener('keydown', e => {
    if (e.key !== 'Enter') return;
    const mode = document.querySelector('.mode-btn.active').textContent;
    if (mode.includes('Margin %'))      calcMargin();
    else if (mode.includes('Selling'))  calcSellingPrice();
    else                                calcCostFromMargin();
  });
});
</script>

</body>
</html>