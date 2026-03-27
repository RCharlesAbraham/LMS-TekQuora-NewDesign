<?php
    use Illuminate\Support\Facades\DB;
try {
    $isConnected = DB::connection()->getPdo();
 }catch (\Exception $exception){
    $isConnected =false;

 }
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isConnected): ?>
    <?php echo $__env->make(theme('partials._header'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make(theme('partials._menu'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('frontend_active_theme') == 'kidslms'): ?>
        <section class="error-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center">
                        <div class="img">
                            <img src="<?php echo e(themeAsset('img/shape/404-v1.png')); ?>" alt="error:page not found">
                        </div>
                        <h2><?php echo $__env->yieldContent('message'); ?></h2>
                        <p><?php echo $__env->yieldContent('details'); ?></p>
                        <a href="/" class="theme-btn fw-500"><?php echo e(__('frontend.Back To Homepage')); ?></a>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <div class="error_wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="error_wrapper_info text-center">
                            <div class="thumb">
                                <img src="<?php echo e(asset('public/errors/'.$exception->getStatusCode().'.png')); ?>" alt="">
                            </div>
                            <h3><?php echo $__env->yieldContent('message'); ?></h3>
                            <p><?php echo $__env->yieldContent('details'); ?></p>
                            <a href="<?php echo e(url('/')); ?>" class="theme_btn ">
                                <?php echo e(__('frontend.Back To Homepage')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php echo $__env->yieldContent('mainContent'); ?>
    <?php echo $__env->make(theme('partials._footer'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php else: ?>
    <?php echo $__env->make('errors.static', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/errors/layout.blade.php ENDPATH**/ ?>