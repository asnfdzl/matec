<!DOCTYPE html>
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

        <?php include "layouts/navbar.php"; ?>

        <!-- Breadcrumbs-->
        <section class="section" style="background-image: url(<?= asset('images/bckhome.png') ?>); background-size: cover; background-position: center;">
            <div class="parallax-content section-lg context-dark text-center section-background">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active">About MATEC</li>
                </ul>
                <h3 class="breadcrumbs-custom-title">About MATEC</h3>
            </div>
        </section>

        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-image-section-efx-white bg-cover-section">
            <div class="container">

            </div>
        </section>

    </div>

    <?php require "layouts/__js.php" ?>

</body>
</html>