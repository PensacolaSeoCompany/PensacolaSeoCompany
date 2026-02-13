<?php // testimonials-carousel.php ?>
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="display-5 fw-bold text-center text-primary mb-5">What Clients Say</h2>
    <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
     
      <!-- Inner container without fixed height to prevent cutoff -->
      <div class="carousel-inner"> <!-- Removed height and overflow -->
       
        <!-- Slide 1 -->
        <div class="carousel-item active" data-bs-interval="7500">
          <div class="card border-0 shadow-lg mx-auto bg-white" style="max-width: 800px;">
            <div class="card-body p-5 text-center d-flex flex-column align-items-center justify-content-center"> <!-- Removed overflow-auto -->
              <i class="bi bi-quote fs-1 text-primary mb-3"></i>
              <p class="lead fs-3 opacity-90 mb-4">"One of my customers told me they googled 'laundromat next to [competitor's name]' expecting to find the place right down the street, but my business popped up first! Since working with Christopher, my laundromat has been busier than ever — more walk-ins, more repeat customers, and way more revenue. SEO really works when it's done right."</p>
              <h5 class="fw-bold text-primary mb-0">Arthur</h5>
              <p class="text-muted fs-6 mb-0">Laundromat Owner, Pensacola</p>
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" data-bs-interval="7500">
          <div class="card border-0 shadow-lg mx-auto bg-white" style="max-width: 800px;">
            <div class="card-body p-5 text-center d-flex flex-column align-items-center justify-content-center">
              <i class="bi bi-quote fs-1 text-primary mb-3"></i>
              <p class="lead fs-3 opacity-90 mb-4">"Chris has an innate ability to look at social media communities and engage. His creativity and wit are unique and his ability to craft industry-relevant posts that educate, entertain and engage is second to none. If you are looking for a community manager or social media content creator there are few better qualified and equipped with a natural talent for the work then Chris."</p>
              <h5 class="fw-bold text-primary mb-0">Dan Willis</h5>
              <p class="text-muted fs-6 mb-0">Equities analyst and qualitative fundamental strategist, Co-President Alertyfi</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls - Bigger clickable arrows with Bootstrap icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" style="font-size: 3rem; color: #000;">
        <span class="bi bi-chevron-left" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" style="font-size: 3rem; color: #000;">
        <span class="bi bi-chevron-right" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<style>
  /* Custom circle indicators */
  .carousel-indicators {
    bottom: -40px; /* Adjust position if needed */
  }
  .carousel-indicators [data-bs-target] {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: transparent;
    border: 2px solid #007bff; /* Circle outline */
    opacity: 1;
    margin: 0 8px;
  }
  .carousel-indicators .active {
    background-color: #007bff; /* Filled circle for active */
  }
</style>