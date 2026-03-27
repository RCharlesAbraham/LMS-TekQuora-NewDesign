<?php echo Form::open(['route'=>'appointment.makePlaceOrder']); ?>

<div>
    <div class="checkout_wrapper">
        <div class="billing_details_wrapper">
            <h3 class="font_22 f_w_700 mb_30"><?php echo e(__('appointment.Billing Details')); ?></h3>
            <div class="row">
                <div class="col-lg-6">
                    <label class="primary_label2"><?php echo e(__('appointment.First Name')); ?> <span
                            class="required_mark">*</span></label>
                    <input name="name" placeholder="<?php echo e(__('appointment.Enter First Name')); ?> "
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('appointment.Enter First Name')); ?> '"
                           class="primary_input3 mb_20" required="" type="text" value="">
                </div>
                <div class="col-lg-6">
                    <label class="primary_label2"><?php echo e(__('appointment.Last Name')); ?> <span class="required_mark">*</span></label>
                    <input name="lname" placeholder="<?php echo e(__('appointment.Enter Last Name')); ?> "
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('appointment.Enter Last Name')); ?> '"
                           class="primary_input3 mb_20" required="" type="text">
                </div>
                <div class="col-lg-12">
                    <label class="primary_label2"><?php echo e(__('appointment.Company Name (Optional)')); ?></label>
                    <input name="cname" placeholder="Enter Company Name" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter Company Name'" class="primary_input3 mb_20" required=""
                           type="text">
                </div>
                <div class="col-lg-12">
                    <label class="primary_label2"><?php echo e(__('common.Country')); ?> <span class="required_mark">*</span>
                    </label>
                    <select class="theme_select wide mb_20" style="display: none;">

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($country->id); ?>"
                            <?php if(!empty($current)): ?>
                                <?php echo e($current->country == $country->id ? 'selected' : ''); ?>

                                <?php else: ?>
                                <?php echo e($instructor->country == $country->id ? 'selected' : ''); ?>

                                <?php endif; ?>>
                                <?php echo e($country->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </select>

                </div>
                <div class="col-lg-12">
                    <label class="primary_label2"><?php echo e(__('frontend.Street Address')); ?> <span
                            class="required_mark">*</span></label>
                    <input name="sname" placeholder="House Number and street address" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'House Number and street address'" class="primary_input3 mb_20"
                           required="" type="text">
                </div>
                <div class="col-lg-12">
                    <input name="cname" placeholder="<?php echo e(__('frontend.Apartment, suite, unit etc (Optional)')); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('frontend.Apartment, suite, unit etc (Optional)')); ?>'"
                           class="primary_input3 mb_20" required="" type="text">
                </div>
                <div class="col-lg-12">
                    <label class="primary_label2"><?php echo e(__('frontend.City / Town')); ?></label>
                    <input name="cname" placeholder="Enter city/town name" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter city/town name'" class="primary_input3 mb_20" required=""
                           type="text">
                </div>

                <div class="col-lg-12">
                    <label class="primary_label2"><?php echo e(__('appointment.Postcode / ZIP (Optional)')); ?></label>
                    <input name="cname" placeholder="Enter Company Name" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter Company Name'" class="primary_input3 mb_20" required=""
                           type="text">
                </div>
                <div class="col-lg-12">
                    <label class="primary_label2"><?php echo e(__('frontend.Phone No')); ?></label>
                    <input name="cname" placeholder="01XXXXXXXXXX" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '01XXXXXXXXXX'" class="primary_input3 mb_20" required=""
                           type="text">
                </div>
                <div class="col-lg-12 mb_35">
                    <label class="primary_label2"><?php echo e(__('frontend.Email Address')); ?> <span
                            class="required_mark">*</span></label>
                    <input name="cname" placeholder="e.g example@domian.com" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'e.g example@domian.com'" class="primary_input3 mb_20" required=""
                           type="email">
                </div>
                <div class="col-12">
                    <h3 class="font_22 f_w_700 mb_23"><?php echo e(__('frontend.Additional Information')); ?></h3>
                </div>
                <div class="col-lg-12">
                    <label class="primary_label2"><?php echo e(__('frontend.Information details')); ?></label>
                    <textarea class="primary_textarea3"
                              placeholder="<?php echo e(__('frontend.Note about your order, e.g. special note for you delivery')); ?>"
                              onfocus="this.placeholder = ''"
                              onblur="this.placeholder = '<?php echo e(__('frontend.Note about your order, e.g. special note for you delivery')); ?>'"></textarea>
                </div>
            </div>
        </div>


    </div>
</div>
<?php echo Form::close(); ?>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\schedule-book-checkout-page.blade.php ENDPATH**/ ?>