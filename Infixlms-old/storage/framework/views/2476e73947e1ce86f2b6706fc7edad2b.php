<div>
    <input type="hidden" class="class_route" name="class_route" value="<?php echo e(route('classes')); ?>">

    <div class="courses_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">

                    <?php if (isset($component)) { $__componentOriginal71dcaef01898064a08aaab310679088f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71dcaef01898064a08aaab310679088f = $attributes; } ?>
<?php $component = App\View\Components\ClassPageSectionSidebar::resolve(['level' => $level,'type' => $type,'categories' => $categories,'category' => $category,'languages' => $languages,'language' => $language,'mode' => $mode] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('class-page-section-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ClassPageSectionSidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71dcaef01898064a08aaab310679088f)): ?>
<?php $attributes = $__attributesOriginal71dcaef01898064a08aaab310679088f; ?>
<?php unset($__attributesOriginal71dcaef01898064a08aaab310679088f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71dcaef01898064a08aaab310679088f)): ?>
<?php $component = $__componentOriginal71dcaef01898064a08aaab310679088f; ?>
<?php unset($__componentOriginal71dcaef01898064a08aaab310679088f); ?>
<?php endif; ?>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <?php if (isset($component)) { $__componentOriginal28698c253eac813895af305edf7f9b07 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28698c253eac813895af305edf7f9b07 = $attributes; } ?>
<?php $component = App\View\Components\ClassPageSectionDetails::resolve(['total' => $total,'order' => $order,'courses' => $courses] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('class-page-section-details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ClassPageSectionDetails::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28698c253eac813895af305edf7f9b07)): ?>
<?php $attributes = $__attributesOriginal28698c253eac813895af305edf7f9b07; ?>
<?php unset($__attributesOriginal28698c253eac813895af305edf7f9b07); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28698c253eac813895af305edf7f9b07)): ?>
<?php $component = $__componentOriginal28698c253eac813895af305edf7f9b07; ?>
<?php unset($__componentOriginal28698c253eac813895af305edf7f9b07); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\class-page-section.blade.php ENDPATH**/ ?>