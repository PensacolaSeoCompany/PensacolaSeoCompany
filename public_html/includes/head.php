<?php
/**
 * head.php - Reusable <head> section template
 *
 * Usage: Set these variables before including this file:
 *   $page_title       - Page title (falls back to default)
 *   $page_description - Meta description (falls back to default)
 *   $page_url         - Canonical URL (falls back to site root)
 *   $page_type        - OG type (default 'website')
 *   $page_image       - OG image URL (falls back to logo)
 *
 * Example:
 *   $page_title = 'Local SEO Services | Pensacola SEO Company';
 *   $page_description = 'Dominate local search with our Pensacola SEO services.';
 *   $page_url = 'https://pensacolaseocompany.com/local-seo';
 *   include 'includes/head.php';
 */

$site_name = 'Pensacola SEO Company';
$site_url = 'https://pensacolaseocompany.com';
$default_title = 'Pensacola SEO Company | Expert SEO Services in Pensacola, FL';
$default_desc = 'Professional SEO services in Pensacola, FL. Local SEO, monthly SEO packages, web design, and SEO audits to grow your business online.';
$default_image = $site_url . '/images/pensacola-seo-company-logo.png';

$title = $page_title ?? $default_title;
$description = $page_description ?? $default_desc;
$url = $page_url ?? $site_url;
$type = $page_type ?? 'website';
$image = $page_image ?? $default_image;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($url); ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($url); ?>">
    <meta property="og:type" content="<?php echo htmlspecialchars($type); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($site_name); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($image); ?>">

    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Site Styles -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">
</head>
