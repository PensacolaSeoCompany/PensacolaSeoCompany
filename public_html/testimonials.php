<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials page showing off Christopher Simpson's Internet marketing work</title>
    <meta name="description" content="Page dedicated to testimonials written for Christopher Simpson's Internet marketing work.">
    <meta name="keywords" content="blog, seo blog">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="canonical" href="https://pensacolaseocompany.com/testimonials">
    <!-- Optional: Custom CSS for overrides -->
    <style>
        html {
            overflow-x: hidden !important;
        }
        body {
            background-color: #f8f9fa; /* Similar to bg-light */
            overflow-x: hidden !important;
            position: relative;
        }
        .stat-highlight {
            font-size: 2em;
            font-weight: bold;
            color: #fffff; /* Success green */
        }
        .before-after {
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 8px;
        }
        .pitch-card {
            background-color: #fffff;
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 30px;
            margin-top: 40px;
        }
        .cta-button {
            font-size: 1.2em;
            padding: 15px 30px;
        }
        .hover-opacity-75 { transition: opacity 0.3s ease; }
        .hover-opacity-75:hover { opacity: 0.75 !important; }
        .table tr:hover td { background-color: #f8f9fa !important; }
        .hover-shadow-lg { transition: box-shadow 0.3s ease; }
        .hover-shadow-lg:hover { box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important; }
        .stat-block {
            background-color: #e9ecef; /* Light gray background */
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }
        .stat-icon {
            font-size: 2em;
            color: #fffff; /* Green arrow */
        }
    </style>
</head>
    <?php include 'header.php'; ?>
    <?php include 'testimonials-carousel.php' ?>
    <div class="container my-5">
        <h1 class="text-center mb-5"><span class="stat-highlight">Testimonials Case Studies</span></h1>
        <p class="text-center" >Below are case studies connecting Testimonials. Ex. Arthur is the owner of the Local Laundromat in Pensacola</p>
        <!-- Single Block Row -->
        <div class="row mb-4 justify-content-center">
            <!-- Block 1 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><span class="stat-highlight">45% increase in Revenue</span></h5>
                        <p class="card-text">A case study on how we increased revenue by 45% for a local Laundromat</p>
                        <a href="pensacola-laundromat-case-study" class="btn btn-primary mt-auto">View Case Study</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'cta-banner.php';?>
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>