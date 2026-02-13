<?php
/**
 * blog-card.php - Reusable blog post card component
 *
 * Set these variables before including:
 *   $blog_title - Card heading text
 *   $blog_desc  - Card description/excerpt
 *   $blog_link  - URL for the "Read More" link
 *   $blog_icon  - Bootstrap icon name (without 'bi-' prefix), e.g. 'search'
 *   $blog_color - (optional) Icon color, defaults to coral
 *
 * Example:
 *   $blog_title = 'Top 5 Local SEO Tips';
 *   $blog_desc = 'Discover actionable strategies...';
 *   $blog_link = '/top-5-local-seo-tips';
 *   $blog_icon = 'search';
 *   include 'includes/blog-card.php';
 */

$blog_color = $blog_color ?? '#fd5353';
?>
<div class="col-lg-4 col-md-6">
  <div class="blog-card-clean">
    <div class="blog-card-icon" <?php if ($blog_color !== '#fd5353'): ?>style="color: <?php echo htmlspecialchars($blog_color); ?>;"<?php endif; ?>>
      <i class="bi bi-<?php echo htmlspecialchars($blog_icon); ?>"></i>
    </div>
    <div class="card-body">
      <h5><?php echo htmlspecialchars($blog_title); ?></h5>
      <p><?php echo $blog_desc; ?></p>
      <a href="<?php echo htmlspecialchars($blog_link); ?>" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</div>
<?php
// Reset optional variable for next inclusion
unset($blog_color);
?>
