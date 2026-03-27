<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-10 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo e(__('courses.Revenue')); ?> <?php echo e(__('common.Payouts')); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('dashboard.Dashboard')); ?></a>
                    <a href="#"><?php echo e(__('instructor.Instructors')); ?></a>
                    <a href="#"><?php echo e(__('courses.Revenue')); ?> <?php echo e(__('common.Payouts')); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row row-gap-4 justify-content-center">
                <div class="col-md-3">
                    <a href="#" class="d-block">
                        <div class="white-box single-summery">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3><?php echo e(__('payment.Earning')); ?></h3>
                                    <p class="mb-0"><?php echo e(__('payment.Total')); ?> <?php echo e(__('payment.Earning')); ?></p>
                                </div>
                                <h1 class="gradient-color2"> <?php echo e($user->currency->symbol); ?> <?php echo e(number_format($totalRev * $user->currency->conversion_rate,2)); ?>

                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="d-block">
                        <div class="white-box single-summery">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3><?php echo e(__('payment.Charge')); ?></h3>
                                    <p class="mb-0"><?php echo e(__('common.Author')); ?> <?php echo e(__('payment.Charge')); ?></p>
                                </div>
                                <h1 class="gradient-color2"> <?php echo e($user->currency->symbol); ?> <?php echo e(number_format($history['charge'] * $user->currency->conversion_rate,2)); ?>

                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="d-block">
                        <div class="white-box single-summery">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3><?php echo e(__('common.Available')); ?></h3>
                                    <p class="mb-0"><?php echo e(__('common.Payouts')); ?> <?php echo e(__('common.Available')); ?></p>
                                </div>
                                <h1 class="gradient-color2"> <?php echo e($user->currency->symbol); ?> <?php echo e(number_format($history['payout'] * $user->currency->conversion_rate,2)); ?>

                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo e(route('userPayoutInfo')); ?>" class="d-block">
                        <div class="white-box single-summery">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="mb-0"><?php echo e(__('payment.Selected Payout Method')); ?></p>
                                </div>
                                <h1 class="gradient-color2"> <?php echo e(@$user->payout); ?>

                                    <div class="tab_thumb">
                                        <img src="<?php echo e(asset(@$user->payout_icon)); ?>">
                                    </div>
                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-50">
                <div class="col-12">
                    <div class="box_header common_table_header">
                        <div class="main-title d-md-flex">
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('courses.Revenue')); ?> <?php echo e(__('common.Payouts')); ?></h3>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="QA_section QA_section_heading_custom check_box_table">
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <div class="">
                                <table id="lms_table" class="table Crm_table_active3">
                                    <thead>
                                    <tr>

                                        <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                        <th scope="col"><?php echo e(__('payment.Invoice Date')); ?></th>
                                        <th scope="col"><?php echo e(__('payment.Amount')); ?></th>
                                        <th scope="col"><?php echo e(__('payment.Payout Method')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Issue Date')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                            <th><?php echo e($key+1); ?></th>

                                            <td><?php echo e(@$log->invoiceDate); ?></td>
                                            <td><?php echo e(@$user->currency->symbol); ?> <?php echo e(number_format($log->amount * $user->currency->conversion_rate,2)); ?></td>
                                            <td><strong><?php echo e(@$log->user->payout); ?></strong></td>
                                            <td><?php echo e(@$log->issueDateFormat); ?></td>
                                            <td class="nowrap">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($log->status==1): ?>
                                                    <span>
                                                       <span class="btn-sm btn-success">
                                                           <i class="fas fa-check-circle"></i> <?php echo e(__('setting.Success')); ?>

                                                        </span>
                                                    </span>
                                                <?php else: ?>
                                                    <?php echo e(__('courses.Pending')); ?>

                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Modal Item_Details -->
            </div>
        </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\instructor\payout_histpry.blade.php ENDPATH**/ ?>