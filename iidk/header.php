<?php // header.php - NOW NORMAL SCROLLING HEADER (scrolls away like regular page content) ?>

<header class="bg-black text-white shadow-lg">  <!-- removed fixed-top -->

  <!-- LOGO SECTION -->
  <div class="logo-section text-center py-4" style="background-color: #000 !important;">
    <a href="/">
      <img 
        src="/images/pensacola-seo-company-logo.png" 
        alt="Pensacola SEO Company Logo" 
        class="img-fluid" 
        style="height: 100px; width: auto;"
      >
    </a>
  </div>

  <!-- NAVIGATION -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3 py-lg-4" style="background-color: #000 !important;">
    <div class="container position-relative">

      <!-- Mobile toggler -->
      <button class="navbar-toggler ms-auto d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation links -->
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto text-uppercase fw-semibold fs-5">

          <li class="nav-item"><a class="nav-link px-3" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link px-3" href="/contact-page">Contact</a></li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3" href="/about" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
            <ul class="dropdown-menu dropdown-menu-dark border-0 shadow">
              <li><a class="dropdown-item" href="/about">Company Overview</a></li>
              <li><a class="dropdown-item" href="/blog">Blog</a></li>
              <li><a class="dropdown-item" href="/case-studies">Case Studies</a></li>
              <li><a class="dropdown-item" href="/testimonials">Testimonials</a></li>
              <li><a class="dropdown-item" href="/social-media-posts">Social Media Posts</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3" role="button" data-bs-toggle="dropdown" aria-expanded="false">SEO Services</a>
            <ul class="dropdown-menu dropdown-menu-dark border-0 shadow">
              <li><a class="dropdown-item" href="/seo-services">SEO</a></li>
              <li><a class="dropdown-item" href="/local-seo">Local SEO</a></li>
              <li><a class="dropdown-item" href="/monthly-seo">Monthly SEO</a></li>
              <li><a class="dropdown-item" href="/laundromat-seo">Laundromat SEO</a></li>
            </ul>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Industries</a>

            <ul class="dropdown-menu dropdown-menu-dark border-0 shadow" style="columns: 2;">
              <li><a class="dropdown-item" href="/seo-for-dentists-pensacola">Dentists</a></li>
              <li><a class="dropdown-item" href="/seo-for-lawyers-pensacola">Lawyers</a></li>
              <li><a class="dropdown-item" href="/seo-for-accountants-pensacola">Accountants</a></li>
              <li><a class="dropdown-item" href="/seo-for-auto-repair-pensacola">Auto Repair</a></li>
              <li><a class="dropdown-item" href="/seo-for-home-builders-pensacola">Home Builders</a></li>
              <li><a class="dropdown-item" href="/seo-for-remodelers-pensacola">Remodelers</a></li>
              <li><a class="dropdown-item" href="/seo-for-landscapers-pensacola">Landscapers</a></li>
              <li><a class="dropdown-item" href="/seo-for-pool-services-pensacola">Pool Services</a></li>
              <li><a class="dropdown-item" href="/seo-for-hvac-pensacola">HVAC</a></li>
            </ul>
          </li>

          <li class="nav-item ms-lg-5 mt-3 mt-lg-0">
            <a href="/contact-page" class="btn btn-danger btn-lg text-dark fw-bold rounded-pill px-5 shadow">Free Consultation →</a>
          </li>

        </ul>
      </div>

    </div>
  </nav>
</header>

<!-- NO MORE BODY PADDING STYLE - header now scrolls normally -->