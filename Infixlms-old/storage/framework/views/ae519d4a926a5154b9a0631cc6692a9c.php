<?php $__env->startSection('title'); ?><?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('frontend.Contact Us')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>


    <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal269900abaed345884ce342681cdc99f6 = $attributes; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['banner' => $frontendContent->contact_page_banner,'title' => $frontendContent->contact_page_title,'subTitle' => $frontendContent->contact_sub_title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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


    <?php if (isset($component)) { $__componentOriginal90a6dbcd576aba0b3b6e77ca6c738a86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal90a6dbcd576aba0b3b6e77ca6c738a86 = $attributes; } ?>
<?php $component = App\View\Components\ContactPageSection::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ContactPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal90a6dbcd576aba0b3b6e77ca6c738a86)): ?>
<?php $attributes = $__attributesOriginal90a6dbcd576aba0b3b6e77ca6c738a86; ?>
<?php unset($__attributesOriginal90a6dbcd576aba0b3b6e77ca6c738a86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal90a6dbcd576aba0b3b6e77ca6c738a86)): ?>
<?php $component = $__componentOriginal90a6dbcd576aba0b3b6e77ca6c738a86; ?>
<?php unset($__componentOriginal90a6dbcd576aba0b3b6e77ca6c738a86); ?>
<?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$frontendContent->show_map==1): ?>
        <?php if (isset($component)) { $__componentOriginalb980ce99ef778e1994c9bb1db93fd376 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb980ce99ef778e1994c9bb1db93fd376 = $attributes; } ?>
<?php $component = App\View\Components\ContactPageMap::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('contact-page-map'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ContactPageMap::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb980ce99ef778e1994c9bb1db93fd376)): ?>
<?php $attributes = $__attributesOriginalb980ce99ef778e1994c9bb1db93fd376; ?>
<?php unset($__attributesOriginalb980ce99ef778e1994c9bb1db93fd376); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb980ce99ef778e1994c9bb1db93fd376)): ?>
<?php $component = $__componentOriginalb980ce99ef778e1994c9bb1db93fd376; ?>
<?php unset($__componentOriginalb980ce99ef778e1994c9bb1db93fd376); ?>
<?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    <input type="hidden" name="lat" class="lat" value="<?php echo e(Settings('lat')); ?>">
    <input type="hidden" name="lng" class="lng" value="<?php echo e(Settings('lng')); ?>">
    <input type="hidden" name="zoom" class="zoom" value="<?php echo e(Settings('zoom_level')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(Settings('gmap_key')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/js/map.js"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/contact.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\contact.blade.php ENDPATH**/ ?>