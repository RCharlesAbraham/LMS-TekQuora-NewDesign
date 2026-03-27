<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('appointment.Instructors')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\plugins\price-range\ion.rangeslider.min.css')); ?><?php echo e(assetVersion()); ?>"/>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.rtl.css')); ?><?php echo e(assetVersion()); ?>"/>
    <?php else: ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css')); ?><?php echo e(assetVersion()); ?>"/>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script
        src="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\plugins\jquery-ui\jquery-ui.min.js')); ?>"></script>
    <script
        src="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\plugins\jquery-ui\jquery.ui.touch-punch.min.js')); ?>"></script>
    <script src="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\plugins\price-range\ion.rangeslider.min.js')); ?>">
        <script src="<?php echo e(asset('Modules\Appointment\Resources\assets\js\filter.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\js\main.js')); ?>"></script>

    <script>
        $(document).ready(function () {

            $("#price_range").ionRangeSlider({
                min: 20,
                max: 1000,
            });
        })

    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginal0cd076f38effa21505f241c1ff27e8ff = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0cd076f38effa21505f241c1ff27e8ff = $attributes; } ?>
<?php $component = App\View\Components\AppointmentBreadcrumb::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppointmentBreadcrumb::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0cd076f38effa21505f241c1ff27e8ff)): ?>
<?php $attributes = $__attributesOriginal0cd076f38effa21505f241c1ff27e8ff; ?>
<?php unset($__attributesOriginal0cd076f38effa21505f241c1ff27e8ff); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0cd076f38effa21505f241c1ff27e8ff)): ?>
<?php $component = $__componentOriginal0cd076f38effa21505f241c1ff27e8ff; ?>
<?php unset($__componentOriginal0cd076f38effa21505f241c1ff27e8ff); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalb1716b6b2b00ad3c1ea9d5a207a30edc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1716b6b2b00ad3c1ea9d5a207a30edc = $attributes; } ?>
<?php $component = App\View\Components\AppointmentInstructorPageSection::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment-instructor-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppointmentInstructorPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'levels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($levels)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1716b6b2b00ad3c1ea9d5a207a30edc)): ?>
<?php $attributes = $__attributesOriginalb1716b6b2b00ad3c1ea9d5a207a30edc; ?>
<?php unset($__attributesOriginalb1716b6b2b00ad3c1ea9d5a207a30edc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1716b6b2b00ad3c1ea9d5a207a30edc)): ?>
<?php $component = $__componentOriginalb1716b6b2b00ad3c1ea9d5a207a30edc; ?>
<?php unset($__componentOriginalb1716b6b2b00ad3c1ea9d5a207a30edc); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_instructor_page.blade.php ENDPATH**/ ?>