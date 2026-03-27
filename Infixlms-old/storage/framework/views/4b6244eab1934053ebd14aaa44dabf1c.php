<div>
    <div class="checkout_wrapper payment_area" id="mainFormData">

        <div class="billing_details_wrapper">
            <div class="biling_address gray-bg">
                <div class="biling-header d-flex justify-content-between align-items-center">
                    <h4><?php echo e(__('frontendmanage.Billing Address')); ?></h4>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Invoice') && ($type == 'invoice' || $type == 'certificate' )): ?>
                        <a class="billingUpdate"><?php echo e(__('common.Edit')); ?></a>
                        <a class="billingUpdateShow d-none"><?php echo e(__('common.Show')); ?></a>
                    <?php else: ?>
                        <a href="<?php echo e(route('CheckOut')); ?>?type=edit"><?php echo e(__('common.Edit')); ?></a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <div class="biling_body_content" id="deafult">
                    <p><?php echo e(@$checkout->billing->first_name); ?> <?php echo e(@$checkout->billing->last_name); ?></p>
                    <p><?php echo e(@$checkout->billing->address); ?></p>
                    <p><?php echo e(@$checkout->billing->stateDetails->name); ?>,<?php echo e(@$checkout->billing->cityDetails->name); ?> -
                        <?php echo e(@$checkout->billing->zip_code); ?> </p>
                    <p> <?php echo e(@$checkout->billing->countryDetails->name); ?> </p>
                </div>

            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Invoice')): ?>
                <?php if ($__env->exists('invoice::billing')) echo $__env->make('invoice::billing', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
                                        <?php
                                            $withMoule = $methods;

                                            $methods = $methods->where('method', '!=', 'Bank Payment')->where('method', '!=', 'Offline Payment');
                                            $payment_type = isModuleActive('Invoice') && $checkout->invoice ? $checkout->invoice->payment_type : null;
                                            if (isModuleActive('Invoice') && $payment_type == 2) {
                                                $methods = $withMoule->where('method', 'Bank Payment');
                                            }

                                        ?>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $methods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                if (!paymentGateWayCredentialsEmptyCheck($gateway->method)) {
                                                    continue;
                                                }
                                            ?>
                                            <div class="payment_method_single">
                                                <div class="deposite_payment_wrapper customer_payment_wrapper">
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($gateway->method == 'Stripe'): ?>
                                                        <form action="<?php echo e(route('paymentSubmit')); ?>" method="post">

                                                            <input type="hidden" name="tracking_id"
                                                                   value="<?php echo e($checkout->tracking); ?>">
                                                            <input type="hidden" name="id"
                                                                   value="<?php echo e($checkout->id); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">
                                                            <!-- single_deposite_item  -->
                                                            <button type="submit" class="Payment_btn">
                                                                <img class=" w-100 "
                                                                     style="padding: 12px; margin-top: -9px;"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>" alt="">
                                                            </button>
                                                            <?php echo csrf_field(); ?>
                                                            <script src="https://checkout.stripe.com/checkout.js"
                                                                    class="stripe-button"
                                                                    data-key="<?php echo e(getPaymentEnv('STRIPE_KEY')); ?>"
                                                                    data-name="Stripe Payment"
                                                                    data-image="<?php echo e(asset(Settings('favicon'))); ?>"
                                                                    data-locale="auto" data-currency="usd"></script>

                                                            <input hidden
                                                                   value="<?php echo e(convertCurrency(Settings('currency_code') ?? 'BDT', 'USD', $checkout->purchase_price)); ?>"
                                                                   readonly="readonly" type="text" id="amount"
                                                                   name="amount">


                                                        </form>
                                                    <?php elseif($gateway->method == 'Wallet'): ?>
                                                        <form action="<?php echo e(route('paymentSubmit')); ?>" method="post">

                                                            <?php echo csrf_field(); ?>

                                                            <div class="bank_check">

                                                                <a href="#" data-bs-toggle="modal"
                                                                   data-bs-target="#MakePaymentFromCredit"
                                                                   class=" payment_btn_text"><?php echo e(__('payment.Wallet')); ?></a>

                                                            </div>
                                                        </form>

                                                        <div class="modal fade " id="MakePaymentFromCredit"
                                                             tabindex="-1" role="dialog"
                                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            <?php echo e(__('student.My Account')); ?></h5>
                                                                    </div>
                                                                    <form action="<?php echo e(route('paymentSubmit')); ?>"
                                                                          id="infix_payment_form1" method="POST"
                                                                          name="payment_main_balance">
                                                                        <?php echo csrf_field(); ?>

                                                                        <input type="hidden" name="payment_method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input name="payment_method" value="Wallet"
                                                                               id="balanceInput"
                                                                               style="display: <?php echo e(Auth::user()->balance >= $checkout->purchase_price ? '' : 'none'); ?>"
                                                                               class="method" type="hidden">
                                                                        <input type="hidden" name="tracking_id"
                                                                               value="<?php echo e($checkout->tracking); ?>">
                                                                        <input type="hidden" name="id"
                                                                               value="<?php echo e($checkout->id); ?>">


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
                                                                                           value="<?php echo e(getPriceFormat($checkout->purchase_price)); ?>"
                                                                                           readonly>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                        <div
                                                                            class="modal-footer payment_btn d-flex justify-content-between">
                                                                            <button type="button"
                                                                                    class="theme_line_btn"
                                                                                    data-bs-dismiss="modal"><?php echo app('translator')->get('common.Cancel'); ?></button>

                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->balance >= $checkout->purchase_price): ?>
                                                                                <button class=" theme_btn"
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
                                                    <?php elseif($gateway->method == 'MercadoPago'): ?>
                                                        <div class="">

                                                            <a href="#" data-bs-toggle="modal"
                                                               data-bs-target="#MakePaymentFromCreditMercadoPago"
                                                               class=" Payment_btn">
                                                                <img class=" w-100"
                                                                     style="    padding: 0;
                                                                        margin-top: -2px;"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>" alt="">
                                                            </a>
                                                        </div>


                                                        <div class="modal fade " id="MakePaymentFromCreditMercadoPago"
                                                             tabindex="-1" role="dialog"
                                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="">
                                                                            MercadoPago</h5>
                                                                    </div>


                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <?php
                                                                                $total_amount = $checkout->purchase_price;
                                                                                $route = route('paymentSubmit');
                                                                            ?>
                                                                            <div class="col-md-12">
                                                                                <?php echo $__env->make('mercadopago::partials._checkout',
                                                                                    compact(
                                                                                        'total_amount',
                                                                                        'checkout'
                                                                                    ), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php elseif($gateway->method == 'RazorPay'): ?>
                                                        <?php echo csrf_field(); ?>

                                                        <div class="single_deposite_item">

                                                            <div class="deposite_button text-center">
                                                                <form action="<?php echo e(route('paymentSubmit')); ?>"
                                                                      method="POST">
                                                                    <input type="hidden" name="payment_method"
                                                                           value="<?php echo e($gateway->method); ?>">
                                                                    <button type="submit" class="Payment_btn">
                                                                        <img class=" w-100"
                                                                             style="padding: 0; margin-top: -2px;"
                                                                             src="<?php echo e(asset($gateway->logo)); ?>"
                                                                             alt="">
                                                                    </button>
                                                                    <input type="hidden" name="tracking_id"
                                                                           value="<?php echo e($checkout->tracking); ?>">
                                                                    <input type="hidden" name="id"
                                                                           value="<?php echo e($checkout->id); ?>">
                                                                    <?php echo csrf_field(); ?>
                                                                    <script
                                                                        src="https://checkout.razorpay.com/v1/checkout.js"
                                                                        data-key="<?php echo e(getPaymentEnv('RAZOR_KEY')); ?>"
                                                                        data-amount="<?php echo e(convertCurrency(Settings('currency_code') ?? 'BDT', 'INR', $checkout->purchase_price) * 100); ?>"
                                                                        data-name="<?php echo e(str_replace('_', ' ', Settings('site_title'))); ?>"
                                                                        data-description="Cart Payment"
                                                                        data-image="<?php echo e(asset(Settings('favicon'))); ?>"
                                                                        data-prefill.name="<?php echo e(@Auth::user()->username); ?>"
                                                                        data-prefill.email="<?php echo e(@Auth::user()->email); ?>"
                                                                        data-theme.color="#ff7529"></script>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    <?php elseif($gateway->method == 'PayPal'): ?>
                                                        <form action="<?php echo e(route('paymentSubmit')); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">
                                                            <input type="hidden" name="tracking_id"
                                                                   value="<?php echo e($checkout->tracking); ?>">
                                                            <input type="hidden" name="id"
                                                                   value="<?php echo e($checkout->id); ?>">
                                                            <button type="submit" class="Payment_btn">
                                                                <img class=" w-100"
                                                                     style="    padding: 0;
                                                                        margin-top: -2px;"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>" alt="">
                                                            </button>

                                                        </form>
                                                    <?php elseif($gateway->method == 'PayTM'): ?>

                                                        <?php if ($__env->exists('paytm::paytm_btn',['type'=>'payment','amount'=>$checkout->purchase_price])) echo $__env->make('paytm::paytm_btn',['type'=>'payment','amount'=>$checkout->purchase_price], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                    <?php elseif($gateway->method == 'PayStack'): ?>
                                                        <form action="<?php echo e(route('paymentSubmit')); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="email"
                                                                   value="<?php echo e(@Auth::user()->email); ?>">
                                                            
                                                            <input type="hidden" name="orderID"
                                                                   value="<?php echo e($checkout->tracking); ?>">
                                                            <input type="hidden" name="amount"
                                                                   value="<?php echo e($checkout->purchase_price * 100); ?>">
                                                            

                                                            <input type="hidden" name="currency"
                                                                   value="<?php echo e(Settings('currency_code')); ?>">
                                                            <input type="hidden" name="metadata"
                                                                   value="<?php echo e(json_encode($array = ['type' => 'Payment'])); ?>">
                                                            <input type="hidden" name="reference"
                                                                   value="<?php echo e(Paystack::genTranxRef()); ?>">
                                                            

                                                            <input type="hidden" name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">
                                                            <input type="hidden" name="tracking_id"
                                                                   value="<?php echo e($checkout->tracking); ?>">
                                                            <input type="hidden" name="id"
                                                                   value="<?php echo e($checkout->id); ?>">
                                                            <button type="submit" class="Payment_btn">
                                                                <img class=" w-100"
                                                                     style=" padding: 10px; margin-top: -6px;"
                                                                     src="<?php echo e(asset($gateway->logo)); ?>" alt="">
                                                            </button>

                                                        </form>
                                                    <?php elseif($gateway->method == 'Bkash'): ?>
                                                        <form action="<?php echo e(route('paymentSubmit')); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(env('IS_BKASH_LOCALHOST')): ?>
                                                                <script id="myScript"
                                                                        src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js">
                                                                </script>
                                                            <?php else: ?>
                                                                <script id="myScript"
                                                                        src="https://scripts.pay.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout.js"></script>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                            <input type="hidden" name="method"
                                                                   value="<?php echo e($gateway->method); ?>">
                                                            <input type="hidden" name="deposit_amount"
                                                                   value="<?php echo e($checkout->purchase_price); ?>">
                                                            <button type="button" class="Payment_btn"
                                                                    id="bKash_button" onclick="BkashPayment()">
                                                                <img class="" src="<?php echo e(asset($gateway->logo)); ?>"
                                                                     alt="">
                                                            </button>
                                                            <?php
                                                                $type = 'Payment';
                                                                $amount = $checkout->purchase_price;
                                                            ?>
                                                            <?php echo $__env->make('bkash::bkash-script',
                                                                compact('type', 'amount'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                                        </form>
                                                    <?php elseif($gateway->method == 'Authorize.Net'): ?>
                                                        <?php if ($__env->exists('authorizenet::pay_form',['gateway' => $gateway, 'checkout' => $checkout])) echo $__env->make('authorizenet::pay_form',['gateway' => $gateway, 'checkout' => $checkout], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                    <?php elseif($gateway->method == 'Braintree'): ?>
                                                        <?php if ($__env->exists('braintree::course_pay',['gateway' => $gateway, 'checkout' => $checkout])) echo $__env->make('braintree::course_pay',['gateway' => $gateway, 'checkout' => $checkout], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                    <?php elseif($gateway->method == 'Flutterwave'): ?>
                                                        <?php if ($__env->exists('flutterwave::course_pay',['gateway' => $gateway, 'checkout' => $checkout])) echo $__env->make('flutterwave::course_pay',['gateway' => $gateway, 'checkout' => $checkout], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                    <?php elseif($gateway->method == 'Mollie'): ?>
                                                        <?php if ($__env->exists('mollie::course_pay',['gateway' => $gateway, 'checkout' => $checkout])) echo $__env->make('mollie::course_pay',['gateway' => $gateway, 'checkout' => $checkout], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                    <?php elseif($gateway->method == 'Jazz Cash'): ?>
                                                        <?php if ($__env->exists('jazzcash::purchase',['gateway' => $gateway, 'checkout' => $checkout])) echo $__env->make('jazzcash::purchase',['gateway' => $gateway, 'checkout' => $checkout], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                    <?php elseif($gateway->method == 'Coinbase'): ?>
                                                        <?php echo $__env->make("coinbase::purchase",['gateway' => $gateway, 'checkout' => $checkout], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                    <?php elseif($gateway->method == 'AmazonPayment'): ?>
                                                        <?php echo $__env->make("amazonpayment::_payment",['gateway' => $gateway, 'location' => 'checkout', 'checkout' => $checkout], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                                    <?php elseif($gateway->method == 'Bank Payment' && isModuleActive('Invoice')): ?>
                                                        <form class="w-100" action="" method="post">
                                                            <?php echo csrf_field(); ?>

                                                            <a href="#" data-bs-toggle="modal"
                                                               data-bs-target="#bankModel"
                                                               class="payment_btn_text2 w-100 text-nowrap">
                                                                <?php echo e($gateway->method); ?>

                                                            </a>
                                                        </form>
                                                    <?php else: ?>
                                                        <form action="<?php echo e(route('paymentSubmit')); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">
                                                            <input type="hidden" name="tracking_id"
                                                                   value="<?php echo e($checkout->tracking); ?>">
                                                            <input type="hidden" name="id"
                                                                   value="<?php echo e($checkout->id); ?>">
                                                            <button type="submit" class="Payment_btn">
                                                                <img class=" w-100" src="<?php echo e(asset($gateway->logo)); ?>"
                                                                     alt="">
                                                            </button>

                                                        </form>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store') && $all_physical && Settings('cash_on_delivery')==1): ?>
                                            <div class="payment_method_single">
                                                <div class="deposite_payment_wrapper customer_payment_wrapper">
                                                    <form action="<?php echo e(route('paymentSubmit')); ?>" method="post">

                                                        <?php echo csrf_field(); ?>
                                                        <div class="bank_check">

                                                            <a href="#" data-bs-toggle="modal"
                                                               data-bs-target="#MakePaymentFromCOD"
                                                               class=" payment_btn_text  ">
                                                                <?php echo e(__('product.COD')); ?>

                                                            </a>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal fade " id="MakePaymentFromCOD"
                                                 tabindex="-1" role="dialog"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                <?php echo e(__('product.Cash on Delivery')); ?></h5>
                                                        </div>
                                                        <form action="<?php echo e(route('paymentSubmit')); ?>"
                                                              id="infix_payment_form1" method="POST"
                                                              name="payment_main_balance">
                                                            <?php echo csrf_field(); ?>

                                                            <input type="hidden" name="payment_method"
                                                                   value="<?php echo e($gateway->method); ?>">
                                                            <input name="payment_method" value="COD"
                                                                   id="balanceInput"
                                                                   style="display: <?php echo e(Auth::user()->balance >= $checkout->purchase_price ? '' : 'none'); ?>"
                                                                   class="method" type="hidden">
                                                            <input type="hidden" name="tracking_id"
                                                                   value="<?php echo e($checkout->tracking); ?>">
                                                            <input type="hidden" name="id"
                                                                   value="<?php echo e($checkout->id); ?>">


                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12 col-md-12">
                                                                        <p><?php echo e(__('product.Do you want to pay in cash on delivery?')); ?></p>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                            <div
                                                                class="modal-footer payment_btn d-flex justify-content-between">
                                                                <button type="button"
                                                                        class="theme_line_btn"
                                                                        data-bs-dismiss="modal"><?php echo app('translator')->get('common.Cancel'); ?></button>


                                                                <button class=" theme_btn"
                                                                        type="submit">
                                                                    <?php echo app('translator')->get('common.Submit'); ?>
                                                                </button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="order_wrapper">
            <h3 class="font_22 f_w_700 mb_30"><?php echo e(__('frontend.Your order')); ?></h3>
            <div class="ordered_products">
                <?php $totalSum=0; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($carts)): ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            if ($cart->course_id !=0){
                                if (isModuleActive('Installment') && $cart->is_installment == 1) {
                                    $price=installmentProductPrice($cart->course_id, $cart->plan_id,$cart->course->discount_price?$cart->course->discount_price:$cart->course->price);
                                }elseif (isModuleActive('EarlyBird') && $cart->is_earlybird_offer == 1) {
                                    $price=verifyEarlybirdOffer($cart->course,null)['price'];
                                }else {

                                   if (isModuleActive('Store') && $cart->is_store == 1) {
                                        $price = $cart->price * $cart->qty;
                                    } else {
                                        if ($cart->course->discount_price != null) {
                                            $price = $cart->course->discount_price;
                                        } else {
                                            $price = $cart->course?->price;
                                        }
                                    }
                                }
                            }else{
                                    $price = $cart->bundle?->price;
                            }

                                  $totalSum =  $totalSum + @$price;

                        ?>

                        <div class="single_ordered_product">
                            <div class="product_name d-flex align-items-center">
                                <div class="thumb">
                                    <img src="<?php echo e(getCourseImage(@$cart->course->thumbnail)); ?>" alt="">
                                </div>
                                <span><?php echo e(@$cart->course->title); ?> <?php echo e($type == 'certificate' ? '['.__('certificate.Certificate').']' :''); ?></span>
                            </div>
                            <span class="order_prise f_w_500 font_16">
                              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store') && $cart->is_store == 1): ?>
                                    <?php echo e($cart->qty . ' x ' . getPriceFormat($cart->price) . ' = ' . getPriceFormat($price)); ?>

                                <?php else: ?>
                                    <?php echo e(getPriceFormat($price)); ?>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <div class="ordered_products_lists">

                <div class="single_lists">
                    <span class=" total_text"><?php echo e(__('frontend.Subtotal')); ?></span>
                    <span><?php echo e(getPriceFormat($checkout->price)); ?></span>
                </div>
                <?php
                    $is_physical = Session::get('is_physical');
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store') && $is_physical > 0): ?>
                    <div class="single_lists">
                        <span class=" total_text">
                            <?php echo e(__('product.Shipping Charge')); ?>

                        </span>
                        <span><?php echo e(getPriceFormat($checkout->shipping->cost)); ?></span>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($checkout->purchase_price > 0): ?>
                    <div class="single_lists">

                        <span class="total_text"><?php echo e(__('payment.Discount Amount')); ?></span>
                        <span><?php echo e(( $checkout->discount == '' ||  $checkout->discount == 0) ? 0 : getPriceFormat($checkout->discount)); ?></span>
                    </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(hasTax()): ?>
                        <div class="single_lists">
                            <span class="total_text"><?php echo e(__('tax.TAX')); ?> </span>

                            <span class="totalTax"><?php echo e(getPriceFormat($checkout->tax)); ?></span>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('UpcomingCourse') && $checkout->pre_booking_amount > 0): ?>
                        <div class="single_lists">
                                 <span class=" total_text">
                                    <?php echo e(__('frontend.Pre Booking Amount')); ?>

                                </span>
                            <span><?php echo e(getPriceFormat($checkout->pre_booking_amount)); ?></span>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('UserGroup') && $checkout->group_discount > 0): ?>
                        <div class="single_lists">
                                 <span class=" total_text">
                                    <?php echo e(__('group.group_discount')); ?>

                                </span>
                            <span><?php echo e(getPriceFormat($checkout->group_discount)); ?></span>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <div class="single_lists">
                        <span class="total_text"><?php echo e(__('frontend.Payable Amount')); ?> </span>
                        <span class="totalBalance"><?php echo e(getPriceFormat($checkout->purchase_price)); ?></span>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

        </div>
    </div>
</div>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Invoice') && $payment_type == 2): ?>
    <div class="modal fade " id="bankModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('invoice.Bank Payment')); ?> </h5>
                </div>
                <form name="bank_payment" enctype="multipart/form-data"
                      action="<?php echo e(route('invoice.offline-payment.store')); ?> "
                      class="single_account-form" method="POST">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="method" value="Bank Payment">
                        <input type="hidden" name="tracking" value="<?php echo e($checkout->tracking); ?>">
                        <div class="row">
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
                            <div class="col-xl-6 col-md-6">
                                <label for="name" class="mb-2"><?php echo app('translator')->get('setting.Account Holder'); ?>
                                    <span class="required_mark">*</span></label>
                                <input type="text" required name="account_holder" class="primary_input mb_20"
                                       placeholder="Account Holder" value="<?php echo e(@old('account_holder')); ?>">
                                <span class="invalid-feedback" role="alert" id="account_holder"></span>
                            </div>
                            <input type="hidden" name="deposit_amount" value="<?php echo e($checkout->price); ?>">


                        </div>

                        <div class="row  mb-20">


                            <div class="col-xl-6 col-md-12">
                                <label for="name" class="mb-2"><?php echo app('translator')->get('setting.Account Type'); ?>
                                    <span class="required_mark">*</span></label>
                                <select class="theme_select wide update-select-arrow" name="type" required
                                        id="type" style="margin-top: -10px;">
                                    <option
                                        data-display="<?php echo e(__('common.Select')); ?>  <?php echo e(__('setting.Account Type')); ?>"
                                        value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('setting.Account Type')); ?>

                                    </option>
                                    <option value="Current Account"
                                        <?php echo e((getPaymentEnv('ACCOUNT_TYPE') ? getPaymentEnv('ACCOUNT_TYPE') : '') == 'Current Account' ? 'selected' : ''); ?>>
                                        <?php echo e(__('invoice.Current Account')); ?>

                                    </option>

                                    <option value="Savings Account"
                                        <?php echo e((getPaymentEnv('ACCOUNT_TYPE') ? getPaymentEnv('ACCOUNT_TYPE') : '') == 'Savings Account' ? 'selected' : ''); ?>>
                                        <?php echo e(__('invoice.Savings Account')); ?>

                                    </option>
                                    <option value="Salary Account"
                                        <?php echo e((getPaymentEnv('ACCOUNT_TYPE') ? getPaymentEnv('ACCOUNT_TYPE') : '') == 'Salary Account' ? 'selected' : ''); ?>>
                                        <?php echo e(__('invoice.Salary Account')); ?>

                                    </option>
                                    <option value="Fixed Deposit"
                                        <?php echo e((getPaymentEnv('ACCOUNT_TYPE') ? getPaymentEnv('ACCOUNT_TYPE') : '') == 'Fixed Deposit' ? 'selected' : ''); ?>>

                                        <?php echo e(__('invoice.Fixed Deposit')); ?>

                                    </option>

                                </select>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <label for="name" class="mb-2"><?php echo e(__('invoice.Cheque Slip')); ?>

                                    <span class="required_mark">*</span></label>
                                <input type="file" required name="image" class="primary_input mb_20">
                                <span class="invalid-feedback" role="alert" id="amount_validation"></span>
                            </div>
                        </div>

                        <fieldset class="mt-3">
                            <legend><?php echo e(__('invoice.Bank Account Info')); ?>

                            </legend>
                            <table class="table table-bordered">

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
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class=" theme_line_btn "
                                data-bs-dismiss="modal"><?php echo app('translator')->get('common.Cancel'); ?></button>
                        <button class="  theme_btn" type="submit"><?php echo app('translator')->get('payment.Payment'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\payment-page-section.blade.php ENDPATH**/ ?>