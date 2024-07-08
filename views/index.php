<!DOCTYPE html>
<html class="wide" lang="en">
<head>
    <title>Welcome to MATEC 2024 :: MATEC</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= asset('images/logo.png') ?>" type="image/x-icon">

    <?php require 'layouts/__css.php' ?>


</head>
<body>

    <?php /*require 'layouts/loader.php' */?>

    <div class="page">

        <?php include "layouts/navbar.php"; ?>

        <div class="f-carousel fullscreen-height" id="myCarousel">

            <!--<canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>-->

            <div class="f-carousel__viewport">
                <div class="f-carousel__track">
                    <div data-lazy-src="<?= asset('images/matec-slide.png') ?>" class="f-carousel__slide">
                        <div class="container fullscreen-height d-flex align-items-center">
                            <img src="<?= asset('images/slide-text.png') ?>" alt="">
                        </div>
                    </div>
                    <div data-lazy-src="<?= asset('images/matec-slide.png') ?>" class="f-carousel__slide">

                    </div>
                </div>
            </div>

        </div>

        <!-- Section Biggest 2019 Digital Conference-->
        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-cover-section" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-01.png') ?>)">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-md-12 col-lg-12">
                        <img src="<?= asset('images/matec-images/matec-09.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-10.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-11.png') ?>" alt="" class="d-flex w-auto h-md-30px h-xs-15px">
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-12 text-sm-left text-center text-image-container">
                        <img src="<?= asset('images/matec-images/matec-07.png') ?>" alt="Engine Image" class="embedded-image">
                        <p>The Entrepreneurial Engine is a concept that focuses on fostering innovation and growth within the automotive industry through entrepreneurial initiatives. This approach emphasizes the importance of startups, small businesses, and independent innovators in driving advancements and competitiveness in the sector. By leveraging the agility and creativity of these entities, the automotive industry can accelerate the development of cutting-edge technologies, such as electric vehicles, autonomous driving systems, and advanced manufacturing processes.</p>
                        <p>Central to the Entrepreneurial Engine is the collaboration between established automotive companies and emerging startups. Large corporations provide resources, industry expertise, and market access, while startups contribute fresh ideas, innovative solutions, and a willingness to take risks. This symbiotic relationship enables the rapid prototyping, testing, and scaling of new products and services.</p>
                        <p>Furthermore, the Entrepreneurial Engine is supported by a robust ecosystem that includes venture capital firms, incubators, accelerators, and government initiatives. These elements work together to provide the necessary funding, mentorship, and regulatory support for startups to thrive. By creating an environment conducive to entrepreneurial activity, the automotive industry can not only keep pace with technological advancements but also anticipate and shape future trends.</p>
                        <p>In conclusion, the Entrepreneurial Engine plays a crucial role in accelerating automotive growth by harnessing the potential of entrepreneurial ventures. This dynamic framework promotes innovation, fosters collaboration, and ensures that the automotive sector remains at the forefront of technological progress.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Book Your Ticket-->
        <section class="parallax-container section" data-parallax-img="<?= asset('images/bg-parallax-01-1894x778.jpg') ?>">
            <div class="parallax-content section-lg context-dark text-center parallax-overlay-gradient-primary">
                <div class="container wow fadeIn">
                    <!-- Block with content-->
                    <div class="block-lg block-center">
                        <h6>Time is running out</h6>
                        <h3>Book your ticket.</h3>
                        <p>Bringing together automotive industry players at all levels from vehicle manufacturers, vendors, suppliers of spare parts, accessories, merchandise, agencies/institutions involved. Including educational institutions related automotive. Various interesting activities throughout the program</p>
                        <!-- Countdown rectangle-->
                        <div class="countdown countdown-rect" data-countdown="data-countdown" data-to="2020-12-31">
                            <div class="countdown-block box-with-triangle-right wow fadeScale countdown-block-days" data-wow-delay="0s" data-triangle=".countdown-block-overlay">
                                <div class="countdown-block-overlay"></div>
                                <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewbox="0 0 200 237" data-progress-days="">
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
                                <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewbox="0 0 200 237" data-progress-hours="">
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
                                <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewbox="0 0 200 237" data-progress-minutes="">
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
                                <svg class="countdown-circle" x="0" y="0" width="200" height="237" viewbox="0 0 200 237" data-progress-seconds="">
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

        <!-- Section Biggest 2019 Digital Conference-->
        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-cover-section fullscreen-height" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-02.png') ?>)">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-md-12 col-lg-6 col-xl-7 text-sm-left text-center">
                        <img src="<?= asset('images/matec-images/matec-04.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-08.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-4">
                        <ul class="listing cog-listing">
                            <li>Forming a cluster of automotive entrepreneurs assisted by MARA or other parties to explore areas of cooperation and business expanding.</li>
                            <li>Ensuring that entrepreneurs involved in the automotive industry can use the MATEC2024 platform for expand the existing business network market.</li>
                            <li>Empowering the automotive entrepreneur's business brand through continuous promotion through the media and beyond will strengthen the business brand of the entrepreneur involved to a better level.</li>
                            <li>Providing a dedicated marketing and advertising platform to introduce automotive entrepreneurs' companies and products directly to customers and the community.</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-5 text-md-right">
                        <img src="<?= asset('images/matec-images/matec-06.png') ?>" alt="" class="d-flex img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-cover-section" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-05.png') ?>); background-position: center left;">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-12 col-lg-6 col-xl-7 text-sm-left text-center text-white">
                        <img src="<?= asset('images/matec-images/matec-16.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-17.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-18.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-4">
                        <p class="mb-2">For those seeking to grow their business in automotive industries, MATEC 2024 is the ideal platform to:</p>
                        <ul class="list list-marked">
                            <li>Showcase the latest in automotive technology, automotive products and services</li>
                            <li>Explore opportunities to trade, invest, collaborate and share in the transfer the transfer of technology</li>
                            <li>Expand business horizons</li>
                            <li>Develop import and export markets</li>
                            <li>Launch new and innovative products and services</li>
                            <li>Explore careers and entrepreneurial opportunities</li>
                            <li>Deepen relationships with existing customers</li>
                            <li>Forge international alliances and build strategic partnerships</li>
                            <li>Be the first to discover the latest market trends</li>
                            <li>Boost your market competitiveness</li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-5 text-md-right">
                        <img src="<?= asset('images/matec-images/matec-15.png') ?>" alt="" class="d-flex img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg bg-default wow fadeIn bg-image-section bg-cover-section fullscreen-height" style="background-image: url(<?= asset('images/matec-images/matec-bg-images-03.png') ?>)">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-md-12 col-lg-12">
                        <img src="<?= asset('images/matec-images/matec-12.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-13.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px mb-2">
                        <img src="<?= asset('images/matec-images/matec-14.png') ?>" alt="" class="d-flex w-auto h-md-55px h-xs-20px">
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6 text-md-right">
                        <img src="<?= asset('images/matec-images/matec-bg-images-04.png') ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6 text-sm-left text-center">
                        <p>National Stadium is the central and most prominent sports center and building at the National Sports Complex in Bukit Jalil. The elliptical outdoor stadium has a total area of 76,000 square meters and its classical bowl shape is enhanced by the dramatic overlapping of three spectator tiers.</p>
                        <p>Our outdoor car park spaces are a perfect canvas for your open-air events. You have a choice of 5 varied sizes in a gated venue, with a combined capacity of 160,000 pax standing. With access to both power and water supply, a 3 minute walk to the Bukit Jalil LRT station and a 20 minute drive from the city centre, we are also flexible to be part of your customised event.</p>
                    </div>
                </div>
            </div>
        </section>

        <?php include "layouts/footer.php"; ?>

    </div>

    <?php require "layouts/__js.php" ?>

    <script>
        new Carousel(document.getElementById("myCarousel"), {
            Autoplay : {
                timeout: 10000,
                pauseOnHover: false,
            },
        }, {
            Autoplay
        });
    </script>

</body>
</html>