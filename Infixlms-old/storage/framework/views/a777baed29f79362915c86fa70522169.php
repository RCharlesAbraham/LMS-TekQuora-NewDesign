<?php $__env->startSection('title'); ?><?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('frontendmanage.Become Instructor')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/become_instructor.js')); ?>"></script>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
        <script>
            $('#Instructor').modal('show');
        </script>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e(\Brian2694\Toastr\Facades\Toastr::error($error)); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal269900abaed345884ce342681cdc99f6 = $attributes; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['banner' => $frontendContent->become_instructor_page_banner,'title' => $frontendContent->become_instructor_page_title,'subTitle' => $frontendContent->become_instructor_page_sub_title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

    <?php if (isset($component)) { $__componentOriginald41432b41eda360a57ea8c5688be25a3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald41432b41eda360a57ea8c5688be25a3 = $attributes; } ?>
<?php $component = App\View\Components\BecomeInstructorPageJoin::resolve(['becomeInstructor' => $becomeInstructor] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('become-instructor-page-join'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BecomeInstructorPageJoin::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald41432b41eda360a57ea8c5688be25a3)): ?>
<?php $attributes = $__attributesOriginald41432b41eda360a57ea8c5688be25a3; ?>
<?php unset($__attributesOriginald41432b41eda360a57ea8c5688be25a3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald41432b41eda360a57ea8c5688be25a3)): ?>
<?php $component = $__componentOriginald41432b41eda360a57ea8c5688be25a3; ?>
<?php unset($__componentOriginald41432b41eda360a57ea8c5688be25a3); ?>
<?php endif; ?>


    <?php if (isset($component)) { $__componentOriginal0cbee07dfee913099541a5d970838b95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0cbee07dfee913099541a5d970838b95 = $attributes; } ?>
<?php $component = App\View\Components\BecomeInstructorPageJoinTop::resolve(['becomeInstructor' => $becomeInstructor] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('become-instructor-page-join-top'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BecomeInstructorPageJoinTop::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0cbee07dfee913099541a5d970838b95)): ?>
<?php $attributes = $__attributesOriginal0cbee07dfee913099541a5d970838b95; ?>
<?php unset($__attributesOriginal0cbee07dfee913099541a5d970838b95); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0cbee07dfee913099541a5d970838b95)): ?>
<?php $component = $__componentOriginal0cbee07dfee913099541a5d970838b95; ?>
<?php unset($__componentOriginal0cbee07dfee913099541a5d970838b95); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalb21c724f3b36b57ccf515f1de5013f5f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb21c724f3b36b57ccf515f1de5013f5f = $attributes; } ?>
<?php $component = App\View\Components\BecomeInstructorPageProcess::resolve(['becomeInstructor' => $becomeInstructor] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('become-instructor-page-process'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BecomeInstructorPageProcess::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb21c724f3b36b57ccf515f1de5013f5f)): ?>
<?php $attributes = $__attributesOriginalb21c724f3b36b57ccf515f1de5013f5f; ?>
<?php unset($__attributesOriginalb21c724f3b36b57ccf515f1de5013f5f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb21c724f3b36b57ccf515f1de5013f5f)): ?>
<?php $component = $__componentOriginalb21c724f3b36b57ccf515f1de5013f5f; ?>
<?php unset($__componentOriginalb21c724f3b36b57ccf515f1de5013f5f); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal66483ded90f1637a6e1fde616dd6e9b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66483ded90f1637a6e1fde616dd6e9b1 = $attributes; } ?>
<?php $component = App\View\Components\BecomeInstructorPageJoinBottom::resolve(['becomeInstructor' => $becomeInstructor] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('become-instructor-page-join-bottom'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BecomeInstructorPageJoinBottom::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66483ded90f1637a6e1fde616dd6e9b1)): ?>
<?php $attributes = $__attributesOriginal66483ded90f1637a6e1fde616dd6e9b1; ?>
<?php unset($__attributesOriginal66483ded90f1637a6e1fde616dd6e9b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66483ded90f1637a6e1fde616dd6e9b1)): ?>
<?php $component = $__componentOriginal66483ded90f1637a6e1fde616dd6e9b1; ?>
<?php unset($__componentOriginal66483ded90f1637a6e1fde616dd6e9b1); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\becomeInstructor.blade.php ENDPATH**/ ?>