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
                    <li class="active">MATEC F.A.Q</li>
                </ul>
                <h3 class="breadcrumbs-custom-title">MATEC F.A.Q</h3>
            </div>
        </section>

        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-image-section-efx-white bg-cover-section">
    <div class="container">

        <h3 class="mb-4">EXHIBITOR - FREQUENTLY ASK QUESTION</h3>

        <div class="accordion" id="accordionExhibitor">
            <div class="card">
                <div class="card-header" id="headingExhibitorOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExhibitorOne" aria-expanded="true" aria-controls="collapseExhibitorOne">
                            How many exhibitors can you accommodate?
                        </button>
                    </h5>
                </div>

                <div id="collapseExhibitorOne" class="collapse show" aria-labelledby="headingExhibitorOne" data-parent="#accordionExhibitor">
                    <div class="card-body">
                        Well over 350 exhibitor with the space to expand if we need to as on 2019, we are moving to bigger hall @ 10,000m2.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingExhibitorTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorTwo" aria-expanded="false" aria-controls="collapseExhibitorTwo">
                            What size spaces do you have available?
                        </button>
                    </h5>
                </div>
                <div id="collapseExhibitorTwo" class="collapse" aria-labelledby="headingExhibitorTwo" data-parent="#accordionExhibitor">
                    <div class="card-body">
                        We have a variety of different exhibition spaces available. Our smallest space starts at 2m x 2m all the way up to your request. We can also accommodate larger sizes on request. If you want more info on the spaces available, please request a copy of our exhibitor information pack and refer to the attached floor plan.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingExhibitorThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorThree" aria-expanded="false" aria-controls="collapseExhibitorThree">
                            How much does it cost to exhibit?
                        </button>
                    </h5>
                </div>
                <div id="collapseExhibitorThree" class="collapse" aria-labelledby="headingExhibitorThree" data-parent="#accordionExhibitor">
                    <div class="card-body">
                        Please refer our Exhibitor Sales Kit for more information.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingExhibitorFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorFour" aria-expanded="false" aria-controls="collapseExhibitorFour">
                            Do you offer a shell scheme?
                        </button>
                    </h5>
                </div>
                <div id="collapseExhibitorFour" class="collapse" aria-labelledby="headingExhibitorFour" data-parent="#accordionExhibitor">
                    <div class="card-body">
                        Yes. Some of our smaller spaces (from 3m x 3m) can be purchased as 'booth package' including shell scheme and carpet.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingExhibitorFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorFive" aria-expanded="false" aria-controls="collapseExhibitorFive">
                            Do you have sponsorship packages available?
                        </button>
                    </h5>
                </div>
                <div id="collapseExhibitorFive" class="collapse" aria-labelledby="headingExhibitorFive" data-parent="#accordionExhibitor">
                    <div class="card-body">
                        Yes we do and we are seeking for a various type of sponsorship. Please contact us to know more about sponsorship matter.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingExhibitorSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorSix" aria-expanded="false" aria-controls="collapseExhibitorSix">
                            Can we sponsor the event without exhibiting?
                        </button>
                    </h5>
                </div>
                <div id="collapseExhibitorSix" class="collapse" aria-labelledby="headingExhibitorSix" data-parent="#accordionExhibitor">
                    <div class="card-body">
                        Yes. We are aware that under certain circumstances it's not always ideal for you to exhibit but may well like to advertise your presence at the event. We have several advertising opportunities available please get in touch for more information.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingExhibitorSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseExhibitorSeven" aria-expanded="false" aria-controls="collapseExhibitorSeven">
                            Is there accommodation near by?
                        </button>
                    </h5>
                </div>
                <div id="collapseExhibitorSeven" class="collapse" aria-labelledby="headingExhibitorSeven" data-parent="#accordionExhibitor">
                    <div class="card-body">
                        There are a few hotels on site with many a short car ride away.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section section-lg bg-default wow fadeIn bg-image-section bg-image-section-efx-white bg-cover-section">
    <div class="container">

        <h3 class="mb-4">VISITOR - FREQUENTLY ASK QUESTION</h3>

        <div class="accordion" id="accordionVisitor">
            <div class="card">
                <div class="card-header" id="headingVisitorOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseVisitorOne" aria-expanded="true" aria-controls="collapseVisitorOne">
                            What are the dates and times?
                        </button>
                    </h5>
                </div>

                <div id="collapseVisitorOne" class="collapse show" aria-labelledby="headingVisitorOne" data-parent="#accordionVisitor">
                    <div class="card-body">
                        The MHX2024 started on Saturday and Sunday (30th Nov. to 1st Dec. 2024) from 10.00am - 10.00pm.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingVisitorTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseVisitorTwo" aria-expanded="false" aria-controls="collapseVisitorTwo">
                            How much is admission fee?
                        </button>
                    </h5>
                </div>
                <div id="collapseVisitorTwo" class="collapse" aria-labelledby="headingVisitorTwo" data-parent="#accordionVisitor">
                    <div class="card-body">
                        The admission are RM20.00 for 2 days for adults & RM5.00 per day for kids. Free admission for kids below 6 years old, OKU & senior citizens. All visitors who are pay are entitled to get lucky draw number.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingVisitorThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseVisitorThree" aria-expanded="false" aria-controls="collapseVisitorThree">
                            What companies are exhibiting?
                        </button>
                    </h5>
                </div>
                <div id="collapseVisitorThree" class="collapse" aria-labelledby="headingVisitorThree" data-parent="#accordionVisitor">
                    <div class="card-body">
                        Please take a look at our exhibitor list by following a link in the header above. The exhibitor list is updated on a regular basis so please keep checking back for new additions.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingVisitorFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseVisitorFour" aria-expanded="false" aria-controls="collapseVisitorFour">
                            Do I have to pay for car parking?
                        </button>
                    </h5>
                </div>
                <div id="collapseVisitorFour" class="collapse" aria-labelledby="headingVisitorFour" data-parent="#accordionVisitor">
                    <div class="card-body">
                        Venue have more than 4,500 parking bays at outside area. Parking fees is RM5.00 per entry.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingVisitorFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseVisitorFive" aria-expanded="false" aria-controls="collapseVisitorFive">
                            Will there be freebies and competitions?
                        </button>
                    </h5>
                </div>
                <div id="collapseVisitorFive" class="collapse" aria-labelledby="headingVisitorFive" data-parent="#accordionVisitor">
                    <div class="card-body">
                        We can never guarantee what our exhibitors will choose to give away or when but it is likely that you will receive a lot of free samples and merchandise.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingVisitorSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseVisitorSix" aria-expanded="false" aria-controls="collapseVisitorSix">
                            Are children allowed?
                        </button>
                    </h5>
                </div>
                <div id="collapseVisitorSix" class="collapse" aria-labelledby="headingVisitorSix" data-parent="#accordionVisitor">
                    <div class="card-body">
                        Yes, of course! You can bring anyone especially you, your kids and family. Some zone are not for kids under 12 years old and school students.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingVisitorSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseVisitorSeven" aria-expanded="false" aria-controls="collapseVisitorSeven">
                            Do you have disabled access?
                        </button>
                    </h5>
                </div>
                <div id="collapseVisitorSeven" class="collapse" aria-labelledby="headingVisitorSeven" data-parent="#accordionVisitor">
                    <div class="card-body">
                        Yes, the venue site is accessible for the disabled by using elevator.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


        <?php include "layouts/footer.php"; ?>

    </div>

    <?php require "layouts/__js.php" ?>

</body>
</html>