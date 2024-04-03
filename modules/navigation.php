<!--NAVIGATION ******************************************************************************************-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top ts-separate-bg-element" data-bg-color="#fff">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_config('data', 'menu', 'home-link') ?>">
            <img src="<?php echo route['a'] ?>img/logo-A-280x120.png" alt="" class="logo-img">
        </a>
        <!--end navbar-brand-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--end navbar-toggler-->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active ts-scroll" href="<?php echo get_config('data', 'menu', 'home-link') ?>"><?php echo get_config('data', 'menu', 'home') ?></a>
                <a class="nav-item nav-link ts-scroll" href="<?php echo get_config('data', 'menu', 'do-link') ?>"><?php echo get_config('data', 'menu', 'do') ?></a>
                <a class="nav-item nav-link ts-scroll" href="<?php echo get_config('data', 'menu', 'somos-link') ?>"><?php echo get_config('data', 'menu', 'somos') ?></a>
                <a class="nav-item nav-link ts-scroll" href="<?php echo get_config('data', 'menu', 'news-link') ?>"><?php echo get_config('data', 'menu', 'news') ?></a>
                <a class="nav-item nav-link ts-scroll" href="<?php echo get_config('data', 'menu', 'cont-link') ?>"><?php echo get_config('data', 'menu', 'cont') ?></a>
            </div>
            <!--end navbar-nav-->
        </div>
        <!--end collapse-->
    </div>
    <!--end container-->
</nav>
<!--end navbar-->