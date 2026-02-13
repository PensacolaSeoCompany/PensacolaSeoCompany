<?php // footer — warm, clean design inspired by seosly.com aesthetic ?>
<footer class="site-footer" style="background-color: #2d2d2d; color: #e8e5d8;">
  <div class="container py-5">
    <div class="row g-5">

      <!-- Column 1: Logo + Tagline + Social Icons -->
      <div class="col-lg-3 col-md-6 text-center text-md-start">
        <img
          src="/images/pensacola-seo-company-logo.png"
          alt="Pensacola SEO Company Logo"
          class="img-fluid mb-3"
          style="height: 80px; width: auto;"
        >
        <p class="mb-4" style="color: #e8e5d8; line-height: 1.6; font-size: 0.95rem;">
          Pensacola's #1 Local SEO Agency — getting local businesses to the top of Google since 2025.
        </p>
        <!-- Social Icons — circular outline, coral fill on hover -->
        <div class="d-flex justify-content-center justify-content-md-start gap-2 flex-wrap footer-socials">
          <a href="https://x.com/PensacolaSearch" target="_blank" rel="noopener" aria-label="Follow us on X (Twitter)" class="footer-social-icon"><i class="bi bi-twitter-x"></i></a>
          <a href="https://youtube.com/@pensacolaseocompany" target="_blank" rel="noopener" aria-label="Subscribe on YouTube" class="footer-social-icon"><i class="bi bi-youtube"></i></a>
          <a href="https://www.linkedin.com/company/pensacolaseocompany" target="_blank" rel="noopener" aria-label="Connect on LinkedIn" class="footer-social-icon"><i class="bi bi-linkedin"></i></a>
          <a href="https://www.instagram.com/pensacolaseocompany2025" target="_blank" rel="noopener" aria-label="Follow on Instagram" class="footer-social-icon"><i class="bi bi-instagram"></i></a>
          <a href="https://www.facebook.com/profile?id=61577900819893" target="_blank" rel="noopener" aria-label="Like on Facebook" class="footer-social-icon"><i class="bi bi-facebook"></i></a>
          <a href="https://yelp.com/biz/pensacola-seo-company-pensacola" target="_blank" rel="noopener" aria-label="Review us on Yelp" class="footer-social-icon"><i class="bi bi-yelp"></i></a>
          <a href="https://www.tiktok.com/@pensacolaseocompany" target="_blank" rel="noopener" aria-label="Follow on TikTok" class="footer-social-icon"><i class="bi bi-tiktok"></i></a>
        </div>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <h5 class="footer-heading">Quick Links</h5>
        <ul class="list-unstyled footer-links">
          <li><a href="/about">About</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/case-studies">Case Studies</a></li>
          <li><a href="/testimonials">Testimonials</a></li>
        </ul>
      </div>

      <!-- Column 3: Services -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <h5 class="footer-heading">Services</h5>
        <ul class="list-unstyled footer-links">
          <li><a href="/seo-services">SEO</a></li>
          <li><a href="/local-seo">Local SEO</a></li>
          <li><a href="/monthly-seo">Monthly SEO</a></li>
          <li><a href="/seo-audits">SEO Audits</a></li>
          <li><a href="/web-design">Web Design</a></li>
          <li><a href="/free-seo-audit">Free SEO Audit</a></li>
        </ul>
      </div>

      <!-- Column 4: Contact -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Contact</h5>
        <ul class="list-unstyled footer-contact">
          <li class="mb-3">
            <?php include 'phone-number.php'; ?>
          </li>
          <li class="mb-3">
            <i class="bi bi-envelope-fill me-2" style="color: #fd5353;"></i>
            <a href="mailto:pensacolaseocompany@gmail.com" class="footer-contact-link">pensacolaseocompany@gmail.com</a>
          </li>
          <li class="mb-3">
            <i class="bi bi-geo-alt-fill me-2" style="color: #fd5353;"></i>
            <span>Pensacola, Florida</span>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="footer-bottom" style="border-top: 1px solid #444;">
    <div class="container py-4">
      <div class="text-center">
        <p class="mb-2" style="color: #e8e5d8; opacity: 0.7; font-size: 0.9rem;">
          &copy; <?php echo date("Y"); ?> Pensacola SEO, LLC. All rights reserved.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 gap-lg-4 mb-2">
          <a href="/terms-of-service" class="footer-bottom-link">Terms of Service</a>
          <span style="color: #555;">|</span>
          <a href="/privacy-policy" class="footer-bottom-link">Privacy Policy</a>
          <span style="color: #555;">|</span>
          <a href="/sitemap" class="footer-bottom-link">Sitemap</a>
          <span style="color: #555;">|</span>
          <a href="/social-media-posts" class="footer-bottom-link">Social Media Posts</a>
        </div>
        <p class="mb-0" style="color: #e8e5d8; opacity: 0.5; font-size: 0.85rem;">
          Proudly serving Pensacola, Gulf Breeze, Pace, Milton &amp; Northwest Florida
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- Footer-specific styles -->
<style>
  /* Footer headings — white with coral underline accent */
  .footer-heading {
    color: #ffffff;
    font-weight: 700;
    font-size: 1.05rem;
    letter-spacing: 0.03em;
    margin-bottom: 1.25rem;
    padding-bottom: 0.6rem;
    position: relative;
  }
  .footer-heading::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 32px;
    height: 2px;
    background-color: #fd5353;
    border-radius: 2px;
  }

  /* Footer link lists */
  .footer-links li {
    margin-bottom: 0.6rem;
  }
  .footer-links a {
    color: #e8e5d8;
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.25s ease;
  }
  .footer-links a:hover {
    color: #fd5353;
  }

  /* Footer contact column */
  .footer-contact {
    font-size: 0.95rem;
  }
  .footer-contact-link {
    color: #e8e5d8;
    text-decoration: none;
    transition: color 0.25s ease;
  }
  .footer-contact-link:hover {
    color: #fd5353;
  }

  /* Phone link inside footer — cream on dark bg */
  .site-footer .phone-link {
    color: #e8e5d8;
    font-size: 0.95rem;
  }
  .site-footer .phone-link:hover {
    color: #fd5353;
  }
  .site-footer .phone-link .bi-telephone-fill {
    color: #fd5353;
  }

  /* Social icons — circular outline, coral fill on hover */
  .footer-social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: 1px solid rgba(232, 229, 216, 0.35);
    color: #e8e5d8;
    font-size: 0.9rem;
    text-decoration: none;
    transition: all 0.25s ease;
  }
  .footer-social-icon:hover {
    background-color: #fd5353;
    border-color: #fd5353;
    color: #ffffff;
    transform: translateY(-2px);
  }

  /* Bottom bar legal links */
  .footer-bottom-link {
    color: #e8e5d8;
    opacity: 0.6;
    text-decoration: none;
    font-size: 0.85rem;
    transition: color 0.25s ease, opacity 0.25s ease;
  }
  .footer-bottom-link:hover {
    color: #fd5353;
    opacity: 1;
  }
</style>
