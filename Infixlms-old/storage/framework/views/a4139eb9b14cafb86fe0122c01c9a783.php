<div class="tab-pane fade" id="extra_info_tab">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h3><?php echo e(__('profile.extra_information')); ?></h3>
            </div>
            <hr>
            <form action="<?php echo e(route('users.extra_info.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <div class="col-xl-6 mb-25">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label" for="gender"><?php echo e(__('common.gender')); ?></label>
                            <select class="primary_select" name="gender" id="gender">
                                <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('common.gender')); ?>"
                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.gender')); ?> </option>
                                <option <?php echo e(@$user->gender == 'male' ?'selected':''); ?> value="male">Male</option>
                                <option <?php echo e(@$user->gender == 'female' ?'selected':''); ?> value="female">Female</option>
                                <option <?php echo e(@$user->gender == 'other' ?'selected':''); ?> value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="primary_input mb-15">
                            <label class="primary_input_label"
                                   for=""><?php echo e(__('common.Date of Birth')); ?>

                            </label>
                            <div class="primary_datepicker_input">
                                <div class="g-0  input-right-icon">
                                    <div class="col">
                                        <div class="">
                                            <input placeholder="<?php echo e(__('common.Date')); ?>"
                                                   class="primary_input_field primary-input date form-control"
                                                   id="startDate" type="text" name="dob"
                                                   value="<?php echo e(@$user->dob?date('m/d/Y',strtotime(@$user->dob)):''); ?> "
                                                   autocomplete="off" <?php echo e($errors->first('dob') ? 'autofocus' : ''); ?>>
                                        </div>
                                    </div>
                                    <button class="" type="button">
                                        <i class="ti-calendar" id="start-date-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4><?php echo e(__('profile.region')); ?></h4>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-25">
                        <label class="primary_input_label"
                               for="country"><?php echo e(__('common.Country')); ?> </label>
                        <select class="primary_select" name="country" id="country">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e(@$country->id); ?>"
                                        <?php if(@$user->country==$country->id): ?> selected <?php endif; ?>><?php echo e(@$country->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-25">
                        <label class="primary_input_label"
                               for="state"><?php echo e(__('common.State')); ?> </label>
                        <select class="select2  stateList" name="state" id="state">
                            <option
                                data-display=" <?php echo e(__('common.Select')); ?> <?php echo e(__('common.State')); ?>"
                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.State')); ?>

                            </option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e(@$state->id); ?>"
                                        <?php if(@$user->state==$state->id): ?> selected <?php endif; ?>><?php echo e(@$state->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-25">
                        <label class="primary_input_label"
                               for="city"><?php echo e(__('common.City')); ?> </label>
                        <select class="select2  cityList" name="city" id="city">
                            <option
                                data-display=" <?php echo e(__('common.Select')); ?> <?php echo e(__('common.City')); ?>"
                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.City')); ?>

                            </option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e(@$city->id); ?>"
                                        <?php if(@$user->city==$city->id): ?> selected <?php endif; ?>><?php echo e(@$city->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="zip"><?php echo e(__('common.Zip Code')); ?> </label>
                            <input class="primary_input_field" name="zip" value="<?php echo e(@$user->zip); ?>"
                                   id="zip" placeholder="-" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="zip"><?php echo e(__('common.Address')); ?> </label>
                            <input class="primary_input_field" name="address" value="<?php echo e(@$user->address); ?>"
                                   id="address" placeholder="-" type="text">
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_extra_info_tab.blade.php ENDPATH**/ ?>