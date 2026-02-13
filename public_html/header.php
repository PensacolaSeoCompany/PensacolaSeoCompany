<?php
/**
 * header.php - Main header include
 *
 * Includes:
 * 1. Navigation bar (includes/nav.php)
 * 2. Contact modal (includes/contact-modal.php)
 * 3. Structured data / JSON-LD (includes/schema.php)
 * 4. Analytics tracking scripts (includes/analytics.php)
 *
 * Usage: <?php include 'header.php'; ?>
 */

// Determine includes path (works from any directory depth)
$_includes_dir = $_SERVER['DOCUMENT_ROOT'] . '/includes';
?>

<?php include $_includes_dir . '/nav.php'; ?>
<?php include $_includes_dir . '/contact-modal.php'; ?>
<?php include $_includes_dir . '/schema.php'; ?>
<?php include $_includes_dir . '/analytics.php'; ?>
