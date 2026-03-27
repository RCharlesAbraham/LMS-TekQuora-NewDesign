<style>
    .instructor_cta {
        background-image: url('<?php echo e($joining_part->bg_image); ?>');
        background-size: cover;
        background-position: center center;
    }
</style>
<div>
    <section class="cta_part instructor_cta section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="cta_part_iner">
                        <h2><?php echo e($joining_part->title??''); ?></h2>
                        <p> <?php echo e($joining_part->description??''); ?></p>
                        <!-- Button trigger modal -->
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('instructor_reg') ==1): ?>
                            <a href="#" class="theme_btn" data-bs-toggle="modal"
                               data-bs-target="#Instructor">

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($joining_part->btn_name)): ?>
                                    <?php echo e($joining_part->btn_name); ?>

                                <?php else: ?>
                                    <?php echo e(__('frontendmanage.Become Instructor')); ?>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('instructor_reg') ==1): ?>
                            <div class="modal fade" id="Instructor" tabindex="-1" role="dialog"
                                 aria-labelledby="InstructorTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content cs_modal">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="InstructorTitle"><?php echo e(__('frontendmanage.Become Instructor')); ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true" class="ti-close"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('register')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <input type="text" class="form-control "
                                                               placeholder="<?php echo e(__('student.Enter Full Name')); ?>*"
                                                               aria-label="Username"
                                                               name="name" value="<?php echo e(old('name')); ?>">
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('name')); ?></span>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input type="email" class="form-control "
                                                               placeholder="<?php echo e(__('common.Enter Email')); ?>*"
                                                               aria-label="email" name="email" value="<?php echo e(old('email')); ?>">
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('email')); ?></span>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control "
                                                               placeholder="<?php echo e(__('common.Enter Phone Number')); ?>"
                                                               aria-label="phone" name="phone" value="<?php echo e(old('phone')); ?>">
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('phone')); ?></span>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input type="password" class="form-control"
                                                               placeholder="<?php echo e(__('frontend.Enter Password')); ?>*"
                                                               aria-label="password" name="password">
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('password')); ?></span>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="password" class="form-control"
                                                               placeholder="<?php echo e(__('common.Enter Confirm Password')); ?>*"
                                                               name="password_confirmation"
                                                               aria-label="password_confirmation">
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('password_confirmation')); ?></span>
                                                    </div>
                                                </div>


                                                <div class="col-12 ">
                                                    <div class="remember_forgot_pass d-flex align-items-center">
                                                        <label class="primary_checkbox d-flex" for="checkbox">
                                                            <input checked="" type="checkbox" id="checkbox">
                                                            <span class="checkmark mr_15"></span>
                                                            <span><?php echo e(__('frontend.By signing up, you agree to')); ?>

                                                            <a target="_blank" href="<?php echo e(route('privacy')); ?>">
                                                                <?php echo e(__('frontend.Terms of Service and Privacy Policy')); ?>.
                                                            </a>
                                                        </span>

                                                        </label>

                                                    </div>

                                                </div>
                                                <input type="hidden" name="type" value="Instructor">

                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                                    <div class="form-group col-md-12">
                                                        <small
                                                            class="text-danger">* <?php echo e(__("Already login. You can't register right now")); ?>

                                                            .</small>
                                                    </div>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->guest()): ?>
                                                    <button type="submit" class="theme_btn small_btn2" id="submitBtn"
                                                            <?php if(auth()->guard()->check()): ?> disabled <?php endif; ?>>
                                                        <?php echo e(__('common.Register')); ?>

                                                    </button>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\become-instructor-page-join-top.blade.php ENDPATH**/ ?>