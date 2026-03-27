<div class="tab-pane fade" id="change_password_tab">
    <div class="row">
        <div class="col-12">

            <h3><?php echo e(__('profile.change_password')); ?></h3>
            <hr>
            <form action="<?php echo e(route('updatePassword')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="password-field"><?php echo e(__('common.Current')); ?> <?php echo e(__('common.Password')); ?>

                                <strong
                                    class="text-danger">*</strong></label>
                            <div>

                                <input class="primary_input_field" name="current_password"
                                       <?php echo e($errors->first('current_password') ? 'autofocus' : ''); ?>

                                       placeholder="<?php echo e(__('common.Current')); ?> <?php echo e(__('common.Password')); ?>"
                                       id="password-field"
                                       type="password">
                                <span toggle="#password-field"
                                      class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="password-field2"><?php echo e(__('common.New')); ?>  <?php echo e(__('common.Password')); ?>

                                <strong
                                    class="text-danger">*</strong>
                                <small>(<?php echo e(__('common.Minimum 8 characters')); ?>)</small>
                            </label>
                            <input class="primary_input_field" name="new_password"
                                   placeholder="<?php echo e(__('common.New')); ?>  <?php echo e(__('common.Password')); ?> "
                                   id="password-field2"
                                   type="password" <?php echo e($errors->first('new_password') ? 'autofocus' : ''); ?>>
                            <span toggle="#password-field2"
                                  class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="password-field3"><?php echo e(__('common.Re-Type Password')); ?>

                                <strong class="text-danger">*</strong></label>
                            <input class="primary_input_field" name="confirm_password"
                                   <?php echo e($errors->first('confirm_password') ? 'autofocus' : ''); ?>

                                   id="password-field3" placeholder="<?php echo e(__('common.Re-Type Password')); ?>"
                                   type="password">
                            <span toggle="#password-field3"
                                  class="fa fa-fw fa-eye field-icon toggle-password3"></span>
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_change_password_tab.blade.php ENDPATH**/ ?>