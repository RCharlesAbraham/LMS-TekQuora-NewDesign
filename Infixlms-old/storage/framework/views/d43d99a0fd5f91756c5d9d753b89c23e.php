<input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">

<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title') ? Settings('site_title') : 'Infix LMS'); ?> |
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(routeIs('myWishlists')): ?>
        <?php echo e(__('appointment.My Wishlist')); ?>

    <?php elseif(routeIs('myClasses')): ?>
        <?php echo e(__('courses.Live Class')); ?>

    <?php elseif(routeIs('myQuizzes')): ?>
        <?php echo e(__('courses.My Quizzes')); ?>

    <?php else: ?>
        <?php echo e(__('courses.My Courses')); ?>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.rtl.css')); ?><?php echo e(assetVersion()); ?>"/>
    <?php else: ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css')); ?><?php echo e(assetVersion()); ?>"/>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginalec3ac64e8312f3ecc5f48cedf14a2c63 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec3ac64e8312f3ecc5f48cedf14a2c63 = $attributes; } ?>
<?php $component = App\View\Components\AppointmentMyWishlistPageSection::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment-my-wishlist-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppointmentMyWishlistPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec3ac64e8312f3ecc5f48cedf14a2c63)): ?>
<?php $attributes = $__attributesOriginalec3ac64e8312f3ecc5f48cedf14a2c63; ?>
<?php unset($__attributesOriginalec3ac64e8312f3ecc5f48cedf14a2c63); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec3ac64e8312f3ecc5f48cedf14a2c63)): ?>
<?php $component = $__componentOriginalec3ac64e8312f3ecc5f48cedf14a2c63; ?>
<?php unset($__componentOriginalec3ac64e8312f3ecc5f48cedf14a2c63); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_my_wishlist.blade.php ENDPATH**/ ?>