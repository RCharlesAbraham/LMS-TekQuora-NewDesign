<div class="main_content_iner main_content_padding">
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">

                    <div class="purchase_history_wrapper mt-0 pt-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('bundleSubscription.Bundle Course')); ?></h3>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($checkouts)==0): ?>
                            <div class="col-12">
                                <div class="section__title3 margin_50">
                                    <p class="text-center"><?php echo e(__('bundleSubscription.No Bundle Purchased Yet')); ?>!</p>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        <div class="table-responsive">
                                            <table class="table custom_table3">
                                                <thead>
                                                <tr>
                                                    <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                                    <th scope="col"><?php echo e(__('common.Title')); ?></th>
                                                    <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                                    <th scope="col"><?php echo e(__('common.Total Courses')); ?></th>
                                                    <th scope="col"><?php echo e(__('payment.Total Price')); ?></th>
                                                    <th scope="col"><?php echo e(__('common.Discount')); ?></th>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(hasTax()): ?>
                                                        <th scope="col"><?php echo e(__('tax.TAX')); ?></th>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <th scope="col"><?php echo e(__('common.Payment Type')); ?></th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($checkouts)): ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $checkouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$checkout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td scope="row"><?php echo e(@$key+1); ?></td>

                                                            <td><?php echo e($checkout->bundle->title); ?></td>
                                                            <td><?php echo e(showDate($checkout->created_at)); ?></td>

                                                            <td>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($checkout->courses)==0): ?>
                                                                    1
                                                                <?php else: ?>
                                                                    <?php echo e(count($checkout->courses)); ?>

                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                            </td>
                                                            <td>

                                                                <?php echo e(getPriceFormat($checkout->purchase_price)); ?>


                                                            </td>


                                                            <td>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($checkout->discount!=0): ?>

                                                                    <?php echo e(getPriceFormat($enroll->discount)); ?>

                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            </td>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(hasTax()): ?>
                                                                <td>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($checkout->tax): ?>

                                                                        <?php echo e(getPriceFormat($enroll->tax)); ?>

                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                </td>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            <td>
                                                                <?php echo e($checkout->payment_method); ?>

                                                            </td>
                                                            <td>
                                                                <a href="<?php echo e(route('bundle.show')); ?>?id=<?php echo e($checkout->bundle->id); ?>"
                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </tbody>
                                            </table>
                                            <div class="mt-4">
                                                <?php echo e($checkouts->links()); ?>

                                            </div>
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\bundle-subscription-my-course-page-section.blade.php ENDPATH**/ ?>