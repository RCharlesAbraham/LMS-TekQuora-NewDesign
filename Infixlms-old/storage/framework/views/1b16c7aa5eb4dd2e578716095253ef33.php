<link rel="stylesheet" href="<?php echo e(asset('public/backend/css/jquery-ui.css')); ?><?php echo e(assetVersion()); ?>"/>

<link rel="stylesheet" href="<?php echo e(asset('public/backend/vendors/font_awesome/css/all.min.css')); ?><?php echo e(assetVersion()); ?>"/>
<link rel="stylesheet" href="<?php echo e(asset('public/backend/css/themify-icons.css')); ?><?php echo e(assetVersion()); ?>"/>


<link rel="stylesheet" href="<?php echo e(asset('public/chat/css/style.css')); ?><?php echo e(assetVersion()); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?><?php echo e(assetVersion()); ?>"/>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive("WhatsappSupport")): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/whatsapp-support/style.css')); ?><?php echo e(assetVersion()); ?>"/>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<link rel="stylesheet" href="<?php echo e(asset('public/backend/css/fullcalendar.min.css')); ?><?php echo e(assetVersion()); ?>">

<link rel="stylesheet" href="<?php echo e(asset('public/backend/css/app.css')); ?><?php echo e(assetVersion()); ?>">



<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/backend_style_rtl.css')); ?><?php echo e(assetVersion()); ?>"/>
<?php else: ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/backend_style.css')); ?><?php echo e(assetVersion()); ?>"/>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<!-- uppy css -->
<link rel="stylesheet" href="<?php echo e(asset('public/vendor/uppy/uppy.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/vendor/uppy/media.css')); ?>">

<?php echo $__env->yieldPushContent('styles'); ?>




<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\style.blade.php ENDPATH**/ ?>