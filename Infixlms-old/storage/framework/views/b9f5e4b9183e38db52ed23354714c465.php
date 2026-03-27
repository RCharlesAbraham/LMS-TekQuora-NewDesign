<?php $__env->startSection('content'); ?>
    <?php echo htmlspecialchars_decode($details); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <?php
        $route =request()->route()->getName();
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($route=='blogs'): ?>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/blogs.js')); ?>"></script>
    <?php elseif($route=='contact'): ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(Settings('gmap_key')); ?>"></script>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/js/map.js"></script>
    <?php else: ?>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/courses.js')); ?>"></script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive("Store") && \Illuminate\Support\Facades\Route::currentRouteName()=="store.products"): ?>
        <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/store.js')); ?>"></script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <script>
        $('.ui-resizable-resizer').remove()
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('aorapagebuilder::layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\Modules/AoraPageBuilder\Resources/views/pages/show.blade.php ENDPATH**/ ?>