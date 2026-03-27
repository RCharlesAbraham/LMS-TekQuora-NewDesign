<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('cpd.My CPD')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginale1e51bb319ac79adc9f3c8c103646c78 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale1e51bb319ac79adc9f3c8c103646c78 = $attributes; } ?>
<?php $component = App\View\Components\Cpd::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cpd'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Cpd::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale1e51bb319ac79adc9f3c8c103646c78)): ?>
<?php $attributes = $__attributesOriginale1e51bb319ac79adc9f3c8c103646c78; ?>
<?php unset($__attributesOriginale1e51bb319ac79adc9f3c8c103646c78); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale1e51bb319ac79adc9f3c8c103646c78)): ?>
<?php $component = $__componentOriginale1e51bb319ac79adc9f3c8c103646c78; ?>
<?php unset($__componentOriginale1e51bb319ac79adc9f3c8c103646c78); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\cpd_page.blade.php ENDPATH**/ ?>