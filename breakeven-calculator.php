<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Free Break-Even Calculator Online | Break-Even Point Analysis | CalcSpeed</title>
    <meta name="description" content="Calculate your break-even point instantly with CalcSpeed's free Break-Even Calculator. Find the exact units and revenue needed to cover all costs and start making profit.">
    <meta name="keywords" content="Break Even Calculator, Break Even Point, Break Even Analysis, Fixed Cost, Variable Cost, Contribution Margin, Break Even Revenue, Business Calculator, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">

    <link rel="canonical" href="https://www.calcspeed.com/breakeven-calculator">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Free Break-Even Calculator Online | CalcSpeed">
    <meta property="og:description" content="Find how many units you need to sell to cover all costs and break even. Includes margin of safety, contribution margin and profit analysis.">
    <meta property="og:url" content="https://www.calcspeed.com/breakeven-calculator">
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
      "name":"Break-Even Calculator",
      "url":"https://www.calcspeed.com/breakeven-calculator",
      "description":"Free Break-Even Calculator to find break-even units, revenue, and profit analysis.",
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
        background: linear-gradient(135deg, #0a1628, #1a3a6b);
        padding: 80px 0 60px;
      }
      .gst-title { font-weight: 700; font-size: clamp(28px,4vw,42px); margin-bottom: 10px; }
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
        outline:none; border-color:var(--blue);
        box-shadow:0 0 0 3px rgba(26,79,214,.12);
      }

      /* ── RESULT CARDS ── */
      .result-card {
        background:var(--paper); border-radius:12px; padding:18px 14px;
        text-align:center; border:1.5px solid var(--border); transition:transform .2s;
      }
      .result-card:hover { transform:translateY(-3px); }
      .result-card .rc-label {
        font-size:11px; font-weight:700; letter-spacing:1px;
        text-transform:uppercase; color:var(--muted); margin-bottom:8px;
      }
      .rc-value { font-size:28px; font-weight:800; font-family:var(--fh); line-height:1.1; }
      .rc-sub   { font-size:12px; color:var(--muted); margin-top:4px; }

      /* ── PROFIT ZONE VISUAL ── */
      .zone-wrap {
        background:var(--paper); border-radius:14px;
        padding:22px 24px; border:1.5px solid var(--border); margin-top:20px;
      }
      .zone-title {
        font-family:var(--fh); font-size:13px; font-weight:700;
        color:var(--navy); margin-bottom:14px;
      }
      .zone-bar-track {
        height:28px; border-radius:100px; background:#e2e8f0;
        overflow:hidden; position:relative; display:flex;
      }
      .zone-loss   { background:linear-gradient(90deg,#fca5a5,#f87171); height:100%; transition:width .7s; }
      .zone-be     { background:var(--navy); width:4px; flex-shrink:0; }
      .zone-profit { background:linear-gradient(90deg,#6ee7b7,#34d399); height:100%; flex:1; transition:all .7s; }
      .zone-labels {
        display:flex; justify-content:space-between;
        font-size:11px; font-weight:600; color:var(--muted);
        margin-top:8px; text-transform:uppercase; letter-spacing:.5px;
      }

      /* ── SECTION 1 ── */
      .s1 { padding:64px 5%; background:#fff; }
      .s1 .container { max-width:1100px; margin:0 auto; }
      .s1-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--blue); margin-bottom:12px; }
      .s1-h { font-family:var(--fh); font-size:clamp(24px,3vw,38px); font-weight:800; color:var(--navy); letter-spacing:-1.2px; line-height:1.1; margin-bottom:16px; }
      .s1-p { font-size:15px; color:var(--muted); line-height:1.8; margin-bottom:0; }
      .s1-accent { color:var(--blue); }

      /* ── STEP CARDS ── */
      .step-card { background:#fff; border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,.08); transition:.3s; }
      .step-card:hover { transform:translateY(-6px); }
      .step-icon  { font-size:32px; color:#1a4fd6; margin-bottom:10px; }
      .step-arrow { font-size:26px; color:#2250fc; }

      /* ── SECTION 3 ── */
      .s3 { padding:64px 5%; background:#fff; }
      .s3 .container { max-width:1100px; margin:0 auto; }
      .s3-header { text-align:center; margin-bottom:48px; }
      .s3-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--blue); margin-bottom:10px; }
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

      .formula-dark { background:var(--navy); border-radius:12px; padding:22px; text-align:center; margin-bottom:12px; }
      .formula-eq   { font-size:15px; font-weight:700; color:#fff; font-family:var(--fh); letter-spacing:.3px; line-height:1.8; }
      .formula-hint { font-size:11px; color:rgba(255,255,255,.38); margin-top:8px; }
      .vars-grid { display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-bottom:16px; }
      .var-box   { background:var(--paper); border:1px solid var(--border); border-radius:10px; padding:12px 10px; text-align:center; }
      .var-letter { font-family:var(--fh); font-size:18px; font-weight:800; color:var(--blue); line-height:1; margin-bottom:4px; }
      .var-desc   { font-size:11px; color:var(--muted); line-height:1.4; }
      .insight-box { background:#fffbf0; border:1.5px solid #fde68a; border-radius:12px; padding:14px 16px; }
      .insight-box p { font-size:13px; color:#92400e; line-height:1.65; margin:0; }
      .insight-box strong { color:#78350f; }

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
     HERO – BREAK-EVEN CALCULATOR
═══════════════════════════════════════ -->
<section class="gst-section">
  <div class="container text-center">
    <h1 class="gst-title text-white">Free Break-Even Calculator</h1>
    <p class="gst-sub text-white">Find exactly how many units you need to sell to cover all costs and start making profit.</p>

    <div class="gst-card mx-auto pt-4">

      <!-- ── ROW 1 ── -->
      <div class="row g-3 mb-3">
        <div class="col-md-4">
          <label class="gst-label">🏗️ Fixed Costs (₹) <small style="font-weight:400;color:#999">per month/period</small></label>
          <input type="number" id="fixedCost" class="gst-input" placeholder="e.g. 50,000 (rent, salaries…)" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">🏷️ Selling Price per Unit (₹)</label>
          <input type="number" id="sellingPrice" class="gst-input" placeholder="e.g. 500" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">🔧 Variable Cost per Unit (₹)</label>
          <input type="number" id="variableCost" class="gst-input" placeholder="e.g. 200 (materials, labour…)" min="0">
        </div>
      </div>

      <!-- ── ROW 2 ── -->
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <label class="gst-label">📦 Expected Sales Units <small style="font-weight:400;color:#999">(optional)</small></label>
          <input type="number" id="expectedSales" class="gst-input" placeholder="e.g. 300 units" min="0">
        </div>
        <div class="col-md-4">
          <label class="gst-label">🎯 Target Profit (₹) <small style="font-weight:400;color:#999">(optional)</small></label>
          <input type="number" id="targetProfit" class="gst-input" placeholder="e.g. 20,000" min="0">
        </div>
        <div class="col-md-4 d-flex align-items-end">
          <button onclick="calculateBreakEven()" class="btn btn-primary w-100" style="height:48px;font-size:16px;font-weight:700;border-radius:8px;background:var(--navy);border:none;">
            ⚡ Calculate Break-Even
          </button>
        </div>
      </div>

      <hr class="my-3">

      <!-- ── RESULTS ── -->
      <div id="beResults" style="display:none">

        <!-- 4 Key Metrics -->
        <div class="row g-3 text-center mb-3">
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Break-Even Units</div>
              <div class="rc-value" id="beUnits" style="color:var(--navy)">0</div>
              <div class="rc-sub">units to sell</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Break-Even Revenue</div>
              <div class="rc-value" id="beRevenue" style="color:var(--blue)">₹0</div>
              <div class="rc-sub">total sales needed</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Contribution Margin</div>
              <div class="rc-value" id="contribMargin" style="color:var(--green)">₹0</div>
              <div class="rc-sub">per unit profit</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="result-card">
              <div class="rc-label">Margin of Safety</div>
              <div class="rc-value" id="marginSafety" style="color:var(--amber)">—</div>
              <div class="rc-sub">above break-even</div>
            </div>
          </div>
        </div>

        <!-- Profit/Loss Zone Bar -->
        <div class="zone-wrap">
          <div class="zone-title">📊 Profit / Loss Zone — Your Position</div>
          <div class="zone-bar-track">
            <div class="zone-loss" id="zoneLoss" style="width:40%"></div>
            <div class="zone-be"></div>
            <div class="zone-profit" id="zoneProfit"></div>
          </div>
          <div class="zone-labels">
            <span>🔴 Loss Zone</span>
            <span id="beLine">⬆ Break-Even Point</span>
            <span>🟢 Profit Zone</span>
          </div>
          <div class="mt-3 text-center" id="positionNote" style="font-size:14px;font-weight:600"></div>
        </div>

        <!-- Detailed Tables -->
        <div class="row g-3 mt-1">
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">📋 Cost & Revenue Breakdown</div>
              <table class="loan-table">
                <tr><td class="td-l">Fixed Costs</td>              <td class="td-r red"   id="brkFixed">₹0</td></tr>
                <tr><td class="td-l">Variable Cost per Unit</td>   <td class="td-r red"   id="brkVarUnit">₹0</td></tr>
                <tr><td class="td-l">Selling Price per Unit</td>   <td class="td-r green" id="brkSellUnit">₹0</td></tr>
                <tr><td class="td-l">Contribution Margin/Unit</td> <td class="td-r green" id="brkCM">₹0</td></tr>
                <tr><td class="td-l">CM Ratio (%)</td>             <td class="td-r amber" id="brkCMR">0%</td></tr>
                <tr><td class="td-l">Break-Even Units</td>         <td class="td-r blue"  id="brkBEU">0</td></tr>
                <tr><td class="td-l">Break-Even Revenue</td>       <td class="td-r blue"  id="brkBER">₹0</td></tr>
              </table>
            </div>
          </div>
          <div class="col-md-6">
            <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
              <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:12px">🎯 Sales Scenario Analysis</div>
              <table class="loan-table">
                <tr><td class="td-l">Expected Sales Units</td>     <td class="td-r blue"  id="brkExp">—</td></tr>
                <tr><td class="td-l">Expected Revenue</td>         <td class="td-r green" id="brkExpRev">—</td></tr>
                <tr><td class="td-l">Total Variable Costs</td>     <td class="td-r red"   id="brkTVC">—</td></tr>
                <tr><td class="td-l">Total Costs</td>              <td class="td-r red"   id="brkTC">—</td></tr>
                <tr><td class="td-l">Expected Profit / Loss</td>   <td class="td-r"       id="brkPL">—</td></tr>
                <tr><td class="td-l">Units for Target Profit</td>  <td class="td-r amber" id="brkTP">—</td></tr>
                <tr><td class="td-l">Margin of Safety (Units)</td> <td class="td-r green" id="brkMOS">—</td></tr>
              </table>
            </div>
          </div>
        </div>

      </div><!-- /beResults -->

      <!-- Placeholder -->
      <div id="bePlaceholder" class="text-center py-3" style="color:var(--muted)">
        <span style="font-size:36px">📉</span>
        <p style="margin-top:8px;font-size:14px">Enter your <strong>Fixed Costs</strong>, <strong>Selling Price</strong> and <strong>Variable Cost</strong> above, then click <strong>Calculate Break-Even</strong>.</p>
      </div>

    </div><!-- /gst-card -->
  </div>
</section>


<!-- ══════════════════════════════════════
     SECTION 1 – What is Break-Even
═══════════════════════════════════════ -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">About Break-Even</p>
    <h2 class="s1-h">What is the <span class="s1-accent">Break-Even Point</span>?</h2>
    <p class="s1-p">The <strong>break-even point</strong> is the level of sales at which your total revenue exactly equals your total costs — meaning you make <strong>zero profit and zero loss</strong>. Every unit sold beyond this point generates <strong>pure profit</strong>.</p>
    <p class="s1-p" style="margin-top:12px">It is one of the most critical metrics for any business — from a small street vendor to a large manufacturing company. Knowing your break-even point helps you set <strong>pricing strategies</strong>, plan <strong>production volumes</strong>, evaluate <strong>business viability</strong>, and make confident decisions about expansion.</p>
    <p class="s1-p" style="margin-top:12px"><strong>Fixed costs</strong> are costs that don't change regardless of output (rent, salaries, insurance). <strong>Variable costs</strong> change with each unit produced (raw materials, packaging, delivery). The gap between your selling price and variable cost per unit is called the <strong>Contribution Margin</strong> — the amount each sale contributes toward covering fixed costs.</p>
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
          <div class="step-icon">🏗️</div>
          <h4>Fixed Costs</h4>
          <p>Enter total fixed costs per period — rent, salaries, utilities.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🏷️</div>
          <h4>Selling Price</h4>
          <p>Enter the price at which you sell each unit of product.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🔧</div>
          <h4>Variable Cost</h4>
          <p>Enter cost per unit — materials, labour, packaging.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">📦</div>
          <h4>Expected Sales</h4>
          <p>Optionally enter units you expect to sell for profit/loss analysis.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2 p-3">
        <div class="step-card p-4">
          <div class="step-icon">⚡</div>
          <h4>Instant Results</h4>
          <p>See break-even units, revenue, margin of safety and profit zone.</p>
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
      <h2 class="s3-h">Break-even example &amp; formulas</h2>
      <p class="s3-sub">A real worked example with all formulas explained clearly.</p>
    </div>
    <div class="s3-grid">

      <!-- Example Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#ecfdf5">📋</div>
          <div>
            <div class="ef-card-head-t">Worked example — Clothing Business</div>
            <div class="ef-card-head-s">Fixed ₹50,000 · Sell ₹500 · Variable ₹200</div>
          </div>
        </div>
        <div class="ef-card-body">
          <table class="loan-table">
            <tr><td class="td-l">Fixed Costs / month</td>         <td class="td-r red">₹50,000</td></tr>
            <tr><td class="td-l">Selling Price / unit</td>        <td class="td-r green">₹500</td></tr>
            <tr><td class="td-l">Variable Cost / unit</td>        <td class="td-r red">₹200</td></tr>
            <tr><td class="td-l">Contribution Margin / unit</td>  <td class="td-r green">₹300</td></tr>
            <tr><td class="td-l">CM Ratio</td>                    <td class="td-r amber">60%</td></tr>
            <tr><td class="td-l">Break-Even Units</td>            <td class="td-r blue">167 units</td></tr>
            <tr><td class="td-l">Break-Even Revenue</td>          <td class="td-r blue">₹83,500</td></tr>
            <tr><td class="td-l">If selling 300 units — Profit</td><td class="td-r green">₹40,000</td></tr>
            <tr><td class="td-l">Margin of Safety</td>            <td class="td-r green">133 units (44%)</td></tr>
          </table>
          <div style="margin-top:14px;background:#ecfdf5;border:1.5px solid #a7f3d0;border-radius:10px;padding:12px 14px">
            <p style="font-size:13px;color:#065f46;margin:0">✅ Selling 300 units puts you <strong>133 units above break-even</strong> — you're comfortably in the profit zone.</p>
          </div>
        </div>
      </div>

      <!-- Formula Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#eef3ff">🔢</div>
          <div>
            <div class="ef-card-head-t">Break-even formulas</div>
            <div class="ef-card-head-s">All formulas used in this calculator</div>
          </div>
        </div>
        <div class="ef-card-body">
          <div class="formula-dark">
            <div class="formula-eq">Contribution Margin = Selling Price − Variable Cost</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Break-Even Units = Fixed Costs ÷ Contribution Margin</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Break-Even Revenue = Break-Even Units × Selling Price</div>
          </div>
          <div class="formula-dark" style="margin-bottom:16px">
            <div class="formula-eq">Units for Target Profit = (Fixed Costs + Target Profit) ÷ CM</div>
            <div class="formula-hint">CM = Contribution Margin per unit</div>
          </div>
          <div class="vars-grid">
            <div class="var-box"><div class="var-letter">FC</div><div class="var-desc">Fixed Costs — don't change with output</div></div>
            <div class="var-box"><div class="var-letter">VC</div><div class="var-desc">Variable Cost per unit of production</div></div>
            <div class="var-box"><div class="var-letter">SP</div><div class="var-desc">Selling Price per unit charged to buyer</div></div>
            <div class="var-box"><div class="var-letter">CM</div><div class="var-desc">Contribution Margin = SP − VC</div></div>
          </div>
          <div class="insight-box">
            <p><strong>Key insight:</strong> A higher Contribution Margin means you reach break-even faster. If your CM is too low, you need to either <strong>raise your price</strong> or <strong>reduce variable costs</strong> to make the business viable.</p>
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
        ['finance','breakeven-calculator.php','⚖️','Break-Even Calculator','Units & revenue needed to cover all costs.','#1a4fd6','#eef3ff'],
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
   BREAK-EVEN CALCULATOR – Core Logic
═══════════════════════════════════════ */

function fmtINR(n) {
  return '₹' + Math.abs(n).toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}
function fmtUnits(n) {
  return Math.ceil(n).toLocaleString('en-IN') + ' units';
}
function fmtPct(n) {
  return n.toFixed(1) + '%';
}

function calculateBreakEven() {
  const fixedCost    = parseFloat(document.getElementById('fixedCost').value)    || 0;
  const sellingPrice = parseFloat(document.getElementById('sellingPrice').value) || 0;
  const variableCost = parseFloat(document.getElementById('variableCost').value) || 0;
  const expectedSales = parseFloat(document.getElementById('expectedSales').value) || 0;
  const targetProfit  = parseFloat(document.getElementById('targetProfit').value)  || 0;

  // ── Validation ──
  if (fixedCost <= 0) { alert('Please enter Fixed Costs greater than 0.'); return; }
  if (sellingPrice <= 0) { alert('Please enter a valid Selling Price.'); return; }
  if (variableCost < 0) { alert('Variable Cost cannot be negative.'); return; }
  if (variableCost >= sellingPrice) {
    alert('⚠️ Variable Cost must be LESS than Selling Price. Otherwise you lose money on every unit sold.');
    return;
  }

  // ── Core calculations ──
  const cm       = sellingPrice - variableCost;            // Contribution Margin per unit
  const cmRatio  = (cm / sellingPrice) * 100;              // CM Ratio %
  const beUnits  = fixedCost / cm;                         // Break-even units (exact)
  const beUnitsCeil = Math.ceil(beUnits);                  // Always round up
  const beRevenue = beUnitsCeil * sellingPrice;            // Break-even revenue

  // ── Expected Sales scenario ──
  let expRevenue = 0, expTVC = 0, expTC = 0, expPL = 0;
  let mosUnits = 0, mosPct = 0;
  if (expectedSales > 0) {
    expRevenue = expectedSales * sellingPrice;
    expTVC     = expectedSales * variableCost;
    expTC      = fixedCost + expTVC;
    expPL      = expRevenue - expTC;                       // Profit or Loss
    mosUnits   = expectedSales - beUnitsCeil;              // Margin of safety in units
    mosPct     = (mosUnits / expectedSales) * 100;
  }

  // ── Units needed for target profit ──
  let tpUnits = 0;
  if (targetProfit > 0) {
    tpUnits = Math.ceil((fixedCost + targetProfit) / cm);
  }

  // ═══ Update DOM ═══

  // Key metrics
  document.getElementById('beUnits').textContent    = beUnitsCeil.toLocaleString('en-IN');
  document.getElementById('beRevenue').textContent  = fmtINR(beRevenue);
  document.getElementById('contribMargin').textContent = fmtINR(cm);

  if (expectedSales > 0 && mosUnits >= 0) {
    document.getElementById('marginSafety').textContent = mosUnits.toLocaleString('en-IN') + ' units';
    document.getElementById('marginSafety').style.color = mosUnits > 0 ? 'var(--green)' : 'var(--red)';
  } else if (expectedSales > 0 && mosUnits < 0) {
    document.getElementById('marginSafety').textContent = Math.abs(mosUnits).toLocaleString('en-IN') + ' below';
    document.getElementById('marginSafety').style.color = 'var(--red)';
  } else {
    document.getElementById('marginSafety').textContent = 'Enter expected sales';
    document.getElementById('marginSafety').style.color = 'var(--muted)';
  }

  // Zone bar — ratio of beUnits to expectedSales (or just show 50/50 if no expected)
  let lossWidth = 50;
  if (expectedSales > 0) {
    lossWidth = Math.min(Math.max((beUnitsCeil / expectedSales) * 100, 5), 90);
  }
  document.getElementById('zoneLoss').style.width = lossWidth + '%';

  // Position note
  let posNote = '';
  if (expectedSales > 0) {
    if (expPL > 0) {
      posNote = `✅ At ${expectedSales.toLocaleString('en-IN')} units you make <strong style="color:var(--green)">+${fmtINR(expPL)}</strong> profit — you're in the profit zone!`;
    } else if (expPL === 0) {
      posNote = `⚖️ At ${expectedSales.toLocaleString('en-IN')} units you are exactly at break-even — zero profit, zero loss.`;
    } else {
      posNote = `❌ At ${expectedSales.toLocaleString('en-IN')} units you make a <strong style="color:var(--red)">loss of ${fmtINR(Math.abs(expPL))}</strong>. You need ${beUnitsCeil.toLocaleString('en-IN')} units to break even.`;
    }
  } else {
    posNote = `You need to sell <strong>${beUnitsCeil.toLocaleString('en-IN')} units</strong> to cover all costs.`;
  }
  document.getElementById('positionNote').innerHTML = posNote;

  // Breakdown table – left
  document.getElementById('brkFixed').textContent   = fmtINR(fixedCost);
  document.getElementById('brkVarUnit').textContent = fmtINR(variableCost);
  document.getElementById('brkSellUnit').textContent = fmtINR(sellingPrice);
  document.getElementById('brkCM').textContent      = fmtINR(cm);
  document.getElementById('brkCMR').textContent     = fmtPct(cmRatio);
  document.getElementById('brkBEU').textContent     = beUnitsCeil.toLocaleString('en-IN') + ' units';
  document.getElementById('brkBER').textContent     = fmtINR(beRevenue);

  // Breakdown table – right
  if (expectedSales > 0) {
    document.getElementById('brkExp').textContent    = expectedSales.toLocaleString('en-IN') + ' units';
    document.getElementById('brkExpRev').textContent = fmtINR(expRevenue);
    document.getElementById('brkTVC').textContent    = fmtINR(expTVC);
    document.getElementById('brkTC').textContent     = fmtINR(expTC);
    const plEl = document.getElementById('brkPL');
    plEl.textContent = (expPL >= 0 ? '+' : '-') + fmtINR(expPL).replace('₹','₹');
    plEl.style.color = expPL >= 0 ? 'var(--green)' : 'var(--red)';
    document.getElementById('brkMOS').textContent = mosUnits >= 0
      ? mosUnits.toLocaleString('en-IN') + ' units (' + fmtPct(mosPct) + ')'
      : '—';
    document.getElementById('brkMOS').style.color = mosUnits >= 0 ? 'var(--green)' : 'var(--muted)';
  } else {
    ['brkExp','brkExpRev','brkTVC','brkTC','brkPL','brkMOS'].forEach(id => {
      document.getElementById(id).textContent = '—';
      document.getElementById(id).style.color = 'var(--muted)';
    });
  }

  if (targetProfit > 0) {
    document.getElementById('brkTP').textContent = tpUnits.toLocaleString('en-IN') + ' units';
  } else {
    document.getElementById('brkTP').textContent = '—';
  }

  // Show results
  document.getElementById('bePlaceholder').style.display = 'none';
  document.getElementById('beResults').style.display = 'block';
}

/* ── Filter tabs ── */
function filterCat(category, btn) {
  document.querySelectorAll('.ctab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#calcsGrid .cc').forEach(card => {
    card.style.display = (category === 'all' || card.dataset.cat === category) ? 'block' : 'none';
  });
}

/* ── Enter key support ── */
document.querySelectorAll('.gst-input').forEach(inp => {
  inp.addEventListener('keydown', e => { if (e.key === 'Enter') calculateBreakEven(); });
});
</script>

</body>
</html>