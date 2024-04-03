<?php

?>
<!--*********************************************************************************************************-->
<!--************ HERO ***************************************************************************************-->
<!--*********************************************************************************************************-->
<header id="ts-hero" class="ts-full-screen">
    <?php include(root['m'] . 'floatbutton.php') ?>
    <?php include(root['m'] . 'navigation.php') ?>

    <!--HERO CONTENT ****************************************************************************************-->
    <div class="container align-self-center">
        <div class="row align-items-center">
            <div class="col-sm-7">
                <h3 class="ts-font-color__black ts-opacity__50">Fabricamos todo tipo de uniforme!</h3>
                <h1><?php echo get_config('data', 'system', 'company') ?></h1>
                <h2 class="mb-3"><?php echo get_config('data', 'system', 'slogan') ?></h2>
                <br>
                <a href="#how-it-works" class="btn btn-primary btn-lg ts-scroll" data-bg-color="#1b1464">Mas información</a>
            </div>
            <!--end col-sm-7 col-md-7-->
            <div class="col-sm-5 d-none d-sm-block">
                <div class="owl-carousel text-center" data-owl-nav="1" data-owl-loop="1">
                    <img src="<?php echo route['a'] ?>img/img-phone-01.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
                    <img src="<?php echo route['a'] ?>img/img-phone-02.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
                    <img src="<?php echo route['a'] ?>img/img-phone-03.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
                    <img src="<?php echo route['a'] ?>img/img-phone-04.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
                    <img src="<?php echo route['a'] ?>img/img-phone-12.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
                </div>
            </div>
            <!--end col-sm-5 col-md-5 col-xl-5-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <div id="ts-dynamic-waves" class="ts-background">
        <svg class="ts-svg ts-z-index__1 ts-flip-x" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <path class="ts-dynamic-wave" id="wave-1" d="" data-wave-color="#fff" data-wave-height=".3" data-wave-bones="4" data-wave-speed="0.5" />
        </svg>
        <svg class="ts-svg ts-z-index__1" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <path class="ts-dynamic-wave" id="wave-2" d="" data-wave-color="#fff" data-wave-height=".3" data-wave-bones="6" data-wave-speed="0.3" />
        </svg>
        <div class="ts-background-image ts-parallax-element" data-bg-image="<?php echo route['a'] ?>img/bg-blurred-run-03.jpg"></div>
    </div>

</header>
<!--end #hero-->