<?php
/**
 * analytics.php - Google tracking scripts
 *
 * Contains:
 * - Google Ads tag (AW-17426953510)
 * - Google Ads conversion tracking snippet
 * - Google Analytics 4 tag (G-11M5ZXP159)
 *
 * Usage: include 'includes/analytics.php';
 * Place before </body> or in header.php after the nav
 */
?>

<!-- Google tag (gtag.js) - Google Ads -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17426953510"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-17426953510');
</script>

<!-- Event snippet for Contact conversion page -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-17426953510/DkJyCLH-uo8bEKbq6PVA',
      'event_callback': callback
  });
  return false;
}
</script>

<!-- Google tag (gtag.js) - GA4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-11M5ZXP159"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-11M5ZXP159');
</script>
