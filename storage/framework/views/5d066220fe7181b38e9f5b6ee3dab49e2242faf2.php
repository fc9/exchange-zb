<!-- main section start -->
<section class="slider1" id="home">
    <div class="slider">
        <div class="single-slide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="thin"><?php echo app('translator')->get('#slide1 #header', ['name' => __('#name')]); ?></h2>
                            <h2><?php echo app('translator')->get('#slide1 #header2', ['name' => __('#name')]); ?></h2>
                            <a href="<?php echo app('translator')->get('#link-exchange'); ?>" class="btn btn-yellow">
                                <?php echo app('translator')->get('#slide1 #button'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hand-mockup text-lg-left text-center">
                            <img src="<?php echo app('translator')->get('#slide1 #image'); ?>" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="thin"><?php echo app('translator')->get('#slide2 #header', ['name' => __('#name')]); ?></h2>
                            <h2><?php echo app('translator')->get('#slide2 #header2', ['name' => __('#name')]); ?></h2>
                            <a href="<?php echo app('translator')->get('#link-exchange'); ?>" class="btn btn-yellow">
                                <?php echo app('translator')->get('#slide2 #button'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hand-mockup text-lg-left text-center">
                            <img src="<?php echo app('translator')->get('#slide2 #image'); ?>" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content">
                            <h2 class="thin"><?php echo app('translator')->get('#slide3 #header', ['name' => __('#name')]); ?></h2>
                            <h2><?php echo app('translator')->get('#slide3 #header2', ['name' => __('#name')]); ?></h2>
                            <a href="<?php echo app('translator')->get('#link-exchange'); ?>"
                               class="btn btn-yellow" target="_blank">
                                <?php echo app('translator')->get('#slide3 #button'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hand-mockup text-lg-left text-center">
                            <img src="<?php echo app('translator')->get('#slide3 #image'); ?>" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- main section end --><?php /**PATH /var/www/site/resources/views/layouts/sections/slider1.blade.php ENDPATH**/ ?>