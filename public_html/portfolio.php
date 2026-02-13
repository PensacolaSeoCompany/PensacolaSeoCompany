<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our Portfolio | Web Design & SEO Projects | Pensacola SEO Company</title>
<meta name="description" content="Explore our portfolio of client websites built by Pensacola SEO Company. From roofing contractors to plastic surgeons, see how we create high-converting websites for local businesses.">
<link rel="canonical" href="https://pensacolaseocompany.com/portfolio">
<link rel="icon" type="image/x-icon" href="favicon.ico">

<!-- Open Graph -->
<meta property="og:title" content="Our Portfolio | Web Design & SEO Projects | Pensacola SEO Company">
<meta property="og:description" content="Explore our portfolio of client websites built by Pensacola SEO Company. From roofing contractors to plastic surgeons, see how we create high-converting websites for local businesses.">
<meta property="og:url" content="https://pensacolaseocompany.com/portfolio">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Pensacola SEO Company">
<meta property="og:image" content="https://pensacolaseocompany.com/images/pensacola-seo-company-logo.png">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
  .dropdown-menu {
    max-height: 80vh;
    overflow-y: auto;
  }
  @media (max-width: 991.98px) {
    .navbar-collapse {
      max-height: 80vh;
      overflow-y: auto;
      background-color: #000;
      padding: 1rem;
      border-radius: 8px;
      margin-top: 0.5rem;
    }
  }
  html, body {
    overflow-x: hidden !important;
  }

  /* Portfolio card styles */
  .portfolio-card {
    background: #fff;
    border: none;
    border-radius: 16px;
    overflow: hidden;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  }
  .portfolio-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.15);
  }

  .portfolio-card-header {
    padding: 2rem 2rem 1.5rem;
    position: relative;
  }

  .portfolio-icon {
    width: 64px;
    height: 64px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
    color: #fff;
    margin-bottom: 1.25rem;
  }

  .portfolio-badge {
    display: inline-block;
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 4px 14px;
    border-radius: 50px;
    margin-bottom: 1rem;
  }

  .portfolio-card-body {
    padding: 0 2rem 2rem;
  }

  .portfolio-card-body h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #212529;
    margin-bottom: 0.75rem;
  }

  .portfolio-card-body p {
    font-size: 0.95rem;
    color: #6c757d;
    line-height: 1.7;
    margin-bottom: 1.5rem;
  }

  .portfolio-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 600;
    font-size: 0.95rem;
    padding: 12px 28px;
    border-radius: 50px;
    transition: all 0.3s ease;
    text-decoration: none;
  }
  .portfolio-btn:hover {
    transform: translateX(4px);
  }

  /* Color themes for each project */
  .portfolio-roofing .portfolio-icon { background: linear-gradient(135deg, #dc3545, #c82333); }
  .portfolio-roofing .portfolio-badge { background: #fce4e6; color: #dc3545; }
  .portfolio-roofing .portfolio-btn { background: #dc3545; color: #fff; }
  .portfolio-roofing .portfolio-btn:hover { background: #c82333; color: #fff; }

  .portfolio-medical .portfolio-icon { background: linear-gradient(135deg, #c9a84c, #a08030); }
  .portfolio-medical .portfolio-badge { background: #fdf6e3; color: #a08030; }
  .portfolio-medical .portfolio-btn { background: #c9a84c; color: #fff; }
  .portfolio-medical .portfolio-btn:hover { background: #a08030; color: #fff; }

  .portfolio-hvac .portfolio-icon { background: linear-gradient(135deg, #0d6efd, #0b5ed7); }
  .portfolio-hvac .portfolio-badge { background: #e7f1ff; color: #0d6efd; }
  .portfolio-hvac .portfolio-btn { background: #0d6efd; color: #fff; }
  .portfolio-hvac .portfolio-btn:hover { background: #0b5ed7; color: #fff; }

  .portfolio-photo .portfolio-icon { background: linear-gradient(135deg, #20c997, #198754); }
  .portfolio-photo .portfolio-badge { background: #e6f9f1; color: #198754; }
  .portfolio-photo .portfolio-btn { background: #20c997; color: #fff; }
  .portfolio-photo .portfolio-btn:hover { background: #198754; color: #fff; }

  /* Decorative accent line on card top */
  .portfolio-card::before {
    content: '';
    display: block;
    height: 4px;
    width: 100%;
  }
  .portfolio-roofing::before { background: linear-gradient(90deg, #dc3545, #ff6b6b); }
  .portfolio-medical::before { background: linear-gradient(90deg, #c9a84c, #e8d590); }
  .portfolio-hvac::before { background: linear-gradient(90deg, #0d6efd, #6ea8fe); }
  .portfolio-photo::before { background: linear-gradient(90deg, #20c997, #6edcba); }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Our Portfolio | Web Design & SEO Projects",
  "description": "Explore our portfolio of client websites built by Pensacola SEO Company. From roofing contractors to plastic surgeons, see how we create high-converting websites for local businesses.",
  "url": "https://pensacolaseocompany.com/portfolio",
  "isPartOf": {
    "@type": "WebSite",
    "name": "Pensacola SEO Company",
    "url": "https://pensacolaseocompany.com/"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Pensacola SEO Company",
    "url": "https://pensacolaseocompany.com/",
    "logo": {
      "@type": "ImageObject",
      "url": "https://pensacolaseocompany.com/images/pensacola-seo-company-logo.png"
    }
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://pensacolaseocompany.com/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Portfolio",
        "item": "https://pensacolaseocompany.com/portfolio"
      }
    ]
  },
  "mainEntity": {
    "@type": "ItemList",
    "name": "Client Portfolio Projects",
    "numberOfItems": 4,
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "item": {
          "@type": "WebSite",
          "name": "Happy Shingle Designs",
          "url": "https://happy-shingle-designs.pensacolaseocompany.com",
          "description": "Multi-page roofing contractor site with service pages, project gallery, estimate form, and Pensacola-themed design"
        }
      },
      {
        "@type": "ListItem",
        "position": 2,
        "item": {
          "@type": "WebSite",
          "name": "Aesthetic Journey",
          "url": "https://aesthetic-journey.pensacolaseocompany.com",
          "description": "Luxury plastic surgery practice site with video hero, surgeon profiles, before/after gallery, and elegant gold/cream aesthetic"
        }
      },
      {
        "@type": "ListItem",
        "position": 3,
        "item": {
          "@type": "WebSite",
          "name": "Pensacola Comfort Pros",
          "url": "https://pensacola-comfort-pros.pensacolaseocompany.com",
          "description": "Content-rich HVAC company site with service request form, coupons, financing section, and comprehensive service area coverage"
        }
      },
      {
        "@type": "ListItem",
        "position": 4,
        "item": {
          "@type": "WebSite",
          "name": "Coastal Canvas",
          "url": "https://coastal-canvas.pensacolaseocompany.com",
          "description": "Emotional beach photography site with animated photo galleries, sand particle effects, wave dividers, and wedding/maternity portfolios"
        }
      }
    ]
  }
}
</script>

</head>
<body class="bg-light">
  <?php include 'header.php'; ?>

  <!-- HERO SECTION -->
  <section class="py-5 bg-black text-white">
    <div class="container text-center">
      <h1 class="display-4 fw-bold mb-4">Our Portfolio</h1>
      <p class="lead fs-4 opacity-90 mb-3" style="max-width: 720px; margin: 0 auto;">
        Real websites we have built for real businesses. Each project is designed to convert visitors into customers while ranking on Google.
      </p>
      <div class="d-flex justify-content-center gap-3 mt-4">
        <span class="badge bg-danger fs-6 px-3 py-2 rounded-pill">SEO-Optimized</span>
        <span class="badge bg-primary fs-6 px-3 py-2 rounded-pill">Mobile-First</span>
        <span class="badge bg-success fs-6 px-3 py-2 rounded-pill">Conversion-Focused</span>
      </div>
    </div>
  </section>

  <!-- PORTFOLIO CARDS SECTION -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row g-4">

        <!-- 1. Happy Shingle Designs -->
        <div class="col-lg-6">
          <div class="portfolio-card portfolio-roofing h-100">
            <div class="portfolio-card-header">
              <div class="portfolio-icon">
                <i class="bi bi-house-gear-fill"></i>
              </div>
              <span class="portfolio-badge">Roofing / Home Services</span>
            </div>
            <div class="portfolio-card-body">
              <h3>Happy Shingle Designs</h3>
              <p>
                Multi-page roofing contractor site with dedicated service pages, a project gallery showcasing completed work, an estimate request form, and a Pensacola-themed design that resonates with local homeowners.
              </p>
              <a href="https://happy-shingle-designs.pensacolaseocompany.com" target="_blank" rel="noopener noreferrer" class="portfolio-btn">
                View Live Site <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 2. Aesthetic Journey -->
        <div class="col-lg-6">
          <div class="portfolio-card portfolio-medical h-100">
            <div class="portfolio-card-header">
              <div class="portfolio-icon">
                <i class="bi bi-heart-pulse-fill"></i>
              </div>
              <span class="portfolio-badge">Medical / Cosmetic Surgery</span>
            </div>
            <div class="portfolio-card-body">
              <h3>Aesthetic Journey</h3>
              <p>
                Luxury plastic surgery practice site featuring a video hero section, detailed surgeon profiles, before-and-after gallery, and an elegant gold and cream aesthetic that conveys trust and sophistication.
              </p>
              <a href="https://aesthetic-journey.pensacolaseocompany.com" target="_blank" rel="noopener noreferrer" class="portfolio-btn">
                View Live Site <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 3. Pensacola Comfort Pros -->
        <div class="col-lg-6">
          <div class="portfolio-card portfolio-hvac h-100">
            <div class="portfolio-card-header">
              <div class="portfolio-icon">
                <i class="bi bi-thermometer-snow"></i>
              </div>
              <span class="portfolio-badge">HVAC / Home Services</span>
            </div>
            <div class="portfolio-card-body">
              <h3>Pensacola Comfort Pros</h3>
              <p>
                Content-rich HVAC company site with a service request form, seasonal coupons section, financing options, and comprehensive service area coverage pages designed to capture local search traffic across Pensacola.
              </p>
              <a href="https://pensacola-comfort-pros.pensacolaseocompany.com" target="_blank" rel="noopener noreferrer" class="portfolio-btn">
                View Live Site <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- 4. Coastal Canvas -->
        <div class="col-lg-6">
          <div class="portfolio-card portfolio-photo h-100">
            <div class="portfolio-card-header">
              <div class="portfolio-icon">
                <i class="bi bi-camera-fill"></i>
              </div>
              <span class="portfolio-badge">Photography</span>
            </div>
            <div class="portfolio-card-body">
              <h3>Coastal Canvas</h3>
              <p>
                Emotional beach photography site with animated photo galleries, sand particle effects, wave dividers, and dedicated wedding and maternity portfolio sections that showcase the beauty of Pensacola's coastline.
              </p>
              <a href="https://coastal-canvas.pensacolaseocompany.com" target="_blank" rel="noopener noreferrer" class="portfolio-btn">
                View Live Site <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SUMMARY STATS SECTION -->
  <section class="py-5 bg-black text-white">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-md-3 col-6">
          <div class="display-4 fw-bold text-danger mb-2">4</div>
          <p class="fs-5 opacity-90">Industries Served</p>
        </div>
        <div class="col-md-3 col-6">
          <div class="display-4 fw-bold text-danger mb-2">100%</div>
          <p class="fs-5 opacity-90">Mobile Responsive</p>
        </div>
        <div class="col-md-3 col-6">
          <div class="display-4 fw-bold text-danger mb-2">SEO</div>
          <p class="fs-5 opacity-90">Built-In from Day One</p>
        </div>
        <div class="col-md-3 col-6">
          <div class="display-4 fw-bold text-danger mb-2">Fast</div>
          <p class="fs-5 opacity-90">Optimized Load Times</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <?php include 'cta-banner.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include 'footer.php'; ?>
</body>
</html>
