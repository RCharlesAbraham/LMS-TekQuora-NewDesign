<section class="sms-breadcrumb mb-10 white-box">
    <div class="container-fluid p-0">
        <div class="d-flex flex-wrap justify-content-between">
            <h1 class="text-uppercase"><?php echo e($menu->name); ?></h1>
            <div class="bc-pages">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($links[0]) && $links[0]['route']!='dashboard'): ?>
                    <a href="<?php echo e(validRouteUrl('dashboard')); ?>"><?php echo e(__('dashboard.Dashboard')); ?></a>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(routeIsExist($link['route'])?validRouteUrl($link['route']):''); ?>"><?php echo e($link['name']); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/backend/partials/breadcrumb.blade.php ENDPATH**/ ?>