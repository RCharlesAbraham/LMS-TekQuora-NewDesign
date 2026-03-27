<!-- hero area:start -->

<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title') ? Settings('site_title') : 'Infix LMS'); ?> | <?php echo e(__('appointment.Become Instructor')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css')); ?><?php echo e(assetVersion()); ?>"/>
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\owl.carousel.min.css')); ?><?php echo e(assetVersion()); ?>"/>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginal7e55a5f2ba4368e92367a93aefaa0a20 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7e55a5f2ba4368e92367a93aefaa0a20 = $attributes; } ?>
<?php $component = App\View\Components\AppointmentBecomeInstructor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment-become-instructor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppointmentBecomeInstructor::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7e55a5f2ba4368e92367a93aefaa0a20)): ?>
<?php $attributes = $__attributesOriginal7e55a5f2ba4368e92367a93aefaa0a20; ?>
<?php unset($__attributesOriginal7e55a5f2ba4368e92367a93aefaa0a20); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7e55a5f2ba4368e92367a93aefaa0a20)): ?>
<?php $component = $__componentOriginal7e55a5f2ba4368e92367a93aefaa0a20; ?>
<?php unset($__componentOriginal7e55a5f2ba4368e92367a93aefaa0a20); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\plugins\jquery-ui\jquery-ui.min.js')); ?>"></script>

    <script src="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\js\owl.carousel.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_become_tutor_page.blade.php ENDPATH**/ ?>