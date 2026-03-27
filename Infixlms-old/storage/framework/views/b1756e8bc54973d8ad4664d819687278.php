<?php
    $refundUrl = route('admin.enrollDelete', $query->id) . '?refund&cancel';
?>

<div class="dropdown CRM_dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button"
            id="dropdownMenu2" data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
        <?php echo e(trans('common.Action')); ?>

    </button>
    <div class="dropdown-menu dropdown-menu-right"
         aria-labelledby="dropdownMenu2">

        

        
        
        
        
        

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($query->reason): ?>
            <a data-reason="<?php echo e($query->reason); ?>" class="dropdown-item show_reason">
                <?php echo e(trans('frontend.Reason')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('refund.approved') && $query->status == 0): ?>
            <a href="<?php echo e(route('refund.approved',$query->id)); ?>" data-id="<?php echo e($query->id); ?>"
               class="dropdown-item refund_approved">
                <?php echo e(trans('common.Approved')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('refund.reject') && $query->status == 0): ?>
            <a href="<?php echo e(route('refund.reject',$query->id)); ?>" data-id="<?php echo e($query->id); ?>"
               class="dropdown-item refund_reject">
                <?php echo e(trans('common.Reject')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\student\_td_cancel_error_log.blade.php ENDPATH**/ ?>