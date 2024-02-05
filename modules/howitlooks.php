<!--HOW IT LOOKS ****************************************************************************************-->
<section id="how-it-looks" class="pb-0 ts-block text-center ts-overflow__hidden ts-shape-mask__down" data-bg-color="#ededed" data-bg-image="<?php echo route['a'] ?>img/bg-blurred-shape.jpg" data-bg-repeat="no-repeat" data-bg-position="bottom" data-bg-size="inherit">
    <div class="container">
        <div class="ts-title">
            <h2>Quienes somos</h2>
            <h5>Sobre nuestra empresa</h5>
        </div>
        <!--end ts-title-->

        <ul class="nav nav-tabs justify-content-center my-5" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="desktop-tab" data-toggle="tab" href="#desktop" role="tab" aria-controls="desktop" aria-selected="true">
                    <h4>Misión</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tablet-tab" data-toggle="tab" href="#tablet" role="tab" aria-controls="tablet" aria-selected="false">
                    <h4>Visión</h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#mobile" role="tab" aria-controls="mobile" aria-selected="false">
                    <h4>Valores</h4>
                </a>
            </li>
        </ul>

        <div class="tab-content pt-5 ts-tabs-presentation" id="myTabContent" data-animate="ts-fadeInUp">
            <div class="tab-pane fade show active" id="desktop" role="tabpanel" aria-labelledby="desktop">
                <img src="<?php echo route['a'] ?>img/img-mision.png" class="mw-100" alt="">
            </div>
            <div class="tab-pane fade" id="tablet" role="tabpanel" aria-labelledby="tablet">
                <img src="<?php echo route['a'] ?>img/img-vision.png" class="mw-100" alt="">
            </div>
            <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile">
                <img src="<?php echo route['a'] ?>img/img-valores.png" class="mw-100" alt="">
            </div>
        </div>

    </div>
</section>
<!--END HOW IT LOOKS ************************************************************************************-->