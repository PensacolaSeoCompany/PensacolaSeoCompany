<?php // contact-form.php ?>
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="display-5 fw-bold text-center text-primary mb-5">Get In Touch</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div style="background-color: #000 !important; color: white; padding: 3rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
          <form action="/contact.php" method="POST">
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
            <div class="mt-4">
              <label for="message" class="form-label fw-bold fs-5">Comments / Message (optional)</label>
              <textarea class="form-control form-control-lg" id="message" name="message" rows="5" placeholder="Tell me about your business, your goals, or any specific questions you have..."></textarea>
            </div>
            <div class="row g-4 mt-4">
              <div class="col-12">
                <label for="math" class="form-label fw-bold fs-5">What is 5 + 5?</label>
                <input type="text" class="form-control form-control-lg" id="math" name="math" placeholder="Enter your answer" required>
              </div>
            </div>
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
            <div class="text-center mt-5">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="consent" name="consent" value="yes" required>
                <label class="form-check-label fs-6 fw-medium" for="consent">
                  I agree to receive emails, SMS messages, and other digital communications from <strong>Pensacola SEO Company</strong> regarding services, promotions, and updates. I understand that my information will never be sold or shared outside the company, and I can unsubscribe at any time.*
                </label>
              </div>
            </div>
            <div class="text-center mt-5">
              <button type="submit" class="btn btn-danger btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg fs-4">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>