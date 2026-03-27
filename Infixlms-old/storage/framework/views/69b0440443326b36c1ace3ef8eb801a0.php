<?php echo Form::open(['route'=>'makePlaceOrder']); ?>

<div>
    <div class="checkout_wrapper">
        <input type="hidden" name="type" value="appointment">
        <input type="hidden" name="tracking_id" value="<?php echo e($checkout->tracking); ?>">
        <input type="hidden" name="id" value="<?php echo e($checkout->id); ?>">
        <div class="billing_details_wrapper">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($bills) > 0): ?>
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="remember_forgot_pass d-flex justify-content-between">
                            <label class="primary_checkbox d-flex">
                                <input type="radio" class="billing_address" checked="checked" name="billing_address"
                                       value="previous">
                                <span class="checkmark mr_15"></span>
                                <span class="label_name"><?php echo e(__('frontendmanage.Previous Billing Address')); ?></span>
                            </label>
                        </div>
                        <div class="remember_forgot_pass d-flex justify-content-between">
                            <label class="primary_checkbox d-flex">
                                <input type="radio" class="billing_address" name="billing_address"
                                       value="new">
                                <span class="checkmark mr_15"></span>
                                <span class="label_name"><?php echo e(__('frontendmanage.New Billing Address')); ?></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 w-100 prev_billings">
                        <label class="primary_label2"><?php echo e(__('frontendmanage.Billing Address')); ?> <span
                                class="required_mark">*</span>
                        </label>


                        <select name="old_billing" class="mb-3 wide mb_20 w-100 old_billing small_select">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($bills)): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($bill->id); ?>"
                                            data-id="<?php echo e($bill); ?>"><?php echo e($bill->first_name); ?> <?php echo e($bill->last_name); ?>

                                        => <?php echo e($bill->address1); ?>,<?php echo e($bill->city); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
                    </div>
                </div>
            <?php else: ?>
                <input type="hidden" name="billing_address" value="new">
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
                <h3 class="font_22 mt-3 f_w_700 mb_30 billing_heading">
                    <span class="billing_heading_edit"><?php echo e(__('common.Edit')); ?></span>
                    <?php echo e(__('frontend.Billing Details')); ?></h3>

                <table class="table table-bordered billing_info"
                       style=" <?php if(count($bills) == 0): ?> display: none <?php endif; ?>">
                    <tr>
                        <td colspan="2">
                            <button type="button" class="theme_btn small_btn2 float-end"
                                    id="editPrevious"><?php echo e(__('common.Edit')); ?></button>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('common.Name')); ?></td>
                        <td class="billing_name"><?php echo e(isset($bills[0]->first_name)?$bills[0]->first_name:''); ?> <?php echo e(isset($bills[0]->last_name)?$bills[0]->last_name:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('common.Email')); ?></td>
                        <td class="billing_email"> <?php echo e(isset($bills[0]->email)?$bills[0]->email:''); ?></td>
                    </tr>
                    <tr class="d-none">
                        <td><?php echo e(__('common.Phone')); ?></td>
                        <td class="billing_phone"><?php echo e(isset($bills[0]->phone)?$bills[0]->phone:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.Company Name')); ?></td>
                        <td class="billing_company"><?php echo e(isset($bills[0]->company_name)?$bills[0]->company_name:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.Street Address')); ?></td>
                        <td class="billing_address"><?php echo e(isset($bills[0]->address1)?$bills[0]->address1:''); ?> <?php echo e(isset($bills[0]->address2)?$bills[0]->address2:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.Zip Code')); ?></td>
                        <td class="billing_zip"><?php echo e(isset($bills[0]->zip_code)?$bills[0]->zip_code:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('common.State')); ?></td>
                        <td class="billing_city"><?php echo e(isset($bills[0]->state)?$bills[0]->stateDetails->name:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.City')); ?></td>
                        <td class="billing_city"><?php echo e(isset($bills[0]->city)?$bills[0]->cityDetails->name:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.Country')); ?></td>
                        <td class="billing_country"><?php echo e(isset($bills[0]->country)?$bills[0]->countryDetails->name:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.Order Details')); ?></td>
                        <td class="billing_details"><?php echo e(isset($bills[0]->details)?$bills[0]->details:''); ?></td>
                    </tr>
                </table>
            </div>
            <div class="row billing_form" style=" <?php if(count($bills) > 0): ?> display: none <?php endif; ?>">
                <input type="hidden" name="previous_address_edit" value="0" id="previous_address_edit">
                <div class="col-lg-6">

                    <?php
                        $name =  explode(" ", $profile->name);

                    ?>
                    <label class="primary_label2"><?php echo e(__('frontend.First Name')); ?> <span
                            class="required_mark">*</span></label>
                    <input id="first_name" name="first_name" placeholder="<?php echo e(__('frontend.Enter First Name')); ?>"
                           class="primary_input3"
                           value="<?php echo e(old('first_name',(!empty($current)) ? $current->first_name : $name[0]??'')); ?>"
                           type="text" <?php echo e($errors->first('first_name') ? 'autofocus' : ''); ?>>
                    <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                </div>
                <div class="col-lg-6">
                    <label class="primary_label2"><?php echo e(__('frontend.Last Name')); ?> <span
                            class="required_mark">*</span></label>
                    <input id="last_name" name="last_name" placeholder="<?php echo e(__('frontend.Enter Last Name')); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('frontend.Enter Last Name')); ?>'"
                           class="primary_input3"
                           value="<?php echo e(old('last_name',!empty($current) ? $current->last_name : $name[1]??'')); ?>"
                           type="text" <?php echo e($errors->first('last_name') ? 'autofocus' : ''); ?>>
                    <span class="text-danger"><?php echo e($errors->first('last_name')); ?></span>
                </div>

                <div class="col-lg-12 mt_20">
                    <label class="primary_label2"><?php echo e(__('frontend.Company Name')); ?> (<?php echo e(__('frontend.Optional')); ?>

                        )</label>
                    <input id="company_name" name="company_name" placeholder="<?php echo e(__('frontend.Enter Company Name')); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('frontend.Enter Company Name')); ?>'"
                           class="primary_input3"
                           type="text"
                           value="<?php echo e(old('company_name',!empty($current)?$current->company_name:'')); ?>"
                    >
                </div>
                <div class="col-lg-12 mt_20">
                    <label class="primary_label2"><?php echo e(__('frontend.Country')); ?> <span class="required_mark">*</span>
                    </label>
                    <select id="country" name="country"
                            class="theme_select mb-3 wide w-100 " <?php echo e($errors->first('country') ? 'autofocus' : ''); ?>>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($countries)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    value="<?php echo e($country->id); ?>" <?php if(!empty($current)): ?>
                                    <?php echo e($current->country==$country->id?'selected':''); ?>

                                    <?php else: ?>
                                    <?php echo e($profile->country==$country->id?'selected':''); ?>

                                    <?php endif; ?> ><?php echo e($country->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('country')); ?></span>
                </div>

                <div class="col-lg-12 mt_20">
                    <label class="primary_label2"><?php echo e(__('frontend.Street Address')); ?> <span class="required_mark">*</span></label>
                    <input id="address1" name="address1"
                           placeholder="<?php echo e(__('frontend.House Number and street address')); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__('frontend.House Number and street addres')); ?>s'"
                           class="primary_input3" type="text"
                           value="<?php echo e(old('address1',!empty($current)?$current->address1:$profile->cityName)); ?>" <?php echo e($errors->first('address1') ? 'autofocus' : ''); ?>>
                    <span class="text-danger"><?php echo e($errors->first('address1')); ?></span>
                </div>
                <div class="col-lg-12 mt-2">
                    <input id="address2" name="address2"
                           placeholder="<?php echo e(__("frontend.Apartment, suite, unit etc (Optional)")); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__("frontend.Apartment, suite, unit etc (Optional)")); ?>'"
                           class="primary_input3" type="text"
                           value="<?php echo e(old('address1',!empty($current)?$current->address2:'')); ?>">
                </div>
                <div class="col-lg-12 mt_20">
                    <label class="primary_label2"> <?php echo e(__('common.State')); ?> </label>

                    <select class="theme_select wide stateList" name="state" id="state">
                        <option
                            data-display=" <?php echo e(__('common.Select')); ?> <?php echo e(__('common.State')); ?>"
                            value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.State')); ?>

                        </option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e(@$state->id); ?>"
                                    <?php if(@$user->state==$state->id): ?> selected <?php endif; ?>><?php echo e(@$state->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>


                    <span class="text-danger"><?php echo e($errors->first('state')); ?></span>
                </div>

                <div class="col-lg-12 mt_20">
                    <label class="primary_label2"><?php echo e(__("frontend.City / Town")); ?>  </label>

                    <select class="theme_select wide cityList" name="city" id="city">
                        <option
                            data-display=" <?php echo e(__('common.Select')); ?> <?php echo e(__('common.City')); ?>"
                            value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('common.City')); ?>

                        </option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e(@$city->id); ?>"
                                    <?php if(@$user->city==$city->id): ?> selected <?php endif; ?>><?php echo e(@$city->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </select>


                    <span class="text-danger"><?php echo e($errors->first('city')); ?></span>
                </div>
                <div class="col-lg-12 mt_20 mb_35">
                    <label class="primary_label2"><?php echo e(__("frontend.Postcode / ZIP")); ?> (<?php echo e(__('frontend.Optional')); ?>

                        )</label>
                    <input id="zip_code" name="zip_code" placeholder="<?php echo e(__('frontend.Enter Company Name')); ?>"
                           onfocus="this.placeholder = ''" class="primary_input3"
                           type="text"
                           value="<?php if(!empty($current)): ?><?php echo e($current->zip_code); ?><?php else: ?><?php echo e(old('zip_code')); ?><?php endif; ?>">
                </div>
                <div class="col-lg-12 mt_20 d-none">
                    <label class="primary_label2"><?php echo e(__('frontend.Phone No')); ?> <span
                            class="required_mark">*</span></label>
                    <input id="phone" name="phone" placeholder="01XXXXXXXXXX" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '01XXXXXXXXXX'" class="primary_input3"
                           type="text"
                           value="<?php if(!empty($current)): ?><?php echo e($current->phone); ?><?php else: ?><?php echo e(!empty($profile->phone)?$profile->phone:'00000000000'); ?><?php endif; ?>" <?php echo e($errors->first('phone') ? 'autofocus' : ''); ?>>
                    <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                </div>
                <div class="col-lg-12 mt_20 mb_35 d-none">
                    <label class="primary_label2"><?php echo e(__('frontend.Email Address')); ?> <span class="required_mark">*</span></label>
                    <input id="email" name="email" placeholder="<?php echo e(__("frontend.e.g example@domian.com")); ?>"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = '<?php echo e(__("frontend.e.g example@domian.com")); ?>'"
                           class="primary_input3"
                           type="email"
                           value="<?php if(!empty($current)): ?><?php echo e($current->email); ?><?php else: ?><?php echo e($profile->email); ?><?php endif; ?>" <?php echo e($errors->first('email') ? 'autofocus' : ''); ?>>
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                </div>
                <div class="col-12">
                    <h3 class="font_22 f_w_700 mb_23"><?php echo e(__('frontend.Additional Information')); ?></h3>
                </div>
                <div class="col-lg-12">
                    <label class="primary_label2"><?php echo e(__('frontend.Information details')); ?></label>
                    <textarea id="details" name="details" class="primary_textarea3"
                              placeholder="<?php echo e(__("frontend.Note about your order, e.g. special note for you delivery")); ?>"
                              onfocus="this.placeholder = ''"
                              onblur="this.placeholder = '<?php echo e(__("frontend.Note about your order, e.g. special note for you delivery")); ?>'">  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($current)): ?>
                            <?php echo e($current->details); ?>

                        <?php else: ?>
                            <?php echo e(old('details')); ?>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></textarea>

                </div>
            </div>
        </div>
        <div class="order_wrapper tutor_checkouts_bg">
            <h3 class="font_22 f_w_700 mb_30"><?php echo e(__('appointment.Your order')); ?></h3>
            <div class="tutor_checkouts_inner">
                <div class="tutor_checkouts_inner_head">
                    <div class="tutor_checkouts_inner_head_left position-relative">
                        <div class="tutor_checkouts_inner_head_img">
                            <img src="<?php echo e(getProfileImage($instructor->image, $instructor->name)); ?>" alt="">
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings->review_option==1): ?>
                            <span class="tutor_checkouts_inner_head_img_rating"><i class="fa fa-star"></i><?php echo e(number_format($instructor->avgRating(), 1)); ?></span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="tutor_checkouts_inner_head_right">
                        <div class="tutor_listing_item_info_profile">
                            <h4 class="m-0"><a
                                    href="<?php echo e(route('appointment.instructor',[$instructor->slug])); ?>"><?php echo e($instructor->name); ?></a>
                                <span><img
                                        src="<?php echo e(asset('Modules/Appointment/Resources/assets/frontend/')); ?>/img/all-icons/country/<?php echo e(strtolower($instructor->userCountry->iso2)); ?>.svg"
                                        alt="" width="21" height="15"></span><span><img
                                        src="./img/all-icons/badge.svg" alt=""></span></h4>
                            <ul class="m-0">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings->number_of_student==1): ?>
                                    <li><i class="fa fa-user-friends"></i><?php echo e(count($instructor->bookStudents)); ?>

                                        <?php echo e(__('appointment.Students')); ?></li>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                    $tz = session()->get('timezone');
                ?>
                <div class="tutor_checkouts_inner_date">
                    <span><?php echo e(__('appointment.Date and time')); ?></span>
                    <h5> <?php echo e(date('F j', strtotime($schedule->schedule_date))); ?>,

                        <?php echo e(\Carbon\Carbon::parse($schedule->schedule_date . ' ' . $schedule->slotInfo->start_time)->setTimeZone($tz)->format('h:i A')); ?>

                        -
                        <?php echo e(\Carbon\Carbon::parse($schedule->schedule_date . ' ' . $schedule->slotInfo->end_time)->setTimeZone($tz)->format('h:i A')); ?>

                    </h5>
                    <span><?php echo e($tz); ?></span>
                </div>
                <div class="tutor_checkouts_inner_info">
                    <ul>
                        <li>
                            <b><?php echo e(__('appointment.Service details')); ?></b><span><?php echo e(__('appointment.Price Per Hour')); ?></span>
                        </li>
                        <li>
                            <b><?php echo e(__('appointment.1 hour lesson')); ?></b><span><?php echo e(showPrice($instructor->hour_rate)); ?></span>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="bank_transfer">
                
                <p class="mb_35">
                    <?php echo e(__('appointment.Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy')); ?>

                    .
                </p>
                <button type="submit" id="submitBtn"
                        class="theme_btn w-100"><?php echo e(__('appointment.Place An Order')); ?></button>
            </div>
        </div>

    </div>
</div>
<?php echo Form::close(); ?>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\appointment-checkout-page-section.blade.php ENDPATH**/ ?>