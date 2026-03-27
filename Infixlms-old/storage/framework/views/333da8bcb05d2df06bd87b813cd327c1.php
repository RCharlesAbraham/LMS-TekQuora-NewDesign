<?php
    $ip = request()->ip();
    $browser = Browser::browserName();
    $os = Browser::platformName();
?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(($login->os != $os && $login->browser != $browser && $login->ip != $ip) || $login->token != session()->get('login_token')): ?>
    <div class="dropdown CRM_dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button"
                id="dropdownMenu1"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
            <?php echo e(__('common.Select')); ?>

        </button>
        <div class="dropdown-menu dropdown-menu-right"
             aria-labelledby="dropdownMenu1">
            <a data-id="<?php echo e($login->id); ?>" class="dropdown-item logout_device"
               href="javascript:void(0)"><?php echo e(__('frontend.LogOut')); ?></a>

        </div>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\logged_in_device\components\_action.blade.php ENDPATH**/ ?>