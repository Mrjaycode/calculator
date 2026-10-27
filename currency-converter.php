<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Free Currency Converter Online | Live Exchange Rates | CalcSpeed</title>
    <meta name="description" content="Convert currencies instantly with CalcSpeed's free Currency Converter. Get live exchange rates for 150+ currencies including INR, USD, EUR, GBP, AED, JPY and more.">
    <meta name="keywords" content="Currency Converter, Exchange Rate Calculator, INR to USD, USD to INR, Live Currency Rates, Foreign Exchange, Forex Calculator, Free Currency Converter, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">

    <link rel="canonical" href="https://www.calcspeed.com/currency-converter">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Free Currency Converter | Live Exchange Rates | CalcSpeed">
    <meta property="og:description" content="Convert 150+ currencies with live exchange rates. INR, USD, EUR, GBP, AED, JPY and more — instant results.">
    <meta property="og:url" content="https://www.calcspeed.com/currency-converter">
    <meta property="og:site_name" content="CalcSpeed">
    <meta property="og:image" content="https://www.calcspeed.com/img/logo-dark1.png">

    <link rel="icon" type="image/png" href="img/logo-dark1.png">
    <link rel="apple-touch-icon" href="img/logo-dark1.png">
    <meta name="theme-color" content="#0d6efd">

    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Currency Converter",
      "url": "https://www.calcspeed.com/currency-converter",
      "description": "Free Currency Converter with live exchange rates for 150+ currencies.",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offers": { "@type": "Offer", "price": "0", "priceCurrency": "USD" }
    }
    </script>

    <style>
      *, *::before, *::after { box-sizing: border-box; }

      :root {
        --navy:   #0a1628;
        --navy2:  #0d1e38;
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
        --fb:     'Plus Jakarta Sans', sans-serif;
      }

      /* ── HERO ── */
      .hero-section {
        background: linear-gradient(135deg, #0a1628 0%, #0d2d6b 55%, #1a4fd6 100%);
        padding: 80px 0 64px;
        position: relative; overflow: hidden;
      }
      .hero-section::before {
        content: '';
        position: absolute; inset: 0;
        background-image:
          linear-gradient(rgba(245,166,35,.04) 1px, transparent 1px),
          linear-gradient(90deg, rgba(245,166,35,.04) 1px, transparent 1px);
        background-size: 40px 40px;
      }
      .hero-inner { position: relative; z-index: 1; }
      .hero-eyebrow {
        font-family: var(--fh); font-size: 11px; font-weight: 700;
        letter-spacing: 3px; text-transform: uppercase;
        color: var(--gold); margin-bottom: 12px;
      }
      .hero-title {
        font-family: var(--fh); font-size: clamp(28px,4vw,48px);
        font-weight: 800; color: #fff; letter-spacing: -1.5px;
        line-height: 1.05; margin-bottom: 10px;
      }
      .hero-sub { font-size: 16px; color: rgba(255,255,255,.6); margin-bottom: 40px; }

      /* ── CONVERTER CARD ── */
      .conv-card {
        background: #fff; border-radius: 20px;
        max-width: 820px; margin: 0 auto;
        box-shadow: 0 30px 80px rgba(0,0,0,.35);
        overflow: hidden;
      }
      .conv-body { padding: 36px; }

      /* Amount input */
      .conv-amount-wrap { position: relative; margin-bottom: 20px; }
      .conv-amount-label {
        font-family: var(--fh); font-size: 11px; font-weight: 700;
        letter-spacing: 2px; text-transform: uppercase;
        color: var(--muted); margin-bottom: 8px; display: block;
      }
      .conv-amount-input {
        width: 100%; height: 60px; font-family: var(--fh);
        font-size: 28px; font-weight: 800; color: var(--navy);
        border: 2px solid var(--border); border-radius: 12px;
        padding: 0 20px; transition: border-color .2s;
        background: var(--paper);
      }
      .conv-amount-input:focus {
        outline: none; border-color: var(--blue);
        box-shadow: 0 0 0 4px rgba(26,79,214,.1);
        background: #fff;
      }

      /* Currency selectors row */
      .conv-row {
        display: grid;
        grid-template-columns: 1fr 48px 1fr;
        gap: 12px; align-items: end; margin-bottom: 24px;
      }
      .conv-sel-wrap { }
      .conv-sel-label {
        font-family: var(--fh); font-size: 11px; font-weight: 700;
        letter-spacing: 2px; text-transform: uppercase;
        color: var(--muted); margin-bottom: 8px; display: block;
      }
      .conv-select {
        width: 100%; height: 52px; border: 2px solid var(--border);
        border-radius: 12px; padding: 0 14px;
        font-size: 15px; font-weight: 700; color: var(--navy);
        background: var(--paper); cursor: pointer; transition: border-color .2s;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%2364748b' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        padding-right: 36px;
      }
      .conv-select:focus { outline: none; border-color: var(--blue); background-color: #fff; }

      /* Swap button */
      .swap-btn {
        width: 48px; height: 52px; border-radius: 12px;
        border: 2px solid var(--border); background: var(--paper);
        cursor: pointer; display: flex; align-items: center;
        justify-content: center; font-size: 20px;
        transition: all .2s; color: var(--navy);
      }
      .swap-btn:hover {
        background: var(--navy); color: #fff; border-color: var(--navy);
        transform: rotate(180deg);
      }

      /* Convert button */
      .conv-btn {
        width: 100%; height: 54px; border-radius: 12px;
        border: none; background: var(--blue); color: #fff;
        font-family: var(--fh); font-size: 17px; font-weight: 800;
        cursor: pointer; transition: all .2s; letter-spacing: .3px;
        display: flex; align-items: center; justify-content: center; gap: 8px;
      }
      .conv-btn:hover { background: #1040b8; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(26,79,214,.35); }
      .conv-btn:active { transform: translateY(0); }
      .conv-btn.loading { background: var(--muted); pointer-events: none; }

      /* ── RESULT PANEL ── */
      .result-panel {
        background: var(--navy);
        padding: 28px 36px;
        display: none;
      }
      .result-panel.show { display: block; }
      .result-main {
        display: flex; align-items: flex-start;
        justify-content: space-between; flex-wrap: wrap; gap: 16px;
        margin-bottom: 20px;
      }
      .result-from { font-size: 16px; color: rgba(255,255,255,.5); margin-bottom: 6px; }
      .result-to-val {
        font-family: var(--fh); font-size: clamp(32px,5vw,52px);
        font-weight: 900; color: var(--gold); letter-spacing: -2px;
        line-height: 1;
      }
      .result-to-currency { font-size: 18px; color: rgba(255,255,255,.5); margin-top: 6px; }
      .result-rate-box {
        background: rgba(255,255,255,.07); border-radius: 12px;
        padding: 14px 18px; text-align: right;
      }
      .rate-label { font-size: 11px; color: rgba(255,255,255,.4); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
      .rate-val   { font-family: var(--fh); font-size: 18px; font-weight: 800; color: #fff; }
      .rate-inv   { font-size: 12px; color: rgba(255,255,255,.4); margin-top: 4px; }
      .rate-time  { font-size: 11px; color: rgba(255,255,255,.3); margin-top: 8px; }

      /* Quick multi amounts */
      .quick-row {
        display: grid; grid-template-columns: repeat(4,1fr); gap: 10px;
        padding: 20px 36px; background: rgba(255,255,255,.04);
        border-top: 1px solid rgba(255,255,255,.06);
      }
      .quick-card {
        background: rgba(255,255,255,.05); border-radius: 10px;
        padding: 12px 10px; text-align: center;
        border: 1px solid rgba(255,255,255,.08);
      }
      .qc-from { font-size: 12px; color: rgba(255,255,255,.4); margin-bottom: 4px; }
      .qc-to   { font-family: var(--fh); font-size: 15px; font-weight: 800; color: #fff; }

      /* ── POPULAR PAIRS ── */
      .pairs-section { padding: 56px 5%; background: var(--paper); }
      .pairs-section .container-xl { max-width: 1100px; margin: 0 auto; }
      .pairs-eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 10px; }
      .pairs-h { font-family: var(--fh); font-size: clamp(22px,3vw,32px); font-weight: 800; color: var(--navy); letter-spacing: -1px; margin-bottom: 20px; }
      .pairs-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(180px,1fr)); gap: 10px; }
      .pair-btn {
        background: #fff; border: 1.5px solid var(--border); border-radius: 12px;
        padding: 14px 16px; cursor: pointer; text-align: left;
        transition: all .2s; display: flex; align-items: center; gap: 10px;
      }
      .pair-btn:hover { border-color: var(--blue); background: #eef3ff; transform: translateY(-2px); }
      .pair-flags { font-size: 20px; line-height: 1; }
      .pair-code  { font-family: var(--fh); font-size: 13px; font-weight: 800; color: var(--navy); }
      .pair-name  { font-size: 11px; color: var(--muted); margin-top: 1px; }
      .pair-rate  { font-family: var(--fh); font-size: 12px; font-weight: 700; color: var(--blue); margin-left: auto; }

      /* ── SECTION 1 ── */
      .s1 { padding: 56px 5%; background: #fff; }
      .s1 .container { max-width: 1100px; margin: 0 auto; }
      .s1-eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 12px; }
      .s1-h { font-family: var(--fh); font-size: clamp(24px,3vw,36px); font-weight: 800; color: var(--navy); letter-spacing: -1.2px; line-height: 1.1; margin-bottom: 16px; }
      .s1-p { font-size: 15px; color: var(--muted); line-height: 1.8; margin-bottom: 0; }
      .s1-accent { color: var(--blue); }

      /* ── STEP CARDS ── */
      .step-card { background: #fff; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,.08); transition: .3s; }
      .step-card:hover { transform: translateY(-6px); }
      .step-icon  { font-size: 32px; color: var(--blue); margin-bottom: 10px; }
      .step-arrow { font-size: 26px; color: var(--blue); }

      /* ── CALC GRID ── */
      .cn-section { padding: 64px 5%; }
      .cn-section.bg-paper { background: var(--paper); }
      .container-xl { max-width: 1200px; margin: 0 auto; }
      .eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 10px; }
      .sec-h { font-family: var(--fh); font-size: clamp(28px,4vw,44px); font-weight: 800; line-height: 1.05; letter-spacing: -1.5px; color: var(--navy); margin-bottom: 14px; }
      .sec-p { font-size: 16px; color: var(--muted); max-width: 500px; line-height: 1.65; }

      .cat-tabs { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 28px; }
      .ctab { padding: 8px 18px; border-radius: 100px; font-family: var(--fh); font-size: 13px; font-weight: 600; border: 1.5px solid var(--border); background: var(--white); color: var(--muted); cursor: pointer; transition: all .2s; }
      .ctab:hover { border-color: var(--navy); color: var(--navy); }
      .ctab.active    { background: var(--navy); border-color: var(--navy); color: #fff; }
      .ctab.active.tf { background: var(--blue); border-color: var(--blue); color: #fff; }
      .ctab.active.th { background: #059669;     border-color: #059669;     color: #fff; }
      .ctab.active.tt { background: #0057ff;     border-color: #0057ff;     color: #fff; }
      .ctab.active.td { background: #d97706;     border-color: #d97706;     color: #fff; }
      .ctab.active.ts { background: #7c3aed;     border-color: #7c3aed;     color: #fff; }

      .calcs-grid { display: grid; grid-template-columns: repeat(auto-fill,minmax(210px,1fr)); gap: 14px; }
      .cc { background: whitesmoke; border-radius: var(--r); border: 1.5px solid var(--border); padding: 22px 18px 18px; display: flex; flex-direction: column; transition: transform .22s,box-shadow .22s,border-color .2s; position: relative; overflow: hidden; text-decoration: none; }
      .cc::after { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: var(--cc-accent,var(--blue)); opacity: 0; transition: opacity .2s; }
      .cc:hover { transform: translateY(-6px); box-shadow: 0 18px 40px rgba(10,22,40,.1); border-color: rgba(10,22,40,.15); }
      .cc:hover::after { opacity: 1; }
      .cc-ico { width: 46px; height: 46px; border-radius: 13px; background: var(--cc-bg,#eef3ff); display: flex; align-items: center; justify-content: center; font-size: 21px; margin-bottom: 13px; transition: transform .2s; }
      .cc:hover .cc-ico { transform: scale(1.1) rotate(-6deg); }
      .cc-name { font-family: var(--fh); font-size: 16px; font-weight: 700; color: var(--navy); margin-bottom: 5px; line-height: 1.2; }
      .cc-desc { font-size: 12px; color: var(--muted); line-height: 1.5; flex: 1; margin-bottom: 13px; }
      .cc-cta  { font-family: var(--fh); font-size: 12px; font-weight: 700; color: var(--cc-accent,var(--blue)); display: flex; align-items: center; gap: 4px; text-transform: uppercase; letter-spacing: .5px; }
      .cc-cta svg { transition: transform .2s; }
      .cc:hover .cc-cta svg { transform: translateX(4px); }

      /* ── LOADING SPINNER ── */
      .spinner {
        width: 20px; height: 20px; border: 3px solid rgba(255,255,255,.3);
        border-top-color: #fff; border-radius: 50%;
        animation: spin .7s linear infinite; display: inline-block;
      }
      @keyframes spin { to { transform: rotate(360deg); } }

      /* ── ERROR BOX ── */
      .error-box {
        background: #fef2f2; border: 1.5px solid #fca5a5;
        border-radius: 10px; padding: 14px 16px;
        font-size: 14px; color: var(--red); margin-top: 12px;
        display: none;
      }
      .error-box.show { display: block; }

      @media(max-width:640px) {
        .conv-row { grid-template-columns: 1fr 40px 1fr; gap: 8px; }
        .quick-row { grid-template-columns: 1fr 1fr; }
        .calcs-grid { grid-template-columns: 1fr 1fr; }
        .conv-body { padding: 24px 20px; }
        .result-panel { padding: 20px; }
        .quick-row { padding: 16px 20px; }
      }
      @media(max-width:400px) { .calcs-grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
<div class="body-inner">

<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════
     HERO – CURRENCY CONVERTER
═══════════════════════════════════════ -->
<section class="hero-section">
  <div class="container text-center hero-inner">
    <p class="hero-eyebrow">Live Exchange Rates</p>
    <h1 class="hero-title">Free Currency Converter</h1>
    <p class="hero-sub">Convert 150+ currencies with real-time exchange rates — INR, USD, EUR, GBP, AED &amp; more.</p>

    <div class="conv-card mx-auto text-start">
      <div class="conv-body">

        <!-- Amount -->
        <label class="conv-amount-label">Amount to Convert</label>
        <div class="conv-amount-wrap">
          <input type="number" id="convAmount" class="conv-amount-input"
            placeholder="1" value="1" min="0" step="any">
        </div>

        <!-- From / Swap / To -->
        <div class="conv-row">
          <div class="conv-sel-wrap">
            <label class="conv-sel-label">From Currency</label>
            <select id="fromCurrency" class="conv-select"></select>
          </div>
          <button class="swap-btn" onclick="swapCurrencies()" title="Swap currencies">⇄</button>
          <div class="conv-sel-wrap">
            <label class="conv-sel-label">To Currency</label>
            <select id="toCurrency" class="conv-select"></select>
          </div>
        </div>

        <!-- Convert Button -->
        <button class="conv-btn" id="convertBtn" onclick="doConvert()">
          <span id="btnContent">⚡ Convert Now</span>
        </button>

        <!-- Error -->
        <div class="error-box" id="errorBox">
          ⚠️ Could not fetch live rates. Please check your connection and try again.
        </div>

      </div><!-- /conv-body -->

      <!-- ── RESULT PANEL ── -->
      <div class="result-panel" id="resultPanel">
        <div class="result-main">
          <div>
            <div class="result-from" id="resultFrom">1 USD =</div>
            <div class="result-to-val" id="resultVal">0.00</div>
            <div class="result-to-currency" id="resultToCur">INR</div>
          </div>
          <div class="result-rate-box">
            <div class="rate-label">Exchange Rate</div>
            <div class="rate-val" id="rateVal">1 USD = 0 INR</div>
            <div class="rate-inv" id="rateInv">1 INR = 0 USD</div>
            <div class="rate-time" id="rateTime">Rates updated live</div>
          </div>
        </div>

        <!-- Quick amounts -->
        <div class="quick-row" id="quickRow">
          <!-- Filled by JS -->
        </div>
      </div><!-- /result-panel -->

    </div><!-- /conv-card -->
  </div>
</section>


<!-- ══════════════════════════════════════
     POPULAR CURRENCY PAIRS
═══════════════════════════════════════ -->
<section class="pairs-section">
  <div class="container-xl">
    <p class="pairs-eyebrow">Popular Conversions</p>
    <h2 class="pairs-h">Most Searched Currency Pairs</h2>
    <div class="pairs-grid" id="pairsGrid">
      <!-- Filled by JS after rates load -->
      <div style="grid-column:1/-1;text-align:center;padding:20px;color:var(--muted);font-size:14px">
        Loading live rates…
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════
     SECTION 1 – About
═══════════════════════════════════════ -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">About Currency Conversion</p>
    <h2 class="s1-h">How do <span class="s1-accent">Exchange Rates</span> work?</h2>
    <p class="s1-p">An <strong>exchange rate</strong> is the price of one currency expressed in terms of another. Rates constantly fluctuate based on international trade, inflation, interest rates, and market demand. The rates shown here are sourced from <strong>live market data</strong> and updated regularly.</p>
    <p class="s1-p" style="margin-top:12px">The <strong>mid-market rate</strong> (also called the interbank rate) is the midpoint between the buy and sell price of two currencies — it's the fairest rate you can find. Banks and money changers typically add a markup of 1–3% above this rate.</p>
    <p class="s1-p" style="margin-top:12px">Common use cases: <strong>travel planning</strong>, <strong>online shopping</strong>, <strong>freelance payments</strong>, <strong>international wire transfers</strong>, <strong>import/export billing</strong>, and <strong>investment comparisons</strong>.</p>
  </div>
</section>


<!-- ══════════════════════════════════════
     HOW TO USE
═══════════════════════════════════════ -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="s1-h text-center mb-4">How to Use This Currency Converter</h2>
    <div class="row align-items-center text-center">

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🔢</div>
          <h4>Enter Amount</h4>
          <p>Type the amount you want to convert in the input field.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🌍</div>
          <h4>Select Currencies</h4>
          <p>Choose your From and To currencies from 150+ options.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">⇄</div>
          <h4>Swap if Needed</h4>
          <p>Click the swap button to instantly reverse the conversion.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">⚡</div>
          <h4>Get Live Rate</h4>
          <p>Hit Convert to see the live result, rate, and quick reference amounts.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2 p-3">
        <div class="step-card p-4">
          <div class="step-icon">📊</div>
          <h4>Quick Amounts</h4>
          <p>See common amounts (10, 50, 100, 1000) converted automatically.</p>
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
   CURRENCY CONVERTER – Core Logic
   Uses open.er-api.com (free, no key needed)
   Fallback: frankfurter.app (also free)
═══════════════════════════════════════ */

/* ── Full currency list with flags + names ── */
const CURRENCIES = [
  { code:'AED', flag:'🇦🇪', name:'UAE Dirham' },
  { code:'AFN', flag:'🇦🇫', name:'Afghan Afghani' },
  { code:'ALL', flag:'🇦🇱', name:'Albanian Lek' },
  { code:'AMD', flag:'🇦🇲', name:'Armenian Dram' },
  { code:'ANG', flag:'🇳🇱', name:'Netherlands Antillean Guilder' },
  { code:'AOA', flag:'🇦🇴', name:'Angolan Kwanza' },
  { code:'ARS', flag:'🇦🇷', name:'Argentine Peso' },
  { code:'AUD', flag:'🇦🇺', name:'Australian Dollar' },
  { code:'AWG', flag:'🇦🇼', name:'Aruban Florin' },
  { code:'AZN', flag:'🇦🇿', name:'Azerbaijani Manat' },
  { code:'BAM', flag:'🇧🇦', name:'Bosnia-Herzegovina Mark' },
  { code:'BBD', flag:'🇧🇧', name:'Barbadian Dollar' },
  { code:'BDT', flag:'🇧🇩', name:'Bangladeshi Taka' },
  { code:'BGN', flag:'🇧🇬', name:'Bulgarian Lev' },
  { code:'BHD', flag:'🇧🇭', name:'Bahraini Dinar' },
  { code:'BIF', flag:'🇧🇮', name:'Burundian Franc' },
  { code:'BMD', flag:'🇧🇲', name:'Bermudian Dollar' },
  { code:'BND', flag:'🇧🇳', name:'Brunei Dollar' },
  { code:'BOB', flag:'🇧🇴', name:'Bolivian Boliviano' },
  { code:'BRL', flag:'🇧🇷', name:'Brazilian Real' },
  { code:'BSD', flag:'🇧🇸', name:'Bahamian Dollar' },
  { code:'BTN', flag:'🇧🇹', name:'Bhutanese Ngultrum' },
  { code:'BWP', flag:'🇧🇼', name:'Botswana Pula' },
  { code:'BYN', flag:'🇧🇾', name:'Belarusian Ruble' },
  { code:'BZD', flag:'🇧🇿', name:'Belize Dollar' },
  { code:'CAD', flag:'🇨🇦', name:'Canadian Dollar' },
  { code:'CDF', flag:'🇨🇩', name:'Congolese Franc' },
  { code:'CHF', flag:'🇨🇭', name:'Swiss Franc' },
  { code:'CLP', flag:'🇨🇱', name:'Chilean Peso' },
  { code:'CNY', flag:'🇨🇳', name:'Chinese Yuan' },
  { code:'COP', flag:'🇨🇴', name:'Colombian Peso' },
  { code:'CRC', flag:'🇨🇷', name:'Costa Rican Colón' },
  { code:'CUP', flag:'🇨🇺', name:'Cuban Peso' },
  { code:'CVE', flag:'🇨🇻', name:'Cape Verdean Escudo' },
  { code:'CZK', flag:'🇨🇿', name:'Czech Koruna' },
  { code:'DJF', flag:'🇩🇯', name:'Djiboutian Franc' },
  { code:'DKK', flag:'🇩🇰', name:'Danish Krone' },
  { code:'DOP', flag:'🇩🇴', name:'Dominican Peso' },
  { code:'DZD', flag:'🇩🇿', name:'Algerian Dinar' },
  { code:'EGP', flag:'🇪🇬', name:'Egyptian Pound' },
  { code:'ERN', flag:'🇪🇷', name:'Eritrean Nakfa' },
  { code:'ETB', flag:'🇪🇹', name:'Ethiopian Birr' },
  { code:'EUR', flag:'🇪🇺', name:'Euro' },
  { code:'FJD', flag:'🇫🇯', name:'Fijian Dollar' },
  { code:'FKP', flag:'🇫🇰', name:'Falkland Islands Pound' },
  { code:'FOK', flag:'🇫🇴', name:'Faroese Króna' },
  { code:'GBP', flag:'🇬🇧', name:'British Pound Sterling' },
  { code:'GEL', flag:'🇬🇪', name:'Georgian Lari' },
  { code:'GGP', flag:'🇬🇬', name:'Guernsey Pound' },
  { code:'GHS', flag:'🇬🇭', name:'Ghanaian Cedi' },
  { code:'GIP', flag:'🇬🇮', name:'Gibraltar Pound' },
  { code:'GMD', flag:'🇬🇲', name:'Gambian Dalasi' },
  { code:'GNF', flag:'🇬🇳', name:'Guinean Franc' },
  { code:'GTQ', flag:'🇬🇹', name:'Guatemalan Quetzal' },
  { code:'GYD', flag:'🇬🇾', name:'Guyanese Dollar' },
  { code:'HKD', flag:'🇭🇰', name:'Hong Kong Dollar' },
  { code:'HNL', flag:'🇭🇳', name:'Honduran Lempira' },
  { code:'HRK', flag:'🇭🇷', name:'Croatian Kuna' },
  { code:'HTG', flag:'🇭🇹', name:'Haitian Gourde' },
  { code:'HUF', flag:'🇭🇺', name:'Hungarian Forint' },
  { code:'IDR', flag:'🇮🇩', name:'Indonesian Rupiah' },
  { code:'ILS', flag:'🇮🇱', name:'Israeli New Shekel' },
  { code:'IMP', flag:'🇮🇲', name:'Manx Pound' },
  { code:'INR', flag:'🇮🇳', name:'Indian Rupee' },
  { code:'IQD', flag:'🇮🇶', name:'Iraqi Dinar' },
  { code:'IRR', flag:'🇮🇷', name:'Iranian Rial' },
  { code:'ISK', flag:'🇮🇸', name:'Icelandic Króna' },
  { code:'JEP', flag:'🇯🇪', name:'Jersey Pound' },
  { code:'JMD', flag:'🇯🇲', name:'Jamaican Dollar' },
  { code:'JOD', flag:'🇯🇴', name:'Jordanian Dinar' },
  { code:'JPY', flag:'🇯🇵', name:'Japanese Yen' },
  { code:'KES', flag:'🇰🇪', name:'Kenyan Shilling' },
  { code:'KGS', flag:'🇰🇬', name:'Kyrgyzstani Som' },
  { code:'KHR', flag:'🇰🇭', name:'Cambodian Riel' },
  { code:'KID', flag:'🇰🇮', name:'Kiribati Dollar' },
  { code:'KMF', flag:'🇰🇲', name:'Comorian Franc' },
  { code:'KRW', flag:'🇰🇷', name:'South Korean Won' },
  { code:'KWD', flag:'🇰🇼', name:'Kuwaiti Dinar' },
  { code:'KYD', flag:'🇰🇾', name:'Cayman Islands Dollar' },
  { code:'KZT', flag:'🇰🇿', name:'Kazakhstani Tenge' },
  { code:'LAK', flag:'🇱🇦', name:'Laotian Kip' },
  { code:'LBP', flag:'🇱🇧', name:'Lebanese Pound' },
  { code:'LKR', flag:'🇱🇰', name:'Sri Lankan Rupee' },
  { code:'LRD', flag:'🇱🇷', name:'Liberian Dollar' },
  { code:'LSL', flag:'🇱🇸', name:'Lesotho Loti' },
  { code:'LYD', flag:'🇱🇾', name:'Libyan Dinar' },
  { code:'MAD', flag:'🇲🇦', name:'Moroccan Dirham' },
  { code:'MDL', flag:'🇲🇩', name:'Moldovan Leu' },
  { code:'MGA', flag:'🇲🇬', name:'Malagasy Ariary' },
  { code:'MKD', flag:'🇲🇰', name:'Macedonian Denar' },
  { code:'MMK', flag:'🇲🇲', name:'Burmese Kyat' },
  { code:'MNT', flag:'🇲🇳', name:'Mongolian Tögrög' },
  { code:'MOP', flag:'🇲🇴', name:'Macanese Pataca' },
  { code:'MRU', flag:'🇲🇷', name:'Mauritanian Ouguiya' },
  { code:'MUR', flag:'🇲🇺', name:'Mauritian Rupee' },
  { code:'MVR', flag:'🇲🇻', name:'Maldivian Rufiyaa' },
  { code:'MWK', flag:'🇲🇼', name:'Malawian Kwacha' },
  { code:'MXN', flag:'🇲🇽', name:'Mexican Peso' },
  { code:'MYR', flag:'🇲🇾', name:'Malaysian Ringgit' },
  { code:'MZN', flag:'🇲🇿', name:'Mozambican Metical' },
  { code:'NAD', flag:'🇳🇦', name:'Namibian Dollar' },
  { code:'NGN', flag:'🇳🇬', name:'Nigerian Naira' },
  { code:'NIO', flag:'🇳🇮', name:'Nicaraguan Córdoba' },
  { code:'NOK', flag:'🇳🇴', name:'Norwegian Krone' },
  { code:'NPR', flag:'🇳🇵', name:'Nepalese Rupee' },
  { code:'NZD', flag:'🇳🇿', name:'New Zealand Dollar' },
  { code:'OMR', flag:'🇴🇲', name:'Omani Rial' },
  { code:'PAB', flag:'🇵🇦', name:'Panamanian Balboa' },
  { code:'PEN', flag:'🇵🇪', name:'Peruvian Sol' },
  { code:'PGK', flag:'🇵🇬', name:'Papua New Guinean Kina' },
  { code:'PHP', flag:'🇵🇭', name:'Philippine Peso' },
  { code:'PKR', flag:'🇵🇰', name:'Pakistani Rupee' },
  { code:'PLN', flag:'🇵🇱', name:'Polish Złoty' },
  { code:'PYG', flag:'🇵🇾', name:'Paraguayan Guaraní' },
  { code:'QAR', flag:'🇶🇦', name:'Qatari Riyal' },
  { code:'RON', flag:'🇷🇴', name:'Romanian Leu' },
  { code:'RSD', flag:'🇷🇸', name:'Serbian Dinar' },
  { code:'RUB', flag:'🇷🇺', name:'Russian Ruble' },
  { code:'RWF', flag:'🇷🇼', name:'Rwandan Franc' },
  { code:'SAR', flag:'🇸🇦', name:'Saudi Riyal' },
  { code:'SBD', flag:'🇸🇧', name:'Solomon Islands Dollar' },
  { code:'SCR', flag:'🇸🇨', name:'Seychellois Rupee' },
  { code:'SDG', flag:'🇸🇩', name:'Sudanese Pound' },
  { code:'SEK', flag:'🇸🇪', name:'Swedish Krona' },
  { code:'SGD', flag:'🇸🇬', name:'Singapore Dollar' },
  { code:'SHP', flag:'🇸🇭', name:'Saint Helenian Pound' },
  { code:'SLE', flag:'🇸🇱', name:'Sierra Leonean Leone' },
  { code:'SOS', flag:'🇸🇴', name:'Somali Shilling' },
  { code:'SRD', flag:'🇸🇷', name:'Surinamese Dollar' },
  { code:'SSP', flag:'🇸🇸', name:'South Sudanese Pound' },
  { code:'STN', flag:'🇸🇹', name:'São Tomé and Príncipe Dobra' },
  { code:'SYP', flag:'🇸🇾', name:'Syrian Pound' },
  { code:'SZL', flag:'🇸🇿', name:'Eswatini Lilangeni' },
  { code:'THB', flag:'🇹🇭', name:'Thai Baht' },
  { code:'TJS', flag:'🇹🇯', name:'Tajikistani Somoni' },
  { code:'TMT', flag:'🇹🇲', name:'Turkmenistan Manat' },
  { code:'TND', flag:'🇹🇳', name:'Tunisian Dinar' },
  { code:'TOP', flag:'🇹🇴', name:'Tongan Paʻanga' },
  { code:'TRY', flag:'🇹🇷', name:'Turkish Lira' },
  { code:'TTD', flag:'🇹🇹', name:'Trinidad and Tobago Dollar' },
  { code:'TVD', flag:'🇹🇻', name:'Tuvaluan Dollar' },
  { code:'TWD', flag:'🇹🇼', name:'New Taiwan Dollar' },
  { code:'TZS', flag:'🇹🇿', name:'Tanzanian Shilling' },
  { code:'UAH', flag:'🇺🇦', name:'Ukrainian Hryvnia' },
  { code:'UGX', flag:'🇺🇬', name:'Ugandan Shilling' },
  { code:'USD', flag:'🇺🇸', name:'United States Dollar' },
  { code:'UYU', flag:'🇺🇾', name:'Uruguayan Peso' },
  { code:'UZS', flag:'🇺🇿', name:'Uzbekistani Som' },
  { code:'VES', flag:'🇻🇪', name:'Venezuelan Bolívar' },
  { code:'VND', flag:'🇻🇳', name:'Vietnamese Đồng' },
  { code:'VUV', flag:'🇻🇺', name:'Vanuatu Vatu' },
  { code:'WST', flag:'🇼🇸', name:'Samoan Tālā' },
  { code:'XAF', flag:'🌍', name:'Central African CFA Franc' },
  { code:'XCD', flag:'🌎', name:'East Caribbean Dollar' },
  { code:'XDR', flag:'🌐', name:'Special Drawing Rights' },
  { code:'XOF', flag:'🌍', name:'West African CFA Franc' },
  { code:'XPF', flag:'🌏', name:'CFP Franc' },
  { code:'YER', flag:'🇾🇪', name:'Yemeni Rial' },
  { code:'ZAR', flag:'🇿🇦', name:'South African Rand' },
  { code:'ZMW', flag:'🇿🇲', name:'Zambian Kwacha' },
  { code:'ZWL', flag:'🇿🇼', name:'Zimbabwean Dollar' },
];

/* Popular pairs to show in the grid */
const POPULAR_PAIRS = [
  { from:'USD', to:'INR', flags:'🇺🇸→🇮🇳' },
  { from:'EUR', to:'INR', flags:'🇪🇺→🇮🇳' },
  { from:'GBP', to:'INR', flags:'🇬🇧→🇮🇳' },
  { from:'AED', to:'INR', flags:'🇦🇪→🇮🇳' },
  { from:'JPY', to:'INR', flags:'🇯🇵→🇮🇳' },
  { from:'CAD', to:'INR', flags:'🇨🇦→🇮🇳' },
  { from:'AUD', to:'INR', flags:'🇦🇺→🇮🇳' },
  { from:'SGD', to:'INR', flags:'🇸🇬→🇮🇳' },
  { from:'SAR', to:'INR', flags:'🇸🇦→🇮🇳' },
  { from:'CHF', to:'INR', flags:'🇨🇭→🇮🇳' },
  { from:'USD', to:'EUR', flags:'🇺🇸→🇪🇺' },
  { from:'USD', to:'GBP', flags:'🇺🇸→🇬🇧' },
  { from:'EUR', to:'GBP', flags:'🇪🇺→🇬🇧' },
  { from:'INR', to:'USD', flags:'🇮🇳→🇺🇸' },
  { from:'INR', to:'EUR', flags:'🇮🇳→🇪🇺' },
  { from:'INR', to:'AED', flags:'🇮🇳→🇦🇪' },
];

let cachedRates = null;
let ratesBase   = 'USD';
let ratesTime   = null;

/* ── Populate dropdowns ── */
function populateSelects() {
  const fromSel = document.getElementById('fromCurrency');
  const toSel   = document.getElementById('toCurrency');
  CURRENCIES.forEach(c => {
    const opt = `<option value="${c.code}">${c.flag} ${c.code} — ${c.name}</option>`;
    fromSel.insertAdjacentHTML('beforeend', opt);
    toSel.insertAdjacentHTML('beforeend', opt);
  });
  // Default: USD → INR
  fromSel.value = 'USD';
  toSel.value   = 'INR';
}

/* ── Fetch rates (base USD) ── */
async function fetchRates(base) {
  // Primary: open.er-api.com (free, no key)
  try {
    const res  = await fetch(`https://open.er-api.com/v6/latest/${base}`);
    const data = await res.json();
    if (data.result === 'success') {
      cachedRates = data.rates;
      ratesBase   = base;
      ratesTime   = new Date(data.time_last_update_utc).toLocaleString('en-IN', {
        day:'numeric', month:'short', year:'numeric',
        hour:'2-digit', minute:'2-digit'
      });
      return data.rates;
    }
  } catch(e) {}

  // Fallback: frankfurter.app
  try {
    const res  = await fetch(`https://api.frankfurter.app/latest?from=${base}`);
    const data = await res.json();
    if (data.rates) {
      data.rates[base] = 1;
      cachedRates = data.rates;
      ratesBase   = base;
      ratesTime   = 'Latest available';
      return data.rates;
    }
  } catch(e) {}

  return null;
}

/* ── Convert ── */
async function doConvert() {
  const amount   = parseFloat(document.getElementById('convAmount').value);
  const fromCode = document.getElementById('fromCurrency').value;
  const toCode   = document.getElementById('toCurrency').value;
  const errBox   = document.getElementById('errorBox');
  const btn      = document.getElementById('convertBtn');
  const btnContent = document.getElementById('btnContent');

  errBox.classList.remove('show');

  if (!amount || amount <= 0) { alert('Please enter a valid amount.'); return; }

  // Show loading
  btn.classList.add('loading');
  btnContent.innerHTML = '<span class="spinner"></span> Fetching live rates…';

  let rates = cachedRates && ratesBase === fromCode ? cachedRates : await fetchRates(fromCode);

  btn.classList.remove('loading');
  btnContent.innerHTML = '⚡ Convert Now';

  if (!rates) {
    errBox.classList.add('show');
    return;
  }

  const rate    = rates[toCode];
  const result  = amount * rate;
  const invRate = 1 / rate;

  /* ── Show result ── */
  document.getElementById('resultFrom').textContent  = `${amount.toLocaleString('en-IN')} ${fromCode} =`;
  document.getElementById('resultVal').textContent   =
    result.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: result >= 1 ? 2 : 6 });
  document.getElementById('resultToCur').textContent = toCode;
  document.getElementById('rateVal').textContent     =
    `1 ${fromCode} = ${rate.toFixed(rate >= 1 ? 4 : 6)} ${toCode}`;
  document.getElementById('rateInv').textContent     =
    `1 ${toCode} = ${invRate.toFixed(invRate >= 1 ? 4 : 6)} ${fromCode}`;
  document.getElementById('rateTime').textContent    =
    ratesTime ? `Rates updated: ${ratesTime}` : 'Live rates';

  /* ── Quick amounts ── */
  const quickAmounts = [1, 10, 100, 1000];
  const qr = document.getElementById('quickRow');
  qr.innerHTML = quickAmounts.map(a => {
    const v = (a * rate).toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    return `
      <div class="quick-card">
        <div class="qc-from">${a} ${fromCode}</div>
        <div class="qc-to">${v} ${toCode}</div>
      </div>`;
  }).join('');

  document.getElementById('resultPanel').classList.add('show');

  /* ── Populate popular pairs ── */
  populatePairs(rates, fromCode);
}

/* ── Popular pairs grid ── */
function populatePairs(rates, base) {
  const grid = document.getElementById('pairsGrid');
  const allRates = cachedRates || rates;

  // We have USD-base rates, convert any pair
  grid.innerHTML = POPULAR_PAIRS.map(pair => {
    let rate;
    if (ratesBase === pair.from && allRates[pair.to]) {
      rate = allRates[pair.to];
    } else if (ratesBase === pair.to && allRates[pair.from]) {
      rate = 1 / allRates[pair.from];
    } else if (allRates[pair.from] && allRates[pair.to]) {
      // Cross rate via base
      rate = allRates[pair.to] / allRates[pair.from];
    } else {
      rate = null;
    }

    const rateStr = rate
      ? rate.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: rate >= 1 ? 4 : 6 })
      : '—';

    const fromInfo = CURRENCIES.find(c => c.code === pair.from) || { flag:'🌐', name: pair.from };
    const toInfo   = CURRENCIES.find(c => c.code === pair.to)   || { flag:'🌐', name: pair.to };

    return `
      <button class="pair-btn" onclick="quickPair('${pair.from}','${pair.to}')">
        <div>
          <div class="pair-flags">${fromInfo.flag}→${toInfo.flag}</div>
        </div>
        <div>
          <div class="pair-code">${pair.from} / ${pair.to}</div>
          <div class="pair-name">1 ${pair.from}</div>
        </div>
        <div class="pair-rate">${rateStr}</div>
      </button>`;
  }).join('');
}

/* ── Quick select a popular pair ── */
function quickPair(from, to) {
  document.getElementById('fromCurrency').value = from;
  document.getElementById('toCurrency').value   = to;
  document.getElementById('convAmount').value   = 1;
  window.scrollTo({ top: 0, behavior: 'smooth' });
  doConvert();
}

/* ── Swap currencies ── */
function swapCurrencies() {
  const fromSel = document.getElementById('fromCurrency');
  const toSel   = document.getElementById('toCurrency');
  const tmp = fromSel.value;
  fromSel.value = toSel.value;
  toSel.value   = tmp;
  cachedRates   = null; // force re-fetch with new base
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
document.addEventListener('DOMContentLoaded', () => {
  populateSelects();
  document.getElementById('convAmount').addEventListener('keydown', e => {
    if (e.key === 'Enter') doConvert();
  });
  // Pre-load USD rates silently to populate popular pairs grid
  fetchRates('USD').then(rates => {
    if (rates) populatePairs(rates, 'USD');
  });
});
</script>

</body>
</html>