<?php echo $__env->make(theme('partials._header'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<div class="dashboard_main_wrapper">
    <?php echo $__env->make(theme('partials._sidebar'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section
        class="main_content dashboard_part <?php if(\Illuminate\Support\Facades\Route::is('student.gamification.reward')): ?> bg-none bg-body <?php endif; ?>">
        <?php echo $__env->make(theme('partials._dashboard_menu'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldContent('mainContent'); ?>
    </section>
</div>
<?php echo $__env->make('preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<input type="hidden" name="app_debug" class="app_debug" value="<?php echo e(env('APP_DEBUG')); ?>">
<?php echo $__env->make(theme('partials._footer'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\layouts\dashboard_master.blade.php ENDPATH**/ ?>