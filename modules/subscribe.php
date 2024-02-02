<!--SUBSCRIBE *******************************************************************************************-->
<section id="subscribe" class="ts-block ts-separate-bg-element" data-bg-image="<?php echo route['a'] ?>img/bg-pattern-dot.png" data-bg-size="inherit" data-bg-image-opacity=".1" data-bg-repeat="repeat">
    <div class="container">
        <h3>Subscribe For Crypto News!</h3>
        <form class="ts-form ts-form-email ts-labels-inside-input" data-php-path="<?php echo route['a'] ?>php/email.php">
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group mb-0">
                        <label for="email-subscribe">Email address</label>
                        <input type="email" class="form-control" id="email-subscribe" aria-describedby="subscribe" name="email" placeholder="" required>
                        <small class="form-text mt-2 ts-opacity__50">*You’ll get only relevant news once a week</small>
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-10-->
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
                <!--end col-md-2-->
            </div>
            <!--end row-->
        </form>
        <!--end ts-form-->
    </div>
    <!--end container-->
</section>
<!--END SUBSCRIBE ***************************************************************************************-->