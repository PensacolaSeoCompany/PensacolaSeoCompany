<?php
/**
 * SMTP & Contact Configuration for Pensacola SEO Company
 *
 * IMPORTANT: Update SMTP_PASSWORD before deploying to production.
 * This file lives OUTSIDE public_html so it is not web-accessible.
 */

// Hostinger SMTP settings (port 465 / SSL)
define('SMTP_HOST', 'smtp.hostinger.com');
define('SMTP_PORT', 465);
define('SMTP_USERNAME', 'contact@pensacolaseocompany.com');
define('SMTP_PASSWORD', 'CHANGE_ME_SMTP_PASSWORD'); // <-- UPDATE THIS with the real mailbox password
define('SMTP_FROM_EMAIL', 'contact@pensacolaseocompany.com');
define('SMTP_FROM_NAME', 'Pensacola SEO Company');
define('CONTACT_EMAIL', 'contact@pensacolaseocompany.com');
