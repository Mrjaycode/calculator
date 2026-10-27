<?php
$page_title = "Privacy Policy — Calcspeed";
$canonical  = "https://www.calcspeed.com/privacy-policy";
$updated    = "June 1, 2025";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $page_title; ?></title>
<meta name="description" content="Calcspeed Privacy Policy. We do not collect, store, or share your personal data. All calculations run locally in your browser.">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo $canonical; ?>">

<meta property="og:type"        content="website">
<meta property="og:url"         content="<?php echo $canonical; ?>">
<meta property="og:title"       content="Privacy Policy — Calcspeed">
<meta property="og:description" content="We do not collect, store, or share your personal data. All calculations run locally in your browser.">
<meta property="og:site_name"   content="Calcspeed">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Privacy Policy",
  "url": "<?php echo $canonical; ?>",
  "description": "Calcspeed Privacy Policy — we do not collect or store personal data.",
  "isPartOf": { "@type": "WebSite", "name": "Calcspeed", "url": "https://www.calcspeed.com/" },
  "dateModified": "<?php echo $updated; ?>"
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
<link href="css/plugins.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --navy:#0a1628;--navy2:#0d1e38;--blue:#1a4fd6;
  --gold:#f5a623;--white:#ffffff;--off:#f5f6fa;
  --muted:#64748b;--border:rgba(10,22,40,0.09);
  --fh:'Outfit',sans-serif;--fb:'Plus Jakarta Sans',sans-serif;
}
html{scroll-behavior:smooth}
body{font-family:var(--fb);background:var(--off);color:var(--navy);overflow-x:hidden}
a{text-decoration:none;color:var(--blue)}
a:hover{text-decoration:underline}

/* HERO */
.lp-hero{
  background:var(--navy);position:relative;overflow:hidden;
  padding:80px 5% 64px;
}
.lp-hero::before{
  content:'';position:absolute;inset:0;
  background-image:radial-gradient(rgba(255,255,255,0.045) 1px,transparent 1px);
  background-size:28px 28px;pointer-events:none;
}
.lp-hero-circle{position:absolute;right:-120px;bottom:-120px;width:420px;height:420px;border:70px solid rgba(26,79,214,0.1);border-radius:50%;pointer-events:none}
.lp-inner{position:relative;z-index:1;max-width:760px;margin:0 auto}
.lp-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(245,166,35,.1);border:1px solid rgba(245,166,35,.2);border-radius:100px;padding:4px 14px;font-family:var(--fh);font-size:11px;font-weight:600;color:var(--gold);letter-spacing:.6px;margin-bottom:18px}
.lp-badge-dot{width:6px;height:6px;border-radius:50%;background:var(--gold)}
.lp-h1{font-family:var(--fh);font-size:clamp(32px,5vw,54px);font-weight:900;letter-spacing:-2px;color:#fff;line-height:1;margin-bottom:14px}
.lp-h1 span{color:var(--gold)}
.lp-meta{font-size:13px;color:rgba(255,255,255,.35);margin-top:10px}

/* LAYOUT */
.lp-wrap{max-width:1100px;margin:0 auto;padding:56px 5% 80px;display:grid;grid-template-columns:220px 1fr;gap:48px;align-items:start}
@media(max-width:768px){.lp-wrap{grid-template-columns:1fr;padding:32px 5% 60px}}

/* SIDEBAR TOC */
.lp-toc{position:sticky;top:88px}
.toc-title{font-family:var(--fh);font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--muted);margin-bottom:12px}
.toc-list{list-style:none;display:flex;flex-direction:column;gap:2px}
.toc-list a{font-size:13px;font-weight:500;color:var(--muted);padding:6px 10px;border-radius:8px;display:block;transition:all .18s;border-left:2px solid transparent}
.toc-list a:hover{color:var(--navy);background:rgba(10,22,40,.05);text-decoration:none}
.toc-list a.active{color:var(--blue);border-left-color:var(--blue);background:rgba(26,79,214,.06)}
@media(max-width:768px){.lp-toc{display:none}}

