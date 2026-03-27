<div>
    <section class="admin-visitor-area up_st_admin_visitor pt-5 mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-9">
                    <div class="box_header common_table_header">
                        <div class="main-title d-flex">
                            <h3 class="mb-0 ml-10 text-uppercase">INV-<?php echo e($enroll->id+1000); ?></h3>
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
                                <table style=" margin-bottom: 30px" class="table">
                                    <tbody>
                                    <td>
                                        <img style="width: 108px" src="<?php echo e(getCourseImage(Settings('logo') )); ?>"
                                             alt="<?php echo e(Settings('site_name')); ?>">
                                    </td>
                                    <td style="text-align: right">
                                        <h3 class="invoice_no black_color" style=" margin-bottom: 10px" ;>
                                            INV-<?php echo e($enroll->id+1000); ?></h3>
                                    </td>
                                    </tbody>
                                </table>

                                <table style="margin-bottom: 0 !important;" class="table">
                                    <tbody>
                                    <tr>
                                        <td class="w-50">
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                <span
                                                    class="black_color"><?php echo e(__('student.Date')); ?>: </span><span><?php echo e(date('d F Y',strtotime(@$enroll->billing->created_at))); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                <span
                                                    class="black_color"><?php echo e(__('student.Pay Method')); ?>: </span><span><?php echo e($enroll->payment_method); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($enroll->price == 0 ): ?>
                                                    <span class="black_color"><?php echo e(__('student.Status')); ?>: </span>
                                                    <span class="black_color"><?php echo e(__('common.Paid')); ?></span></p>
                                            <?php else: ?>
                                                <span class="black_color"><?php echo e(__('student.Status')); ?>: </span>
                                                <span
                                                    class="black_color"><?php echo e($enroll->status==1?__('student.Paid'):__('student.Unpaid')); ?></span></p>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </td>
                                        <td>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                <span
                                                    class="black_color"><?php echo e(__('student.Company')); ?>: </span><span><?php echo e(Settings('site_title')); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                <span
                                                    class="black_color"><?php echo e(__('student.Phone')); ?>: </span><span><?php echo e(Settings('phone')); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                <span
                                                    class="black_color"><?php echo e(__('student.Email')); ?>: </span><span><?php echo e(Settings('email')); ?></span>
                                            </p>
                                            <p class="invoice_grid"
                                               style="font-size:14px; font-weight: 400; color:#3C4777;">
                                                <span
                                                    class="black_color"><?php echo e(__('student.Address')); ?>: </span><span><?php echo e(Settings('address')); ?></span>
                                            </p>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                                <h4 style=" font-size: 16px; font-weight: 500; color: #000000; margin-top: 0; margin-bottom: 3px "
                                    class="black_color"
                                    ;><?php echo e(__('student.Billed To')); ?>,</h4>

                                <table style="margin-bottom: 35px !important;" class="table">
                                    <tbody>
                                    <td>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span
                                                class="black_color"><?php echo e(__('student.Name')); ?>: </span><span> <?php echo e(@$enroll->billing->first_name); ?> <?php echo e(@$enroll->billing->last_name); ?></span>
                                        </p>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span
                                                class="black_color"><?php echo e(__('student.Phone')); ?>: </span><span> <?php echo e(@$enroll->billing->phone); ?> </span>
                                        </p>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span
                                                class="black_color"><?php echo e(__('student.Email')); ?>: </span><span> <?php echo e(@$enroll->billing->email); ?> </span>
                                        </p>
                                        <p class="invoice_grid"
                                           style="font-size:14px; font-weight: 400; color:#3C4777;">
                                            <span class="black_color"><?php echo e(__('student.Address')); ?>: </span>
                                            <span class="black_color">
                                            <?php echo e(@$enroll->billing->address2); ?>

                                                <?php echo e(@$enroll->billing->city); ?>, <?php echo e(@$enroll->billing->zip_code); ?>

                                                <?php echo e(@$enroll->billing->country); ?>

                                            </span>
                                        </p>
                                    </td>
                                    </tbody>
                                </table>
                                <h2 style=" font-size: 18px; font-weight: 500; color: #000000; margin-top: 70px; margin-bottom: 33px "
                                    class="black_color"
                                    ;><?php echo e(__('student.Order List')); ?></h2>

                                <table class="table custom_table3 mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <span class="ps-3">
                                            <?php echo e(__('common.SL')); ?>

                                            </span>
                                        </th>
                                        <th scope="col" class="black_color"><?php echo e(__('subscription.Plan')); ?></th>
                                        <th scope="col"><?php echo e(__('subscription.Start Date')); ?></th>
                                        <th scope="col"><?php echo e(__('subscription.End Date')); ?></th>
                                        <th scope="col"><?php echo e(__('subscription.Days')); ?></th>


                                        <th scope="col" class="black_color"><?php echo e(__('student.Price')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $total =0;
                                    ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($enroll->plan)): ?>

                                        <tr>
                                            <td class="black_color">
                                                 <span class="ps-3">
                                                1
                                                 </span>
                                            </td>
                                            <td>
                                                <h5 class="black_color">   <?php echo e(@$enroll->plan->title); ?></h5>

                                            </td>
                                            <td><?php echo e(showDate(@$enroll->start_date)); ?></td>
                                            <td><?php echo e(showDate(@$enroll->end_date)); ?></td>
                                            <td> <?php echo e(@$enroll->plan->days); ?>    </td>
                                            <td class="black_color">
                                                <?php echo e(getPriceFormat($enroll->plan->price)); ?>

                                            </td>
                                        </tr>

                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- invoice print part end -->
                </div>
            </div>
        </div>
    </section>
    <div id="editor"></div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\subscription-invoice-page-section.blade.php ENDPATH**/ ?>