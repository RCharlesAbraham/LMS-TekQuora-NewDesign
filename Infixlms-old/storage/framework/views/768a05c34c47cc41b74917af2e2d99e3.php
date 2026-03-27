<div class="tab-pane fade" id="about_tab">
    <div class="row">
        <div class="col-12">

            <h3><?php echo e(__('common.About')); ?></h3>
            <hr>
            <form action="<?php echo e(route('users.about.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="job_title"><?php echo e(__('profile.job_title')); ?> </label>
                            <input class="primary_input_field" name="job_title" id="job_title"
                                   type="text" value="<?php echo e(old('job_title')??@$user->job_title); ?>"
                                   placeholder="Ex: Sales Manager, Software Engineer" <?php echo e($errors->first('job_title') ? 'autofocus' : ''); ?>>
                        </div>

                    </div>
                </div>

                <div class="row">

                    <div class="col-md-8">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label d-flex"
                                   for=""><?php echo e(__('profile.short_description')); ?>

                            </label>
                            <textarea id="my-textarea" class="primary_input_field short_description_field"
                                      name="short_description" style="height: 100px"
                                      rows="2"><?php echo e(old("short_description")??@$user->userInfo->short_description); ?></textarea>
                            <small class="required_mark_theme">"<?php echo e(__('profile.short_description')); ?>

                                " <?php echo e(__('profile.will be displayed at the bottom of your name on the profile cards. Keep it short (maximum 500 characters)')); ?>

                                . <span class="short_description_character_count text-danger"></span></small>
                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="about"><?php echo e(__('profile.biography')); ?> </label>
                            <textarea class="lms_summernote primary_textarea4 mb-25" name="about"
                                      id="about" cols="30"
                                      rows="10">
                              <?php echo old('about',$user->about); ?>

                            </textarea>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-12 text-end">
                        <hr class="d-block">
                        <button class="primary-btn fix-gr-bg" type="submit"><i
                                class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_about_tab.blade.php ENDPATH**/ ?>