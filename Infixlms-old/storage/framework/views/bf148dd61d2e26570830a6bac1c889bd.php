<?php $__env->startSection('title'); ?><?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('courses.Courses')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/classes.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal269900abaed345884ce342681cdc99f6 = $attributes; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['banner' => $frontendContent->course_page_banner,'title' => $frontendContent->course_page_title,'subTitle' => $frontendContent->course_page_sub_title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Breadcrumb::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal269900abaed345884ce342681cdc99f6)): ?>
<?php $attributes = $__attributesOriginal269900abaed345884ce342681cdc99f6; ?>
<?php unset($__attributesOriginal269900abaed345884ce342681cdc99f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal269900abaed345884ce342681cdc99f6)): ?>
<?php $component = $__componentOriginal269900abaed345884ce342681cdc99f6; ?>
<?php unset($__componentOriginal269900abaed345884ce342681cdc99f6); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalbd3c96d77060a40da5410e37b0d245e6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd3c96d77060a40da5410e37b0d245e6 = $attributes; } ?>
<?php $component = App\View\Components\CoursePageSection::resolve(['request' => $request,'categories' => $categories,'languages' => $languages] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('course-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CoursePageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd3c96d77060a40da5410e37b0d245e6)): ?>
<?php $attributes = $__attributesOriginalbd3c96d77060a40da5410e37b0d245e6; ?>
<?php unset($__attributesOriginalbd3c96d77060a40da5410e37b0d245e6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd3c96d77060a40da5410e37b0d245e6)): ?>
<?php $component = $__componentOriginalbd3c96d77060a40da5410e37b0d245e6; ?>
<?php unset($__componentOriginalbd3c96d77060a40da5410e37b0d245e6); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\courses.blade.php ENDPATH**/ ?>