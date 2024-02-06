<?php
$partnersData = getImageNamesFromDirectory(root['d'] . "partners", true);
?>
<!--PARTNERS ********************************************************************************************-->
<section id="partners" class="py-10 ts-block text-center" data-bg-color="#f6f6f6">
    <!--container-->
    <div class="container-fluid">
        <div class="ts-title">
            <h2>Galeria de Clientes</h2>
        </div>
        <!--block of logos-->
        <?php if (count($partnersData) > 0) { ?>
            <div class="px-5">
                <div class="card-deck">
                    <!--beg of logos-->
                    <?php foreach ($partnersData as $partner) { ?>
                        <div class="card p-1">
                            <img src="<?php echo $partner ?>" class="card-img-top" alt="...">
                        </div>
                    <?php } ?>
                    <!--end of logos-->
                </div>
            </div>
        <?php } else { ?>
            <div>
                <p class="lead">No data</p>
            </div>
        <?php } ?>
        <!--end container-->
</section>
<!--END PARTNERS ****************************************************************************************-->