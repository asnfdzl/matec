<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: Event</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= asset('images/logo.png') ?>" type="image/x-icon">

    <?php require 'layouts/__css.php' ?>

    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
        .bg-parallax-03 {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 100px 0; /* Adjust padding as needed */
        }

        .text-white {
            color: #fff; /* White text color */
        }

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

        .modal-body img {
            margin-right: 20px;
        }

        .modal-xl {
            max-width: 80%;
        }

        .modal-content {
            margin: auto;
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
                <li class="active">About Event</li>
            </ul>
            <h3 class="breadcrumbs-custom-title">About Event</h3>
        </div>
    </section>

    <!-- Section About Event-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <h6>MATEC 2024 OFFICIAL VENUE</h6>
                    <h3>NATIONAL STADIUM BUKIT JALIL</h3>
                    <p class="paragraph-inset-right-25">
                        National Stadium is the cental and most prominent sports center and building at the National Sports Complex in Bukit Jalil. The elliptical
                        outdoor stadium has a total area of 76,000 square meters and its classical bowl shape, is enhanced, by the dramatic overlapping, of three spectatir
                        tiers.
                    </p>
                    <p> Our outdoor car part spaces are a perfect canvas for your open-air events. You have a choice of five varied sizes in a gated venue
                        , with a combined capacite of 160,000 pax standing. With across to both power and water supply, a 3 minute walk to the Bukit Jalil LRT Station and 20 minutes drive
                        fro the city centre, we are also flexible to be part of your customised event.
                    </p>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="img-separated"><img src="<?= asset('images/stdim.png') ?>" alt="" width="562" height="588"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Program Details-->
    <!--<section class="section" style="background-image: url(<?php /*= asset('images/bckhome.png') */?>); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
            <div class="container">
                <h4 class="font-weight-bold">program Details from Day-1 until Day-3</h4>
                <div class="row row-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="speaker">
                            <div class="speaker-img" data-triangle=".speaker-overlay">
                                <a class="thumbnail" href="<?php /*= asset('images/11.jpg') */?>)" data-lightgallery="item" data-triangle=".thumbnail-overlay">
                                    <span class="thumbnail-overlay"></span>
                                    <span class="thumbnail-icon"></span>
                                    <img src="<?php /*= asset('images/11.jpg') */?>" alt="" width="298" height="343"/>
                                </a>
                            </div>
                            <h5 class="speaker-title"><a href="#">DAY - 1</a></h5>
                            <p class="speaker-position">20TH SEPTEMBER 2024</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="speaker">
                            <div class="speaker-img" data-triangle=".speaker-overlay">
                                <a class="thumbnail" href="<?php /*= asset('images/12.jpg') */?>" data-lightgallery="item" data-triangle=".thumbnail-overlay">
                                    <span class="thumbnail-overlay"></span>
                                    <span class="thumbnail-icon"></span>
                                    <img src="<?php /*= asset('images/12.jpg') */?>" alt="" width="298" height="343"/>
                                </a>
                            </div>
                            <h5 class="speaker-title"><a href="#">DAY - 2</a></h5>
                            <p class="speaker-position">21TH SEPTEMBER 2024</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="speaker">
                            <div class="speaker-img" data-triangle=".speaker-overlay">
                                <a class="thumbnail" href="<?php /*= asset('images/13.jpg') */?>" data-lightgallery="item" data-triangle=".thumbnail-overlay">
                                    <span class="thumbnail-overlay"></span>
                                    <span class="thumbnail-icon"></span>
                                    <img src="<?php /*= asset('images/13.jpg') */?>" alt="" width="298" height="343"/>
                                </a>
                            </div>
                            <h5 class="speaker-title"><a href="#">DAY - 3</a></h5>
                            <p class="speaker-position">22TH SEPTEMBER 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Section Slideshow-->
    <section class="section" style="background-image: url(<?= asset('images/bckhome.png') ?>); background-size: cover; background-position: center;">
        <div class="parallax-content section-lg context-dark text-center" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));">
            <div class="container">
                <h4 class="font-weight-bold">matec 2024 plan layout</h4><br><br>
                <div id="slideshow" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slideshow" data-slide-to="0" class="active">
                            <img src="<?= asset('images/15.jpg') ?>" alt="" width="40" height="40"/>
                        </li>
                        <li data-target="#slideshow" data-slide-to="1">
                            <img src="<?= asset('images/16.jpg') ?>" alt="" width="40" height="40"/>
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= asset('images/15.jpg') ?>" class="d-block w-100" style="max-width: 800px; max-height: 600px; margin: 0 auto;" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= asset('images/16.jpg') ?>" class="d-block w-100" style="max-width: 800px; max-height: 600px; margin: 0 auto;" alt="Slide 2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slideshow" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slideshow" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </section>

    <!-- Section Spaces and Booth -->
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <h6 class="text-secondary text-center"></h6>
            <h3 class="text-center">MATEC 2024 SPACES AND BOOTH</h3>
            <div class="row align-items-center">
                <div class="col-lg-7 text-left">
                    <img src="<?= asset('images/matec1.png') ?>" alt="spaces and booth" style="width: 100%; height: auto;">
                </div>
                <div class="col-lg-5 d-flex justify-content-center flex-column">
                    <div class="text-container">
                        <a class="btn-solid-reg custom-btn" href="#" data-bs-toggle="modal" data-bs-target="#shellschemeboothModal">SHELLSCHEMEBOOTH</a>
                        <br>
                        <a class="btn-solid-reg custom-btn" href="#" data-bs-toggle="modal" data-bs-target="#barespaceModal">BARESPACE</a>
                        <br>
                        <a class="btn-solid-reg custom-btn" href="#" data-bs-toggle="modal" data-bs-target="#arabianCanopyModal">ARABIAN CANOPY</a>
                        <br>
                        <a class="btn-solid-reg custom-btn" href="#" data-bs-toggle="modal" data-bs-target="#foodtruckModal">FOODTRUCK</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <div class="modal fade" id="shellschemeboothModal" tabindex="-1" aria-labelledby="shellschemeboothModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shellschemeboothModalLabel">Shellscheme Booth Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex">
                    <img src="<?= asset('images/Booth-01.png') ?>" alt="Shellscheme" style="width: 50%; height: auto; margin-right: 20px;">
                    <div>
                        <h5>Shellscheme Booth</h5>
                        <p><strong>Lot Code:</strong> FT01 - FT08</p>
                        <p><strong>Lot Size:</strong> 3m x 3m</p>
                        <p><strong>Rate Per Lot:</strong> RM2,500.00</p><br>
                        <p><strong>Lot Code:</strong> MP01 - MP14</p>
                        <p><strong>Lot Size:</strong> 6m x 3m</p>
                        <p><strong>Rate Per Lot:</strong> RM4,800.00</p><br>
                        <p><strong>Category:</strong> Automotive Related</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="barespaceModal" tabindex="-1" aria-labelledby="barespaceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="barespaceModalLabel">Bare Space Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex">
                    <img src="<?= asset('images/Booth-04.png') ?>" alt="barespace" style="width: 50%; height: auto; margin-right: 20px;">
                    <div>
                        <h5>Bare Space</h5>
                        <p><strong>Lot Code:</strong> SC01 - SC12</p>
                        <p><strong>Lot Size:</strong> 11m x 10m</p>
                        <p><strong>Rate Per Lot:</strong> RM7,500.00</p><br>
                        <p><strong>Category:</strong> Automotive Related</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="arabianCanopyModal" tabindex="-1" aria-labelledby="arabianCanopyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="arabianCanopyModalLabel">Arabian Canopy Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex">
                    <img src="<?= asset('images/Booth-02.png') ?>" alt="arabian" style="width: 50%; height: auto; margin-right: 20px;">
                    <div>
                        <h5>Arabian Canopy</h5>
                        <p><strong>Lot Code:</strong> FT01 - FB10</p>
                        <p><strong>Lot Size:</strong> 6m x 3m</p>
                        <p><strong>Rate Per Lot:</strong> RM2,200.00</p>
                        <p><strong>Category:</strong> Food & Beverages</p><br>
                        <p><strong>Lot Code:</strong> EX01 - EX26</p>
                        <p><strong>Lot Size:</strong> 6m x 6m</p>
                        <p><strong>Rate Per Lot:</strong> RM4,800.00</p>
                        <p><strong>Category:</strong> Automotive Related</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="foodtruckModal" tabindex="-1" aria-labelledby="foodtruckModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="foodtruckModalLabel">Food Truck Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex">
                    <img src="<?= asset('images/Booth-03.png') ?>" alt="foodtruck" style="width: 50%; height: auto; margin-right: 20px;">
                    <div>
                        <h5>Food Truck</h5>
                        <p><strong>Lot Code:</strong> FT01 - FT08</p>
                        <p><strong>Lot Size:</strong> Food Truck Spaces</p>
                        <p><strong>Rate Per Lot:</strong> RM1800.00</p>
                        <p><strong>Category:</strong> Food & Beverages</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Section All other speakers-->
    <!--<section class="section section-lg bg-default text-center">
        <div class="container">
            <h4 class="font-weight-bold">All other speakers.</h4>
            <div class="row row-30">
                <div class="col-sm-6 col-lg-3">
                    <div class="speaker-classic">
                        <div class="speaker-classic-img"><a href="#"><img src="<?php /*= asset('images/speaker-01-270x303.jpg') */?>" alt="" width="270" height="303"/></a>
                            <ul class="speaker-classic-social-list">
                                <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                                <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                            </ul>
                        </div>
                        <h5 class="speaker-classic-title"><a href="#">Jesscia brown</a></h5>
                        <p class="speaker-classic-position">Co Founder</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="speaker-classic">
                        <div class="speaker-classic-img"><a href="#"><img src="<?php /*= asset('images/speaker-02-270x303.jpg') */?>" alt="" width="270" height="303"/></a>
                            <ul class="speaker-classic-social-list">
                                <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                                <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                            </ul>
                        </div>
                        <h5 class="speaker-classic-title"><a href="#">Mike hardons</a></h5>
                        <p class="speaker-classic-position">Lead Developer</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="speaker-classic">
                        <div class="speaker-classic-img"><a href="#"><img src="<?php /*= asset('images/speaker-05-270x303.jpg') */?>" alt="" width="270" height="303"/></a>
                            <ul class="speaker-classic-social-list">
                                <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                                <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                            </ul>
                        </div>
                        <h5 class="speaker-classic-title"><a href="#">John Smith</a></h5>
                        <p class="speaker-classic-position">Assistant</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="speaker-classic">
                        <div class="speaker-classic-img"><a href="#"><img src="<?php /*= asset('images/speaker-06-270x303.jpg') */?>" alt="" width="270" height="303"/></a>
                            <ul class="speaker-classic-social-list">
                                <li><a class="icon icon-xs fa-facebook-f" href="#"></a></li>
                                <li><a class="icon icon-xs fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xs fa-youtube-play" href="#"></a></li>
                            </ul>
                        </div>
                        <h5 class="speaker-classic-title"><a href="#">Sarah Rose</a></h5>
                        <p class="speaker-classic-position">Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <?php include "layouts/footer.php"; ?>

    <?php require "layouts/__js.php" ?>

</body>
</html>