<?php
/**
 * nav.php - Sticky navigation bar
 *
 * Extracted from header.php. Contains:
 * - Desktop nav with dropdowns
 * - Mobile hamburger menu + drawer
 * - Phone number + CTA button
 * - Header styles and JavaScript
 *
 * Requires: phone-number.php, Bootstrap 5, Bootstrap Icons
 * Note: The contact modal must be included separately (contact-modal.php)
 */
?>

<!-- ===== STICKY NAV BAR ===== -->
<header class="site-header" id="siteHeader">
  <nav class="header-nav">
    <div class="header-inner">

      <!-- LOGO -->
      <a href="/" class="header-logo">
        <img
          src="/images/pensacola-seo-company-logo.png"
          alt="Pensacola SEO Company Logo"
          width="180"
          height="50"
        >
      </a>

      <!-- NAV LINKS (desktop) -->
      <ul class="header-links" id="headerLinks">
        <li><a href="/">Home</a></li>

        <li class="has-dropdown">
          <a href="/about" class="dropdown-trigger">About <svg class="chevron-icon" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <ul class="header-dropdown">
            <li><a href="/about">About Us</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/case-studies">Case Studies</a></li>
            <li><a href="/testimonials">Testimonials</a></li>
            <li><a href="/social-media-posts">Social Media</a></li>
          </ul>
        </li>

        <li class="has-dropdown">
          <a href="/seo-services" class="dropdown-trigger">Services <svg class="chevron-icon" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <ul class="header-dropdown">
            <li><a href="/seo-services">SEO Services</a></li>
            <li><a href="/local-seo">Local SEO</a></li>
            <li><a href="/monthly-seo">Monthly SEO</a></li>
            <li><a href="/seo-audits">SEO Audits</a></li>
            <li><a href="/web-design">Web Design</a></li>
          </ul>
        </li>

        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/contact-page">Contact</a></li>
      </ul>

      <!-- RIGHT SIDE: phone + CTA -->
      <div class="header-right">
        <div class="header-phone-wrap">
          <?php include $_SERVER['DOCUMENT_ROOT'] . '/phone-number.php'; ?>
        </div>
        <button type="button" class="header-cta" data-bs-toggle="modal" data-bs-target="#contactModal">
          Get a Free Audit
        </button>
      </div>

      <!-- HAMBURGER (mobile) -->
      <button class="hamburger" id="hamburgerBtn" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- MOBILE DRAWER -->
  <div class="mobile-drawer" id="mobileDrawer">
    <ul class="mobile-links">
      <li><a href="/">Home</a></li>
      <li class="mobile-has-dropdown">
        <button class="mobile-dropdown-trigger">About <svg class="chevron-icon" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
        <ul class="mobile-sub">
          <li><a href="/about">About Us</a></li>
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/case-studies">Case Studies</a></li>
          <li><a href="/testimonials">Testimonials</a></li>
          <li><a href="/social-media-posts">Social Media</a></li>
        </ul>
      </li>
      <li class="mobile-has-dropdown">
        <button class="mobile-dropdown-trigger">Services <svg class="chevron-icon" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
        <ul class="mobile-sub">
          <li><a href="/seo-services">SEO Services</a></li>
          <li><a href="/local-seo">Local SEO</a></li>
          <li><a href="/monthly-seo">Monthly SEO</a></li>
          <li><a href="/seo-audits">SEO Audits</a></li>
          <li><a href="/web-design">Web Design</a></li>
        </ul>
      </li>
      <li><a href="/portfolio">Portfolio</a></li>
      <li><a href="/contact-page">Contact</a></li>
    </ul>
    <div class="mobile-phone">
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/phone-number.php'; ?>
    </div>
    <button type="button" class="header-cta mobile-cta" data-bs-toggle="modal" data-bs-target="#contactModal">
      Get a Free Audit
    </button>
  </div>
</header>

