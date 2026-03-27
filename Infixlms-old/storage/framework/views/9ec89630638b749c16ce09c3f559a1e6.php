<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('bundleSubscription.Bundle Course')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginal608e26160c460247a58d680fab16a324 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal608e26160c460247a58d680fab16a324 = $attributes; } ?>
<?php $component = App\View\Components\BundleSubscriptionMyCoursePageSection::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('bundle-subscription-my-course-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BundleSubscriptionMyCoursePageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal608e26160c460247a58d680fab16a324)): ?>
<?php $attributes = $__attributesOriginal608e26160c460247a58d680fab16a324; ?>
<?php unset($__attributesOriginal608e26160c460247a58d680fab16a324); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal608e26160c460247a58d680fab16a324)): ?>
<?php $component = $__componentOriginal608e26160c460247a58d680fab16a324; ?>
<?php unset($__componentOriginal608e26160c460247a58d680fab16a324); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\bundle-subscription-courses.blade.php ENDPATH**/ ?>