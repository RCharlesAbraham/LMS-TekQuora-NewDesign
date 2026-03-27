<style>
    .modal-dialog {
        max-width: 1000px;
    }
</style>
<div class="main_content_iner main_content_padding">

    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('payment.Pre Booking')); ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="billing_details_wrapper">
                                    <div class="biling_address gray-bg  p-4">
                                        <h4><?php echo e(__('courses.Course')); ?> : <?php echo e(@$course->title); ?></h4>
                                        <h4><?php echo e(__('frontend.Pre Booking Amount')); ?> : <?php echo e(@$amount); ?></h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($amount)): ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="section__title3 mb_40">
                                                    <h3 class="mb-0"> <?php echo e(__('payment.Payment Method')); ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">

                                                <div class="deposit_lists_wrapper mb-50">
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($methods)): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php
                                                                if (!paymentGateWayCredentialsEmptyCheck($gateway->method)){
                                                                continue;
                                                                }
                                                            ?>
                                                            <div
                                                                class="single_deposite <?php echo e($gateway->method=="Wallet"?'p-0 border-0':''); ?>">

                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($gateway->method=="Stripe"): ?>
                                                                    <form
                                                                        action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?>"
                                                                        method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input type="hidden" name="course_id"
                                                                               value="<?php echo e($course->id); ?>">
                                                                        <input type="hidden" name="deposit_amount"
                                                                               value="<?php echo e($amount); ?>">
                                                                        <!-- single_deposite_item  -->
                                                                        <button type="submit" class="">
                                                                            <img
                                                                                src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                alt="">
                                                                        </button>
                                                                        <?php echo csrf_field(); ?>
                                                                        <script
                                                                            src="https://checkout.stripe.com/checkout.js"
                                                                            class="stripe-button"
                                                                            data-key="<?php echo e(getPaymentEnv('STRIPE_KEY')); ?>"
                                                                            data-name="Stripe Payment"
                                                                            data-image="<?php echo e(asset(Settings('favicon') )); ?>"
                                                                            data-locale="auto"
                                                                            data-currency="usd">
                                                                        </script>


                                                                    </form>

                                                                <?php elseif($gateway->method=="MercadoPago"): ?>

                                                                    <div class="">

                                                                        <a href="#" data-bs-toggle="modal"
                                                                           data-bs-target="#MakePaymentFromCreditMercadoPago"
                                                                           class=" ">
                                                                            <img class=" w-100" style="    padding: 0;
                                                                    margin-top: -2px;"
                                                                                 src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                 alt="">
                                                                        </a>
                                                                    </div>


                                                                    <div class="modal fade "
                                                                         id="MakePaymentFromCreditMercadoPago"
                                                                         tabindex="-1"
                                                                         role="dialog"
                                                                         aria-labelledby="exampleModalLabel"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg"
                                                                             role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="">MercadoPago</h5>
                                                                                </div>


                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <?php
                                                                                            $total_amount =$amount;
                                                                                            $route =route('upcoming_courses.prebooking.submit');
                                                                                            $payment_type ='prebooking'
                                                                                        ?>
                                                                                        <div class="col-md-12">
                                                                                            <?php echo $__env->make('mercadopago::partials._checkout',compact('total_amount','payment_type'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                <?php elseif($gateway->method=="RazorPay"): ?>

                                                                    <?php echo csrf_field(); ?>

                                                                    <div class="single_deposite_item">

                                                                        <div class="deposite_button text-center">
                                                                            <form
                                                                                action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?>"
                                                                                method="POST">
                                                                                <input type="hidden" name="method"
                                                                                       value="<?php echo e($gateway->method); ?>">
                                                                                <input type="hidden"
                                                                                       name="deposit_amount"
                                                                                       value="<?php echo e($amount); ?>">
                                                                                <input type="hidden" name="course_id"
                                                                                       value="<?php echo e($course->id); ?>">
                                                                                <button type="button"
                                                                                        class="">
                                                                                    <img class="submitBtn"
                                                                                         src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                         alt="">
                                                                                </button>
                                                                                <?php echo csrf_field(); ?>
                                                                                <script
                                                                                    src="https://checkout.razorpay.com/v1/checkout.js"
                                                                                    data-key="<?php echo e(getPaymentEnv('RAZOR_KEY')); ?>"
                                                                                    data-amount="<?php echo e(convertCurrency(Settings('currency_code') ??'BDT', 'INR', $amount)*100); ?>"
                                                                                    data-name="<?php echo e(Settings('site_title')); ?>"
                                                                                    data-description="Cart Payment"
                                                                                    data-image="<?php echo e(asset(Settings('favicon') )); ?>"
                                                                                    data-prefill.name="<?php echo e(@Auth::user()->username); ?>"
                                                                                    data-prefill.email="<?php echo e(@Auth::user()->email); ?>"
                                                                                    data-theme.color="#ff7529">
                                                                                </script>
                                                                            </form>
                                                                        </div>
                                                                    </div>

                                                                <?php elseif($gateway->method=="PayPal"): ?>

                                                                    <form
                                                                        action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?>"
                                                                        method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input type="hidden" name="deposit_amount"
                                                                               value="<?php echo e($amount); ?>">
                                                                        <input type="hidden" name="course_id"
                                                                               value="<?php echo e($course->id); ?>">
                                                                        <button type="submit" class="">
                                                                            <img class=""
                                                                                 src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                 alt="">
                                                                        </button>

                                                                    </form>
                                                                <?php elseif($gateway->method=="PayTM"): ?>
                                                                    <?php if ($__env->exists('paytm::paytm_btn',['type'=>'booking','amount'=> $amount])) echo $__env->make('paytm::paytm_btn',['type'=>'booking','amount'=> $amount], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    

                                                                    

                                                                <?php elseif($gateway->method=="PayStack"): ?>

                                                                    <form
                                                                        action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?>"
                                                                        method="post">
                                                                        <?php echo csrf_field(); ?>

                                                                        <input type="hidden" name="email"
                                                                               value="<?php echo e(@Auth::user()->email); ?>"> 
                                                                        <input type="hidden" name="orderID"
                                                                               value="<?php echo e(md5(uniqid(rand(), true))); ?>">
                                                                        <input type="hidden" name="amount"
                                                                               value="<?php echo e($amount*100); ?>">
                                                                        <input type="hidden" name="deposit_amount"
                                                                               value="<?php echo e($amount*100); ?>">

                                                                        <input type="hidden" name="currency"
                                                                               value="<?php echo e(Settings('currency_code')); ?>">
                                                                        <input type="hidden" name="metadata"
                                                                               value="<?php echo e(json_encode($array = ['type' => 'Deposit',])); ?>">
                                                                        <input type="hidden" name="reference"
                                                                               value="<?php echo e(Paystack::genTranxRef()); ?>"> 

                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input type="hidden" name="course_id"
                                                                               value="<?php echo e($course->id); ?>">

                                                                        <button type="submit" class="">
                                                                            <img
                                                                                src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                alt="">
                                                                        </button>

                                                                    </form>
                                                                <?php elseif($gateway->method=="Bkash"): ?>

                                                                    <form
                                                                        action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?>"
                                                                        method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(env('IS_BKASH_LOCALHOST')): ?>
                                                                            <script id="myScript"
                                                                                    src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script>
                                                                        <?php else: ?>
                                                                            <script id="myScript"
                                                                                    src="https://scripts.pay.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout.js"></script>
                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input type="hidden" name="deposit_amount"
                                                                               value="<?php echo e($amount); ?>">
                                                                        <input type="hidden" name="course_id"
                                                                               value="<?php echo e($course->id); ?>">
                                                                        <button type="button" class="" id="bKash_button"
                                                                                onclick="BkashPayment()">
                                                                            <img class=""
                                                                                 src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                 alt="">
                                                                        </button>
                                                                        <?php
                                                                            $type ='prebooking';
                                                                        ?>
                                                                        <?php echo $__env->make('bkash::bkash-script',compact('type','amount'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                                                    </form>
                                                                <?php elseif($gateway->method=="Bank Payment"): ?>
                                                                    <form class="w-100" action="" method="post">
                                                                        <?php echo csrf_field(); ?>

                                                                        <a href="#" data-bs-toggle="modal"
                                                                           data-bs-target="#bankModel"
                                                                           class="payment_btn_text2 w-100">
                                                                            <?php echo e($gateway->method); ?>

                                                                        </a>
                                                                    </form>
                                                                <?php elseif($gateway->method == 'Authorize.Net'): ?>
                                                                    <?php if ($__env->exists('authorizenet::upcoming_course',['gateway' => $gateway,'amount' => $amount,'course'=>$course])) echo $__env->make('authorizenet::upcoming_course',['gateway' => $gateway,'amount' => $amount,'course'=>$course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Braintree'): ?>
                                                                    <?php if ($__env->exists('braintree::upcoming_course',['gateawy' => $gateway,'amount' => $amount, 'course' => $course])) echo $__env->make('braintree::upcoming_course',['gateawy' => $gateway,'amount' => $amount, 'course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Mollie'): ?>
                                                                    <?php if ($__env->exists('mollie::upcoming_course',['gateawy' => $gateway,'amount' => $amount, 'course' => $course])) echo $__env->make('mollie::upcoming_course',['gateawy' => $gateway,'amount' => $amount, 'course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Flutterwave'): ?>
                                                                    <?php if ($__env->exists('flutterwave::upcoming_course',['gateawy' => $gateway,'amount' => $amount, 'course' => $course])) echo $__env->make('flutterwave::upcoming_course',['gateawy' => $gateway,'amount' => $amount, 'course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Coinbase'): ?>
                                                                    <?php if ($__env->exists('coinbase::upcoming_course',['gateawy' => $gateway,'amount' => $amount, 'course' => $course])) echo $__env->make('coinbase::upcoming_course',['gateawy' => $gateway,'amount' => $amount, 'course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Jazz Cash'): ?>
                                                                    <?php if ($__env->exists("jazzcash::upcoming_course",['gateawy' => $gateway,'amount' => $amount, 'course' => $course])) echo $__env->make("jazzcash::upcoming_course",['gateawy' => $gateway,'amount' => $amount, 'course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'CCAvenue'): ?>
                                                                    <?php if ($__env->exists("ccavenue::upcoming_course",['gateawy' => $gateway,'amount' => $amount, 'course' => $course])) echo $__env->make("ccavenue::upcoming_course",['gateawy' => $gateway,'amount' => $amount, 'course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                                                <?php elseif($gateway->method == 'Wallet'): ?>
                                                                    <form class="w-100"
                                                                          action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?>"
                                                                          method="post">

                                                                        <?php echo csrf_field(); ?>

                                                                        <a href="#" data-bs-toggle="modal"
                                                                           data-bs-target="#MakePaymentFromCredit"
                                                                           class="payment_btn_text2 w-100">Wallet</a>
                                                                    </form>

                                                                <?php else: ?>

                                                                    <form
                                                                        action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?>"
                                                                        method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input type="hidden" name="deposit_amount"
                                                                               value="<?php echo e($amount); ?>">
                                                                        <input type="hidden" name="course_id"
                                                                               value="<?php echo e($course->id); ?>">
                                                                        <button type="submit" class="">
                                                                            <img
                                                                                src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                alt="">
                                                                        </button>

                                                                    </form>

                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade " id="bankModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <form name="bank_payment" enctype="multipart/form-data"
                      action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?> "
                      class="single_account-form" method="POST">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-header ps-0">
                                    <h5 class="modal-title" id=""><?php echo e(__('payment.Bank Payment')); ?> </h5>
                                </div>
                                <input type="hidden" name="method" value="Bank Payment">
                                <div class="row mt-3">
                                    <div class="col-xl-6 col-md-6">
                                        <label for="name" class="mb-2"><?php echo app('translator')->get('setting.Bank Name'); ?>
                                            <span class="required_mark">*</span></label>
                                        <input type="text" required class="primary_input mb_20" placeholder="Bank Name"
                                               name="bank_name" value="<?php echo e(@old('bank_name')); ?>">
                                        <span class="invalid-feedback" role="alert" id="bank_name"></span>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <label for="name" class="mb-2"><?php echo app('translator')->get('setting.Branch Name'); ?>
                                            <span class="required_mark">*</span></label>
                                        <input type="text" required name="branch_name" class="primary_input mb_20"
                                               placeholder="Name of account owner" value="<?php echo e(@old('branch_name')); ?>">
                                        <span class="invalid-feedback" role="alert" id="owner_name"></span>
                                    </div>
                                </div>
                                <div class="row mb-20">
                                    <div class="col-xl-6 col-md-6">
                                        <label for="name" class="mb-2"><?php echo app('translator')->get('setting.Account Number'); ?>
                                            <span class="required_mark">*</span></label>
                                        <input type="text" required class="primary_input mb_20"
                                               placeholder="Account number" name="account_number"
                                               value="<?php echo e(@old('account_number')); ?>">
                                        <span class="invalid-feedback" role="alert" id="account_number"></span>
                                    </div>
                                    <div
                                        class="col-xl-6 col-md-6">
                                        <label for="name" class="mb-2"><?php echo app('translator')->get('setting.Account Holder'); ?>
                                            <span class="required_mark">*</span></label>
                                        <input type="text" required name="account_holder" class="primary_input mb_20"
                                               placeholder="Account Holder" value="<?php echo e(@old('account_holder')); ?>">
                                        <span class="invalid-feedback" role="alert" id="account_holder"></span>
                                    </div>
                                    <input type="hidden" name="deposit_amount" value="<?php echo e($amount); ?>">
                                    <input type="hidden" name="course_id"
                                           value="<?php echo e($course->id); ?>">
                                </div>
                                <div class="row mb-20">
                                    <div class="col-xl-6 col-md-12">
                                        <label for="name" class="mb-2"><?php echo app('translator')->get('setting.Account Type'); ?>
                                            <span class="required_mark">*</span></label>
                                        <select class="theme_select wide update-select-arrow" name="type" required
                                                id="type" style="margin-top: -10px;">
                                            <option
                                                data-display="<?php echo e(__('common.Select')); ?>  <?php echo e(__('setting.Account Type')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('setting.Account Type')); ?></option>
                                            <option
                                                value="Current Account" <?php echo e((env('ACCOUNT_TYPE')? env('ACCOUNT_TYPE') : '')=='Current Account'?'selected':''); ?>>
                                                <?php echo e(__('payment.Current Account')); ?>


                                            </option>
                                            <option
                                                value="Savings Account" <?php echo e((env('ACCOUNT_TYPE')? env('ACCOUNT_TYPE') : '')=='Savings Account'?'selected':''); ?>>
                                                <?php echo e(__('payment.Savings Account')); ?>

                                            </option>
                                            <option
                                                value="Salary Account" <?php echo e((env('ACCOUNT_TYPE')? env('ACCOUNT_TYPE') : '')=='Salary Account'?'selected':''); ?>>
                                                <?php echo e(__('payment.Salary Account')); ?>

                                            </option>
                                            <option
                                                value="Fixed Deposit" <?php echo e((env('ACCOUNT_TYPE')? env('ACCOUNT_TYPE') : '')=='Fixed Deposit'?'selected':''); ?>>
                                                <?php echo e(__('payment.Fixed Deposit')); ?>

                                            </option>

                                        </select>
                                    </div>
                                    <div
                                        class="col-xl-6 col-md-12">
                                        <label for="name" class="mb-2"><?php echo e(__("payment.Cheque Slip")); ?> <span
                                                class="required_mark">*</span></label>
                                        <input type="file" required name="image" class="primary_input mb_20">
                                        <span class="invalid-feedback" role="alert" id="amount_validation"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-header ps-0">
                                    <h5 class="modal-title"
                                        id="exampleModalLabel"><?php echo e(__('common.Bank Account Info')); ?></h5>
                                </div>
                                <fieldset class="mt-3">
                                    <table
                                        class="table table-bordered">

                                        <tr>
                                            <td><?php echo app('translator')->get('setting.Bank Name'); ?></td>
                                            <td><?php echo e(getPaymentEnv('BANK_NAME')); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo app('translator')->get('setting.Branch Name'); ?></td>
                                            <td><?php echo e(getPaymentEnv('BRANCH_NAME')); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo app('translator')->get('setting.Account Type'); ?></td>
                                            <td><?php echo e(getPaymentEnv('ACCOUNT_TYPE')); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo app('translator')->get('setting.Account Number'); ?></td>
                                            <td><?php echo e(getPaymentEnv('ACCOUNT_NUMBER')); ?></td>
                                        </tr>

                                        <tr>
                                            <td><?php echo app('translator')->get('setting.Account Holder'); ?></td>
                                            <td><?php echo e(getPaymentEnv('ACCOUNT_HOLDER')); ?></td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class=" theme_line_btn  btn-sm  small_btn2 "
                                data-bs-dismiss="modal"><?php echo app('translator')->get('common.Cancel'); ?></button>
                        <button class="  theme_btn  btn-sm  small_btn2" type="submit"><?php echo app('translator')->get('payment.Payment'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade " id="MakePaymentFromCredit"
         tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal_400px" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php echo e(__('student.My Account')); ?></h5>
                </div>
                <form action="<?php echo e(route('upcoming_courses.prebooking.submit')); ?>"
                      id="infix_payment_form1" method="POST"
                      name="payment_main_balance">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="payment_method"
                           value="<?php echo e($gateway->method); ?>">
                    <input name="method" value="Wallet"
                           id="balanceInput"
                           style="display: <?php echo e(Auth::user()->balance >=$amount ? '' : 'none'); ?>"
                           class="method" type="hidden">
                    <input type="hidden"
                           name="deposit_amount"
                           value="<?php echo e($amount); ?>">
                    <input type="hidden" name="course_id"
                           value="<?php echo e($course->id); ?>">


                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <label for="name"
                                       class="mb-2"><?php echo e(__('frontend.Balance')); ?></label>
                                <input type="text"
                                       class="primary_input3"
                                       value="<?php if(Auth::user()->balance == 0): ?> <?php echo e(Settings('currency_symbol') ?? '৳'); ?>0 <?php else: ?><?php echo e(getPriceFormat(Auth::user()->balance)); ?> <?php endif; ?>"
                                       readonly>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <label for="name"
                                       class="mb-2"><?php echo app('translator')->get('common.Purchase Price'); ?></label>
                                <input type="text" name="amount"
                                       class="primary_input3"
                                       value="<?php echo e(getPriceFormat($amount)); ?>"
                                       readonly>
                            </div>
                        </div>


                    </div>
                    <div
                        class="modal-footer  d-flex justify-content-between">
                        <button type="button"
                                class="theme_line_btn  btn-sm  small_btn2"
                                data-bs-dismiss="modal"><?php echo app('translator')->get('common.Cancel'); ?></button>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->balance >= $amount): ?>
                            <button class="theme_btn  btn-sm  small_btn2"
                                    type="submit">
                                <?php echo app('translator')->get('common.Pay'); ?>
                            </button>
                        <?php else: ?>
                            <a class="theme_line_btn  btn-sm  small_btn2"
                               href="<?php echo e(route('deposit')); ?>"><?php echo e(__('common.Deposit')); ?></a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>


                </form>
            </div>
        </div>
    </div>


    <style>
        .modal-dialog {
            max-width: 1000px;
        }
    </style>

</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\pre-booking-page-section.blade.php ENDPATH**/ ?>