<!-- ===== HEADER STYLES ===== -->
<style>
/* --- Fixed bar + body offset --- */
body {
  padding-top: 80px;
}
.site-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  font-family: 'DM Sans', sans-serif;
}

/* --- Nav bar --- */
.header-nav {
  background: rgba(247, 245, 231, 0.95);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
  box-shadow: 0 1px 8px rgba(0, 0, 0, 0.04);
}
.header-inner {
  max-width: 1280px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 24px;
  height: 80px;
}

/* --- Logo --- */
.header-logo {
  flex-shrink: 0;
  display: flex;
  align-items: center;
}
.header-logo img {
  height: 50px;
  width: auto;
  display: block;
}

/* --- Desktop nav links --- */
.header-links {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  gap: 6px;
}
.header-links > li {
  position: relative;
}
.header-links > li > a {
  display: flex;
  align-items: center;
  gap: 4px;
  padding: 8px 16px;
  font-size: 15px;
  font-weight: 500;
  color: #333;
  text-decoration: none;
  text-transform: none;
  border-radius: 6px;
  transition: color 0.2s ease, background 0.2s ease;
}
.header-links > li > a:hover,
.header-links > li > a:focus {
  color: #fd5353;
  background: rgba(253, 83, 83, 0.06);
}
.chevron-icon {
  transition: transform 0.25s ease;
}
.has-dropdown:hover .chevron-icon {
  transform: rotate(180deg);
}

/* --- Dropdown --- */
.header-dropdown {
  display: none;
  position: absolute;
  top: calc(100% + 8px);
  left: 0;
  min-width: 210px;
  background: #faf8ee;
  border: 1px solid rgba(0, 0, 0, 0.08);
  border-radius: 10px;
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
  padding: 8px 0;
  list-style: none;
  margin: 0;
  z-index: 100;
}
.has-dropdown:hover > .header-dropdown {
  display: block;
}
.header-dropdown li a {
  display: block;
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  color: #333;
  text-decoration: none;
  transition: background 0.15s ease, color 0.15s ease;
}
.header-dropdown li a:hover {
  background: rgba(253, 83, 83, 0.07);
  color: #fd5353;
}

/* --- Right side (phone + CTA) --- */
.header-right {
  display: flex;
  align-items: center;
  gap: 20px;
  flex-shrink: 0;
}

/* Override phone link styling for cream header */
.header-phone-wrap .phone-link {
  color: #333;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.3px;
}
.header-phone-wrap .phone-link:hover {
  color: #fd5353;
}
.header-phone-wrap .phone-link .bi-telephone-fill {
  color: #fd5353;
}

/* --- CTA pill button --- */
.header-cta {
  display: inline-flex;
  align-items: center;
  padding: 10px 24px;
  font-family: 'DM Sans', sans-serif;
  font-size: 14px;
  font-weight: 600;
  color: #fff;
  background: #fd5353;
  border: none;
  border-radius: 50px;
  cursor: pointer;
  transition: background 0.2s ease, transform 0.15s ease, box-shadow 0.2s ease;
  white-space: nowrap;
  box-shadow: 0 2px 8px rgba(253, 83, 83, 0.3);
}
.header-cta:hover {
  background: #e94444;
  transform: translateY(-1px);
  box-shadow: 0 4px 14px rgba(253, 83, 83, 0.4);
}

/* --- Hamburger --- */
.hamburger {
  display: none;
  flex-direction: column;
  justify-content: center;
  gap: 5px;
  width: 36px;
  height: 36px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 4px;
  z-index: 1010;
}
.hamburger span {
  display: block;
  width: 24px;
  height: 2.5px;
  background: #333;
  border-radius: 2px;
  transition: transform 0.3s ease, opacity 0.3s ease;
}
.hamburger.is-open span:nth-child(1) {
  transform: translateY(7.5px) rotate(45deg);
}
.hamburger.is-open span:nth-child(2) {
  opacity: 0;
}
.hamburger.is-open span:nth-child(3) {
  transform: translateY(-7.5px) rotate(-45deg);
}

