<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> |
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if( routeIs('myCpd')): ?>
        \

        <?php echo e(__('cpd.My CPD')); ?>

    <?php else: ?>
        <?php echo e(__('cpd.My CPD')); ?>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/my_course.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginal4451f0d4d59bcffb0a46675b58f449cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4451f0d4d59bcffb0a46675b58f449cf = $attributes; } ?>
<?php $component = App\View\Components\MyCpdCoursesPageSection::resolve(['request' => $request,'cpdId' => $cpd_id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('my-cpd-courses-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MyCpdCoursesPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4451f0d4d59bcffb0a46675b58f449cf)): ?>
<?php $attributes = $__attributesOriginal4451f0d4d59bcffb0a46675b58f449cf; ?>
<?php unset($__attributesOriginal4451f0d4d59bcffb0a46675b58f449cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4451f0d4d59bcffb0a46675b58f449cf)): ?>
<?php $component = $__componentOriginal4451f0d4d59bcffb0a46675b58f449cf; ?>
<?php unset($__componentOriginal4451f0d4d59bcffb0a46675b58f449cf); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\cpd_MyCpd.blade.php ENDPATH**/ ?>