<?php $dataNumbers = get_config("data", "numbers") ?>
<!--NUMBERS *********************************************************************************************-->
<section id="numbers" class="ts-block ts-separate-bg-element" data-bg-image="<?php echo route['a'] ?>img/pattern-topo.png" data-bg-image-opacity=".05" data-bg-size="inherit" data-bg-repeat="repeat">
    <div class="container">
        <div class="ts-promo-numbers">
            <div class="row">
                <div class="col-sm-4">
                    <div class="ts-promo-number text-center">
                        <h2 data-animate="ts-zoomIn"><?php echo $dataNumbers['clients'] ?></h2>
                        <h3 class="mb-0 ts-opacity__50">Clientes</h3>
                        <span class="ts-promo-number-divider"></span>
                    </div>
                    <!--end ts-promo-number-->
                </div>
                <!--end col-sm-4-->
                <div class="col-sm-4">
                    <div class="ts-promo-number text-center">
                        <h2 data-animate="ts-zoomIn" data-delay="0.2s"><?php echo $dataNumbers['produced'] ?></h2>
                        <h3 class="mb-0 ts-opacity__50">Prendas producidas</h3>
                        <span class="ts-promo-number-divider"></span>
                    </div>
                    <!--end ts-promo-number-->
                </div>
                <!--end col-sm-4-->
                <div class="col-sm-4">
                    <div class="ts-promo-number text-center">
                        <h2 data-animate="ts-zoomIn" data-delay="0.2s"><?php echo $dataNumbers['meters'] ?></h2>
                        <h3 class="mb-0 ts-opacity__50">Metros de tela cortada</h3>
                    </div>
                    <!--end ts-promo-number-->
                </div>
                <!--end col-sm-4-->
            </div>
            <!--end row-->
        </div>
        <!--end ts-promo-numbers-->
    </div>
    <!--end container-->
</section>
<!--END NUMBERS *****************************************************************************************-->