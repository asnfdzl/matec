html

<div class="f-carousel fullscreen-height" id="myCarousel">
    <div class="f-carousel__viewport">
        <div class="f-carousel__track">
            <div data-lazy-src="<?= asset('images/matec-slide.png') ?>" class="f-carousel__slide">
                <div class="container fullscreen-height d-flex align-items-center">
                    <img src="<?= asset('images/slide-text.png') ?>" alt="">
                </div>
            </div>
            <!--<div data-lazy-src="<?php /*= asset('images/matec-slide.png') */?>" class="f-carousel__slide">

                    </div>-->
        </div>
    </div>
</div>

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