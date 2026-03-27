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
        <a target="_blank" class="dropdown-item" href="<?php echo e(route('invoice',$row->id)); ?>"><?php echo e(__('common.View')); ?></a>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
            <?php
                $is_store = 0;
                $is_virtual = 0;
                foreach (@$row->courses as $key => $value) {
                    $is_store += $value->course->product_type==2?1:0;
                    $is_virtual += $value->course->product_type==1?1:0;
                }
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_store > 0): ?>
                <a href="<?php echo e(route('users.my_store_purchase_order_detail', $row->id)); ?>"
                   class="dropdown-item"><?php echo e(__('product.Tracking Details')); ?></a>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_virtual > 0): ?>
                <a href="<?php echo e(route('users.my_virtual_file_download', $row->id)); ?>"
                   class="dropdown-item"><?php echo e(__('product.Virtual Files')); ?></a>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_purchase\components\_invoice.blade.php ENDPATH**/ ?>