<!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="ts-hero" class="ts-full-screen">

            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top ts-separate-bg-element" data-bg-color="#fff">
                <div class="container">
                    <a class="navbar-brand" href="#page-top">
                        <img src="<?php echo route['a'] ?>img/logo.png" alt="">
                    </a>
                    <!--end navbar-brand-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--end navbar-toggler-->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active ts-scroll" href="#page-top">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link ts-scroll" href="#how-it-looks">How It Looks</a>
                            <a class="nav-item nav-link ts-scroll" href="#what-is-appstorm">About</a>
                            <a class="nav-item nav-link ts-scroll" href="#pricing">Pricing</a>
                            <a class="nav-item nav-link ts-scroll" href="#our-clients">Our Clients</a>
                            <a class="nav-item nav-link ts-scroll" href="#gallery">Galley</a>
                            <a class="nav-item nav-link ts-scroll" href="#form-contact">Contact</a>
                            <a class="nav-item nav-link ts-scroll btn btn-primary btn-sm text-white ml-3 px-3 ts-width__auto" href="#download">Download</a>
                        </div>
                        <!--end navbar-nav-->
                    </div>
                    <!--end collapse-->
                </div>
                <!--end container-->
            </nav>
            <!--end navbar-->

            <!--HERO CONTENT ****************************************************************************************-->
            <div class="container align-self-center">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <h3 class="ts-font-color__black ts-opacity__50">Get Organized!</h3>
                        <h1>All Your Activities In One Place</h1>
                        <a href="#how-it-works" class="btn btn-primary btn-lg ts-scroll" data-bg-color="#1b1464">Learn More</a>
                    </div>
                    <!--end col-sm-7 col-md-7-->
                    <div class="col-sm-5 d-none d-sm-block">
                        <div class="owl-carousel text-center" data-owl-nav="1" data-owl-loop="1">
                            <img src="<?php echo route['a'] ?>img/img-phone-1st-screen.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
                            <img src="<?php echo route['a'] ?>img/img-phone-2nd-screen.png" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
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
                    <path class="ts-dynamic-wave" id="wave-1" d="" data-wave-color="#fff" data-wave-height=".3" data-wave-bones="4" data-wave-speed="0.5"/>
                </svg>
                <svg class="ts-svg ts-z-index__1" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs></defs>
                    <path class="ts-dynamic-wave" id="wave-2" d="" data-wave-color="#fff" data-wave-height=".3" data-wave-bones="6" data-wave-speed="0.3"/>
                </svg>
                <div class="ts-background-image ts-parallax-element" data-bg-image="<?php echo route['a'] ?>img/bg-blurred-run.jpg"></div>
            </div>

        </header>
        <!--end #hero-->