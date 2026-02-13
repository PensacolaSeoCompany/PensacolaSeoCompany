<?php // testimonials-carousel.php - Warm palette testimonial carousel ?>
<!-- TESTIMONIALS -->
<section class="testimonials-section">
  <div class="container">
    <h2 class="display-5 text-center section-title mb-5">What Our Clients Say</h2>

    <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active" data-bs-interval="7500">
          <div class="testimonial-card mx-auto">
            <div class="card-body p-5 text-center d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-quote quote-icon mb-3"></i>
              <p class="testimonial-text mb-4">
                "One of my customers told me they googled 'laundromat next to [competitor's name]' expecting to find the place right down the street, but my business popped up first! Since working with Christopher, my laundromat has been busier than ever &mdash; more walk-ins, more repeat customers, and way more revenue. SEO really works when it's done right."
              </p>
              <h5 class="testimonial-author">Arthur</h5>
              <p class="testimonial-title">Laundromat Owner, Pensacola</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" data-bs-interval="7500">
          <div class="testimonial-card mx-auto">
            <div class="card-body p-5 text-center d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-quote quote-icon mb-3"></i>
              <p class="testimonial-text mb-4">
                "Chris has an innate ability to look at social media communities and engage. His creativity and wit are unique and his ability to craft industry-relevant posts that educate, entertain and engage is second to none. If you are looking for a community manager or social media content creator there are few better qualified and equipped with a natural talent for the work than Chris."
              </p>
              <h5 class="testimonial-author">Dan Willis</h5>
              <p class="testimonial-title">Equities Analyst &amp; Co-President, Alertyfi</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="bi bi-chevron-left fs-1" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="bi bi-chevron-right fs-1" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
