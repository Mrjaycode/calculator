<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CalcSpeed Blog | Calculator Guides, Finance Tips, Health & Education Resources</title>

<meta name="description" content="Explore CalcSpeed Blog for expert calculator guides, finance tips, health insights, education resources, savings strategies, investment tutorials, and practical calculation methods.">

<meta name="keywords" content="Calculator Blog, Finance Guides, Investment Tips, EMI Calculator Guide, GST Guide, BMI Guide, Percentage Calculator Guide, Savings Tips, Financial Planning, Health Calculators, Education Calculators">

<meta name="author" content="CalcSpeed">

<meta name="robots" content="index, follow, max-image-preview:large">

<link rel="canonical" href="https://www.calcspeed.com/blog">

<meta property="og:type" content="website">
<meta property="og:title" content="CalcSpeed Blog | Calculator Guides, Finance Tips & Resources">
<meta property="og:description" content="Learn finance, health, education, and productivity calculations with expert guides from CalcSpeed.">
<meta property="og:url" content="https://www.calcspeed.com/blog">
<meta property="og:image" content="https://www.calcspeed.com/img/logo-dark1.png">
<meta property="og:site_name" content="CalcSpeed">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="CalcSpeed Blog | Calculator Guides, Finance Tips & Resources">
<meta name="twitter:description" content="Expert guides on calculators, personal finance, health, education, and productivity.">
<meta name="twitter:image" content="https://www.calcspeed.com/img/logo-dark1.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
<link href="css/plugins.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@type":"Blog",
  "name":"CalcSpeed Blog",
  "url":"https://www.calcspeed.com/blog",
  "description":"Calculator guides, finance articles, health resources, educational content, and productivity tips.",
  "publisher":{
    "@type":"Organization",
    "name":"CalcSpeed",
    "logo":{
      "@type":"ImageObject",
      "url":"https://www.calcspeed.com/img/logo-dark1.png"
    }
  }
}
</script>
  <style>
    /* ----- GLOBAL / VARIABLES (same brand identity) ----- */
    :root {
      --navy:    #0a1628;
      --navy2:   #0d1e38;
      --navy3:   #162340;
      --blue:    #1a4fd6;
      --gold:    #f5a623;
      --gold2:   #ffbe4d;
      --white:   #ffffff;
      --off:     #f7f8fc;
      --paper:   #f2f4f9;
      --muted:   #64748b;
      --border:  rgba(10,22,40,0.09);
      --shadow:  0 4px 24px rgba(10,22,40,0.08);
      --r:       16px;
      --fh:      'Outfit', sans-serif;
      --fb:      'Plus Jakarta Sans', sans-serif;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: var(--fb);
      background: var(--off);
      color: var(--navy);
      overflow-x: hidden;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Buttons / gold reusable */
    .btn-gold {
      background: var(--gold);
      color: var(--navy);
      font-family: var(--fh);
      font-size: 14px;
      font-weight: 700;
      padding: 12px 24px;
      border-radius: 100px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      border: none;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .btn-gold:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 28px rgba(245,166,35,0.35);
      color: var(--navy);
      background: var(--gold2);
    }

    /* ============ BLOG SPECIFIC STYLES (tailwind + bootstrap friendly) ============ */
    .blog-hero {
      background: var(--navy);
      position: relative;
      overflow: hidden;
      padding: 80px 5% 70px;
    }

    .blog-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: radial-gradient(rgba(245,166,35,0.10) 1.5px, transparent 1.5px);
      background-size: 32px 32px;
      pointer-events: none;
    }

    .blog-hero-arc {
      position: absolute;
      bottom: -120px;
      right: -100px;
      width: 420px;
      height: 420px;
      border: 70px solid rgba(26,79,214,0.09);
      border-radius: 50%;
      pointer-events: none;
    }

    .blog-hero-glow {
      position: absolute;
      top: -60px;
      right: 10%;
      width: 340px;
      height: 340px;
      background: radial-gradient(circle, rgba(245,166,35,0.09) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }

    .blog-hero-pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(245,166,35,0.1);
      border: 1px solid rgba(245,166,35,0.22);
      border-radius: 100px;
      padding: 5px 14px;
      margin-bottom: 20px;
      font-family: var(--fh);
      font-size: 11px;
      font-weight: 700;
      color: var(--gold);
      letter-spacing: 1.5px;
      text-transform: uppercase;
    }

    .pill-live {
      width: 7px;
      height: 7px;
      background: var(--gold);
      border-radius: 50%;
      animation: blink 2s ease-in-out infinite;
    }

    @keyframes blink {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.3; transform: scale(1.6); }
    }

    .blog-hero h1 {
      font-family: var(--fh);
      font-size: clamp(38px, 6vw, 72px);
      font-weight: 900;
      line-height: 0.95;
      letter-spacing: -2.5px;
      color: #fff;
      margin-bottom: 16px;
    }

    .blog-hero h1 .gold { color: var(--gold); }
    .blog-hero h1 .stroke {
      -webkit-text-stroke: 2px rgba(255,255,255,0.18);
      color: transparent;
    }

    .blog-hero-desc {
      font-size: 16px;
      color: rgba(255,255,255,0.55);
      line-height: 1.65;
      max-width: 440px;
    }

    

    /* stats row */
    .blog-stats-container {
      max-width: 1200px;
      margin: 0 auto;
      border-top: 1px solid rgba(255,255,255,0.06);
      padding-top: 10px;
    }

    .stat-item {
      padding: 18px 10px;
      text-align: center;
      border-right: 1px solid rgba(255,255,255,0.06);
    }

    .stat-item:last-child { border-right: none; }
    .stat-number {
      font-family: var(--fh);
      font-size: 22px;
      font-weight: 800;
      color: white;
    }
    .stat-label {
      font-size: 11px;
      color: rgba(255,255,255,0.4);
      margin-top: 4px;
      letter-spacing: 0.3px;
    }
    .gold-num { color: var(--gold); }

    /* Category filter (static for design, backend will handle) */
    .blog-filter-bar {
      background: white;
      border-bottom: 1px solid var(--border);
      position: sticky;
      top: 0;
      z-index: 50;
      padding: 0 5%;
    }
    .filter-scroll {
      display: flex;
      gap: 8px;
      overflow-x: auto;
      padding: 14px 0;
      scrollbar-width: none;
    }
    .filter-scroll::-webkit-scrollbar { display: none; }
    .filter-cat {
      padding: 7px 20px;
      border-radius: 100px;
      font-family: var(--fh);
      font-size: 12px;
      font-weight: 700;
      border: 1.5px solid var(--border);
      background: transparent;
      color: var(--muted);
      white-space: nowrap;
      transition: 0.2s;
    }
    .filter-cat:hover {
      border-color: var(--navy);
      color: var(--navy);
    }
    .filter-cat.active {
      background: var(--navy);
      border-color: var(--navy);
      color: white;
    }
    .filter-cat.finance-active { background: var(--blue); border-color: var(--blue); color: white; }
    .filter-cat.health-active { background: #059669; border-color: #059669; color: white; }
    .filter-cat.tips-active { background: var(--gold); border-color: var(--gold); color: var(--navy); }
    .filter-cat.how-active { background: #d97706; border-color: #d97706; color: white; }
    .filter-cat.news-active { background: #7c3aed; border-color: #7c3aed; color: white; }
    .cat-count {
      background: rgba(0,0,0,0.07);
      border-radius: 100px;
      padding: 1px 7px;
      font-size: 10px;
      margin-left: 6px;
      font-weight: 800;
    }

    /* Featured post card */
    .featured-card {
      background: white;
      border: 1.5px solid var(--border);
      border-radius: 22px;
      overflow: hidden;
      transition: box-shadow 0.25s;
    }
    .featured-card:hover { box-shadow: 0 20px 60px rgba(10,22,40,0.1); }
    .featured-thumb {
      background: var(--navy);
      min-height: 280px;
      position: relative;
      display: flex;
      align-items: flex-end;
      padding: 28px;
    }
    .feat-emoji {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -60%);
      font-size: 90px;
      filter: drop-shadow(0 8px 32px rgba(0,0,0,0.4));
    }
    .feat-badge {
      background: var(--gold);
      border-radius: 100px;
      padding: 5px 14px;
      font-family: var(--fh);
      font-size: 10px;
      font-weight: 800;
      color: var(--navy);
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    /* Blog Card (bootstrap + custom) */
    .blog-card {
      background: white;
      border: 1.5px solid var(--border);
      border-radius: 18px;
      overflow: hidden;
      transition: transform 0.25s, box-shadow 0.25s;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    .blog-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 48px rgba(10,22,40,0.1);
      border-color: rgba(10,22,40,0.14);
    }
    .card-thumb {
      background: var(--navy);
      height: 160px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    .card-emoji {
      font-size: 52px;
      filter: drop-shadow(0 4px 16px rgba(0,0,0,0.3));
      transition: transform 0.2s;
    }
    .blog-card:hover .card-emoji { transform: scale(1.08) rotate(-3deg); }
    .card-tag {
      position: absolute;
      bottom: 12px;
      left: 12px;
      background: rgba(255,255,255,0.12);
      backdrop-filter: blur(2px);
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 100px;
      padding: 3px 10px;
      font-size: 9px;
      font-weight: 800;
      letter-spacing: 1.5px;
      color: white;
    }
    .card-body-custom {
      padding: 18px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .card-cat {
      font-family: var(--fh);
      font-size: 9px;
      font-weight: 800;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 8px;
    }
    .card-title {
      font-family: var(--fh);
      font-size: 16px;
      font-weight: 800;
      line-height: 1.2;
      letter-spacing: -0.3px;
      margin-bottom: 8px;
    }
    .card-excerpt {
      font-size: 12px;
      color: var(--muted);
      line-height: 1.6;
      margin-bottom: 16px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    .card-footer-meta {
      display: flex;
      align-items: center;
      gap: 10px;
      border-top: 1px solid var(--border);
      padding-top: 12px;
      margin-top: auto;
    }
    .author-avatar {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 10px;
      flex-shrink: 0;
    }
    .read-arrow {
      margin-left: auto;
      width: 30px;
      height: 30px;
      background: var(--paper);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.2s;
    }
    .blog-card:hover .read-arrow {
      background: var(--navy);
      transform: translateX(3px);
    }
    .blog-card:hover .read-arrow svg path {
      stroke: white;
    }

    /* Load more button (static design, backend pagination) */
    .load-more-static {
      text-align: center;
      margin-top: 20px;
    }
    .btn-load-more {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: white;
      border: 2px solid var(--border);
      border-radius: 100px;
      font-family: var(--fh);
      font-weight: 800;
      padding: 14px 32px;
      transition: 0.25s;
    }
    .btn-load-more:hover {
      background: var(--navy);
      color: white;
      border-color: var(--navy);
    }

    /* newsletter band */
    .newsletter-band {
      background: var(--navy);
      border-radius: 20px;
      padding: 40px 36px;
      position: relative;
      overflow: hidden;
      margin-top: 48px;
    }
    .newsletter-band h3 {
      font-family: var(--fh);
      font-size: clamp(20px, 2.5vw, 30px);
      font-weight: 800;
      color: white;
    }
    .newsletter-band h3 span { color: var(--gold); }
    .subscribe-input {
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 10px;
      padding: 12px 18px;
      color: white;
      font-family: var(--fh);
      outline: none;
    }
    .subscribe-input:focus { border-color: var(--gold); }
    @media (max-width: 768px) {
      .featured-thumb { min-height: 220px; }
    }

    .meta-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: transparent;
  border: none;
  padding: 6px 12px;
  border-radius: 40px;
  font-size: 12px;
  font-weight: 500;
  color: var(--muted);
  text-decoration: none;
  transition: all 0.2s ease;
  cursor: pointer;
  font-family: var(--fb);
}

.meta-btn svg {
  stroke: currentColor;
  transition: stroke 0.2s;
}

.meta-btn:hover {
  background: var(--paper);
  color: var(--navy);
}

.meta-btn:hover svg {
  stroke: var(--blue);
}

.meta-btn .count {
  font-weight: 600;
  font-size: 11px;
}
  </style>
</head>
<body>
  <!-- header include (dynamic replacement) -->
  <?php include 'header.php'; ?>

  <!-- BLOG HERO SECTION -->
  <section class="blog-hero">
    <div class="blog-hero-arc"></div>
    <div class="blog-hero-glow"></div>
    <div class="container position-relative z-2">
      <div class="row align-items-end justify-content-between g-4">
        <div class="col-lg-7">
          <div class="blog-hero-pill">
            <span class="pill-live"></span> Calcspeed Blog
          </div>
          <h1>Learn <span class="gold">Smarter,</span><br><span class="stroke">Calculate</span> Better.</h1>
          <p class="blog-hero-desc mt-3">Expert guides on EMI, GST, BMI, investments and personal finance. Written simply. Updated regularly. Always free.</p>
        </div>
        
      </div>
      <!-- stats row -->
      <div class="blog-stats-container row mt-5">
        <div class="col-md-3 col-6 stat-item"><div class="stat-number">50<span class="gold-num">+</span></div><div class="stat-label">Articles Published</div></div>
        <div class="col-md-3 col-6 stat-item"><div class="stat-number">5</div><div class="stat-label">Categories</div></div>
        <div class="col-md-3 col-6 stat-item"><div class="stat-number">Free</div><div class="stat-label">Always. Forever.</div></div>
        <div class="col-md-3 col-6 stat-item"><div class="stat-number">⚡</div><div class="stat-label">Weekly Updates</div></div>
      </div>
    </div>
  </section>

  <!-- CATEGORY FILTER (STATIC UI, backend will manage active state) -->
  <div class="blog-filter-bar">
    <div class="container">
      <div class="filter-scroll">
        <a href="?category=all" class="filter-cat active">All <span class="cat-count">50</span></a>
        <a href="?category=finance" class="filter-cat finance-active">💰 Finance <span class="cat-count">18</span></a>
        <a href="?category=health" class="filter-cat health-active">❤️ Health <span class="cat-count">12</span></a>
        <a href="?category=tips" class="filter-cat tips-active">💡 Tips & Tricks <span class="cat-count">10</span></a>
        <a href="?category=howto" class="filter-cat how-active">🛠️ How-To Guides <span class="cat-count">6</span></a>
        <a href="?category=news" class="filter-cat news-active">📢 News & Updates <span class="cat-count">4</span></a>
      </div>
    </div>
  </div>

  <!-- MAIN BLOG CONTENT (DYNAMIC READY) -->
  <main class="container my-5" id="blogMain">
    <!-- FEATURED POST (static demo - replaceable via CMS) -->
    <div class="featured-card mb-5">
      <div class="row g-0">
        <div class="col-md-6">
          <div class="featured-thumb h-100">
            <div class="feat-emoji">🏦</div>
            <div class="feat-badge position-relative z-2">⭐ Featured</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="p-4 p-xl-5 d-flex flex-column h-100">
            <div class="fw-bold mb-2" style="color:var(--blue); letter-spacing:1px;">💰 FINANCE</div>
            <h2 class="display-6 fw-bold" style="font-family:var(--fh); letter-spacing:-1px;">How to Calculate EMI: The Complete Step-by-Step Guide</h2>
            <p class="text-muted mt-2">Everything you need to know about EMI calculations — from the reducing balance formula to understanding principal vs. interest splits. Includes worked examples and a free calculator.</p>
            <div class="d-flex align-items-center gap-3 mt-4 pt-3 border-top">
              <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:38px; height:38px; background:#eef3ff; color:var(--blue); font-weight:800;">RK</div>
              <div><strong>Rahul Kumar</strong><br><span class="small text-muted">April 20, 2026 · 8 min read</span></div>
              <a href="blog-details.php" class="btn-gold ms-auto" style="padding:8px 20px;">Read Article →</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Heading -->
    <div class="d-flex align-items-center gap-3 mb-4">
      <span class="text-uppercase small fw-bold text-secondary" style="letter-spacing:2px;">Latest Articles</span>
      <div class="flex-grow-1 border-bottom"></div>
      <span class="small fw-bold text-secondary">Showing 12 of 50</span>
    </div>

    <!-- BLOG GRID (BOOTSTRAP ROW) - REPLACE WITH DYNAMIC PHP LOOP -->
    <div class="row g-4" id="dynamicGrid">
      <!-- Card 1 - Finance -->
<?php
include "clientarea/config.php";

$fetch = $anjan->prepare("SELECT * FROM blog_tbl WHERE status='1' ORDER BY id DESC");
$fetch->execute();


if($fetch->rowCount() > 0){
$styles = [
    ['color' => '#78350f', 'icon' => '💰'],
    ['color' => '#0a1628', 'icon' => '📊'],
    ['color' => '#064e3b', 'icon' => '🏦']
];

$i = 0;
    foreach($fetch->fetchAll(PDO::FETCH_ASSOC) as $key){
$style = $styles[$i % count($styles)];
$badgeColor = $style['color'];
$icon = $style['icon'];
        $title = (strlen($key['title']) > 60)
            ? substr($key['title'],0,60).'...'
            : $key['title'];

        $description = html_entity_decode($key['meta_description']);

        $description = (strlen($description) > 120)
            ? substr($description,0,120).'...'
            : $description;

        $category = strtoupper($key['blog_category']);

        $blogContent = strip_tags($key['blog_description'] ?? '');
    $readTime = max(1, ceil(str_word_count($blogContent) / 200));

        $image = !empty($key['blog_image'])
            ? 'clientarea/admin/blog-images/'.$key['blog_image']
            : 'assets/images/default-blog.jpg';

        echo '
        <div class="col-lg-4 col-md-6 mt-5">
            <div class="blog-card">

                <div class="card-thumb">
                    <img src="'.$image.'" alt="'.$key['title'].'" style="width:100%;height:160px;object-fit:cover;">
                    <span class="card-tag" style="background-color:'.$badgeColor.'">'.$key['blog_category'].'</span>
                </div>

                <div class="card-body-custom">

                    <div class="card-cat" style="color:'.$badgeColor.';">
    '.$icon.' '.$category.'
</div>

                    <h3 class="card-title">
                        '.$title.'
                    </h3>

                    <p class="card-excerpt">
                        '.$description.'
                    </p>

                    <div class="card-footer-meta">

    <div class="author-avatar" style="background:'.$badgeColor.'20;color:'.$badgeColor.';">
        '.strtoupper(substr($key['added_by'] ?: 'Admin', 0, 2)).'
    </div>

    <div>
        <div class="fw-bold" style="font-size:11px;">
            '.($key['added_by'] ?: 'Calcspeed Team').'
        </div>

        <div class="small text-muted">
            '.date("M j, Y", strtotime($key['added_date'])).' · '.$readTime.' min read
        </div>
    </div>

    <div class="read-arrow ms-auto">
        <a href="'.$key['slug'].'">
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none">
                <path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5"
                    stroke="#0a1628"
                    stroke-width="1.7"
                    stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>
        </a>
    </div>

</div>

                </div>

                <a href="'.$key['slug'].'" class="stretched-link"></a>

            </div>
        </div>';
    }

}else{

    echo '
    <div class="col-12 text-center">
        <h5>No Blogs Found</h5>
    </div>';
}
?>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="blog-card">
  <div class="card-thumb" style="background:#0d1e38;">
    <div class="card-emoji">💸</div>
    <span class="card-tag">Finance</span>
  </div>
  <div class="card-body-custom">
    <div class="card-cat" style="color:#1a4fd6;">💰 FINANCE</div>
    <h3 class="card-title">EMI vs. Lump Sum: Which Loan Repayment Saves You More?</h3>
    <p class="card-excerpt">A detailed comparison of EMI and lump-sum repayment strategies with real-world numbers.</p>
    <div class="card-footer-meta">
      <div class="d-flex gap-2">
        <a href="like.php?id=1" class="meta-btn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg><span class="count">24</span></a>
        <a href="post.php?id=1#comments" class="meta-btn"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg><span class="count">12</span></a>
        <a href="#" class="meta-btn" onclick="return false;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg><span>Share</span></a>
      </div>
      <div class="read-arrow">
        <svg width="13" height="13" viewBox="0 0 13 13" fill="none">
          <path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
  <a href="blog-details.php" class="stretched-link"></a>
</div>
</div>
      <!-- Card 2 - Health -->
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="blog-card">
          <div class="card-thumb" style="background:#064e3b;"><div class="card-emoji">⚖️</div><span class="card-tag">Health</span></div>
          <div class="card-body-custom"><div class="card-cat" style="color:#059669;">❤️ HEALTH</div><h3 class="card-title">BMI Calculator: What Your Number Really Means (And Its Limits)</h3><p class="card-excerpt">Beyond the BMI number — what it tells you, what it doesn't, and what to measure instead.</p><div class="card-footer-meta"><div class="author-avatar" style="background:#ecfdf5;color:#059669;">PD</div><div><div class="fw-bold" style="font-size:11px;">Priya Desai</div><div class="small text-muted">Apr 19, 2026 · 5 min</div></div><div class="read-arrow"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="#0a1628" stroke-width="1.7"/></svg></div></div></div>
          <a href="blog-details.php" class="stretched-link"></a>
        </div>
      </div>
      <!-- Card 3 - Tips -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="card-thumb" style="background:#78350f;"><div class="card-emoji">💡</div><span class="card-tag">Tips</span></div>
          <div class="card-body-custom"><div class="card-cat" style="color:#f5a623;">💡 TIPS</div><h3 class="card-title">5 Calculator Tricks Every Student Should Know Before Exams</h3><p class="card-excerpt">From percentage shortcuts to GPA estimation — these tricks save serious time during exams.</p><div class="card-footer-meta"><div class="author-avatar" style="background:#fef9ee;color:#d97706;">SM</div>
          <div><div class="fw-bold" style="font-size:11px;">Sneha Mehta</div><div class="small text-muted">Apr 17, 2026 · 3 min</div></div><div class="read-arrow"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="#0a1628" stroke-width="1.7"/></svg></div></div></div>
          <a href="blog-details.php" class="stretched-link"></a>
        </div>
      </div>
      <!-- Card 4 - How-to -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="card-thumb" style="background:#0a1628;"><div class="card-emoji">🛠️</div><span class="card-tag">How-To</span></div>
          <div class="card-body-custom"><div class="card-cat" style="color:#d97706;">🛠️ HOW-TO</div><h3 class="card-title">How to Use the EMI Calculator: A Complete Walkthrough</h3><p class="card-excerpt">Input by input — how to enter your loan details and read the amortization table correctly.</p><div class="card-footer-meta"><div class="author-avatar" style="background:#fef9ee;color:#d97706;">SM</div><div><div class="fw-bold" style="font-size:11px;">Sneha Mehta</div><div class="small text-muted">Apr 21, 2026 · 6 min</div></div><div class="read-arrow"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="#0a1628" stroke-width="1.7"/></svg></div></div></div>
          <a href="blog-details.php" class="stretched-link"></a>
        </div>
      </div>
      <!-- Card 5 - Finance (compound interest) -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="card-thumb" style="background:#064e3b;"><div class="card-emoji">📈</div><span class="card-tag">Finance</span></div>
          <div class="card-body-custom"><div class="card-cat" style="color:#059669;">💰 FINANCE</div><h3 class="card-title">Compound Interest: Why Starting Early Changes Everything</h3><p class="card-excerpt">See how ₹1,000/month at 22 can grow to over ₹1 crore by 60 using the power of compounding.</p><div class="card-footer-meta"><div class="author-avatar" style="background:#ecfdf5;color:#059669;">AV</div><div><div class="fw-bold" style="font-size:11px;">Arjun Verma</div><div class="small text-muted">Apr 12, 2026 · 7 min</div></div><div class="read-arrow"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="#0a1628" stroke-width="1.7"/></svg></div></div></div>
          <a href="blog-details.php" class="stretched-link"></a>
        </div>
      </div>
      <!-- Card 6 - Health / Calorie -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="card-thumb" style="background:#78350f;"><div class="card-emoji">🔥</div><span class="card-tag">Health</span></div>
          <div class="card-body-custom"><div class="card-cat" style="color:#d97706;">❤️ HEALTH</div><h3 class="card-title">Calorie Calculator: How to Find Your TDEE and Plan Your Diet</h3><p class="card-excerpt">Total Daily Energy Expenditure explained — with activity multipliers and how to set a calorie deficit.</p><div class="card-footer-meta"><div class="author-avatar" style="background:#fef9ee;color:#d97706;">KN</div><div><div class="fw-bold" style="font-size:11px;">Kiran Nair</div><div class="small text-muted">Apr 16, 2026 · 7 min</div></div><div class="read-arrow"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="#0a1628" stroke-width="1.7"/></svg></div></div></div>
          <a href="blog-details.php" class="stretched-link"></a>
        </div>
      </div>
      <!-- Card 7 - News Update -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="card-thumb" style="background:#2e1065;"><div class="card-emoji">📢</div><span class="card-tag">News</span></div>
          <div class="card-body-custom"><div class="card-cat" style="color:#7c3aed;">📢 NEWS</div><h3 class="card-title">Calcspeed Now Has 20+ Calculators — Here's What's New</h3><p class="card-excerpt">We just launched 6 new tools including Time Duration, Work Days and Water Intake. Here's a quick tour.</p><div class="card-footer-meta"><div class="author-avatar" style="background:#f5f0ff;color:#7c3aed;">CS</div><div><div class="fw-bold" style="font-size:11px;">Calcspeed Team</div><div class="small text-muted">Apr 22, 2026 · 2 min</div></div><div class="read-arrow"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="#0a1628" stroke-width="1.7"/></svg></div></div></div>
          <a href="blog-details.php" class="stretched-link"></a>
        </div>
      </div>
      <!-- Card 8 - GST HowTo -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="card-thumb" style="background:#0d1e38;"><div class="card-emoji">₹</div><span class="card-tag">Finance</span></div>
          <div class="card-body-custom"><div class="card-cat" style="color:#1a4fd6;">💰 FINANCE</div><h3 class="card-title">GST Explained: Complete Guide for First-Time Business Owners</h3><p class="card-excerpt">Everything about CGST, SGST, IGST and how to correctly calculate GST on your products.</p><div class="card-footer-meta"><div class="author-avatar" style="background:#eef3ff;color:#1a4fd6;">SM</div><div><div class="fw-bold" style="font-size:11px;">Sneha Mehta</div><div class="small text-muted">Apr 15, 2026 · 5 min</div></div><div class="read-arrow"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="#0a1628" stroke-width="1.7"/></svg></div></div></div>
          <a href="blog-details.php" class="stretched-link"></a>
        </div>
      </div>
      <!-- Card 9 - Age calculator How-To -->
      <div class="col-lg-4 col-md-6">
        <div class="blog-card">
          <div class="card-thumb" style="background:#2e1065;"><div class="card-emoji">🎂</div><span class="card-tag">How-To</span></div>
          <div class="card-body-custom"><div class="card-cat" style="color:#7c3aed;">🛠️ HOW-TO</div><h3 class="card-title">How to Use the Age Calculator to Find Your Exact Age in Days</h3><p class="card-excerpt">Beyond years — how to calculate your exact age including months, weeks and days from your birth date.</p><div class="card-footer-meta"><div class="author-avatar" style="background:#f5f0ff;color:#7c3aed;">AV</div><div><div class="fw-bold" style="font-size:11px;">Arjun Verma</div><div class="small text-muted">Apr 1, 2026 · 3 min</div></div><div class="read-arrow"><svg width="13" height="13" viewBox="0 0 13 13" fill="none"><path d="M1 6.5h11M6.5 1l5.5 5.5-5.5 5.5" stroke="#0a1628" stroke-width="1.7"/></svg></div></div></div>
          <a href="blog-details.php" class="stretched-link"></a>
        </div>
      </div>
    </div>

    <!-- LOAD MORE (server-side pagination ready) -->
    <div class="load-more-static mt-5">
      <a href="?page=2" class="btn-load-more">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 3v10M3 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        Load More Articles
        <span class="bg-light rounded-pill px-2 py-1 ms-2 small text-dark">38 remaining</span>
      </a>
    </div>

    <!-- Newsletter Section -->
    <div class="newsletter-band mt-5">
      <div class="row align-items-center g-4">
        <div class="col-md-7">
          <h3>Stay <span>in the loop.</span></h3>
          <p class="text-white-50">Get the latest calculator guides and finance tips — straight to your inbox.</p>
        </div>
        <div class="col-md-5">
          <form class="d-flex gap-3 flex-wrap" action="/subscribe" method="POST">
            <input type="email" name="email" class="subscribe-input flex-grow-1" placeholder="your@email.com" required>
            <button type="submit" class="btn-gold">Subscribe Free →</button>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS bundle (for responsive components, no custom filtering) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- No custom card-rendering JavaScript – fully dynamic-ready for backend (PHP) integration -->
</body>
</html>