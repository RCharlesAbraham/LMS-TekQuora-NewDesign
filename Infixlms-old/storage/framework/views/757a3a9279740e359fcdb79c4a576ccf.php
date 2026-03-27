<div class="row">
    <div class="col-12">
        <div class="">
            <h4 class="text-nowrap"><?php echo e(__('profile.zoom_api')); ?></h4>
        </div>
        <div class="custom-hr">
        </div>
    </div>
    <div class="col-lg-12">
        <form action="<?php echo e(route('users.zoom.settings.update')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="primary_input mb-25">
                        <label class="primary_input_label"
                               for="zoom_account_id"><?php echo e(__('zoom.Account ID')); ?> <strong
                                class="text-danger">*</strong></label>
                        <input class="primary_input_field" name="zoom_account_id" id="zoom_account_id"
                               type="text" value="<?php echo e(old('zoom_account_id')??@$zoom_settings->zoom_account_id); ?>"
                               placeholder="-" <?php echo e($errors->first('name') ? 'autofocus' : ''); ?>>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="primary_input mb-25">
                        <label class="primary_input_label" for="zoom_client_id"><?php echo e(__('zoom.Client ID')); ?>

                            <strong
                                class="text-danger">*</strong></label>
                        <input class="primary_input_field" name="zoom_client_id"
                               value="<?php echo e(old('zoom_client_id')??@$zoom_settings->zoom_client_id); ?>"
                               id="zoom_client_id" placeholder="-"
                               type="text" <?php echo e($errors->first('email') ? 'autofocus' : ''); ?>>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="primary_input mb-25">
                        <label class="primary_input_label"
                               for="zoom_client_secret"><?php echo e(__('zoom.Client secret')); ?> <strong
                                class="text-danger">*</strong></label>
                        <input class="primary_input_field" name="zoom_client_secret"
                               value="<?php echo e(old('zoom_client_secret')??@$zoom_settings->zoom_client_secret); ?>"
                               id="zoom_client_secret" placeholder="-" type="text">
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12 text-end">
                    
                    <button class="primary-btn fix-gr-bg" type="submit"><i
                            class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
                </div>
            </div>
        </form>
    </div>

</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\api\_zoom.blade.php ENDPATH**/ ?>