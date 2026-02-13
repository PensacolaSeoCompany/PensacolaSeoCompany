#!/usr/bin/env python3
"""
Generate sitemap.xml and update sitemap.php for pensacolaseocompany.com
Scans public_html/ and articles/ for .php pages, categorizes them,
extracts titles from <title> tags, and outputs a proper XML sitemap
plus an HTML sitemap page.
"""

import os
import re
from datetime import date

BASE_URL = "https://pensacolaseocompany.com"
PUBLIC_HTML = "/root/test/pensacolaseocompany/public_html"
TODAY = "2026-02-13"

# Files to exclude (components, includes, test files, backups, etc.)
EXCLUDE_FILES = {
    # Component/include files
    "header.php",
    "footer.php",
    "form.php",
    "cta-banner.php",
    "case-studies-banner.php",
    "testimonials-carousel.php",
    "author-card.php",
    "author-card-small.php",
    "author-card-small-light.php",
    "how-we-help-accordion.php",
    "seo-services-block.php",
    "recent-blog-grid-seo.php",
    "owner-headshot-50.php",
    "why-trust-chris.php",
    "contact.php",           # POST handler, not a page
    "thank-you.php",
    "sitemap.php",           # HTML sitemap (separate from XML)
    # Section includes (no DOCTYPE / not standalone pages)
    "core-seo-services.php",
    "complete-seo-process.php",
    "industry-specific-seo.php",
    "free-site-audit.php",
    # Test files
    "test.php",
    "test2.php",
    "test3.php",
    "test4.php",
    "test-page.php",
    "test-client.html",
    "test.html",
    "grok.php",
    "default.php",
    "local-seo-test.php",
    # Backup / duplicate files
    "seo-services-back-up.php",
    "seo-for-dentists(1).php",
    "laundromat-gmb-seo-case-study(1).php",
    # Case study templates (not standalone pages)
    "case-studies-template.php",
    "case-study-template.php",
    # Appointment form (handler, not a page)
    "appointment-form.php",
    # Laundry duplicates / old versions
    "Laundry.php",
    "laundry2.php",
}

# Exclude patterns (regex) - applied to filename
EXCLUDE_PATTERNS = [
    r"^test[\d.-]",     # test.php, test2.php, test-page.php, test-client.html (but NOT testimonials.php)
    r"back-up",         # *back-up*.php
    r"\(1\)",           # *(1).php
]

# Service pages (priority 0.9)
SERVICE_PAGES = {
    "seo-services",
    "local-seo",
    "monthly-seo",
    "seo-audits",
    "seo-for-dentists",
    "seo-for-landscapers",
}

# Location pages (priority 0.8) - end with -seo
LOCATION_PATTERN = re.compile(r"^(gulf-breeze|pace|milton|perdido-key|pensacola-beach|navarre|ferry-pass|warrington|myrtle-grove|bellview|ensley|brent|pensacola)-seo$")

# Main/structural pages (priority 0.8 for key pages, 0.6 for misc)
MAIN_PAGES = {
    "about": 0.8,
    "blog": 0.8,
    "contact-page": 0.7,
    "case-studies": 0.7,
    "testimonials": 0.7,
    "social-media-posts": 0.6,
    "privacy-policy": 0.5,
    "terms-of-service": 0.5,
}

