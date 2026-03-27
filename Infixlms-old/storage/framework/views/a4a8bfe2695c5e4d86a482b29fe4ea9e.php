<div class="main_content_iner main_content_padding">
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="account_profile_wrapper p-4 align-items-center">
                        <div class="account_profile_thumb text-center mb_30">
                            <div class=" mb-15">
                                <img class="w-100 h-100"
                                     src="<?php echo e(asset('public/frontend/infixlmstheme/img/account/delete_account.png')); ?>"
                                     alt="">
                            </div>
                        </div>
                        <div class="account_profile_form">
                            <div class="account_title">
                                <h3 class="font_22 f_w_700 "><?php echo e(__('student.Delete account')); ?></h3>
                                <p class="mb_25 font_1 f_w_500 theme_text2"><?php echo e(__('student.If you delete your account, your data will be gone forever')); ?>

                                </p>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="primary_label2"><?php echo e(__('student.Email Address')); ?></label>
                                    <div class="">
                                        <input name="email" placeholder="<?php echo e(__('student.Email Address')); ?>"
                                               value="<?php echo e($account->email); ?>"
                                               onfocus="this.placeholder = ''"
                                               readonly
                                               onblur="this.placeholder = '<?php echo e(__('student.Email Address')); ?>'"
                                               class="primary_input" type="email">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class=" mb_30 ">
                                    </div>
                                </div>
                            </div>
                            <form action="<?php echo e(route('MyAccountDelete')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-lg-12 mb_20">
                                                                            <span class="primary_label2"><?php echo e(__('frontend.Existing Password')); ?> <span
                                                                                    class="text-danger">*</span></span>
                                        <input type="password" placeholder="<?php echo e(__('student.Type existing password')); ?>"
                                               class="primary_input  <?php echo e(@$errors->has('existing_password') ? ' is-invalid' : ''); ?>"
                                               name="old_password" <?php echo e($errors->has('old_password') ? 'autofocus' : ''); ?>>


                                    </div>


                                    <div class="col-12 ">
                                        <button type="submit"
                                                class="theme_btn mt-3 text-center"><?php echo e(__('student.Delete account')); ?></button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\account-delete-section.blade.php ENDPATH**/ ?>