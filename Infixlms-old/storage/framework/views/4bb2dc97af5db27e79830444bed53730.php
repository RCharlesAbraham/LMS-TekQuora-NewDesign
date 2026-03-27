<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck($route)): ?>
    <label class="switch_toggle">
        <input type="checkbox" class="status_enable_disable"
               value="<?php echo e($query->id); ?>"
            <?php echo e($query->status == 1 ? "checked" : ""); ?>><i class="slider round"></i></label>
<?php else: ?>
    <?php echo e($query->status == 1 ? trans('common.Active') : trans('common.Inactive')); ?>

<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\_td_status.blade.php ENDPATH**/ ?>