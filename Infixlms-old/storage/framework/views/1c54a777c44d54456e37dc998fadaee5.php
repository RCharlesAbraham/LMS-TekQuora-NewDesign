<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('appointment.Appointment')); ?>

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
    <?php if (isset($component)) { $__componentOriginaldcbb08c5158ca4fb1b27bdbf6b266722 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldcbb08c5158ca4fb1b27bdbf6b266722 = $attributes; } ?>
<?php $component = App\View\Components\Appointment::resolve(['pages' => $pages,'categories' => $categories] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Appointment::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldcbb08c5158ca4fb1b27bdbf6b266722)): ?>
<?php $attributes = $__attributesOriginaldcbb08c5158ca4fb1b27bdbf6b266722; ?>
<?php unset($__attributesOriginaldcbb08c5158ca4fb1b27bdbf6b266722); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldcbb08c5158ca4fb1b27bdbf6b266722)): ?>
<?php $component = $__componentOriginaldcbb08c5158ca4fb1b27bdbf6b266722; ?>
<?php unset($__componentOriginaldcbb08c5158ca4fb1b27bdbf6b266722); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_page.blade.php ENDPATH**/ ?>