# Fallback titles for pages where <title> extraction fails
FALLBACK_TITLES = {
    "index": "Home",
    "seo-services": "SEO Services",
    "local-seo": "Local SEO",
    "monthly-seo": "Monthly SEO Plans",
    "seo-audits": "SEO Audits",
    "seo-for-dentists": "SEO for Dentists",
    "seo-for-landscapers": "SEO for Landscapers",
    "about": "About",
    "blog": "Blog",
    "contact-page": "Contact",
    "case-studies": "Case Studies",
    "testimonials": "Testimonials",
    "social-media-posts": "Social Media Posts",
    "privacy-policy": "Privacy Policy",
    "terms-of-service": "Terms of Service",
    "pensacola-seo": "Pensacola SEO",
    "gulf-breeze-seo": "Gulf Breeze SEO",
    "pace-seo": "Pace SEO",
    "milton-seo": "Milton SEO",
    "perdido-key-seo": "Perdido Key SEO",
    "pensacola-beach-seo": "Pensacola Beach SEO",
    "navarre-seo": "Navarre SEO",
    "ferry-pass-seo": "Ferry Pass SEO",
    "warrington-seo": "Warrington SEO",
    "myrtle-grove-seo": "Myrtle Grove SEO",
    "bellview-seo": "Bellview SEO",
    "ensley-seo": "Ensley SEO",
    "brent-seo": "Brent SEO",
    "what_is_schema_ultimate-guide": "What Is Schema Markup: The Ultimate Guide",
    "best-laundromats-pensacola-2026": "Best Laundromats in Pensacola 2026",
    "laundromat-competition-12-ways-2026": "12 Ways to Beat Laundromat Competition in 2026",
    "laundromat-gmb-seo-case-study": "Laundromat GMB SEO Case Study",
    "pensacola-laundromat-case-study": "Pensacola Laundromat Case Study",
    "laundry": "Laundry SEO Services",
}


def extract_title(filepath):
    """Extract the <title> tag content from a PHP file."""
    try:
        with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
            # Read first 100 lines (title should be in <head>)
            content = ""
            for i, line in enumerate(f):
                content += line
                if i > 100:
                    break
        match = re.search(r"<title>\s*(.+?)\s*</title>", content, re.IGNORECASE | re.DOTALL)
        if match:
            title = match.group(1).strip()
            # Clean up: remove trailing " - Pensacola SEO Company" etc.
            title = re.sub(r"\s*[-|]\s*(Pensacola SEO Company|Pensacola SEO|SEO Company).*$", "", title, flags=re.IGNORECASE)
            # Remove trailing "..." or ellipsis
            title = re.sub(r"\.{2,}$", "", title).strip()
            # Remove trailing " -" or " |"
            title = re.sub(r"\s*[-|]\s*$", "", title).strip()
            if title:
                return title
    except Exception:
        pass
    return None


def slug_to_title(slug):
    """Convert a URL slug to a human-readable title (fallback when <title> not found)."""
    if slug in FALLBACK_TITLES:
        return FALLBACK_TITLES[slug]

    # Generic: replace hyphens with spaces, title case
    title = slug.replace("-", " ").replace("_", " ")
    # Fix common abbreviations
    title = title.replace("seo", "SEO").replace("Seo", "SEO")
    title = title.replace("google", "Google").replace("wordpress", "WordPress")
    title = title.replace("ifttt", "IFTTT").replace("amp", "AMP")
    title = title.replace("faqs", "FAQs").replace("faq", "FAQ")
    title = title.replace("gmb", "GMB").replace("url", "URL")
    # Title case
    words = title.split()
    result = []
    for i, w in enumerate(words):
        if w.isupper() and len(w) > 1:
            result.append(w)  # Keep acronyms
        elif i == 0:
            result.append(w.capitalize())
        elif w.lower() in ("a", "an", "the", "for", "and", "or", "of", "in", "on", "to", "vs", "at"):
            result.append(w.lower())
        else:
            result.append(w.capitalize())
    return " ".join(result)


def should_exclude(filename):
    """Check if a file should be excluded from the sitemap."""
    if filename in EXCLUDE_FILES:
        return True
    for pattern in EXCLUDE_PATTERNS:
        if re.search(pattern, filename, re.IGNORECASE):
            return True
    return False


def categorize_page(slug, is_article=False):
    """Return (priority, changefreq) for a page."""
    if slug == "index":
        return 1.0, "weekly"
    if slug in SERVICE_PAGES:
        return 0.9, "weekly"
    if LOCATION_PATTERN.match(slug):
        return 0.8, "weekly"
    if slug in MAIN_PAGES:
        return MAIN_PAGES[slug], "weekly"
    if is_article:
        return 0.7, "monthly"
    # Blog/article content in root directory
    return 0.7, "monthly"


def get_category(slug, is_article):
    """Return a category string for grouping in HTML sitemap."""
    if slug == "index":
        return "main"
    if slug in SERVICE_PAGES:
        return "services"
    if LOCATION_PATTERN.match(slug):
        return "locations"
    if slug in MAIN_PAGES:
        return "main"
    if is_article:
        return "articles"
    return "blog"


