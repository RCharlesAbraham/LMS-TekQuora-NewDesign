<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->role_id == 1 && $query->status != 1): ?>
    <div class="dropdown CRM_dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button"
                id="dropdownMenu2" data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
            <?php echo e(trans('common.Action')); ?>

        </button>
        <div class="dropdown-menu dropdown-menu-right"
             aria-labelledby="dropdownMenu2">
            <a href="#" class="dropdown-item makeAsPaid" data-instructor_id="<?php echo e($query->instructor_id); ?>"
               data-withdraw_id="<?php echo e($query->id); ?>"
               type="button"><?php echo e(trans('common.Make Paid')); ?></a>

        </div>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\instructor\_td_payout_action.blade.php ENDPATH**/ ?>