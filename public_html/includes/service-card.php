<?php
/**
 * service-card.php - Reusable service card component
 *
 * Set these variables before including:
 *   $service_icon  - Bootstrap icon name (without 'bi-' prefix), e.g. 'search'
 *   $service_title - Card heading text
 *   $service_desc  - Card description text
 *   $service_link  - URL for the "Learn More" link
 *
 * Example:
 *   $service_icon = 'search';
 *   $service_title = 'SEO';
 *   $service_desc = 'Comprehensive SEO strategies...';
 *   $service_link = '/seo-services';
 *   include 'includes/service-card.php';
 */
?>
<div class="col-lg-3 col-md-6">
  <div class="service-card">
    <div class="service-icon">
      <i class="bi bi-<?php echo htmlspecialchars($service_icon); ?>"></i>
    </div>
    <h3><?php echo htmlspecialchars($service_title); ?></h3>
    <p><?php echo $service_desc; ?></p>
    <a href="<?php echo htmlspecialchars($service_link); ?>" class="learn-more">Learn More <i class="bi bi-arrow-right"></i></a>
  </div>
</div>
