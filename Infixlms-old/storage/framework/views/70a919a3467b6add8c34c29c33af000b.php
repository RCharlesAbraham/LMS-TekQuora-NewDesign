<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('common.Checkout')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('public/frontend/infixlmstheme/css/select2.min.css')); ?><?php echo e(assetVersion()); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginal18aaf4e9479a890c511364a6f15aeabb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18aaf4e9479a890c511364a6f15aeabb = $attributes; } ?>
<?php $component = App\View\Components\CheckoutPageSection::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkout-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CheckoutPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18aaf4e9479a890c511364a6f15aeabb)): ?>
<?php $attributes = $__attributesOriginal18aaf4e9479a890c511364a6f15aeabb; ?>
<?php unset($__attributesOriginal18aaf4e9479a890c511364a6f15aeabb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18aaf4e9479a890c511364a6f15aeabb)): ?>
<?php $component = $__componentOriginal18aaf4e9479a890c511364a6f15aeabb; ?>
<?php unset($__componentOriginal18aaf4e9479a890c511364a6f15aeabb); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/checkout.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/city.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\checkout.blade.php ENDPATH**/ ?>