<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: Sponsorship</title>

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

        <?php include "layouts/footer.php"; ?>

    </div>

    <?php require "layouts/__js.php" ?>

</body>
</html>