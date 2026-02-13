<?php
/**
 * schema.php - JSON-LD structured data template
 *
 * Outputs Organization + LocalBusiness + Service catalog schema.
 * Can accept optional variables for page-specific overrides:
 *   $schema_page_name  - WebPage name
 *   $schema_page_desc  - WebPage description
 *   $schema_page_url   - WebPage URL
 *
 * Usage: include 'includes/schema.php';
 */

$schema_site_url = 'https://pensacolaseocompany.com';
$schema_site_name = 'Pensacola SEO Company';
?>

<!-- ===== STRUCTURED DATA (JSON-LD) ===== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "<?php echo $schema_site_url; ?>/#organization",
      "mainEntityOfPage": "https://www.google.com/search?q=Pensacola+SEO+Company",
      "name": "<?php echo $schema_site_name; ?>",
      "identifier": [
        "https://www.google.com/search?q=Pensacola+SEO+Company+Search+Engine+Optimization",
        "https://www.google.com/search?q=Pensacola+SEO+Company+Local+SEO"
      ],
      "alternateName": [
        "Pensacola SEO Agency",
        "Pensacola Local SEO Company"
      ],
      "description": "Pensacola SEO Company is a locally owned SEO agency dedicated to helping businesses in Pensacola and Northwest Florida dominate Google search results. Specializing in comprehensive SEO strategies, local SEO, monthly SEO packages, and industry-specific optimization for sectors like laundromats, dentists, lawyers, accountants, and auto repair shops.",
      "url": "<?php echo $schema_site_url; ?>/",
      "logo": "",
      "additionalType": [
        "https://en.wikipedia.org/wiki/Internet_marketing",
        "http://productontology.org/id/Internet_marketing",
        "https://en.wikipedia.org/wiki/Web_design",
        "http://productontology.org/id/Web_design",
        "https://en.wikipedia.org/wiki/Digital_marketing",
        "http://productontology.org/id/Digital_marketing",
        "https://en.wikipedia.org/wiki/Search_engine_optimization",
        "http://productontology.org/id/Search_engine_optimization",
        "https://en.wikipedia.org/wiki/Marketing_agency",
        "http://productontology.org/id/Marketing_agency",
        "https://en.wikipedia.org/wiki/Social_media_marketing",
        "http://productontology.org/id/Social_media_marketing"
      ],
      "founder": [
        {
          "@type": "Person",
          "name": "Christopher Simpson",
          "givenName": "Christopher",
          "familyName": "Simpson",
          "jobTitle": "Owner",
          "alternateName": "Christopher Simpson SEO Professional",
          "description": "Founder & Head SEO Consultant at Pensacola SEO Company, a Pensacola native committed to helping local businesses thrive through targeted SEO strategies.",
          "image": "<?php echo $schema_site_url; ?>/images/christopher-simpson-seo-consultant.jpg",
          "email": "pensacolaseocompany@gmail.com",
          "url": "<?php echo $schema_site_url; ?>/",
          "worksFor": "<?php echo $schema_site_url; ?>/",
          "workLocation": "<?php echo $schema_site_url; ?>/",
          "gender": "Male",
          "knowsLanguage": "en",
          "knowsAbout": [
            {
              "@type": "Thing",
              "name": "Internet Marketing Service",
              "description": "Pensacola SEO Company specializes in comprehensive Internet Marketing Services.",
              "sameAs": ["https://en.wikipedia.org/wiki/Internet_marketing"]
            },
            {
              "@type": "Thing",
              "name": "Web Design",
              "description": "Custom web design solutions that blend aesthetics and functionality.",
              "sameAs": ["https://en.wikipedia.org/wiki/Web_design"]
            },
            {
              "@type": "Thing",
              "name": "SEO - Search Engine Optimization",
              "description": "Advanced SEO services designed to improve search engine rankings and drive organic traffic.",
              "sameAs": ["https://en.wikipedia.org/wiki/Search_engine_optimization"]
            },
            {
              "@type": "Thing",
              "name": "Social Media Marketing",
              "description": "Social media marketing services to amplify online presence.",
              "sameAs": ["https://en.wikipedia.org/wiki/Social_media_marketing"]
            }
          ]
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Pensacola SEO Company Services",
        "@id": "<?php echo $schema_site_url; ?>/",
        "url": "<?php echo $schema_site_url; ?>/",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": [
              {
                "@type": "Service",
                "name": "SEO Services",
                "@id": "<?php echo $schema_site_url; ?>/seo-services",
                "url": "<?php echo $schema_site_url; ?>/seo-services",
                "description": "Comprehensive SEO strategies to boost your site's visibility, optimize on-page elements, and drive organic traffic for long-term growth."
              },
              {
                "@type": "Service",
                "name": "Local SEO",
                "@id": "<?php echo $schema_site_url; ?>/local-seo",
                "url": "<?php echo $schema_site_url; ?>/local-seo",
                "description": "Targeted local search optimization to get your business in front of Pensacola customers, including Google Business Profile mastery and map pack rankings."
              },
              {
                "@type": "Service",
                "name": "Monthly SEO",
                "@id": "<?php echo $schema_site_url; ?>/monthly-seo",
                "url": "<?php echo $schema_site_url; ?>/monthly-seo",
                "description": "Ongoing monthly SEO packages for consistent results, including content updates, link building, and performance tracking."
              },
              {
                "@type": "Service",
                "name": "SEO Audits",
                "@id": "<?php echo $schema_site_url; ?>/seo-audits",
                "url": "<?php echo $schema_site_url; ?>/seo-audits",
                "description": "In-depth SEO audits that uncover every issue holding your site back, with a clear action plan for improvement."
              },
              {
                "@type": "Service",
                "name": "Dentist SEO",
                "@id": "<?php echo $schema_site_url; ?>/seo-for-dentists",
                "url": "<?php echo $schema_site_url; ?>/seo-for-dentists",
                "description": "Specialized SEO services for dental practices to attract new patients through local search."
              },
              {
                "@type": "Service",
                "name": "Landscapers SEO",
                "@id": "<?php echo $schema_site_url; ?>/seo-for-landscapers",
                "url": "<?php echo $schema_site_url; ?>/seo-for-landscapers",
                "description": "SEO solutions for landscaping businesses to increase local visibility and generate leads."
              },
              {
                "@type": "Service",
                "name": "Laundromats SEO",
                "@id": "<?php echo $schema_site_url; ?>/seo-for-laundromats",
                "url": "<?php echo $schema_site_url; ?>/seo-for-laundromats",
                "description": "Targeted SEO for laundromats to rank for 'near me' searches and drive foot traffic."
              },
              {
                "@type": "Service",
                "name": "Web Design",
                "@id": "<?php echo $schema_site_url; ?>/web-design",
                "url": "<?php echo $schema_site_url; ?>/web-design",
                "description": "Custom, mobile-first web design for Pensacola businesses. Hand-coded websites optimized for speed, SEO, and conversions. Including e-commerce, landing pages, portfolio sites, and website redesigns."
              }
            ]
          }
        ]
      },
      "address": {
        "@type": "PostalAddress",
        "postalCode": "32561",
        "addressRegion": "Florida",
        "addressCountry": "United States",
        "streetAddress": "213 Russ Dr",
        "addressLocality": "Gulf Breeze"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Customer Service",
        "email": "pensacolaseocompany@gmail.com",
        "areaServed": [
          {"@type": "City", "name": "Pensacola", "sameAs": "https://en.wikipedia.org/wiki/Pensacola,_Florida"},
          {"@type": "City", "name": "Gulf Breeze", "sameAs": "https://en.wikipedia.org/wiki/Gulf_Breeze,_Florida"},
          {"@type": "City", "name": "Pace", "sameAs": "https://en.wikipedia.org/wiki/Pace,_Florida"},
          {"@type": "City", "name": "Milton", "sameAs": "https://en.wikipedia.org/wiki/Milton,_Florida"},
          {"@type": "City", "name": "Navarre", "sameAs": "https://en.wikipedia.org/wiki/Navarre,_Florida"},
          {"@type": "City", "name": "Perdido Key", "sameAs": "https://en.wikipedia.org/wiki/Perdido_Key,_Florida"},
          {"@type": "City", "name": "Pensacola Beach", "sameAs": "https://en.wikipedia.org/wiki/Pensacola_Beach,_Florida"},
          {"@type": "City", "name": "Ferry Pass", "sameAs": "https://en.wikipedia.org/wiki/Ferry_Pass,_Florida"},
          {"@type": "City", "name": "Warrington", "sameAs": "https://en.wikipedia.org/wiki/Warrington,_Florida"},
          {"@type": "City", "name": "Myrtle Grove", "sameAs": "https://en.wikipedia.org/wiki/Myrtle_Grove,_Florida"},
          {"@type": "City", "name": "Bellview", "sameAs": "https://en.wikipedia.org/wiki/Bellview,_Florida"},
          {"@type": "City", "name": "Ensley", "sameAs": "https://en.wikipedia.org/wiki/Ensley,_Florida"},
          {"@type": "City", "name": "Brent", "sameAs": "https://en.wikipedia.org/wiki/Brent,_Florida"}
        ]
      }
    },
    {
      "@type": "LocalBusiness",
      "@id": "<?php echo $schema_site_url; ?>/#localbusiness",
      "name": "<?php echo $schema_site_name; ?>",
      "description": "Locally owned SEO agency in Pensacola, FL helping businesses dominate Google search results.",
      "url": "<?php echo $schema_site_url; ?>/",
      "image": "<?php echo $schema_site_url; ?>/images/pensacola-seo-company-logo.png",
      "telephone": "+1-850-565-9154",
      "email": "pensacolaseocompany@gmail.com",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "213 Russ Dr",
        "addressLocality": "Gulf Breeze",
        "addressRegion": "FL",
        "postalCode": "32561",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "30.3569",
        "longitude": "-87.1638"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "09:00",
          "closes": "17:00"
        }
      ],
      "sameAs": [
        "https://x.com/PensacolaSearch",
        "https://youtube.com/@pensacolaseocompany",
        "https://www.linkedin.com/company/pensacolaseocompany",
        "https://www.instagram.com/pensacolaseocompany2025",
        "https://www.facebook.com/profile?id=61577900819893",
        "https://www.tiktok.com/@pensacolaseocompany"
      ]
    }
  ]
}
</script>
