<div class="modal fade admin-query" id="skill_form_modal">
    <div class="modal-dialog modal_800px modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <?php echo e(__('profile.add_or_update_skills')); ?>

                </h4>
                <button type="button" class="close " data-bs-dismiss="modal">
                    <i class="ti-close "></i>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo e(route('users.skills.store')); ?>" method="POST"
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label" for="skills">  <?php echo e(__('profile.skills')); ?> <span
                                        class="text-danger">[<?php echo e(__("frontend.Note")); ?>: <?php echo e(__('frontend.seperated by')); ?> " , "]</span></label>
                                <input value="<?php echo e(isset($exist_skills)?$exist_skills:""); ?>" id="skills" type="text"
                                       data-role="tagsinput" name="skills" class="primary_input_field">
                                <small class="text-danger"><?php echo e(__("frontend.Note")); ?>

                                    : <?php echo e(__('frontend.Maximum 10 skills')); ?> </small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 text-center pt_15">
                        <div class="d-flex justify-content-center">
                            <button class="primary-btn semi_large2  fix-gr-bg"
                                    id="save_button_parent"
                                    type="submit"><i
                                    class="ti-check"></i> <?php echo e(__('common.Save')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\skills\form.blade.php ENDPATH**/ ?>