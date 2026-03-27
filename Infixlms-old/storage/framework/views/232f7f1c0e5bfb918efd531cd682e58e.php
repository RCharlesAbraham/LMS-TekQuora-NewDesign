<?php
    $user = Auth::user();
?>
<div>
    <div class="checkout_wrapper payment_area" id="mainFormData">

        <div class="billing_details_wrapper">

            <div class="select_payment_method">
                <div class="input_box_tittle">
                    <h4><?php echo app('translator')->get('frontendmanage.Payment Method'); ?></h4>
                </div>

                <div class="privaci_polecy_area section-padding checkout_area ">
                    <div class="">
                        <div class="row">
                            <div class="col-12">
                                <div class="payment_method_wrapper">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($methods)): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                if (!paymentGateWayCredentialsEmptyCheck($gateway->method)){
                                                continue;
                                                }
                                            ?>
                                            <div class="payment_method_single">
                                                <div
                                                    class="deposite_payment_wrapper customer_payment_wrapper">
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($gateway->method=="Stripe"): ?>
                                                        <form
                                                            action="<?php echo e(route('membership.membershipRenewPaymentSubmit')); ?>"
                                                            method="post">

                                                            <input type="hidden"
                                                                   name="id"
                                                                   value="">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden"
                                                                   name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">
                                                            <!-- single_deposite_item  -->
                                                            <button type="submit"
                                                                    class="Payment_btn">
                                                                <img class=" w-100 "
                                                                     style="padding: 12px; margin-top: -9px;"
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

                                                            <input
                                                                value="<?php echo e(convertCurrency(Settings('currency_code') ??'BDT', 'USD', $membershipPlan->price)); ?>"
                                                                readonly="readonly"
                                                                type="hidden"
                                                                id="amount"
                                                                name="amount">


                                                        </form>
                                                    <?php elseif($gateway->method=="MercadoPago"): ?>

                                                        <div class="">

                                                            <a href="#" data-bs-toggle="modal"
                                                               data-bs-target="#MakePaymentFromCreditMercadoPago"
                                                               class=" Payment_btn">
                                                                <img class=" w-100" style="    padding: 0;
                                                                    margin-top: -2px;"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>"
                                                                     alt="">
                                                            </a>
                                                        </div>


                                                        <div class="modal fade " id="MakePaymentFromCreditMercadoPago"
                                                             tabindex="-1"
                                                             role="dialog" aria-labelledby="exampleModalLabel"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="">MercadoPago</h5>
                                                                    </div>


                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <?php
                                                                                $total_amount =$membershipPlan->price;
                                                                                $route =route('membership.membershipRenewPaymentSubmit');
                                                                                 $payment_type ='Subscription'
                                                                            ?>
                                                                            <div class="col-md-12">
                                                                                <?php echo $__env->make('mercadopago::partials._checkout',compact('total_amount','route','payment_type'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    <?php elseif($gateway->method=="Wallet"): ?>

                                                        <form
                                                            action="<?php echo e(route('membership.membershipRenewPaymentSubmit')); ?>"
                                                            method="post">

                                                            <?php echo csrf_field(); ?>

                                                            <div class="bank_check">

                                                                <a href="#"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#MakePaymentFromCredit"
                                                                   class=" payment_btn_text">Wallet</a>

                                                            </div>
                                                        </form>

                                                        <div class="modal fade "
                                                             id="MakePaymentFromCredit"
                                                             tabindex="-1"
                                                             role="dialog"
                                                             aria-labelledby="exampleModalLabel"
                                                             aria-hidden="true">
                                                            <div
                                                                class="modal-dialog modal-lg"
                                                                role="document">
                                                                <div
                                                                    class="modal-content">
                                                                    <div
                                                                        class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">
                                                                            Subscription
                                                                            submit</h5>
                                                                    </div>
                                                                    <form
                                                                        action="<?php echo e(route('membership.membershipRenewPaymentSubmit')); ?>"
                                                                        id="infix_payment_form1"
                                                                        method="POST"
                                                                        name="payment_main_balance">
                                                                        <?php echo csrf_field(); ?>

                                                                        <input
                                                                            type="hidden"
                                                                            name="payment_method"
                                                                            value="<?php echo e($gateway->method); ?>">
                                                                        <input
                                                                            name="payment_method"
                                                                            value="Wallet"
                                                                            id="balanceInput"
                                                                            style="display: <?php echo e($user->balance >=$membershipPlan->price?'':'none'); ?>"
                                                                            class="method"
                                                                            type="hidden">


                                                                        <div
                                                                            class="modal-body">
                                                                            <div
                                                                                class="row">
                                                                                <div
                                                                                    class="col-xl-6 col-md-6">
                                                                                    <label
                                                                                        for="name"
                                                                                        class="mb-2"><?php echo e(__('frontend.Balance')); ?></label>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="primary_input3"
                                                                                        value="<?php if($user->balance==0): ?>
                                                                                        <?php echo e(Settings('currency_symbol') ??'৳'); ?> 0  <?php else: ?>   <?php echo e(getPriceFormat($user->balance)); ?>

                                                                                        <?php endif; ?>"
                                                                                        readonly>
                                                                                </div>
                                                                                <div
                                                                                    class="col-xl-6 col-md-6">
                                                                                    <label
                                                                                        for="name"
                                                                                        class="mb-2"><?php echo app('translator')->get('subscription.Subscription Price'); ?></label>
                                                                                    <input
                                                                                        type="text"
                                                                                        name="amount"
                                                                                        class="primary_input3"
                                                                                        value="<?php echo e(getPriceFormat($membershipPlan->price)); ?>"

                                                                                        readonly>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                        <div
                                                                            class="modal-footer payment_btn d-flex justify-content-between">
                                                                            <button
                                                                                type="button"
                                                                                class="theme_line_btn"
                                                                                data-bs-dismiss="modal"><?php echo app('translator')->get('common.Cancel'); ?></button>

                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($user->balance >= $membershipPlan->price): ?>
                                                                                <button
                                                                                    class=" theme_btn"
                                                                                    type="submit">
                                                                                    <?php echo app('translator')->get('common.Pay'); ?>
                                                                                </button>
                                                                            <?php else: ?>
                                                                                <a class="theme_btn"
                                                                                   href="<?php echo e(route('deposit')); ?>"><?php echo e(__('common.Deposit')); ?></a>
                                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php elseif($gateway->method=="RazorPay"): ?>

                                                        <?php echo csrf_field(); ?>

                                                        <div
                                                            class="single_deposite_item">

                                                            <div
                                                                class="deposite_button text-center">
                                                                <form
                                                                    action="<?php echo e(route('membership.membershipRenewPaymentSubmit')); ?>"
                                                                    method="POST">
                                                                    <input type="hidden"
                                                                           name="payment_method"
                                                                           value="<?php echo e($gateway->method); ?>">
                                                                    <button
                                                                        type="submit"
                                                                        class="Payment_btn">
                                                                        <img
                                                                            class=" w-100"
                                                                            style="padding: 0; margin-top: -2px;"
                                                                            src="<?php echo e(asset($gateway->logo)); ?>"
                                                                            alt="">
                                                                    </button>

                                                                    <?php echo csrf_field(); ?>
                                                                    <script
                                                                        src="https://checkout.razorpay.com/v1/checkout.js"
                                                                        data-key="<?php echo e(getPaymentEnv('RAZOR_KEY')); ?>"
                                                                        data-amount="<?php echo e(convertCurrency(Settings('currency_code') ??'BDT', 'INR', $membershipPlan->price)*100); ?>"
                                                                        data-name="<?php echo e(Settings('site_title')); ?>"
                                                                        data-description="Cart Payment"
                                                                        data-image="<?php echo e(asset(Settings('favicon') )); ?>"
                                                                        data-prefill.name="<?php echo e(@$user->username); ?>"
                                                                        data-prefill.email="<?php echo e(@$user->email); ?>"
                                                                        data-theme.color="#ff7529">
                                                                    </script>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    <?php elseif($gateway->method=="PayPal"): ?>

                                                        <form
                                                            action="<?php echo e(route('membership.membershipRenewPaymentSubmit')); ?>"
                                                            method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden"
                                                                   name="id"
                                                                   value="<?php echo e($membershipPlan->id); ?>">

                                                            <input type="hidden"
                                                                   name="id"
                                                                   value="<?php echo e($membershipPlan->id); ?>">

                                                            <input type="hidden"
                                                                   name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">

                                                            <button type="submit"
                                                                    class="Payment_btn">
                                                                <img class=" w-100"
                                                                     style="    padding: 0; margin-top: -2px;"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>"
                                                                     alt="">
                                                            </button>

                                                        </form>
                                                    <?php elseif($gateway->method=="PayTM"): ?>

                                                        <form
                                                            action="<?php echo e(route('membership.membershipRenewPaymentSubmit')); ?>"
                                                            method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden"
                                                                   name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">

                                                            <button type="submit"
                                                                    class="Payment_btn">
                                                                <img class=" w-100"
                                                                     style="padding: 10px; margin-top: -6px;"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>"
                                                                     alt="">
                                                            </button>

                                                        </form>
                                                    <?php elseif($gateway->method=="PayStack"): ?>

                                                        <form
                                                            action="<?php echo e(route('membership.membershipRenewPaymentSubmit')); ?>"
                                                            method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden"
                                                                   name="email"
                                                                   value="<?php echo e(@$user->email); ?>"> 

                                                            <input type="hidden"
                                                                   name="amount"
                                                                   value="<?php echo e(convertCurrency(Settings('currency_code') ??'BDT', Settings('currency_code'), 999)*100); ?>"> 

                                                            <input type="hidden" name="currency"
                                                                   value="<?php echo e(Settings('currency_code')); ?>">

                                                            <input type="hidden"
                                                                   name="metadata"
                                                                   value="<?php echo e(json_encode($array = ['type' => 'Subscription',])); ?>">
                                                            <input type="hidden"
                                                                   name="reference"
                                                                   value="<?php echo e(Paystack::genTranxRef()); ?>"> 

                                                            <input type="hidden"
                                                                   name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">

                                                            <button type="submit"
                                                                    class="Payment_btn">
                                                                <img class=" w-100"
                                                                     style="    padding: 10px; margin-top: -6px;"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>"
                                                                     alt="">
                                                            </button>

                                                        </form>

                                                    <?php else: ?>

                                                        <form
                                                            action="<?php echo e(route('membership.membershipRenewPaymentSubmit')); ?>"
                                                            method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden"
                                                                   name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">

                                                            <button type="submit"
                                                                    class="Payment_btn">
                                                                <img class=" w-100"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>"
                                                                     alt="">
                                                            </button>

                                                        </form>

                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="order_wrapper">
            <h3 class="font_22 f_w_700 mb_30"><?php echo e(__('frontend.Renew Your Membership Plan')); ?></h3>
            <div class="ordered_products">

                <div class="single_ordered_product">
                    <div class="product_name d-flex align-items-center">

                        <span><?php echo e(__('frontend.Plan Title')); ?></span>
                    </div>
                    <span class="order_prise f_w_500 font_16">
                           <?php echo e(@$membershipPlan->title); ?>

                            </span>
                </div>

                <div class="single_ordered_product">
                    <div class="product_name d-flex align-items-center">
                        <span><?php echo e(__('frontend.Plan Validity')); ?></span>
                    </div>
                    <span class="order_prise f_w_500 font_16">
                           <?php echo e(@$membershipPlan->expire); ?> [<?php echo e(@$membershipPlan->expire_type); ?>]
                            </span>
                </div>

            </div>
            <div class="ordered_products_lists">


                <div class="single_lists">
                    <span class="total_text"><?php echo e(__('frontend.Payable Amount')); ?> </span>
                    <span class="totalBalance"> <?php echo e(getPriceFormat($membershipPlan->price)); ?></span>

                </div>

            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\membership-renew-page-section.blade.php ENDPATH**/ ?>