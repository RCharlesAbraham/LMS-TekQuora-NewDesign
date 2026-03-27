<div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(orgPermission($org_id) && (permissionCheck($route) || empty($route))): ?>
        <label class="switch_toggle">
            <input type="checkbox"
                   class="status_enable_disable"
                   <?php if($status == 1): ?> checked
                   <?php endif; ?> value="<?php echo e($id); ?>">
            <i class="slider round"></i>
        </label>
    <?php else: ?>
        <?php echo e($status==1?trans('common.Active'):trans('common.Inactive')); ?>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\components\status.blade.php ENDPATH**/ ?>