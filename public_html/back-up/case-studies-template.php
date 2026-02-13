<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[page_title]</title>
    <meta name="description" content="[page_description]">
    <meta name="keywords" content="[page_keywords]">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="canonical" href="[canonical_url]">
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
<body class="bg-light">
    <?php include 'header.php'; ?>
    <div class="container my-5">
        <h1 class="text-center mb-5">[hub_title]</h1>
        <!-- Row 1 -->
        <div class="row mb-4">
            <!-- Block 1 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_1]" class="card-img-top" alt="[alt_1]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_1]</h5>
                        <p class="card-text">[desc_1]</p>
                        <a href="[button_link_1]" class="btn btn-primary mt-auto">[button_text_1]</a>
                    </div>
                </div>
            </div>
            <!-- Block 2 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_2]" class="card-img-top" alt="[alt_2]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_2]</h5>
                        <p class="card-text">[desc_2]</p>
                        <a href="[button_link_2]" class="btn btn-primary mt-auto">[button_text_2]</a>
                    </div>
                </div>
            </div>
            <!-- Block 3 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_3]" class="card-img-top" alt="[alt_3]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_3]</h5>
                        <p class="card-text">[desc_3]</p>
                        <a href="[button_link_3]" class="btn btn-primary mt-auto">[button_text_3]</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 2 -->
        <div class="row mb-4">
            <!-- Block 4 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_4]" class="card-img-top" alt="[alt_4]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_4]</h5>
                        <p class="card-text">[desc_4]</p>
                        <a href="[button_link_4]" class="btn btn-primary mt-auto">[button_text_4]</a>
                    </div>
                </div>
            </div>
            <!-- Block 5 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_5]" class="card-img-top" alt="[alt_5]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_5]</h5>
                        <p class="card-text">[desc_5]</p>
                        <a href="[button_link_5]" class="btn btn-primary mt-auto">[button_text_5]</a>
                    </div>
                </div>
            </div>
            <!-- Block 6 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_6]" class="card-img-top" alt="[alt_6]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_6]</h5>
                        <p class="card-text">[desc_6]</p>
                        <a href="[button_link_6]" class="btn btn-primary mt-auto">[button_text_6]</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 3 -->
        <div class="row mb-4">
            <!-- Block 7 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_7]" class="card-img-top" alt="[alt_7]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_7]</h5>
                        <p class="card-text">[desc_7]</p>
                        <a href="[button_link_7]" class="btn btn-primary mt-auto">[button_text_7]</a>
                    </div>
                </div>
            </div>
            <!-- Block 8 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_8]" class="card-img-top" alt="[alt_8]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_8]</h5>
                        <p class="card-text">[desc_8]</p>
                        <a href="[button_link_8]" class="btn btn-primary mt-auto">[button_text_8]</a>
                    </div>
                </div>
            </div>
            <!-- Block 9 -->
            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <img src="[image_9]" class="card-img-top" alt="[alt_9]" loading="lazy">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">[title_9]</h5>
                        <p class="card-text">[desc_9]</p>
                        <a href="[button_link_9]" class="btn btn-primary mt-auto">[button_text_9]</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>