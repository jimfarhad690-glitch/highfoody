<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>HighFoody | Homemade Recipes & Cooking Ideas</title>

  <meta name="description"
        content="Discover easy homemade recipes, delicious desserts, baking ideas, breakfast, lunch, dinner recipes and practical cooking tips at HighFoody.">

  <meta name="robots" content="index, follow">

  <link rel="canonical"
        href="https://highfoody-8138928f7019.herokuapp.com/">

  <meta name="theme-color" content="#1264d8">

  <style>
    /* =========================
       RESET
    ========================= */

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family:
        Inter,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        Roboto,
        Arial,
        sans-serif;
      color: #172033;
      background: #f7faff;
      line-height: 1.65;
    }

    img {
      max-width: 100%;
      display: block;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    button,
    input,
    textarea {
      font: inherit;
    }

    button {
      cursor: pointer;
    }

    /* =========================
       VARIABLES
    ========================= */

    :root {
      --blue: #1264d8;
      --blue-dark: #084aab;
      --blue-light: #eaf3ff;
      --blue-soft: #f2f7ff;
      --white: #ffffff;
      --text: #172033;
      --muted: #687386;
      --border: #e1e8f2;
      --shadow: 0 10px 30px rgba(22, 61, 110, 0.08);
      --radius: 18px;
    }

    /* =========================
       GLOBAL
    ========================= */

    .container {
      width: min(1180px, calc(100% - 40px));
      margin: auto;
    }

    .section {
      padding: 75px 0;
    }

    .section-heading {
      text-align: center;
      max-width: 720px;
      margin: 0 auto 42px;
    }

    .section-heading span {
      display: inline-block;
      color: var(--blue);
      font-size: 14px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 8px;
    }

    .section-heading h2 {
      font-size: clamp(30px, 4vw, 42px);
      line-height: 1.15;
      margin-bottom: 14px;
      color: #101a2e;
    }

    .section-heading p {
      color: var(--muted);
      font-size: 16px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 13px 21px;
      border-radius: 10px;
      border: 1px solid transparent;
      font-weight: 700;
      font-size: 14px;
    }

    .btn-primary {
      background: var(--blue);
      color: white;
    }

    .btn-primary:hover {
      background: var(--blue-dark);
    }

    .btn-outline {
      border-color: #cbd9eb;
      background: white;
      color: var(--blue);
    }

    .btn-outline:hover {
      border-color: var(--blue);
      background: var(--blue-light);
    }

    /* =========================
       HEADER
    ========================= */

    header {
      background: rgba(255,255,255,0.98);
      border-bottom: 1px solid var(--border);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .nav {
      min-height: 76px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 25px;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 23px;
      font-weight: 900;
      color: var(--blue);
      white-space: nowrap;
    }

    .logo-icon {
      width: 39px;
      height: 39px;
      border-radius: 11px;
      display: grid;
      place-items: center;
      background: var(--blue);
      color: white;
      font-size: 19px;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 24px;
      list-style: none;
    }

    .nav-links a {
      color: #465268;
      font-size: 14px;
      font-weight: 700;
    }

    .nav-links a:hover {
      color: var(--blue);
    }

    .nav-cta {
      display: inline-flex;
    }

    /* =========================
       HERO
    ========================= */

    .hero {
      padding: 70px 0 65px;
      background:
        linear-gradient(135deg, #edf6ff 0%, #ffffff 58%, #e8f2ff 100%);
      border-bottom: 1px solid #e5eef9;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.05fr .95fr;
      align-items: center;
      gap: 55px;
    }

    .hero-content {
      max-width: 620px;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 7px 12px;
      background: #dcecff;
      color: var(--blue-dark);
      border-radius: 30px;
      font-size: 12px;
      font-weight: 800;
      margin-bottom: 18px;
    }

    .hero h1 {
      color: #0d1830;
      font-size: clamp(42px, 6vw, 66px);
      line-height: 1.05;
      letter-spacing: -2px;
      margin-bottom: 20px;
    }

    .hero h1 strong {
      color: var(--blue);
    }

    .hero-description {
      max-width: 570px;
      color: #5f6c80;
      font-size: 17px;
      margin-bottom: 27px;
    }

    .hero-buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 30px;
    }

    .hero-search {
      background: white;
      border: 1px solid #d8e4f3;
      border-radius: 13px;
      padding: 7px;
      display: flex;
      max-width: 570px;
      box-shadow: var(--shadow);
    }

    .hero-search input {
      flex: 1;
      min-width: 0;
      border: none;
      outline: none;
      padding: 12px 14px;
      color: var(--text);
      background: transparent;
    }

    .hero-search button {
      border: none;
      background: var(--blue);
      color: white;
      padding: 0 19px;
      border-radius: 9px;
      font-weight: 800;
    }

    .hero-image {
      position: relative;
    }

    .hero-image img {
      width: 100%;
      height: 480px;
      object-fit: cover;
      border-radius: 26px;
      box-shadow: 0 25px 60px rgba(19, 76, 145, 0.18);
    }

    .hero-card {
      position: absolute;
      bottom: 25px;
      left: 25px;
      background: white;
      padding: 17px;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(15, 50, 90, 0.16);
      max-width: 245px;
    }

    .hero-card small {
      color: var(--blue);
      font-weight: 800;
      font-size: 11px;
      text-transform: uppercase;
    }

    .hero-card h3 {
      font-size: 18px;
      margin: 4px 0;
      color: #152039;
    }

    .hero-card p {
      color: var(--muted);
      font-size: 12px;
    }

    /* =========================
       SEARCH AREA
    ========================= */

    .search-section {
      padding: 25px 0;
      background: white;
      border-bottom: 1px solid var(--border);
    }

    .search-box {
      display: flex;
      align-items: center;
      gap: 10px;
      background: var(--blue-soft);
      border: 1px solid #d9e7f8;
      border-radius: 12px;
      padding: 8px;
      max-width: 760px;
      margin: auto;
    }

    .search-box input {
      flex: 1;
      border: none;
      outline: none;
      padding: 12px;
      background: transparent;
      min-width: 0;
    }

    .search-box button {
      border: none;
      background: var(--blue);
      color: white;
      padding: 11px 18px;
      border-radius: 8px;
      font-weight: 700;
    }

    /* =========================
       CATEGORIES
    ========================= */

    .categories {
      background: white;
    }

    .category-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 15px;
    }

    .category-card {
      background: white;
      border: 1px solid var(--border);
      border-radius: 15px;
      padding: 20px 12px;
      text-align: center;
      box-shadow: 0 5px 20px rgba(30, 65, 105, 0.04);
    }

    .category-card:hover {
      border-color: #a9c9ef;
      background: var(--blue-soft);
    }

    .category-icon {
      width: 48px;
      height: 48px;
      display: grid;
      place-items: center;
      background: var(--blue-light);
      color: var(--blue);
      border-radius: 13px;
      margin: 0 auto 10px;
      font-size: 22px;
    }

    .category-card h3 {
      font-size: 14px;
      color: #263249;
    }

    /* =========================
       RECIPE CARDS
    ========================= */

    .recipes-section {
      background: #f7faff;
    }

    .recipe-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
    }

    .recipe-card {
      background: white;
      border: 1px solid var(--border);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: 0 7px 25px rgba(30, 65, 105, 0.06);
    }

    .recipe-image {
      height: 235px;
      position: relative;
      overflow: hidden;
    }

    .recipe-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .recipe-tag {
      position: absolute;
      top: 14px;
      left: 14px;
      background: white;
      color: var(--blue);
      padding: 6px 10px;
      border-radius: 7px;
      font-size: 11px;
      font-weight: 800;
    }

    .recipe-content {
      padding: 20px;
    }

    .recipe-content h3 {
      font-size: 20px;
      line-height: 1.25;
      color: #162139;
      margin-bottom: 9px;
    }

    .recipe-content p {
      color: var(--muted);
      font-size: 14px;
      margin-bottom: 16px;
    }

    .recipe-meta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      padding-top: 13px;
      border-top: 1px solid #edf1f6;
      color: #657084;
      font-size: 12px;
      font-weight: 700;
    }

    .recipe-meta span:first-child {
      color: var(--blue);
    }

    .recipe-button {
      margin-top: 16px;
      width: 100%;
      text-align: center;
      display: block;
      padding: 11px;
      border-radius: 9px;
      background: var(--blue-light);
      color: var(--blue-dark);
      font-weight: 800;
      font-size: 13px;
    }

    .recipe-button:hover {
      background: var(--blue);
      color: white;
    }

    /* =========================
       FEATURED
    ========================= */

    .featured {
      background: white;
    }

    .featured-grid {
      display: grid;
      grid-template-columns: 1.1fr .9fr;
      gap: 28px;
      align-items: stretch;
    }

    .featured-main {
      position: relative;
      overflow: hidden;
      border-radius: 22px;
      min-height: 470px;
    }

    .featured-main img {
      width: 100%;
      height: 100%;
      min-height: 470px;
      object-fit: cover;
    }

    .featured-overlay {
      position: absolute;
      inset: auto 0 0 0;
      padding: 35px;
      color: white;
      background: linear-gradient(
        transparent,
        rgba(5, 25, 54, .88)
      );
    }

    .featured-overlay span {
      display: inline-block;
      background: var(--blue);
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 11px;
      font-weight: 800;
      margin-bottom: 10px;
    }

    .featured-overlay h3 {
      font-size: 30px;
      line-height: 1.15;
      margin-bottom: 8px;
    }

    .featured-overlay p {
      max-width: 600px;
      color: #e7effa;
      font-size: 14px;
    }

    .featured-list {
      display: grid;
      gap: 16px;
    }

    .featured-item {
      display: grid;
      grid-template-columns: 115px 1fr;
      gap: 15px;
      padding: 13px;
      border: 1px solid var(--border);
      border-radius: 15px;
      background: white;
    }

    .featured-item img {
      width: 115px;
      height: 105px;
      object-fit: cover;
      border-radius: 10px;
    }

    .featured-item span {
      color: var(--blue);
      font-size: 10px;
      font-weight: 800;
      text-transform: uppercase;
    }

    .featured-item h4 {
      font-size: 16px;
      line-height: 1.3;
      margin: 4px 0 7px;
    }

    .featured-item p {
      color: var(--muted);
      font-size: 12px;
    }

    /* =========================
       TIPS
    ========================= */

    .tips {
      background: var(--blue);
      color: white;
    }

    .tips .section-heading span {
      color: #b9d8ff;
    }

    .tips .section-heading h2,
    .tips .section-heading p {
      color: white;
    }

    .tip-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .tip-card {
      padding: 26px;
      border: 1px solid rgba(255,255,255,.16);
      background: rgba(255,255,255,.08);
      border-radius: 16px;
    }

    .tip-number {
      width: 40px;
      height: 40px;
      display: grid;
      place-items: center;
      background: white;
      color: var(--blue);
      border-radius: 10px;
      font-weight: 900;
      margin-bottom: 18px;
    }

    .tip-card h3 {
      font-size: 19px;
      margin-bottom: 9px;
    }

    .tip-card p {
      color: #d9e8fa;
      font-size: 14px;
    }

    /* =========================
       ABOUT
    ========================= */

    .about {
      background: white;
    }

    .about-grid {
      display: grid;
      grid-template-columns: .9fr 1.1fr;
      align-items: center;
      gap: 60px;
    }

    .about-image img {
      width: 100%;
      height: 430px;
      object-fit: cover;
      border-radius: 22px;
    }

    .about-content span {
      color: var(--blue);
      font-size: 13px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .about-content h2 {
      font-size: 40px;
      line-height: 1.15;
      color: #111b30;
      margin: 10px 0 18px;
    }

    .about-content p {
      color: var(--muted);
      margin-bottom: 15px;
      font-size: 15px;
    }

    .about-points {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 12px;
      margin-top: 24px;
    }

    .about-point {
      padding: 13px;
      background: var(--blue-soft);
      border-radius: 10px;
      color: #29415f;
      font-size: 13px;
      font-weight: 700;
    }

    /* =========================
       CONTACT
    ========================= */

    .contact {
      background: #f7faff;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: .75fr 1.25fr;
      gap: 30px;
    }

    .contact-info,
    .contact-form {
      background: white;
      border: 1px solid var(--border);
      border-radius: 18px;
      padding: 30px;
    }

    .contact-info h3,
    .contact-form h3 {
      font-size: 24px;
      margin-bottom: 12px;
      color: #162139;
    }

    .contact-info p {
      color: var(--muted);
      font-size: 14px;
      margin-bottom: 20px;
    }

    .contact-detail {
      padding: 15px 0;
      border-bottom: 1px solid #edf1f5;
    }

    .contact-detail strong {
      display: block;
      color: #23314a;
      margin-bottom: 4px;
    }

    .contact-detail span {
      color: var(--muted);
      font-size: 14px;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
    }

    .field {
      margin-bottom: 15px;
    }

    .field.full {
      grid-column: 1 / -1;
    }

    .field label {
      display: block;
      font-size: 13px;
      font-weight: 800;
      color: #36435a;
      margin-bottom: 6px;
    }

    .field input,
    .field textarea {
      width: 100%;
      border: 1px solid #dce4ef;
      border-radius: 9px;
      padding: 12px;
      outline: none;
      background: #fbfcfe;
    }

    .field textarea {
      min-height: 130px;
      resize: vertical;
    }

    .field input:focus,
    .field textarea:focus {
      border-color: #86b4ea;
      background: white;
    }

    .form-note {
      color: #788396;
      font-size: 11px;
      margin-top: 10px;
    }

    /* =========================
       POLICIES
    ========================= */

    .policies {
      background: white;
    }

    .policy-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .policy-card {
      padding: 22px;
      border: 1px solid var(--border);
      border-radius: 14px;
      background: #fff;
    }

    .policy-card h3 {
      color: #18243a;
      margin-bottom: 8px;
      font-size: 17px;
    }

    .policy-card p {
      color: var(--muted);
      font-size: 13px;
    }

    .policy-card a {
      display: inline-block;
      color: var(--blue);
      margin-top: 9px;
      font-size: 13px;
      font-weight: 800;
    }

    /* =========================
       POLICY DETAILS
    ========================= */

    .policy-details {
      background: #f7faff;
    }

    .policy-box {
      background: white;
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 30px;
      margin-bottom: 18px;
    }

    .policy-box h2 {
      color: #142039;
      margin-bottom: 12px;
      font-size: 25px;
    }

    .policy-box h3 {
      color: #24324b;
      font-size: 17px;
      margin: 20px 0 6px;
    }

    .policy-box p,
    .policy-box li {
      color: var(--muted);
      font-size: 14px;
    }

    .policy-box ul {
      padding-left: 20px;
    }

    /* =========================
       FOOTER
    ========================= */

    footer {
      background: #0b1830;
      color: white;
      padding: 55px 0 25px;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1.4fr .8fr .8fr .9fr;
      gap: 35px;
      padding-bottom: 35px;
    }

    .footer-brand .logo {
      color: white;
      margin-bottom: 15px;
    }

    .footer-brand p {
      color: #aebbd0;
      font-size: 13px;
      max-width: 350px;
    }

    footer h4 {
      font-size: 14px;
      margin-bottom: 14px;
    }

    footer ul {
      list-style: none;
    }

    footer li {
      margin-bottom: 8px;
    }

    footer li a {
      color: #aebbd0;
      font-size: 13px;
    }

    footer li a:hover {
      color: white;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,.12);
      padding-top: 20px;
      color: #94a5be;
      font-size: 12px;
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 1000px) {
      .nav-links {
        gap: 14px;
      }

      .category-grid {
        grid-template-columns: repeat(3, 1fr);
      }

      .recipe-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .hero-grid,
      .featured-grid,
      .about-grid {
        grid-template-columns: 1fr;
      }

      .hero-content {
        max-width: none;
      }

      .hero-image img {
        height: 420px;
      }

      .footer-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 720px) {
      .container {
        width: min(100% - 28px, 1180px);
      }

      .section {
        padding: 55px 0;
      }

      .nav {
        min-height: 68px;
      }

      .nav-links {
        display: none;
      }

      .nav-cta {
        display: none;
      }

      .hero {
        padding: 48px 0;
      }

      .hero h1 {
        font-size: 43px;
      }

      .hero-image img {
        height: 340px;
      }

      .hero-card {
        bottom: 15px;
        left: 15px;
      }

      .hero-search {
        display: block;
        background: white;
        padding: 8px;
      }

      .hero-search button {
        width: 100%;
        height: 44px;
      }

      .search-box {
        display: block;
      }

      .search-box button {
        width: 100%;
      }

      .category-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .recipe-grid {
        grid-template-columns: 1fr;
      }

      .featured-main,
      .featured-main img {
        min-height: 380px;
        height: 380px;
      }

      .featured-overlay {
        padding: 22px;
      }

      .featured-overlay h3 {
        font-size: 25px;
      }

      .featured-item {
        grid-template-columns: 95px 1fr;
      }

      .featured-item img {
        width: 95px;
        height: 95px;
      }

      .tip-grid,
      .policy-grid {
        grid-template-columns: 1fr;
      }

      .about-image img {
        height: 330px;
      }

      .about-content h2 {
        font-size: 32px;
      }

      .about-points {
        grid-template-columns: 1fr;
      }

      .contact-grid {
        grid-template-columns: 1fr;
      }

      .form-grid {
        grid-template-columns: 1fr;
      }

      .field.full {
        grid-column: auto;
      }

      .footer-grid {
        grid-template-columns: 1fr;
      }

      .footer-bottom {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>

  <!-- =========================
       HEADER
  ========================== -->

  <header>
    <div class="container nav">

      <a href="#home" class="logo">
        <span class="logo-icon">🍴</span>
        HighFoody
      </a>

      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#recipes">Recipes</a></li>
        <li><a href="#categories">Categories</a></li>
        <li><a href="#featured">Featured</a></li>
        <li><a href="#tips">Tips</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <a href="#recipes" class="btn btn-primary nav-cta">
        Explore Recipes
      </a>

    </div>
  </header>


  <!-- =========================
       HERO
  ========================== -->

  <main>

    <section class="hero" id="home">
      <div class="container hero-grid">

        <div class="hero-content">

          <span class="eyebrow">
            ✦ Homemade Food Ideas
          </span>

          <h1>
            Simple Recipes For
            <strong>Everyday Cooking.</strong>
          </h1>

          <p class="hero-description">
            Discover delicious homemade recipes, baking ideas, desserts,
            family meals and practical cooking inspiration made for everyday
            kitchens.
          </p>

          <div class="hero-buttons">
            <a href="#recipes" class="btn btn-primary">
              Explore Recipes →
            </a>

            <a href="#categories" class="btn btn-outline">
              Browse Categories
            </a>
          </div>

          <form class="hero-search" id="heroSearch">
            <input
              type="search"
              id="heroSearchInput"
              placeholder="Search recipes, desserts, pasta..."
              aria-label="Search recipes"
            >
            <button type="submit">Search</button>
          </form>

        </div>

        <div class="hero-image">

          <img
            src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=1200&q=85"
            alt="Fresh homemade food served on a table"
          >

          <div class="hero-card">
            <small>Today's Inspiration</small>
            <h3>Fresh, Simple & Homemade</h3>
            <p>Ideas to make everyday cooking more enjoyable.</p>
          </div>

        </div>

      </div>
    </section>


    <!-- =========================
         SEARCH
    ========================== -->

    <section class="search-section">
      <div class="container">

        <form class="search-box" id="mainSearch">
          <input
            type="search"
            id="searchInput"
            placeholder="Search by recipe name or category..."
            aria-label="Search recipes"
          >
          <button type="submit">Find Recipes</button>
        </form>

      </div>
    </section>


    <!-- =========================
         CATEGORIES
    ========================== -->

    <section class="section categories" id="categories">

      <div class="container">

        <div class="section-heading">
          <span>Browse By Category</span>
          <h2>What Are You Cooking Today?</h2>
          <p>
            Explore different recipe categories and find ideas for every meal.
          </p>
        </div>

        <div class="category-grid">

          <a href="#recipes" class="category-card" data-category="breakfast">
            <div class="category-icon">🍳</div>
            <h3>Breakfast</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="lunch">
            <div class="category-icon">🥗</div>
            <h3>Lunch</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="dinner">
            <div class="category-icon">🍽️</div>
            <h3>Dinner</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="cakes">
            <div class="category-icon">🍰</div>
            <h3>Cakes</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="cookies">
            <div class="category-icon">🍪</div>
            <h3>Cookies</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="pastries">
            <div class="category-icon">🥐</div>
            <h3>Pastries</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="bread">
            <div class="category-icon">🍞</div>
            <h3>Bread</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="desserts">
            <div class="category-icon">🍮</div>
            <h3>Desserts</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="pasta">
            <div class="category-icon">🍝</div>
            <h3>Pasta</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="soups">
            <div class="category-icon">🍲</div>
            <h3>Soups</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="salads">
            <div class="category-icon">🥬</div>
            <h3>Salads</h3>
          </a>

          <a href="#recipes" class="category-card" data-category="tips">
            <div class="category-icon">💡</div>
            <h3>Cooking Tips</h3>
          </a>

        </div>

      </div>

    </section>


    <!-- =========================
         FEATURED
    ========================== -->

    <section class="section featured" id="featured">

      <div class="container">

        <div class="section-heading">
          <span>Featured Collection</span>
          <h2>Recipes Worth Trying</h2>
          <p>
            A selection of homemade food ideas for your next cooking session.
          </p>
        </div>

        <div class="featured-grid">

          <article class="featured-main">

            <img
              src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?auto=format&fit=crop&w=1200&q=85"
              alt="Homemade pasta with vegetables"
            >

            <div class="featured-overlay">
              <span>FEATURED RECIPE</span>
              <h3>Classic Homemade Pasta</h3>
              <p>
                A comforting pasta dish with simple ingredients and
                everyday cooking techniques.
              </p>
            </div>

          </article>

          <div class="featured-list">

            <article class="featured-item">
              <img
                src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=500&q=80"
                alt="Chocolate cake"
                loading="lazy"
              >

              <div>
                <span>BAKING</span>
                <h4>Rich Homemade Chocolate Cake</h4>
                <p>Soft, chocolatey and easy to prepare.</p>
              </div>
            </article>

            <article class="featured-item">
              <img
                src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=500&q=80"
                alt="Pasta dish"
                loading="lazy"
              >

              <div>
                <span>DINNER</span>
                <h4>Easy Creamy Pasta</h4>
                <p>A simple meal for busy evenings.</p>
              </div>
            </article>

            <article class="featured-item">
              <img
                src="https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=500&q=80"
                alt="Fresh baked pastries"
                loading="lazy"
              >

              <div>
                <span>PASTRIES</span>
                <h4>Fresh Baked Pastries</h4>
                <p>Golden, flaky and perfect with coffee.</p>
              </div>
            </article>

            <article class="featured-item">
              <img
                src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?auto=format&fit=crop&w=500&q=80"
                alt="Fresh cookies"
                loading="lazy"
              >

              <div>
                <span>COOKIES</span>
                <h4>Classic Homemade Cookies</h4>
                <p>A simple baking idea for the family.</p>
              </div>
            </article>

          </div>

        </div>

      </div>

    </section>


    <!-- =========================
         RECIPES
    ========================== -->

    <section class="section recipes-section" id="recipes">

      <div class="container">

        <div class="section-heading">
          <span>Latest Recipes</span>
          <h2>Easy Ideas For Your Kitchen</h2>
          <p>
            Browse simple recipes covering breakfast, main meals, baking
            and desserts.
          </p>
        </div>

        <div class="recipe-grid" id="recipeGrid">

          <article class="recipe-card" data-category="breakfast">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1525351484163-7529414344d8?auto=format&fit=crop&w=900&q=85"
                alt="Breakfast with eggs and vegetables"
                loading="lazy"
              >
              <span class="recipe-tag">Breakfast</span>
            </div>

            <div class="recipe-content">
              <h3>Easy Morning Breakfast</h3>
              <p>
                A simple and satisfying breakfast idea made with fresh
                everyday ingredients.
              </p>

              <div class="recipe-meta">
                <span>⏱ 20 min</span>
                <span>Easy</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>


          <article class="recipe-card" data-category="pasta dinner">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=900&q=85"
                alt="Creamy pasta recipe"
                loading="lazy"
              >
              <span class="recipe-tag">Pasta</span>
            </div>

            <div class="recipe-content">
              <h3>Creamy Garlic Pasta</h3>
              <p>
                A comforting pasta recipe with a creamy sauce and
                delicious garlic flavor.
              </p>

              <div class="recipe-meta">
                <span>⏱ 30 min</span>
                <span>Easy</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>


          <article class="recipe-card" data-category="cakes desserts">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=900&q=85"
                alt="Chocolate cake"
                loading="lazy"
              >
              <span class="recipe-tag">Cakes</span>
            </div>

            <div class="recipe-content">
              <h3>Homemade Chocolate Cake</h3>
              <p>
                A rich chocolate cake idea for birthdays, celebrations
                or a simple homemade dessert.
              </p>

              <div class="recipe-meta">
                <span>⏱ 50 min</span>
                <span>Medium</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>


          <article class="recipe-card" data-category="cookies desserts">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?auto=format&fit=crop&w=900&q=85"
                alt="Homemade cookies"
                loading="lazy"
              >
              <span class="recipe-tag">Cookies</span>
            </div>

            <div class="recipe-content">
              <h3>Classic Chocolate Cookies</h3>
              <p>
                Crisp around the edges and soft in the center,
                these cookies are easy to bake at home.
              </p>

              <div class="recipe-meta">
                <span>⏱ 25 min</span>
                <span>Easy</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>


          <article class="recipe-card" data-category="pastries">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=900&q=85"
                alt="Fresh pastries"
                loading="lazy"
              >
              <span class="recipe-tag">Pastries</span>
            </div>

            <div class="recipe-content">
              <h3>Golden Homemade Pastries</h3>
              <p>
                A flaky pastry idea that pairs beautifully with
                breakfast or afternoon coffee.
              </p>

              <div class="recipe-meta">
                <span>⏱ 45 min</span>
                <span>Medium</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>


          <article class="recipe-card" data-category="salads lunch">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=900&q=85"
                alt="Fresh vegetable salad"
                loading="lazy"
              >
              <span class="recipe-tag">Salads</span>
            </div>

            <div class="recipe-content">
              <h3>Fresh Garden Salad</h3>
              <p>
                A colorful salad made with crisp vegetables and
                a simple homemade dressing.
              </p>

              <div class="recipe-meta">
                <span>⏱ 15 min</span>
                <span>Easy</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>


          <article class="recipe-card" data-category="bread">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=900&q=85"
                alt="Fresh homemade bread"
                loading="lazy"
              >
              <span class="recipe-tag">Bread</span>
            </div>

            <div class="recipe-content">
              <h3>Simple Homemade Bread</h3>
              <p>
                A straightforward bread recipe for a warm,
                fresh loaf at home.
              </p>

              <div class="recipe-meta">
                <span>⏱ 2 hr</span>
                <span>Medium</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>


          <article class="recipe-card" data-category="desserts">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?auto=format&fit=crop&w=900&q=85"
                alt="Homemade dessert"
                loading="lazy"
              >
              <span class="recipe-tag">Desserts</span>
            </div>

            <div class="recipe-content">
              <h3>Easy Creamy Dessert</h3>
              <p>
                A smooth and delicious dessert for a sweet ending
                to your meal.
              </p>

              <div class="recipe-meta">
                <span>⏱ 30 min</span>
                <span>Easy</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>


          <article class="recipe-card" data-category="soups lunch">
            <div class="recipe-image">
              <img
                src="https://images.unsplash.com/photo-1547592166-23ac45744acd?auto=format&fit=crop&w=900&q=85"
                alt="Warm homemade soup"
                loading="lazy"
              >
              <span class="recipe-tag">Soups</span>
            </div>

            <div class="recipe-content">
              <h3>Comforting Vegetable Soup</h3>
              <p>
                A warm homemade soup filled with vegetables
                and simple flavors.
              </p>

              <div class="recipe-meta">
                <span>⏱ 40 min</span>
                <span>Easy</span>
              </div>

              <a href="#about" class="recipe-button">
                View Recipe
              </a>
            </div>
          </article>

        </div>

        <div id="noResults"
             style="display:none;text-align:center;padding:35px;color:#687386;">
          <h3 style="color:#172033;margin-bottom:5px;">
            No recipes found
          </h3>
          <p>
            Try another recipe name or category.
          </p>
        </div>

      </div>

    </section>


    <!-- =========================
         COOKING TIPS
    ========================== -->

    <section class="section tips" id="tips">

      <div class="container">

        <div class="section-heading">
          <span>Kitchen Knowledge</span>
          <h2>Simple Cooking Tips</h2>
          <p>
            Small techniques can make everyday cooking easier and more enjoyable.
          </p>
        </div>

        <div class="tip-grid">

          <article class="tip-card">
            <div class="tip-number">01</div>
            <h3>Prepare Ingredients First</h3>
            <p>
              Measure and prepare your ingredients before you start cooking.
              This keeps the process organized and easier to follow.
            </p>
          </article>

          <article class="tip-card">
            <div class="tip-number">02</div>
            <h3>Read The Recipe Fully</h3>
            <p>
              Review the complete recipe before beginning so you know the
              ingredients, equipment and cooking steps required.
            </p>
          </article>

          <article class="tip-card">
            <div class="tip-number">03</div>
            <h3>Keep Your Kitchen Organized</h3>
            <p>
              A clean and organized workspace makes it easier to focus on
              cooking and helps keep preparation efficient.
            </p>
          </article>

        </div>

      </div>

    </section>


    <!-- =========================
         ABOUT
    ========================== -->

    <section class="section about" id="about">

      <div class="container about-grid">

        <div class="about-image">

          <img
            src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=1000&q=85"
            alt="Person preparing homemade food in a kitchen"
            loading="lazy"
          >

        </div>

        <div class="about-content">

          <span>About HighFoody</span>

          <h2>
            Cooking Inspiration For Your Everyday Kitchen
          </h2>

          <p>
            HighFoody is a recipe and food information blog created to
            share approachable cooking ideas, homemade meals, baking
            inspiration and useful kitchen tips.
          </p>

          <p>
            Our goal is to make recipe discovery simple by organizing
            cooking ideas into clear categories and easy-to-browse
            collections.
          </p>

          <p>
            HighFoody is an independent informational food website.
            It is not a restaurant, bakery, catering business or
            professional nutrition service.
          </p>

          <div class="about-points">
            <div class="about-point">✓ Homemade Recipe Ideas</div>
            <div class="about-point">✓ Baking Inspiration</div>
            <div class="about-point">✓ Everyday Cooking</div>
            <div class="about-point">✓ Practical Kitchen Tips</div>
          </div>

        </div>

      </div>

    </section>


    <!-- =========================
         CONTACT
    ========================== -->

    <section class="section contact" id="contact">

      <div class="container">

        <div class="section-heading">
          <span>Get In Touch</span>
          <h2>Contact HighFoody</h2>
          <p>
            Have a question, suggestion or feedback about the website?
            We'd like to hear from you.
          </p>
        </div>

        <div class="contact-grid">

          <div class="contact-info">

            <h3>Contact Information</h3>

            <p>
              For website questions, recipe suggestions or general
              feedback, you can contact us by email.
            </p>

            <div class="contact-detail">
              <strong>Website</strong>
              <span>
                highfoody-8138928f7019.herokuapp.com
              </span>
            </div>

            <div class="contact-detail">
              <strong>Email</strong>
              <span>
                contact@highfoody-8138928f7019.herokuapp.com
              </span>
            </div>

            <div class="contact-detail">
              <strong>Response</strong>
              <span>
                We aim to review genuine website inquiries in a reasonable
                timeframe.
              </span>
            </div>

          </div>


          <div class="contact-form">

            <h3>Send A Message</h3>

            <form onsubmit="return false;">

              <div class="form-grid">

                <div class="field">
                  <label for="name">Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Your name"
                  >
                </div>

                <div class="field">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Your email"
                  >
                </div>

                <div class="field full">
                  <label for="subject">Subject</label>
                  <input
                    type="text"
                    id="subject"
                    name="subject"
                    placeholder="Message subject"
                  >
                </div>

                <div class="field full">
                  <label for="message">Message</label>
                  <textarea
                    id="message"
                    name="message"
                    placeholder="Write your message..."
                  ></textarea>
                </div>

              </div>

              <button
                type="button"
                class="btn btn-primary"
                onclick="alert('Please send your inquiry to the email address listed on this page.')"
              >
                Submit Message
              </button>

              <p class="form-note">
                This form is a front-end interface. It does not transmit
                or store messages without a backend service.
              </p>

            </form>

          </div>

        </div>

      </div>

    </section>


    <!-- =========================
         POLICY OVERVIEW
    ========================== -->

    <section class="section policies">

      <div class="container">

        <div class="section-heading">
          <span>Website Information</span>
          <h2>Policies & Disclosures</h2>
          <p>
            Please review the information below to understand how this
            website operates.
          </p>
        </div>

        <div class="policy-grid">

          <article class="policy-card">
            <h3>Privacy Policy</h3>
            <p>
              Information about website privacy, information collection
              and how personal information may be handled.
            </p>
            <a href="#privacy-policy">Read Policy →</a>
          </article>

          <article class="policy-card">
            <h3>Cookie Policy</h3>
            <p>
              Information about cookies and similar technologies that
              may be used on the website.
            </p>
            <a href="#cookie-policy">Read Policy →</a>
          </article>

          <article class="policy-card">
            <h3>Disclaimer</h3>
            <p>
              Important information about the general nature and
              limitations of the content published here.
            </p>
            <a href="#disclaimer">Read Disclaimer →</a>
          </article>

          <article class="policy-card">
            <h3>Terms & Conditions</h3>
            <p>
              General terms that apply when visitors use HighFoody.
            </p>
            <a href="#terms">Read Terms →</a>
          </article>

          <article class="policy-card">
            <h3>Affiliate Disclosure</h3>
            <p>
              Information about potential affiliate relationships and
              qualifying links.
            </p>
            <a href="#affiliate">Read Disclosure →</a>
          </article>

          <article class="policy-card">
            <h3>Advertising Disclosure</h3>
            <p>
              Information about advertising and sponsored placements
              that may appear on the website.
            </p>
            <a href="#advertising">Read Disclosure →</a>
          </article>

        </div>

      </div>

    </section>


    <!-- =========================
         POLICY DETAILS
    ========================== -->

    <section class="section policy-details">

      <div class="container">

        <article class="policy-box" id="privacy-policy">

          <h2>Privacy Policy</h2>

          <p>
            HighFoody respects the privacy of visitors. This website may
            collect information that visitors voluntarily provide, such
            as information submitted through a contact form or email.
          </p>

          <h3>Information We May Receive</h3>

          <p>
            Depending on how the website is configured, information may
            include a visitor's name, email address and message contents
            when voluntarily submitted.
          </p>

          <h3>Website Usage Information</h3>

          <p>
            Standard technical information may be processed by hosting,
            analytics, security or advertising services where those
            services are enabled.
          </p>

          <h3>Third-Party Services</h3>

          <p>
            Third-party services may have their own privacy policies and
            terms. Visitors should review those policies where applicable.
          </p>

          <h3>Contact</h3>

          <p>
            Privacy-related questions can be sent to
            contact@highfoody-8138928f7019.herokuapp.com.
          </p>

        </article>


        <article class="policy-box" id="cookie-policy">

          <h2>Cookie Policy</h2>

          <p>
            HighFoody may use cookies or similar technologies where
            required for website functionality, security, analytics or
            advertising services.
          </p>

          <h3>What Are Cookies?</h3>

          <p>
            Cookies are small data files stored by a website or service
            in a visitor's browser.
          </p>

          <h3>Managing Cookies</h3>

          <p>
            Most modern browsers allow users to control or remove cookies
            through their browser settings.
          </p>

        </article>


        <article class="policy-box" id="disclaimer">

          <h2>Disclaimer</h2>

          <p>
            The information published on HighFoody is provided for
            general informational and educational purposes.
          </p>

          <h3>Recipe Information</h3>

          <p>
            Cooking times, ingredient quantities and results can vary
            depending on ingredients, equipment, cooking conditions and
            individual preparation methods.
          </p>

          <h3>Food & Nutrition</h3>

          <p>
            HighFoody does not provide medical, dietary or professional
            nutritional advice. Visitors with allergies, medical
            conditions or specific dietary requirements should verify
            ingredients and seek appropriate professional advice when
            necessary.
          </p>

        </article>


        <article class="policy-box" id="terms">

          <h2>Terms & Conditions</h2>

          <p>
            By accessing and using HighFoody, visitors agree to use the
            website for lawful purposes and to respect applicable laws
            and the rights of others.
          </p>

          <h3>Content</h3>

          <p>
            Website content is provided for informational purposes.
            Content may be updated, changed or removed without prior notice.
          </p>

          <h3>Intellectual Property</h3>

          <p>
            Unless otherwise stated, website text, branding and original
            materials belong to their respective owners and should not be
            reproduced without appropriate permission.
          </p>

          <h3>External Links</h3>

          <p>
            HighFoody may contain links to external websites. We are not
            responsible for the content, privacy practices or policies of
            third-party websites.
          </p>

        </article>


        <article class="policy-box" id="affiliate">

          <h2>Affiliate Disclosure</h2>

          <p>
            HighFoody may participate in affiliate programs in the future.
            If affiliate links are used, the website may receive a
            commission when a visitor makes a qualifying purchase through
            an applicable link, at no additional cost to the visitor.
          </p>

          <p>
            Affiliate relationships will not change the price charged by
            the relevant third-party merchant.
          </p>

        </article>


        <article class="policy-box" id="advertising">

          <h2>Advertising Disclosure</h2>

          <p>
            HighFoody may display advertising from third-party advertising
            providers. Advertising providers may use technologies such as
            cookies or similar technologies according to their own
            policies.
          </p>

          <p>
            Advertising placement does not mean that HighFoody endorses
            every advertised product or service.
          </p>

        </article>

      </div>

    </section>

  </main>


  <!-- =========================
       FOOTER
  ========================== -->

  <footer>

    <div class="container">

      <div class="footer-grid">

        <div class="footer-brand">

          <a href="#home" class="logo">
            <span class="logo-icon">🍴</span>
            HighFoody
          </a>

          <p>
            Homemade recipe ideas, cooking inspiration, baking content
            and practical kitchen tips for everyday food lovers.
          </p>

        </div>


        <div>
          <h4>Explore</h4>

          <ul>
            <li><a href="#recipes">Recipes</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#featured">Featured</a></li>
            <li><a href="#tips">Cooking Tips</a></li>
          </ul>

        </div>


        <div>
          <h4>Company</h4>

          <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#privacy-policy">Privacy</a></li>
            <li><a href="#terms">Terms</a></li>
          </ul>

        </div>


        <div>
          <h4>Policies</h4>

          <ul>
            <li><a href="#cookie-policy">Cookie Policy</a></li>
            <li><a href="#disclaimer">Disclaimer</a></li>
            <li><a href="#affiliate">Affiliate Disclosure</a></li>
            <li><a href="#advertising">Advertising</a></li>
          </ul>

        </div>

      </div>


      <div class="footer-bottom">

        <span>
          © 2026 HighFoody. All rights reserved.
        </span>

        <span>
          highfoody-8138928f7019.herokuapp.com
        </span>

      </div>

    </div>

  </footer>


  <!-- =========================
       SEARCH JAVASCRIPT
  ========================== -->

  <script>

    const searchInput = document.getElementById("searchInput");
    const heroSearchInput = document.getElementById("heroSearchInput");
    const recipeCards = document.querySelectorAll(".recipe-card");
    const noResults = document.getElementById("noResults");

    function searchRecipes(query) {

      query = query.toLowerCase().trim();

      let visibleCount = 0;

      recipeCards.forEach(function(card) {

        const content = card.textContent.toLowerCase();
        const category = card.dataset.category || "";

        if (
          query === "" ||
          content.includes(query) ||
          category.includes(query)
        ) {
          card.style.display = "";
          visibleCount++;
        } else {
          card.style.display = "none";
        }

      });

      if (visibleCount === 0) {
        noResults.style.display = "block";
      } else {
        noResults.style.display = "none";
      }

      document.getElementById("recipes").scrollIntoView({
        behavior: "smooth"
      });
    }


    document.getElementById("mainSearch").addEventListener(
      "submit",
      function(event) {

        event.preventDefault();

        searchRecipes(searchInput.value);

      }
    );


    document.getElementById("heroSearch").addEventListener(
      "submit",
      function(event) {

        event.preventDefault();

        searchInput.value = heroSearchInput.value;

        searchRecipes(heroSearchInput.value);

      }
    );


    document.querySelectorAll(".category-card").forEach(
      function(categoryCard) {

        categoryCard.addEventListener("click", function() {

          const category = this.dataset.category;

          searchInput.value = category;

          searchRecipes(category);

        });

      }
    );

  </script>

</body>
</html>
