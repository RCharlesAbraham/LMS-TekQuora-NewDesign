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
        <a target="_blank" class="dropdown-item"
           href="<?php echo e(route('addToCart',[$row->course->id])); ?>"> <?php echo e(__('common.Add To Cart')); ?></a>
        <a data-heading="<?php echo e($row->status == 2 ?'Reject Reason':"Refund/Cancellation Reason"); ?>"
           data-reason="<?php echo e($row->status == 2 ?$row->cancel_reason:$row->reason); ?>"
           class="dropdown-item show_reason" href="javascript:void(0)"> <?php echo e(__('frontend.Reason')); ?></a>
    </div>
</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_refund\components\_action.blade.php ENDPATH**/ ?>