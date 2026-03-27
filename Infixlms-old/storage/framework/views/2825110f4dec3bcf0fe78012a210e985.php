<div class="tab-pane active" id="basic_information_tab">
    <div class="row">
        <div class="col-12">

            <h3><?php echo e(__('profile.basic_information')); ?></h3>
            <hr>

            <form action="<?php echo e(route('users.basic_info.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="name"><?php echo e(__('common.Name')); ?> <strong
                                    class="text-danger">*</strong></label>
                            <input class="primary_input_field" name="name" id="name"
                                   type="text" value="<?php echo e(old('name')??@$user->name); ?>"
                                   placeholder="-" <?php echo e($errors->first('name') ? 'autofocus' : ''); ?>>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label" for="email"><?php echo e(__('common.Email')); ?>

                                <strong
                                    class="text-danger">*</strong></label>
                            <input class="primary_input_field" name="email" value="<?php echo e(old("email")??@$user->email); ?>"
                                   id="email" placeholder="-"
                                   type="email" <?php echo e($errors->first('email') ? 'autofocus' : ''); ?>>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="primary_input mb-25">
                            <label class="primary_input_label"
                                   for="phone"><?php echo e(__('common.Phone')); ?>

                                <small>(<?php echo e(__('profile.With Country Code without plus')); ?>

                                    )</small></label>
                            <input class="primary_input_field" name="phone" value="<?php echo e(old("phone")??@$user->phone); ?>"
                                   id="phone" placeholder="-" type="text">
                        </div>
                    </div>
                    <div class="col-md-6 mb-25">
                        <label class="primary_input_label"
                               for="currency"><?php echo e(__('common.Currency')); ?></label>
                        <select class="primary_select theme_select" name="currency" id="currency">
                            <option value=""> <?php echo e(__('profile.select_one')); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    value="<?php echo e(@$currency->id); ?>"
                                    <?php if(old('currency')): ?>
                                        <?php if(old('currency')==$currency->id): ?> selected <?php endif; ?>
                                    <?php else: ?>
                                        <?php if(@$user->currency_id==$currency->id): ?> selected <?php endif; ?>
                                    <?php endif; ?>>
                                    <?php echo e(@$currency->name); ?> (<?php echo e($currency->code); ?>)
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </select>
                    </div>


                    <div class="col-md-6 mb-25">
                        <label class="primary_input_label"
                               for="language"><?php echo e(__('common.Language')); ?> </label>
                        <select class="primary_select theme_select" name="language" id="language">
                            <option value=""> <?php echo e(__('profile.select_one')); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e(@$language->id); ?>"
                                        <?php if(old('language')): ?>
                                            <?php if(old('language')==$language->id): ?> selected <?php endif; ?>
                                        <?php else: ?>
                                            <?php if(@$user->language_id==$language->id): ?> selected <?php endif; ?>
                                    <?php endif; ?>>
                                    <?php echo e(@$language->native); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
                    </div>

                    <div class="col-md-6 mb-25">
                        <label class="primary_input_label"
                               for="timezone"><?php echo e(__('profile.timezone')); ?> </label>
                        <select class="primary_select theme_select" name="timezone" id="timezone">
                            <option value=""> <?php echo e(__('profile.select_one')); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e(@$timezone->id); ?>"
                                        <?php if(old('timezone')): ?>
                                            <?php if(old('timezone')==$timezone->id): ?> selected <?php endif; ?>
                                        <?php else: ?>
                                            <?php if(@$user->userInfo->timezone_id == $timezone->id): ?> selected <?php endif; ?>
                                    <?php endif; ?>>
                                    <?php echo e(@$timezone->code); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
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

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_basic_information_tab.blade.php ENDPATH**/ ?>