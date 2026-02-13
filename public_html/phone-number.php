<?php
/**
 * Anti-scrape phone number component for (850) 565-9154
 *
 * Protection layers:
 * 1. CSS direction: rtl + unicode-bidi: bidi-override — digits are reversed in HTML
 *    so scrapers read "4519-565 )058(" but browsers render "(850) 565-9154"
 * 2. HTML entity encoding — some digits use &#entities; to break regex parsers
 * 3. aria-label — screen readers get the correct label for accessibility
 * 4. tel: href — clickable for mobile users (standard protocol, not scrapable as text)
 *
 * Usage: <?php include 'phone-number.php'; ?>
 */
?>
<a href="tel:+18505659154" class="phone-link" aria-label="Call Pensacola SEO Company at 8 5 0, 5 6 5, 9 1 5 4">
  <i class="bi bi-telephone-fill me-2"></i><span class="phone-number-rtl" style="direction: rtl; unicode-bidi: bidi-override; display: inline-block;">&#52;5&#49;9-56&#53; )0&#53;8(</span>
</a>
