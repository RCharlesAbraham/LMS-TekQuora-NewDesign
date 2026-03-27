<div class="main_content_iner main_content_padding">
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('product.Store Refund & Dispute')); ?></h3>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($enrolls)==0): ?>
                            <div class="col-12">
                                <div class="section__title3 margin_50">
                                    <p class="text-center"><?php echo e(__('student.No Course Purchased Yet')); ?>!</p>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table custom_table3">
                                            <thead>
                                            <tr>
                                                <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                                <th scope="col"><?php echo e(__('product.Order ID')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                                <th scope="col"><?php echo e(__('product.Request Sent Date')); ?></th>
                                                <th scope="col"><?php echo e(__('product.Order Amount')); ?></th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($enrolls)): ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $enrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$enroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td scope="row"><?php echo e(@$key+1); ?></td>
                                                        <td><?php echo e($enroll->order->order_number); ?></td>
                                                        <td><?php echo e(showDate($enroll->order->created_at)); ?></td>
                                                        <td>
                                                            <?php echo e($enroll->CheckConfirmed); ?>

                                                        </td>
                                                        <td>
                                                            <?php echo e(showDate($enroll->created_at)); ?>

                                                        </td>
                                                        <td>
                                                            <?php echo e(getPriceFormat($enroll->total_return_amount)); ?>

                                                        </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                        class="link_value theme_btn small_btn4 dropdown-toggle"

                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    <?php echo e(trans('common.Action')); ?>

                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="<?php echo e(route('refund.frontend.my_refund_order_detail', $enroll->id)); ?>"
                                                                       class="dropdown-item"><?php echo e(__('product.Tracking Details')); ?></a>
                                                                </div>
                                                            </div>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </tbody>
                                        </table>
                                        <div class="mt-4">
                                            <?php echo e($enrolls->links()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-refund-dispute-page-secton.blade.php ENDPATH**/ ?>