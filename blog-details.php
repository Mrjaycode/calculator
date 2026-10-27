
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>How to Calculate EMI: Complete Guide with Formula & Examples | CalcSpeed Blog</title>

<meta name="description" content="Learn how to calculate EMI with formulas, examples, and step-by-step instructions. Understand loan repayments, interest calculations, and use our free EMI calculator.">

<meta name="keywords" content="How to Calculate EMI, EMI Formula, EMI Calculator Guide, Loan EMI Calculation, Monthly EMI Calculator, Home Loan EMI, Personal Loan EMI, EMI Examples">

<meta name="author" content="CalcSpeed">

<meta name="robots" content="index, follow, max-image-preview:large">

<link rel="canonical" href="https://www.calcspeed.com/blog/how-to-calculate-emi">

<!-- Open Graph -->
<meta property="og:type" content="article">
<meta property="og:title" content="How to Calculate EMI: Complete Guide with Formula & Examples">
<meta property="og:description" content="Learn EMI calculation formulas, examples, and tips to understand loan repayments better.">
<meta property="og:url" content="https://www.calcspeed.com/blog/how-to-calculate-emi">
<meta property="og:image" content="https://www.calcspeed.com/img/logo-dark1.png">
<meta property="og:site_name" content="CalcSpeed">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="How to Calculate EMI: Complete Guide with Formula & Examples">
<meta name="twitter:description" content="Understand EMI formulas and calculate loan repayments easily.">
<meta name="twitter:image" content="https://www.calcspeed.com/img/logo-dark1.png">

<!-- Article Schema -->
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"BlogPosting",
  "headline":"How to Calculate EMI: Complete Guide with Formula & Examples",
  "description":"Learn how to calculate EMI with formulas, examples, and practical tips.",
  "author":{
    "@type":"Organization",
    "name":"CalcSpeed"
  },
  "publisher":{
    "@type":"Organization",
    "name":"CalcSpeed",
    "logo":{
      "@type":"ImageObject",
      "url":"https://www.calcspeed.com/img/logo-dark1.png"
    }
  },
  "mainEntityOfPage":{
    "@type":"WebPage",
    "@id":"https://www.calcspeed.com/blog/how-to-calculate-emi"
  }
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

<link href="css/plugins.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>
:root {
  --navy:   #0a1628;
  --navy2:  #0d1e38;
  --navy3:  #162340;
  --blue:   #1a4fd6;
  --gold:   #f5a623;
  --gold2:  #ffbe4d;
  --white:  #ffffff;
  --off:    #f7f8fc;
  --paper:  #f2f4f9;
  --muted:  #64748b;
  --border: rgba(10,22,40,0.09);
  --shadow: 0 4px 24px rgba(10,22,40,0.08);
  --r:      16px;
  --fh:     'Outfit', sans-serif;
  --fb:     'Plus Jakarta Sans', sans-serif;
}

