<?php // contact-page.php - Updated with company email + owner/company social blocks ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact | Pensacola SEO Company</title>
  <meta name="description" content="Contact Pensacola SEO Company for local SEO services in Pensacola, Gulf Breeze, Pace, Milton, and Northwest Florida. Get your free consultation today.">
  <meta name="robots" content="noindex, nofollow" />

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Custom Styles -->
  <style>
    /* Fix horizontal scroll */
    html, body {
      overflow-x: hidden !important;
    }

    /* Fix long dropdowns */
    .dropdown-menu {
      max-height: 80vh;
      overflow-y: auto;
    }

    /* Fix mobile menu */
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

    /* Container/row safety */
    .container, .container-fluid, .row, .col, .card {
      overflow-x: hidden;
    }
  </style>
</head>

<body class="bg-light">

  <?php include 'header.php'; ?>

  <!-- MAIN CONTACT PAGE CONTENT -->
  <section class="py-5 bg-white">
    <div class="container">
      <h1 class="display-3 fw-bold text-primary text-center mb-5">Contact Us</h1>

      <p class="lead fs-4 text-dark opacity-90 text-center lh-lg mb-5">
        Have questions about SEO for your Pensacola business? Ready to get started? Fill out the form below or call (850) 123-4567 for your free consultation with Christopher Simpson.
      </p>

      <!-- COMPANY EMAIL BLOCK -->
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-4">Company Email</h2>
        <p class="lead fs-3 text-dark opacity-90">
          <i class="bi bi-envelope-fill me-2"></i>
          <a href="mailto:pensacolaseocompany@gmail.com" class="text-primary text-decoration-none">pensacolaseocompany@gmail.com</a>
        </p>
      </div>

      <!-- OWNER SOCIAL BLOCK -->
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-4">Reach Out Directly to the Owner</h2>
        <div class="d-flex justify-content-center gap-5">
          <a href="https://www.linkedin.com/in/christopher-s-651818186/" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://www.instagram.com/onelegchris/" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.facebook.com/christopher.simpson.925" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-facebook"></i>
          </a>
        </div>
      </div>

      <!-- COMPANY SOCIAL BLOCK -->
      <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-primary mb-4">Reach Out Directly to the Company</h2>
        <div class="d-flex justify-content-center gap-4">
          <a href="https://x.com/PensacolaSearch" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-twitter-x"></i>
          </a>
          <a href="https://youtube.com/@pensacolaseocompany" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-youtube"></i>
          </a>
          <a href="https://www.linkedin.com/company/pensacolaseocompany" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://www.instagram.com/pensacolaseocompany2025" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.facebook.com/profile.php?id=61577900819893" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://yelp.com/biz/pensacola-seo-company-pensacola" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-yelp"></i>
          </a>
          <a href="https://www.tiktok.com/@pensacolaseocompany" target="_blank" class="text-primary fs-2 hover-opacity-75">
            <i class="bi bi-tiktok"></i>
          </a>
        </div>
      </div>

      <!-- CONTACT FORM - BLACK BACKGROUND BLOCK -->
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div style="background-color: #000 !important; color: white; padding: 3rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
            <form action="/contact" method="POST">
              <div class="row g-4">
                <div class="col-md-4">
                  <label for="name" class="form-label fw-bold fs-5">Name</label>
                  <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-4">
                  <label for="email" class="form-label fw-bold fs-5">Email</label>
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="your.email@example.com" required>
                </div>
                <div class="col-md-4">
                  <label for="phone" class="form-label fw-bold fs-5">Phone</label>
                  <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="(850) 123-4567" required>
                </div>
              </div>

              <!-- COMMENTS FIELD -->
              <div class="mt-4">
                <label for="message" class="form-label fw-bold fs-5">Comments / Message (optional)</label>
                <textarea class="form-control form-control-lg" id="message" name="message" rows="5" placeholder="Tell me about your business, your goals, or any specific questions you have..."></textarea>
              </div>

              <!-- MATH CAPTCHA -->
              <div class="row g-4 mt-4">
                <div class="col-12">
                  <label for="math" class="form-label fw-bold fs-5">What is 5 + 5?</label>
                  <input type="text" class="form-control form-control-lg" id="math" name="math" placeholder="Enter your answer" required>
                </div>
              </div>

              <!-- INTERESTS CHECKBOXES -->
              <div class="mt-5">
                <p class="lead fs-4 text-center opacity-90 mb-4">How may we help you?</p>
                <div class="row g-3 justify-content-center">
                  <div class="col-md-4 text-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gbp" name="interest[]" value="GBP Optimization">
                      <label class="form-check-label fs-5 fw-medium" for="gbp">GBP Optimization</label>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="seo" name="interest[]" value="Internet Marketing/SEO">
                      <label class="form-check-label fs-5 fw-medium" for="seo">Internet Marketing/SEO</label>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="general" name="interest[]" value="General questions">
                      <label class="form-check-label fs-5 fw-medium" for="general">General questions</label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- CONSENT CHECKBOX -->
              <div class="text-center mt-5">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="consent" name="consent" value="yes" required>
                  <label class="form-check-label fs-6 fw-medium" for="consent">
                    I agree to receive emails, SMS messages, and other digital communications from <strong>Pensacola SEO Company</strong> regarding services, promotions, and updates. I understand that my information will never be sold or shared outside the company, and I can unsubscribe at any time.*
                  </label>
                </div>
              </div>

              <div class="text-center mt-5">
                <button type="submit" class="btn btn-warning btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg fs-4">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include 'footer.php'; ?>
</body>
</html>