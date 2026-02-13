<?php
/**
 * breadcrumbs.php - Simple breadcrumb navigation component
 *
 * Set this variable before including:
 *   $breadcrumbs - Array of associative arrays with 'label' and optional 'url' keys
 *                  The last item is rendered as active (no link).
 *
 * Example:
 *   $breadcrumbs = [
 *     ['label' => 'Home', 'url' => '/'],
 *     ['label' => 'Services', 'url' => '/seo-services'],
 *     ['label' => 'Local SEO']
 *   ];
 *   include 'includes/breadcrumbs.php';
 */
?>
<nav aria-label="breadcrumb" class="py-2">
  <ol class="breadcrumb mb-0">
    <?php foreach ($breadcrumbs as $i => $crumb): ?>
      <?php if (isset($crumb['url']) && $i < count($breadcrumbs) - 1): ?>
        <li class="breadcrumb-item"><a href="<?php echo htmlspecialchars($crumb['url']); ?>"><?php echo htmlspecialchars($crumb['label']); ?></a></li>
      <?php else: ?>
        <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($crumb['label']); ?></li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ol>
</nav>
