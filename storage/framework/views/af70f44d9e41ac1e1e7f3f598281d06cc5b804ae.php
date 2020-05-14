<!-- video2 section start -->
<section class="video2 ptb-100 bg-gradient-2" id="video2">
    <div class="container">
        <div class="row">
            <div class="man-desktop col-lg-6 col-md-6">
                <div class="video2-popup bg-gradient-1">
                    <a href="<?php echo app('translator')->get('#video2 url-video'); ?>" class="popup-youtube">
                        <i class="icofont icofont-ui-play bg-gradient-2"></i></a>
                </div>
                &nbsp;<br>
            </div>
            <div class="col-lg-6 col-md-6">
                <h1><?php echo app('translator')->get('#video2 title', ['fullname' => __('#fullname')]); ?></h1>
                <h5 style="text-align:justify;margin-top:1rem;font-weight:400"><?php echo app('translator')->get('#video2 content'); ?></h5>
            </div>
            <div class="col-lg-12" style="padding:3.5em 0 0">
                <a class="btn btn-white" href="#"><?php echo app('translator')->get('#video2 button'); ?></a>
            </div>
        </div>
    </div>
</section>
<!-- video2 section end --><?php /**PATH /var/www/site/resources/views/layouts/sections/video2.blade.php ENDPATH**/ ?>