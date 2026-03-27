<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('common.Checkout')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css')); ?><?php echo e(assetVersion()); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginalde6b9ea5af16355bfce238b38f331385 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde6b9ea5af16355bfce238b38f331385 = $attributes; } ?>
<?php $component = App\View\Components\AppointmentCheckoutPageSection::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment-checkout-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppointmentCheckoutPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde6b9ea5af16355bfce238b38f331385)): ?>
<?php $attributes = $__attributesOriginalde6b9ea5af16355bfce238b38f331385; ?>
<?php unset($__attributesOriginalde6b9ea5af16355bfce238b38f331385); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde6b9ea5af16355bfce238b38f331385)): ?>
<?php $component = $__componentOriginalde6b9ea5af16355bfce238b38f331385; ?>
<?php unset($__componentOriginalde6b9ea5af16355bfce238b38f331385); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/checkout.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/city.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_checkout.blade.php ENDPATH**/ ?>