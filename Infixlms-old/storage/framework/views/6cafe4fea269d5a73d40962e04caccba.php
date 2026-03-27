<div>
    <style>
        .pb_50 {
            padding-bottom: 50px;
        }
    </style>
    <div class="main_content_iner main_content_padding">
        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section__title3 mb_40">
                                        <h3 class="mb-0"><?php echo e(__('invoice.Invoice List')); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table custom_table3">
                                            <thead>
                                            <tr>
                                                <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                                <th scope="col"><?php echo e(__('invoice.Invoice Number')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Total Courses')); ?></th>
                                                <th scope="col"><?php echo e(__('payment.Total Price')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Payment Type')); ?></th>
                                                <th scope="col"><?php echo e(__('payment.Invoice')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $myInvoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                <tr>
                                                    <td class="m-2"><strong><?php echo e($loop->iteration); ?></strong></td>
                                                    <td><?php echo e($invoice->invoice_number); ?> </td>
                                                    <td><?php echo e(showDate($invoice->created_at)); ?></td>
                                                    <td class="text-center"><?php echo e($invoice->courses_count); ?></td>
                                                    <td><?php echo e(getPriceFormat($invoice->purchase_price)); ?></td>
                                                    <td>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($invoice->offlinePayment): ?>
                                                            <strong><?php echo e(__('invoice.Pending')); ?></strong>
                                                        <?php elseif($invoice->status != 'paid'): ?>
                                                            <a href="<?php echo e(route('invoice.orderPayment', @$invoice->encryptId())); ?>"
                                                               class="link_value theme_btn small_btn4"><?php echo e(__('invoice.Pay Now')); ?></a>
                                                        <?php elseif($invoice->status == 'paid'): ?>
                                                            <strong><?php echo e(__('invoice.Paid')); ?></strong>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($invoice->payment_type == 1 ? 'Online' : 'Offline'); ?>

                                                        <?php echo e($invoice->status == 'paid' ?  '['. $invoice->payment_method.']' : ''); ?>

                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(route('invoice.student.show', @$invoice->encryptId())); ?>"
                                                           class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="8">
                                                        <p class="text-center">
                                                            <?php echo e(__('invoice.No Invoice Generate Yet')); ?>

                                                        </p>
                                                    </td>
                                                </tr>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            </tbody>
                                        </table>
                                        <div class="mt-4">
                                            <?php echo e($myInvoices->links()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-invoice-list.blade.php ENDPATH**/ ?>