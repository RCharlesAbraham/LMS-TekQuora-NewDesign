<div>
    <form action="<?php echo e(route('subscriptionPayment')); ?>" id="orderFrom" method="post">
        <?php echo csrf_field(); ?>

        <div class="checkout_wrapper" id="mainFormData">

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
                        <div class="col-lg-12 col-12 w-100 prev_billings" style="display: none">
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
                <input type="hidden" name="plan_id" value="<?php echo e($s_plan); ?>">
                <h3 class="font_22 mt-3 f_w_700 mb_30 billing_heading"><?php echo e(__('frontend.Billing Details')); ?></h3>
                <table class="table table-bordered billing_info" style=" <?php if(count($bills) == 0): ?> display: none <?php endif; ?>">
                    <tr>
                        <td><?php echo e(__('common.Name')); ?></td>
                        <td class="billing_name"><?php echo e(isset($bills[0]->first_name)?$bills[0]->first_name:''); ?> <?php echo e(isset($bills[0]->last_name)?$bills[0]->last_name:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('common.Email')); ?></td>
                        <td class="billing_email"> <?php echo e(isset($bills[0]->email)?$bills[0]->email:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('common.Phone')); ?></td>
                        <td class="billing_phone"><?php echo e(isset($bills[0]->phone)?$bills[0]->phone:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.Company Name')); ?></td>
                        <td class="billing_company"><?php echo e(isset($bills[0]->company_name)?$bills[0]->company_name:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.Country')); ?></td>
                        <td class="billing_country"><?php echo e(isset($bills[0]->country)?$bills[0]->countryDetails->name:''); ?></td>
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
                        <td><?php echo e(__('frontend.Zip Code')); ?></td>
                        <td class="billing_zip"><?php echo e(isset($bills[0]->zip_code)?$bills[0]->zip_code:''); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo e(__('frontend.Street Address')); ?></td>
                        <td class="billing_address"><?php echo e(isset($bills[0]->address1)?$bills[0]->address1:''); ?> <?php echo e(isset($bills[0]->address2)?$bills[0]->address2:''); ?></td>
                    </tr>

                    <tr>
                        <td><?php echo e(__('frontend.Order Details')); ?></td>
                        <td class="billing_details"><?php echo e(isset($bills[0]->details)?$bills[0]->details:''); ?></td>
                    </tr>
                </table>
                <div class="row billing_form" style=" <?php if(count($bills) > 0): ?> display: none <?php endif; ?>">

                    <div class="col-lg-6">

                        <?php
                            $name =  explode(" ", $profile->name);

                        ?>
                        <label class="primary_label2"><?php echo e(__('frontend.First Name')); ?> <span class="required_mark">*</span></label>
                        <input id="first_name" name="first_name" placeholder="<?php echo e(__('frontend.Enter First Name')); ?>"
                               class="primary_input3"
                               value="<?php echo e((!empty($current)) ? $current->first_name : $name[0]??''); ?>"
                               type="text" <?php echo e($errors->first('first_name') ? 'autofocus' : ''); ?>>
                        <span class="text-danger"><?php echo e($errors->first('first_name')); ?></span>
                    </div>
                    <div class="col-lg-6">
                        <label class="primary_label2"><?php echo e(__('frontend.Last Name')); ?> <span class="required_mark">*</span></label>
                        <input id="last_name" name="last_name" placeholder="<?php echo e(__('frontend.Enter Last Name')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('frontend.Enter Last Name')); ?>'"
                               class="primary_input3"
                               value="<?php if(!empty($current)): ?><?php echo e($current->last_name); ?><?php else: ?><?php echo e($name[1]??''); ?><?php endif; ?>"
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
                               value="<?php if(!empty($current)): ?><?php echo e($current->company_name); ?><?php else: ?><?php echo e(old('company_name')); ?><?php endif; ?>">
                    </div>
                    <div class="col-lg-12 mt_20">
                        <label class="primary_label2"><?php echo e(__('frontend.Country')); ?> <span class="required_mark">*</span>
                        </label>
                        <select id="country" name="country"
                                class="select2 mb-3 wide w-100 " <?php echo e($errors->first('country') ? 'autofocus' : ''); ?>>
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
                        <label class="primary_label2"><?php echo e(__('frontend.Street Address')); ?> <span
                                class="required_mark">*</span></label>
                        <input id="address1" name="address1"
                               placeholder="<?php echo e(__('frontend.House Number and street address')); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__('frontend.House Number and street addres')); ?>s'"
                               class="primary_input3" type="text"
                               value="<?php if(!empty($current)): ?><?php echo e($current->address1); ?><?php else: ?><?php echo e($profile->cityName()); ?><?php endif; ?>" <?php echo e($errors->first('address1') ? 'autofocus' : ''); ?>>
                        <span class="text-danger"><?php echo e($errors->first('address1')); ?></span>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <input id="address2" name="address2"
                               placeholder="<?php echo e(__("frontend.Apartment, suite, unit etc (Optional)")); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__("frontend.Apartment, suite, unit etc (Optional)")); ?>'"
                               class="primary_input3" type="text"
                               value="<?php if(!empty($current)): ?><?php echo e($current->address2); ?><?php else: ?><?php echo e(old('address2')); ?><?php endif; ?>">
                    </div>
                    <div class="col-lg-12 mt_20">
                        <label class="primary_label2"><?php echo e(__("frontend.City / Town")); ?> <span
                                class="required_mark">*</span></label>
                        <input id="city" name="city" placeholder="<?php echo e(__("frontend.Enter city/town name")); ?>"
                               onfocus="this.placeholder = ''"
                               onblur="this.placeholder = '<?php echo e(__("frontend.Enter city/town name")); ?>'"
                               class="primary_input3"
                               type="text"
                               value="<?php if(!empty($current)): ?><?php echo e($current->city); ?><?php else: ?><?php echo e($profile->cityName()); ?><?php endif; ?>" <?php echo e($errors->first('city') ? 'autofocus' : ''); ?>>
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
                        <label class="primary_label2"><?php echo e(__('frontend.Email Address')); ?> <span
                                class="required_mark">*</span></label>
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
            <div class="order_wrapper">
                <h3 class="font_22 f_w_700 mb_30"><?php echo e(__('frontend.Your order')); ?></h3>
                <div class="ordered_products">

                    <div class="single_ordered_product">
                        <div class="product_name d-flex align-items-center">

                            <span><?php echo e(__('frontend.Plan Title')); ?></span>
                        </div>
                        <span class="order_prise f_w_500 font_16">
                           <?php echo e(@$cart->plan->title); ?>

                            </span>
                    </div>

                    <div class="single_ordered_product">
                        <div class="product_name d-flex align-items-center">
                            <span><?php echo e(__('frontend.Plan Validity')); ?></span>
                        </div>
                        <span class="order_prise f_w_500 font_16">
                           <?php echo e(@$cart->plan->days); ?> <?php echo e(__('frontend.Days')); ?>

                            </span>
                    </div>

                </div>
                <div class="ordered_products_lists">


                    <div class="single_lists">
                        <span class="total_text">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cart->plan->price == 0): ?>
                                <?php echo e(__('frontend.Payable Amount')); ?>

                            <?php else: ?>
                                <?php echo e(__('frontend.Subtotal')); ?>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </span>
                        <span class="totalBalance"> <?php echo e(getPriceFormat($cart->plan->price)); ?></span>

                    </div>

                    <div class="single_lists" id="couponBox"
                         style="">

                        <div class="coupon_wrapper align-items-start">
                            <input type="hidden" id="total"
                                   value="<?php echo e($cart->plan->price); ?>">

                            <input type="hidden" id="cart_type"
                                   value="subscription">

                            <input id="code" name="code" placeholder="<?php echo e(__('coupons.Enter coupon code')); ?>"
                                   class="primary_input3 " type="text">
                            <button type="button" id="applyCoupon"
                                    class="theme_btn small_btn2 "><?php echo e(__('coupons.Apply')); ?></button>
                        </div>

                    </div>
                    <div class="single_lists" id="discountBox"
                         style="display: none">

                        <span class="total_text"><?php echo e(__('payment.Discount Amount')); ?>   </span>
                        <div class="" id="cancelCoupon">

                            <svg id="icon3" xmlns="http://www.w3.org/2000/svg" width="16"
                                 height="16" viewBox="0 0 16 16">
                                <path data-name="Path 174" d="M0,0H16V16H0Z" fill="none"/>
                                <path data-name="Path 175"
                                      d="M14.95,6l-1-1L9.975,8.973,6,5,5,6,8.973,9.975,5,13.948l1,1,3.973-3.973,3.973,3.973,1-1L10.977,9.975Z"
                                      transform="translate(-1.975 -1.975)" fill="var(--system_primery_color)"/>
                            </svg>

                        </div>
                        <span class="discountAmount"></span>
                    </div>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(hasTax()): ?>
                        <div class="single_lists">
                            <span class="total_text"><?php echo e(__('tax.TAX')); ?>   </span>

                            <span class="totalTax"><?php echo e(getPriceFormat(taxAmount($cart->plan->price),false)); ?></span>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <div class="single_lists">
                        <span class="total_text"><?php echo e(__('frontend.Payable Amount')); ?> </span>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(hasTax()): ?>
                            <span class="totalBalance"><?php echo e(getPriceFormat(applyTax($cart->plan->price))); ?></span>
                        <?php else: ?>
                            <span class="totalBalance"><?php echo e(getPriceFormat($cart->plan->price)); ?></span>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>

                </div>
                <div class="bank_transfer">
                    <p class="mb_35"><?php echo e(__("frontend.Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy")); ?>

                        .</p>
                    <button type="submit" id="submitBtn"
                            class="theme_btn w-100"><?php echo e(__('frontend.Place An Order')); ?></button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\subscription-checkout-page-section.blade.php ENDPATH**/ ?>