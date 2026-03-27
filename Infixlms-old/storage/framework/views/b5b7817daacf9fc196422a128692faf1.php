<?php $__env->startSection('title'); ?><?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('common.About')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal269900abaed345884ce342681cdc99f6 = $attributes; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['banner' => $frontendContent->about_page_banner,'title' => $frontendContent->about_page_title,'subTitle' => $frontendContent->about_page_title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

    <?php if (isset($component)) { $__componentOriginal942832310b794e8008904ef23c14569d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal942832310b794e8008904ef23c14569d = $attributes; } ?>
<?php $component = App\View\Components\AboutPageWhoWeAre::resolve(['whoWeAre' => $about->who_we_are,'bannerTitle' => $about->banner_title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about-page-who-we-are'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AboutPageWhoWeAre::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal942832310b794e8008904ef23c14569d)): ?>
<?php $attributes = $__attributesOriginal942832310b794e8008904ef23c14569d; ?>
<?php unset($__attributesOriginal942832310b794e8008904ef23c14569d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal942832310b794e8008904ef23c14569d)): ?>
<?php $component = $__componentOriginal942832310b794e8008904ef23c14569d; ?>
<?php unset($__componentOriginal942832310b794e8008904ef23c14569d); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal82d9ed31a0568fda3f665b744caddf4f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal82d9ed31a0568fda3f665b744caddf4f = $attributes; } ?>
<?php $component = App\View\Components\AboutPageGallery::resolve(['about' => $about] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about-page-gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AboutPageGallery::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal82d9ed31a0568fda3f665b744caddf4f)): ?>
<?php $attributes = $__attributesOriginal82d9ed31a0568fda3f665b744caddf4f; ?>
<?php unset($__attributesOriginal82d9ed31a0568fda3f665b744caddf4f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal82d9ed31a0568fda3f665b744caddf4f)): ?>
<?php $component = $__componentOriginal82d9ed31a0568fda3f665b744caddf4f; ?>
<?php unset($__componentOriginal82d9ed31a0568fda3f665b744caddf4f); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginala4498dfa98f44e2951f88adab7a02f55 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala4498dfa98f44e2951f88adab7a02f55 = $attributes; } ?>
<?php $component = App\View\Components\AboutPageCounter::resolve(['about' => $about] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about-page-counter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AboutPageCounter::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala4498dfa98f44e2951f88adab7a02f55)): ?>
<?php $attributes = $__attributesOriginala4498dfa98f44e2951f88adab7a02f55; ?>
<?php unset($__attributesOriginala4498dfa98f44e2951f88adab7a02f55); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala4498dfa98f44e2951f88adab7a02f55)): ?>
<?php $component = $__componentOriginala4498dfa98f44e2951f88adab7a02f55; ?>
<?php unset($__componentOriginala4498dfa98f44e2951f88adab7a02f55); ?>
<?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($about->show_testimonial): ?>
        <?php if (isset($component)) { $__componentOriginal164c368658a9c034a8246de90b33d861 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal164c368658a9c034a8246de90b33d861 = $attributes; } ?>
<?php $component = App\View\Components\AboutPageTestimonial::resolve(['frontendContent' => $frontendContent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about-page-testimonial'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AboutPageTestimonial::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal164c368658a9c034a8246de90b33d861)): ?>
<?php $attributes = $__attributesOriginal164c368658a9c034a8246de90b33d861; ?>
<?php unset($__attributesOriginal164c368658a9c034a8246de90b33d861); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal164c368658a9c034a8246de90b33d861)): ?>
<?php $component = $__componentOriginal164c368658a9c034a8246de90b33d861; ?>
<?php unset($__componentOriginal164c368658a9c034a8246de90b33d861); ?>
<?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($about->show_brand): ?>
        <?php if (isset($component)) { $__componentOriginal94220e1b604cf756f1151fdad59c93cb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94220e1b604cf756f1151fdad59c93cb = $attributes; } ?>
<?php $component = App\View\Components\AboutPageBrand::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about-page-brand'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AboutPageBrand::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94220e1b604cf756f1151fdad59c93cb)): ?>
<?php $attributes = $__attributesOriginal94220e1b604cf756f1151fdad59c93cb; ?>
<?php unset($__attributesOriginal94220e1b604cf756f1151fdad59c93cb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94220e1b604cf756f1151fdad59c93cb)): ?>
<?php $component = $__componentOriginal94220e1b604cf756f1151fdad59c93cb; ?>
<?php unset($__componentOriginal94220e1b604cf756f1151fdad59c93cb); ?>
<?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($about->show_become_instructor): ?>
        <?php if (isset($component)) { $__componentOriginal27b3e342d2eb92399b11450c5cd45eb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal27b3e342d2eb92399b11450c5cd45eb3 = $attributes; } ?>
<?php $component = App\View\Components\AboutPageBecomeInstructor::resolve(['frontendContent' => $frontendContent] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('about-page-become-instructor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AboutPageBecomeInstructor::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal27b3e342d2eb92399b11450c5cd45eb3)): ?>
<?php $attributes = $__attributesOriginal27b3e342d2eb92399b11450c5cd45eb3; ?>
<?php unset($__attributesOriginal27b3e342d2eb92399b11450c5cd45eb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27b3e342d2eb92399b11450c5cd45eb3)): ?>
<?php $component = $__componentOriginal27b3e342d2eb92399b11450c5cd45eb3; ?>
<?php unset($__componentOriginal27b3e342d2eb92399b11450c5cd45eb3); ?>
<?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\about.blade.php ENDPATH**/ ?>