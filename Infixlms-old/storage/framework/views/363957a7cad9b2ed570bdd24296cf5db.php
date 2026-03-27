<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/daterangepicker.css')); ?><?php echo e(assetVersion()); ?>">
    <style>
        .deposit_lists_wrapper {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-gap: 15px;
            margin-bottom: 50px;
        }

        .deposit_lists_wrapper .single_deposite {
            border: 1px solid #ddd;
            padding: 10px 10px;
            border-radius: 5px;
            text-align: center;
            height: 50px;
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        .deposit_lists_wrapper .single_deposite img {
            width: 100%;
            max-width: 80px;
        }

        .deposit_lists_wrapper .single_deposite button {
            padding: 0;
            margin: 0;
            width: 100%;
            background: transparent;
            border: 0;
        }

        .deposit_lists_wrapper .single_deposite .Payment_btn2 img {
            width: 100% !important;
            max-width: 80px !important;
        }

        @media (max-width: 575.98px) {
            .deposit_lists_wrapper {
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 10px;
            }
        }

        .payment_btn_text2 {
            padding: 0 10px;
            background: linear-gradient(90deg, var(--backend-primary-color), var(--backend-primary-color) 51%, var(--backend-primary-color));
            color: #fff;
            border-radius: 5px;
            color: #fff !important;
            font-size: 18px !important;
            font-weight: 500;
            width: 100%;
            text-align: center;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom_append_group_btn {
            line-height: 0 !important;
            border-radius: 0 !important;
        }

    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row">
                            <div class="col-xl-12">
                                <form action="<?php echo e(route('users.deposit.index')); ?>" method="get">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="primary_input_label"
                                                   for="deposit_amount"><?php echo e(__('payment.Deposit Amount')); ?>

                                                (<?php echo e(auth()->user()->currency->symbol); ?>) <strong
                                                    class="text-danger">*</strong></label>
                                            <div class="input-group mb-20">
                                                <input step="any" min="1" type="number" class="form-control"
                                                       name="deposit_amount" id="deposit_amount"
                                                       value="<?php echo e(!empty($amount)?$amount:''); ?>">
                                                <div class="input-group-append">
                                                    <button class="primary-btn fix-gr-bg custom_append_group_btn"
                                                            type="submit"><?php echo e(__('payment.Save Info')); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($amount)): ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h3 class="mb-0"><?php echo e(__('common.Select')); ?> <?php echo e(__('payment.Payment Method')); ?></h3>
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
                                                                class="single_deposite <?php echo e($gateway->method=="Bank Payment"?'p-0 border-0':''); ?>">

                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($gateway->method=="Stripe"): ?>
                                                                    <form action="<?php echo e(route('depositSubmit')); ?>"
                                                                          method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
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
                                                                                            $route =route('depositSubmit');
                                                                                            $payment_type ='Deposit'
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
                                                                            <form action="<?php echo e(route('depositSubmit')); ?>"
                                                                                  method="POST">
                                                                                <input type="hidden" name="method"
                                                                                       value="<?php echo e($gateway->method); ?>">
                                                                                <input type="hidden"
                                                                                       name="deposit_amount"
                                                                                       value="<?php echo e($amount); ?>">
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

                                                                    <form action="<?php echo e(route('depositSubmit')); ?>"
                                                                          method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input type="hidden" name="deposit_amount"
                                                                               value="<?php echo e($amount); ?>">
                                                                        <button type="submit" class="">
                                                                            <img class=""
                                                                                 src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                 alt="">
                                                                        </button>

                                                                    </form>
                                                                <?php elseif($gateway->method=="PayTM"): ?>

                                                                    <form action="<?php echo e(route('depositSubmit')); ?>"
                                                                          method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input type="hidden" name="deposit_amount"
                                                                               value="<?php echo e($amount); ?>">
                                                                        <button type="submit" class="">
                                                                            <img
                                                                                src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                alt="">
                                                                        </button>

                                                                    </form>

                                                                <?php elseif($gateway->method=="PayStack"): ?>

                                                                    <form action="<?php echo e(route('depositSubmit')); ?>"
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

                                                                        <button type="submit" class="">
                                                                            <img
                                                                                src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                alt="">
                                                                        </button>

                                                                    </form>
                                                                <?php elseif($gateway->method=="Bkash"): ?>

                                                                    <form action="<?php echo e(route('depositSubmit')); ?>"
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
                                                                        <button type="button" class="" id="bKash_button"
                                                                                onclick="BkashPayment()">
                                                                            <img class=""
                                                                                 src="<?php echo e(asset($gateway->logo)); ?>"
                                                                                 alt="">
                                                                        </button>
                                                                        <?php
                                                                            $type ='Deposit';
                                                                        ?>
                                                                        <?php echo $__env->make('bkash::bkash-script',compact('type','amount'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                                                    </form>

                                                                <?php elseif($gateway->method == 'Authorize.Net'): ?>
                                                                    <?php if ($__env->exists('authorizenet::diposit_form',['gateway' => $gateway, 'amount' => $amount])) echo $__env->make('authorizenet::diposit_form',['gateway' => $gateway, 'amount' => $amount], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Braintree'): ?>
                                                                    <?php if ($__env->exists('braintree::disposit',['gateway' => $gateway, 'amount' => $amount])) echo $__env->make('braintree::disposit',['gateway' => $gateway, 'amount' => $amount], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Mollie'): ?>
                                                                    <?php if ($__env->exists('mollie::deposit',['gateway' => $gateway, 'amount' => $amount])) echo $__env->make('mollie::deposit',['gateway' => $gateway, 'amount' => $amount], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Flutterwave'): ?>
                                                                    <?php if ($__env->exists('flutterwave::deposit',['gateway' => $gateway, 'amount' => $amount])) echo $__env->make('flutterwave::deposit',['gateway' => $gateway, 'amount' => $amount], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Jazz Cash'): ?>
                                                                    <?php if ($__env->exists('jazzcash::deposit',['gateway' => $gateway, 'amount' => $amount])) echo $__env->make('jazzcash::deposit',['gateway' => $gateway, 'amount' => $amount], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php elseif($gateway->method == 'Coinbase'): ?>
                                                                    <?php if ($__env->exists('coinbase::deposit',['gateway' => $gateway,'amount' => $amount])) echo $__env->make('coinbase::deposit',['gateway' => $gateway,'amount' => $amount], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                                                <?php elseif($gateway->method=="Bank Payment"): ?>
                                                                    <form class="w-100" action="" method="post">
                                                                        <?php echo csrf_field(); ?>

                                                                        <a href="#" data-bs-toggle="modal"
                                                                           data-bs-target="#bankModel"
                                                                           class="payment_btn_text2 w-100">
                                                                            <?php echo e($gateway->method); ?>

                                                                        </a>
                                                                    </form>
                                                                <?php else: ?>

                                                                    <form action="<?php echo e(route('depositSubmit')); ?>"
                                                                          method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="method"
                                                                               value="<?php echo e($gateway->method); ?>">
                                                                        <input type="hidden" name="deposit_amount"
                                                                               value="<?php echo e($amount); ?>">
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
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="white_box_tittle list_header">
                            <h4><?php echo e(__('courses.Advanced Filter')); ?> </h4>
                        </div>
                        <form action="#" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">

                                <div class="col-lg-3">
                                    <div class="primary_input mb-15 date_range">
                                        <div class="primary_datepicker_input filter">
                                            <label class="primary_input_label" for=""><?php echo e(__('common.Date')); ?></label>
                                            <div class="g-0  input-right-icon">
                                                <input placeholder="<?php echo e(__('common.Date')); ?>" readonly
                                                       class="primary_input_field date_range_input" type="text"
                                                       name="date_range_filter" value="">
                                                <button class="" type="button">
                                                    <i class="fa fa-refresh" id="reset-date-filter"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 mt-3">
                                    <div class="search_course_btn">
                                        <a class="primary-btn radius_30px  fix-gr-bg reset_btn mt-20"><?php echo e(__('common.Reset')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="box_header common_table_header">
                        <div class="main-title d-md-flex">
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"> <?php echo e(__('payment.Deposit history')); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="QA_section QA_section_heading_custom check_box_table">
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <div class="">
                                <table id="lms_table" class="table Crm_table_active3">
                                    <thead>
                                    <tr>
                                        <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                        <th scope="col"><?php echo e(__('payment.Amount')); ?> (<?php echo e(auth()->user()->currency->symbol); ?>

                                            )
                                        </th>
                                        <th scope="col"><?php echo e(__('payment.Method')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" value="<?php echo e(route('users.deposit.datatable')); ?>" id="deposit_history_route">
            <?php echo $__env->make('backend.my_panel.deposit.bank_payment_modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/daterangepicker.min.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/common/date_range_init.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/my_panel/deposit_history.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/deposit.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\deposit\index.blade.php ENDPATH**/ ?>