<?php $dataContact = get_config("data", "contact"); ?>
<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
<footer id="ts-footer">

    <!--<div class="map ts-height__600px" id="map"></div>-->

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3985.2562441695745!2d-78.84861578597906!3d-2.7402092445648667!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd9f536b83873693!2sCONTEXAZ!5e0!3m2!1ses-419!2sec!4v1581652740582!5m2!1ses-419!2sec" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


    <section id="contact" class="ts-separate-bg-element" data-bg-image="<?php echo route['a'] ?>img/bg-desk.jpg" data-bg-image-opacity=".1" data-bg-color="#1b1464">
        <div class="container">
            <div class="ts-box mb-0 p-5 ts-mt__n-10">
                <div class="row">
                    <div class="col-md-4">
                        <address>
                            <figure>
                                <strong>CONTEXAZ</strong><br>
                                <?php echo $dataContact["address"] ?? null ?><br>
                                <?php echo $dataContact["location"] ?? null ?>
                            </figure>
                            <br>
                            <figure>
                                <div class="font-weight-bold">Email:</div>
                                <a href="mailto:info@contexaz.com"><?php echo $dataContact["email"] ?? null ?></a>
                            </figure>
                            <figure>
                                <div class="font-weight-bold">Teléfono:</div>
                                <?php echo $dataContact["whatsapp"] ?? null ?>
                            </figure>
                            <div class="font-weight-bold">Oficina:</div>
                            <?php echo $dataContact["phone"] ?? null ?>
                        </address>
                        <!--end address-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-8">
                        <h3>Formulario de Contacto</h3>
                        <form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent" data-php-path="<?php echo route['a'] ?>php/email.php">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-name">Nombre *</label>
                                        <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Nombres" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="form-contact-email">Correo electrónico *</label>
                                        <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Email" required>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-6 col-sm-6 -->
                            </div>
                            <!--end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form-contact-message">Mensaje *</label>
                                        <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Su mensaje aqui" required></textarea>
                                    </div>
                                    <!--end form-group -->
                                </div>
                                <!--end col-md-12 -->
                            </div>
                            <!--end row -->
                            <div class="form-group clearfix">
                                <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Enviar mensaje</button>
                            </div>
                            <!--end form-group -->
                            <div class="form-contact-status"></div>
                        </form>
                        <!--end form-contact -->
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end ts-box-->
            <div class="text-center text-white py-4">
                <small>Desarrollado por &copy; 2024 DUOTICS</small>
            </div>
        </div>
        <!--end container-->
    </section>

</footer>
<!--end #footer-->