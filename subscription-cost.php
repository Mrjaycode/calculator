<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Subscription Cost Calculator | How Much Are Your Subscriptions Costing You? | CalcSpeed</title>
    <meta name="description" content="Free Subscription Cost Calculator — add all your subscriptions (Netflix, Spotify, gym, apps) and instantly see your total monthly, yearly and lifetime spend. Discover hidden subscription costs.">
    <meta name="keywords" content="Subscription Cost Calculator, Subscription Tracker, Netflix Spotify Cost, Monthly Subscription Total, Yearly Subscription Cost, Subscription Audit, Recurring Payments Calculator, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">

    <link rel="canonical" href="https://www.calcspeed.com/subscription-cost-calculator">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Subscription Cost Calculator | CalcSpeed">
    <meta property="og:description" content="Add all your subscriptions and see your real monthly, yearly and 10-year cost. Find out how much you're really spending.">
    <meta property="og:url" content="https://www.calcspeed.com/subscription-cost-calculator">
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
      "name":"Subscription Cost Calculator",
      "url":"https://www.calcspeed.com/subscription-cost-calculator",
      "description":"Free Subscription Cost Calculator to total all your recurring subscriptions and see monthly, yearly and lifetime cost.",
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
        --pink:   #ec4899;
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
        background: linear-gradient(135deg, #ec4899 0%, #a855f7 50%, #7c3aed 100%);
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
        height:46px; border-radius:8px; border:1.5px solid var(--border);
        width:100%; padding:0 14px; font-size:15px; color:var(--navy);
        transition:border-color .2s;
      }
      .gst-input:focus {
        outline:none; border-color:var(--pink);
        box-shadow:0 0 0 3px rgba(236,72,153,.12);
      }
      .gst-select {
        height:46px; border-radius:8px; border:1.5px solid var(--border);
        width:100%; padding:0 14px; font-size:14px; color:var(--navy);
        background:#fff; cursor:pointer;
      }

      /* ── QUICK ADD CHIPS ── */
      .quick-add-row { display:flex; gap:8px; flex-wrap:wrap; margin-bottom:18px; }
      .quick-chip {
        display:inline-flex; align-items:center; gap:6px;
        padding:8px 14px; border-radius:100px; font-size:12px; font-weight:700;
        border:1.5px solid var(--border); background:var(--paper);
        color:var(--navy); cursor:pointer; transition:all .2s;
      }
      .quick-chip:hover { border-color:var(--purple); background:#f5f0ff; transform:translateY(-2px); }

      /* ── SUBSCRIPTION TABLE ── */
      .subs-table-wrap { overflow-x:auto; margin-bottom:14px; }
      .subs-table { width:100%; border-collapse:collapse; }
      .subs-table thead tr { background:var(--navy); }
      .subs-table thead th {
        padding:10px 10px; font-family:var(--fh); font-size:11px;
        font-weight:700; color:#fff; text-align:left; letter-spacing:.5px;
        white-space:nowrap;
      }
      .subs-table thead th:last-child { text-align:center; width:44px; }
      .subs-table tbody tr { border-bottom:1px solid var(--border); }
      .subs-table tbody tr:nth-child(even) { background:#fafbfc; }
      .subs-table tbody tr:hover { background:#fdf2f8; }
      .subs-table tbody td { padding:6px 6px; }
      .sub-input {
        width:100%; border:1.5px solid transparent; border-radius:6px;
        padding:7px 9px; font-size:13px; color:var(--navy);
        background:transparent; transition:all .15s;
      }
      .sub-input:focus {
        outline:none; background:#fff;
        border-color:var(--purple); box-shadow:0 0 0 2px rgba(124,58,237,.1);
      }
      .sub-monthly {
        font-family:var(--fh); font-size:13px; font-weight:700;
        color:var(--navy); padding:7px 9px; text-align:right; white-space:nowrap;
      }
      .del-btn {
        width:30px; height:30px; border-radius:7px;
        border:none; background:#fee2e2; color:var(--red);
        cursor:pointer; font-size:15px; display:flex;
        align-items:center; justify-content:center;
        margin:auto; transition:all .15s;
      }
      .del-btn:hover { background:var(--red); color:#fff; }

      .add-row-btn {
        display:inline-flex; align-items:center; gap:7px;
        padding:9px 18px; border-radius:8px;
        border:1.5px dashed var(--purple); background:#f5f0ff;
        color:var(--purple); font-family:var(--fh); font-size:13px;
        font-weight:700; cursor:pointer; margin-top:6px;
        transition:all .2s;
      }
      .add-row-btn:hover { background:var(--purple); color:#fff; border-style:solid; }

      /* ── HERO TOTAL CARD ── */
      .total-hero {
        background:linear-gradient(135deg, var(--navy), var(--navy3));
        border-radius:16px; padding:28px; text-align:center;
        margin-top:24px; margin-bottom:20px; position:relative; overflow:hidden;
      }
      .total-hero::before {
        content:''; position:absolute; inset:0;
        background-image: linear-gradient(rgba(236,72,153,.05) 1px, transparent 1px),
                           linear-gradient(90deg, rgba(236,72,153,.05) 1px, transparent 1px);
        background-size: 30px 30px;
      }
      .th-grid { position:relative; z-index:1; display:grid; grid-template-columns:repeat(4,1fr); gap:16px; }
      .th-item { text-align:center; }
      .th-label { font-size:11px; letter-spacing:2px; text-transform:uppercase; color:rgba(255,255,255,.45); font-weight:700; margin-bottom:8px; }
      .th-value { font-family:var(--fh); font-size:clamp(22px,3vw,32px); font-weight:900; color:var(--gold); letter-spacing:-1px; line-height:1; }
      .th-value.main { color:var(--gold); }
      .th-sub { font-size:11px; color:rgba(255,255,255,.35); margin-top:4px; }

      /* ── RESULT CARDS ── */
      .result-card {
        background:var(--paper); border-radius:12px; padding:18px 14px;
        text-align:center; border:1.5px solid var(--border); transition:transform .2s;
      }
      .result-card:hover { transform:translateY(-3px); }
      .rc-label { font-size:11px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--muted); margin-bottom:8px; }
      .rc-value { font-size:24px; font-weight:800; font-family:var(--fh); line-height:1.1; }
      .rc-sub   { font-size:12px; color:var(--muted); margin-top:4px; }

      /* ── CATEGORY BREAKDOWN BAR ── */
      .cat-bar-wrap { margin-top:20px; }
      .cat-bar-row { display:flex; align-items:center; gap:12px; margin-bottom:10px; }
      .cat-bar-label { font-size:12px; font-weight:600; color:var(--navy); width:110px; flex-shrink:0; }
      .cat-bar-track { flex:1; height:10px; border-radius:100px; background:#e2e8f0; overflow:hidden; }
      .cat-bar-fill  { height:100%; border-radius:100px; transition:width .7s; }
      .cat-bar-val   { font-size:12px; font-weight:800; font-family:var(--fh); width:90px; text-align:right; flex-shrink:0; }

      /* ── INSIGHT CARD ── */
      .insight-card {
        border-radius:14px; padding:18px 22px; margin-top:18px;
        background:#fef3e2; border:1.5px solid #fed7aa;
      }
      .insight-card .ic-title { font-family:var(--fh); font-size:14px; font-weight:800; color:#9a3412; margin-bottom:4px; }
      .insight-card .ic-text  { font-size:13px; color:#9a3412; line-height:1.6; }

      /* ── SECTION 1 ── */
      .s1 { padding:56px 5%; background:#fff; }
      .s1 .container { max-width:1100px; margin:0 auto; }
      .s1-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--pink); margin-bottom:12px; }
      .s1-h { font-family:var(--fh); font-size:clamp(24px,3vw,36px); font-weight:800; color:var(--navy); letter-spacing:-1.2px; line-height:1.1; margin-bottom:16px; }
      .s1-p { font-size:15px; color:var(--muted); line-height:1.8; margin-bottom:0; }
      .s1-accent { color:var(--pink); }

      /* ── STEP CARDS ── */
      .step-card { background:#fff; border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,.08); transition:.3s; }
      .step-card:hover { transform:translateY(-6px); }
      .step-icon  { font-size:32px; color:var(--pink); margin-bottom:10px; }
      .step-arrow { font-size:26px; color:var(--pink); }

      /* ── SECTION 3 ── */
      .s3 { padding:56px 5%; background:#fff; }
      .s3 .container { max-width:1100px; margin:0 auto; }
      .s3-header { text-align:center; margin-bottom:48px; }
      .s3-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--pink); margin-bottom:10px; }
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
      .var-letter { font-family:var(--fh); font-size:18px; font-weight:800; color:var(--pink); line-height:1; margin-bottom:4px; }
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
      @media(max-width:768px) { .th-grid { grid-template-columns:1fr 1fr; gap:20px; } }
      @media(max-width:640px) { .calcs-grid { grid-template-columns:1fr 1fr; } .gst-card { padding:24px 18px; } }
      @media(max-width:400px) { .calcs-grid { grid-template-columns:1fr; } }
    </style>
</head>
<body>
<div class="body-inner">

<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════
     HERO – SUBSCRIPTION COST CALCULATOR
═══════════════════════════════════════ -->
<section class="gst-section">
  <div class="container text-center">
    <h1 class="gst-title text-white">Subscription Cost Calculator</h1>
    <p class="gst-sub text-white">Add up all your subscriptions and discover how much you're <em>really</em> spending — monthly, yearly &amp; over a lifetime.</p>

    <div class="gst-card mx-auto pt-4 text-start">

      <!-- ── Quick Add Chips ── -->
      <label class="gst-label">⚡ Quick Add Popular Subscriptions</label>
      <div class="quick-add-row">
        <div class="quick-chip" onclick="quickAdd('Netflix','Streaming',199,'monthly')">📺 Netflix ₹199</div>
        <div class="quick-chip" onclick="quickAdd('Amazon Prime','Streaming',1499,'yearly')">📦 Prime ₹1,499/yr</div>
        <div class="quick-chip" onclick="quickAdd('Spotify','Music',119,'monthly')">🎵 Spotify ₹119</div>
        <div class="quick-chip" onclick="quickAdd('YouTube Premium','Streaming',129,'monthly')">▶️ YouTube ₹129</div>
        <div class="quick-chip" onclick="quickAdd('Disney+ Hotstar','Streaming',499,'yearly')">⭐ Hotstar ₹499/yr</div>
        <div class="quick-chip" onclick="quickAdd('Gym Membership','Fitness',1500,'monthly')">🏋️ Gym ₹1,500</div>
        <div class="quick-chip" onclick="quickAdd('Cloud Storage','Utilities',130,'monthly')">☁️ Cloud ₹130</div>
        <div class="quick-chip" onclick="quickAdd('Mobile Recharge','Utilities',299,'monthly')">📱 Mobile ₹299</div>
      </div>

      <!-- ── Subscriptions Table ── -->
      <div class="subs-table-wrap">
        <table class="subs-table" id="subsTable">
          <thead>
            <tr>
              <th style="width:36px">#</th>
              <th style="min-width:140px">Subscription Name</th>
              <th style="width:130px">Category</th>
              <th style="width:100px">Amount (₹)</th>
              <th style="width:110px">Billing Cycle</th>
              <th style="width:110px">Monthly Cost</th>
              <th></th>
            </tr>
          </thead>
          <tbody id="subsBody">
            <!-- Rows injected by JS -->
          </tbody>
        </table>
      </div>
      <button class="add-row-btn" onclick="addSubRow()">＋ Add Subscription</button>

      <!-- ── TOTAL HERO ── -->
      <div class="total-hero">
        <div class="th-grid">
          <div class="th-item">
            <div class="th-label">Monthly Total</div>
            <div class="th-value main" id="totalMonthly">₹0</div>
            <div class="th-sub">per month</div>
          </div>
          <div class="th-item">
            <div class="th-label">Yearly Total</div>
            <div class="th-value" id="totalYearly" style="color:#fff">₹0</div>
            <div class="th-sub">per year</div>
          </div>
          <div class="th-item">
            <div class="th-label">5-Year Cost</div>
            <div class="th-value" id="total5Year" style="color:#fff">₹0</div>
            <div class="th-sub">if unchanged</div>
          </div>
          <div class="th-item">
            <div class="th-label">Active Subscriptions</div>
            <div class="th-value" id="totalCount" style="color:#fff">0</div>
            <div class="th-sub">tracked</div>
          </div>
        </div>
      </div>

      <!-- ── Category Breakdown ── -->
      <div id="categorySection" style="display:none">
        <div style="background:var(--paper);border-radius:12px;padding:18px;border:1.5px solid var(--border)">
          <div style="font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);margin-bottom:14px">📊 Spending by Category (Monthly)</div>
          <div class="cat-bar-wrap" id="categoryBars">
            <!-- Filled by JS -->
          </div>
        </div>
      </div>

      <!-- ── Insight Card ── -->
      <div class="insight-card" id="insightCard" style="display:none">
        <div class="ic-title" id="insightTitle">💡 Insight</div>
        <div class="ic-text" id="insightText"></div>
      </div>

    </div><!-- /gst-card -->
  </div>
</section>


<!-- ══════════════════════════════════════
     SECTION 1 – About
═══════════════════════════════════════ -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">Subscription Audit</p>
    <h2 class="s1-h">Where does your <span class="s1-accent">money quietly disappear</span>?</h2>
    <p class="s1-p">Most people underestimate their total subscription spend by <strong>2-3x</strong>. A ₹199 Netflix plan feels small, but combined with Spotify, gym, cloud storage, news apps, and that one app you forgot to cancel — it adds up to thousands every month and lakhs over a few years.</p>
    <p class="s1-p" style="margin-top:12px">This calculator gives you a complete picture: add every recurring payment you make (monthly or yearly), and instantly see your <strong>true monthly burn rate</strong>, <strong>annual cost</strong>, and what that money could mean over <strong>5 years</strong> if redirected to savings or investments.</p>
    <p class="s1-p" style="margin-top:12px">Use this once every few months as a "subscription audit" — it's one of the easiest ways to find money you didn't know you were losing.</p>
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
          <div class="step-icon">⚡</div>
          <h4>Quick Add</h4>
          <p>Click the popular subscription chips to add them instantly.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">➕</div>
          <h4>Add Custom</h4>
          <p>Click "Add Subscription" for anything not in the quick list.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🏷️</div>
          <h4>Set Category &amp; Cycle</h4>
          <p>Choose category, amount and whether it's monthly or yearly.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">📊</div>
          <h4>Auto-Calculates</h4>
          <p>Totals update live as you type — no submit button needed.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2 p-3">
        <div class="step-card p-4">
          <div class="step-icon">💡</div>
          <h4>Get Insights</h4>
          <p>See category breakdown and 5-year cost projection.</p>
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
      <h2 class="s3-h">A typical urban Indian's subscriptions</h2>
      <p class="s3-sub">See how quickly small subscriptions add up.</p>
    </div>
    <div class="s3-grid">

      <!-- Example Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#fdf2f8">📱</div>
          <div>
            <div class="ef-card-head-t">Worked example — typical subscriptions</div>
            <div class="ef-card-head-s">Streaming, music, fitness, storage &amp; mobile</div>
          </div>
        </div>
        <div class="ef-card-body">
          <table class="loan-table">
            <tr><td class="td-l">Netflix</td>            <td class="td-r">₹199/mo</td></tr>
            <tr><td class="td-l">Spotify</td>            <td class="td-r">₹119/mo</td></tr>
            <tr><td class="td-l">YouTube Premium</td>    <td class="td-r">₹129/mo</td></tr>
            <tr><td class="td-l">Amazon Prime</td>       <td class="td-r">₹1,499/yr → ₹125/mo</td></tr>
            <tr><td class="td-l">Disney+ Hotstar</td>    <td class="td-r">₹499/yr → ₹42/mo</td></tr>
            <tr><td class="td-l">Gym Membership</td>     <td class="td-r">₹1,500/mo</td></tr>
            <tr><td class="td-l">Cloud Storage</td>      <td class="td-r">₹130/mo</td></tr>
            <tr><td class="td-l"><strong>Monthly Total</strong></td><td class="td-r blue"><strong>₹2,244</strong></td></tr>
            <tr><td class="td-l"><strong>Yearly Total</strong></td> <td class="td-r green"><strong>₹26,928</strong></td></tr>
            <tr><td class="td-l"><strong>5-Year Total</strong></td> <td class="td-r red"><strong>₹1,34,640</strong></td></tr>
          </table>
          <div style="margin-top:14px;background:#fdf2f8;border:1.5px solid #fbcfe8;border-radius:10px;padding:12px 14px">
            <p style="font-size:13px;color:#831843;margin:0">😲 What feels like "a few small subscriptions" is actually <strong>₹1.34 lakh over 5 years</strong> — enough for a decent vacation or a chunk of an emergency fund.</p>
          </div>
        </div>
      </div>

      <!-- Formula Card -->
      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#eef3ff">🔢</div>
          <div>
            <div class="ef-card-head-t">How totals are calculated</div>
            <div class="ef-card-head-s">Converting yearly plans to monthly equivalent</div>
          </div>
        </div>
        <div class="ef-card-body">
          <div class="formula-dark">
            <div class="formula-eq">Monthly Equivalent = Yearly Amount ÷ 12</div>
            <div class="formula-hint">For yearly subscriptions, divided to get monthly impact</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Total Monthly = Σ (all subscriptions' monthly equivalents)</div>
          </div>
          <div class="formula-dark">
            <div class="formula-eq">Yearly Total = Monthly Total × 12</div>
          </div>
          <div class="formula-dark" style="margin-bottom:16px">
            <div class="formula-eq">5-Year Cost = Yearly Total × 5</div>
            <div class="formula-hint">Assumes prices stay the same (actual cost is usually higher due to price hikes)</div>
          </div>
          <div class="vars-grid">
            <div class="var-box"><div class="var-letter">M</div><div class="var-desc">Monthly billing amount</div></div>
            <div class="var-box"><div class="var-letter">Y</div><div class="var-desc">Yearly billing amount</div></div>
          </div>
          <div class="insight-box">
            <p><strong>Key insight:</strong> Yearly plans often look "cheaper" but hide the true cost in a single annual charge. Converting everything to a monthly equivalent reveals your real recurring burn rate — making it easy to compare and cut.</p>
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
        ['finance','subscription-cost-calculator.php','🔔','Subscription Cost Calculator','Total your monthly, yearly & 5-year subscriptions.','#1a4fd6','#eef3ff'],
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
   SUBSCRIPTION COST CALCULATOR – Core Logic
═══════════════════════════════════════ */

let subRowCount = 0;

const CATEGORIES = ['Streaming','Music','Fitness','Utilities','News & Magazines','Cloud & Software','Gaming','Education','Food & Delivery','Other'];

const CATEGORY_COLORS = {
  'Streaming':        '#ec4899',
  'Music':            '#a855f7',
  'Fitness':          '#059669',
  'Utilities':        '#1a4fd6',
  'News & Magazines': '#d97706',
  'Cloud & Software': '#0891b2',
  'Gaming':           '#7c3aed',
  'Education':        '#16a34a',
  'Food & Delivery':  '#dc2626',
  'Other':            '#64748b',
};

function fmtINR(n) {
  return '₹' + Math.round(n).toLocaleString('en-IN');
}

/* ── Add a new subscription row ── */
function addSubRow(name = '', category = 'Other', amount = '', cycle = 'monthly') {
  subRowCount++;
  const tbody = document.getElementById('subsBody');
  const tr = document.createElement('tr');
  tr.id = 'subrow_' + subRowCount;

  const catOptions = CATEGORIES.map(c =>
    `<option value="${c}" ${c === category ? 'selected' : ''}>${c}</option>`
  ).join('');

  tr.innerHTML = `
    <td style="text-align:center;font-size:13px;color:var(--muted);font-weight:600">${subRowCount}</td>
    <td><input type="text" class="sub-input sub-name" placeholder="e.g. Netflix" value="${name}" oninput="recalcSubs()"></td>
    <td><select class="sub-input sub-cat" onchange="recalcSubs()">${catOptions}</select></td>
    <td><input type="number" class="sub-input sub-amount" placeholder="0" min="0" step="any" value="${amount}" oninput="recalcSubs()" style="text-align:right"></td>
    <td>
      <select class="sub-input sub-cycle" onchange="recalcSubs()">
        <option value="monthly" ${cycle === 'monthly' ? 'selected' : ''}>Monthly</option>
        <option value="yearly"  ${cycle === 'yearly'  ? 'selected' : ''}>Yearly</option>
        <option value="weekly"  ${cycle === 'weekly'  ? 'selected' : ''}>Weekly</option>
      </select>
    </td>
    <td><div class="sub-monthly" id="submo_${subRowCount}">—</div></td>
    <td><button class="del-btn" onclick="delSubRow('subrow_${subRowCount}')">✕</button></td>
  `;
  tbody.appendChild(tr);
  recalcSubs();
}

/* ── Quick-add a preset subscription ── */
function quickAdd(name, category, amount, cycle) {
  addSubRow(name, category, amount, cycle);
}

/* ── Delete a row ── */
function delSubRow(id) {
  const el = document.getElementById(id);
  if (el) el.remove();
  recalcSubs();
}

/* ── Core recalculation ── */
function recalcSubs() {
  const rows = document.querySelectorAll('#subsBody tr');
  let totalMonthly = 0;
  const categoryTotals = {};

  rows.forEach(row => {
    const amount = parseFloat(row.querySelector('.sub-amount')?.value) || 0;
    const cycle  = row.querySelector('.sub-cycle')?.value || 'monthly';
    const cat    = row.querySelector('.sub-cat')?.value   || 'Other';

    let monthlyEquiv = 0;
    if (cycle === 'monthly') monthlyEquiv = amount;
    else if (cycle === 'yearly') monthlyEquiv = amount / 12;
    else if (cycle === 'weekly') monthlyEquiv = amount * 4.33;

    totalMonthly += monthlyEquiv;
    categoryTotals[cat] = (categoryTotals[cat] || 0) + monthlyEquiv;

    const monthlyEl = row.querySelector('.sub-monthly');
    if (monthlyEl) monthlyEl.textContent = amount > 0 ? fmtINR(monthlyEquiv) + '/mo' : '—';
  });

  const totalYearly = totalMonthly * 12;
  const total5Year  = totalYearly * 5;

  document.getElementById('totalMonthly').textContent = fmtINR(totalMonthly);
  document.getElementById('totalYearly').textContent  = fmtINR(totalYearly);
  document.getElementById('total5Year').textContent   = fmtINR(total5Year);
  document.getElementById('totalCount').textContent   = rows.length;

  // Category breakdown
  const catSection = document.getElementById('categorySection');
  const catBars    = document.getElementById('categoryBars');

  if (totalMonthly > 0 && Object.keys(categoryTotals).length > 0) {
    catSection.style.display = 'block';
    const sorted = Object.entries(categoryTotals)
      .filter(([,v]) => v > 0)
      .sort((a,b) => b[1] - a[1]);

    catBars.innerHTML = sorted.map(([cat, val]) => {
      const pct = (val / totalMonthly) * 100;
      const color = CATEGORY_COLORS[cat] || '#64748b';
      return `
        <div class="cat-bar-row">
          <div class="cat-bar-label">${cat}</div>
          <div class="cat-bar-track"><div class="cat-bar-fill" style="width:${pct}%;background:${color}"></div></div>
          <div class="cat-bar-val">${fmtINR(val)} (${pct.toFixed(0)}%)</div>
        </div>`;
    }).join('');
  } else {
    catSection.style.display = 'none';
  }

  // Insight card
  const insightCard = document.getElementById('insightCard');
  if (totalMonthly > 0) {
    insightCard.style.display = 'block';

    // Find the dominant category
    const sorted = Object.entries(categoryTotals).filter(([,v]) => v > 0).sort((a,b) => b[1] - a[1]);
    const topCat = sorted.length > 0 ? sorted[0] : null;

    let insightText = '';
    if (totalYearly >= 50000) {
      insightText = `Your subscriptions cost <strong>${fmtINR(totalYearly)} per year</strong> — that's significant! Over 5 years, this adds up to <strong>${fmtINR(total5Year)}</strong>. Consider auditing which ones you actually use regularly.`;
    } else if (totalYearly >= 15000) {
      insightText = `At <strong>${fmtINR(totalMonthly)}/month</strong>, your subscriptions total <strong>${fmtINR(totalYearly)}/year</strong>. Over 5 years that's <strong>${fmtINR(total5Year)}</strong> — roughly the cost of a decent vacation or gadget upgrade.`;
    } else {
      insightText = `Your subscription spend looks manageable at <strong>${fmtINR(totalMonthly)}/month</strong> (${fmtINR(totalYearly)}/year). Still, that's <strong>${fmtINR(total5Year)}</strong> over 5 years if unchanged.`;
    }

    if (topCat) {
      insightText += ` Your biggest category is <strong>${topCat[0]}</strong> at ${fmtINR(topCat[1])}/month.`;
    }

    document.getElementById('insightTitle').textContent = '💡 Your Subscription Insight';
    document.getElementById('insightText').innerHTML = insightText;
  } else {
    insightCard.style.display = 'none';
  }
}

/* ── Filter tabs ── */
function filterCat(category, btn) {
  document.querySelectorAll('.ctab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#calcsGrid .cc').forEach(card => {
    card.style.display = (category === 'all' || card.dataset.cat === category) ? 'block' : 'none';
  });
}

/* ── Init: add 3 default rows ── */
document.addEventListener('DOMContentLoaded', () => {
  addSubRow('Netflix', 'Streaming', 199, 'monthly');
  addSubRow('Spotify', 'Music', 119, 'monthly');
  addSubRow('Gym Membership', 'Fitness', 1500, 'monthly');
});
</script>

</body>
</html>