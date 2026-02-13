<div class="text-center mt-5 mb-5">
    <button type="button" class="btn btn-danger btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg fs-4" data-bs-toggle="modal" data-bs-target="#auditModal">
        GET FREE SITE AUDIT
    </button>
</div>
<!-- Modal with Form -->
<div class="modal fade" id="auditModal" tabindex="-1" aria-labelledby="auditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #000 !important; color: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold text-white" id="auditModalLabel">Request Free Site Audit</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="auditForm" action="/contact" method="POST">
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
                    <div class="row g-4 mt-3">
                        <div class="col-md-6">
                            <label for="website" class="form-label fw-bold fs-5">Website URL</label>
                            <input type="text" class="form-control form-control-lg bg-dark text-white border-secondary" id="website" name="website" placeholder="yourwebsite.com">
                        </div>
                        <div class="col-md-6">
                            <label for="target_keyword" class="form-label fw-bold fs-5">Target Keyword</label>
                            <input type="text" class="form-control form-control-lg bg-dark text-white border-secondary" id="target_keyword" name="target_keyword" placeholder="Enter your target keyword...">
                        </div>
                    </div>
                    <!-- Scheduling Radio Buttons -->
                    <div class="mt-4">
                        <label class="form-label fw-bold fs-5">Would you like to schedule a call with the owner to go over the site audit?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="schedule_yes" name="schedule_call" value="yes">
                            <label class="form-check-label fs-5 fw-medium" for="schedule_yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="schedule_no" name="schedule_call" value="no" checked>
                            <label class="form-check-label fs-5 fw-medium" for="schedule_no">No</label>
                        </div>
                    </div>
                    <!-- Date/Time Picker (Calendar) below the fields -->
                    <div class="mt-4" id="datetime_section" style="display: none;">
                        <p class="text-white fw-medium fs-5 mb-2">All times are scheduled in Central Time Zone (CST)</p>
                        <label for="datetime" class="form-label fw-bold fs-5">Select Date and Time</label>
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
                        <button type="submit" class="btn btn-danger btn-lg px-5 py-3 fw-bold rounded-pill shadow-lg fs-4">Request Audit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript for Time Validation and Conditional Display -->
<script>
    const dtInput = document.getElementById('datetime');
    const datetimeSection = document.getElementById('datetime_section');

    // Show/hide datetime section
    document.querySelectorAll('input[name="schedule_call"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            const showSection = this.value === 'yes';
            datetimeSection.style.display = showSection ? 'block' : 'none';
            if (!showSection) {
                dtInput.value = ''; // Clear the value when hiding to reset
            }
        });
    });

    document.getElementById('auditForm').addEventListener('submit', function(e) {
        const scheduleYes = document.getElementById('schedule_yes').checked;
        const dtValue = dtInput.value;

        if (dtValue) {
            const timeStr = dtValue.split('T')[1];
            if (timeStr) {
                const [h, m] = timeStr.split(':').map(Number);
                if (h < 9 || h > 16 || (h === 16 && m > 0)) {
                    alert('Please select a time between 9:00 AM and 4:00 PM CST.');
                    e.preventDefault();
                }
            } else {
                alert('Invalid date/time format. Please use the picker to select.');
                e.preventDefault();
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