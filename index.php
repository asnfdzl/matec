<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Barlow%7CBarlow+Condensed:300,400,500,600,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <style>
    .ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}


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
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>

<div class="page">
    <?php include "header.php" ?>

    <!-- Section Swiper Slider-->
    <section class="section section-swiper-absoulte context-dark text-center wow fadeIn">
        <!-- Waves-->
        <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>

        <!-- Swiper Content-->
        <div class="section-swiper-content">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10">
                        <div class="badge-promo wow fadeScale" data-wow-delay=".6s">
                            <span class="badge-promo-text">Upcoming matec 2024 event</span>
                            <svg class="badge-promo-icon" width="319" height="49" viewBox="0 0 319 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49H0L20 25L0 0Z" fill="#a20b0b"></path>
                                <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49L0 0Z" fill="rgba(162, 11, 11, 0.08)"></path>
                            </svg>
                        </div>
                        <h4 class="wow fadeInUp text-spacing-200" data-wow-delay=".8s" data-caption-animate="fadeInUp" data-caption-delay="300" data-caption-duration="900">Come and Join Us Now</h4>
                        <h1 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">ACCELERATE INTO THE FUTURE</h1>
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
                                        <h5 class="text-spacing-100"><span class="big">BUKIT JALIL, SHAH ALAM</span></h5>
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
                                    <p>Bukit Jalil, Shah Alam</p>
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
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <img src="images/matec1.png" alt="THE IDEAS OF MATEC" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-lg-6 text-right">
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
                                    <h4 class="card-title">Custom Activity</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Card 12 -->
                        <div class="col-md-3 col-lg-3 mb-4">
                            <div class="card activity-card">
                                <img class="card-image" src="images/icon11.png" alt="Activity 12">
                                <div class="card-body">
                                    <h4 class="card-title">Custom Activity</h4>
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




    <!-- Section Dynamic Opportunity-->
    <section class="section" style="background-image: url('images/bckhome.png'); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5">
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
                    <div class="col-md-10 col-lg-6 col-xl-7 text-md-right">
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
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <h6>Event Schedule plan</h6>
            <h3>official itinerary</h3>
            <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                <!--Nav tabs-->
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link nav-link-secondary-darker" href="#tabs-1-1" data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span class="nav-link-cite">First Day</span><span class="nav-link-title">September 20, 2024</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link-purple-heart" href="#tabs-1-2" data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span class="nav-link-cite">Second Day</span><span class="nav-link-title">September 21, 2024</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link-primary" href="#tabs-1-3" data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span><span class="nav-link-cite">Third Day</span><span class="nav-link-title">September 22, 2024</span></a></li>
                </ul>
                <!--Tab panes-->
                <div class="tab-content wow fadeIn">
                    <div class="tab-pane fade" id="tabs-1-1">
                        <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                        <span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body">
                          <span class="schedule-classic-content"><span class="schedule-classic-time">4 : 00 PM</span><span class="schedule-classic-title heading-4">arrival of mara director General</span><span class="schedule-classic-author">MARA Director General <span class="schedule-classic-author-name">YBHG.DATO SRI AZHAR BIN ABDUL MANAF</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-title heading-4">Walkabout Session</span><span class="schedule-classic-author">with <span class="schedule-classic-author-name">DATO' SERI KP</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">6 : 00 PM</span>
                        <span class="schedule-classic-title heading-4">prize giving ceremony <p>Appreciation ceremony</p><p>lucky draw session day 1</p></span><span class="schedule-classic-author"></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">8 : 00 PM</span><span class="schedule-classic-title heading-4">arrival of ketua pengarah mara</span><span class="schedule-classic-author">Ketua Pengarah MARA <span class="schedule-classic-author-name">YBHG. DATO' ZULKIFLI BIN OSMAN</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">8 : 15 PM</span><span class="schedule-classic-title heading-4">walkabout session with dato' zul</span><span class="schedule-classic-author"></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-qqqtjoau" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-hmvqrcja" aria-controls="accordion2-card-body-hmvqrcja" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span>
                        <span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">10 : 00 PM</span>
                        <span class="schedule-classic-title heading-4">Test drive</span><span class="schedule-classic-author">with <span class="schedule-classic-author-name">V-Strom 1000</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-qqqtjoau" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-hmvqrcja" aria-controls="accordion2-card-body-hmvqrcja" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span>
                        <span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">10 : 00 am</span>
                        <span class="schedule-classic-title heading-4">arrival of mara chairman</span><span class="schedule-classic-author">MARA Chairman<span class="schedule-classic-author-name">YBHG. Dato Wira Dr. Asyraf Wajdi bin Dato' Dusuki</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-qqqtjoau" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-hmvqrcja" aria-controls="accordion2-card-body-hmvqrcja" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span>
                        <span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">10 : 15 aM</span>
                        <span class="schedule-classic-title heading-4">walkabout session</span><span class="schedule-classic-author">with <span class="schedule-classic-author-name">MARA Chairman</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-qqqtjoau" data-toggle="collapse" data-parent="#accordion2" href="#accordion2-card-body-hmvqrcja" aria-controls="accordion2-card-body-hmvqrcja" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span>
                        <span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">12 : 15 PM</span>
                        <span class="schedule-classic-title heading-4">matec launching ceremony</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">YBHG. Dato Wira Dr. Asyraf Wajdi bin Dato' Dusuki</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">12 : 30 PM</span>
                        <span class="schedule-classic-title heading-4">prize giving ceremony <p>Appreciation ceremony</p><p>lucky draw session day 1</p></span><span class="schedule-classic-author"></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">13 : 00 PM</span>
                       <span class="schedule-classic-title heading-4">Launching ceremony</span><span class="schedule-classic-author">of <span class="schedule-classic-author-name">PETRONAS MotoExpert</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">13 : 30 PM</span>
                       <span class="schedule-classic-title heading-4">Workshop Enhancement Program (WEP) Mannol</span><span class="schedule-classic-author"><span class="schedule-classic-author-name"></span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist" aria-multiselectable="false">
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">08 : 00 AM</span>
                       <span class="schedule-classic-title heading-4">arrival of deputy prime minister</span><span class="schedule-classic-author">Deputy Prime Minister <span class="schedule-classic-author-name">DATO' SERI SR. AHMAD ZAHID BIN HAMIDI</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">08 : 30 AM</span>
                       <span class="schedule-classic-title heading-4">walkabout session </span><span class="schedule-classic-author">with <span class="schedule-classic-author-name">Deputy Prime Minister</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">09 : 00 AM</span>
                       <span class="schedule-classic-title heading-4">prize giving ceremony<p>Appreciation Ceremony</p><p>Lucky Draw Session day 3</p></span><span class="schedule-classic-author">Deputy Prime Minister <span class="schedule-classic-author-name">DATO' SERI SR. AHMAD ZAHID BIN HAMIDI</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">09 : 30 AM</span>
                       <span class="schedule-classic-title heading-4">MATEC Closing ceremony <p>Exclusive matec fireworks show</p></span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">DATO' SERI SR. AHMAD ZAHID BIN HAMIDI</span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">10 : 00 AM</span>
                       <span class="schedule-classic-title heading-4">new car launching ceremony</span><span class="schedule-classic-author"><span class="schedule-classic-author-name"></span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content">
                        <span class="schedule-classic-time">10 : 30 AM</span>
                       <span class="schedule-classic-title heading-4">MATEC GRAND CONCERT & MATEC GRAND LUCKY DRAW</span><span class="schedule-classic-author"><span class="schedule-classic-author-name"></span></span></span></span></span></span></a></div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-4">
                        <div class="card-group-custom card-group-corporate" id="accordion4" role="tablist" aria-multiselectable="false">
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion4-card-head-ybgfluus" data-toggle="collapse" data-parent="#accordion4" href="#accordion4-card-body-vujqeaao" aria-controls="accordion4-card-body-vujqeaao" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-01-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">9:00 am to 10:00 am</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Jessica Brown</span> -  Co Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion4-card-body-vujqeaao" aria-labelledby="accordion4-card-head-ybgfluus" data-parent="#accordion4" role="tabpanel">
                                    <div class="card-body">
                                        <p>Ubi est nobilis cobaltum? Domesticus capios ducunt ad demissio. Torquiss favere, tanquam bassus glos. Vae, hippotoxota! Superbus, mirabilis poetas vix aperto de teres, germanus amicitia. Vae. Fortis nixs ducunt ad acipenser. A falsis, musa nobilis gabalium. Cum decor ire, omnes fraticinidaes.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion4-card-head-kkanjswy" data-toggle="collapse" data-parent="#accordion4" href="#accordion4-card-body-luhibwcd" aria-controls="accordion4-card-body-luhibwcd" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-03-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Evolution of user interface in 2019</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Manager</span> -  Co Founder</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion4-card-body-luhibwcd" aria-labelledby="accordion4-card-head-kkanjswy" data-parent="#accordion4" role="tabpanel">
                                    <div class="card-body">
                                        <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour or randomised words which don't look even slightly believable. If you are going to use a passage randomised words which don't look even slightly believable.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion4-card-head-icjoexwh" data-toggle="collapse" data-parent="#accordion4" href="#accordion4-card-body-bjyiygqy" aria-controls="accordion4-card-body-bjyiygqy" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-02-122x122.jpg" alt="" width="122" height="122"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">10:00 am to 11:00 am</span><span class="schedule-classic-title heading-4">Wordpress developement stages</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Mike Hardson</span> -  Lead Developer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion4-card-body-bjyiygqy" aria-labelledby="accordion4-card-head-icjoexwh" data-parent="#accordion4" role="tabpanel">
                                    <div class="card-body">
                                        <p>Est emeritis epos, cesaris. Competition de brevis zelus, imperium solem! Byssus prareres, tanquam dexter glos. Eheu, habena! Lotus monss ducunt ad idoleum. Castus fluctuss ducunt ad mineralis. A falsis, magister castus ignigena. Demolitiones cadunt in fortis avenio! Audax, raptus exsuls superbe.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Schedule Simple-->
                            <div class="schedule-classic schedule-classic-simple">
                                <div class="schedule-classic-content">
                                    <div class="schedule-classic-img">
                                        <svg class="svg-icon-md svg-icon-primary" role="img">
                                            <use xlink:href="images/svg/sprite.svg#clock"></use>
                                        </svg>
                                    </div><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Enjoy the coffee break</span>
                                </div>
                            </div>
                            <!--Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion4-card-head-fccgfuhi" data-toggle="collapse" data-parent="#accordion4" href="#accordion4-card-body-utqsdqvx" aria-controls="accordion4-card-body-utqsdqvx" aria-expanded="false" role="button"><span class="schedule-classic"><span class="unit unit-spacing-md align-items-center d-block d-md-flex"><span class="unit-left"><span class="schedule-classic-img"><img src="images/schedule-04-58x58.jpg" alt="" width="58" height="58"/></span><span class="schedule-classic-img"><img src="images/schedule-05-58x58.jpg" alt="" width="58" height="58"/></span></span><span class="unit-body"><span class="schedule-classic-content"><span class="schedule-classic-time">11:00 am to 12:00 pm</span><span class="schedule-classic-title heading-4">Digital Conference 2019 Introduction</span><span class="schedule-classic-author">by <span class="schedule-classic-author-name">Kevin Martin</span>
                                    - Supporter&nbsp;&nbsp;
                                    .&nbsp;&nbsp; <span class="schedule-classic-author-name">Sarah Rose</span> -  Designer</span></span></span></span></span></a></div>
                                </div>
                                <div class="collapse" id="accordion4-card-body-utqsdqvx" aria-labelledby="accordion4-card-head-fccgfuhi" data-parent="#accordion4" role="tabpanel">
                                    <div class="card-body">
                                        <p>Fiscina domesticus lixa est. Cur vita mori? Triticum, heuretes, et nixus. Clabulare superbus abaculus est. Est lotus gemna, cesaris. Equisos mori! Uria moris, tanquam dexter cedrium. Hydras ridetis, tanquam bi-color saga. Pol, a bene tumultumque, castus nuptia! Noster, neuter stellas diligenter.</p>
                                        <div class="unit unit-spacing-xxs">
                                            <div class="unit-left">
                                                <svg class="svg-icon-sm svg-icon-primary" role="img">
                                                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                                                </svg>
                                            </div>
                                            <div class="unit-body">
                                                <h5>Where</h5>
                                                <p class="font-secondary">Hall 22, Building 2, New York, United States of America</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section Photo Gallery-->
    <section class="section" style="background-image: url('images/bckhome.png'); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">

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
                                <!-- Gallery Thumbnail--><a class="thumbnail" href="9.jpg" data-lightgallery="item" data-triangle=".thumbnail-overlay"><span class="thumbnail-overlay"></span><span class="thumbnail-icon"></span><img src="images/9.jpg" alt="" width="298" height="343"/></a>
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


    <!-- Section Our Testimonials
    <section class="section parallax-js section-lg bg-default text-center">
      <div class="container">
        <h6>what they say</h6>
        <h3>our Testimonials.</h3>
        <div class="row row-30 justify-content-center">
          <div class="col-md-10 col-lg-8">
            <div class="slick-slider child-slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-slide-to-scroll="1">
              <div class="item"><a><img src="images/testimonial-thumb-01-80x80.jpg" alt="" width="80" height="80"/></a></div>
              <div class="item"><a><img src="images/testimonial-thumb-02-80x80.jpg" alt="" width="80" height="80"/></a></div>
              <div class="item"><a><img src="images/testimonial-thumb-03-80x80.jpg" alt="" width="80" height="80"/></a></div>
            </div>
            <div class="slick-slider carousel-parent" data-arrows="false" data-loop="true" data-autoplay="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
              <div class="item">
                <div class="testimonial">
                  <div class="wow fadeIn">
                    -->
    <!-- Testimonial
    <p class="testimonial-text heading-4">Cum luna manducare, omnes historiaes magicae fortis, brevis lanistaes. Eheu, nobilis agripeta! Teres, pius animaliss foris imperium de.</p>
    <ul class="list-inline">
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star-half-empty"></span></li>
    </ul>
    <div class="testimonial-footer"><a class="testimonial-name" href="#">Sarah Rose</a> <span class="testimonial-cite">-  Our Customers</span>
    </div>
  </div>
