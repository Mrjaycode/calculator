<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Free Invoice & Billing Calculator Online | Generate Invoice with GST | CalcSpeed</title>
    <meta name="description" content="Create professional invoices instantly with CalcSpeed's free Invoice & Billing Calculator. Add unlimited line items, apply GST/tax, discounts, and get a print-ready invoice summary.">
    <meta name="keywords" content="Invoice Calculator, Billing Calculator, GST Invoice Calculator, Invoice Generator, Bill Calculator, Tax Invoice, Discount Invoice, Free Invoice Calculator, CalcSpeed">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="author" content="CalcSpeed">

    <link rel="canonical" href="https://www.calcspeed.com/invoice-calculator">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Free Invoice & Billing Calculator | CalcSpeed">
    <meta property="og:description" content="Build professional invoices with line items, GST, discounts and totals. Print or copy instantly.">
    <meta property="og:url" content="https://www.calcspeed.com/invoice-calculator">
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
      "name":"Invoice & Billing Calculator",
      "url":"https://www.calcspeed.com/invoice-calculator",
      "description":"Free Invoice & Billing Calculator to create professional invoices with GST, discounts and totals.",
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

      input:not([type="checkbox"]):not([type="radio"]), select, textarea {
        line-height: 18px; font-size: 15px;
      }

      /* ── HERO ── */
      .gst-section {
        background: linear-gradient(135deg, #1e3a5f 0%, #2d5a9e 60%, #1a4fd6 100%);
        padding: 70px 0 50px;
      }
      .gst-title { font-weight:700; font-size:clamp(26px,4vw,40px); margin-bottom:8px; }
      .gst-sub   { opacity:.9; margin-bottom:32px; font-size:15px; }
      .invoice-card {
        background:#fff; border-radius:16px;
        max-width:1060px; box-shadow:0 30px 60px rgba(0,0,0,.28); color:#333;
        overflow:hidden;
      }

      /* ── INVOICE HEADER BAND ── */
      .inv-header {
        background: var(--navy);
        padding: 28px 36px;
        display: flex; align-items: flex-start; justify-content: space-between;
        gap: 20px; flex-wrap: wrap;
      }
      .inv-brand-name {
        font-family: var(--fh); font-size: 22px; font-weight: 800;
        color: #fff; letter-spacing: -0.5px;
      }
      .inv-brand-tagline { font-size: 12px; color: rgba(255,255,255,.45); margin-top: 2px; }
      .inv-meta { text-align: right; }
      .inv-meta input {
        background: rgba(255,255,255,.08); border: 1.5px solid rgba(255,255,255,.15);
        border-radius: 8px; color: #fff; padding: 7px 12px;
        font-size: 13px; width: 200px; display: block; margin-bottom: 6px;
        margin-left: auto;
      }
      .inv-meta input::placeholder { color: rgba(255,255,255,.4); }
      .inv-meta input:focus { outline: none; border-color: var(--gold); }

      /* ── BODY SECTIONS ── */
      .inv-body { padding: 28px 36px; }

      /* Bill To / From row */
      .inv-parties { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 28px; }
      .inv-party-label {
        font-family: var(--fh); font-size: 11px; font-weight: 700;
        letter-spacing: 2px; text-transform: uppercase; color: var(--blue);
        margin-bottom: 8px;
      }
      .inv-field {
        width: 100%; border: 1.5px solid var(--border); border-radius: 8px;
        padding: 9px 12px; font-size: 14px; color: var(--navy);
        margin-bottom: 6px; transition: border-color .2s;
      }
      .inv-field:focus { outline: none; border-color: var(--blue); box-shadow: 0 0 0 3px rgba(26,79,214,.1); }
      textarea.inv-field { resize: none; height: 70px; line-height: 1.5; }

      /* ── LINE ITEMS TABLE ── */
      .items-section { margin-bottom: 24px; }
      .items-label {
        font-family: var(--fh); font-size: 11px; font-weight: 700;
        letter-spacing: 2px; text-transform: uppercase; color: var(--navy);
        margin-bottom: 10px;
      }
      .items-table-wrap { overflow-x: auto; }
      .items-table { width: 100%; border-collapse: collapse; }
      .items-table thead tr { background: var(--navy); }
      .items-table thead th {
        padding: 10px 10px; font-family: var(--fh); font-size: 11px;
        font-weight: 700; color: #fff; text-align: left; letter-spacing: .5px;
        white-space: nowrap;
      }
      .items-table thead th:last-child { text-align: center; width: 44px; }
      .items-table tbody tr { border-bottom: 1px solid var(--border); }
      .items-table tbody tr:nth-child(even) { background: #fafbfc; }
      .items-table tbody tr:hover { background: #f0f4ff; }
      .items-table tbody td { padding: 6px 6px; }
      .item-input {
        width: 100%; border: 1.5px solid transparent; border-radius: 6px;
        padding: 7px 9px; font-size: 13px; color: var(--navy);
        background: transparent; transition: all .15s;
      }
      .item-input:focus {
        outline: none; background: #fff;
        border-color: var(--blue); box-shadow: 0 0 0 2px rgba(26,79,214,.1);
      }
      .item-amount {
        font-family: var(--fh); font-size: 13px; font-weight: 700;
        color: var(--navy); padding: 7px 9px; text-align: right;
        white-space: nowrap;
      }
      .del-btn {
        width: 30px; height: 30px; border-radius: 7px;
        border: none; background: #fee2e2; color: var(--red);
        cursor: pointer; font-size: 15px; display: flex;
        align-items: center; justify-content: center;
        margin: auto; transition: all .15s;
      }
      .del-btn:hover { background: var(--red); color: #fff; }

      /* Add row button */
      .add-row-btn {
        display: inline-flex; align-items: center; gap: 7px;
        padding: 9px 18px; border-radius: 8px;
        border: 1.5px dashed var(--blue); background: #f0f4ff;
        color: var(--blue); font-family: var(--fh); font-size: 13px;
        font-weight: 700; cursor: pointer; margin-top: 10px;
        transition: all .2s;
      }
      .add-row-btn:hover { background: var(--blue); color: #fff; border-style: solid; }

      /* ── TOTALS SECTION ── */
      .inv-totals-row {
        display: grid; grid-template-columns: 1fr auto;
        gap: 24px; align-items: start; margin-top: 20px;
      }
      .inv-notes-label {
        font-family: var(--fh); font-size: 11px; font-weight: 700;
        letter-spacing: 2px; text-transform: uppercase; color: var(--muted);
        margin-bottom: 8px;
      }
      textarea.inv-notes {
        width: 100%; border: 1.5px solid var(--border); border-radius: 8px;
        padding: 10px 12px; font-size: 13px; color: var(--muted);
        resize: none; height: 90px; line-height: 1.6;
      }
      textarea.inv-notes:focus { outline: none; border-color: var(--blue); }

      .totals-box {
        min-width: 300px; background: var(--paper);
        border-radius: 12px; padding: 18px 20px;
        border: 1.5px solid var(--border);
      }
      .totals-settings { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 14px; }
      .ts-label { font-size: 11px; font-weight: 700; color: var(--muted); margin-bottom: 4px; letter-spacing: .5px; text-transform: uppercase; }
      .ts-input {
        width: 100%; border: 1.5px solid var(--border); border-radius: 7px;
        padding: 7px 10px; font-size: 14px; color: var(--navy);
        background: #fff; transition: border-color .2s;
      }
      .ts-input:focus { outline: none; border-color: var(--blue); }

      .totals-line {
        display: flex; justify-content: space-between;
        align-items: center; padding: 7px 0;
        border-bottom: 1px solid var(--border); font-size: 14px;
      }
      .totals-line:last-child { border-bottom: none; }
      .tl-label { color: var(--muted); font-weight: 500; }
      .tl-val   { font-weight: 700; color: var(--navy); }
      .totals-grand {
        display: flex; justify-content: space-between;
        align-items: center; padding: 14px 16px;
        background: var(--navy); border-radius: 10px;
        margin-top: 12px;
      }
      .tg-label { font-family: var(--fh); font-size: 13px; font-weight: 700; color: rgba(255,255,255,.6); }
      .tg-val   { font-family: var(--fh); font-size: 22px; font-weight: 800; color: var(--gold); }

      /* ── ACTION BUTTONS ── */
      .inv-actions {
        display: flex; gap: 10px; flex-wrap: wrap;
        padding: 20px 36px; background: var(--paper);
        border-top: 1.5px solid var(--border);
      }
      .act-btn {
        display: inline-flex; align-items: center; gap: 7px;
        padding: 11px 20px; border-radius: 9px;
        font-family: var(--fh); font-size: 13px; font-weight: 700;
        cursor: pointer; border: none; transition: all .2s;
      }
      .act-primary { background: var(--navy); color: #fff; }
      .act-primary:hover { background: var(--blue); }
      .act-green { background: var(--green); color: #fff; }
      .act-green:hover { background: #047857; }
      .act-outline { background: #fff; color: var(--navy); border: 1.5px solid var(--border); }
      .act-outline:hover { border-color: var(--navy); background: var(--navy); color: #fff; }

      /* ── PRINT PREVIEW ── */
      .print-preview {
        display: none;
        border: 1.5px solid var(--border); border-radius: 14px;
        padding: 36px; background: #fff; margin: 0 5% 40px;
        max-width: 800px; margin-left: auto; margin-right: auto;
      }
      .print-preview.show { display: block; }
      .pp-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 28px; }
      .pp-logo { font-family: var(--fh); font-size: 24px; font-weight: 800; color: var(--navy); }
      .pp-inv-title { font-family: var(--fh); font-size: 32px; font-weight: 900; color: var(--blue); opacity: .15; }
      .pp-divider { height: 3px; background: var(--navy); border-radius: 2px; margin-bottom: 24px; }
      .pp-parties { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px; }
      .pp-party-label { font-size: 10px; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; color: var(--muted); margin-bottom: 4px; }
      .pp-party-val { font-size: 13px; color: var(--navy); line-height: 1.6; white-space: pre-wrap; }
      .pp-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
      .pp-table thead tr { background: var(--navy); }
      .pp-table thead th { padding: 9px 12px; font-size: 11px; font-weight: 700; color: #fff; text-align: left; letter-spacing: .5px; }
      .pp-table thead th:last-child { text-align: right; }
      .pp-table tbody td { padding: 9px 12px; font-size: 13px; border-bottom: 1px solid var(--border); }
      .pp-table tbody td:last-child { text-align: right; font-weight: 700; }
      .pp-table tbody tr:nth-child(even) { background: var(--paper); }
      .pp-totals { display: flex; justify-content: flex-end; }
      .pp-totals-box { min-width: 260px; }
      .pp-tline { display: flex; justify-content: space-between; padding: 6px 0; border-bottom: 1px solid var(--border); font-size: 13px; }
      .pp-tline:last-child { border-bottom: none; }
      .pp-tline .pp-tl { color: var(--muted); }
      .pp-tline .pp-tv { font-weight: 700; color: var(--navy); }
      .pp-grand { display: flex; justify-content: space-between; padding: 12px 14px; background: var(--navy); border-radius: 8px; margin-top: 10px; }
      .pp-grand .pp-gl { font-family: var(--fh); font-size: 13px; font-weight: 700; color: rgba(255,255,255,.6); }
      .pp-grand .pp-gv { font-family: var(--fh); font-size: 18px; font-weight: 800; color: var(--gold); }
      .pp-notes { margin-top: 24px; padding-top: 16px; border-top: 1px solid var(--border); font-size: 13px; color: var(--muted); }
      .pp-notes strong { color: var(--navy); }
      .pp-footer { margin-top: 28px; text-align: center; font-size: 11px; color: var(--muted); letter-spacing: .5px; }

      /* ── SECTION 1 ── */
      .s1 { padding:56px 5%; background:#fff; }
      .s1 .container { max-width:1100px; margin:0 auto; }
      .s1-eyebrow { font-family:var(--fh); font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--blue); margin-bottom:12px; }
      .s1-h { font-family:var(--fh); font-size:clamp(24px,3vw,36px); font-weight:800; color:var(--navy); letter-spacing:-1.2px; line-height:1.1; margin-bottom:16px; }
      .s1-p { font-size:15px; color:var(--muted); line-height:1.8; margin-bottom:0; }
      .s1-accent { color:var(--blue); }

      /* ── STEP CARDS ── */
      .step-card { background:#fff; border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,.08); transition:.3s; }
      .step-card:hover { transform:translateY(-6px); }
      .step-icon  { font-size:32px; color:var(--blue); margin-bottom:10px; }
      .step-arrow { font-size:26px; color:var(--blue); }

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

      /* ── PRINT MEDIA ── */
      @media print {
        body > * { display: none !important; }
        .print-preview { display: block !important; margin: 0 !important; border: none !important; }
        .inv-actions, header, footer, #scrollTop { display: none !important; }
      }

      @media(max-width:768px) {
        .inv-parties { grid-template-columns: 1fr; }
        .inv-totals-row { grid-template-columns: 1fr; }
        .totals-box { min-width: unset; }
        .inv-header, .inv-body, .inv-actions { padding-left: 20px; padding-right: 20px; }
        .pp-parties { grid-template-columns: 1fr; }
      }
      @media(max-width:640px) { .calcs-grid { grid-template-columns: 1fr 1fr; } }
      @media(max-width:400px) { .calcs-grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
<div class="body-inner">

<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════
     HERO – INVOICE / BILLING CALCULATOR
═══════════════════════════════════════ -->
<section class="gst-section">
  <div class="container text-center">
    <h1 class="gst-title text-white">Free Invoice &amp; Billing Calculator</h1>
    <p class="gst-sub text-white">Add line items, apply GST &amp; discounts, get a print-ready invoice instantly — no signup needed.</p>

    <div class="invoice-card mx-auto text-start">

      <!-- ── INVOICE HEADER ── -->
      <div class="inv-header">
        <div>
          <div class="inv-brand-name">
            <input type="text" id="businessName" placeholder="Your Business Name"
              style="background:transparent;border:none;color:#fff;font-family:var(--fh);font-size:22px;font-weight:800;width:260px;padding:0;letter-spacing:-0.5px;"
              value="CalcSpeed Business">
          </div>
          <div class="inv-brand-tagline">
            <input type="text" id="businessTagline" placeholder="Tagline / Website"
              style="background:transparent;border:none;color:rgba(255,255,255,.45);font-size:12px;width:240px;padding:0;"
              value="www.calcspeed.com">
          </div>
        </div>
        <div class="inv-meta">
          <input type="text"   id="invoiceNumber" placeholder="Invoice # (e.g. INV-001)" value="INV-001">
          <input type="date"   id="invoiceDate">
          <input type="date"   id="invoiceDue"   placeholder="Due Date">
          <input type="text"   id="invoiceCurrency" placeholder="Currency (e.g. ₹, $)" value="₹" style="width:80px;margin-left:auto;">
        </div>
      </div>

      <!-- ── INVOICE BODY ── -->
      <div class="inv-body">

        <!-- Bill From / Bill To -->
        <div class="inv-parties">
          <div>
            <div class="inv-party-label">📤 Bill From</div>
            <input type="text" class="inv-field" id="fromName"    placeholder="Your Name / Business">
            <textarea class="inv-field"          id="fromAddress" placeholder="Address, City, State, PIN"></textarea>
            <input type="text" class="inv-field" id="fromGST"     placeholder="GSTIN (optional)">
          </div>
          <div>
            <div class="inv-party-label">📥 Bill To</div>
            <input type="text" class="inv-field" id="toName"    placeholder="Client Name / Company">
            <textarea class="inv-field"          id="toAddress" placeholder="Address, City, State, PIN"></textarea>
            <input type="text" class="inv-field" id="toGST"     placeholder="Client GSTIN (optional)">
          </div>
        </div>

        <!-- Line Items -->
        <div class="items-section">
          <div class="items-label">📋 Line Items</div>
          <div class="items-table-wrap">
            <table class="items-table" id="itemsTable">
              <thead>
                <tr>
                  <th style="width:36px">#</th>
                  <th style="min-width:180px">Description</th>
                  <th style="width:80px">Qty</th>
                  <th style="width:110px">Rate (₹)</th>
                  <th style="width:80px">Disc %</th>
                  <th style="width:100px">Amount (₹)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="itemsBody">
                <!-- Rows injected by JS -->
              </tbody>
            </table>
          </div>
          <button class="add-row-btn" onclick="addRow()">＋ Add Item</button>
        </div>

        <!-- Totals + Notes -->
        <div class="inv-totals-row">
          <div>
            <div class="inv-notes-label">📝 Notes / Payment Terms</div>
            <textarea class="inv-notes" id="invoiceNotes" placeholder="e.g. Payment due within 30 days. Bank: HDFC Bank, A/C: 12345678, IFSC: HDFC0001234. Thank you for your business!"></textarea>
          </div>
          <div class="totals-box">
            <!-- Tax & Discount controls -->
            <div class="totals-settings">
              <div>
                <div class="ts-label">GST / Tax %</div>
                <input type="number" class="ts-input" id="taxPct" placeholder="e.g. 18" min="0" max="100" value="18" oninput="recalc()">
              </div>
              <div>
                <div class="ts-label">Overall Disc %</div>
                <input type="number" class="ts-input" id="discPct" placeholder="e.g. 5" min="0" max="100" value="0" oninput="recalc()">
              </div>
              <div>
                <div class="ts-label">Shipping (₹)</div>
                <input type="number" class="ts-input" id="shipping" placeholder="e.g. 200" min="0" value="0" oninput="recalc()">
              </div>
              <div>
                <div class="ts-label">Other Charges (₹)</div>
                <input type="number" class="ts-input" id="otherCharges" placeholder="e.g. 100" min="0" value="0" oninput="recalc()">
              </div>
            </div>

            <div class="totals-line"><span class="tl-label">Subtotal</span>         <span class="tl-val" id="tlSubtotal">₹0.00</span></div>
            <div class="totals-line"><span class="tl-label">Item Discounts</span>   <span class="tl-val" style="color:var(--red)" id="tlItemDisc">−₹0.00</span></div>
            <div class="totals-line"><span class="tl-label">Overall Discount</span> <span class="tl-val" style="color:var(--red)" id="tlDisc">−₹0.00</span></div>
            <div class="totals-line"><span class="tl-label">Taxable Amount</span>   <span class="tl-val" id="tlTaxable">₹0.00</span></div>
            <div class="totals-line"><span class="tl-label" id="tlTaxLabel">GST (18%)</span><span class="tl-val" style="color:var(--amber)" id="tlTax">₹0.00</span></div>
            <div class="totals-line"><span class="tl-label">Shipping</span>         <span class="tl-val" id="tlShipping">₹0.00</span></div>
            <div class="totals-line"><span class="tl-label">Other Charges</span>    <span class="tl-val" id="tlOther">₹0.00</span></div>

            <div class="totals-grand">
              <span class="tg-label">TOTAL DUE</span>
              <span class="tg-val" id="tlGrand">₹0.00</span>
            </div>
          </div>
        </div>

      </div><!-- /inv-body -->

      <!-- ── ACTION BUTTONS ── -->
      <div class="inv-actions">
        <button class="act-btn act-primary" onclick="generatePreview()">👁️ Preview Invoice</button>
        <button class="act-btn act-green"   onclick="printInvoice()">🖨️ Print / Save PDF</button>
        <button class="act-btn act-outline" onclick="copyTotal()">📋 Copy Total</button>
        <button class="act-btn act-outline" onclick="clearAll()">🗑️ Clear All</button>
        <div style="margin-left:auto;display:flex;align-items:center;gap:8px;font-size:12px;color:var(--muted)">
          <span>Items: <strong id="itemCount">0</strong></span>
          <span>|</span>
          <span>Total: <strong id="headerTotal">₹0.00</strong></span>
        </div>
      </div>

    </div><!-- /invoice-card -->
  </div>
</section>

<!-- ── PRINT PREVIEW ── -->
<div class="print-preview" id="printPreview">
  <div class="pp-header">
    <div>
      <div class="pp-logo" id="ppBizName">Business Name</div>
      <div style="font-size:12px;color:var(--muted);margin-top:2px" id="ppBizTag"></div>
    </div>
    <div style="text-align:right">
      <div class="pp-inv-title">INVOICE</div>
      <div style="font-size:13px;color:var(--muted)" id="ppMeta"></div>
    </div>
  </div>
  <div class="pp-divider"></div>
  <div class="pp-parties">
    <div><div class="pp-party-label">From</div><div class="pp-party-val" id="ppFrom"></div></div>
    <div><div class="pp-party-label">Bill To</div><div class="pp-party-val" id="ppTo"></div></div>
  </div>
  <table class="pp-table">
    <thead><tr><th>#</th><th>Description</th><th>Qty</th><th>Rate</th><th>Disc</th><th>Amount</th></tr></thead>
    <tbody id="ppItemsBody"></tbody>
  </table>
  <div class="pp-totals">
    <div class="pp-totals-box" id="ppTotalsBox"></div>
  </div>
  <div class="pp-notes" id="ppNotes"></div>
  <div class="pp-footer">Generated by CalcSpeed.com — Free Invoice Calculator</div>
</div>


<!-- ══════════════════════════════════════
     SECTION 1 – What is Invoice Calc
═══════════════════════════════════════ -->
<section class="s1">
  <div class="container">
    <p class="s1-eyebrow">About This Tool</p>
    <h2 class="s1-h">Why use an <span class="s1-accent">Invoice Calculator</span>?</h2>
    <p class="s1-p">Creating a professional invoice manually is time-consuming and error-prone. This free Invoice &amp; Billing Calculator lets you add unlimited line items, apply item-level discounts, calculate GST automatically, add shipping charges, and instantly get a clean print-ready invoice — with zero spreadsheet work.</p>
    <p class="s1-p" style="margin-top:12px">Ideal for <strong>freelancers</strong>, <strong>small businesses</strong>, <strong>consultants</strong>, <strong>retailers</strong>, and anyone who needs a quick and accurate bill. Supports Indian GST (18%, 12%, 5%, 28%) and any custom tax rate.</p>
  </div>
</section>

<!-- ══════════════════════════════════════
     HOW TO USE
═══════════════════════════════════════ -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="s1-h text-center mb-4">How to Create Your Invoice</h2>
    <div class="row align-items-center text-center">

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">🏢</div>
          <h4>Business Info</h4>
          <p>Enter your business name and client details at the top.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">📋</div>
          <h4>Add Items</h4>
          <p>Click "Add Item" for each product or service with qty and rate.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">💸</div>
          <h4>Set Tax &amp; Discount</h4>
          <p>Enter GST rate, overall discount, shipping and other charges.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2">
        <div class="step-card p-4">
          <div class="step-icon">👁️</div>
          <h4>Preview Invoice</h4>
          <p>Click Preview to see a clean formatted invoice summary.</p>
        </div>
      </div>
      <div class="col-md-1 d-none d-md-block"><div class="step-arrow">→</div></div>

      <div class="col-md-2 p-3">
        <div class="step-card p-4">
          <div class="step-icon">🖨️</div>
          <h4>Print / PDF</h4>
          <p>Print directly or save as PDF from your browser — no account needed.</p>
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
   INVOICE / BILLING CALCULATOR LOGIC
═══════════════════════════════════════ */

let rowCount = 0;

/* ── Helpers ── */
function getCurrency() {
  return document.getElementById('invoiceCurrency').value.trim() || '₹';
}
function fmtMoney(n) {
  return getCurrency() + Math.abs(n).toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
}
function v(id) { return parseFloat(document.getElementById(id).value) || 0; }

/* ── Add a new line-item row ── */
function addRow() {
  rowCount++;
  const tbody = document.getElementById('itemsBody');
  const tr = document.createElement('tr');
  tr.id = 'row_' + rowCount;
  tr.innerHTML = `
    <td style="text-align:center;font-size:13px;color:var(--muted);font-weight:600">${rowCount}</td>
    <td><input type="text"   class="item-input item-desc" placeholder="Item description…" oninput="recalc()"></td>
    <td><input type="number" class="item-input item-qty"  placeholder="1"   min="0" step="any" value="1"  oninput="recalc()" style="text-align:right"></td>
    <td><input type="number" class="item-input item-rate" placeholder="0.00" min="0" step="any" value=""  oninput="recalc()" style="text-align:right"></td>
    <td><input type="number" class="item-input item-disc" placeholder="0"   min="0" max="100" step="any" value="0" oninput="recalc()" style="text-align:right"></td>
    <td><div class="item-amount" id="amt_${rowCount}">—</div></td>
    <td><button class="del-btn" onclick="delRow('row_${rowCount}')">✕</button></td>
  `;
  tbody.appendChild(tr);
  recalc();
}

/* ── Delete a row ── */
function delRow(id) {
  const el = document.getElementById(id);
  if (el) el.remove();
  recalc();
}

/* ── Core recalculation ── */
function recalc() {
  const taxPct      = v('taxPct');
  const discPct     = v('discPct');
  const shipping    = v('shipping');
  const otherChg    = v('otherCharges');
  const currency    = getCurrency();

  let subtotal    = 0;
  let totalItemDisc = 0;

  // Update column header currency
  document.querySelectorAll('.items-table thead th')[3].textContent = `Rate (${currency})`;
  document.querySelectorAll('.items-table thead th')[5].textContent = `Amount (${currency})`;

  // Process each row
  const rows = document.querySelectorAll('#itemsBody tr');
  rows.forEach(row => {
    const qty  = parseFloat(row.querySelector('.item-qty')?.value)  || 0;
    const rate = parseFloat(row.querySelector('.item-rate')?.value) || 0;
    const disc = parseFloat(row.querySelector('.item-disc')?.value) || 0;
    const gross   = qty * rate;
    const discAmt = gross * disc / 100;
    const net     = gross - discAmt;
    subtotal      += gross;
    totalItemDisc += discAmt;
    const amtEl = row.querySelector('.item-amount');
    if (amtEl) amtEl.textContent = rate > 0 ? fmtMoney(net) : '—';
  });

  const afterItemDisc  = subtotal - totalItemDisc;
  const overallDisc    = afterItemDisc * discPct / 100;
  const taxable        = afterItemDisc - overallDisc;
  const taxAmt         = taxable * taxPct / 100;
  const grandTotal     = taxable + taxAmt + shipping + otherChg;

  // Update totals panel
  document.getElementById('tlSubtotal').textContent  = fmtMoney(subtotal);
  document.getElementById('tlItemDisc').textContent  = '−' + fmtMoney(totalItemDisc);
  document.getElementById('tlDisc').textContent      = '−' + fmtMoney(overallDisc);
  document.getElementById('tlTaxable').textContent   = fmtMoney(taxable);
  document.getElementById('tlTaxLabel').textContent  = `GST / Tax (${taxPct}%)`;
  document.getElementById('tlTax').textContent       = fmtMoney(taxAmt);
  document.getElementById('tlShipping').textContent  = fmtMoney(shipping);
  document.getElementById('tlOther').textContent     = fmtMoney(otherChg);
  document.getElementById('tlGrand').textContent     = fmtMoney(grandTotal);

  // Header mini total
  document.getElementById('headerTotal').textContent = fmtMoney(grandTotal);
  document.getElementById('itemCount').textContent   = rows.length;
}

/* ── Generate print preview ── */
function generatePreview() {
  const currency = getCurrency();

  // Meta
  document.getElementById('ppBizName').textContent = document.getElementById('businessName').value || 'Business Name';
  document.getElementById('ppBizTag').textContent  = document.getElementById('businessTagline').value;

  const invNo   = document.getElementById('invoiceNumber').value;
  const invDate = document.getElementById('invoiceDate').value;
  const invDue  = document.getElementById('invoiceDue').value;
  document.getElementById('ppMeta').innerHTML =
    `Invoice: <strong>${invNo}</strong><br>
     Date: ${invDate || '—'}<br>
     Due: ${invDue || '—'}`;

  // From
  const fromName = document.getElementById('fromName').value;
  const fromAddr = document.getElementById('fromAddress').value;
  const fromGST  = document.getElementById('fromGST').value;
  document.getElementById('ppFrom').textContent =
    [fromName, fromAddr, fromGST ? 'GSTIN: ' + fromGST : ''].filter(Boolean).join('\n');

  // To
  const toName = document.getElementById('toName').value;
  const toAddr = document.getElementById('toAddress').value;
  const toGST  = document.getElementById('toGST').value;
  document.getElementById('ppTo').textContent =
    [toName, toAddr, toGST ? 'GSTIN: ' + toGST : ''].filter(Boolean).join('\n');

  // Items
  const ppBody = document.getElementById('ppItemsBody');
  ppBody.innerHTML = '';
  let i = 0;
  document.querySelectorAll('#itemsBody tr').forEach(row => {
    const desc = row.querySelector('.item-desc')?.value || '—';
    const qty  = parseFloat(row.querySelector('.item-qty')?.value)  || 0;
    const rate = parseFloat(row.querySelector('.item-rate')?.value) || 0;
    const disc = parseFloat(row.querySelector('.item-disc')?.value) || 0;
    const gross   = qty * rate;
    const discAmt = gross * disc / 100;
    const net     = gross - discAmt;
    i++;
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td>${i}</td>
      <td>${desc}</td>
      <td style="text-align:right">${qty}</td>
      <td style="text-align:right">${currency}${rate.toLocaleString('en-IN',{minimumFractionDigits:2})}</td>
      <td style="text-align:right">${disc > 0 ? disc + '%' : '—'}</td>
      <td>${currency}${net.toLocaleString('en-IN',{minimumFractionDigits:2})}</td>
    `;
    ppBody.appendChild(tr);
  });

  // Totals box
  const taxPct   = v('taxPct');
  const discPct  = v('discPct');
  const shipping = v('shipping');
  const otherChg = v('otherCharges');
  let subtotal = 0, itemDisc = 0;
  document.querySelectorAll('#itemsBody tr').forEach(row => {
    const qty  = parseFloat(row.querySelector('.item-qty')?.value)  || 0;
    const rate = parseFloat(row.querySelector('.item-rate')?.value) || 0;
    const disc = parseFloat(row.querySelector('.item-disc')?.value) || 0;
    const gross = qty * rate;
    subtotal  += gross;
    itemDisc  += gross * disc / 100;
  });
  const afterItemDisc = subtotal - itemDisc;
  const overallDisc   = afterItemDisc * discPct / 100;
  const taxable       = afterItemDisc - overallDisc;
  const taxAmt        = taxable * taxPct / 100;
  const grandTotal    = taxable + taxAmt + shipping + otherChg;

  const fmt = n => currency + n.toLocaleString('en-IN',{minimumFractionDigits:2,maximumFractionDigits:2});
  const lines = [
    ['Subtotal',       fmt(subtotal)],
    ['Item Discounts', '−' + fmt(itemDisc)],
    discPct > 0 ? [`Discount (${discPct}%)`, '−' + fmt(overallDisc)] : null,
    [`GST / Tax (${taxPct}%)`, fmt(taxAmt)],
    shipping > 0   ? ['Shipping',       fmt(shipping)]  : null,
    otherChg > 0   ? ['Other Charges',  fmt(otherChg)]  : null,
  ].filter(Boolean);

  let totalsHTML = lines.map(([l,v]) =>
    `<div class="pp-tline"><span class="pp-tl">${l}</span><span class="pp-tv">${v}</span></div>`
  ).join('');
  totalsHTML += `<div class="pp-grand"><span class="pp-gl">TOTAL DUE</span><span class="pp-gv">${fmt(grandTotal)}</span></div>`;
  document.getElementById('ppTotalsBox').innerHTML = totalsHTML;

  // Notes
  const notes = document.getElementById('invoiceNotes').value;
  document.getElementById('ppNotes').innerHTML = notes
    ? `<strong>Notes / Payment Terms:</strong><br>${notes.replace(/\n/g,'<br>')}`
    : '';

  // Show preview
  const preview = document.getElementById('printPreview');
  preview.classList.add('show');
  preview.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

/* ── Print ── */
function printInvoice() {
  generatePreview();
  setTimeout(() => window.print(), 400);
}

/* ── Copy total ── */
function copyTotal() {
  const total = document.getElementById('tlGrand').textContent;
  navigator.clipboard.writeText(total).then(() => {
    alert('Total copied: ' + total);
  }).catch(() => {
    alert('Total: ' + total);
  });
}

/* ── Clear all ── */
function clearAll() {
  if (!confirm('Clear all invoice data?')) return;
  document.getElementById('itemsBody').innerHTML = '';
  rowCount = 0;
  ['businessName','businessTagline','invoiceNumber','invoiceDate','invoiceDue',
   'fromName','fromAddress','fromGST','toName','toAddress','toGST','invoiceNotes'].forEach(id => {
    const el = document.getElementById(id);
    if (el) el.value = '';
  });
  document.getElementById('taxPct').value    = '18';
  document.getElementById('discPct').value   = '0';
  document.getElementById('shipping').value  = '0';
  document.getElementById('otherCharges').value = '0';
  document.getElementById('printPreview').classList.remove('show');
  recalc();
}

/* ── Filter tabs ── */
function filterCat(category, btn) {
  document.querySelectorAll('.ctab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('#calcsGrid .cc').forEach(card => {
    card.style.display = (category === 'all' || card.dataset.cat === category) ? 'block' : 'none';
  });
}

/* ── Init: add 3 default rows and set today's date ── */
document.addEventListener('DOMContentLoaded', () => {
  addRow(); addRow(); addRow();
  const today = new Date().toISOString().split('T')[0];
  document.getElementById('invoiceDate').value = today;
  const due = new Date(); due.setDate(due.getDate() + 30);
  document.getElementById('invoiceDue').value  = due.toISOString().split('T')[0];
  // Listen for currency change
  document.getElementById('invoiceCurrency').addEventListener('input', recalc);
});
</script>

</body>
</html>