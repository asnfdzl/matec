<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: Contact Us</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Barlow%7CBarlow+Condensed:300,400,500,600,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>

<?php include 'layouts/loader.php' ?>

<div class="page">

    <?php include "layouts/navbar.php"; ?>

    <!-- Breadcrumbs-->
    <section class="section" style="background-image: url('images/bckhome.png'); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact</li>
            </ul>
            <h3 class="breadcrumbs-custom-title">Contact</h3>
        </div>
    </section>
    <!--Google Map
    <section class="section">-->
    <!--Please, add the data attribute data-key='YOUR_API_KEY' in order to insert your own API key for the Google map.-->
    <!--Please note that YOUR_API_KEY should replaced with your key.-->
    <!--Example: <div class='google-map-container' data-key='YOUR_API_KEY'>
    <div class="google-map-container" data-center="Central Park, New York, US" data-key="AIzaSyBUPsDPtyZG7EPBB2XDN55Rxt_fYUoc4Ak" data-zoom="15" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles='[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":60}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"lightness":30}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ef8c25"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#b6c54c"},{"lightness":40},{"saturation":-40}]},{}]'>
      <div class="google-map"></div>
      <ul class="google-map-markers">
        <li data-location="Central Park, New York, US" data-description="Central Park, New York, US"></li>
      </ul>
    </div>
  </section>-->
    <!--Mailform-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-xs-10 col-sm-9 col-md-6 col-lg-7 col-xl-8">
                    <h6>contact with us</h6>
                    <h3>Have question? Write a<br class="d-none d-xs-block"> message.
                    </h3>
                    <!--RD Mailform-->
                    <form class="rd-mailform rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="row row-10 row-narrow-xs">
                            <div class="col-lg-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-name">Your Name</label>
                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-email">Email Address</label>
                                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message">Write Message</label>
                                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-button">
                                    <button class="button button-lg button-primary" type="submit" data-triangle=".button-overlay"><span class="button-overlay"></span><span>Send Message</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-10 col-sm-9 col-md-6 col-lg-5 col-xl-4">
                    <div class="block-address">
                        <div class="block-address-item">
                            <h5 class="block-address-title">Address</h5>
                            <p class="block-address-text">Bukit Jalil, Kuala Lumpur<br class="d-none d-xs-block"></p>
                        </div>
                        <div class="block-address-item">
                            <h5 class="block-address-title">Phone</h5>
                            <p class="block-address-text"><span>En Razi:</span> <a href="tel:#">+6011 - 6648387</a><br><span>En Fizzi:</span> <a href="tel:#">+6010 - 5631270</a>
                            </p>
                        </div>
                        <div class="block-address-item">
                            <h5 class="block-address-title">Email</h5>
                            <p class="block-address-text"><a href="mailto:fakharadzi@mara.gov.my">fakharadzi@mara.gov.my</a><br><a href="mailto:msyafizzi@mara.gov.my">msyafizzi@mara.gov.my</a></p>
                        </div>
                        <div class="block-address-item">
                            <h5 class="block-address-title">Follow</h5>
                            <ul class="list-inline list-inline-xs">
                                <li><a class="icon icon-rect icon-xs icon-white fa-facebook" href="#" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div></a></li>
                                <li><a class="icon icon-rect icon-xs icon-white fa-twitter" href="#" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div></a></li>
                                <li><a class="icon icon-rect icon-xs icon-white fa-linkedin" href="#" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div></a></li>
                                <li><a class="icon icon-rect icon-xs icon-white fa-youtube-play" href="#" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "layouts/footer.php"; ?>

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

