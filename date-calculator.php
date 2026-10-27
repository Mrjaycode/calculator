<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary SEO -->
    <title>Free Date Calculator Online | Add or Subtract Days from Date | CalcSpeed</title>
    <meta name="description" content="Calculate dates by adding or subtracting days, months, and years from any date. Also find the difference between two dates instantly with CalcSpeed's free Date Calculator.">
    <meta name="keywords" content="Date Calculator, Add Days to Date, Subtract Days from Date, Date Difference Calculator, Days Between Dates, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.calcspeed.com/date-calculator">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Free Date Calculator Online | CalcSpeed">
    <meta property="og:description" content="Add or subtract days, months, and years from any date. Find the difference between two dates instantly.">
    <meta property="og:url" content="https://www.calcspeed.com/date-calculator">
    <meta property="og:site_name" content="CalcSpeed">
    <meta property="og:image" content="https://www.calcspeed.com/img/logo-dark1.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">
    <meta name="theme-color" content="#0d6efd">

    <!-- Stylesheets -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context":"https://schema.org",
      "@type":"WebApplication",
      "name":"Date Calculator",
      "url":"https://www.calcspeed.com/date-calculator",
      "description":"Free Date Calculator to add or subtract days, months, years from any date and find difference between two dates.",
      "applicationCategory":"UtilityApplication",
      "operatingSystem":"All",
      "offers":{"@type":"Offer","price":"0","priceCurrency":"USD"}
    }
    </script>

    <style>
        *, *::before, *::after { box-sizing: border-box; }

        :root {
            --navy:  #0a1628;
            --navy2: #0d1e38;
            --navy3: #162340;
            --blue:  #1a4fd6;
            --blue2: #1040b8;
            --gold:  #f5a623;
            --white: #ffffff;
            --off:   #f7f8fc;
            --paper: #f2f4f9;
            --muted: #64748b;
            --border: rgba(10,22,40,0.09);
            --r: 16px;
            --fh: 'Outfit', sans-serif;
            --shadow: 0 4px 24px rgba(10,22,40,0.08);
        }

        /* ─── HERO SECTION ─── */
        .date-hero {
            background: linear-gradient(135deg, #2250fc, #4f6cf0);
            padding: 80px 5% 60px;
        }
        .date-hero .container { max-width: 1000px; margin: 0 auto; }
        .date-hero h1 {
            font-family: var(--fh);
            font-size: clamp(28px, 4vw, 44px);
            font-weight: 800;
            color: #fff;
            letter-spacing: -1.5px;
            margin-bottom: 10px;
        }
        .date-hero p {
            font-size: 16px;
            color: rgba(255,255,255,0.8);
            margin-bottom: 36px;
        }

        /* ─── MAIN CALC CARD ─── */
        .calc-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.18);
            overflow: hidden;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Mode Tabs */
        .mode-tabs {
            display: flex;
            border-bottom: 1.5px solid var(--border);
        }
        .mode-tab {
            flex: 1;
            padding: 16px 20px;
            text-align: center;
            font-family: var(--fh);
            font-size: 14px;
            font-weight: 700;
            color: var(--muted);
            cursor: pointer;
            border: none;
            background: var(--paper);
            transition: all 0.2s;
            letter-spacing: 0.3px;
            border-bottom: 3px solid transparent;
        }
        .mode-tab.active {
            background: #fff;
            color: var(--blue);
            border-bottom: 3px solid var(--blue);
        }
        .mode-tab:hover:not(.active) { background: #eef3ff; color: var(--navy); }

        /* Panel */
        .calc-panel { padding: 32px; display: none; }
        .calc-panel.active { display: block; }

        /* ─── MODE 1: ADD / SUBTRACT ─── */
        .panel-label {
            font-family: var(--fh);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 8px;
        }
        .date-input-row {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 16px;
            align-items: end;
            margin-bottom: 24px;
        }
        .date-input-row input[type="date"] {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid var(--border);
            border-radius: 12px;
            font-size: 15px;
            font-family: var(--fh);
            color: var(--navy);
            outline: none;
            transition: border-color 0.2s;
            background: var(--off);
        }
        .date-input-row input[type="date"]:focus { border-color: var(--blue); background: #fff; }

        /* Operation toggle */
        .op-toggle {
            display: flex;
            background: var(--paper);
            border: 1.5px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 24px;
        }
        .op-btn {
            flex: 1;
            padding: 12px 16px;
            text-align: center;
            font-family: var(--fh);
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            border: none;
            background: transparent;
            color: var(--muted);
            transition: all 0.2s;
            border-radius: 0;
        }
        .op-btn.active { background: var(--navy); color: #fff; }
        .op-btn:first-child { border-radius: 10px 0 0 10px; }
        .op-btn:last-child  { border-radius: 0 10px 10px 0; }

        /* Duration inputs */
        .duration-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 14px;
            margin-bottom: 28px;
        }
        .dur-box label {
            display: block;
            font-family: var(--fh);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 8px;
        }
        .dur-box input {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid var(--border);
            border-radius: 12px;
            font-size: 22px;
            font-family: var(--fh);
            font-weight: 700;
            color: var(--navy);
            text-align: center;
            outline: none;
            background: var(--off);
            transition: border-color 0.2s;
            appearance: none;
            -moz-appearance: textfield;
        }
        .dur-box input:focus { border-color: var(--blue); background: #fff; }
        .dur-box input::-webkit-outer-spin-button,
        .dur-box input::-webkit-inner-spin-button { -webkit-appearance: none; }

        /* Result box */
        .result-box {
            background: linear-gradient(135deg, var(--navy), var(--navy3));
            border-radius: 16px;
            padding: 28px 32px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .result-box::before {
            content: '';
            position: absolute; inset: 0;
            background-image: linear-gradient(rgba(245,166,35,.04) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(245,166,35,.04) 1px, transparent 1px);
            background-size: 28px 28px;
        }
        .result-label {
            font-family: var(--fh);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.4);
            margin-bottom: 10px;
            position: relative;
        }
        .result-date {
            font-family: var(--fh);
            font-size: clamp(22px, 4vw, 36px);
            font-weight: 900;
            color: #fff;
            letter-spacing: -1px;
            line-height: 1.1;
            margin-bottom: 8px;
            position: relative;
        }
        .result-date span { color: var(--gold); }
        .result-sub {
            font-size: 13px;
            color: rgba(255,255,255,0.35);
            position: relative;
        }

        /* ─── MODE 2: DIFFERENCE ─── */
        .diff-grid {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 16px;
            align-items: center;
            margin-bottom: 28px;
        }
        .diff-sep {
            font-family: var(--fh);
            font-size: 14px;
            font-weight: 800;
            color: var(--muted);
            text-align: center;
            background: var(--paper);
            border: 1.5px solid var(--border);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .date-field label {
            display: block;
            font-family: var(--fh);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 8px;
        }
        .date-field input[type="date"] {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid var(--border);
            border-radius: 12px;
            font-size: 15px;
            font-family: var(--fh);
            color: var(--navy);
            outline: none;
            background: var(--off);
            transition: border-color 0.2s;
        }
        .date-field input[type="date"]:focus { border-color: var(--blue); background: #fff; }

        /* Diff results grid */
        .diff-results {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            margin-top: 8px;
        }
        .diff-stat {
            background: var(--paper);
            border: 1.5px solid var(--border);
            border-radius: 14px;
            padding: 18px 12px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .diff-stat:hover { transform: translateY(-3px); box-shadow: var(--shadow); }
        .diff-stat-n {
            font-family: var(--fh);
            font-size: clamp(20px, 3vw, 30px);
            font-weight: 900;
            color: var(--navy);
            line-height: 1;
            margin-bottom: 6px;
        }
        .diff-stat-n.blue   { color: var(--blue); }
        .diff-stat-n.green  { color: #059669; }
        .diff-stat-n.amber  { color: #d97706; }
        .diff-stat-n.purple { color: #7c3aed; }
        .diff-stat-l {
            font-size: 11px;
            font-weight: 600;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Swap button */
        .btn-swap {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--paper);
            border: 1.5px solid var(--border);
            border-radius: 10px;
            padding: 9px 18px;
            font-family: var(--fh);
            font-size: 13px;
            font-weight: 700;
            color: var(--navy);
            cursor: pointer;
            transition: all 0.2s;
            margin-bottom: 20px;
        }
        .btn-swap:hover { background: var(--navy); color: #fff; border-color: var(--navy); }

        /* ─── ABOUT SECTION ─── */
        .s1 { padding: 64px 5%; background: #fff; }
        .s1 .container { max-width: 1100px; margin: 0 auto; }
        .s1-eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 12px; }
        .s1-h { font-family: var(--fh); font-size: clamp(24px,3vw,38px); font-weight: 800; color: var(--navy); letter-spacing: -1.2px; line-height: 1.1; margin-bottom: 16px; }
        .s1-p { font-size: 15px; color: var(--muted); line-height: 1.8; margin-bottom: 0; }
        .s1-accent { color: var(--blue); }

        /* ─── STEP CARDS ─── */
        .step-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: 0.3s;
        }
        .step-card:hover { transform: translateY(-6px); }
        .step-icon { font-size: 32px; color: #1a4fd6; margin-bottom: 10px; }
        .step-arrow { font-size: 26px; color: #2250fc; }

        /* ─── FORMULA SECTION ─── */
        .s3 { padding: 64px 5%; background: #fff; }
        .s3 .container { max-width: 1100px; margin: 0 auto; }
        .s3-header { text-align: center; margin-bottom: 48px; }
        .s3-eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 10px; }
        .s3-h { font-family: var(--fh); font-size: clamp(24px,3vw,36px); font-weight: 800; color: var(--navy); letter-spacing: -1px; line-height: 1.1; margin-bottom: 8px; }
        .s3-sub { font-size: 14px; color: var(--muted); }

        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        .ef-card { border: 1.5px solid var(--border); border-radius: 18px; overflow: hidden; }
        .ef-card-head { padding: 18px 24px; border-bottom: 1.5px solid var(--border); background: var(--paper); display: flex; align-items: center; gap: 12px; }
        .ef-card-head-ico { width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0; }
        .ef-card-head-t { font-family: var(--fh); font-size: 15px; font-weight: 700; color: var(--navy); }
        .ef-card-head-s { font-size: 12px; color: var(--muted); margin-top: 2px; }
        .ef-card-body { padding: 24px; background: #fff; }

        .use-list { list-style: none; padding: 0; margin: 0; }
        .use-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid var(--border);
            font-size: 14px;
            color: var(--muted);
            line-height: 1.5;
        }
        .use-list li:last-child { border-bottom: none; }
        .use-list li strong { color: var(--navy); }
        .use-ico { font-size: 18px; flex-shrink: 0; margin-top: 1px; }

        .tip-box { background: #fffbf0; border: 1.5px solid #fde68a; border-radius: 12px; padding: 16px 18px; margin-top: 16px; }
        .tip-box p { font-size: 13px; color: #92400e; line-height: 1.65; margin: 0; }
        .tip-box strong { color: #78350f; }

        /* ─── ALL CALCS SECTION ─── */
        .cn-section { padding: 72px 5%; }
        .cn-section.bg-paper { background: var(--paper); }
        .container-xl { max-width: 1200px; margin: 0 auto; }
        .eyebrow { font-family: var(--fh); font-size: 11px; font-weight: 700; letter-spacing: 3px; text-transform: uppercase; color: var(--blue); margin-bottom: 10px; }
        .sec-h { font-family: var(--fh); font-size: clamp(28px,4vw,48px); font-weight: 800; line-height: 1.05; letter-spacing: -1.5px; color: var(--navy); margin-bottom: 14px; }
        .sec-p { font-size: 16px; color: var(--muted); max-width: 500px; line-height: 1.65; }

        .cat-tabs { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 28px; }
        .ctab { padding: 8px 18px; border-radius: 100px; font-family: var(--fh); font-size: 13px; font-weight: 600; border: 1.5px solid var(--border); background: var(--white); color: var(--muted); cursor: pointer; transition: all .2s; }
        .ctab:hover { border-color: var(--navy); color: var(--navy); }
        .ctab.active       { background: var(--navy);  border-color: var(--navy);  color: #fff; }
        .ctab.active.tf    { background: var(--blue);  border-color: var(--blue);  color: #fff; }
        .ctab.active.th    { background: #059669;      border-color: #059669;      color: #fff; }
        .ctab.active.tt    { background: #0057ff;      border-color: #0057ff;      color: #fff; }
        .ctab.active.td    { background: #d97706;      border-color: #d97706;      color: #fff; }
        .ctab.active.ts    { background: #7c3aed;      border-color: #7c3aed;      color: #fff; }

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

        input[type="number"], input[type="date"] { line-height: 18px; min-height: 40px; }

        @media(max-width: 700px) {
            .diff-grid { grid-template-columns: 1fr; }
            .diff-sep { display: none; }
            .diff-results { grid-template-columns: 1fr 1fr; }
            .duration-row { grid-template-columns: 1fr; }
            .info-grid { grid-template-columns: 1fr; }
            .calc-panel { padding: 20px; }
        }
        @media(max-width: 400px) {
            .diff-results { grid-template-columns: 1fr 1fr; }
            .calcs-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
<div class="body-inner">

<?php include 'header.php'; ?>

<!-- ─── HERO + CALCULATOR ─── -->
<section class="date-hero">
    <div class="container">
        <h1>📅 Free Date Calculator</h1>
        <p>Add or subtract days from any date, or find the difference between two dates instantly.</p>

        <div class="calc-card">

            <!-- Mode Tabs -->
            <div class="mode-tabs">
                <button class="mode-tab active" onclick="switchMode('addsub', this)">➕ Add / Subtract Days</button>
                <button class="mode-tab"        onclick="switchMode('diff', this)">📏 Date Difference</button>
            </div>

            <!-- ── PANEL 1: ADD / SUBTRACT ── -->
            <div class="calc-panel active" id="panel-addsub">
                <div class="row g-0">
                    <div class="col-md-8 pe-md-4">

                        <p class="panel-label">Start Date</p>
                        <input type="date" id="startDate" style="width:100%;padding:12px 16px;border:1.5px solid var(--border);border-radius:12px;font-size:15px;font-family:var(--fh);color:var(--navy);outline:none;background:var(--off);margin-bottom:22px;transition:border-color 0.2s;" oninput="calcAddSub()">

                        <p class="panel-label">Operation</p>
                        <div class="op-toggle" style="margin-bottom:22px">
                            <button class="op-btn active" id="btnAdd" onclick="setOp('add')">➕ Add</button>
                            <button class="op-btn"        id="btnSub" onclick="setOp('subtract')">➖ Subtract</button>
                        </div>

                        <p class="panel-label">Duration</p>
                        <div class="duration-row">
                            <div class="dur-box">
                                <label>Years</label>
                                <input type="number" id="dYears"  min="0" value="0" oninput="calcAddSub()">
                            </div>
                            <div class="dur-box">
                                <label>Months</label>
                                <input type="number" id="dMonths" min="0" value="0" oninput="calcAddSub()">
                            </div>
                            <div class="dur-box">
                                <label>Days</label>
                                <input type="number" id="dDays"   min="0" value="0" oninput="calcAddSub()">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex align-items-center">
                        <div class="result-box w-100">
                            <p class="result-label">Result Date</p>
                            <p class="result-date" id="addSubResult"><span>—</span></p>
                            <p class="result-sub"  id="addSubDay">Enter a date to calculate</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── PANEL 2: DIFFERENCE ── -->
            <div class="calc-panel" id="panel-diff">

                <button class="btn-swap" onclick="swapDates()">
                    🔄 Swap Dates
                </button>

                <div class="diff-grid">
                    <div class="date-field">
                        <label>Start Date</label>
                        <input type="date" id="diffStart" oninput="calcDiff()">
                    </div>
                    <div class="diff-sep">→</div>
                    <div class="date-field">
                        <label>End Date</label>
                        <input type="date" id="diffEnd" oninput="calcDiff()">
                    </div>
                </div>

                <div class="diff-results">
                    <div class="diff-stat">
                        <div class="diff-stat-n blue"   id="diffDays">—</div>
                        <div class="diff-stat-l">Days</div>
                    </div>
                    <div class="diff-stat">
                        <div class="diff-stat-n green"  id="diffWeeks">—</div>
                        <div class="diff-stat-l">Weeks</div>
                    </div>
                    <div class="diff-stat">
                        <div class="diff-stat-n amber"  id="diffMonths">—</div>
                        <div class="diff-stat-l">Months</div>
                    </div>
                    <div class="diff-stat">
                        <div class="diff-stat-n purple" id="diffYears">—</div>
                        <div class="diff-stat-l">Years</div>
                    </div>
                </div>

                <!-- Breakdown -->
                <div id="diffBreakdown" style="margin-top:16px;display:none">
                    <div class="result-box">
                        <p class="result-label">Exact Duration</p>
                        <p class="result-date" id="diffExact" style="font-size:clamp(16px,2.5vw,24px)"><span>—</span></p>
                        <p class="result-sub"  id="diffRange">—</p>
                    </div>
                </div>
            </div>

        </div><!-- /calc-card -->
    </div>
</section>

<!-- ─── ABOUT SECTION ─── -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">About This Tool</p>
    <h2 class="s1-h">What does the <span class="s1-accent">Date Calculator</span> do?</h2>
    <p class="s1-p">The <strong>Date Calculator</strong> helps you work with dates in two ways. In <strong>Add / Subtract</strong> mode, you can find a future or past date by adding or subtracting any combination of years, months, and days from a starting date — just like Windows Calculator's Date Calculation feature. In <strong>Date Difference</strong> mode, it calculates the exact gap between two dates in days, weeks, months, and years.</p>
    <p class="s1-p" style="margin-top:12px">It's especially useful for calculating <strong>deadlines</strong>, <strong>project timelines</strong>, <strong>due dates</strong>, <strong>age calculations</strong>, <strong>loan tenures</strong>, and <strong>event countdowns</strong>.</p>
  </div>
</section>

<!-- ─── HOW TO USE ─── -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="s1-h text-center mb-5">How to Use the Date Calculator</h2>
        <div class="row align-items-center text-center">
            <div class="col-md-3">
                <div class="step-card p-4">
                    <i class="fa fa-calendar-alt step-icon"></i>
                    <h4>Pick Start Date</h4>
                    <p>Select the base date you want to calculate from.</p>
                </div>
            </div>
            <div class="col-md-1 d-none d-md-block">
                <i class="fa fa-arrow-right step-arrow"></i>
            </div>
            <div class="col-md-3">
                <div class="step-card p-4">
                    <i class="fa fa-plus-minus step-icon"></i>
                    <h4>Choose Add or Subtract</h4>
                    <p>Select whether you want a future or past date.</p>
                </div>
            </div>
            <div class="col-md-1 d-none d-md-block">
                <i class="fa fa-arrow-right step-arrow"></i>
            </div>
            <div class="col-md-3">
                <div class="step-card p-4">
                    <i class="fa fa-clock step-icon"></i>
                    <h4>Enter Duration</h4>
                    <p>Type years, months, or days to add or subtract.</p>
                </div>
            </div>
            <div class="col-md-1 d-none d-md-block">
                <i class="fa fa-arrow-right step-arrow"></i>
            </div>
            <div class="col-md-3">
                <div class="step-card p-4">
                    <i class="fa fa-check-circle step-icon"></i>
                    <h4>Get Result Instantly</h4>
                    <p>Your result date updates in real-time as you type.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ─── INFO CARDS ─── -->
<section class="s3">
  <div class="container">
    <div class="s3-header">
      <p class="s3-eyebrow">Reference</p>
      <h2 class="s3-h">Common uses &amp; quick tips</h2>
      <p class="s3-sub">Real-world scenarios where a date calculator saves time.</p>
    </div>
    <div class="info-grid">

      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#ecfdf5">📋</div>
          <div>
            <div class="ef-card-head-t">Common use cases</div>
            <div class="ef-card-head-s">Everyday scenarios for date calculation</div>
          </div>
        </div>
        <div class="ef-card-body">
          <ul class="use-list">
            <li><span class="use-ico">🏠</span><div><strong>Loan due dates</strong> — Add loan tenure months to disbursement date to find the final EMI date.</div></li>
            <li><span class="use-ico">📦</span><div><strong>Delivery deadlines</strong> — Add shipping days to order date for expected delivery.</div></li>
            <li><span class="use-ico">🎂</span><div><strong>Age in days</strong> — Find difference between birth date and today for exact age in days.</div></li>
            <li><span class="use-ico">📁</span><div><strong>Project timelines</strong> — Add sprint duration to start date for milestone targets.</div></li>
            <li><span class="use-ico">🏥</span><div><strong>Medical follow-ups</strong> — Add days to appointment date for next review.</div></li>
            <li><span class="use-ico">🎓</span><div><strong>Exam countdowns</strong> — Days remaining until exam date from today.</div></li>
          </ul>
        </div>
      </div>

      <div class="ef-card">
        <div class="ef-card-head">
          <div class="ef-card-head-ico" style="background:#eef3ff">💡</div>
          <div>
            <div class="ef-card-head-t">Tips &amp; how it works</div>
            <div class="ef-card-head-s">Understanding date arithmetic</div>
          </div>
        </div>
        <div class="ef-card-body">
          <ul class="use-list">
            <li><span class="use-ico">📅</span><div><strong>Month-end handling</strong> — Adding 1 month to Jan 31 gives Feb 28/29, automatically adjusted to the last day of that month.</div></li>
            <li><span class="use-ico">🗓️</span><div><strong>Leap years</strong> — Feb 29 is handled correctly for leap years in all calculations.</div></li>
            <li><span class="use-ico">🔄</span><div><strong>Combining units</strong> — You can add 1 year + 3 months + 15 days simultaneously for precise targeting.</div></li>
            <li><span class="use-ico">➖</span><div><strong>Subtract mode</strong> — Use subtract to find what date was 90 days ago, 6 months ago, etc.</div></li>
          </ul>
          <div class="tip-box">
            <p><strong>Pro tip:</strong> Switch to <em>Date Difference</em> mode to find exactly how many days, weeks, or months remain until a deadline — perfect for exam prep or project planning.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ─── ALL CALCULATORS ─── -->
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
        ['health','bmi-calculator.php','⚖️','BMI Calculator','Body Mass Index and ideal weight range.','#059669','#ecfdf5'],
        ['health','calorie-calculator.php','🔥','Calorie Calculator','Daily calorie needs by age, weight and activity.','#059669','#ecfdf5'],
        ['health','water-intake-calculator.php','💧','Water Intake','Recommended daily water intake for your body.','#059669','#ecfdf5'],
        ['time','age-calculator.php','🎂','Age Calculator','Exact age in years, months and days.','#0057ff','#eef4ff'],
        ['time','date-calculator.php','📅','Date Calculator','Add or subtract days from any date.','#0057ff','#eef4ff'],
        ['time','date-difference.php','📏','Date Difference','Gap between two dates in days and months.','#0057ff','#eef4ff'],
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
      $arrow = '<svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true"><path d="M1 6h10M6 1l5 5-5 5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>';
      foreach($cards as $c) {
        [$cat,$href,$ico,$name,$desc,$accent,$bg] = $c;
        echo '<a href="'.$href.'" class="cc" data-cat="'.$cat.'" style="--cc-accent:'.$accent.';--cc-bg:'.$bg.'" aria-label="Open '.$name.'">';
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
// ─── INIT: set today as default ───
(function() {
    const today = new Date();
    const fmt = d => d.toISOString().split('T')[0];
    document.getElementById('startDate').value = fmt(today);
    document.getElementById('diffStart').value = fmt(today);
    document.getElementById('diffEnd').value   = fmt(today);
    calcAddSub();
    calcDiff();
})();

// ─── MODE SWITCH ───
function switchMode(mode, btn) {
    document.querySelectorAll('.mode-tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.calc-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('panel-' + mode).classList.add('active');
}

// ─── OPERATION TOGGLE ───
let currentOp = 'add';
function setOp(op) {
    currentOp = op;
    document.getElementById('btnAdd').classList.toggle('active', op === 'add');
    document.getElementById('btnSub').classList.toggle('active', op === 'subtract');
    calcAddSub();
}

// ─── ADD / SUBTRACT LOGIC ───
function calcAddSub() {
    const startVal = document.getElementById('startDate').value;
    if (!startVal) return;

    const years  = parseInt(document.getElementById('dYears').value)  || 0;
    const months = parseInt(document.getElementById('dMonths').value) || 0;
    const days   = parseInt(document.getElementById('dDays').value)   || 0;

    const d = new Date(startVal + 'T00:00:00');
    if (isNaN(d)) return;

    if (currentOp === 'add') {
        d.setFullYear(d.getFullYear() + years);
        d.setMonth(d.getMonth() + months);
        d.setDate(d.getDate() + days);
    } else {
        d.setFullYear(d.getFullYear() - years);
        d.setMonth(d.getMonth() - months);
        d.setDate(d.getDate() - days);
    }

    const dayNames   = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    const monthNames = ['January','February','March','April','May','June','July','August','September','October','November','December'];

    const resultEl = document.getElementById('addSubResult');
    const dayEl    = document.getElementById('addSubDay');

    const dateStr = d.getDate() + ' ' + monthNames[d.getMonth()] + ' ' + d.getFullYear();
    resultEl.innerHTML = '<span>' + dateStr + '</span>';
    dayEl.textContent  = dayNames[d.getDay()];
}

// ─── DIFF LOGIC ───
function calcDiff() {
    const s = document.getElementById('diffStart').value;
    const e = document.getElementById('diffEnd').value;
    if (!s || !e) return;

    const d1 = new Date(s + 'T00:00:00');
    const d2 = new Date(e + 'T00:00:00');
    if (isNaN(d1) || isNaN(d2)) return;

    const sign    = d2 >= d1 ? 1 : -1;
    const start   = sign === 1 ? d1 : d2;
    const end     = sign === 1 ? d2 : d1;

    const totalMs   = end - start;
    const totalDays = Math.round(totalMs / 86400000);
    const totalWeeks = (totalDays / 7).toFixed(1);
    const totalMonths = Math.round(totalDays / 30.4375);
    const totalYears  = (totalDays / 365.25).toFixed(2);

    // Exact breakdown
    let y = end.getFullYear() - start.getFullYear();
    let m = end.getMonth() - start.getMonth();
    let d = end.getDate()  - start.getDate();
    if (d < 0) { m--; d += new Date(end.getFullYear(), end.getMonth(), 0).getDate(); }
    if (m < 0) { y--; m += 12; }

    document.getElementById('diffDays').textContent   = totalDays.toLocaleString('en-IN');
    document.getElementById('diffWeeks').textContent  = totalWeeks;
    document.getElementById('diffMonths').textContent = totalMonths.toLocaleString('en-IN');
    document.getElementById('diffYears').textContent  = totalYears;

    const parts = [];
    if (y > 0) parts.push(y + (y === 1 ? ' year' : ' years'));
    if (m > 0) parts.push(m + (m === 1 ? ' month' : ' months'));
    if (d > 0) parts.push(d + (d === 1 ? ' day' : ' days'));

    const monthNames = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    const fmtDate = dt => dt.getDate() + ' ' + monthNames[dt.getMonth()] + ' ' + dt.getFullYear();

    const breakdown = document.getElementById('diffBreakdown');
    breakdown.style.display = 'block';
    document.getElementById('diffExact').innerHTML =
        '<span>' + (parts.length ? parts.join(', ') : '0 days') + '</span>';
    document.getElementById('diffRange').textContent =
        fmtDate(start) + ' → ' + fmtDate(end);
}

// ─── SWAP DATES ───
function swapDates() {
    const s = document.getElementById('diffStart');
    const e = document.getElementById('diffEnd');
    [s.value, e.value] = [e.value, s.value];
    calcDiff();
}

// ─── FILTER CALC CARDS ───
function filterCat(category, btn) {
    document.querySelectorAll('.ctab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('#calcsGrid .cc').forEach(card => {
        card.style.display = (category === 'all' || card.dataset.cat === category) ? 'block' : 'none';
    });
}
</script>
</body>
</html>