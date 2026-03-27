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
        <a href="<?php echo e(route('users.instructor_refund_order_detail', $row->id)); ?>"
           class="dropdown-item"><?php echo e(__('product.View Details')); ?></a>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_purchase\components\_action_td.blade.php ENDPATH**/ ?>