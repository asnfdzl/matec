<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: MATEC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Barlow%7CBarlow+Condensed:300,400,500,600,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}


    .full-width-slider {
        margin-top: 20px; /* Adjust spacing as needed */
        width: 80%; /* Adjust width as needed */
        max-width: 800px; /* Limit the maximum width of the slider */
        height: auto;
        overflow: hidden; /* Ensure the slider clips overflow */
        margin: 0 auto; /* Center the slider horizontally */
    }

    .full-width-slider .swiper-slide {
        width: 100%;
        height: auto;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .full-width-slider img {
        max-width: 100%; /* Ensure the image scales down proportionally */
        height: auto;
    }

    .full-width-slider .swiper-slide .slide-content {
        position: relative;
        background-color: #fff; /* White background color */
        padding: 20px; /* Adjust padding as needed */
        border-radius: 10px; /* Rounded corners */
    }
    .section-swiper-absoulte {
        position: relative;
        background: url('images/homebck.jpg') no-repeat center center;
        background-size: cover;
    }

    .badge-promo-icon path:first-of-type {
        fill: #c70000;
    }

    .badge-promo-icon path[opacity="0.08"] {
        fill: rgba(162, 11, 11, 0.08); /* Adjust opacity as needed */
    }

    </style>
</head>
<body>

<?php include 'layouts/loader.php' ?>

<div class="page">

    <?php include "layouts/navbar.php"; ?>

    <!-- Section Swiper Slider-->
    <section class="section section-swiper-absoulte context-dark text-center wow fadeIn">
        <!-- Waves-->
        <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>

        <!-- Swiper Content-->
        <div class="section-swiper-content">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10">
                        <div class="badge-promo wow fadeScale mb-3" data-wow-delay=".6s">
                            <span class="badge-promo-text">Upcoming matec 2024 event</span>
                            <svg class="badge-promo-icon" width="319" height="49" viewBox="0 0 319 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49H0L20 25L0 0Z" fill="#a20b0b"></path>
                                <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49L0 0Z" fill="rgba(162, 11, 11, 0.08)"></path>
                            </svg>
                        </div>
                        <div class="wow fadeInUp text-spacing-200" data-wow-delay=".8s" data-caption-animate="fadeInUp" data-caption-delay="300" data-caption-duration="900">
                            <img src="images/matec-hero_title-01.png" alt="ACCELERATE INTO THE" class="img-fluid py-3">
                        </div>
                        <div  class="wow fadeScale mb-3" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">
                            <img src="images/matec-hero_title-02.png" alt="FUTURE" class="img-fluid py-3">
                        </div>
                        <!--<h4 class="wow fadeInUp text-spacing-200" data-wow-delay=".8s" data-caption-animate="fadeInUp" data-caption-delay="300" data-caption-duration="900">Come and Join Us Now</h4>
                        <h1 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">ACCELERATE INTO THE FUTURE</h1>-->
                        <!-- List Inline-->
                        <ul class="list-inline list-inline-md wow" data-splitting data-wow-delay="1.5s">
                            <li>
                                <div class="unit unit-spacing-xs align-items-center">
                                    <div class="unit-left line-height-reset">
                                        <svg class="svg-icon-sm svg-icon-primary" role="img">
                                            <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                        </svg>
                                    </div>
                                    <div class="unit-body">
                                        <h5 class="text-spacing-100"><span class="big">BUKIT JALIL, KUALA LUMPUR</span></h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-xs align-items-center">
                                    <div class="unit-left line-height-reset">
                                        <svg class="svg-icon-sm svg-icon-primary" role="img">
                                            <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
                                        </svg>
                                    </div>
                                    <div class="unit-body">
                                        <h5 class="text-spacing-100"><span class="big">
                                      <time datetime="2019-01-05">SEPTEMBER 20 to 22, 2024</time></span></h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thumbnail Video Link-->
        <div class="video-link-wrapper">
            <div class="unit align-items-center">
                <div class="unit-body text-right">
                    <!-- Thumbnail Video Link       <h5><span class="big">Watch Promo<br> Video</span></h5>
                     </div>
                     <div class="unit-right">
                         <a class="video-link" href="https://youtu.be/nbfFDnKkMvw" data-lightgallery="item">
                             <div class="video-link-bg" data-triangle=".video-link-overlay">
                                 <span class="video-link-overlay"></span>
                             </div>
                             <span class="icon fa-play"></span>
                         </a>
                     </div>-->
                </div>
            </div>
    </section>

    <!-- Section Dynamic Opportunity-->
    <section class="section section-lg bg-default wow fadeIn">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-md-10 col-lg-7 col-xl-7">
                    <h6>MATEC 2024 WILL BRING TO YOU</h6>
                    <h3 class="heading-lg-postfix-15">DYNAMIC BUSINESS OPPORTUNITY</h3>
                    <p>For those seeking to grow their business in automative industries, MATEC 2024 is in the ideal platform to: </p>
                    <ul class="list list-md">
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div>
                                        <svg class="svg-icon-sm-1" role="img">
                                            <use xlink:href="images/svg/sprite.svg#tick"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h5>Showcase the latest in atomotive technology<br> automotive products and services
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div>
                                        <svg class="svg-icon-sm-1" role="img">
                                            <use xlink:href="images/svg/sprite.svg#tick"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h5>Explore opportunities to trade, invest, collaborate and share<br> in the transfer of technology
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div>
                                        <svg class="svg-icon-sm-1" role="img">
                                            <use xlink:href="images/svg/sprite.svg#tick"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h5>Expend business horizon and <br> develop import and export markets
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div>
                                        <svg class="svg-icon-sm-1" role="img">
                                            <use xlink:href="images/svg/sprite.svg#tick"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h5>Launch new and innovative products<br> and services
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div>
                                        <svg class="svg-icon-sm-1" role="img">
                                            <use xlink:href="images/svg/sprite.svg#tick"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h5>Explore careers and<br> entrepreneurial opportunities
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div>
                                        <svg class="svg-icon-sm-1" role="img">
                                            <use xlink:href="images/svg/sprite.svg#tick"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h5>Deepen relationships with existing customers and<br> boost your market competitiveness
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div>
                                        <svg class="svg-icon-sm-1" role="img">
                                            <use xlink:href="images/svg/sprite.svg#tick"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h5>forger international alliances and<br> build strategic partnerships
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <div class="icon-rect icon-rect-secodanry" data-triangle=".icon-rect-overlay">
                                        <div class="icon-rect-overlay"></div>
                                        <svg class="svg-icon-sm-1" role="img">
                                            <use xlink:href="images/svg/sprite.svg#tick"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h5>Be the one who discover the<br> latest market trends
                                    </h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- List Inline-->
                    <ul class="list-inline list-inline-xl">

                </div>
                <div class="col-md-10 col-lg-5 col-xl-5 text-md-right">
                    <!-- Image Box-->
                    <br><br><br>
                    <div class="images-box">
                        <div class="images-box-item images-box-item-right">
                            <div class="wow fadeScale"><img src="images/vendor1.png" alt="" width="470" height="590"/>
                            </div>
                        </div>
                        <br><br>
                        <div class="images-box-item images-box-item-right">
                            <div class="wow fadeScale"><img src="images/6.jpg" alt="" width="470" height="590"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Book Your Ticket-->
    <section class="section" style="background-image: url('images/bckhome.png'); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
            <div class="container wow fadeIn">
                <!-- Block with content-->
                <div class="block-lg block-center">
                    <h6>Time is running out</h6>
                    <h3>REGISTER WITH US NOW</h3>
                    <p>Bringing together automotive industry players at all levels from vehicle manufacturers, vendors, suppliers of spare parts, accessories, merchandise, agencies/institutions involved. Including educational institutions related automotive. Various interesting activities throughout the program</p>
                    <!-- Countdown rectangle-->
                    <div class="countdown countdown-rect" data-countdown="data-countdown" data-to="2024-09-20">
                        <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-days" data-wow-delay="0s" data-triangle=".countdown-block-overlay">
                            <div class="countdown-block-overlay"></div>
                            <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewBox="0 0 200 237" data-progress-days="">
                                <rect class="countdown-rect-bg" x="0" y="0" width="200" height="237"></rect>
                                <rect class="countdown-rect-fg clipped" x="0" y="0" width="200" height="237"></rect>
                            </svg>
                            <div class="countdown-wrap">
                                <div class="countdown-counter" data-counter-days="">00</div>
                                <div class="countdown-title">days</div>
                            </div>
                        </div>
                        <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-hours" data-wow-delay="0.125s" data-triangle=".countdown-block-overlay">
                            <div class="countdown-block-overlay"></div>
                            <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewBox="0 0 200 237" data-progress-hours="">
                                <rect class="countdown-rect-bg" x="0" y="0" width="200" height="237"></rect>
                                <rect class="countdown-rect-fg clipped" x="0" y="0" width="200" height="237"></rect>
                            </svg>
                            <div class="countdown-wrap">
                                <div class="countdown-counter" data-counter-hours="">00</div>
                                <div class="countdown-title">hours</div>
                            </div>
                        </div>
                        <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-minutes" data-wow-delay="0.25s" data-triangle=".countdown-block-overlay">
                            <div class="countdown-block-overlay"></div>
                            <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewBox="0 0 200 237" data-progress-minutes="">
                                <rect class="countdown-rect-bg" x="0" y="0" width="200" height="237"></rect>
                                <rect class="countdown-rect-fg clipped" x="0" y="0" width="200" height="237"></rect>
                            </svg>
                            <div class="countdown-wrap">
                                <div class="countdown-counter" data-counter-minutes="">00</div>
                                <div class="countdown-title">minutes</div>
                            </div>
                        </div>
                        <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-seconds" data-wow-delay="0.375s" data-triangle=".countdown-block-overlay">
                            <div class="countdown-block-overlay"></div>
                            <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewBox="0 0 200 237" data-progress-seconds="">
                                <rect class="countdown-rect-bg" x="0" y="0" width="200" height="237"></rect>
                                <rect class="countdown-rect-fg clipped" x="0" y="0" width="200" height="237"></rect>
                            </svg>
                            <div class="countdown-wrap">
                                <div class="countdown-counter" data-counter-seconds="">00</div>
                                <div class="countdown-title">seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Section Biggest 2019 Digital Conference-->
    <section class="section section-lg bg-default wow fadeIn">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5">
                    <h6>OUR ULTIMATE GOALS</h6>
                    <h3 class="heading-lg-postfix-15">ACCELERATE INTO THE FUTURE</h3><br><br><br>
                    <div class="slider-container">
                        <div class="swiper-container card-slider swiper-container-horizontal">
                            <div class="swiper-wrapper">
                                <!-- Slide 1 -->
                                <div class="swiper-slide" style="width: 325px;">
                                    <div class="card" style="border: none; text-align: center;">
                                        <img class="card-image" src="images/car.png" alt="Car Image" style="width: 100px; height: auto; margin: 0 auto;">
                                        <div class="card-body">
                                            <p class="testimonial-text" style="font-size: 14px;">Forming a cluster of automotive entrepreneurs<br> assisted by MARA or other parties to explore<br> areas of cooperation and business expending</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="swiper-slide" style="width: 325px;">
                                    <div class="card" style="border: none; text-align: center;">
                                        <img class="card-image" src="images/car.png" alt="Car Image" style="width: 100px; height: auto; margin: 0 auto;">
                                        <div class="card-body">
                                            <p class="testimonial-text" style="font-size: 14px;">Ensuring the entrepreneurs involved in the<br> automotive industry can use the MATEC2024<br> platform for expending the existing business network market</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="swiper-slide" style="width: 325px;">
                                    <div class="card" style="border: none; text-align: center;">
                                        <img class="card-image" src="images/car.png" alt="Car Image" style="width: 100px; height: auto; margin: 0 auto;">
                                        <div class="card-body">
                                            <p class="testimonial-text" style="font-size: 14px;">Empowering the automotive entrepreneur's business brand through<br> continuous promotion through the media<br> and beyond will strengthen the business brand of the<br> entrepreneur involved to a better level</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide 4 -->
                                <div class="swiper-slide" style="width: 325px;">
                                    <div class="card" style="border: none; text-align: center;">
                                        <img class="card-image" src="images/car.png" alt="Car Image" style="width: 100px; height: auto; margin: 0 auto;">
                                        <div class="card-body">
                                            <p class="testimonial-text" style="font-size: 14px;">Providing a dedicated marketing and advertising platform to introduce automotive entrepreneurs' companies and<br> products directly to customers and the community</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                            <!-- end of add arrows -->
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- List Inline-->
                    <ul class="list-inline list-inline-xl">
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <svg class="svg-icon-sm svg-icon-primary" role="img">
                                        <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                    </svg>
                                </div>
                                <div class="unit-body">
                                    <h5>Where</h5>
                                    <p>Bukit Jalil, Kuala Lumpur</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit">
                                <div class="unit-left">
                                    <svg class="svg-icon-sm svg-icon-primary" role="img">
                                        <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
                                    </svg>
                                </div>
                                <div class="unit-body">
                                    <h5>When</h5>
                                    <p>
                                        <time datetime="2019-01-05">September 20 to 22, 2024</time>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a class="button button-primary" href="#" data-triangle=".button-overlay"><span>Register Now</span><span class="button-overlay"></span></a>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 text-md-right">
                    <!-- Image Box-->
                    <div class="images-box">
                        <div class="images-box-item images-box-item-right">
                            <div class="wow fadeScale"><img src="images/homeman.png" alt="" width="470" height="590"/>
                            </div>
                        </div>
                        <div class="images-box-item images-box-item-left">
                            <div class="wow fadeScale"><img src="images/homeman2.png" alt="" width="270" height="257"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom CSS for Swiper -->
    <style>
        .swiper-button-next::after,
        .swiper-button-prev::after {
            color: grey !important;
            font-size: 18px; /* Adjust size if needed */
        }

        /* Hide the default blue arrows */
        .swiper-button-next,
        .swiper-button-prev {
            background: none !important;
        }
    </style>
    <!--Hide Swiper
    <script>
      var swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>-->



    <!-- Section THE IDEA OF MATEC-->
    <section class="section" style="background-image: url('images/bckhome.png'); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
            <div class="container">
                <h6 class="text-secondary text-center"></h6>
                <h3 class="text-center">THE IDEA OF MATEC</h3>
                <p class="text-center">This 3-day event is filled with showcases and activities that will appeal to those involved in automotive, business owners and investors, as well as the general public including:</p>
                <div class="row align-items-end">
                    <div class="col-lg-7 text-left">
                        <img src="images/matec1.png" alt="THE IDEAS OF MATEC" class="img-fluid">
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="text-container">
                            <a class="btn-solid-reg custom-btn" href="#">Innovative Automotive Solutions</a>
                            <br>
                            <a class="btn-solid-reg custom-btn" href="#">Business Networking Opportunities</a>
                            <br>
                            <a class="btn-solid-reg custom-btn" href="#">Investment Insights</a>
                            <br>
                            <a class="btn-solid-reg custom-btn" href="#">Technology Demonstrations</a>
                            <br>
                            <a class="btn-solid-reg custom-btn" href="#">Hands-on Workshops</a>
                            <br>
                            <a class="btn-solid-reg custom-btn" href="#">Industry Keynote Speakers</a>
                            <br>
                            <a class="btn-solid-reg custom-btn" href="#">Product Exhibitions</a>
                            <br>
                            <a class="btn-solid-reg custom-btn" href="#">Interactive Panels</a>
                            <br>
                            <a class="btn-solid-reg custom-btn" href="#">Networking Events</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .btn-solid-reg.custom-btn {
            background-color: red;
            color: white;
            padding: 5px 10px;
            margin-top: 10px;
            display: inline-block;
            text-decoration: none;
            border-radius: 20px;
            border: 2px solid red;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-solid-reg.custom-btn:hover {
            background-color: white;
            color: red;
        }

        .text-container {
            text-align: left;
        }
    </style>

    <!-- Section Our Activities-->
    <section class="section section-lg bg-default wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our Activities</h2>
                    <p class="p-heading p-large">Join us in these exciting activities designed for automotive enthusiasts and professionals.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <div class="row justify-content-center">
                <!-- First row -->
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <!-- Card 1 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon1.png" alt="Activity 1">
                                <div class="card-body">
                                    <h4 class="card-title">Car Gathering</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon2.png" alt="Activity 2">
                                <div class="card-body">
                                    <h4 class="card-title">Bike Gathering</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon3.png" alt="Activity 3">
                                <div class="card-body">
                                    <h4 class="card-title">Concert</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon4.png" alt="Activity 4">
                                <div class="card-body">
                                    <h4 class="card-title">Battle of the Band</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of first row -->

                <!-- Second row -->
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <!-- Card 5 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon5.png" alt="Activity 5">
                                <div class="card-body">
                                    <h4 class="card-title">Breakdance Show</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 6 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon6.png" alt="Activity 6">
                                <div class="card-body">
                                    <h4 class="card-title">Kids Playground</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 7 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon7.png" alt="Activity 7">
                                <div class="card-body">
                                    <h4 class="card-title">Product Presentation</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 8 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon8.png" alt="Activity 8">
                                <div class="card-body">
                                    <h4 class="card-title">Meet & Greet</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of second row -->

                <!-- Third row -->
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <!-- Card 9 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon9.png" alt="Activity 9">
                                <div class="card-body">
                                    <h4 class="card-title">Entrepreneur Session</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 10 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon10.png" alt="Activity 10">
                                <div class="card-body">
                                    <h4 class="card-title">Talk Show</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 11 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon11.png" alt="Activity 11">
                                <div class="card-body">
                                    <h4 class="card-title">Tournement & Contest</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 12 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon12.png" alt="Activity 12">
                                <div class="card-body">
                                    <h4 class="card-title">Lucky Draw</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of third row -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>

    <style>
        .activity-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
            max-width: 250px; /* Increase card width */
            height: 250px; /* Increase card height */
        }

        .activity-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: lightgrey; /* Change card color on hover */
        }

        .card-image {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            width: 60%; /* Reduce image width */
            height: auto; /* Maintain aspect ratio */
            margin: 20px auto 0; /* Center the image within the card */
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 1.2em;
            margin-bottom: 0;
        }

        .p-heading {
            margin-bottom: 20px;
            font-size: 1.25em;
        }

        .p-large {
            font-size: 1.1em;
        }
    </style>







    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.full-width-slider', {
                slidesPerView: 1, // Number of slides per view
                spaceBetween: 30, // Space between slides
                loop: false, // Disable looping mode
                autoplay: false, // Disable autoplay
                pagination: {
                    el: '.swiper-pagination', // Pagination container
                    clickable: true, // Allow clickable pagination bullets
                },
                navigation: {
                    nextEl: '.swiper-button-next', // Next slide button
                    prevEl: '.swiper-button-prev', // Previous slide button
                },
            });
        });
    </script>



    <!-- Section Conference Schedule-->
    <section class="section" style="background-image: url('images/bckhome.png'); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
            <div class="container">
                <h6>Event Schedule Plan</h6>
                <h3>Official Itinerary</h3>
                <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link-secondary-darker" href="#tabs-1-1" data-toggle="tab" data-triangle=".nav-link-overlay">
                                <span class="nav-link-overlay"></span>
                                <span class="nav-link-cite">First Day</span>
                                <span class="nav-link-title">September 20, 2024</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link-purple-heart" href="#tabs-1-2" data-toggle="tab" data-triangle=".nav-link-overlay">
                                <span class="nav-link-overlay"></span>
                                <span class="nav-link-cite">Second Day</span>
                                <span class="nav-link-title">September 21, 2024</span>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link nav-link-primary" href="#tabs-1-3" data-toggle="tab" data-triangle=".nav-link-overlay">
                                <span class="nav-link-overlay"></span>
                                <span class="nav-link-cite">Third Day</span>
                                <span class="nav-link-title">September 22, 2024</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content wow fadeIn">
                        <!-- First Day -->
                        <div class="tab-pane fade px-4" id="tabs-1-1">
                            <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th width="10%" style="color: #1c1973; font-weight: bold;">Time</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Grand Stage Zone (Outdoor)</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Conference Stage Zone (Indoor)</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Motorsport Zone (Outdoor)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:00 am</td>
                                        <td style="color: black;">MATEC Opening Day 1 Doa & Negaraku</td>
                                        <td style="color: black;">Doa & Negaraku</td>
                                        <td style="color: black;">CUSTOM Nation Car Customization Show</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:10 am</td>
                                        <td style="color: black;">Emcee Shout-Out</td>
                                        <td style="color: black;">Exhibitor Product Presentation Products Knowledge</td>
                                        <td style="color: black;">Walkabout Session with VVIP Car Show Car Customization Contest Car Activities</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973;font-weight: bold;">10:20 am</td>
                                        <td style="color: black;">Title Sponsor Shout-Out</td>
                                        <td style="color: black;">Road Safety Clinic & Contest</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:30 am</td>
                                        <td style="color: black;">Exhibitor Shout-Out</td>
                                        <td style="color: black;">MOU Ceremony with Emerald Autoparts</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:40 am</td>
                                        <td style="color: black;">Preparation for Pit Stop Contest</td>
                                        <td style="color: black;"></td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:50 am</td>
                                        <td style="color: black;">Pit Stop Contest</td>
                                        <td style="color: black;">PETRONAS Dagangan Berhad Revisit Activity</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">11:00 am</td>
                                        <td style="color: black;">Preparation for MATEC Battle of the Band</td>
                                        <td style="color: black;"></td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">11:10 am</td>
                                        <td style="color: black;">MATEC Battle of the Band Round 1</td>
                                        <td style="color: black;">MATEC Conference Session 1</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">11:30 am</td>
                                        <td style="color: black;"></td>
                                        <td style="color: black;">Title Sponsor Shout-Out</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">12:00 pm</td>
                                        <td style="color: black;">SUZUKI Launching Ceremony</td>
                                        <td style="color: black;"></td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">1:00 pm</td>
                                        <td style="color: black;">MATEC Battle of the Band Round 2</td>
                                        <td style="color: black;">Industry - IMPA Collaboration WESTAR</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">2:30 pm</td>
                                        <td style="color: black;">End of Day 1</td>
                                        <td style="color: black;">End of Day 1</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Second Day -->
                        <div class="tab-pane fade px-4" id="tabs-1-2">
                            <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th width="10%" style="color: #1c1973; font-weight: bold;">Time</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Grand Stage Zone (Outdoor)</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Conference Stage Zone (Indoor)</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Motorsport Zone (Outdoor)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:00 am</td>
                                        <td style="color: black;">MATEC Opening Day 2 Doa & Negaraku</td>
                                        <td style="color: black;">Arrival of MARA Chairman YBHG. Datuk Wira Dr. Asyraf Wajdi bin Dato' Dusuki</td>
                                        <td style="color: black;">X-MAX Mega Gathering X-Max Group Motor Showcase</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:10 am</td>
                                        <td style="color: black;">Emcee Shout-Out</td>
                                        <td style="color: black;">Car Launching Ceremony by GO-GO AUTO</td>
                                        <td style="color: black;">Road Safety Ride Demo EV Scooter</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:30 am</td>
                                        <td style="color: black;">MATEC Launching Ceremony YBHG. Datuk Wira Dr. Asyraf Wajdi bin Dato' Dusuki</td>
                                        <td style="color: black;">Cermin Pro Presentation Session</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">11:00 am</td>
                                        <td style="color: black;">Cheque Handover Ceremony for PUMP Entrepreneur</td>
                                        <td style="color: black;">Title Sponsor Shout-Out</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">11:30 am</td>
                                        <td style="color: black;">Bike Contest</td>
                                        <td style="color: black;">MARA Entrepreneur Sharing Session</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">11:45 am</td>
                                        <td style="color: black;">Meet & Greet Session with Hafiz Shahrin</td>
                                        <td style="color: black;">EV Industry Pocket Talk</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">12:00 pm</td>
                                        <td style="color: black;">Lucky Draw Session 2</td>
                                        <td style="color: black;">PLIMM - PETRONAS AutoExpert Sharing Session</td>
                                        <td style="color: black;">Dinda Kanda MATEC Gathering</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">1:00 pm</td>
                                        <td style="color: black;">B-Boys Competition Round 1</td>
                                        <td style="color: black;">Talk Show with Abang Gan</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">2:00 pm</td>
                                        <td style="color: black;">MATEC Beat Blitz Mini Concert</td>
                                        <td style="color: black;">Exhibitor Shout-Out</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">2:30 pm</td>
                                        <td style="color: black;">MATEC Battle of the Band Finale Round</td>
                                        <td style="color: black;">MATEC Conference Session 2</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">8:00 pm</td>
                                        <td style="color: black;">End of Day 2</td>
                                        <td style="color: black;">End of Day 2</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Third Day -->
                        <div class="tab-pane fade px-4" id="tabs-1-3">
                            <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist" aria-multiselectable="false">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th width="10%" style="color: #1c1973; font-weight: bold;">Time</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Grand Stage Zone (Outdoor)</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Conference Stage Zone (Indoor)</th>
                                        <th width="30%" style="color: #1c1973; font-weight: bold;">MATEC Motorsport Zone (Outdoor)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:00 am</td>
                                        <td style="color: black;">MATEC Opening Day 3 Doa & Negaraku</td>
                                        <td style="color: black;">Doa & Negaraku</td>
                                        <td style="color: black;">MEGA Lady Bikers Gathering High End Mega Gathering</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:10 am</td>
                                        <td style="color: black;">Emcee Shout-Out</td>
                                        <td style="color: black;">TVET Sharing Session Mechanic Performance</td>
                                        <td style="color: black;">Harley-Davidson Superbike</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:20 am</td>
                                        <td style="color: black;">Lady Bikers Shout-Out</td>
                                        <td style="color: black;"></td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">10:30 am</td>
                                        <td style="color: black;">Lucky Draw Session 3</td>
                                        <td style="color: black;">E-Games MOBILE Legend Grand Final</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">11:00 am</td>
                                        <td style="color: black;">Champion of MATEC Battle of the Band Showcase</td>
                                        <td style="color: black;">Trivia Contest (Public Contest)</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">11:30 am</td>
                                        <td style="color: black;">B-Boys Competition Finale Round</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">12:00 pm</td>
                                        <td style="color: black;">B-Boys Competition Finale Round</td>
                                        <td style="color: black;"></td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">2:00 pm</td>
                                        <td style="color: black;">New Car Launching Ceremony</td>
                                        <td style="color: black;"></td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">4:00 pm</td>
                                        <td style="color: black;">MATEC Grand Concert & MATEC Grand Lucky Draw</td>
                                        <td style="color: black;"></td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    <tr>
                                        <td style="color: #1c1973; font-weight: bold;">8:00 pm</td>
                                        <td style="color: black;">End of Day 3</td>
                                        <td style="color: black;">End of Day 3</td>
                                        <td style="color: black;"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Section Photo Gallery-->
    <section class="section section-lg bg-default text-center">
        <div class="container container-wide">
            <h6>event album</h6>
            <h3>Photo Gallery.</h3>
            <div class="row row-ten row-narrow row-30 row-lg-50 justify-content-center" data-lightgallery="group">
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="wow">
                        <div>
                            <!-- Gallery Thumbnail--><a class="thumbnail" href="images/6.jpg" data-lightgallery="item" data-triangle=".thumbnail-overlay"><span class="thumbnail-overlay"></span><span class="thumbnail-icon"></span><img src="images/6.jpg" alt="" width="298" height="343"/></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="wow">
                        <div>
                            <!-- Gallery Thumbnail--><a class="thumbnail" href="images/9.jpg" data-lightgallery="item" data-triangle=".thumbnail-overlay"><span class="thumbnail-overlay"></span><span class="thumbnail-icon"></span><img src="images/9.jpg" alt="" width="298" height="343"/></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <div class="wow">
                        <div>
                            <!-- Gallery Thumbnail--><a class="thumbnail" href="images/14.jpg" data-lightgallery="item" data-triangle=".thumbnail-overlay"><span class="thumbnail-overlay"></span><span class="thumbnail-icon"></span><img src="images/14.jpg" alt="" width="298" height="343"/></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <p class="font-weight-sbold font-secondary"><span>Don’t hesitate, contact us for better help and services.</span> <a class="link-inline" href="#">Register Now</a>
                    </p>
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