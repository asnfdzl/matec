<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: About MATEC</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= asset('images/logo.png') ?>" type="image/x-icon">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php require 'layouts/__css.php' ?>

</head>
<body>

    <?php require 'layouts/loader.php' ?>

    <div class="page">

        <!-- Section Header Default-->
        <header class="section page-header">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="76px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand-->
                                    <a class="brand" href="/">
                                        <img class="brand-logo-dark" src="<?= asset('images/matec-logo.png') ?>" srcset="<?= asset('images/matec-logo@2x.png 2x') ?>" alt="MATEC 2024"/>
                                        <img class="brand-logo-light" src="<?= asset('images/matec-logo.png') ?>" srcset="<?= asset('images/matec-logo@2x.png 2x') ?>" alt="MATEC 2024"/>
                                    </a>
                                </div>

                            </div>
                            <!-- Rd Navbar Navigation-->
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav">

                                    </ul>
                                </div>
                            </div>
                            <!-- RD Navbar Collapse-->
                            <div class="rd-navbar-collapse d-sm-block d-none">
                                <!--<a class="button button-primary" href="http://apps.matec.my/visitor/register" data-triangle=".button-overlay">
                                    <span>Visitor</span><span class="button-overlay"></span>
                                </a>-->
                                <a class="button button-primary-blue mt-0" href="http://apps.matec.my/exhibitor/login" data-triangle=".button-overlay">
                                    <span>Register Here</span><span class="button-overlay"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="d-block d-sm-none navbar-fixed-mobile w-100">
            <div class="row row-0 d-flex align-items-center">
                <!--<div class="col-6 px-0">
                    <a class="button px-0 w-100 text-center button-primary py-4" href="http://apps.matec.my/visitor/register" data-triangle=".button-overlay">
                        <span>Visitor</span><span class="button-overlay"></span>
                    </a>
                </div>-->

                <div class="col-12 px-0">
                    <a class="w-150px button px-0 w-100 text-center button-primary-blue py-4" href="http://apps.matec.my/exhibitor/login" data-triangle=".button-overlay">
                        <span>Register Here</span><span class="button-overlay"></span>
                    </a>
                </div>
            </div>
        </div>


        <!-- Section Swiper Slider-->
        <section class="section section-swiper-absoulte context-dark text-center wow fadeIn">
            <!-- Waves-->
            <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
            <!-- Swiper Content-->
            <div class="section-swiper-content d-sm-flex d-block align-items-center">
                <div class="container">
                    <h4 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900">
                        Become part of Malaysia’a largest automotive ecosystem fair and enjoy all benefits and programs to help you grow your business. Let’s join and be apart of MATEC2024.
                    </h4>
                    <div class="row row-30 justify-content-lg-center">
                        <div class="col-md-3">
                            <a href="">
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row">
                                        <div class="col-md-12 col-5">
                                            <img src="<?= asset('images/matec-images/ex_001.png') ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-12 col-7">
                                            <h5 class="mt-3 mb-3" style="color:#000;">MATEC2024 Event Brief</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                        <div class="col-md-3">
                            <a href="">
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row">
                                        <div class="col-md-12 col-5">
                                            <img src="<?= asset('images/matec-images/ex_002.png') ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-12 col-7">
                                            <h5 class="mt-3 mb-3" style="color:#000;">MATEC2024 Partnership Packages</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                        <div class="col-md-3">
                            <a href="">
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row">
                                        <div class="col-md-12 col-5">
                                            <img src="<?= asset('images/matec-images/ex_003.png') ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-12 col-7">
                                            <h5 class="mt-3 mb-3" style="color:#000;">MATEC2024 Full Layout</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                        <div class="col-md-3">
                            <a href="">
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row">
                                        <div class="col-md-12 col-5">
                                            <img src="<?= asset('images/matec-images/ex_004.png') ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-12 col-7">
                                            <h5 class="mt-3 mb-3" style="color:#000;">EXHIBitor F.A.Q</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                    </div>
                    <!--<h5 class="mt-5 font-weight-normal text-capitalize">
                        Please click to view
                    </h5>-->
                </div>

            </div>
            <!-- Swiper Slider Absolute-->
            <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-simulate-touch="false" data-autoplay="8500" data-direction="horizontal" data-effect="fade">
                <div class="swiper-wrapper">
                    <!-- Swiper Slide 01-->
                    <div class="swiper-slide" data-slide-bg="<?= asset('images/matec-slide.png') ?>"></div>
                    <!-- Swiper Slide 02-->
                    <!--<div class="swiper-slide" data-slide-bg="<?php /*= asset('images/slide-02-1894x1042.jpg') */?>"></div>-->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <?php include "layouts/footer.php"; ?>

    </div>

    <?php require "layouts/__js.php" ?>

</body>
</html>
