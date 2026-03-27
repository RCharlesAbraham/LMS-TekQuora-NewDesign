<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(\Illuminate\Support\Facades\Session::has("impersonated")): ?>
    <div class="secret_login text-center p-3 d-flex align-items-center justify-content-center">
        <span class="me-1"><?php echo e(__('common.Login as')); ?>&nbsp;</span>
        <b><?php echo e(\Illuminate\Support\Facades\Auth::user()->email); ?> &nbsp;</b>
        <a class="primary-btn fix-gr-bg ms-3 theme_btn_mini theme_btn " href="<?php echo e(route('secretLoginExit')); ?>">
            <?php echo e(__('common.Exit Now')); ?>

        </a>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/secret_login.blade.php ENDPATH**/ ?>