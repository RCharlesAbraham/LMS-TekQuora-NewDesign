<?php $__env->startSection('title'); ?><?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('payment.Fund Deposit')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/deposit.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginala097260bbd8369271f9ae104d105dd63 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala097260bbd8369271f9ae104d105dd63 = $attributes; } ?>
<?php $component = App\View\Components\DepositPageSection::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('deposit-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DepositPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala097260bbd8369271f9ae104d105dd63)): ?>
<?php $attributes = $__attributesOriginala097260bbd8369271f9ae104d105dd63; ?>
<?php unset($__attributesOriginala097260bbd8369271f9ae104d105dd63); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala097260bbd8369271f9ae104d105dd63)): ?>
<?php $component = $__componentOriginala097260bbd8369271f9ae104d105dd63; ?>
<?php unset($__componentOriginala097260bbd8369271f9ae104d105dd63); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\deposit.blade.php ENDPATH**/ ?>