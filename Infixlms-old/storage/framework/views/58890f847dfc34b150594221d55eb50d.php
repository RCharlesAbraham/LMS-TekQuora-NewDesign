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
        <a class="dropdown-item"
           href="<?php echo e(route('certificateDownload',$certificate->certificate_id)); ?>"><?php echo e(__('common.Download')); ?></a>
        <a class="dropdown-item"
           href="<?php echo e(route('certificateCheck',$certificate->certificate_id)); ?>"><?php echo e(__('common.View')); ?></a>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_certificates\components\_action.blade.php ENDPATH**/ ?>