/* CONTENT */
.lp-content{min-width:0}
.lp-section{margin-bottom:48px;scroll-margin-top:90px}
.lp-section-h{font-family:var(--fh);font-size:20px;font-weight:800;letter-spacing:-.5px;color:var(--navy);margin-bottom:14px;padding-bottom:10px;border-bottom:1.5px solid var(--border);display:flex;align-items:center;gap:10px}
.lp-section-h .sec-ico{width:32px;height:32px;border-radius:8px;background:rgba(26,79,214,.08);display:flex;align-items:center;justify-content:center;font-size:15px;flex-shrink:0}
.lp-p{font-size:15px;line-height:1.8;color:#374151;margin-bottom:12px}
.lp-ul{padding-left:0;list-style:none;display:flex;flex-direction:column;gap:8px;margin-bottom:12px}
.lp-ul li{font-size:15px;line-height:1.7;color:#374151;display:flex;align-items:flex-start;gap:9px}
.lp-ul li::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--blue);flex-shrink:0;margin-top:8px}
.lp-note{background:rgba(26,79,214,.05);border:1.5px solid rgba(26,79,214,.12);border-radius:12px;padding:14px 16px;font-size:14px;color:var(--navy);line-height:1.65;margin-bottom:12px}
.lp-note strong{color:var(--blue)}
.lp-warn{background:rgba(245,166,35,.06);border:1.5px solid rgba(245,166,35,.18);border-radius:12px;padding:14px 16px;font-size:14px;color:var(--navy);line-height:1.65;margin-bottom:12px}

/* CONTACT CARD */
.contact-card{background:var(--white);border:1.5px solid var(--border);border-radius:14px;padding:20px 24px;display:flex;align-items:center;gap:16px;margin-top:8px}
.contact-ico{width:44px;height:44px;border-radius:11px;background:rgba(26,79,214,.08);display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0}
.contact-lbl{font-size:12px;color:var(--muted);font-family:var(--fh);font-weight:600;text-transform:uppercase;letter-spacing:.8px}
.contact-val{font-size:14px;font-weight:600;color:var(--navy);margin-top:2px}

