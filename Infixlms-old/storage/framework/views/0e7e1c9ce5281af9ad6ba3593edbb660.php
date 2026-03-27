<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('assignment.Assignment')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('public/backend/css/summernote-bs4.min.css/')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/frontend/compact/css/myProfile.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('public/backend/js/summernote-bs4.min.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            if ($('.lms_summernote').length) {
                $('.lms_summernote').summernote({
                    codeviewFilter: true,
                    codeviewIframeFilter: true,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen']],
                    ],
                    placeholder: 'Answer',
                    tabsize: 2,
                    height: 188,
                    tooltip: false
                });
            }
        });

        $(document).ready(function () {
            $('.note-toolbar').find('[data-toggle]').each(function () {
                $(this).attr('data-bs-toggle', $(this).attr('data-toggle')).removeAttr('data-toggle');
            });
        });
        $(document).ready(function () {
            $('.note-modal').find('[data-dismiss]').each(function () {
                $(this).attr('data-bs-dismiss', $(this).attr('data-dismiss')).removeAttr('data-dismiss');
            });
        });
    </script>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('mainContent'); ?>
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
    </style>
    <div class="main_content_iner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="purchase_history_wrapper pb_50">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('assignment.Assignment')); ?> <?php echo e(__('common.Details')); ?></h3>
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
                                    : Not Assigned
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
                                $submit_info=Modules\Assignment\Entities\InfixSubmitAssignment::assignmentLastSubmitted($assignment_info->id,Auth::user()->id);
                            }
                        ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($todate <= $assignment_info->last_date_submission): ?>
                            <h3><?php echo e(__('common.Submit')); ?> <?php echo e(__('assignment.Assignment')); ?></h3>
                            <form action="<?php echo e(route('submitAssignment')); ?>" method="Post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for=""><?php echo e(__('subscription.Answer')); ?> *</label>
                                        <textarea
                                            class="textArea lms_summernote <?php echo e(@$errors->has('answer') ? ' is-invalid' : ''); ?>"
                                            cols="30" rows="10" name="answer"><?php echo @$submit_info->answer; ?>


                                </textarea>
                                        <span class="text-danger" role="alert"><?php echo e($errors->first('answer')); ?></span>
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
                                                        <input type="file" name="attached_file" id="imgInp">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($submit_info) && $submit_info->assigned->pass_status): ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($submit_info->assigned->pass_status!=1): ?>
                                        <div class="row">

                                            <div class="col-12 text-center">
                                                <div class="offset-4 align-center col-lg-4">
                                                    <button
                                                        class="theme_btn w-100 text-center mt_40"><?php echo e(__('student.Save')); ?></button>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php else: ?>
                                    <div class="row">

                                        <div class="col-12 text-center">
                                            <div class="offset-4 align-center col-lg-4">
                                                <button
                                                    class="theme_btn w-100 text-center mt_40"><?php echo e(__('student.Save')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </form>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    </div>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\assignment_details.blade.php ENDPATH**/ ?>