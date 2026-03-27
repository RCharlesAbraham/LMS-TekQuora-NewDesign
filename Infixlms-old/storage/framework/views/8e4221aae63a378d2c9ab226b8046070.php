<link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/app.css"
      media="screen,print">
<link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style.css"
      media="screen,print">
<script src="<?php echo e(asset('public/js/common.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/custom.css')); ?>">
<div class="error_wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="error_wrapper_info text-center">
                    <div class="thumb">
                        <img src="<?php echo e(asset('public/errors/'.$exception->getStatusCode().'.png')); ?>" alt="">
                    </div>
                    <h3><?php echo $__env->yieldContent('message'); ?></h3>
                    <p><?php echo $__env->yieldContent('details'); ?></p>
                    <a href="<?php echo e(url('/')); ?>" class="theme_btn ">
                        <?php echo e(__('frontend.Back To Homepage')); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\errors\static.blade.php ENDPATH**/ ?>