</div>
</div>
<div class="item">
<div class="testimonial">
  <div class="wow fadeIn">
    -->
    <!-- Testimonial
    <p class="testimonial-text heading-4">This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
    <ul class="list-inline">
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star-half-empty"></span></li>
    </ul>
    <div class="testimonial-footer"><a class="testimonial-name" href="#">Kevin Martin</a> <span class="testimonial-cite">-  Our Customers</span>
    </div>
  </div>
</div>
</div>
<div class="item">
<div class="testimonial">
  <div class="wow fadeIn">
    -->
    <!-- Testimonial
    <p class="testimonial-text heading-4">Pes rusticus brabeuta est. Pol, talis lapsus! Contencio de fidelis palus, transferre brodium! Germanus, varius decors aliquando gratia de.</p>
    <ul class="list-inline">
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
      <li><span class="icon icon-sm icon-secondary fa-star"></span></li>
    </ul>
    <div class="testimonial-footer"><a class="testimonial-name" href="#">Jesscia Brown</a> <span class="testimonial-cite">-  Our Customers</span>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="layer layer-01">
<svg width="126" height="126" viewbox="0 0 126 126" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0" maskunits="userSpaceOnUse" x="0" y="0" width="126" height="126">
<path d="M126 63C126 97.7939 97.7939 126 63 126C28.2061 126 0 97.7939 0 63C0 28.2061 28.2061 0 63 0C97.7939 0 126 28.2061 126 63Z"></path>
</mask>
<g mask="url(#mask0)">
<path d="M61.2694 -27.0047L-26.9917 61.2563L-22.5793 65.6687L65.6817 -22.5924L61.2694 -27.0047Z"></path>
<path d="M71.0589 -17.2147L-17.2021 71.0464L-12.7898 75.4587L75.4712 -12.8023L71.0589 -17.2147Z"></path>
<path d="M80.8724 -7.39484L-7.38867 80.8662L-2.97632 85.2786L85.2847 -2.98249L80.8724 -7.39484Z"></path>
<path d="M90.6785 2.42205L2.41748 90.6831L6.82983 95.0955L95.0909 6.83441L90.6785 2.42205Z"></path>
<path d="M100.485 12.215L12.2236 100.476L16.636 104.888L104.897 16.6274L100.485 12.215Z"></path>
<path d="M110.298 22.0353L22.0371 110.296L26.4495 114.709L114.711 26.4476L110.298 22.0353Z"></path>
<path d="M120.095 31.8322L31.8335 120.093L36.2458 124.506L124.507 36.2445L120.095 31.8322Z"></path>
<path d="M129.901 41.6452L41.6401 129.906L46.0525 134.319L134.314 46.0575L129.901 41.6452Z"></path>
<path d="M139.698 51.4421L51.4365 139.703L55.8489 144.115L144.11 55.8544L139.698 51.4421Z"></path>
<path d="M149.521 61.2721L61.2598 149.533L65.6721 153.946L153.933 65.6845L149.521 61.2721Z"></path>
</g>
</svg>
</div>
<div class="layer layer-02">
<svg width="95" height="65" viewbox="0 0 95 65" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="2.50049" cy="62.5005" r="2.5"></circle>
<circle cx="20.5005" cy="62.5005" r="2.5"></circle>
<circle cx="38.5005" cy="62.5005" r="2.5"></circle>
<circle cx="56.5005" cy="62.5005" r="2.5"></circle>
<circle cx="74.5005" cy="62.5005" r="2.5"></circle>
<circle cx="92.5005" cy="62.5005" r="2.5"></circle>
<circle cx="2.50049" cy="42.5005" r="2.5"></circle>
<circle cx="20.5005" cy="42.5005" r="2.5"></circle>
<circle cx="38.5005" cy="42.5005" r="2.5"></circle>
<circle cx="56.5005" cy="42.5005" r="2.5"></circle>
<circle cx="74.5005" cy="42.5005" r="2.5"></circle>
<circle cx="92.5005" cy="42.5005" r="2.5"></circle>
<circle cx="2.50049" cy="22.5005" r="2.5"></circle>
<circle cx="20.5005" cy="22.5005" r="2.5"></circle>
<circle cx="38.5005" cy="22.5005" r="2.5"></circle>
<circle cx="56.5005" cy="22.5005" r="2.5"></circle>
<circle cx="74.5005" cy="22.5005" r="2.5"></circle>
<circle cx="92.5005" cy="22.5005" r="2.5"></circle>
<circle cx="2.50049" cy="2.50049" r="2.5"></circle>
<circle cx="20.5005" cy="2.50049" r="2.5"></circle>
<circle cx="38.5005" cy="2.50049" r="2.5"></circle>
<circle cx="56.5005" cy="2.50049" r="2.5"></circle>
<circle cx="74.5005" cy="2.50049" r="2.5"></circle>
<circle cx="92.5005" cy="2.50049" r="2.5"></circle>
</svg>
</div>
<div class="layer layer-03">
<svg width="26" height="18" viewbox="0 0 26 18" xmlns="http://www.w3.org/2000/svg">
<path d="M13 0L25.1244 18H0.875645L13 0Z"></path>
</svg>
</div>
<div class="layer layer-04">
<svg width="83" height="83" viewbox="0 0 83 83" xmlns="http://www.w3.org/2000/svg">
<rect y="41.0122" width="58" height="58" transform="rotate(-45 0 41.0122)"></rect>
</svg>
</div>
<div class="layer layer-05">
<svg width="103" height="103" viewbox="0 0 103 103" xmlns="http://www.w3.org/2000/svg">
<circle cx="60.9647" cy="98.604" r="2.5" transform="rotate(-45 60.9647 98.604)"></circle>
<circle cx="73.6928" cy="85.876" r="2.5" transform="rotate(-45 73.6928 85.876)"></circle>
<circle cx="86.4208" cy="73.1479" r="2.5" transform="rotate(-45 86.4208 73.1479)"></circle>
<circle cx="99.1483" cy="60.4204" r="2.5" transform="rotate(-45 99.1483 60.4204)"></circle>
<circle cx="46.8226" cy="84.4619" r="2.5" transform="rotate(-45 46.8226 84.4619)"></circle>
<circle cx="59.5507" cy="71.7339" r="2.5" transform="rotate(-45 59.5507 71.7339)"></circle>
<circle cx="72.2787" cy="59.0059" r="2.5" transform="rotate(-45 72.2787 59.0059)"></circle>
<circle cx="85.0062" cy="46.2783" r="2.5" transform="rotate(-45 85.0062 46.2783)"></circle>
<circle cx="32.6806" cy="70.3198" r="2.5" transform="rotate(-45 32.6806 70.3198)"></circle>
<circle cx="45.4086" cy="57.5918" r="2.5" transform="rotate(-45 45.4086 57.5918)"></circle>
<circle cx="58.1366" cy="44.8638" r="2.5" transform="rotate(-45 58.1366 44.8638)"></circle>
<circle cx="18.5385" cy="56.1777" r="2.5" transform="rotate(-45 18.5385 56.1777)"></circle>
<circle cx="31.2665" cy="43.4497" r="2.5" transform="rotate(-45 31.2665 43.4497)"></circle>
<circle cx="4.39637" cy="42.0356" r="2.5" transform="rotate(-45 4.39637 42.0356)"></circle>
</svg>
</div>
<div class="layer layer-06">
<div class="layer-06-inner">
<svg width="18" height="18" viewbox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
<circle cx="9" cy="9" r="9"></circle>
</svg>
</div>
</div>
<div class="layer layer-07">
<div class="layer-07-inner">
<svg width="18" height="18" viewbox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
<circle cx="9" cy="9" r="9"></circle>
</svg>
</div>
</div>
<div class="layer layer-08">
<svg width="127" height="91" viewbox="0 0 127 91" xmlns="http://www.w3.org/2000/svg">
<line x1="24.544" y1="0.646447" x2="113.639" y2="89.7419"></line>
<line x1="36.6392" y1="0.646447" x2="125.735" y2="89.7419"></line>
<line x1="0.353553" y1="0.646447" x2="89.449" y2="89.7419"></line>
<line x1="12.4488" y1="0.646447" x2="101.544" y2="89.7419"></line>
</svg>
</div>
<div class="layer layer-09">
<svg width="122" height="122" viewbox="0 0 122 122" xmlns="http://www.w3.org/2000/svg">
<mask id="mask1" maskunits="userSpaceOnUse" x="17" y="17" width="87" height="87">
<path d="M91.2168 30.4054C108.009 47.198 108.009 74.4241 91.2168 91.2166C74.4242 108.009 47.1981 108.009 30.4056 91.2166C13.613 74.4241 13.613 47.198 30.4056 30.4054C47.1981 13.6129 74.4242 13.6129 91.2168 30.4054Z"></path>
</mask>
<g mask="url(#mask1)">
<path d="M16.5371 18.2077V103.402H20.7962V18.2077H16.5371Z"></path>
<path d="M25.9868 18.2078V103.402H30.2459V18.2078H25.9868Z"></path>
<path d="M35.4624 18.2107V103.405H39.7215V18.2107H35.4624Z"></path>
<path d="M44.9331 18.2161V103.411H49.1922V18.2161H44.9331Z"></path>
<path d="M54.3921 18.2097V103.404H58.6511V18.2097H54.3921Z"></path>
<path d="M63.8677 18.2126V103.407H68.1267V18.2126H63.8677Z"></path>
<path d="M73.3242 18.2131V103.408H77.5833V18.2131H73.3242Z"></path>
<path d="M82.7935 18.216V103.411H87.0525V18.216H82.7935Z"></path>
<path d="M92.2495 18.2165V103.411H96.5086V18.2165H92.2495Z"></path>
<path d="M101.735 18.2199V103.415H105.994V18.2199H101.735Z"></path>
</g>
</svg>
</div>
<div class="layer layer-10">
<svg width="53" height="48" viewbox="0 0 53 48" xmlns="http://www.w3.org/2000/svg">
<path d="M21.5295 5.85179L52.1481 36.4704L10.3223 47.6776L21.5295 5.85179Z"></path>
</svg>
</div>
</section>
-->
    <!-- Section Official Sponsors
    <section class="parallax-container section" data-parallax-img="images/bg-parallax-04-1894x1170.jpg">
      <div class="parallax-content section-lg context-dark text-center">
        <div class="container">
          <h6>Our sponsorships</h6>
          <h3>Official Sponsors.</h3>
          <div class="row row-30 row-lg-50 justify-content-center">
            <div class="col-sm-5 col-lg-3">
              <div class="wow">
                <div>
                  -->
    <!-- Sponsor
     <a class="sponsor" href="#" data-triangle=".sponsor-overlay">
      <div class="sponsor-overlay"></div>
      <div class="sponsor-img"><img src="images/sponsor-01-117x70.png" alt="" width="117" height="70"/>
      </div></a>
  </div>
