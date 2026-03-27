<div class="tab-pane fade" id="social_tab">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h3><?php echo e(__('profile.social_and_contact')); ?></h3>
            </div>
            <hr>
            <form action="<?php echo e(route('users.social_info.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="facebook"><?php echo e(__('common.Facebook URL')); ?> </label>
                            <input class="primary_input_field" name="facebook" id="facebook"
                                   value="<?php echo e(@$user->facebook); ?>" placeholder="-" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="twitter"><?php echo e(__('common.Twitter URL')); ?> </label>
                            <input class="primary_input_field" name="twitter" id="twitter"
                                   value="<?php echo e(@$user->twitter); ?>" placeholder="-" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="linkedin"><?php echo e(__('common.LinkedIn URL')); ?> </label>
                            <input class="primary_input_field" name="linkedin" id="linkedin"
                                   value="<?php echo e(@$user->linkedin); ?>" placeholder="-" type="text">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="instagram"><?php echo e(__('common.Instagram URL')); ?> </label>
                            <input class="primary_input_field" name="instagram" id="instagram"
                                   value="<?php echo e(@$user->instagram); ?>" placeholder="-" type="text">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="">
                            <h4 class="text-nowrap"><?php echo e(__('profile.Instant_messaging')); ?></h4>
                        </div>
                        <div class="custom-hr">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 mt-repeater no-extra-space">

                        <div data-repeater-list="instant_messaging">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $instant_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i_msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div data-repeater-item class="mt-repeater-item">

                                    <div class="mt-repeater-row">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                           for="service"> <?php echo e(__('profile.service')); ?> </label>
                                                    <input name="service" value="<?php echo e($i_msg->service); ?>"
                                                           class="primary_input_field service" placeholder="Ex: Skype"
                                                           type="text">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="primary_input mb-25">
                                                    <label class="primary_input_label"
                                                           for="username"> <?php echo e(__('profile.username')); ?>  </label>
                                                    <input name="username" value="<?php echo e($i_msg->username); ?>"
                                                           class="primary_input_field username" placeholder="Ex: jon"
                                                           type="text">
                                                </div>
                                            </div>


                                            <div class="col-lg-1">
                                                <div class="position-relative form-group ">
                                                    <a href="javascript:void(0);" data-repeater-delete
                                                       class="primary-btn small icon-only fix-gr-bg mt-35  mt-repeater-delete">
                                                        <i class="fas fa-trash m-0"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <div data-repeater-item class="mt-repeater-item">

                                <div class="mt-repeater-row">

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label"
                                                       for="service"> <?php echo e(__('profile.service')); ?> </label>
                                                <input name="service" class="primary_input_field service"
                                                       placeholder="Ex: Skype" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label"
                                                       for="username"> <?php echo e(__('profile.username')); ?>  </label>
                                                <input name="username" class="primary_input_field username"
                                                       placeholder="Ex: jon" type="text">
                                            </div>


                                        </div>


                                        <div class="col-lg-1">
                                            <div class="position-relative form-group ">
                                                <a href="javascript:void(0);" data-repeater-delete
                                                   class="primary-btn small icon-only fix-gr-bg mt-35  mt-repeater-delete">
                                                    <i class="fas fa-trash m-0"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <a href="javascript:void(0);" data-repeater-create
                                   class="primary-btn radius_30px  fix-gr-bg mt-repeater-add "><i
                                        class="fa fa-plus"></i><?php echo e(__('common.Add More')); ?></a>
                            </div>
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_social_tab.blade.php ENDPATH**/ ?>