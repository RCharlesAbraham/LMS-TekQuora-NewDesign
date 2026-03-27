<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e($blog->title??''); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/blogs.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('og_image'); ?>
    <?php echo e(getBlogImage($blog->image)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginald5ef19c3abc0848c3fcea037b04d415f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald5ef19c3abc0848c3fcea037b04d415f = $attributes; } ?>
<?php $component = App\View\Components\BlogDetailsPageSection::resolve(['blog' => $blog] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blog-details-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BlogDetailsPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald5ef19c3abc0848c3fcea037b04d415f)): ?>
<?php $attributes = $__attributesOriginald5ef19c3abc0848c3fcea037b04d415f; ?>
<?php unset($__attributesOriginald5ef19c3abc0848c3fcea037b04d415f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5ef19c3abc0848c3fcea037b04d415f)): ?>
<?php $component = $__componentOriginald5ef19c3abc0848c3fcea037b04d415f; ?>
<?php unset($__componentOriginald5ef19c3abc0848c3fcea037b04d415f); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\blogDetails.blade.php ENDPATH**/ ?>