/* BREADCRUMB */
.breadcrumb{font-size:13px;color:rgba(255,255,255,.35);margin-bottom:20px;display:flex;align-items:center;gap:6px}
.breadcrumb a{color:rgba(255,255,255,.5);transition:color .18s}
.breadcrumb a:hover{color:#fff;text-decoration:none}
.breadcrumb span{color:rgba(255,255,255,.2)}
</style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="lp-hero">
  <div class="lp-hero-circle"></div>
  <div class="lp-inner">
    <div class="breadcrumb">
      <a href="/">Home</a><span>/</span><span>Privacy Policy</span>
    </div>
    <div class="lp-badge"><span class="lp-badge-dot"></span>Legal</div>
    <h1 class="lp-h1">Privacy <span>Policy</span></h1>
    <p style="font-size:15px;color:rgba(255,255,255,.45);line-height:1.7;max-width:500px;margin-top:12px">
      We built Calcspeed with privacy at its core. No accounts, no tracking, no data collection. Everything runs in your browser.
    </p>
    <p class="lp-meta">Last updated: <?php echo $updated; ?> &nbsp;·&nbsp; Applies to calcspeed.com</p>
  </div>
</div>

<div class="lp-wrap">

  <!-- TOC SIDEBAR -->
  <aside class="lp-toc" aria-label="Table of contents">
    <p class="toc-title">Contents</p>
    <ul class="toc-list" id="tocList">
      <li><a href="#overview">Overview</a></li>
      <li><a href="#data-collected">Data we collect</a></li>
      <li><a href="#no-collect">What we don't collect</a></li>
      <li><a href="#cookies">Cookies &amp; storage</a></li>
      <li><a href="#third-party">Third-party services</a></li>
      <li><a href="#analytics">Analytics</a></li>
      <li><a href="#contact-form">Contact form data</a></li>
      <li><a href="#childrens">Children's privacy</a></li>
      <li><a href="#your-rights">Your rights</a></li>
      <li><a href="#security">Security</a></li>
      <li><a href="#changes">Changes to policy</a></li>
      <li><a href="#contact">Contact us</a></li>
    </ul>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="lp-content" id="mainContent">

    <section class="lp-section" id="overview">
      <h2 class="lp-section-h"><span class="sec-ico">🔒</span>Overview</h2>
      <div class="lp-note"><strong>Short version:</strong> Calcspeed does not collect, sell, or share your personal data. All calculator computations happen entirely inside your browser. We have no access to the numbers you type.</div>
      <p class="lp-p">This Privacy Policy explains how Calcspeed ("we", "our", or "us") handles information when you use our website at <a href="https://www.calcspeed.com">calcspeed.com</a>. By using our website, you agree to the practices described in this policy.</p>
      <p class="lp-p">We respect your privacy and are committed to protecting it. Our calculators are designed to run entirely client-side — your inputs never leave your device to our servers.</p>
    </section>

    <section class="lp-section" id="data-collected">
      <h2 class="lp-section-h"><span class="sec-ico">📋</span>Data we collect</h2>
      <p class="lp-p">We collect minimal data only when you voluntarily provide it:</p>
      <ul class="lp-ul">
        <li><strong>Contact form submissions</strong> — name, email, phone, and message when you contact us through our contact page. This is used only to respond to your enquiry.</li>
        <li><strong>Server access logs</strong> — standard web server logs that include IP address, browser type, pages visited, and timestamps. These are retained for up to 30 days for security and diagnostic purposes only.</li>
        <li><strong>Anonymous usage analytics</strong> — aggregated, non-identifiable data such as which calculators are most used and general geographic region (country level). No individual user is tracked.</li>
      </ul>
    </section>

    <section class="lp-section" id="no-collect">
      <h2 class="lp-section-h"><span class="sec-ico">🚫</span>What we don't collect</h2>
      <p class="lp-p">We explicitly do <strong>not</strong> collect the following:</p>
      <ul class="lp-ul">
        <li>The numbers, values, or inputs you enter into any calculator</li>
        <li>Financial data, health data, or personal loan details entered into our tools</li>
        <li>Your name, email, or any identifier unless you contact us directly</li>
        <li>Payment information of any kind (we charge nothing)</li>
        <li>Location data beyond country-level analytics</li>
        <li>Device identifiers, advertising IDs, or fingerprints</li>
      </ul>
      <div class="lp-warn">All calculators — EMI, GST, BMI, Age, Salary, and all others — run 100% in your browser using JavaScript. The values you enter are never transmitted to our servers.</div>
    </section>

    <section class="lp-section" id="cookies">
      <h2 class="lp-section-h"><span class="sec-ico">🍪</span>Cookies &amp; local storage</h2>
      <p class="lp-p">Calcspeed uses minimal cookies and browser storage:</p>
      <ul class="lp-ul">
        <li><strong>Essential cookies</strong> — session cookies required for the website to function correctly. These expire when you close your browser.</li>
        <li><strong>Preference storage</strong> — some calculators save your last-used inputs in browser localStorage so you don't have to re-enter them on your next visit. This data stays on your device only.</li>
        <li><strong>Analytics cookies</strong> — if we use Google Analytics or a similar tool, anonymised cookies may be set. These do not identify you personally.</li>
      </ul>
      <p class="lp-p">You can clear all cookies and localStorage through your browser settings at any time. Our website remains fully functional without cookies.</p>
    </section>

    <section class="lp-section" id="third-party">
      <h2 class="lp-section-h"><span class="sec-ico">🔗</span>Third-party services</h2>
      <p class="lp-p">We use a small number of third-party services to operate Calcspeed:</p>
      <ul class="lp-ul">
        <li><strong>Google Fonts</strong> — fonts are loaded from Google's servers. Google may log your IP when fonts are fetched. See <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.</li>
        <li><strong>Hosting provider</strong> — our web host processes server logs as described above.</li>
        <li><strong>Email delivery (PHPMailer / SMTP)</strong> — used only when you submit our contact form. Your email address is used solely to reply to you.</li>
      </ul>
      <p class="lp-p">We do not use Facebook Pixel, advertising networks, remarketing tags, or any third-party tracking technologies.</p>
    </section>

    <section class="lp-section" id="analytics">
      <h2 class="lp-section-h"><span class="sec-ico">📊</span>Analytics</h2>
      <p class="lp-p">We may use privacy-respecting analytics to understand how many people visit our site and which calculators are most useful. Any analytics we use are configured to:</p>
      <ul class="lp-ul">
        <li>Anonymise IP addresses before storage</li>
        <li>Not share data with third parties for advertising</li>
        <li>Respect browser Do Not Track (DNT) signals</li>
        <li>Not create individual user profiles or cross-site tracking</li>
      </ul>
    </section>

    <section class="lp-section" id="contact-form">
      <h2 class="lp-section-h"><span class="sec-ico">✉️</span>Contact form data</h2>
      <p class="lp-p">When you submit our contact form, we collect your name, email address, phone number (optional), and message. This information is:</p>
      <ul class="lp-ul">
        <li>Stored in our database to track and respond to enquiries</li>
        <li>Used only to respond to your specific enquiry</li>
        <li>Never sold or shared with any third party</li>
        <li>Retained for up to 2 years, after which it may be deleted</li>
      </ul>
      <p class="lp-p">You may request deletion of your contact record at any time by emailing us.</p>
    </section>

    <section class="lp-section" id="childrens">
      <h2 class="lp-section-h"><span class="sec-ico">👶</span>Children's privacy</h2>
      <p class="lp-p">Calcspeed is a general-purpose tool suitable for all ages. We do not knowingly collect personal data from children under the age of 13 (or the applicable age in your jurisdiction). Our contact form is intended for adults only. If you believe a child has submitted personal information to us, please contact us and we will delete it promptly.</p>
    </section>

    <section class="lp-section" id="your-rights">
      <h2 class="lp-section-h"><span class="sec-ico">⚖️</span>Your rights</h2>
      <p class="lp-p">Depending on your location, you may have the following rights regarding your personal data:</p>
      <ul class="lp-ul">
        <li><strong>Access</strong> — request a copy of any personal data we hold about you</li>
        <li><strong>Correction</strong> — ask us to correct inaccurate data</li>
        <li><strong>Deletion</strong> — request that we delete your personal data</li>
        <li><strong>Portability</strong> — receive your data in a machine-readable format</li>
        <li><strong>Objection</strong> — object to our processing of your data</li>
        <li><strong>Withdrawal of consent</strong> — where processing is based on consent, withdraw it at any time</li>
      </ul>
      <p class="lp-p">Since we collect almost no personal data, most of these rights will not be applicable in normal use. To exercise any right, contact us at the address below.</p>
    </section>

    <section class="lp-section" id="security">
      <h2 class="lp-section-h"><span class="sec-ico">🛡️</span>Security</h2>
      <p class="lp-p">We take reasonable technical and organisational measures to protect any personal data we do hold, including:</p>
      <ul class="lp-ul">
        <li>HTTPS encryption on all pages (TLS)</li>
        <li>Database access restricted to authorised systems only</li>
        <li>Regular security updates and patches applied</li>
        <li>Contact form data stored with parameterised queries to prevent injection attacks</li>
      </ul>
      <p class="lp-p">No system is 100% secure. If you suspect a security issue, please contact us immediately.</p>
    </section>

    <section class="lp-section" id="changes">
      <h2 class="lp-section-h"><span class="sec-ico">📅</span>Changes to this policy</h2>
      <p class="lp-p">We may update this Privacy Policy from time to time. When we do, we will update the "Last updated" date at the top of this page. We encourage you to review this page periodically. Continued use of Calcspeed after changes constitutes acceptance of the updated policy.</p>
      <p class="lp-p">Significant changes (such as new data collection practices) will be noted prominently on the website for at least 30 days.</p>
    </section>

    <section class="lp-section" id="contact">
      <h2 class="lp-section-h"><span class="sec-ico">📬</span>Contact us</h2>
      <p class="lp-p">If you have any questions about this Privacy Policy or wish to exercise your data rights, please contact us:</p>
      <div class="contact-card">
        <div class="contact-ico">✉️</div>
        <div>
          <div class="contact-lbl">Email</div>
          <div class="contact-val"><a href="mailto:privacy@calcspeed.com">privacy@calcspeed.com</a></div>
        </div>
      </div>
      <div class="contact-card" style="margin-top:10px">
        <div class="contact-ico">🌐</div>
        <div>
          <div class="contact-lbl">Contact Form</div>
          <div class="contact-val"><a href="/contact">calcspeed.com/contact</a></div>
        </div>
      </div>
    </section>

  </main>
</div>

<?php include 'footer.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
<script>
// Highlight active TOC item on scroll
const sections = document.querySelectorAll('.lp-section');
const links    = document.querySelectorAll('.toc-list a');
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if(e.isIntersecting){
      links.forEach(l => l.classList.remove('active'));
      const a = document.querySelector('.toc-list a[href="#'+e.target.id+'"]');
      if(a) a.classList.add('active');
    }
  });
}, { rootMargin:'-10% 0px -80% 0px' });
sections.forEach(s => obs.observe(s));
</script>
</body>
</html>