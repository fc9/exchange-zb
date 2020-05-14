<!-- header section start -->
<header class="header bg-gradient-1">
    <div class="container">
        <div class="row flexbox-center">

            <div class="col-lg-2 col-md-3 col-6">
                <div class="logo">
                    <a href="<?php echo e(route('home')); ?>">
                        <?php echo $__env->make('layouts.components.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </a>
                </div>
            </div>

            <div class="col-lg-10 col-md-9 col-6">
                <div class="responsive-menu"></div>

                <div class="mainmenu">
                    <ul id="primary-menu">
                        <li><a class="nav-link active" href="<?php echo e(route('home')); ?>/#home"><?php echo app('translator')->get('#nav Home'); ?></a></li>
                        <li><a class="nav-link" href="<?php echo e(route('home')); ?>/#market"><?php echo app('translator')->get('#nav Market'); ?></a></li>
                        <li><a class="nav-link" href="<?php echo e(route('home')); ?>/#simple-and-easy"><?php echo app('translator')->get('#nav Simple and Easy'); ?></a></li>
                        <li><a class="nav-link" href="<?php echo e(route('home')); ?>/#p2p"><?php echo app('translator')->get('#nav Peer-to-Peer'); ?></a></li>
                        <li><a class="nav-link" href="<?php echo e(route('home')); ?>/#contact"><?php echo app('translator')->get('#nav Contact'); ?></a></li>
                        <li>
                            <a target="_blank" class="btn btn-white" href="<?php echo app('translator')->get('#link-login'); ?>">
                                <?php echo app('translator')->get('Login'); ?>&nbsp;
                            </a>
                        </li><li>
                            <a target="_blank" class="btn" href="<?php echo app('translator')->get('#link-register'); ?>">
                                <?php echo app('translator')->get('Create your account'); ?>
                            </a>
                        </li><li>
                            <?php echo $__env->make('layouts.components.dropdown-lang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header><!-- header section end --><?php /**PATH /var/www/site/resources/views/layouts/sections/header.blade.php ENDPATH**/ ?>