*{margin:0;padding:0;box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{font-family:var(--fb);background:var(--off);color:var(--navy);overflow-x:hidden;font-size:16px;line-height:1.7;}
a{text-decoration:none;color:inherit;}
img{max-width:100%;}


/* ── ARTICLE HERO ── */
.article-hero{background:var(--navy);position:relative;overflow:hidden;padding:60px 5% 50px;}
.article-hero::before{content:'';position:absolute;inset:0;background-image:radial-gradient(rgba(245,166,35,0.09) 1.5px, transparent 1.5px);background-size:28px 28px;pointer-events:none;}
.hero-glow{position:absolute;top:-80px;right:5%;width:500px;height:500px;background:radial-gradient(circle, rgba(26,79,214,0.12) 0%, transparent 65%);border-radius:50%;pointer-events:none;}
.hero-arc{position:absolute;bottom:-140px;right:-80px;width:380px;height:380px;border:60px solid rgba(245,166,35,0.06);border-radius:50%;pointer-events:none;}
.article-hero-inner{max-width:1200px;margin:0 auto;position:relative;z-index:2;}
.art-cat-pill{display:inline-flex;align-items:center;gap:7px;background:rgba(26,79,214,0.15);border:1px solid rgba(26,79,214,0.3);border-radius:100px;padding:5px 14px;font-family:var(--fh);font-size:10px;font-weight:800;color:#7fa6ff;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:20px;}
.article-hero h1{font-family:var(--fh);font-size:clamp(28px,4.5vw,54px);font-weight:900;color:#fff;line-height:1.08;letter-spacing:-2px;max-width:780px;margin-bottom:20px;}
.article-hero h1 .gold{color:var(--gold);}
.article-meta-row{display:flex;flex-wrap:wrap;align-items:center;gap:20px;margin-top:28px;}
.author-chip{display:flex;align-items:center;gap:10px;}
.author-av{width:40px;height:40px;border-radius:50%;background:rgba(26,79,214,0.25);display:flex;align-items:center;justify-content:center;font-family:var(--fh);font-size:13px;font-weight:800;color:#7fa6ff;border:2px solid rgba(26,79,214,0.4);}
.author-name{font-family:var(--fh);font-size:13px;font-weight:700;color:#fff;}
.author-role{font-size:11px;color:rgba(255,255,255,0.45);}
.meta-divider{width:1px;height:28px;background:rgba(255,255,255,0.1);}
.meta-item{display:flex;align-items:center;gap:6px;font-size:12px;color:rgba(255,255,255,0.5);}
.meta-item svg{opacity:.6;}
.art-actions{display:flex;align-items:center;gap:10px;margin-left:auto;}
.act-btn{display:flex;align-items:center;gap:6px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:100px;padding:7px 14px;font-size:11px;font-weight:700;font-family:var(--fh);color:rgba(255,255,255,0.6);transition:.2s;cursor:pointer;}
.act-btn:hover{background:rgba(255,255,255,0.13);color:#fff;border-color:rgba(255,255,255,0.22);}
.act-btn.like-active{background:rgba(245,166,35,0.15);border-color:rgba(245,166,35,0.4);color:var(--gold);}

/* ── PROGRESS BAR ── */
.read-progress{position:fixed;top:0;left:0;height:3px;background:linear-gradient(90deg,var(--blue),var(--gold));z-index:200;transition:width .1s linear;width:0%;}

/* ── LAYOUT ── */
.blog-layout{max-width:1350px;margin:0 auto;padding:48px 5%;display:grid;grid-template-columns:1fr 320px;gap:10px;align-items:start;}
@media(max-width:900px){.blog-layout{grid-template-columns:1fr;}.sidebar{order:2;}}

/* ── ARTICLE CONTENT ── */
.article-content{background:#fff;border:1.5px solid var(--border);border-radius:22px;overflow:hidden;}
.article-thumb-strip{background:var(--navy2);height:260px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;}
.thumb-emoji-big{font-size:100px;filter:drop-shadow(0 12px 40px rgba(0,0,0,0.5));animation:floatEmoji 4s ease-in-out infinite;}
@keyframes floatEmoji{0%,100%{transform:translateY(0);}50%{transform:translateY(-10px);}}
.thumb-overlay{position:absolute;inset:0;background:linear-gradient(135deg,rgba(10,22,40,0.6) 0%,transparent 60%);}
.reading-time-badge{position:absolute;top:20px;right:20px;background:rgba(255,255,255,0.1);backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,0.2);border-radius:100px;padding:6px 14px;font-family:var(--fh);font-size:11px;font-weight:700;color:#fff;display:flex;align-items:center;gap:6px;}

.prose{padding:36px 40px;line-height:1.8;}
@media(max-width:600px){.prose{padding:24px 20px;}}

.prose h2{font-family:var(--fh);font-size:24px;font-weight:800;letter-spacing:-0.5px;color:var(--navy);margin:36px 0 14px;padding-bottom:10px;border-bottom:2px solid var(--paper);}
.prose h3{font-family:var(--fh);font-size:18px;font-weight:700;color:var(--navy);margin:28px 0 10px;}
.prose p{color:#374151;margin-bottom:18px;font-size:15.5px;line-height:1.8;}
.prose strong{font-weight:700;color:var(--navy);}
.prose em{color:var(--muted);font-style:italic;}
.prose ul,.prose ol{margin:0 0 18px 24px;}
.prose li{margin-bottom:8px;color:#374151;font-size:15.5px;line-height:1.7;}
.prose a{color:var(--blue);border-bottom:1px dashed rgba(26,79,214,0.35);transition:.15s;}
.prose a:hover{border-bottom-style:solid;}

/* Callout boxes */
.callout{border-radius:14px;padding:20px 24px;margin:28px 0;display:flex;gap:14px;align-items:flex-start;}
.callout-info{background:#eef3ff;border:1.5px solid rgba(26,79,214,0.15);}
.callout-warn{background:#fffbeb;border:1.5px solid rgba(245,166,35,0.25);}
.callout-success{background:#ecfdf5;border:1.5px solid rgba(5,150,105,0.2);}
.callout-icon{font-size:20px;flex-shrink:0;margin-top:2px;}
.callout-title{font-family:var(--fh);font-size:13px;font-weight:800;letter-spacing:.5px;text-transform:uppercase;margin-bottom:4px;}
.callout-info .callout-title{color:var(--blue);}
.callout-warn .callout-title{color:#d97706;}
.callout-success .callout-title{color:#059669;}
.callout p{margin:0;font-size:14px;color:#374151;}

/* Formula block */
.formula-block{background:var(--navy);border-radius:14px;padding:24px 28px;margin:28px 0;overflow-x:auto;}
.formula-label{font-family:var(--fh);font-size:10px;font-weight:800;color:rgba(255,255,255,0.35);letter-spacing:2px;text-transform:uppercase;margin-bottom:12px;}
.formula-text{font-family:monospace;font-size:17px;color:var(--gold);letter-spacing:.5px;}
.formula-vars{margin-top:14px;display:flex;flex-wrap:wrap;gap:10px;}
.fvar{background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:8px;padding:6px 12px;font-size:12px;color:rgba(255,255,255,0.6);}
.fvar b{color:rgba(255,255,255,0.9);}

/* Data table */
.data-table-wrap{overflow-x:auto;margin:28px 0;border-radius:14px;border:1.5px solid var(--border);}
.data-table{width:100%;border-collapse:collapse;font-size:13.5px;}
.data-table th{background:var(--navy);color:rgba(255,255,255,0.8);font-family:var(--fh);font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:12px 16px;text-align:left;}
.data-table th:first-child{border-radius:12px 0 0 0;}
.data-table th:last-child{border-radius:0 12px 0 0;}
.data-table td{padding:11px 16px;border-bottom:1px solid var(--border);color:#374151;}
.data-table tr:last-child td{border-bottom:none;}
.data-table tr:hover td{background:var(--paper);}
.data-table .highlight td{background:#eef3ff;font-weight:600;color:var(--blue);}

/* Pull quote */
.pull-quote{border-left:4px solid var(--gold);background:var(--paper);border-radius:0 14px 14px 0;padding:20px 24px;margin:28px 0;}
.pull-quote p{font-family:var(--fh);font-size:18px;font-weight:700;color:var(--navy);line-height:1.4;margin:0;letter-spacing:-0.3px;}
.pull-quote cite{display:block;font-size:12px;color:var(--muted);margin-top:8px;font-style:normal;}

/* Share / reaction strip at bottom of article */
.article-bottom-strip{padding:24px 40px;border-top:1.5px solid var(--border);background:var(--paper);display:flex;flex-wrap:wrap;align-items:center;gap:14px;}
@media(max-width:600px){.article-bottom-strip{padding:20px;};}
.reaction-row{display:flex;gap:8px;}
.react-btn{display:flex;align-items:center;gap:6px;background:#fff;border:1.5px solid var(--border);border-radius:100px;padding:8px 16px;font-size:13px;font-weight:600;font-family:var(--fh);cursor:pointer;transition:.2s;}
.react-btn:hover{border-color:var(--navy);background:var(--navy);color:#fff;}
.react-btn.active{background:var(--gold);border-color:var(--gold);color:var(--navy);}
.share-label{font-family:var(--fh);font-size:12px;font-weight:700;color:var(--muted);letter-spacing:1px;text-transform:uppercase;margin-left:auto;}
.share-btns{display:flex;gap:8px;}
.share-icon{width:34px;height:34px;border-radius:50%;display:flex;align-items:center;justify-content:center;border:1.5px solid var(--border);background:#fff;transition:.2s;cursor:pointer;font-size:14px;}
.share-icon:hover{border-color:var(--navy);background:var(--navy);color:#fff;}

/* ── COMMENTS ── */
.comments-section{margin-top:32px;background:#fff;border:1.5px solid var(--border);border-radius:22px;overflow:hidden;}
.comments-header{padding:24px 36px;border-bottom:1.5px solid var(--border);display:flex;align-items:center;justify-content:space-between;}
.comments-header h3{font-family:var(--fh);font-size:18px;font-weight:800;color:var(--navy);}
.comment-count-badge{background:var(--navy);color:var(--gold);font-family:var(--fh);font-size:11px;font-weight:800;padding:4px 12px;border-radius:100px;}
.comments-list{padding:0 36px;}
@media(max-width:600px){.comments-list{padding:0 16px;}.comments-header{padding:20px;}}
.comment-item{display:flex;gap:14px;padding:22px 0;border-bottom:1px solid var(--border);}
.comment-item:last-child{border-bottom:none;}
.c-avatar{width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:var(--fh);font-size:13px;font-weight:800;flex-shrink:0;}
.c-body-wrap{flex:1;}
.c-meta{display:flex;align-items:center;flex-wrap:wrap;gap:8px;margin-bottom:6px;}
.c-name{font-family:var(--fh);font-size:14px;font-weight:700;color:var(--navy);}
.c-date{font-size:11px;color:var(--muted);}
.c-verified{background:#ecfdf5;color:#059669;border-radius:100px;padding:2px 8px;font-size:10px;font-weight:800;letter-spacing:.5px;}
.c-text{font-size:14px;color:#374151;line-height:1.7;margin-bottom:10px;}
.c-reply-btn{font-family:var(--fh);font-size:11px;font-weight:700;color:var(--muted);border:none;background:none;cursor:pointer;display:flex;align-items:center;gap:5px;transition:color .2s;padding:0;}
.c-reply-btn:hover{color:var(--blue);}
.c-likes{display:flex;align-items:center;gap:4px;font-size:11px;font-weight:600;color:var(--muted);margin-left:auto;cursor:pointer;transition:color .2s;}
.c-likes:hover{color:var(--gold);}
.comment-reply{margin-left:54px;margin-top:0;padding:16px 0;border-bottom:1px solid var(--border);display:flex;gap:12px;}
.comment-reply .c-avatar{width:32px;height:32px;font-size:11px;}
.reply-badge{background:rgba(26,79,214,0.08);color:var(--blue);font-size:10px;font-weight:800;padding:1px 7px;border-radius:100px;}

/* Comment form */
.comment-form{padding:28px 36px;background:var(--paper);border-top:1.5px solid var(--border);}
@media(max-width:600px){.comment-form{padding:20px;}}
.cf-title{font-family:var(--fh);font-size:16px;font-weight:800;margin-bottom:18px;color:var(--navy);}
.cf-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-bottom:14px;}
@media(max-width:500px){.cf-grid{grid-template-columns:1fr;}}
.cf-input{width:100%;background:#fff;border:1.5px solid var(--border);border-radius:10px;padding:11px 16px;font-family:var(--fb);font-size:14px;color:var(--navy);outline:none;transition:border-color .2s;}
.cf-input:focus{border-color:var(--blue);box-shadow:0 0 0 3px rgba(26,79,214,0.08);}
.cf-input::placeholder{color:var(--muted);}
.cf-textarea{width:100%;background:#fff;border:1.5px solid var(--border);border-radius:10px;padding:13px 16px;font-family:var(--fb);font-size:14px;color:var(--navy);outline:none;resize:vertical;min-height:110px;transition:border-color .2s;margin-bottom:14px;}
.cf-textarea:focus{border-color:var(--blue);box-shadow:0 0 0 3px rgba(26,79,214,0.08);}
.cf-textarea::placeholder{color:var(--muted);}
.btn-submit{background:var(--navy);color:#fff;font-family:var(--fh);font-size:14px;font-weight:800;padding:12px 28px;border-radius:100px;border:none;cursor:pointer;display:inline-flex;align-items:center;gap:8px;transition:.2s;}
.btn-submit:hover{background:var(--blue);transform:translateY(-2px);}

/* ── SIDEBAR ── */
.sidebar{display:flex;flex-direction:column;gap:24px;position:sticky;top:80px;}

.sidebar-card{background:#fff;border:1.5px solid var(--border);border-radius:18px;overflow:hidden;}
.sidebar-card-header{padding:16px 20px;border-bottom:1.5px solid var(--border);display:flex;align-items:center;gap:10px;}
.sidebar-card-header h4{font-family:var(--fh);font-size:14px;font-weight:800;color:var(--navy);}
.sidebar-header-icon{width:28px;height:28px;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:14px;}

/* Popular / Recent posts in sidebar */
.sidebar-posts{padding:8px 0;}
.sp-item{display:flex;gap:12px;padding:12px 20px;border-bottom:1px solid var(--border);transition:background .2s;cursor:pointer;}
.sp-item:last-child{border-bottom:none;}
.sp-item:hover{background:var(--paper);}
.sp-thumb{width:52px;height:52px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;}
.sp-info{}
.sp-cat{font-family:var(--fh);font-size:9px;font-weight:800;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:3px;}
.sp-title{font-family:var(--fh);font-size:13px;font-weight:700;color:var(--navy);line-height:1.25;margin-bottom:4px;}
.sp-meta{font-size:11px;color:var(--muted);}
.sp-rank{width:20px;height:20px;border-radius:50%;background:var(--navy);color:#fff;font-family:var(--fh);font-size:9px;font-weight:800;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:4px;}

/* Tags */
.tags-cloud{padding:16px 20px;display:flex;flex-wrap:wrap;gap:8px;}
.tag-chip{padding:6px 14px;border-radius:100px;border:1.5px solid var(--border);font-family:var(--fh);font-size:12px;font-weight:700;color:var(--muted);transition:.2s;cursor:pointer;}
.tag-chip:hover{background:var(--navy);color:#fff;border-color:var(--navy);}
.tag-chip.active-tag{background:var(--blue);color:#fff;border-color:var(--blue);}
.tag-chip.gold-tag{background:rgba(245,166,35,0.1);color:#b5700d;border-color:rgba(245,166,35,0.25);}
.tag-chip.green-tag{background:#ecfdf5;color:#065f46;border-color:rgba(5,150,105,0.2);}

/* Newsletter sidebar widget */
.nl-widget{background:var(--navy);border-radius:18px;padding:24px 20px;position:relative;overflow:hidden;}
.nl-widget::before{content:'';position:absolute;inset:0;background-image:radial-gradient(rgba(245,166,35,0.08) 1.5px,transparent 1.5px);background-size:22px 22px;}
.nl-widget h4{font-family:var(--fh);font-size:16px;font-weight:800;color:#fff;margin-bottom:6px;position:relative;z-index:1;}
.nl-widget h4 span{color:var(--gold);}
.nl-widget p{font-size:12px;color:rgba(255,255,255,0.5);margin-bottom:14px;position:relative;z-index:1;}
.nl-input{width:100%;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.14);border-radius:8px;padding:10px 14px;color:#fff;font-family:var(--fh);font-size:13px;outline:none;margin-bottom:10px;position:relative;z-index:1;}
.nl-input::placeholder{color:rgba(255,255,255,0.4);}
.nl-input:focus{border-color:var(--gold);}
.btn-nl{width:100%;background:var(--gold);color:var(--navy);font-family:var(--fh);font-size:13px;font-weight:800;padding:10px;border-radius:8px;border:none;cursor:pointer;transition:.2s;position:relative;z-index:1;}
.btn-nl:hover{background:var(--gold2);}

/* Author card sidebar */
.author-sidebar{padding:20px;}
.author-sidebar-av{width:56px;height:56px;border-radius:50%;background:rgba(26,79,214,0.1);display:flex;align-items:center;justify-content:center;font-family:var(--fh);font-size:18px;font-weight:800;color:var(--blue);border:2px solid rgba(26,79,214,0.2);margin-bottom:12px;}
.author-sidebar-name{font-family:var(--fh);font-size:15px;font-weight:800;color:var(--navy);}
.author-sidebar-role{font-size:12px;color:var(--muted);margin-bottom:10px;}
.author-sidebar-bio{font-size:13px;color:#374151;line-height:1.6;margin-bottom:14px;}
.author-stats{display:flex;gap:20px;}
.a-stat{text-align:center;}
.a-stat-num{font-family:var(--fh);font-size:16px;font-weight:800;color:var(--navy);}
.a-stat-label{font-size:10px;color:var(--muted);}

/* ── TOC widget ── */
.toc-list{padding:14px 20px;list-style:none;}
.toc-list li{padding:5px 0;border-bottom:1px solid var(--border);}
.toc-list li:last-child{border-bottom:none;}
.toc-list a{font-size:13px;font-weight:500;color:var(--muted);display:flex;align-items:center;gap:8px;transition:color .2s;}
.toc-list a:hover,.toc-list a.toc-active{color:var(--blue);}
.toc-list a::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--border);flex-shrink:0;transition:background .2s;}
.toc-list a.toc-active::before{background:var(--blue);}

/* ── RELATED ARTICLES ── */
.related-section{margin-top:32px;}
.related-section h3{font-family:var(--fh);font-size:20px;font-weight:800;color:var(--navy);margin-bottom:20px;display:flex;align-items:center;gap:10px;}
.related-section h3::after{content:'';flex:1;height:2px;background:var(--border);}
.related-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
@media(max-width:700px){.related-grid{grid-template-columns:1fr;}}
.rel-card{background:#fff;border:1.5px solid var(--border);border-radius:16px;overflow:hidden;transition:.25s;cursor:pointer;}
.rel-card:hover{transform:translateY(-5px);box-shadow:0 16px 40px rgba(10,22,40,0.1);}
.rel-thumb{height:100px;display:flex;align-items:center;justify-content:center;font-size:40px;}
.rel-body{padding:14px;}
.rel-cat{font-family:var(--fh);font-size:9px;font-weight:800;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:5px;}
.rel-title{font-family:var(--fh);font-size:13px;font-weight:800;color:var(--navy);line-height:1.3;margin-bottom:6px;}
.rel-read{font-size:11px;color:var(--muted);}

/* Animations */
@keyframes fadeSlideUp{from{opacity:0;transform:translateY(20px);}to{opacity:1;transform:translateY(0);}}
.article-content,.comments-section,.sidebar-card,.nl-widget{animation:fadeSlideUp .5s ease both;}
.article-content{animation-delay:.05s;}
.comments-section{animation-delay:.1s;}

</style>
</head>
<body>
<?php include 'header.php'; ?>

<!-- ARTICLE HERO -->
<section class="article-hero">
  <div class="hero-glow"></div>
  <div class="hero-arc"></div>
  <div class="article-hero-inner">
    <div class="art-cat-pill">💰 Finance</div>
    <h1>How to Calculate <span class="gold">EMI:</span><br>The Complete Step-by-Step Guide</h1>
    <div class="article-meta-row">
      <div class="author-chip">
        <div class="author-av">RK</div>
        <div>
          <div class="author-name">Rahul Kumar</div>
          <div class="author-role">Finance Writer</div>
        </div>
      </div>
      <div class="meta-divider"></div>
      <div class="meta-item">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="rgba(255,255,255,0.5)" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        April 20, 2026
      </div>
      <div class="meta-item">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="rgba(255,255,255,0.5)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        8 min read
      </div>
      <div class="meta-item">
        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="rgba(255,255,255,0.5)" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
        14.2k views
      </div>
      <div class="art-actions">
        <button class="act-btn" id="likeBtn" onclick="toggleLike()">
          <svg width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          <span id="likeCount">248</span>
        </button>
        <button class="act-btn" onclick="document.getElementById('commentsSection').scrollIntoView({behavior:'smooth'})">
          <svg width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          18
        </button>
        <button class="act-btn">
          <svg width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
          Share
        </button>
      </div>
    </div>
  </div>
</section>

<!-- MAIN LAYOUT -->
<div class="blog-layout">

  <!-- LEFT: ARTICLE + COMMENTS -->
  <div>

    <!-- ARTICLE CONTENT -->
    <article class="article-content">
      <div class="article-thumb-strip">
        <div class="thumb-emoji-big">🏦</div>
        <div class="thumb-overlay"></div>
        <div class="reading-time-badge">
          <svg width="12" height="12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          8 min read
        </div>
      </div>

      <div class="prose" id="articleProse">

        <p>An <strong>Equated Monthly Instalment (EMI)</strong> is the fixed amount you pay a lender every month to repay a loan — covering both interest and principal. Whether you're buying a home, a car, or taking a personal loan, understanding EMI helps you plan your finances with confidence.</p>

        <div class="callout callout-info">
          <div class="callout-icon">💡</div>
          <div>
            <div class="callout-title">Quick Takeaway</div>
            <p>EMI = Principal × [r(1+r)ⁿ] ÷ [(1+r)ⁿ−1], where <strong>r</strong> is the monthly interest rate and <strong>n</strong> is the number of months. Bookmark this page — we walk through every variable below.</p>
          </div>
        </div>

        <h2 id="what-is-emi">What Exactly is an EMI?</h2>
        <p>When a bank gives you a loan, they want it back with interest. Rather than asking for everything at once, they split the repayment into equal monthly chunks — that's the EMI. Each instalment partly pays the <strong>interest accrued that month</strong> and partly reduces your outstanding <strong>principal balance</strong>.</p>
        <p>Here's what's important: <em>early payments are interest-heavy, later payments are principal-heavy.</em> This is called an <strong>amortising loan</strong>, and understanding this helps you decide whether prepayment makes financial sense.</p>

        <div class="pull-quote">
          <p>"The first EMI you pay is almost entirely interest. The last one is almost entirely principal. In between lies the entire story of your loan."</p>
          <cite>— Standard amortisation principle</cite>
        </div>

        <h2 id="the-formula">The EMI Formula Explained</h2>
        <p>The standard formula used by every bank in India (and globally) is based on the <strong>Reducing Balance Method</strong>:</p>

        <div class="formula-block">
          <div class="formula-label">EMI Formula</div>
          <div class="formula-text">EMI = P × r × (1 + r)ⁿ  ÷  [(1 + r)ⁿ − 1]</div>
          <div class="formula-vars">
            <div class="fvar"><b>P</b> = Principal loan amount</div>
            <div class="fvar"><b>r</b> = Monthly interest rate (annual rate ÷ 12 ÷ 100)</div>
            <div class="fvar"><b>n</b> = Total number of monthly instalments</div>
          </div>
        </div>

        <h3 id="step-by-step">Step-by-Step Calculation Example</h3>
        <p>Let's say you take a <strong>₹10,00,000 home loan</strong> at <strong>8.5% per annum</strong> for <strong>20 years (240 months)</strong>.</p>
        <ul>
          <li><strong>P</strong> = ₹10,00,000</li>
          <li>Annual rate = 8.5%, so <strong>r</strong> = 8.5 ÷ 12 ÷ 100 = <strong>0.007083</strong></li>
          <li><strong>n</strong> = 20 × 12 = <strong>240 months</strong></li>
        </ul>
        <p>Plugging into the formula: EMI = 10,00,000 × 0.007083 × (1.007083)²⁴⁰ ÷ [(1.007083)²⁴⁰ − 1]</p>
        <p>This gives you an <strong>EMI of approximately ₹8,678/month</strong>.</p>

        <div class="callout callout-success">
          <div class="callout-icon">✅</div>
          <div>
            <div class="callout-title">Use Our Free Calculator</div>
            <p>Skip the maths — use Calcspeed's <a href="#">EMI Calculator</a> to get instant results, a full amortisation schedule, and a month-by-month breakdown.</p>
          </div>
        </div>

        <h2 id="amortisation">Understanding Your Amortisation Schedule</h2>
        <p>An amortisation table shows the exact <strong>interest vs. principal breakdown</strong> for every single EMI payment. Here's a sample for the first 6 months of the loan above:</p>

        <div class="data-table-wrap">
          <table class="data-table">
            <thead>
              <tr><th>Month</th><th>EMI (₹)</th><th>Interest (₹)</th><th>Principal (₹)</th><th>Balance (₹)</th></tr>
            </thead>
            <tbody>
              <tr><td>1</td><td>8,678</td><td>7,083</td><td>1,595</td><td>9,98,405</td></tr>
              <tr><td>2</td><td>8,678</td><td>7,072</td><td>1,606</td><td>9,96,799</td></tr>
              <tr><td>3</td><td>8,678</td><td>7,061</td><td>1,617</td><td>9,95,182</td></tr>
              <tr><td>6</td><td>8,678</td><td>7,028</td><td>1,650</td><td>9,89,970</td></tr>
              <tr><td>12</td><td>8,678</td><td>6,969</td><td>1,709</td><td>9,79,302</td></tr>
              <tr class="highlight"><td>120</td><td>8,678</td><td>5,638</td><td>3,040</td><td>7,92,428</td></tr>
              <tr><td>240</td><td>8,678</td><td>61</td><td>8,617</td><td>0</td></tr>
            </tbody>
          </table>
        </div>

        <p>Notice how at month 120 (10 years in), you've paid <strong>₹10.4 lakhs in interest</strong> but still owe ₹7.9 lakhs of your original ₹10 lakh. This is why prepayment in the early years has such a dramatic impact on total interest paid.</p>

        <h2 id="factors">4 Key Factors That Affect Your EMI</h2>
        <ol>
          <li><strong>Principal Amount (P):</strong> Higher loan = higher EMI. Straightforward, but your down payment directly controls this.</li>
          <li><strong>Interest Rate (r):</strong> Even a 0.5% difference compounds enormously over 20 years. Always negotiate with multiple banks.</li>
          <li><strong>Loan Tenure (n):</strong> Longer tenure → lower EMI, but higher total interest paid. Shorter tenure → higher EMI, less total interest.</li>
          <li><strong>Loan Type:</strong> Fixed rate vs. floating rate affects future EMIs. Floating rate loans are riskier but often start cheaper.</li>
        </ol>

        <div class="callout callout-warn">
          <div class="callout-icon">⚠️</div>
          <div>
            <div class="callout-title">Watch Out For</div>
            <p>Banks may advertise a flat rate instead of a reducing balance rate. A 6% flat rate is roughly equivalent to a 11% reducing balance rate. Always ask for the reducing balance equivalent.</p>
          </div>
        </div>

        <h2 id="prepayment">Should You Prepay Your Loan?</h2>
        <p>Prepayment means paying extra money over and above your regular EMI to reduce your outstanding principal faster. This works best in the <strong>first half of your loan tenure</strong> when the interest component of each EMI is highest.</p>
        <p>If you receive a bonus or windfall, directing it toward prepayment in year 2-5 of a 20-year loan can save you <strong>5-8 years of EMIs</strong> and lakhs in interest.</p>

        <h2 id="conclusion">Conclusion</h2>
        <p>Understanding EMI calculations gives you negotiating power with banks, helps you choose the right loan tenure, and reveals when prepayment genuinely makes sense. The formula itself is straightforward — the hard part is applying it to your specific financial situation.</p>
        <p>Use <a href="#">Calcspeed's free EMI calculator</a> to model different scenarios and find your optimal loan structure. It even generates the full amortisation table automatically.</p>

      </div>

      <!-- Bottom strip -->
      <div class="article-bottom-strip">
        <div style="font-family:var(--fh);font-size:12px;font-weight:700;color:var(--muted);letter-spacing:1px;text-transform:uppercase;">Was this helpful?</div>
        <div class="reaction-row">
          <button class="react-btn" onclick="this.classList.toggle('active')">👍 Yes!</button>
          <button class="react-btn" onclick="this.classList.toggle('active')">🤔 Somewhat</button>
          <button class="react-btn" onclick="this.classList.toggle('active')">🔁 Needs Update</button>
        </div>
        <div class="share-label">Share</div>
        <div class="share-btns">
          <div class="share-icon" title="Twitter">𝕏</div>
          <div class="share-icon" title="LinkedIn">in</div>
          <div class="share-icon" title="WhatsApp">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2.18 21.5l4.44-1.234A9.954 9.954 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
          </div>
          <div class="share-icon" title="Copy link">🔗</div>
        </div>
      </div>
    </article>

    <!-- RELATED ARTICLES -->
    <div class="related-section">
      <h3>Related Articles</h3>
      <div class="related-grid">
        <div class="rel-card">
          <div class="rel-thumb" style="background:#0d1e38;">💸</div>
          <div class="rel-body">
            <div class="rel-cat" style="color:var(--blue);">Finance</div>
            <div class="rel-title">EMI vs. Lump Sum: Which Saves You More?</div>
            <div class="rel-read">5 min read</div>
          </div>
        </div>
        <div class="rel-card">
          <div class="rel-thumb" style="background:#064e3b;">📈</div>
          <div class="rel-body">
            <div class="rel-cat" style="color:#059669;">Finance</div>
            <div class="rel-title">Compound Interest: Why Starting Early Changes Everything</div>
            <div class="rel-read">7 min read</div>
          </div>
        </div>
        <div class="rel-card">
          <div class="rel-thumb" style="background:#0d1e38;">₹</div>
          <div class="rel-body">
            <div class="rel-cat" style="color:var(--blue);">Finance</div>
            <div class="rel-title">GST Explained: Complete Guide for First-Time Business Owners</div>
            <div class="rel-read">5 min read</div>
          </div>
        </div>
      </div>
    </div>

    <!-- COMMENTS SECTION -->
    <div class="comments-section" id="commentsSection">
      <div class="comments-header">
        <h3>Discussion</h3>
        <span class="comment-count-badge">18 Comments</span>
      </div>

      <div class="comments-list">

        <!-- Comment 1 -->
        <div class="comment-item">
          <div class="c-avatar" style="background:#eef3ff;color:var(--blue);">AM</div>
          <div class="c-body-wrap">
            <div class="c-meta">
              <span class="c-name">Aditya Menon</span>
              <span class="c-date">April 21, 2026</span>
              <span class="c-verified">✓ Verified Reader</span>
            </div>
            <p class="c-text">Excellent breakdown! I've been confused about the difference between flat rate and reducing balance for years. That callout box clarified it perfectly. Shared this with my entire finance study group.</p>
            <div style="display:flex;align-items:center;gap:16px;">
              <button class="c-reply-btn">↩ Reply</button>
              <span class="c-likes" onclick="this.style.color='var(--gold)'">❤ 24</span>
            </div>
          </div>
        </div>

        <!-- Reply to Comment 1 -->
        <div class="comment-reply">
          <div class="c-avatar" style="background:rgba(26,79,214,0.1);color:var(--blue);">RK</div>
          <div class="c-body-wrap">
            <div class="c-meta">
              <span class="c-name">Rahul Kumar</span>
              <span class="c-date">April 21, 2026</span>
              <span class="reply-badge">Author</span>
            </div>
            <p class="c-text">Thanks Aditya! The flat vs. reducing balance confusion trips up so many people. Banks love advertising flat rates because they look lower. Always convert to reducing balance before comparing.</p>
            <div style="display:flex;align-items:center;gap:16px;">
              <button class="c-reply-btn">↩ Reply</button>
              <span class="c-likes" onclick="this.style.color='var(--gold)'">❤ 11</span>
            </div>
          </div>
        </div>

        <!-- Comment 2 -->
        <div class="comment-item">
          <div class="c-avatar" style="background:#ecfdf5;color:#059669;">PS</div>
          <div class="c-body-wrap">
            <div class="c-meta">
              <span class="c-name">Pooja Sharma</span>
              <span class="c-date">April 22, 2026</span>
            </div>
            <p class="c-text">The amortisation table was incredibly eye-opening. I had no idea that after 10 years of paying a 20-year loan, I'd still owe almost 80% of the principal. Definitely reconsidering my loan tenure now.</p>
            <div style="display:flex;align-items:center;gap:16px;">
              <button class="c-reply-btn">↩ Reply</button>
              <span class="c-likes" onclick="this.style.color='var(--gold)'">❤ 17</span>
            </div>
          </div>
        </div>

        <!-- Comment 3 -->
        <div class="comment-item">
          <div class="c-avatar" style="background:#fef9ee;color:#d97706;">VR</div>
          <div class="c-body-wrap">
            <div class="c-meta">
              <span class="c-name">Vikram Rao</span>
              <span class="c-date">April 23, 2026</span>
            </div>
            <p class="c-text">Quick question — does this formula apply to floating rate loans too? My home loan rate keeps changing every quarter and I'm not sure how to recalculate my EMI when the rate changes.</p>
            <div style="display:flex;align-items:center;gap:16px;">
              <button class="c-reply-btn">↩ Reply</button>
              <span class="c-likes" onclick="this.style.color='var(--gold)'">❤ 8</span>
            </div>
          </div>
        </div>

        <!-- Comment 4 -->
        <div class="comment-item">
          <div class="c-avatar" style="background:#f5f0ff;color:#7c3aed;">NK</div>
          <div class="c-body-wrap">
            <div class="c-meta">
              <span class="c-name">Neha Krishnan</span>
              <span class="c-date">April 24, 2026</span>
            </div>
            <p class="c-text">This is exactly the quality content the internet needs. Clear, no fluff, worked examples. Bookmarked and shared. Can you do a follow-up on how to calculate whether prepayment makes sense vs. investing the lump sum?</p>
            <div style="display:flex;align-items:center;gap:16px;">
              <button class="c-reply-btn">↩ Reply</button>
              <span class="c-likes" onclick="this.style.color='var(--gold)'">❤ 31</span>
            </div>
          </div>
        </div>

      </div><!-- /comments-list -->

      <!-- COMMENT FORM -->
      <div class="comment-form">
        <div class="cf-title">💬 Leave a Comment</div>
        <div class="cf-grid">
          <input class="cf-input" type="text" placeholder="Your name *">
          <input class="cf-input" type="email" placeholder="Email (not published)">
        </div>
        <textarea class="cf-textarea" placeholder="Share your thoughts, questions, or feedback…"></textarea>
        <button class="btn-submit" onclick="submitComment(this)">
          <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          Post Comment
        </button>
      </div>
    </div><!-- /comments-section -->

  </div><!-- /main col -->

  <!-- RIGHT: SIDEBAR -->
  <aside class="sidebar">

    

    <!-- Popular Posts -->
    <div class="sidebar-card">
      <div class="sidebar-card-header">
        <div class="sidebar-header-icon" style="background:#fef9ee;">🔥</div>
        <h4>Popular This Week</h4>
      </div>
      <div class="sidebar-posts">
        <a href="#" class="sp-item">
          <div class="sp-rank">1</div>
          <div class="sp-thumb" style="background:#0d1e38;">💸</div>
          <div class="sp-info">
            <div class="sp-cat" style="color:var(--blue);">Finance</div>
            <div class="sp-title">EMI vs. Lump Sum: Which Saves More?</div>
            <div class="sp-meta">32k views · 5 min</div>
          </div>
        </a>
        <a href="#" class="sp-item">
          <div class="sp-rank">2</div>
          <div class="sp-thumb" style="background:#064e3b;">⚖️</div>
          <div class="sp-info">
            <div class="sp-cat" style="color:#059669;">Health</div>
            <div class="sp-title">BMI Calculator: What Your Number Really Means</div>
            <div class="sp-meta">28k views · 5 min</div>
          </div>
        </a>
        <a href="#" class="sp-item">
          <div class="sp-rank">3</div>
          <div class="sp-thumb" style="background:#064e3b;">📈</div>
          <div class="sp-info">
            <div class="sp-cat" style="color:#059669;">Finance</div>
            <div class="sp-title">Compound Interest: Why Starting Early Matters</div>
            <div class="sp-meta">24k views · 7 min</div>
          </div>
        </a>
        <a href="#" class="sp-item">
          <div class="sp-rank">4</div>
          <div class="sp-thumb" style="background:#78350f;">💡</div>
          <div class="sp-info">
            <div class="sp-cat" style="color:#d97706;">Tips</div>
            <div class="sp-title">5 Calculator Tricks Every Student Should Know</div>
            <div class="sp-meta">19k views · 3 min</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Recent Posts -->
    <div class="sidebar-card">
      <div class="sidebar-card-header">
        <div class="sidebar-header-icon" style="background:#f5f0ff;">🆕</div>
        <h4>Recent Articles</h4>
      </div>
      <div class="sidebar-posts">
        <a href="#" class="sp-item">
          <div class="sp-thumb" style="background:#2e1065;">📢</div>
          <div class="sp-info">
            <div class="sp-cat" style="color:#7c3aed;">News</div>
            <div class="sp-title">Calcspeed Now Has 20+ Calculators</div>
            <div class="sp-meta">Apr 22, 2026 · 2 min</div>
          </div>
        </a>
        <a href="#" class="sp-item">
          <div class="sp-thumb" style="background:#0d1e38;">₹</div>
          <div class="sp-info">
            <div class="sp-cat" style="color:var(--blue);">Finance</div>
            <div class="sp-title">GST Guide for First-Time Business Owners</div>
            <div class="sp-meta">Apr 21, 2026 · 5 min</div>
          </div>
        </a>
        <a href="#" class="sp-item">
          <div class="sp-thumb" style="background:#0a1628;">🛠️</div>
          <div class="sp-info">
            <div class="sp-cat" style="color:#d97706;">How-To</div>
            <div class="sp-title">How to Use the EMI Calculator</div>
            <div class="sp-meta">Apr 21, 2026 · 6 min</div>
          </div>
        </a>
      </div>
    </div>

    <!-- Tags Cloud -->
    <div class="sidebar-card">
      <div class="sidebar-card-header">
        <div class="sidebar-header-icon" style="background:#ecfdf5;">🏷️</div>
        <h4>Article Tags</h4>
      </div>
      <div class="tags-cloud">
        <span class="tag-chip active-tag">EMI</span>
        <span class="tag-chip gold-tag">Loan Calculator</span>
        <span class="tag-chip">Finance</span>
        <span class="tag-chip green-tag">Reducing Balance</span>
        <span class="tag-chip">Home Loan</span>
        <span class="tag-chip">Amortisation</span>
        <span class="tag-chip">Personal Finance</span>
        <span class="tag-chip gold-tag">Interest Rate</span>
        <span class="tag-chip">Prepayment</span>
        <span class="tag-chip">India</span>
        <span class="tag-chip green-tag">Banking</span>
        <span class="tag-chip">Car Loan</span>
      </div>
    </div>

    <!-- Newsletter Widget -->
    <div class="nl-widget">
      <h4>Stay in the <span>loop.</span></h4>
      <p>Weekly guides on finance & calculators. No spam, ever.</p>
      <input class="nl-input" type="email" placeholder="your@email.com">
      <button class="nl-btn btn-nl">Subscribe Free →</button>
    </div>

  </aside>

</div><!-- /blog-layout -->

<?php include'footer.php'; ?>

</body>
</html>