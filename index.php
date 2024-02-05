<?php require('init.php'); ?>
<?php include(root['t'] . "head.php"); ?>
<div class="ts-page-wrapper" id="page-top">
    <?php include(root['t'] . "top.php"); ?>
    <!--*********************************************************************************************************-->
    <!--************ CONTENT ************************************************************************************-->
    <!--*********************************************************************************************************-->
    <main id="ts-content">
        <?php include(root['m'] . 'howitworks.php') ?>
        <?php include(root['m'] . 'partners.php') ?>
        <?php include(root['m'] . 'howitlooks.php') ?>
        <?php include(root['m'] . 'whatis.php') ?>
        <?php //include(root['m'] . 'features.php') ?>
        <?php //include(root['m'] . 'subscribe.php') ?>
        <?php //include(root['m'] . 'pricing.php') ?>
        <?php //include(root['m'] . 'clients.php') ?>
        <?php include(root['m'] . 'gallery.php') ?>
        <?php //include(root['m'] . 'organize.php') ?>
        <?php include(root['m'] . 'download.php') ?>
        <?php include(root['m'] . 'numbers.php') ?>
        <?php //include(root['m'] . 'team.php') ?>
    </main>
    <!--end #content-->
    <?php include(root['t'] . "bottom.php"); ?>
</div>

<?php include(root['t'] . "foot.php"); ?>