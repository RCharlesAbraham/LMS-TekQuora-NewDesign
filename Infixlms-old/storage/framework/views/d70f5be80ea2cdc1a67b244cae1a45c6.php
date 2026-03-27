<?php echo $__env->make(theme('partials._header'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make(theme('partials._menu'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<input type="hidden" name="base_url" class="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="csrf_token" class="csrf_token" value="<?php echo e(csrf_token()); ?>">
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->check()): ?>
    <input type="hidden" name="balance" class="user_balance" value="<?php echo e(auth()->user()->balance); ?>">
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<input type="hidden" name="currency_symbol" class="currency_symbol" value="<?php echo e(Settings('currency_symbol')); ?>">
<input type="hidden" name="app_debug" class="app_debug" value="<?php echo e(env('APP_DEBUG')); ?>">
<?php echo $__env->make('preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldContent('mainContent'); ?>

<?php echo $__env->make(theme('partials._footer'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/frontend/infixlmstheme/layouts/master.blade.php ENDPATH**/ ?>