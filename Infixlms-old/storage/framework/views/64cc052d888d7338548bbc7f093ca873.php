<div class="main_content_iner main_content_padding">
    <style>

        .cs_modal .modal-body input, .cs_modal .modal-body .nice_Select {
            height: 60px;
            line-height: 50px;
            padding: 0px 22px;
            border: 1px solid #F1F3F5;
            color: #707070;
            font-size: 14px;
            font-weight: 500;
            background-color: #fff;
            width: 100%;
        }

        .modal_1000px {
            max-width: 1000px;
        }
    </style>
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('assignment.Assignment List')); ?></h3>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($assignment_list)==0): ?>
                            <div class="col-12">
                                <div class="section__title3 margin_50">
                                    <p class="text-center"><?php echo e(__('assignment.Assignment Not Found !')); ?></p>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table custom_table3 mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Title')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Course')); ?></th>
                                                <th scope="col"><?php echo e(__('assignment.Marks')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                                <th scope="col" style="text-align: center"><?php echo e(__('common.Action')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($assignment_list)): ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $assignment_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                                        if (isModuleActive('Assignment')){
                                                            $submit_info=Modules\Assignment\Entities\InfixAssignAssignment::assignmentLastSubmitted($assign->id);

                                                        }elseif(isModuleActive('Homework')){
                                                             $submit_info=Modules\Homework\Entities\InfixAssignHomework::assignmentLastSubmitted($assign->id);
                                                        }else{
                                                            $submit_info=null;
                                                        }
                                                    ?>
                                                    <tr>
                                                        <td scope="row"><?php echo e(@$key+1); ?></td>

                                                        <td><?php echo e(showDate($assign->assignment->last_date_submission)); ?></td>

                                                        <td>
                                                            <?php echo e(@$assign->assignment->title); ?>


                                                        </td>
                                                        <td>
                                                            <?php echo e(@$assign->assignment->course->title); ?>


                                                        </td>
                                                        <td>
                                                            <?php echo e(@$assign->obtain_marks); ?>


                                                        </td>
                                                        <td>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($submit_info): ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($assign->pass_status==1): ?>
                                                                    <?php echo e(__('homework.Pass')); ?>

                                                                <?php elseif($assign->pass_status==2): ?>
                                                                    <?php echo e(__('homework.Fail')); ?>

                                                                <?php else: ?>
                                                                    <?php echo e(__('homework.Not Marked')); ?>

                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            <?php else: ?>
                                                                <?php echo e(__('homework.Not Submitted')); ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($assign->assignmentSubmitted->count()>0): ?>
                                                                <a class="link_value theme_btn small_btn4"
                                                                   data-bs-toggle="collapse"
                                                                   href="#collapseExample<?php echo e($assign->id); ?>" role="button"
                                                                   aria-expanded="false"
                                                                   aria-controls="collapseExample">
                                                                    <?php echo e(__('assignment.History')); ?>

                                                                </a>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            
                                                            <a href="<?php echo e(route('myAssignment_details',$assign->id)); ?>"
                                                               class="link_value theme_btn small_btn4"><?php echo e(__('common.Details')); ?></a>
                                                        
                                                        <td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" style="border-bottom:0!important;">
                                                            <div class="collapse" id="collapseExample<?php echo e($assign->id); ?>">
                                                                <table class="table  mb-0">
                                                                    <tr>
                                                                        <td scope="col"><?php echo e(__('common.SL')); ?></td>
                                                                        <td scope="col"><?php echo e(__('common.Date')); ?></td>
                                                                        <td scope="col"><?php echo e(__('assignment.Marks')); ?></td>
                                                                        <td scope="col"><?php echo e(__('common.View')); ?></td>
                                                                    </tr>
                                                                    <tbody>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $assign->assignmentSubmitted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $submitted): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr>
                                                                            <td>
                                                                                <?php echo e($key+1); ?>

                                                                            </td>
                                                                            <td>
                                                                                <?php echo e(showDate($submitted->created_at)); ?>

                                                                            </td>
                                                                            <td>
                                                                                <?php echo e(@$submitted->marks); ?>

                                                                            </td>
                                                                            <td>
                                                                                <a data-bs-toggle="modal"
                                                                                   data-bs-target="#viewAttachment<?php echo e($submitted->id); ?>"
                                                                                   href="#"
                                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php echo $__env->make(theme('pages.attachment_view'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <div class="modal cs_modal fade admin-query"
                                                         id="addAssignment<?php echo e($assign->id); ?>" role="dialog">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"><?php echo e(__('assignment.Upload')); ?> <?php echo e(__('assignment.Assignment')); ?> </h5>
                                                                    <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"><i
                                                                            class="ti-close "></i></button>
                                                                </div>

                                                                <form action="<?php echo e(route('submitAssignment')); ?>"
                                                                      method="Post" enctype="multipart/form-data">
                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="assignment_id"
                                                                               value="<?php echo e($assign->assignment->id); ?>">
                                                                        <input type="hidden" name="assign_id"
                                                                               value="<?php echo e($assign->id); ?>">
                                                                        <div class="col-12">
                                                                            <div class="preview_upload">
                                                                                <div
                                                                                    class="preview_upload_thumb d-none">
                                                                                    <img src="" alt="" id="imgPreview"
                                                                                         style=" display:none;height: 100%;width: 100%;">
                                                                                    <span
                                                                                        id="previewTxt"><?php echo e(__('assignment.Assignment')); ?> <?php echo e(__('assignment.Upload')); ?></span>
                                                                                </div>
                                                                                <div class="preview_drag">
                                                                                    <div class="preview_drag_inner">
                                                                                        <div class="chose_file">
                                                                                            <input type="file"
                                                                                                   name="attached_file"
                                                                                                   id="imgInp">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-center">
                                                                        <div
                                                                            class="mt-40 d-flex justify-content-between">
                                                                            <button type="button"
                                                                                    class="theme_line_btn me-2"
                                                                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?>

                                                                            </button>
                                                                            <button class="theme_btn "
                                                                                    type="submit"><?php echo e(__('common.Submit')); ?></button>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </tbody>
                                        </table>
                                        <div class="mt-4">
                                            <?php echo e($assignment_list->links()); ?>

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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-assignment-page-section.blade.php ENDPATH**/ ?>