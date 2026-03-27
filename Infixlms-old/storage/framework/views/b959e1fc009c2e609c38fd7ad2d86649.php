<?php $__env->startSection('mainContent'); ?>
    <section class="sms-breadcrumb mb-10 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo e(__('communication.Questions & Answer')); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('dashboard.Dashboard')); ?></a>
                    <a href="#"><?php echo e(__('communication.Communication')); ?></a>
                    <a href="#"><?php echo e(__('communication.Questions & Answer')); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center mt-50">
                <div class="col-12">
                    <div class="box_header common_table_header">
                        <div class="main-title d-md-flex">
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('communication.Questions & Answer')); ?></h3>
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
                                        <th scope="col"><?php echo e(__('common.SL')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Comments')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Course')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Replies')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Commented By')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Submitted')); ?> </th>
                                        <th scope="col"><?php echo e(__('common.Action')); ?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($key+1); ?></th>
                                            <td><?php echo e(@$comment->comment); ?></td>
                                            <td><?php echo e(@$enroll->course->name); ?></td>
                                            <td><?php echo e(@$enroll->replies); ?></td>
                                            <td><?php echo e(@$enroll->user->name); ?></td>
                                            <td><?php echo e(@$enroll->user->name); ?></td>
                                            <td><?php echo e(@$enroll->course->dateFormat); ?></td>
                                            <td class="nowrap">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$enroll->status==1): ?>
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#rejectEnroll<?php echo e(@$enroll->id); ?>"
                                                       class="dropdown-item"
                                                       type="button"><?php echo e(__('common.Reject')); ?></a>
                                                <?php else: ?>
                                                    <a href="#" data-bs-toggle="modal"
                                                       data-bs-target="#enableEnroll<?php echo e(@$enroll->id); ?>"
                                                       class="dropdown-item"
                                                       type="button"><?php echo e(__('common.Enable')); ?></a>

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

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\communication\question_answer.blade.php ENDPATH**/ ?>