def scan_pages():
    """Scan public_html for pages and return a list of page dicts."""
    pages = []

    # Scan root public_html
    for filename in sorted(os.listdir(PUBLIC_HTML)):
        if not filename.endswith(".php"):
            continue
        if should_exclude(filename):
            continue
        filepath = os.path.join(PUBLIC_HTML, filename)
        if not os.path.isfile(filepath):
            continue

        slug = filename[:-4]  # Remove .php
        if slug == "index":
            url = BASE_URL + "/"
        else:
            url = f"{BASE_URL}/{slug}"

        priority, changefreq = categorize_page(slug, is_article=False)

        # Try to extract title from the file
        title = extract_title(filepath)
        if not title:
            title = slug_to_title(slug)

        category = get_category(slug, False)

        pages.append({
            "url": url,
            "slug": slug,
            "title": title,
            "priority": priority,
            "changefreq": changefreq,
            "lastmod": TODAY,
            "is_article": False,
            "category": category,
        })

    # Scan articles/ subdirectory
    articles_dir = os.path.join(PUBLIC_HTML, "articles")
    if os.path.isdir(articles_dir):
        for filename in sorted(os.listdir(articles_dir)):
            if not filename.endswith(".php"):
                continue  # Exclude HTML files
            if should_exclude(filename):
                continue
            filepath = os.path.join(articles_dir, filename)
            if not os.path.isfile(filepath):
                continue

            slug = filename[:-4]
            url = f"{BASE_URL}/articles/{slug}"
            priority, changefreq = categorize_page(slug, is_article=True)

            title = extract_title(filepath)
            if not title:
                title = slug_to_title(slug)

            pages.append({
                "url": url,
                "slug": slug,
                "title": title,
                "priority": priority,
                "changefreq": changefreq,
                "lastmod": TODAY,
                "is_article": True,
                "category": "articles",
            })

    return pages


def generate_sitemap_xml(pages):
    """Generate sitemap.xml content."""
    lines = [
        '<?xml version="1.0" encoding="UTF-8"?>',
        '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">',
    ]

    # Sort: homepage first, then by priority desc, then alphabetically
    sorted_pages = sorted(pages, key=lambda p: (-p["priority"], p["url"]))

    for page in sorted_pages:
        lines.append("  <url>")
        lines.append(f"    <loc>{page['url']}</loc>")
        lines.append(f"    <lastmod>{page['lastmod']}</lastmod>")
        lines.append(f"    <changefreq>{page['changefreq']}</changefreq>")
        lines.append(f"    <priority>{page['priority']:.1f}</priority>")
        lines.append("  </url>")

    lines.append("</urlset>")
    return "\n".join(lines) + "\n"


