<div class="text-center mt-5 mb-5">
    <button type="button" class="btn btn-danger btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg fs-4" data-bs-toggle="modal" data-bs-target="#contactModal">
        I'M READY TO RANK
    </button>
</div>

<!-- Modal with Form -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #000 !important; color: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold text-white" id="contactModalLabel">Get In Touch</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="contactForm" action="/contact" method="POST">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <label for="name" class="form-label fw-bold fs-5">Name</label>
                            <input type="text" class="form-control form-control-lg bg-dark text-white border-secondary" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label fw-bold fs-5">Email</label>
                            <input type="email" class="form-control form-control-lg bg-dark text-white border-secondary" id="email" name="email" placeholder="your.email@example.com" required>
                        </div>
                        <div class="col-md-4">
                            <label for="phone" class="form-label fw-bold fs-5">Phone</label>
                            <input type="tel" class="form-control form-control-lg bg-dark text-white border-secondary" id="phone" name="phone" placeholder="(850) 123-4567" required>
                        </div>
                    </div>
                    <!-- COMMENTS / MESSAGE FIELD -->
                    <div class="mt-4">
                        <label for="message" class="form-label fw-bold fs-5">Comments / Message (optional)</label>
                        <textarea class="form-control form-control-lg bg-dark text-white border-secondary" id="message" name="message" rows="5" placeholder="Tell me about your business, your goals, or any specific questions you have..."></textarea>
                    </div>
                    <!-- Date/Time Picker (Calendar) below the fields -->
                    <div class="mt-4">
                        <p class="text-white fw-medium fs-5 mb-2">All times are scheduled in Central Time Zone (CST)</p>
                        <label for="datetime" class="form-label fw-bold fs-5">Select Date and Time (optional)</label>
                        <input type="datetime-local" class="form-control form-control-lg bg-dark text-white border-secondary" id="datetime" name="datetime">
                    </div>
                    <!-- MATH CAPTCHA -->
                    <div class="row g-4 mt-4">
                        <div class="col-12">
                            <label for="math" class="form-label fw-bold fs-5">What is 5 + 5?</label>
                            <input type="text" class="form-control form-control-lg bg-dark text-white border-secondary" id="math" name="math" placeholder="Enter your answer" required>
                        </div>
                    </div>
                    <!-- HOW MAY WE HELP YOU CHECKBOXES -->
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
                    <!-- REQUIRED CONSENT DISCLAIMER -->
                    <div class="text-center mt-5">
                        <div class="form-check justify-content-center">
                            <input class="form-check-input" type="checkbox" id="consent" name="consent" value="yes" required>
                            <label class="form-check-label fs-6 fw-medium text-start ms-2" for="consent">
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

<!-- JavaScript for Time Validation -->
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        const dtInput = document.getElementById('datetime');
        if (dtInput.value) {
            const timeStr = dtInput.value.split('T')[1];
            if (timeStr) {
                const [h, m] = timeStr.split(':').map(Number);
                if (h < 9 || h > 16 || (h === 16 && m > 0)) {
                    alert('Please select a time between 9:00 AM and 4:00 PM CST.');
                    e.preventDefault();
                }
            }
        }
    });
</script>

<!-- CSS for Calendar Icon Color -->
<style>
    input[type="datetime-local"]::-webkit-calendar-picker-indicator {
        filter: invert(1); /* Inverts the icon color to white */
        color: white; /* Fallback */
    }
</style>