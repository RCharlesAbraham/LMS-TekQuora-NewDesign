<div>
    <section class="admin-visitor-area up_st_admin_visitor pt-5 mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-9">
                    <div class="box_header common_table_header">
                        <div class="main-title d-flex">
                            <h3 class="mb-0 ml-10 text-uppercase">INV-<?php echo e($enroll->id + 1000); ?></h3>
                        </div>
                        <div class="table_btn_wrap">
                            <ul>
                                <li>
                                    <button class="primary_btn printBtn"><?php echo e(__('student.Print')); ?></button>
                                </li>
                                <li>
                                    <button class="primary_btn downloadBtn"><?php echo e(__('student.Download')); ?></button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- invoice print part here -->
                    <div class="invoice_print pb-5">
                        <div class="container-fluid p-0">
                            <div id="invoice_print" class="invoice_part_iner">

                                <style>
                                    @media print {
                                        .table {
                                            width: 100%;
                                            margin-bottom: 1rem;
                                            color: #212529;
                                            font-family: Jost, sans-serif;
                                        }

                                        td h3 {
                                            font-size: 24px;
                                            font-weight: 500;
                                            color: var(--system_secendory_color);
                                        }

                                        .w-50 {
                                            width: 50% !important;
                                        }

                                        .invoice_grid {
                                            display: grid;
                                            grid-template-columns: 90px auto;
                                            margin-bottom: 10px;
                                            grid-gap: 25px;
                                        }

                                        h4 {
                                            line-height: 25px;
                                        }

                                        .custom_table3 {
                                            border-radius: 5px;
                                            /*background-color: red;*/
                                        }

                                        .custom_table3 tr {
                                            border-bottom: 1px solid #f1f2f3;
                                        }

                                        .table tr th {
                                            background-color: #fafafa !important;
                                        }

                                        .table thead th {
                                            vertical-align: bottom;
                                        }

                                        .table.custom_table3 thead tr th {
                                            font-weight: 600;
                                            border-top: 0;
                                            font-family: Cerebri Sans;
                                            padding: 15px 30px 15px 0;
                                        }

                                        .table.custom_table3 tbody tr td,
                                        .table.custom_table3 thead tr th {
                                            font-size: 16px;
                                            color: #373737;
                                            white-space: nowrap;
                                        }

                                        th p span,
                                        td p span {
                                            color: #212E40;
                                        }

                                        .text-end {
                                            text-align: right !important;
                                        }
                                    }

                                    .text_alignment {
                                        text-align: left
                                    }

                                    html[dir=rtl] .text_alignment {
                                        text-align: right
                                    }

                                    .basic_padding {
                                        padding-left: 15px;
                                    }

                                    html[dir=rtl] .table thead th {
                                        padding-right: 15px !important;
                                    }

                                    table thead tr th:nth-last-child(2), table tbody tr td:nth-last-child(2) {
                                        width: 20%;
                                        min-width: 150px;
                                    }

                                    html[dir=rtl] .text-end {
                                        text-align: left !important;
                                    }
                                </style>
                                <table style=" margin-bottom: 30px" class="table">
                                    <tbody>
                                    <td>
                                        <img style="width: 108px" src="<?php echo e(getCourseImage(Settings('logo'))); ?>"
                                             alt="<?php echo e(Settings('site_name')); ?>">
                                    </td>
                                    <td style="text-align: right">
                                        <h3 class="invoice_no black_color" style=" margin-bottom: 10px" ;>
                                            INV-<?php echo e($enroll->id + 1000); ?></h3>
                                    </td>
                                    </tbody>
                                </table>

                                <table style="margin-bottom: 0 !important;" class="table">
                                    <tbody>
                                    <tr>
                                        <td class="w-50">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                                <p class="invoice_grid"
                                                   style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                        <span class="black_color"><?php echo e(__('product.Order ID')); ?>:
                                                        </span><span><?php echo e(@$enroll->order_number); ?></span>
                                                </p>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                    <span class="black_color"><?php echo e(__('student.Date')); ?>:
                                                    </span><span><?php echo e(date('d F Y', strtotime(@$enroll->created_at))); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                    <span class="black_color"><?php echo e(__('student.Pay Method')); ?>:
                                                    </span><span>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($enroll->payment_method=='Wallet'): ?>
                                                        <?php echo e(__('payment.Wallet')); ?>

                                                    <?php else: ?>
                                                        <?php echo e($enroll->payment_method); ?>

                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($enroll->courses->sum('purchase_price') == 0): ?>
                                                    <span class="black_color"><?php echo e(__('student.Status')); ?>: </span>
                                                    <span class="black_color"><?php echo e(__('common.Paid')); ?></span>

                                                <?php else: ?>
                                                    <span class="black_color"><?php echo e(__('student.Status')); ?>: </span>
                                                    <?php
                                                        if (isModuleActive('Store')) {
                                                            $is_paid = $enroll->status == 1 && $enroll->is_paid == 1;
                                                        }else {
                                                            $is_paid = $enroll->status == 1;
                                                        }
                                                    ?>
                                                    <span
                                                        class="black_color"><?php echo e($is_paid ? __('student.Paid') : __('student.Unpaid')); ?></span>
                                            </p>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </td>
                                        <td>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                    <span class="black_color"><?php echo e(__('student.Company')); ?>:
                                                    </span><span><?php echo e(Settings('site_title')); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                    <span class="black_color"><?php echo e(__('student.Phone')); ?>:
                                                    </span><span><?php echo e(Settings('phone')); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                    <span class="black_color"><?php echo e(__('student.Email')); ?>:
                                                    </span><span><?php echo e(Settings('email')); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                    <span class="black_color"><?php echo e(__('student.Address')); ?>:
                                                    </span><span><?php echo e(Settings('address')); ?></span>
                                            </p>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                                <h4 style=" font-size: 16px; font-weight: 500; color: #000000; margin-top: 0; margin-bottom: 3px "
                                    class="black_color" ;><?php echo e(__('student.Billed To')); ?>,</h4>

                                <table style="margin-bottom: 35px !important;" class="table">
                                    <tbody>
                                    <td>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span class="black_color"><?php echo e(__('student.Name')); ?>: </span><span>
                                                    <?php echo e(@$enroll->bill->first_name); ?>

                                                <?php echo e(@$enroll->bill->last_name); ?></span>
                                        </p>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span class="black_color"><?php echo e(__('student.Phone')); ?>: </span><span>
                                                    <?php echo e(@$enroll->bill->phone); ?> </span>
                                        </p>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span class="black_color"><?php echo e(__('student.Email')); ?>: </span><span>
                                                    <?php echo e(@$enroll->bill->email); ?> </span>
                                        </p>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span class="black_color"><?php echo e(__('frontend.Company Name')); ?>: </span><span>
                                                    <?php echo e(@$enroll->bill->company_name); ?> </span>
                                        </p>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span class="black_color"><?php echo e(__('student.Address')); ?>: </span>
                                            <span class="black_color">
                                                    <?php echo e(@$enroll->bill->address1); ?> <?php echo e(@$enroll->bill->address2); ?>

                                                <?php echo e(@$enroll->bill->cityDetails->name); ?>

                                                <?php echo e(@$enroll->bill->zip_code); ?>

                                                <?php echo e(@$enroll->bill->countryDetails->name); ?>

                                                </span>
                                        </p>
                                    </td>
                                    </tbody>
                                </table>
                                <h2 style=" font-size: 18px; font-weight: 500; color: #000000; margin-top: 70px; margin-bottom: 33px "
                                    class="black_color" ;><?php echo e(__('student.Order List')); ?></h2>

                                <table class="table custom_table3 mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text_alignment">
                                                <span class="ps-3">
                                                    <?php echo e(__('common.SL')); ?>

                                                </span>
                                        </th>
                                        <th colspan="2" scope="col"
                                            class="black_color text_alignment"><?php echo e(__('courses.Course')); ?>

                                            / <?php echo e(__('student.Product')); ?> <?php echo e(__('common.Name')); ?></th>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                            <th scope="col" class="black_color"><?php echo e(__('product.Type')); ?></th>
                                            <th scope="col" class="black_color"><?php echo e(__('student.Quantity')); ?>

                                            </th>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <th scope="col" class="black_color"><?php echo e(__('student.Price')); ?></th>
                                        <th colspan="2" scope="col"
                                            class="black_color text_alignment"><?php echo e(__('student.Total')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $total = 0;
                                        $language_code = auth()->user()->language_code ?? 'en';
                                        $sl = 1;
                                    ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($enroll->courses)): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $enroll->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="black_color">
                                                        <span class="ps-3">
                                                            <?php echo e($sl++); ?>

                                                        </span>
                                                </td>
                                                <td colspan="2" class="text_alignment">
                                                    <h5 class="black_color">
                                                        <?php echo e(@$item->course->getTranslation('title', $language_code)); ?>

                                                    </h5>
                                                </td>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                                    <td class="black_color">
                                                        <?php echo e($item->is_store ? ($item->course->product->type == 2 ? __('product.Physical') : __('product.Virtual')) : __('product.Virtual')); ?>

                                                    </td>
                                                    <td class="black_color">
                                                        <?php echo e($item->qty); ?>

                                                    </td>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php
                                                    $price = $item->course->discount_price != 0 ? $item->course->discount_price : $item->course->price;

                                                    if ($item->is_store == 1) {
                                                        $price1 = $item->course->discount_price != 0 ? $item->course->discount_price : $item->course->price;
                                                        $price = $price1 * $item->qty;
                                                    } else {
                                                        $price = $item->course->discount_price != 0 ? $item->course->discount_price : $item->course->price;
                                                        $price1 = $price;
                                                    }

                                                    $total = $total + $price;
                                                ?>
                                                <td class="black_color text_alignment">
                                                    <?php echo e(getPriceFormat($price1)); ?></td>
                                                
                                                <td class="black_color text_alignment">
                                                    <?php echo e(getPriceFormat($price)); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Gift') && $enroll->courses->count() < $enroll->cart_count): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $enroll->gifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="black_color">
                                                        <span class="ps-3">
                                                            <?php echo e($sl++); ?>

                                                        </span>
                                                </td>
                                                <td colspan="2" class="text_alignment">
                                                    <h5 class="black_color">
                                                        <?php echo e(@$gift->course->getTranslation('title', $language_code)); ?>

                                                    </h5>
                                                </td>
                                                <?php
                                                    $price = $gift->course->discount_price != 0 ? $gift->course->discount_price : $gift->course->price;
                                                    $total = $total + $price;
                                                ?>
                                                <td class="black_color text_alignment">
                                                    <?php echo e(getPriceFormat($gift->price)); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                            <td></td>
                                            <td></td>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <td class="text-end"><?php echo e(__('student.Sub Total')); ?></td>
                                        <td><?php echo e(getPriceFormat($total)); ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                            <td></td>
                                            <td></td>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <td class="text-end"><?php echo e(__('common.Discount')); ?></td>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($enroll->discount == 0): ?>
                                            <td>0</td>
                                        <?php else: ?>
                                            <td><?php echo e(getPriceFormat($enroll->discount)); ?></td>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tr>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-end"><?php echo e(__('product.shipping_charge')); ?></td>
                                            <td><?php echo e(getPriceFormat($enroll->shipping_cost)); ?></td>
                                        </tr>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(hasTax()): ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                                <td></td>
                                                <td></td>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <td class="text-end"><?php echo e(__('tax.TAX')); ?></td>
                                            <td><?php echo e($enroll->tax == 0 ? 0 : getPriceFormat($enroll->tax)); ?></td>
                                        </tr>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                            <td></td>
                                            <td></td>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <td class="text-end"><?php echo e(__('student.Total')); ?></td>
                                        <td><?php echo e(getPriceFormat($enroll->purchase_price)); ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="editor"></div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-invoice-page-section.blade.php ENDPATH**/ ?>