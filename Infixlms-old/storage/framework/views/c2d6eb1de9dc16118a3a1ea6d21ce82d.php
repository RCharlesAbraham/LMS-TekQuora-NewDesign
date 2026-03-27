<div class="tab-pane fade" id="financial_tab">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h3><?php echo e(__('profile.financial')); ?></h3>
            </div>
            <hr>
            <form action="<?php echo e(route('users.finance.account')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-md-6 mb-25">
                        <label class="primary_input_label"
                               for="account_type"><?php echo e(__('profile.account_type')); ?></label>
                        <select class="primary_select" name="account_type" id="account_type">
                            <option value=""> <?php echo e(__('profile.select_one')); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $payout_accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payout_account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    <?php echo e(@$user->userPayoutAccount->payout_accounts_id == $payout_account->id ?'selected':""); ?> value="<?php echo e($payout_account->id); ?>"><?php echo e($payout_account->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </select>
                    </div>
                </div>

                <div id="payout_data_div">

                </div>


                <div class="row">

                    <div class="col-12 text-end">
                        <hr class="d-block">
                        <button class="primary-btn fix-gr-bg" type="submit"><i
                                class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_financial_tab.blade.php ENDPATH**/ ?>