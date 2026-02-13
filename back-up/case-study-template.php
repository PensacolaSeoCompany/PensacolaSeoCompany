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
        <!-- Introduction Stats -->
        <section class="text-center mb-5">
            <h1 class="mb-4"><span class="stat-highlight">[case_study_heading]</span></h1>
            <p class="lead mb-4">We took this client from <span class="stat-highlight">[initial_monthly_revenue]</span> / month to <span class="stat-highlight">[final_monthly_revenue]</span> / month</p>
            <p>We achieved this <span class="stat-highlight">[time_period]</span></p>
            <p>That's <span class="stat-highlight">[revenue_multiplier]x</span> in revenue</p>
            <!-- Four Stat Blocks -->
            <div class="row g-4 mb-4 overflow-hidden">
                <!-- Revenue Before -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="stat-block">
                        <h4 class="mb-3">[revenue_before_heading]</h4>
                        <i class="bi bi-x-circle-fill stat-icon mb-3"></i>
                        <p><span class="stat-highlight">[revenue_before_amount]</span></p>
                    </div>
                </div>
                <!-- Revenue After -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="stat-block">
                        <h4 class="mb-3">[revenue_after_heading]</h4>
                        <i class="bi bi-arrow-up-circle-fill stat-icon mb-3"></i>
                        <p><span class="stat-highlight">[revenue_after_amount]</span></p>
                    </div>
                </div>
                <!-- Revenue Growth -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="stat-block">
                        <h4 class="mb-3">[revenue_growth_heading]</h4>
                        <i class="bi bi-arrow-up-circle-fill stat-icon mb-3"></i>
                        <p><span class="stat-highlight">[revenue_growth_percentage]</span></p>
                    </div>
                </div>
                <!-- ROI on Investment -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="stat-block">
                        <h4 class="mb-3">[roi_heading]</h4>
                        <i class="bi bi-arrow-up-circle-fill stat-icon mb-3"></i>
                        <p><span class="stat-highlight">[roi_percentage]</span></p>
                    </div>
                </div>
            </div>
            <!-- Disclaimer Tag Line -->
            <p>[annual_perspective_intro]</p>
            <p>We took them from <span class="stat-highlight">[initial_annual_revenue]</span> to <span class="stat-highlight">[final_annual_revenue]</span> annually[annual_disclaimer]</p>
        </section>
        <!-- Google Photos -->
        <!-- Process Description -->
        <section class="mb-5">
            <h2 class="border-bottom pb-2">[approach_heading]</h2>
            <p>[approach_description_1]</p>
            <p>[approach_description_2]</p>
        </section>
        <!-- What We Did -->
        <section class="mb-5">
            <h2 class="border-bottom pb-2">[actions_heading]</h2>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_1]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_2]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_3]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_4]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_5]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_6]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_7]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_8]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_9]</li>
                <li><i class="bi bi-check-circle-fill text-success me-2"></i>[action_10]</li>
                <!-- Add more actions as needed -->
            </ul>
        </section>
        <!-- Position Improvements -->
        <section class="mb-5">
            <h2 class="border-bottom pb-2">[ranking_heading]</h2>
            <p>[initial_position_description]</p>
            <p>[position_explanation]</p>
            <p>[final_position_description]</p>
            <br>
            <div class="row g-3 mb-3 overflow-hidden">
                <!-- Revenue Before -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="stat-block">
                        <h4 class="mb-3">[initial_clicks_heading]</h4>
                        <i class="bi bi-x-circle-fill stat-icon mb-3"></i>
                        <p><span class="stat-highlight">[initial_clicks]</span></p>
                    </div>
                </div>
                <!-- Revenue After -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="stat-block">
                        <h4 class="mb-3">[final_clicks_heading]</h4>
                        <i class="bi bi-arrow-up-circle-fill stat-icon mb-3"></i>
                        <p><span class="stat-highlight">[final_clicks]</span></p>
                    </div>
                </div>
                <!-- Revenue Growth -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="stat-block">
                        <h4 class="mb-3">[clicks_increase_heading]</h4>
                        <i class="bi bi-arrow-up-circle-fill stat-icon mb-3"></i>
                        <p><span class="stat-highlight">[clicks_increase_percentage]</span></p>
                    </div>
                </div>
                <!-- ROI on Investment -->
            </div>
            <p><span class="stat-highlight">[initial_performance_heading]</span></p>
            <img src="[initial_performance_image]" alt="[initial_performance_alt]" class="img-fluid rounded shadow mb-3 hover-opacity-75 hover-shadow-lg" loading="lazy">
            <p><span class="stat-highlight">[final_performance_heading]</span></p>
            <img src="[final_performance_image]" alt="[final_performance_alt]" class="img-fluid rounded shadow mb-3 hover-opacity-75 hover-shadow-lg" loading="lazy">
        </section>
        <!-- Benefits Section -->
<p class="text-muted text-center">[disclaimer_text]</p>
        <!-- Pitch Section -->
        <div class="pitch-card text-center">
            <h2 class="mb-4">[pitch_heading]</h2>
            <p><strong>[spots_message]</strong></p>
            <p>[form_intro]</p>
            <?php include'form.php';?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>