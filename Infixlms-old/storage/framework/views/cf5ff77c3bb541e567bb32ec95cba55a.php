<div class="modal fade" id="deleteItem_<?php echo e(@$item_id); ?>">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo app('translator')->get('role.delete'); ?> <?php echo e($item_name); ?></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h4><?php echo app('translator')->get('common.Are you sure to delete ?'); ?></h4>
                </div>
                <div class="mt-40 d-flex justify-content-between">
                    <button type="button" class="primary-btn tr-bg"
                            data-bs-dismiss="modal"><?php echo app('translator')->get('common.cancel'); ?></button>
                    <form action="<?php echo e($route_url); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <input type="submit" class="primary-btn fix-gr-bg" value="Delete"/>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\deleteModalMessage.blade.php ENDPATH**/ ?>