<!-- ??? section start -->
<section class="steps ptb-90" id="steps">
    <div class="container">
        <div class="row">
            &nbsp;
            <div class="col-lg-12">
                <div class="sec-title">
                    <h4 class="subtitle"><?php echo app('translator')->get("It's simple and easy"); ?></h4>
                    <h2 class="thin"><?php echo app('translator')->get('See the steps to start making a profit!'); ?></h2>
                    <p><?php echo app('translator')->get('These are the steps you will take to start making a profit together with :name', ['name' => __('#name')]); ?></p>
                </div>
            </div>
        </div>
        <div class="row flexbox-center">
            <div class="col-lg-3 col-md-3">
                <div class="single-showcase-box icon">
                    <img class="icon" src="theme/icons/send.svg" alt="">
                    <h5><?php echo app('translator')->get('#steps s1 title'); ?></h5>
                    <p><?php echo app('translator')->get('#steps s1 content'); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-showcase-box icon">
                    <img class="icon" src="theme/icons/times-money.svg" alt="">
                    <h5><?php echo app('translator')->get('#steps s2 title'); ?></h5>
                    <p><?php echo app('translator')->get('#steps s2 content'); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-showcase-box icon">
                    <img class="icon" src="theme/icons/transfer.svg" alt="">
                    <h5><?php echo app('translator')->get('#steps s3 title'); ?></h5>
                    <p><?php echo app('translator')->get('#steps s3 content'); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-showcase-box icon">
                    <img class="icon" src="theme/icons/check.svg" alt="">
                    <h5><?php echo app('translator')->get('#steps s4 title'); ?></h5>
                    <p><?php echo app('translator')->get('#steps s4 content'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ??? section end --><?php /**PATH /var/www/site/resources/views/layouts/sections/steps.blade.php ENDPATH**/ ?>