</div>
</div>
<div class="col-sm-5 col-lg-3">
<div class="wow">
  <div>
    -->
    <!-- Sponsor<a class="sponsor" href="#" data-triangle=".sponsor-overlay">
      <div class="sponsor-overlay"></div>
      <div class="sponsor-img"><img src="images/sponsor-02-66x83.png" alt="" width="66" height="83"/>
      </div></a>
  </div>
</div>
</div>
<div class="col-sm-5 col-lg-3">
<div class="wow">
  <div>
    -->
    <!-- Sponsor <a class="sponsor" href="#" data-triangle=".sponsor-overlay">
      <div class="sponsor-overlay"></div>
      <div class="sponsor-img"><img src="images/sponsor-03-119x33.png" alt="" width="119" height="33"/>
      </div></a>
  </div>
</div>
</div>
<div class="col-sm-5 col-lg-3">
<div class="wow">
  <div>
    -->
    <!-- Sponsor<a class="sponsor" href="#" data-triangle=".sponsor-overlay">
      <div class="sponsor-overlay"></div>
      <div class="sponsor-img"><img src="images/sponsor-04-116x68.png" alt="" width="116" height="68"/>
      </div></a>
  </div>
</div>
</div>
<div class="col-xl-12">
<p class="font-weight-sbold font-secondary"><span class="wow" data-splitting>Don’t hesitate, contact us for better help and services.</span> <a class="link-inline wow fadeScale" href="#">View All Sponsors</a>
</p>
</div>
</div>
</div>
</div>
</section>
-->
    <!-- News & Articles.-->
    <!-- News & Articles
    <section class="section section-lg bg-default text-center">
      <div class="container">
        <h6>Our blog posts</h6>
        <h3>News & Articles.</h3>
        <div class="row row-30">
          <div class="col-md-4">
            <div class="news">
              <div class="news-img"><a href="single-news.html" data-triangle=".news-img-overlay"><span class="news-img-overlay"></span><img src="images/news-01-370x284.jpg" alt="" width="370" height="284"/></a></div>
              <p class="news-meta">by <a class="news-author" href="single-news.html">Dan Fisher</a> <span>-</span> <a class="news-time" href="single-news.html">
                  <time datetime="2019-01-18">18 Jan, 2019</time></a>
              </p>
              <h4 class="news-title"><a href="single-news.html">Many Important Brands Have Given us Their Trust.</a></h4>
              <p class="news-text">Sed quia conse quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p><a class="news-link" href="single-news.html">Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="news">
              <div class="news-img"><a href="single-news.html" data-triangle=".news-img-overlay"><span class="news-img-overlay"></span><img src="images/news-02-370x284.jpg" alt="" width="370" height="284"/></a></div>
              <p class="news-meta">by <a class="news-author" href="single-news.html">Dan Fisher</a> <span>-</span> <a class="news-time" href="single-news.html">
                  <time datetime="2019-01-16">16 Jan, 2019</time></a>
              </p>
              <h4 class="news-title"><a href="single-news.html">BUILDING A ROOM DETECTOR FOR HOT DeVICES.</a></h4>
              <p class="news-text">Magnum hippotoxotas ducunt ad triticum. Mori etiam ducunt ad rusticus ratione.</p><a class="news-link" href="single-news.html">Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="news">
              <div class="news-img"><a href="single-news.html" data-triangle=".news-img-overlay"><span class="news-img-overlay"></span><img src="images/news-03-370x284.jpg" alt="" width="370" height="284"/></a></div>
              <p class="news-meta">by <a class="news-author" href="single-news.html">Dan Fisher</a> <span>-</span> <a class="news-time" href="single-news.html">
                  <time datetime="2019-01-12">12 Jan, 2019</time></a>
              </p>
              <h4 class="news-title"><a href="single-news.html">Let’s become the best sale marketer of the next year.</a></h4>
              <p class="news-text">Albus, lotus cedriums virtualiter pugna de barbatus, regius burgus. Historia regius.</p><a class="news-link" href="single-news.html">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <!-- Section We Have Top Executive And Start Up Here
    <section class="parallax-container section" data-parallax-img="images/bg-parallax-05-1894x758.jpg">
      <div class="parallax-content section-lg context-dark text-center">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-md-10 col-lg-8"><a class="video-link wow fadeScale" href="https://youtu.be/nbfFDnKkMvw" data-lightgallery="item">
                <div class="video-link-bg" data-triangle=".video-link-overlay"><span class="video-link-overlay"></span></div><span class="icon fa-play"></span></a>
              <h6 class="text-secondary wow" data-splitting>click here to Watch our promo</h6>
              <h2 class="wow" data-splitting>We Have Top Executive And Start Up Here.</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <!-- Section Newsletter Sign Up
    <section class="section section-lg bg-default text-center">
      <div class="container">
        <div class="row justify-content-center row-30">
          <div class="col-md-10 col-lg-8">
            <h6>newsletter signup</h6>
            <h3>Join for news updates.</h3>
            <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
              <div class="form-wrap">
                <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                <label class="form-label" for="subscribe-form-email">Email Address</label>
              </div>
              <div class="form-button">
                <button class="button button-primary" type="submit" data-triangle=".button-overlay"><span>Subscribe now</span><span class="button-overlay"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    -->
    <!-- Section Pre Footer-->
    <section class="section section-lg bg-gray-900">
        <div class="container">
            <div class="row row-30">
                <div class="col-xs-10 col-lg-4 align-self-center"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/logo.png" srcset="images/logo@2x.png 2x" alt="Matec2024"></a></div>
                <div class="col-xs-10 col-sm-6 col-lg-4">
                    <h5><span class="big font-weight-sbold">Event detail</span></h5>
                    <div class="event-detail">
                        <p class="event-detail-time big">
                            <time data-splitting datetime="2024-09-20">September 20 to 22, 2024</time>
                        </p>
                        <p class="event-detail-address big" data-splitting>Stadium National Bukit Jalil, <br>Shah Alam, Selangor</p><a class="event-detail-link" href="#"></a>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-6 col-lg-4">
                    <h5><span class="big font-weight-sbold">Social Updates</span></h5>
                    <div class="event-detail">
                        <p class="big">You may wonder: why this event so popular? If you do,<br class="d-none d-xl-block"> find more info about it here.
                        </p>
                        <ul class="list-inline list-inline-xs">
                            <li data-wow-delay=".2s"><a class="icon icon-rect icon-xs icon-white fa-facebook" href="#" data-triangle=".icon-rect-overlay">
                                <div class="icon-rect-overlay"></div></a></li>
                            <li data-wow-delay=".35s"><a class="icon icon-rect icon-xs icon-white fa-twitter" href="#" data-triangle=".icon-rect-overlay">
                                <div class="icon-rect-overlay"></div></a></li>
                            <li data-wow-delay=".5s"><a class="icon icon-rect icon-xs icon-white fa-linkedin" href="#" data-triangle=".icon-rect-overlay">
                                <div class="icon-rect-overlay"></div></a></li>
                            <li data-wow-delay=".65s"><a class="icon icon-rect icon-xs icon-white fa-youtube-play" href="#" data-triangle=".icon-rect-overlay">
                                <div class="icon-rect-overlay"></div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider
    <div class="divider divider-gray-900 text-center"></div>-->
    <!-- Footer Classic
    <footer class="section footer-classic context-dark">
      <div class="container">
        <p class="rights"><span>Copyright&nbsp;</span><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>by</span> <a href="http://bit.ly/dan-fisher">Dan Fisher</a>
        </p>
      </div>
    </footer>
  </div>
  <div class="snackbars" id="form-output-global"></div>
  <div class="block-with-svg-gradients">
    <svg xmlns="http://www.w3.org/2000/svg">
      <defs>
        <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(130,46,168);stop-opacity:1"></stop>
          <stop offset="100%" style="stop-color:rgb(217,14,144);stop-opacity:1"></stop>
        </lineargradient>
      </defs>
    </svg>
  </div>-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>