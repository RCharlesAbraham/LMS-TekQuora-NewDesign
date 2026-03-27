<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('message-success-delete') != "" ||
session()->get('message-danger-delete') != ""): ?>
    <tr>
        <td colspan="3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('message-success-delete')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message-success-delete')); ?>

                </div>
                <?php elseif(session()->has('message-danger-delete')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session()->get('message-danger-delete')); ?>

                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </td>
    </tr>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\alertMessagePageLevelAll.blade.php ENDPATH**/ ?>