<div>
    <style>
        .theme_select:after {
            top: 25px;
        }

        .purchase_history_wrapper {
            padding-bottom: 0 !important;
        }

    </style>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('enable_refund_request')): ?>
        <div class="main_content_iner main_content_padding">
            <div class="dashboard_lg_card">
                <div class="container-fluid g-0">

                    <div class="p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('frontend.Refund Request')); ?></h3>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <form action="<?php echo e(route('enrollmentCancellationSubmit')); ?>" method="post">
                                    <div class="single_totl_warp col-lg-12 ps-0">
                                        <?php echo csrf_field(); ?>


                                        <div class="input-group mb-3 input-group-lg">

                                            <select required class="theme_select w-100  mb_20"
                                                    name="course">
                                                <option
                                                    value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Course')); ?></option>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($courses)): ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            value="<?php echo e($course->id); ?>"
                                                        ><?php echo e(@$course->course->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </select>

                                        </div>
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="single_input mb_25">
                                        <textarea required
                                                  placeholder="<?php echo e(__('frontend.Reason')); ?>"
                                                  name="reason"
                                                  class="primary_textarea gray_input"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb_30">

                                                <button type="submit"
                                                        class="theme_btn height_50">
                                                    <?php echo e(__('common.Submit')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    <div class="main_content_iner main_content_padding">
        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">

                <div class="p-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__title3 mb_40">
                                <h3 class="mb-0"><?php echo e(__('frontend.Refund & Cancellation')); ?> <?php echo e(__('common.History')); ?></h3>
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="table-responsive">
                                <table class="table custom_table3 mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                        <th scope="col"><?php echo e(__('courses.Course')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Price')); ?></th>
                                        <th scope="col"><?php echo e(__('courses.Request From')); ?></th>
                                        <th scope="col"><?php echo e(__('courses.Request')); ?> <?php echo e(__('common.Date')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Type')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Status')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($records)): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <?php
                                                if (empty($record->course->id)){
                                                    continue;
                                                }
                                            ?>
                                            <tr>
                                                <td><?php echo e(@$key+1); ?></td>
                                                <td><?php echo e($record->course->title); ?></td>
                                                <td><?php echo e(getPriceFormat($record->purchase_price)); ?>   </td>
                                                <td><?php echo e($record->request_from); ?>   </td>
                                                <td><?php echo e(showDate($record->created_at)); ?></td>
                                                <td><?php echo e($record->refund == 1 ? trans('frontend.Refund') : trans('frontend.Cancel')); ?></td>
                                                <td>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($record->status ==1): ?>
                                                        <?php echo e(__('common.Approved')); ?>

                                                    <?php elseif($record->status ==0): ?>
                                                        <?php echo e(__('common.Pending')); ?>

                                                    <?php else: ?>
                                                        <?php echo e(__('common.Reject')); ?>

                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                </td>

                                                <td>
                                                    <a class="theme_btn_mini"
                                                       href="<?php echo e(route('addToCart',[$record->course->id])); ?>">
                                                        <?php echo e(__('common.Add To Cart')); ?>

                                                    </a>

                                                    <a data-heading="<?php echo e($record->status == 2 ?'Reject Reason':"Refund/Cancellation Reason"); ?>"
                                                       data-reason="<?php echo e($record->status == 2 ?$record->cancel_reason:$record->reason); ?>"
                                                       class="theme_btn_mini show_reason">
                                                        <?php echo e(__('frontend.Reason')); ?>

                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="8" class="text-center">
                                                    <?php echo e(__('common.No data available in the table')); ?>

                                                </td>
                                            </tr>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>
                                <div class="mt-4">
                                    <?php echo e($records->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade leaderboard-boarder" id="reasonShowModal" tabindex="-1" role="dialog"
         aria-labelledby="myLeaderBoard"
         aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="reason_heading"></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="reason_body"></p>
                </div>
            </div>
        </div>
    </div>


</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\enrollment-cancellation-page-section.blade.php ENDPATH**/ ?>