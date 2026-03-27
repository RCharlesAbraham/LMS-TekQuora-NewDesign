<?php $__env->startSection('content'); ?>

    <div class="login_wrapper">
        <div class="login_wrapper_left">
            <div class="logo">
                <a href="<?php echo e(url('/')); ?>">
                    <img style="width: 190px" src="<?php echo e(asset(Settings('logo') )); ?> " alt="">
                </a>
            </div>
            <div class="login_wrapper_content">
                <h4><?php echo e(__('common.Sign Up Details')); ?></h4>
                <form action="<?php echo e(route('register')); ?>" method="POST" id="regForm">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="is_lms_signup" value="1">
                    <div class="row">

                        <div class="col-12">
                            <div class="input-group custom_group_field">
                                <input type="text" class="form-control ps-0"
                                       placeholder="<?php echo e(__('saas.Institute')); ?> <?php echo e(__('common.Name')); ?> *"
                                       required aria-label="Institute name"
                                       name="institute_name" value="<?php echo e(old('institute_name')); ?>">
                            </div>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('institute_name')); ?></span>
                        </div>
                        <div class="col-12 mt_20">
                            <div class="input-group custom_group_field">
                                <input type="text" class="form-control ps-0"
                                       placeholder="<?php echo e(__('saas.Sub-Domain')); ?> *"
                                       required aria-label="Domain"
                                       name="domain" value="<?php echo e(old('domain')); ?>">
                            </div>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('domain')); ?></span>
                        </div>


                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($custom_field->show_name): ?>
                            <div class="col-12 mt_20">
                                <div class="input-group custom_group_field">
                                    <input type="text" class="form-control ps-0"
                                           placeholder="<?php echo e(__('student.Enter Full Name')); ?> <?php echo e($custom_field->required_name ? '*' : ''); ?>"
                                           <?php echo e($custom_field->required_name ? 'required' : ''); ?> aria-label="Username"
                                           name="name" value="<?php echo e(old('name')); ?>">
                                </div>
                                <span class="text-danger" role="alert"><?php echo e($errors->first('name')); ?></span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <div class="col-12 mt_20">
                            <div class="input-group custom_group_field">
                                <input type="email" class="form-control ps-0"
                                       placeholder="<?php echo e(__('common.Enter Email')); ?> *" aria-label="email" name="email"
                                       value="<?php echo e(old('email')); ?>">
                            </div>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('email')); ?></span>
                        </div>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($custom_field->show_phone): ?>
                            <div class="col-12 mt_20">
                                <div class="input-group custom_group_field">
                                    <input type="text" class="form-control ps-0"
                                           placeholder="<?php echo e(__('common.Enter Phone Number')); ?> <?php echo e($custom_field->required_phone ? '*' : ''); ?>"
                                           <?php echo e($custom_field->required_phone ? 'required' : ''); ?>

                                           aria-label="phone" name="phone" value="<?php echo e(old('phone')); ?>">
                                </div>
                                <span class="text-danger" role="alert"><?php echo e($errors->first('phone')); ?></span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <div class="col-12 mt_20">
                            <div class="input-group custom_group_field">
                                <input type="password" class="form-control ps-0"
                                       placeholder="<?php echo e(__('frontend.Enter Password')); ?> *"
                                       aria-label="password" name="password">
                            </div>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('password')); ?></span>
                        </div>
                        <div class="col-12 mt_20">
                            <div class="input-group custom_group_field">
                                <input type="password" class="form-control ps-0"
                                       placeholder="<?php echo e(__('common.Enter Confirm Password')); ?> *"
                                       name="password_confirmation" aria-label="password_confirmation">
                            </div>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('password_confirmation')); ?></span>
                        </div>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($custom_field->show_dob): ?>
                            <div class="col-12 mt_20">
                                <div class="input-group custom_group_field">
                                    <label for="dob">Date of Birth : </label>
                                    <input id="dob" type="text" class="form-control ps-0 datepicker w-100" width="300"
                                           placeholder="<?php echo e(__('common.Date of Birth')); ?> <?php echo e($custom_field->required_dob ? '*' : ''); ?>"
                                           <?php echo e($custom_field->required_dob ? 'required' : ''); ?> aria-label="Username"
                                           name="dob" value="<?php echo e(old('dob')); ?>">
                                </div>
                                <span class="text-danger" role="alert"><?php echo e($errors->first('name')); ?></span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($custom_field->show_company): ?>
                            <div class="col-12 mt_20">
                                <div class="input-group custom_group_field">
                                    <input type="text" class="form-control ps-0"
                                           placeholder="<?php echo e(__('common.Enter Company')); ?> <?php echo e($custom_field->required_company ? '*' : ''); ?>"
                                           <?php echo e($custom_field->required_company ? 'required' : ''); ?> aria-label="email"
                                           name="company" value="<?php echo e(old('company')); ?>">
                                </div>
                                <span class="text-danger" role="alert"><?php echo e($errors->first('company')); ?></span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($custom_field->show_identification_number): ?>
                            <div class="col-12 mt_20">
                                <div class="input-group custom_group_field">
                                    <input type="text" class="form-control ps-0"
                                           placeholder="<?php echo e(__('common.Enter Identification Number')); ?> <?php echo e($custom_field->required_identification_number ? '*' : ''); ?>"
                                           <?php echo e($custom_field->required_identification_number ? 'required' : ''); ?>

                                           aria-label="email" name="identification_number"
                                           value="<?php echo e(old('identification_number')); ?>">
                                </div>
                                <span class="text-danger"
                                      role="alert"><?php echo e($errors->first('identification_number')); ?></span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($custom_field->show_job_title): ?>
                            <div class="col-12 mt_20">
                                <div class="input-group custom_group_field">
                                    <input type="text" class="form-control ps-0"
                                           placeholder="<?php echo e(__('common.Enter Job Title')); ?> <?php echo e($custom_field->required_job_title ? '*' : ''); ?>"
                                           <?php echo e($custom_field->required_job_title ? 'required' : ''); ?> aria-label="email"
                                           name="job_title" value="<?php echo e(old('job_title')); ?>">
                                </div>
                                <span class="text-danger" role="alert"><?php echo e($errors->first('job_title')); ?></span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($custom_field->show_gender): ?>
                            <div class="col-xl-12">
                                <div class="short_select mt-3">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <h5 class="mr_10 font_16 f_w_500 mb-0"><?php echo e(__('common.choose_gender')); ?> <?php echo e($custom_field->required_gender ? '*' : ''); ?></h5>
                                        </div>
                                        <div class="col-xl-7">
                                            <select class="small_select w-100"
                                                    name="gender" <?php echo e($custom_field->required_gender ? 'selected' : ''); ?>>
                                                <option value="" data-display="Choose"><?php echo e(__('common.Choose')); ?></option>
                                                <option value="male"><?php echo e(__('common.Male')); ?></option>
                                                <option value="female"><?php echo e(__('common.Female')); ?></option>
                                                <option value="other"><?php echo e(__('common.Other')); ?></option>
                                            </select>

                                        </div>
                                    </div>
                                    <span class="text-danger" role="alert"><?php echo e($errors->first('gender')); ?></span>

                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($custom_field->show_student_type): ?>
                            <div class="col-xl-12">
                                <div class="short_select mt-3">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <h5 class="mr_10 font_16 f_w_500 mb-0"><?php echo e(__('common.choose_student_type')); ?> <?php echo e($custom_field->required_student_type ? '*' : ''); ?></h5>
                                        </div>
                                        <div class="col-xl-7">
                                            <select class="small_select w-100"
                                                    name="student_type" <?php echo e($custom_field->required_student_type ? 'selected' : ''); ?>>
                                                <option value="personal">Personal</option>
                                                <option value="corporate">Corporate</option>
                                            </select>
                                        </div>
                                    </div>
                                    <span class="text-danger" role="alert"><?php echo e($errors->first('student_type')); ?></span>

                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                        <div class="col-12 mt_20">
                            <div class="remember_forgot_passs d-flex align-items-center">
                                <label class="primary_checkbox d-flex" for="checkbox">
                                    <input checked="" type="checkbox" id="checkbox" required>
                                    <span class="checkmark mr_15"></span>
                                    <p><?php echo e(__('frontend.By signing up, you agree to')); ?> <a target="_blank"
                                                                                         href="<?php echo e(url('privacy')); ?>"><?php echo e(__('frontend.Terms of Service')); ?></a> <?php echo e(__('frontend.and')); ?>

                                        <a href="<?php echo e(url('privacy')); ?>"><?php echo e(__('frontend.Privacy Policy')); ?>.</a></p>
                                </label>

                            </div>
                        </div>
                        <div class="col-12 mt_20">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(saasEnv('NOCAPTCHA_FOR_REG')=='true'): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true"): ?>
                                    <?php echo NoCaptcha::display(["data-size"=>"invisible"]); ?>

                                <?php else: ?>
                                    <?php echo NoCaptcha::display(); ?>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->has('g-recaptcha-response')): ?>
                                    <span class="text-danger"
                                          role="alert"><?php echo e($errors->first('g-recaptcha-response')); ?></span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <div class="col-12 mt_20">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(saasEnv('NOCAPTCHA_FOR_REG')=='true' && saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true"): ?>

                                <button type="button" class="g-recaptcha theme_btn text-center w-100"
                                        data-sitekey="<?php echo e(config('captcha.sitekey')); ?>" data-size="invisible"
                                        data-callback="onSubmit"
                                        class="theme_btn text-center w-100">   <?php echo e(__('common.Register')); ?></button>
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <script>
                                    function onSubmit(token) {
                                        $('.preloader').fadeIn('slow');
                                        document.getElementById("regForm").submit();
                                    }
                                </script>
                            <?php else: ?>
                                <button type="submit" class="theme_btn text-center w-100" id="submitBtn">
                                    <?php echo e(__('common.Register')); ?>

                                </button>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>


            <h5 class="shitch_text">
                <?php echo e(__('common.You have already an account?')); ?> <a href="<?php echo e(route('login')); ?>"> <?php echo e(__('common.Login')); ?></a>

            </h5>
        </div>

        <?php echo $__env->make(theme('auth.login_wrapper_right'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    </div>
    <script>

        function showLoading() {
            $('.preloader').fadeIn('slow');
        }

        $(document).on("click", "#submitBtn", function (e) {
            e.preventDefault();
            showLoading();
            $('#regForm').submit();
        });


        $(function () {
            $('#checkbox').click(function () {

                if ($(this).is(':checked')) {
                    $('#submitBtn').removeClass('disable_btn');
                    $('#submitBtn').removeAttr('disabled');

                } else {
                    $('#submitBtn').addClass('disable_btn');
                    $('#submitBtn').attr('disabled', 'disabled');

                }
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('auth.layouts.app'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\auth\lms_register.blade.php ENDPATH**/ ?>