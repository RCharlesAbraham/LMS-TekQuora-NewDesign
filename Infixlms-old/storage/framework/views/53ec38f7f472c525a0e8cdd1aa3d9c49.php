<section class="hero_area become_tutor">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <!-- login popup:start -->
                <div class="login_popup">
                    <div class="reg_inner">
                        <div class="reg_inner_title">
                            <h3>Become a Tutor</h3>
                            <p>Earn money on your schedule</p>
                        </div>
                        <div class="reg_inner_content">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('instructor_reg') ==1): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(saasEnv('ALLOW_GOOGLE_LOGIN') == 'true'): ?>
                                    <a href="<?php echo e(route('social.oauth', 'google')); ?>" class="site_btn">
                                        <svg id="google" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                             viewBox="0 0 25 25">
                                            <path id="Path_739" data-name="Path 739"
                                                  d="M5.538,146.621l-.87,3.247-3.179.067A12.517,12.517,0,0,1,1.4,138.268h0l2.831.519,1.24,2.814a7.457,7.457,0,0,0,.07,5.021Z"
                                                  transform="translate(0 -131.514)" fill="#fbbb00"></path>
                                            <path id="Path_740" data-name="Path 740"
                                                  d="M273.63,208.176a12.49,12.49,0,0,1-4.454,12.078h0l-3.565-.182-.5-3.15a7.447,7.447,0,0,0,3.2-3.8h-6.681v-4.943h12Z"
                                                  transform="translate(-248.848 -198.005)" fill="#518ef8"></path>
                                            <path id="Path_741" data-name="Path 741"
                                                  d="M49.337,316.546h0a12.5,12.5,0,0,1-18.828-3.823l4.049-3.315a7.431,7.431,0,0,0,10.709,3.8Z"
                                                  transform="translate(-29.02 -294.297)" fill="#28b446"></path>
                                            <path id="Path_742" data-name="Path 742"
                                                  d="M47.7,2.877,43.65,6.19A7.43,7.43,0,0,0,32.7,10.081l-4.07-3.332h0A12.5,12.5,0,0,1,47.7,2.877Z"
                                                  transform="translate(-27.227)" fill="#f14336"></path>
                                        </svg>
                                        <span>Log In with Google</span>
                                    </a>
                                    <div class="position-relative text-center">
                                        <p>or Sign in with Email</p>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <form action="<?php echo e(route('register')); ?>" method="POST" id="loginForm">
                            <?php echo csrf_field(); ?>
                            <div class="input-control">
                                <label for="title" class="input-control-label"><?php echo e(__('student.Enter Full Name')); ?> <span
                                        class="required_mark">*</span></label>
                                <input type="text"
                                       class="input-control-input <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                       placeholder="<?php echo e(__('student.Enter Full Name')); ?>"
                                       aria-label="Username"
                                       name="name" value="<?php echo e(old('name')); ?>">

                                <span class="text-danger" role="alert"><?php echo e($errors->first('name')); ?></span>
                            </div>
                            <div class="input-control">
                                <label for="title" class="input-control-label"><?php echo e(__('common.Enter Phone Number')); ?>

                                    <span></span></label>
                                <input type="text" class="input-control-input"
                                       placeholder="<?php echo e(__('common.Enter Phone Number')); ?>"

                                       aria-label="phone" name="phone" value="<?php echo e(old('phone')); ?>">
                                <span class="text-danger" role="alert"><?php echo e($errors->first('phone')); ?></span>
                            </div>
                            <div class="input-control">
                                <label for="title" class="input-control-label"><?php echo e(__('common.Enter Email')); ?> <span
                                        class="required_mark">*</span></label>
                                <input type="email"
                                       class="input-control-input <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                       placeholder="Type e-mail address" aria-label="Username"
                                       aria-describedby="basic-addon3" name="email"
                                       required="" value="<?php echo e(old('email')); ?>">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->first('email')): ?>
                                    <span class="text-danger" role="alert"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            <div class="input-control">
                                <label for="title" class="input-control-label">Password <span
                                        class="required_mark">*</span></label>
                                <input type="password" name="password" class="input-control-input"
                                       placeholder="Min. 8 Character"
                                       required="">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->first('password')): ?>
                                    <span class="text-danger" role="alert"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            <div class="input-control">
                                <label for="title" class="input-control-label"><?php echo e(__('common.Enter Confirm Password')); ?>

                                    <span class="required_mark">*</span></label>
                                <input type="password" class="input-control-input"
                                       placeholder="<?php echo e(__('common.Enter Confirm Password')); ?> *"
                                       name="password_confirmation" aria-label="password_confirmation">

                                <span class="text-danger"
                                      role="alert"><?php echo e($errors->first('password_confirmation')); ?></span>
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('student_reg') == 1 && saasPlanCheck('student') == false): ?>
                                <div class="input-control">
                                    <input type="submit" class="input-control-input" value="<?php echo e(__('common.Sign Up')); ?>">
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </form>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!auth()->check()): ?>
                            <p><?php echo e(__('appointment.have an Account?')); ?> <a
                                    href="<?php echo e(route('login')); ?>"><?php echo e(__('common.Login')); ?></a></p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
                <!-- login popup:end -->
            </div>
        </div>
    </div>
</section>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(in_array('tutor-feature', $hasDescription)): ?>
    <?php
        $decription = \Modules\Appointment\Entities\AppointmentFrontendPage::description('tutor-feature', 'become_instructor_page');
    ?>

        <?php echo $decription; ?>
<?php else: ?>
    <?php echo $__env->make('appointment::snippet.components._tutor_feature', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(in_array('tutor-sign-up', $hasDescription)): ?>
    <?php
        $decription = \Modules\Appointment\Entities\AppointmentFrontendPage::description('tutor-sign-up', 'become_instructor_page');
    ?>
        <?php echo $decription; ?>
<?php else: ?>
    <?php echo $__env->make('appointment::snippet.components._tutor_sign_up', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(in_array('tutor-testimonial', $hasDescription)): ?>
    <?php
        $decription = \Modules\Appointment\Entities\AppointmentFrontendPage::description('tutor-testimonial', 'become_instructor_page');
    ?>
        <?php echo $decription; ?>
<?php else: ?>
    <?php echo $__env->make('appointment::snippet.components._tutor_testimonial', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(in_array('tutor-connect', $hasDescription)): ?>
    <?php
        $decription = \Modules\Appointment\Entities\AppointmentFrontendPage::description('tutor-connect', 'become_instructor_page');
    ?>
        <?php echo $decription; ?>
<?php else: ?>
    <?php echo $__env->make('appointment::snippet.components._tutor_connect', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(in_array('tutor-faq', $hasDescription)): ?>
    <?php
        $decription = \Modules\Appointment\Entities\AppointmentFrontendPage::description('tutor-faq', 'become_instructor_page');
    ?>
        <?php echo $decription; ?>
<?php else: ?>
    <?php echo $__env->make('appointment::snippet.components._tutor_faq', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\appointment-become-instructor.blade.php ENDPATH**/ ?>