<?php
/**
 * index.php - Homepage for Pensacola SEO Company
 *
 * Uses modular includes:
 * - includes/head.php (HTML head section)
 * - header.php (nav + modal + schema + analytics)
 * - includes/stats-bar.php (trust metrics)
 * - includes/service-card.php (service cards)
 * - includes/portfolio-card.php (portfolio preview cards)
 * - includes/blog-card.php (blog post cards)
 * - footer.php
 */

// Page-specific variables for head.php
$page_title = 'Pensacola SEO Company | Locally Owned SEO Agency';
$page_description = 'Pensacola SEO Company helps local businesses dominate Google search results in Pensacola, Gulf Breeze, Pace, Milton, and Northwest Florida.';
$page_url = 'https://pensacolaseocompany.com/';
$page_type = 'website';

include 'includes/head.php';
?>
<body>
  <?php include 'header.php'; ?>

  <!-- ============================================================
       1. HERO SECTION (cream background)
       ============================================================ -->
  <section class="hero-section bg-cream">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Left column: headline + subtitle + CTA -->
        <div class="col-lg-6">
          <h1>Grow Your Business with Expert SEO in Pensacola</h1>
          <p class="hero-subtitle mt-4 mb-4">
            I help local Pensacola businesses rank higher on Google, attract more customers,
            and turn search traffic into real revenue. No gimmicks, no shortcuts &mdash;
            just proven SEO strategies tailored to your market.
          </p>
          <a href="/free-site-audit" class="btn btn-coral btn-lg px-5 py-3 shadow">Get a Free SEO Audit</a>
        </div>
        <!-- Right column: headshot -->
        <div class="col-lg-6 text-center">
          <img
            src="/images/christopher-simpson-seo-consultant.jpg"
            alt="Christopher Simpson - SEO Consultant in Pensacola, Florida"
            class="hero-img"
          >
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       2. TRUST BAR (white background)
       ============================================================ -->
  <?php include 'includes/stats-bar.php'; ?>

  <!-- ============================================================
       3. SERVICES OVERVIEW (cream background)
       ============================================================ -->
  <section class="py-5 bg-cream">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-heading">Our Services</h2>
        <p class="section-subheading">
          Everything you need to dominate local search and grow your business online.
        </p>
      </div>
      <div class="row g-4 justify-content-center">
        <?php
        // Service card 1: SEO
        $service_icon = 'search';
        $service_title = 'SEO';
        $service_desc = 'Comprehensive SEO strategies to boost your site\'s visibility, optimize on-page elements, and drive organic traffic for long-term growth in Pensacola.';
        $service_link = '/seo-services';
        include 'includes/service-card.php';

        // Service card 2: Local SEO
        $service_icon = 'geo-alt';
        $service_title = 'Local SEO';
        $service_desc = 'Targeted local search optimization to get your business in front of Pensacola customers, including Google Business Profile mastery and map pack rankings.';
        $service_link = '/local-seo';
        include 'includes/service-card.php';

        // Service card 3: Monthly SEO
        $service_icon = 'calendar-check';
        $service_title = 'Monthly SEO';
        $service_desc = 'Ongoing monthly SEO packages for consistent results, including content updates, link building, and performance tracking to keep your rankings climbing.';
        $service_link = '/monthly-seo';
        include 'includes/service-card.php';

        // Service card 4: SEO Audits
        $service_icon = 'clipboard-data';
        $service_title = 'SEO Audits';
        $service_desc = 'In-depth SEO audits that uncover every issue holding your site back &mdash; from indexing problems to missed keyword opportunities &mdash; with a clear action plan.';
        $service_link = '/seo-audits';
        include 'includes/service-card.php';

        // Service card 5: Web Design
        $service_icon = 'palette';
        $service_title = 'Web Design';
        $service_desc = 'Custom, mobile-first websites built for speed and conversions. No templates &mdash; every site is hand-coded with SEO baked in from the ground up.';
        $service_link = '/web-design';
        include 'includes/service-card.php';
        ?>
      </div>
    </div>
  </section>

  <!-- ============================================================
       4. ABOUT / PERSONAL BRAND SECTION (white background)
       ============================================================ -->
  <section class="py-5 bg-white about-preview">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- Left column: image -->
        <div class="col-lg-5 text-center">
          <img
            src="/images/christopher-simpson-at-naval-air-station-pensacola.jpg"
            alt="Christopher Simpson at Naval Air Station Pensacola"
            class="about-img"
          >
        </div>
        <!-- Right column: bio -->
        <div class="col-lg-7">
          <h2>Who Is Christopher Simpson?</h2>
          <p>
            A Pensacola-native SEO specialist with over 5 years of proven digital marketing experience.
            Christopher began his career in finance marketing, creating high-converting campaigns
            for retail investors and investment firms, mastering the art of driving targeted traffic
            and maximizing ROI.
          </p>
          <p>
            Today, he channels that same precision and results-driven mindset into search engine optimization,
            helping local Pensacola businesses &mdash; from dentists and law firms to HVAC companies and laundromats &mdash;
            dominate Google search results and attract more customers than ever before.
          </p>
          <ul class="about-highlights mt-3 mb-4">
            <li><i class="bi bi-check-circle-fill"></i> Pensacola native with deep local market knowledge</li>
            <li><i class="bi bi-check-circle-fill"></i> 5+ years in digital marketing &amp; SEO</li>
            <li><i class="bi bi-check-circle-fill"></i> Background in finance marketing &amp; data analytics</li>
            <li><i class="bi bi-check-circle-fill"></i> Hands-on, owner-operated &mdash; you work directly with me</li>
          </ul>
          <a href="/about" class="btn btn-coral px-4 py-2">Learn More About Me</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
       5. TESTIMONIALS (cream background)
       ============================================================ -->
  <section class="py-5 bg-cream">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-heading">What Our Clients Say</h2>
        <p class="section-subheading">
          Real results, real feedback from Pensacola business owners.
        </p>
      </div>
    </div>
    <?php include 'testimonials-carousel.php'; ?>
  </section>

  <!-- ============================================================
       6. PORTFOLIO PREVIEW (white background)
       ============================================================ -->
  <section class="py-5 bg-white">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-heading">Recent Projects</h2>
        <p class="section-subheading">
          A sample of websites and SEO campaigns we have built for local businesses.
        </p>
      </div>
      <div class="row g-4 justify-content-center">
        <?php
        // Portfolio card 1: Happy Shingle Designs
        $portfolio_name = 'Happy Shingle Designs';
        $portfolio_desc = 'Multi-page roofing contractor site with service pages, project gallery, and Pensacola-themed design.';
        $portfolio_url = '';
        $portfolio_industry = 'Roofing';
        $portfolio_color = '#dc3545';
        $portfolio_icon = 'house-heart';
        include 'includes/portfolio-card.php';

        // Portfolio card 2: Aesthetic Journey
        $portfolio_name = 'Aesthetic Journey';
        $portfolio_desc = 'Luxury plastic surgery practice site with video hero, surgeon profiles, and before/after gallery.';
        $portfolio_url = '';
        $portfolio_industry = 'Medical';
        $portfolio_color = '#c9a84c';
        $portfolio_icon = 'heart-pulse';
        include 'includes/portfolio-card.php';

        // Portfolio card 3: Pensacola Comfort Pros
        $portfolio_name = 'Pensacola Comfort Pros';
        $portfolio_desc = 'Content-rich HVAC company site with service request form, coupons, and service area coverage.';
        $portfolio_url = '';
        $portfolio_industry = 'HVAC';
        $portfolio_color = '#0d6efd';
        $portfolio_icon = 'thermometer-half';
        include 'includes/portfolio-card.php';
        ?>
      </div>
      <div class="text-center mt-5">
        <a href="/portfolio" class="btn btn-coral px-4 py-2">View All Projects</a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       7. CTA BANNER (coral background)
       ============================================================ -->
  <section class="cta-banner-coral text-center">
    <div class="container">
      <h2 class="mb-3">Ready to Grow Your Online Presence?</h2>
      <p class="mb-4 fs-5">
        Stop losing customers to competitors who rank higher.
        Let's build an SEO strategy that works for your business.
      </p>
      <button type="button" class="btn btn-outline-white btn-lg px-5 py-3 shadow" data-bs-toggle="modal" data-bs-target="#contactModal">
        Book a Free Consultation
      </button>
      <p class="mt-3 mb-0 small" style="opacity: 0.8;">Limited availability &mdash; only a few client spots open each month.</p>
    </div>
  </section>

  <!-- ============================================================
       8. RECENT BLOG POSTS (cream background)
       ============================================================ -->
  <section class="py-5 bg-cream">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="section-heading">From the Blog</h2>
        <p class="section-subheading">
          Practical SEO tips and local marketing insights for Pensacola businesses.
        </p>
      </div>
      <div class="row g-4">
        <?php
        // Blog card 1
        $blog_title = 'Top 5 Local SEO Tips for Pensacola Businesses';
        $blog_desc = 'Discover actionable strategies to outrank competitors and attract more local customers in 2026.';
        $blog_link = '/top-5-local-seo-tips';
        $blog_icon = 'search';
        include 'includes/blog-card.php';

        // Blog card 2
        $blog_title = 'Why Monthly SEO Is Essential for Small Businesses';
        $blog_desc = 'Learn how consistent SEO maintenance can deliver 3x more leads without breaking the bank.';
        $blog_link = '/monthly-seo-essentials';
        $blog_icon = 'graph-up';
        include 'includes/blog-card.php';

        // Blog card 3
        $blog_title = 'Laundromat SEO: Filling Machines with Local Searches';
        $blog_desc = 'Specific tactics for laundromats to rank for "near me" queries and increase daily foot traffic.';
        $blog_link = '/laundromat-seo-guide';
        $blog_icon = 'building';
        include 'includes/blog-card.php';
        ?>
      </div>
      <div class="text-center mt-5">
        <a href="/blog" class="btn btn-coral px-4 py-2">Read More Articles</a>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JSON-LD Structured Data (page-specific) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Pensacola SEO Company | Locally Owned SEO Agency",
    "description": "Pensacola SEO Company helps local businesses dominate Google search results in Pensacola, Gulf Breeze, Pace, Milton, and Northwest Florida.",
    "url": "https://pensacolaseocompany.com/",
    "isPartOf": {
      "@type": "WebSite",
      "name": "Pensacola SEO Company",
      "url": "https://pensacolaseocompany.com/"
    },
    "about": {
      "@type": "Organization",
      "@id": "https://pensacolaseocompany.com/#organization",
      "name": "Pensacola SEO Company",
      "alternateName": ["Pensacola SEO Agency", "Pensacola Local SEO Company"],
      "description": "Pensacola SEO Company is a locally owned SEO agency dedicated to helping businesses in Pensacola and Northwest Florida dominate Google search results. Specializing in comprehensive SEO strategies, local SEO, monthly SEO packages, and industry-specific optimization.",
      "url": "https://pensacolaseocompany.com/",
      "founder": {
        "@type": "Person",
        "name": "Christopher Simpson",
        "givenName": "Christopher",
        "familyName": "Simpson",
        "jobTitle": "Owner & Head SEO Consultant",
        "gender": "Male",
        "image": "https://pensacolaseocompany.com/images/christopher-simpson-seo-consultant.jpg",
        "email": "pensacolaseocompany@gmail.com",
        "url": "https://pensacolaseocompany.com/",
        "worksFor": "https://pensacolaseocompany.com/",
        "knowsLanguage": "en",
        "description": "Pensacola-native SEO specialist with over 5 years of proven digital marketing experience. Began career in finance marketing creating high-converting campaigns for retail investors and investment firms. Now helps local Pensacola businesses dominate Google search results."
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Pensacola SEO Company Services",
        "url": "https://pensacolaseocompany.com/",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "SEO Services",
              "url": "https://pensacolaseocompany.com/seo-services",
              "description": "Comprehensive SEO strategies to boost your site's visibility, optimize on-page elements, and drive organic traffic for long-term growth."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Local SEO",
              "url": "https://pensacolaseocompany.com/local-seo",
              "description": "Targeted local search optimization to get your business in front of Pensacola customers, including Google Business Profile mastery."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Monthly SEO",
              "url": "https://pensacolaseocompany.com/monthly-seo",
              "description": "Ongoing monthly SEO packages for consistent results, including content updates, link building, and performance tracking."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "SEO Audits",
              "url": "https://pensacolaseocompany.com/seo-audits",
              "description": "In-depth SEO audits that uncover every issue holding your site back, with a clear action plan for improvement."
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Web Design",
              "url": "https://pensacolaseocompany.com/web-design",
              "description": "Custom, mobile-first web design for Pensacola businesses. Hand-coded websites built for speed, SEO, and conversions."
            }
          }
        ]
      },
      "address": {
        "@type": "PostalAddress",
        "postalCode": "32561",
        "addressRegion": "Florida",
        "addressCountry": "United States",
        "streetAddress": "213 Russ Dr",
        "addressLocality": "Gulf Breeze"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Customer Service",
        "email": "pensacolaseocompany@gmail.com",
        "areaServed": [
          {"@type": "City", "name": "Pensacola", "sameAs": "https://en.wikipedia.org/wiki/Pensacola,_Florida"},
          {"@type": "City", "name": "Gulf Breeze", "sameAs": "https://en.wikipedia.org/wiki/Gulf_Breeze,_Florida"},
          {"@type": "City", "name": "Pace", "sameAs": "https://en.wikipedia.org/wiki/Pace,_Florida"},
          {"@type": "City", "name": "Milton", "sameAs": "https://en.wikipedia.org/wiki/Milton,_Florida"},
          {"@type": "City", "name": "Navarre", "sameAs": "https://en.wikipedia.org/wiki/Navarre,_Florida"},
          {"@type": "City", "name": "Perdido Key", "sameAs": "https://en.wikipedia.org/wiki/Perdido_Key,_Florida"},
          {"@type": "City", "name": "Pensacola Beach", "sameAs": "https://en.wikipedia.org/wiki/Pensacola_Beach,_Florida"},
          {"@type": "City", "name": "Ferry Pass", "sameAs": "https://en.wikipedia.org/wiki/Ferry_Pass,_Florida"},
          {"@type": "City", "name": "Warrington", "sameAs": "https://en.wikipedia.org/wiki/Warrington,_Florida"},
          {"@type": "City", "name": "Myrtle Grove", "sameAs": "https://en.wikipedia.org/wiki/Myrtle_Grove,_Florida"},
          {"@type": "City", "name": "Bellview", "sameAs": "https://en.wikipedia.org/wiki/Bellview,_Florida"},
          {"@type": "City", "name": "Ensley", "sameAs": "https://en.wikipedia.org/wiki/Ensley,_Florida"},
          {"@type": "City", "name": "Brent", "sameAs": "https://en.wikipedia.org/wiki/Brent,_Florida"}
        ]
      }
    }
  }
  </script>

  <?php include 'footer.php'; ?>
</body>
</html>
