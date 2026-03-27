<div>

    <style>
        .pb_50 {
            padding-bottom: 50px;
        }

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

        /*.preview_upload .preview_drag .preview_drag_inner .chose_file input {*/
        /*    opacity: 1;*/
        /*    position: absolute;*/
        /*    left: 0;*/
        /*    top: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    cursor: pointer;*/
        /*}*/
    </style>
    <div class="main_content_iner main_content_padding">
        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="purchase_history_wrapper pb_50">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section__title3 mb_40">
                                        <h3 class="mb-0"><?php echo e(__('homework.Study Material')); ?> <?php echo e(__('common.Details')); ?></h3>
                                        <h4></h4>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .assignment_info {
                                    margin-top: 10px;
                                }
                            </style>
                            <div class="row assignment_info">
                                <div class="col-lg-2">
                                    <?php echo e(__('common.Title')); ?>

                                </div>
                                <div class="col-lg-4">
                                    : <?php echo e(@$assignment_info->title); ?>

                                </div>
                                <div class="col-lg-2">
                                    <?php echo e(__('courses.Course')); ?>

                                </div>
                                <div class="col-lg-4">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($assignment_info->course->title): ?>
                                        : <?php echo e(@$assignment_info->course->title); ?>

                                    <?php else: ?>
                                        : <?php echo e(__('common.N/A')); ?>

                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                </div>
                            </div>
                            <div class="row assignment_info">
                                <div class="col-lg-2">
                                    <?php echo e(__('assignment.Marks')); ?>

                                </div>
                                <div class="col-lg-4">
                                    : <?php echo e(@$assignment_info->marks); ?>

                                </div>
                                <div class="col-lg-2">
                                    <?php echo e(__('assignment.Min Percentage')); ?>

                                </div>
                                <div class="col-lg-4">
                                    : <?php echo e(@$assignment_info->min_parcentage); ?>%
                                </div>
                            </div>
                            <div class="row assignment_info">
                                <div class="col-lg-2">
                                    <?php echo e(__('assignment.Submit Date')); ?>

                                </div>
                                <div class="col-lg-4">
                                    : <?php echo e(showDate(@$assignment_info->last_date_submission)); ?>

                                </div>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(file_exists($assignment_info->attachment)): ?>

                                    <div class="col-lg-2">
                                        <?php echo e(__('assignment.Attachment')); ?>

                                    </div>
                                    <div class="col-lg-4">
                                        : <a href="<?php echo e(asset(@$assignment_info->attachment)); ?>"
                                             download="<?php echo e(@$assignment_info->title); ?>_attachment"><?php echo e(__('common.Download')); ?></a>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            <div class="row assignment_info">
                                <div class="col-lg-2">
                                    <?php echo e(__('assignment.Description')); ?>

                                </div>
                                <div class="col-lg-12">
                                    <?php echo @$assignment_info->description; ?>

                                </div>
                            </div>

                            <hr>
                            <?php
                                $todate = today()->format('Y-m-d');
                                if (Auth::check()) {
                                    $submit_info=Modules\Homework\Entities\InfixSubmitHomework::assignmentLastSubmitted($assignment_info->id,Auth::user()->id);
                                    //$assign_assignment->is_submittable==1 &&
                                    if ($submit_info) {
                                    //    $pass_status=$submit_info->assigned->pass_status;
                                       $pass_status=1;
                                       if ($assign_assignment->quiz_mark!=null) {
                                          $quiz_submit_status=1;
                                       } else {
                                          $quiz_submit_status=0;
                                       }
                                    }else{
                                        $pass_status=0;
                                       $quiz_submit_status=0;
                                    }
                                }
                            ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($todate <= $assignment_info->last_date_submission): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($pass_status !=1 || $assign_assignment->is_submittable==1): ?>
                                    <h3><?php echo e(__('common.Submit')); ?> <?php echo e(__('homework.Study Material')); ?></h3>
                                    <form action="<?php echo e(route('submitHomework')); ?>" method="Post"
                                          enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <label for=""><?php echo e(__('subscription.Answer')); ?> *</label>
                                                <textarea
                                                    class="textArea lms_summernote <?php echo e(@$errors->has('answer') ? ' is-invalid' : ''); ?>"
                                                    cols="30" rows="10" name="answer">
                                            

                                        </textarea>
                                                <span class="text-danger"
                                                      role="alert"><?php echo e($errors->first('answer')); ?></span>
                                            </div>


                                            <input type="hidden" name="assignment_id"
                                                   value="<?php echo e($assign_assignment->assignment->id); ?>">
                                            <input type="hidden" name="assign_id" value="<?php echo e($assign_assignment->id); ?>">
                                            <input type="hidden" name="assignment_from" value="1">

                                            <div class="col-12" style="margin-top: 20px;">
                                                <div class="preview_upload">

                                                    <div class="preview_upload_thumb d-none">
                                                        <img src="" alt="" id="imgPreview"
                                                             style=" display:none;height: 100%;width: 100%;">
                                                        <span
                                                            id="previewTxt"><?php echo e(__('assignment.Assignment')); ?> <?php echo e(__('assignment.Upload')); ?></span>
                                                    </div>
                                                    <div class="preview_drag">
                                                        <div class="preview_drag_inner">
                                                            <div class="chose_file">
                                                                <input type="file" class="assignment_file"
                                                                       name="attached_file" id="imgInp">
                                                                
                                                                
                                                                
                                                                
                                                            </div>
                                                            <small>[ pdf, pptx, docx, jpg, png, excel,ppt,doc]</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <div class="offset-4 align-center col-lg-4">
                                                    <button
                                                        class="theme_btn w-100 text-center mt_40"><?php echo e(__('student.Save')); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php else: ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for=""><?php echo e(__('subscription.Answer')); ?> *</label>
                                            <textarea
                                                class="textArea lms_summernote <?php echo e(@$errors->has('answer') ? ' is-invalid' : ''); ?>"
                                                cols="30" rows="10"><?php echo @$submit_info->answer; ?>


                                        </textarea>
                                            <span class="text-danger" role="alert"><?php echo e($errors->first('answer')); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 align-left" style="margin-top: 20px;">
                                        
                                        <a data-bs-toggle="modal" data-bs-target="#viewAttachment<?php echo e($submit_info->id); ?>"
                                           href="#"
                                           class="theme_btn small_btn2 p-2 m-1">Attachment <?php echo e(__('common.View')); ?></a>
                                    </div>

                                    <?php echo $__env->make(theme('pages.details_attachment_view'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\homework-details.blade.php ENDPATH**/ ?>