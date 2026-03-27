<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($withdraw->method=="Bank Payment"): ?>

    <a href="#" data-bs-toggle="modal"
       data-bs-target="#show_<?php echo e(@$withdraw->id); ?>"><?php echo e($withdraw->method); ?></a>


    <div class="modal fade admin-query" id="show_<?php echo e(@$withdraw->id); ?>">
        <div class="modal-dialog   modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e(__('setting.Payment Details')); ?></h4>
                    <button type="button" class="close " data-bs-dismiss="modal">
                        <i class="ti-close "></i>
                    </button>
                </div>
                <div class="modal-body">

                    <table class="table">
                        <tr>
                            <th><?php echo e(__('setting.Bank Name')); ?></th>
                            <td>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($withdraw->user->bank_name): ?>
                                    <?php echo e($withdraw->user->bank_name); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></td>
                        </tr>

                        <tr>
                            <th><?php echo e(__('setting.Branch Name')); ?></th>
                            <td>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($withdraw->user->branch_name): ?>
                                    <?php echo e($withdraw->user->branch_name); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </td>
                        </tr>

                        <tr>
                            <th><?php echo e(__('setting.Account Number')); ?></th>
                            <td>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($withdraw->user->branch_name): ?>
                                    <?php echo e($withdraw->user->bank_account_number); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </td>
                        </tr>

                        <tr>
                            <th><?php echo e(__('setting.Account Holder')); ?></th>
                            <td>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($withdraw->user->account_holder_name): ?>
                                    <?php echo e($withdraw->user->account_holder_name); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?php echo e(__('setting.Account Type')); ?></th>
                            <td>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($withdraw->user->bank_type): ?>
                                    <?php echo e($withdraw->user->bank_type); ?>

                                <?php else: ?>
                                    N/A
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </td>
                        </tr>

                    </table>


                </div>
            </div>
        </div>
    </div>
<?php elseif($withdraw->method=="Bkash"): ?>
    <?php echo e($withdraw->method); ?> <br>
    <?php echo e(@$withdraw->user->bkash_number); ?>

<?php else: ?>
    <?php echo e($withdraw->method); ?> <br>
    <?php echo e(@$withdraw->user->payout_email); ?>

<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\_withdrawMethod.blade.php ENDPATH**/ ?>