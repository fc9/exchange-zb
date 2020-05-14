<!-- form section start -->
<section class="form ptb-90 bg-gradient-1" id="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="vcontact-form">
                    <h3><?php echo e(strtoupper(__('#nav Contact'))); ?></h3>
                    <p><?php echo app('translator')->get('home.form.text'); ?></p>
                    <p class="form-message"></p>
                    <form id="" action="<?php echo e(route('contact')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="name" placeholder="<?php echo app('translator')->get('#form Name'); ?>">
                        <input type="email" name="email" placeholder="<?php echo app('translator')->get('#form Email'); ?>">
                        <input type="text" name="subject" placeholder="<?php echo app('translator')->get('#form Subject'); ?>">
                        <textarea placeholder="<?php echo app('translator')->get('#form Your message'); ?>" name="message"></textarea>
                        <button type="submit" name="submit"><?php echo app('translator')->get('#form Send Message'); ?></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright">
                    <a target="_blank" href="<?php echo e(env(' home ')); ?>"><?php echo app('translator')->get('#fullname'); ?></a>
                    &copy; <?php echo e(date('Y')); ?>. <?php echo app('translator')->get('All rights reserved.'); ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- form section end --><?php /**PATH /var/www/site/resources/views/layouts/sections/form.blade.php ENDPATH**/ ?>