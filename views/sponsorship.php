<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: Sponsorship</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= asset('images/logo.png') ?>" type="image/x-icon">

    <?php require 'layouts/__css.php' ?>

    <style>
        .ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}


        .sponsor-ritmo {
            margin-bottom: 30px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
            position: relative; /* Ensure position for overlay text */
            background-color: rgba(255, 31, 31, 0.6); /* Set background color with opacity */
            color: #333; /* Set text color to dark gray */
        }

        .sponsor-ritmo:hover {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .sponsor-ritmo-header {
            display: block;
            position: relative;
            color: inherit; /* Inherit text color from parent */
            text-decoration: none; /* Remove underline from anchor */
        }
        .sponsor-ritmo-img {
            position: relative;
            overflow: hidden;
        }
        .sponsor-ritmo-img img {
            display: block;
            width: 100%; /* Ensure image fills container */
            height: auto; /* Maintain aspect ratio */
            transition: transform 0.3s ease;
        }
        .sponsor-ritmo-img img:hover {
            transform: scale(1.1);
        }
        .sponsor-ritmo-title {
            margin-top: 10px; /* Add space between title and body text */
            font-size: 18px; /* Adjust font size as needed */
        }
        .sponsor-ritmo-text {
            font-size: 16px;
            font-weight: bold; /* Make the text bold */
            color: #ffffff;
        }
        .sponsor-ritmo-label {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .sponsor-ritmo:hover .sponsor-ritmo-label {
            opacity: 1;
        }
        .gallery-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            z-index: 9999;
            text-align: center;
            padding: 20px;
        }
        .gallery-container img {
            max-width: 90%;
            max-height: 90%;
            margin: auto;
            display: block;
        }
        .close-button {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <?php include 'layouts/loader.php' ?>

    <div class="page">

        <?php include "layouts/navbar.php"; ?>

        <!-- Breadcrumbs-->
        <section class="section" style="background-image: url(<?= asset('images/bckhome.png') ?>); background-size: cover; background-position: center;">
            <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active">Sponsorship</li>
                </ul>
                <h3 class="breadcrumbs-custom-title">Sponsorship</h3>
            </div>
        </section>

        <!-- Section Sponsor Space-->
        <section class="section section-lg bg-default text-center">
            <div class="container">
                <div class="block-about">
                    <div class="block-about-content">
                        <h6>where will the sponsor be</h6>
                        <h3 class="block-about-title">SPONSORS SPACES</h3>
                    </div><img class="block-about-img wow fadeScale" src="<?= asset('images/mara.jpg') ?>" alt="" width="830" height="440"/>
                </div>
            </div>
        </section>

        <style>
        </style>
    </div>

    <!-- Section Gold Sponsors-->
    <section class="section" style="background-image: url(<?= asset('images/bckhome.png') ?>); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
            <div class="container">
                <h4>MATEC 2024 SPONSORSHIP PACKAGE</h4>
                <div class="row row-30 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <!-- Sponsor Modern-->
                        <div class="sponsor-ritmo">
                            <a class="sponsor-ritmo-header" href="javascript:void(0);" data-triangle=".sponsor-ritmo-overlay" onclick="return false;">
                                <div class="sponsor-ritmo-overlay"></div>
                                <div class="sponsor-ritmo-img">
                                    <div class="sponsor-ritmo-img-default">
                                        <img src="<?= asset('images/mara1.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara1.jpg') ?>"/>
                                    </div>
                                    <div class="sponsor-ritmo-img-active">
                                        <img src="<?= asset('images/mara1.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara1.jpg') ?>"/>
                                    </div>
                                </div>
                                <div class="sponsor-ritmo-label">Click on the image to view</div>
                            </a>
                            <div class="sponsor-ritmo-body">
                                <h5 class="sponsor-ritmo-title"><span class="big">TITLE SPONSORS PACKAGES</span></h5>
                                <p class="sponsor-ritmo-text">VALUE OF RM 300,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Sponsor Modern-->
                        <div class="sponsor-ritmo">
                            <a class="sponsor-ritmo-header" href="javascript:void(0);" data-triangle=".sponsor-ritmo-overlay" onclick="return false;">
                                <div class="sponsor-ritmo-overlay"></div>
                                <div class="sponsor-ritmo-img">
                                    <div class="sponsor-ritmo-img-default">
                                        <img src="<?= asset('images/mara2.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara2.jpg') ?>"/>
                                    </div>
                                    <div class="sponsor-ritmo-img-active">
                                        <img src="<?= asset('images/mara2.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara2.jpg') ?>"/>
                                    </div>
                                </div>
                                <div class="sponsor-ritmo-label">Click on the image to view</div>
                            </a>
                            <div class="sponsor-ritmo-body">
                                <h5 class="sponsor-ritmo-title"><span class="big">PREMIER PARTNERS PACKAGES</span></h5>
                                <p class="sponsor-ritmo-text">VALUE OF RM 100,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Sponsor Modern-->
                        <div class="sponsor-ritmo">
                            <a class="sponsor-ritmo-header" href="javascript:void(0);" data-triangle=".sponsor-ritmo-overlay" onclick="return false;">
                                <div class="sponsor-ritmo-overlay"></div>
                                <div class="sponsor-ritmo-img">
                                    <div class="sponsor-ritmo-img-default">
                                        <img src="<?= asset('images/mara3.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara3.jpg') ?>"/>
                                    </div>
                                    <div class="sponsor-ritmo-img-active">
                                        <img src="<?= asset('images/mara3.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara3.jpg') ?>"/>
                                    </div>
                                </div>
                                <div class="sponsor-ritmo-label">Click on the image to view</div>
                            </a>
                            <div class="sponsor-ritmo-body">
                                <h5 class="sponsor-ritmo-title"><span class="big">MATEC EXPERT PACKAGES</span></h5>
                                <p class="sponsor-ritmo-text">VALUE OF RM 70,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Sponsor Modern-->
                        <div class="sponsor-ritmo">
                            <a class="sponsor-ritmo-header" href="javascript:void(0);" data-triangle=".sponsor-ritmo-overlay" onclick="return false;">
                                <div class="sponsor-ritmo-overlay"></div>
                                <div class="sponsor-ritmo-img">
                                    <div class="sponsor-ritmo-img-default">
                                        <img src="<?= asset('images/mara4.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara4.jpg') ?>"/>
                                    </div>
                                    <div class="sponsor-ritmo-img-active">
                                        <img src="<?= asset('images/mara4.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara4.jpg') ?>"/>
                                    </div>
                                </div>
                                <div class="sponsor-ritmo-label">Click on the image to view</div>
                            </a>
                            <div class="sponsor-ritmo-body">
                                <h5 class="sponsor-ritmo-title"><span class="big">MATEC PROFICIENT PACKAGES</span></h5>
                                <p class="sponsor-ritmo-text">VALUE OF RM 50,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- Sponsor Modern-->
                        <div class="sponsor-ritmo">
                            <a class="sponsor-ritmo-header" href="javascript:void(0);" data-triangle=".sponsor-ritmo-overlay" onclick="return false;">
                                <div class="sponsor-ritmo-overlay"></div>
                                <div class="sponsor-ritmo-img">
                                    <div class="sponsor-ritmo-img-default">
                                        <img src="<?= asset('images/mara5.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara5.jpg') ?>"/>
                                    </div>
                                    <div class="sponsor-ritmo-img-active">
                                        <img src="<?= asset('images/mara5.jpg') ?>" alt="FastLane" width="234" height="140" data-full-image="<?= asset('images/mara5.jpg') ?>"/>
                                    </div>
                                </div>
                                <div class="sponsor-ritmo-label">Click on the image to view</div>
                            </a>
                            <div class="sponsor-ritmo-body">
                                <h5 class="sponsor-ritmo-title"><span class="big">MATEC ADVANCE PACKAGES</span></h5>
                                <p class="sponsor-ritmo-text">VALUE OF RM 20,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Gallery Container for Full-Size Images -->
    <div class="gallery-container" id="galleryContainer">
        <span class="close-button" onclick="closeGallery()">&times;</span>
        <img id="fullImage" src="" alt="Full Size Image">
    </div>

    <script>
        // JavaScript for showing full-size images on click
        document.addEventListener('DOMContentLoaded', function() {
            const sponsorImages = document.querySelectorAll('.sponsor-ritmo-img img');

            sponsorImages.forEach(img => {
                img.addEventListener('click', function() {
                    const fullImageSrc = this.getAttribute('data-full-image');
                    if (fullImageSrc) {
                        document.getElementById('fullImage').src = fullImageSrc;
                        document.getElementById('galleryContainer').style.display = 'block';
                    }
                });
            });
        });

        // Function to close the gallery container
        function closeGallery() {
            document.getElementById('galleryContainer').style.display = 'none';
        }
    </script>

    <?php include "layouts/footer.php"; ?>

    <?php require "layouts/__js.php" ?>

</body>
</html>