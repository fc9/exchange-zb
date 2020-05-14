
<div style="display:inline-block;width:32px;height:32px">
    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" title="<?php echo app('translator')->get('#lang'); ?>"
       data-expanded="false" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:0">
        <i class="flag-icon <?php echo app('translator')->get('#class-flag-icon'); ?>"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-left animated bounceInDown" style="overflow:hidden">
        <?php foreach (\App\Lang::getSupportedLanguages() as $lang): ?>
        <?php if($lang !== ''): ?>
            <a class="dropdown-item" href="<?php echo e(url('locale/' . $lang)); ?>">
                <i class="flag-icon <?php echo app('translator')->get('#class-flag-icon', [], $lang); ?>"></i>&nbsp;<?php echo app('translator')->get('#language', [], $lang); ?>
            </a>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /var/www/site/resources/views/layouts/components/dropdown-lang.blade.php ENDPATH**/ ?>