/* --- Mobile drawer --- */
.mobile-drawer {
  display: none;
  position: fixed;
  top: 80px;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(247, 245, 231, 0.98);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  padding: 24px;
  overflow-y: auto;
  z-index: 999;
}
.mobile-drawer.is-open {
  display: block;
}
.mobile-links {
  list-style: none;
  margin: 0;
  padding: 0;
}
.mobile-links > li {
  border-bottom: 1px solid rgba(0, 0, 0, 0.06);
}
.mobile-links > li > a,
.mobile-dropdown-trigger {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  padding: 16px 4px;
  font-size: 17px;
  font-weight: 500;
  color: #333;
  text-decoration: none;
  background: none;
  border: none;
  cursor: pointer;
  font-family: 'DM Sans', sans-serif;
}
.mobile-links > li > a:hover,
.mobile-dropdown-trigger:hover {
  color: #fd5353;
}
.mobile-dropdown-trigger .chevron-icon {
  transition: transform 0.25s ease;
}
.mobile-dropdown-trigger.is-open .chevron-icon {
  transform: rotate(180deg);
}
.mobile-sub {
  display: none;
  list-style: none;
  margin: 0;
  padding: 0 0 8px 16px;
}
.mobile-sub.is-open {
  display: block;
}
.mobile-sub li a {
  display: block;
  padding: 10px 8px;
  font-size: 15px;
  font-weight: 500;
  color: #555;
  text-decoration: none;
  transition: color 0.15s ease;
}
.mobile-sub li a:hover {
  color: #fd5353;
}
.mobile-phone {
  padding: 20px 0 12px;
  text-align: center;
}
.mobile-phone .phone-link {
  color: #333;
  font-size: 18px;
  font-weight: 600;
}
.mobile-phone .phone-link:hover {
  color: #fd5353;
}
.mobile-cta {
  display: block;
  width: 100%;
  text-align: center;
  margin-top: 8px;
  padding: 14px 24px;
  font-size: 16px;
}

/* --- Responsive breakpoints --- */
@media (max-width: 991px) {
  .header-links,
  .header-right {
    display: none;
  }
  .hamburger {
    display: flex;
  }
}
@media (min-width: 992px) {
  .mobile-drawer {
    display: none !important;
  }
}

/* --- Subtle scroll shadow --- */
.site-header.scrolled .header-nav {
  box-shadow: 0 2px 16px rgba(0, 0, 0, 0.08);
}
</style>

<!-- ===== HEADER JAVASCRIPT ===== -->
<script>
(function() {
  // Hamburger toggle
  var burger = document.getElementById('hamburgerBtn');
  var drawer = document.getElementById('mobileDrawer');
  if (burger && drawer) {
    burger.addEventListener('click', function() {
      burger.classList.toggle('is-open');
      drawer.classList.toggle('is-open');
      document.body.style.overflow = drawer.classList.contains('is-open') ? 'hidden' : '';
    });
  }

  // Mobile dropdown toggles
  document.querySelectorAll('.mobile-dropdown-trigger').forEach(function(btn) {
    btn.addEventListener('click', function() {
      btn.classList.toggle('is-open');
      var sub = btn.nextElementSibling;
      if (sub) sub.classList.toggle('is-open');
    });
  });

  // Close drawer when a mobile link is clicked
  document.querySelectorAll('.mobile-links a, .mobile-sub a').forEach(function(link) {
    link.addEventListener('click', function() {
      if (burger) burger.classList.remove('is-open');
      if (drawer) drawer.classList.remove('is-open');
      document.body.style.overflow = '';
    });
  });

  // Scroll shadow effect
  var header = document.getElementById('siteHeader');
  window.addEventListener('scroll', function() {
    if (window.scrollY > 10) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
})();
</script>
