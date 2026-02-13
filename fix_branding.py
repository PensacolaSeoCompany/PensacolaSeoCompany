#!/usr/bin/env python3
"""
Fix unbranded HTML articles in /root/test/pensacolaseocompany/public_html/articles/
Replaces placeholder branding with Pensacola SEO Company branding.
"""

import os
import glob
import re

ARTICLES_DIR = "/root/test/pensacolaseocompany/public_html/articles"

# Ordered replacements — more specific patterns first to avoid partial matches
REPLACEMENTS = [
    # URL replacements (specific before general)
    ("https://yoursite.com", "https://pensacolaseocompany.com"),
    ("http://yoursite.com", "https://pensacolaseocompany.com"),
    # Domain reference (non-URL contexts)
    ("yoursite.com", "pensacolaseocompany.com"),
    # Site name
    ("Your Site Name", "Pensacola SEO Company"),
    # Author
    ("Michael Torres", "Christopher Simpson"),
]


def fix_file(filepath):
    """Apply all branding replacements to a single file. Returns dict of counts."""
    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()

    original = content
    counts = {}

    for old, new in REPLACEMENTS:
        occurrences = content.count(old)
        if occurrences > 0:
            content = content.replace(old, new)
            counts[f"{old} -> {new}"] = occurrences

    if content != original:
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)

    return counts


def main():
    html_files = sorted(glob.glob(os.path.join(ARTICLES_DIR, "*.html")))
    print(f"Found {len(html_files)} HTML files in {ARTICLES_DIR}\n")

    total_files_updated = 0
    total_replacements = 0
    global_counts = {}

    for filepath in html_files:
        filename = os.path.basename(filepath)
        counts = fix_file(filepath)

        if counts:
            total_files_updated += 1
            file_total = sum(counts.values())
            total_replacements += file_total
            print(f"  [{total_files_updated:2d}] {filename}")
            for replacement, count in counts.items():
                print(f"        {replacement} (x{count})")
                global_counts[replacement] = global_counts.get(replacement, 0) + count

    print(f"\n{'='*70}")
    print(f"SUMMARY")
    print(f"{'='*70}")
    print(f"Files scanned:  {len(html_files)}")
    print(f"Files updated:  {total_files_updated}")
    print(f"Total replacements: {total_replacements}")
    print(f"\nBreakdown by replacement:")
    for replacement, count in sorted(global_counts.items(), key=lambda x: -x[1]):
        print(f"  {replacement}: {count}")


if __name__ == "__main__":
    main()
