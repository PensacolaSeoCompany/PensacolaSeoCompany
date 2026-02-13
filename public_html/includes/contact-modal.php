<?php
/**
 * contact-modal.php - Contact form modal (single copy, included from header.php)
 *
 * Bootstrap 5 modal with:
 * - Name, email, phone fields
 * - Message textarea
 * - Date/time picker (9 AM - 4 PM CST)
 * - Service interest checkboxes
 * - Consent checkbox
 * - Anti-spam math question
 *
 * Requires: Bootstrap 5 JS bundle for modal functionality
 */
?>

<!-- ===== CONTACT MODAL ===== -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background: #faf8ee; color: #333; border-radius: 16px; box-shadow: 0 20px 60px rgba(0,0,0,0.15); border: 1px solid rgba(0,0,0,0.06);">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold fs-4" id="contactModalLabel" style="color: #333;">Get Your Free SEO Audit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form id="contactForm" action="/contact" method="POST">
          <div class="row g-4">
            <div class="col-md-4">
              <label for="name" class="form-label fw-bold" style="color: #333;">Name</label>
              <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Your Name" required
                style="background: #fff; color: #333; border: 1px solid #ddd; border-radius: 8px;">
            </div>
            <div class="col-md-4">
              <label for="email" class="form-label fw-bold" style="color: #333;">Email</label>
              <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="your.email@example.com" required
                style="background: #fff; color: #333; border: 1px solid #ddd; border-radius: 8px;">
            </div>
            <div class="col-md-4">
              <label for="phone" class="form-label fw-bold" style="color: #333;">Phone</label>
              <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="(850) 123-4567" required
                style="background: #fff; color: #333; border: 1px solid #ddd; border-radius: 8px;">
            </div>
          </div>
          <div class="mt-4">
            <label for="message" class="form-label fw-bold" style="color: #333;">Comments / Message (optional)</label>
            <textarea class="form-control form-control-lg" id="message" name="message" rows="4"
              placeholder="Tell me about your business, your goals, or any questions you have..."
              style="background: #fff; color: #333; border: 1px solid #ddd; border-radius: 8px;"></textarea>
          </div>
          <div class="mt-4">
            <p class="fw-medium mb-2" style="color: #666; font-size: 14px;">All times are scheduled in Central Time Zone (CST)</p>
            <label for="datetime" class="form-label fw-bold" style="color: #333;">Select Date and Time (optional)</label>
            <input type="datetime-local" class="form-control form-control-lg" id="datetime" name="datetime"
              style="background: #fff; color: #333; border: 1px solid #ddd; border-radius: 8px;">
          </div>
          <div class="row g-4 mt-3">
            <div class="col-12">
              <label for="math" class="form-label fw-bold" style="color: #333;">What is 5 + 5?</label>
              <input type="text" class="form-control form-control-lg" id="math" name="math" placeholder="Enter your answer" required
                style="background: #fff; color: #333; border: 1px solid #ddd; border-radius: 8px;">
            </div>
          </div>
          <div class="mt-4">
            <p class="fs-5 text-center mb-3" style="color: #333; font-weight: 600;">How may we help you?</p>
            <div class="row g-3 justify-content-center">
              <div class="col-md-4 text-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gbp" name="interest[]" value="GBP Optimization">
                  <label class="form-check-label fw-medium" for="gbp" style="color: #333;">GBP Optimization</label>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="seo" name="interest[]" value="Internet Marketing/SEO">
                  <label class="form-check-label fw-medium" for="seo" style="color: #333;">Internet Marketing/SEO</label>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="general" name="interest[]" value="General questions">
                  <label class="form-check-label fw-medium" for="general" style="color: #333;">General questions</label>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <div class="form-check justify-content-center">
              <input class="form-check-input" type="checkbox" id="consent" name="consent" value="yes" required>
              <label class="form-check-label fs-6 fw-medium text-start ms-2" for="consent" style="color: #555;">
                I agree to receive emails, SMS messages, and other digital communications from <strong>Pensacola SEO Company</strong> regarding services, promotions, and updates. I understand that my information will never be sold or shared outside the company, and I can unsubscribe at any time.*
              </label>
            </div>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn btn-lg px-5 py-3 fw-bold rounded-pill shadow-sm" style="background: #fd5353; color: #fff; font-size: 1.1rem; border: none;">
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Time Validation -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  var dtInput = document.getElementById('datetime');
  if (dtInput.value) {
    var timeStr = dtInput.value.split('T')[1];
    if (timeStr) {
      var parts = timeStr.split(':').map(Number);
      var h = parts[0], m = parts[1];
      if (h < 9 || h > 16 || (h === 16 && m > 0)) {
        alert('Please select a time between 9:00 AM and 4:00 PM CST.');
        e.preventDefault();
      }
    }
  }
});
</script>
