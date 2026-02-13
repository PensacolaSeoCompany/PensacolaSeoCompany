<?php
/**
 * stats-bar.php - Trust/stats bar component
 *
 * Displays 4 key metrics in a horizontal bar.
 * Can accept an optional $stats_bg variable for background class (default 'bg-white').
 *
 * Usage: include 'includes/stats-bar.php';
 */

$stats_bg = $stats_bg ?? 'bg-white';
?>

<!-- ===== TRUST BAR ===== -->
<section class="trust-bar <?php echo htmlspecialchars($stats_bg); ?>">
  <div class="container">
    <div class="row g-3 justify-content-center">
      <div class="col-6 col-md-3">
        <div class="trust-item">
          <div class="trust-number">5+</div>
          <div class="trust-label">Years Experience</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="trust-item">
          <div class="trust-number">50+</div>
          <div class="trust-label">Clients Served</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="trust-item">
          <div class="trust-number">5-Star</div>
          <div class="trust-label">Client Rated</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="trust-item">
          <div class="trust-number"><i class="bi bi-patch-check-fill"></i></div>
          <div class="trust-label">Google Certified</div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php unset($stats_bg); ?>
