<?php
/**
 * portfolio-card.php - Reusable portfolio card component
 *
 * Set these variables before including:
 *   $portfolio_name     - Business/project name
 *   $portfolio_desc     - Project description
 *   $portfolio_url      - Live site URL
 *   $portfolio_industry - Industry label, e.g. 'Roofing / Home Services'
 *   $portfolio_color    - Gradient start color (hex), e.g. '#dc3545'
 *   $portfolio_icon     - Bootstrap icon name (without 'bi-' prefix), e.g. 'house-heart'
 *
 * Example:
 *   $portfolio_name = 'Happy Shingle Designs';
 *   $portfolio_desc = 'Multi-page roofing contractor site...';
 *   $portfolio_url = 'https://happy-shingle-designs.pensacolaseocompany.com';
 *   $portfolio_industry = 'Roofing / Home Services';
 *   $portfolio_color = '#dc3545';
 *   $portfolio_icon = 'house-heart';
 *   include 'includes/portfolio-card.php';
 */
?>
<div class="col-lg-4 col-md-6">
  <div class="portfolio-preview-card">
    <div class="portfolio-preview-icon" style="background: linear-gradient(135deg, <?php echo htmlspecialchars($portfolio_color); ?>, <?php echo htmlspecialchars($portfolio_color); ?>cc);">
      <i class="bi bi-<?php echo htmlspecialchars($portfolio_icon); ?>"></i>
    </div>
    <div class="card-body">
      <span class="portfolio-industry-badge" style="color: <?php echo htmlspecialchars($portfolio_color); ?>;"><?php echo htmlspecialchars($portfolio_industry); ?></span>
      <h4><?php echo htmlspecialchars($portfolio_name); ?></h4>
      <p><?php echo $portfolio_desc; ?></p>
      <?php if (!empty($portfolio_url)): ?>
        <a href="<?php echo htmlspecialchars($portfolio_url); ?>" target="_blank" rel="noopener noreferrer" class="portfolio-link" style="color: <?php echo htmlspecialchars($portfolio_color); ?>;">
          View Project <i class="bi bi-arrow-right"></i>
        </a>
      <?php endif; ?>
    </div>
  </div>
</div>