def generate_sitemap_php(pages):
    """Generate the HTML sitemap (sitemap.php) content."""
    # Group pages by category
    main_pages = [p for p in pages if p["category"] == "main"]
    services = [p for p in pages if p["category"] == "services"]
    locations = [p for p in pages if p["category"] == "locations"]
    blog_posts = [p for p in pages if p["category"] == "blog"]
    articles = [p for p in pages if p["category"] == "articles"]

    # Sort each group
    main_pages.sort(key=lambda p: p["title"])
    services.sort(key=lambda p: p["title"])
    locations.sort(key=lambda p: p["title"])
    blog_posts.sort(key=lambda p: p["title"])
    articles.sort(key=lambda p: p["title"])

    # Put homepage first in main
    main_pages.sort(key=lambda p: (0 if p["slug"] == "index" else 1, p["title"]))

    def render_list(page_list):
        lines = []
        for p in page_list:
            lines.append(f'            <li><a href="{p["url"]}">{p["title"]}</a></li>')
        return "\n".join(lines)

    php = f"""<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sitemap - Pensacola SEO Company</title>
<link rel="canonical" href="https://pensacolaseocompany.com/sitemap">
<meta name="description" content="Complete sitemap of Pensacola SEO Company. Browse all our SEO service pages, location pages, blog posts, and articles.">
<meta name="robots" content="noindex">
<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
  .dropdown-menu {{
    max-height: 80vh;
    overflow-y: auto;
  }}
  @media (max-width: 991.98px) {{
    .navbar-collapse {{
      max-height: 80vh;
      overflow-y: auto;
      background-color: #000;
      padding: 1rem;
      border-radius: 8px;
      margin-top: 0.5rem;
    }}
  }}
  html, body {{
    overflow-x: hidden !important;
  }}
  .sitemap-section h3 {{
    border-bottom: 2px solid #0d6efd;
    padding-bottom: 0.5rem;
    margin-bottom: 1rem;
  }}
  .sitemap-section ul {{
    list-style: none;
    padding-left: 0;
  }}
  .sitemap-section ul li {{
    padding: 0.35rem 0;
    border-bottom: 1px solid #f0f0f0;
  }}
  .sitemap-section ul li a {{
    text-decoration: none;
    color: #333;
    transition: color 0.2s;
  }}
  .sitemap-section ul li a:hover {{
    color: #0d6efd;
  }}
  .sitemap-section ul li a::before {{
    content: "\\f285";
    font-family: "bootstrap-icons";
    margin-right: 0.5rem;
    font-size: 0.75rem;
    color: #0d6efd;
  }}
</style>
</head>
<body class="bg-light">
  <?php include 'header.php'; ?>
  <section class="py-5 bg-white">
    <div class="container">
      <h1 class="display-4 fw-bold text-primary text-center mb-3">Sitemap</h1>
      <p class="text-center text-muted mb-5 fs-5">All {len(pages)} pages on Pensacola SEO Company</p>

      <div class="row justify-content-center">
        <div class="col-lg-10">

          <!-- Main Pages -->
          <div class="sitemap-section mb-5">
            <h3 class="fw-bold text-dark fs-4"><i class="bi bi-house-door me-2"></i>Main Pages</h3>
            <ul class="fs-6 lh-lg">
{render_list(main_pages)}
            </ul>
          </div>

          <!-- SEO Services -->
          <div class="sitemap-section mb-5">
            <h3 class="fw-bold text-dark fs-4"><i class="bi bi-gear me-2"></i>SEO Services</h3>
            <ul class="fs-6 lh-lg">
{render_list(services)}
            </ul>
          </div>

          <!-- Location Pages -->
          <div class="sitemap-section mb-5">
            <h3 class="fw-bold text-dark fs-4"><i class="bi bi-geo-alt me-2"></i>Location Pages ({len(locations)})</h3>
            <ul class="fs-6 lh-lg">
{render_list(locations)}
            </ul>
          </div>

          <!-- Blog Posts -->
          <div class="sitemap-section mb-5">
            <h3 class="fw-bold text-dark fs-4"><i class="bi bi-journal-text me-2"></i>Blog Posts ({len(blog_posts)})</h3>
            <ul class="fs-6 lh-lg">
{render_list(blog_posts)}
            </ul>
          </div>

          <!-- Articles -->
          <div class="sitemap-section mb-5">
            <h3 class="fw-bold text-dark fs-4"><i class="bi bi-file-earmark-text me-2"></i>Articles ({len(articles)})</h3>
            <ul class="fs-6 lh-lg">
{render_list(articles)}
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include 'footer.php'; ?>
</body>
</html>
"""
    return php


def main():
    pages = scan_pages()

    # Generate and write sitemap.xml
    xml = generate_sitemap_xml(pages)
    xml_path = os.path.join(PUBLIC_HTML, "sitemap.xml")
    with open(xml_path, "w") as f:
        f.write(xml)
    print(f"Wrote {xml_path} with {len(pages)} URLs")

    # Generate and write sitemap.php
    php = generate_sitemap_php(pages)
    php_path = os.path.join(PUBLIC_HTML, "sitemap.php")
    with open(php_path, "w") as f:
        f.write(php)
    print(f"Wrote {php_path}")

    # Print summary by category
    cats = {}
    for p in pages:
        cats.setdefault(p["category"], []).append(p)

    print(f"\n=== Sitemap Summary ===")
    for cat in ["main", "services", "locations", "blog", "articles"]:
        if cat in cats:
            print(f"{cat:15s}: {len(cats[cat]):3d} pages")
    print(f"{'TOTAL':15s}: {len(pages):3d} pages")

    return pages


if __name__ == "__main__":
    main()
