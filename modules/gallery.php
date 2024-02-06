<?php
$galleryData = getImageNamesFromDirectory("data/gallery/", true);
?>
<section id="gallery" class="ts-block ts-shape-mask__up" data-bg-color="#f7f7f7" data-bg-image="<?php echo route['a'] ?>img/bg-shapes-02.jpg" data-bg-size="cover" data-bg-repeat="repeat">
    <div class="ts-title text-center">
        <h2>Noticias</h2>
    </div>
    <!--end ts-title-->
    <?php if (count($galleryData) > 0) { ?>
        <div class="owl-carousel ts-carousel-centered py-2 mb-5" data-owl-loop="1" data-owl-nav="1" data-owl-items="4" data-owl-margin="30" data-owl-center="1">
            <?php foreach ($galleryData as $gallery) { ?>
                <div class="slide">
                    <img src="<?php echo $gallery ?>" class="ts-shadow__md ts-border-radius__md" alt="">
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div>
            <p class="lead">No data</p>
        </div>
    <?php } ?>
</section>
<!--end #gallery.ts-block-->