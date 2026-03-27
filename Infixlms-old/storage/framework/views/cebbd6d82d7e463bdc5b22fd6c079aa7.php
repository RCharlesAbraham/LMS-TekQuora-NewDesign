<?php $__env->startSection('mainContent'); ?>
    <style>
        .product_img_div img {
            height: 70px;
        }

        .single_img img {
            height: 80px;
            margin-right: 10px;
        }
    </style>
    <?php echo generateBreadcrumb(); ?>

    <?php
        $grand_total = $package->products->sum('total_price') + $package->shipping_cost;
    ?>




    <div class="box_header common_table_header">
        <div class="main-title d-md-flex">
            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('product.Refund Request')); ?></h3>
        </div>
    </div>
    <form action="<?php echo e(route('users.instructor_refund_make_request_store')); ?>" method="post"
          enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php
            $e_items = [];
        ?>
        <div class="white-box mb-20 col-md-10 mx-auto">
            <div class="row">

                <div class="col-lg-4">
                    <div class="primary_input mb-15">
                        <label class="primary_input_label" for=""> <?php echo e(__('product.package_code')); ?>

                            : <?php echo e($package->package_code); ?></label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="primary_input mb-15">
                        <label class="primary_input_label" for=""> <?php echo e(__('product.order_id')); ?>

                            : <?php echo e(@$package->order->order_number); ?></label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="primary_input mb-15">
                        <label class="primary_input_label" for=""> <?php echo e(__('common.Status')); ?>:
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($package->order->is_cancelled == 1): ?>
                                <?php echo e(__('product.cancelled')); ?>

                            <?php elseif($package->order->is_completed == 1): ?>
                                <?php echo e(__('product.completed')); ?>

                            <?php else: ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($package->order->is_confirmed == 1): ?>
                                    <?php echo e(__('product.confirmed')); ?>

                                <?php elseif($package->order->is_confirmed == 2): ?>
                                    <?php echo e(__('product.declined')); ?>

                                <?php else: ?>
                                    <?php echo e(__('product.pending')); ?>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="primary_input mb-15">
                        <label class="primary_input_label" for=""> <?php echo e(__('product.order_date')); ?>

                            : <?php echo e($package->created_at); ?></label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="primary_input mb-15">
                        <label class="primary_input_label" for=""> <?php echo e(__('product.order_amount')); ?>

                            : <?php echo e(getPriceFormat($grand_total)); ?></label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="primary_input mb-15">
                        <label class="primary_input_label" for=""> <?php echo e(__('product.payment')); ?>:
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($package->order->is_paid == 1): ?>
                                <?php echo e(__('product.paid')); ?>

                            <?php else: ?>
                                <?php echo e(__('product.pending')); ?>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </label>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="QA_table ">
                        <!-- table-responsive -->
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th scope="col" style="text-align: left">

                                    </th>
                                    <th colspan="2" scope="col" style="text-align: left" class="black_color">
                                        <?php echo e(__('common.Image')); ?></th>

                                    <th colspan="2" scope="col" style="text-align: left" class="black_color">
                                        <?php echo e(__('courses.Course')); ?> /
                                        <?php echo e(__('student.Product')); ?> <?php echo e(__('common.Name')); ?></th>

                                    <th scope="col" class="black_color"><?php echo e(__('product.Type')); ?>

                                    </th>
                                    <th scope="col" class="black_color"><?php echo e(__('student.Quantity')); ?>

                                    </th>


                                    <th scope="col" class="black_color"><?php echo e(__('student.Price')); ?>

                                    </th>
                                </tr>


                                <input type="hidden" name="order_id" value="<?php echo e($package->order->id); ?>">
                                <input type="hidden" name="package_id" value="<?php echo e($package->id); ?>">
                                <?php
                                    $all_product = Modules\Store\Entities\OrderPackageDetail::with('packageProductDetail')
                                        ->where(['order_id' => $package->order_id, 'seller_id' => $package->seller_id])
                                        ->get();
                                ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $all_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $package_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $e_items[] = [
                                            'item_id' => $package_product->packageProductDetail->course->id,
                                            'item_name' => $package_product->packageProductDetail->course->title,
                                            'price' => $package_product->packageProductDetail->price,
                                        ];
                                    ?>
                                    <input type="hidden" name='e_items' value="<?php echo e(json_encode($e_items)); ?>">
                                    <input type="hidden" name='product_id'
                                           value="<?php echo e($package_product->packageProductDetail->course->id); ?>">

                                    <tr>
                                        <td class="black_color">
                                            <span>
                                                <label class="primary_checkbox d-flex"
                                                       for="product_id<?php echo e($package_product->packageProductDetail->id); ?>">
                                                    <input type="checkbox" name="product_ids[]"
                                                           id="product_id<?php echo e($package_product->packageProductDetail->id); ?>"
                                                           checked
                                                           value="<?php echo e($package->id); ?>-<?php echo e($package->packageProductDetail->course->product_id); ?>-<?php echo e($package_product->packageProductDetail->price); ?>-<?php echo e($package_product->packageProductDetail->course->id); ?>">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                        </td>
                                        <td colspan="2" style="text-align: left">
                                            <div class="product_img_div">
                                                <img
                                                    src="<?php echo e(getCourseImage(@$package_product->packageProductDetail->course->product->thumbnail)); ?>"
                                                    alt="">
                                            </div>
                                        </td>
                                        <td colspan="2" style="text-align: left">
                                            <h5 class="black_color">
                                                <?php echo e(@$package_product->packageProductDetail->course->title); ?>

                                            </h5>
                                        </td>

                                        <td class="black_color">
                                            <?php echo e(getPriceFormat($package_product->packageProductDetail->price)); ?>

                                        </td>
                                        <td class="black_color">
                                            <?php echo e($package_product->packageProductDetail->qty); ?>

                                            <input class="count_single_item input-number qty" type="hidden" name="qty[]"
                                                   maxlength="<?php echo e($package_product->packageProductDetail->qty); ?>"
                                                   minlength="1"
                                                   value="<?php echo e($package_product->packageProductDetail->qty); ?>"
                                                   readonly>
                                        </td>

                                        <td style="text-align: left" class="black_color">
                                            <select class="primary_select wide rounded-0" required
                                                    
                                                    name="reason_id[]">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $reasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reason): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($reason->id); ?>"><?php echo e($reason->reason); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </select>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="primary_input mb-15">
                        <label class="primary_input_label"
                               for=""><?php echo e(__('product.additional_information')); ?></label>
                        <textarea class="primary_textarea height_112" name="additional_info" id="additional_info"
                                  placeholder="<?php echo e(__('product.additional_information')); ?>"></textarea>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="primary_input mb-5">
                        <label class="primary_input_label" for=""><?php echo e(__('product.set_prefered_option')); ?></label>
                        <select class="primary_select wide rounded-0 mb_30" name="money_get_method"
                                id="money_get_method">
                            <option value="wallet"><?php echo e(__('product.wallet')); ?></option>
                            <option value="bank_transfer"><?php echo e(__('product.bank_transfer')); ?></option>
                        </select>
                    </div>
                    <div class="bank_info_div d-none">
                        <h6><?php echo e(__('product.bank_information_to_recieve_money')); ?></h6>
                        <div class="primary_input mb-3">
                            <label class="primary_input_label" for=""><?php echo e(__('product.bank_name')); ?></label>
                            <input class="primary_input_field" id="bank_name" name="bank_name"
                                   placeholder="<?php echo e(__('product.bank_name')); ?>" type="text"
                                   value="<?php echo e(old('bank_name')); ?>">
                        </div>
                        <div class="primary_input mb-3">
                            <label class="primary_input_label" for=""><?php echo e(__('product.branch_name')); ?></label>
                            <input class="primary_input_field" id="branch_name" name="branch_name"
                                   placeholder="<?php echo e(__('product.branch_name')); ?>" type="text"
                                   value="<?php echo e(old('branch_name')); ?>">
                        </div>
                        <div class="primary_input mb-3">
                            <label class="primary_input_label" for=""><?php echo e(__('product.account_name')); ?></label>
                            <input class="primary_input_field" id="account_name" name="account_name"
                                   placeholder="<?php echo e(__('product.account_name')); ?>" type="text"
                                   value="<?php echo e(old('account_name')); ?>">
                        </div>
                        <div class="primary_input mb-3">
                            <label class="primary_input_label" for=""><?php echo e(__('product.account_number')); ?></label>
                            <input class="primary_input_field" id="account_no" name="account_no"
                                   placeholder="<?php echo e(__('product.account_number')); ?>" type="text"
                                   value="<?php echo e(old('account_number')); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="primary_input mb-3">
                        <label class="primary_input_label" for=""><?php echo e(__('product.set_shipment_option')); ?></label>
                        <select class="primary_select wide rounded-0 mb_30" name="shipping_way" id="shipping_way">
                            <option value="courier"><?php echo e(__('product.courier_pick_up')); ?></option>
                            <option value="drop_off"><?php echo e(__('product.drop_off')); ?></option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 shipment_info_div1">
                    <div class="primary_input mb-3">
                        <label class="primary_input_label" for=""><?php echo e(__('product.courier_address')); ?></label>
                        <select class="primary_select wide rounded-0 mb_30" name="pick_up_address_id"
                                id="pick_up_address_id">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = auth()->user()->customerAddresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_num => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($address->id); ?>"><?php echo e($address->address1); ?>, <?php echo e(@$address->city); ?>

                                    , <?php echo e(@$address->stateDetails->name); ?> (<?php echo e($address->phone); ?>)
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 shipment_info_div2 d-none">
                    <div class="primary_input mb-3">
                        <label class="primary_input_label" for=""><?php echo e(__('product.courier_address')); ?></label>
                        <input class="primary_input_field" id="drop_off_courier_address" name="drop_off_courier_address"
                               placeholder="<?php echo e(__('product.courier_address')); ?>" type="text"
                               value="<?php echo e(old('drop_off_courier_address')); ?>">
                    </div>
                </div>


                <div class="photo_uploader_lists col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="primary_label2 style2 "><?php echo e(__('product.image')); ?></label>
                            <div class="img_upload_group d-flex align-items-center">
                                <label for="photo_12" class="photo_uploader">
                                    <i class="fas fa-camera"></i>
                                    <p id="count_12">0/1</p>
                                    <input class="d-none upload_img_for_product" type="file" id="photo_12"
                                           name="product_images_<?php echo e(@$product->giftCard->id); ?>[]"
                                           data-upload_div="#img_upload_div_12" data-count="#count_12" max="6"
                                           multiple>
                                </label>
                                <div class="img_upload_div d-flex" id="img_upload_div_12">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12 text-center">
                    <button type="submit" class="primary-btn semi_large2 fix-gr-bg" id="save_button_parent"><i
                            class="ti-check"></i><?php echo e(__('product.send')); ?></button>
                </div>

            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.order_cancel_by_id', function (e) {
                e.preventDefault();
                $('#orderCancelReasonModal').modal('show');
                $('.order_id').val($(this).attr('data-id'));
            });
        });
    </script>


    <script type="text/javascript">
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $(document).on('change', '#money_get_method', function () {
                    $('#pre-loader').show();
                    var method = this.value;
                    if (method == "bank_transfer") {
                        $('.bank_info_div').removeClass('d-none');
                    } else {
                        $('.bank_info_div').addClass('d-none');
                    }
                    $('#pre-loader').hide();
                });
                $(document).on('change', '#shipping_way', function () {
                    var way = this.value;
                    if (way == "courier") {
                        $('.shipment_info_div1').removeClass('d-none');
                        $('.shipment_info_div2').addClass('d-none');
                    } else {
                        $('.shipment_info_div1').addClass('d-none');
                        $('.shipment_info_div2').removeClass('d-none');
                    }
                    $('#pre-loader').hide();
                });
                $(document).on('change', '.upload_img_for_product', function (event) {
                    let upload_div = $(this).data('upload_div');
                    let count = $(this).data('count');
                    uploadImage($(this)[0], upload_div, count);
                });

                function uploadImage(data, divId, count) {
                    if (data.files) {
                        if (data.files.length > 6) {
                            toastr.error("<?php echo e(__('defaultTheme.maximum_6_image_can_upload')); ?>",
                                "<?php echo e(__('common.error')); ?>");
                            data.value = '';
                        } else {
                            $.each(data.files, function (key, value) {
                                $(divId).empty();
                                $(count).text(data.files.length + '/6');
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $(divId).append(
                                        `<div class="single_img">
                                    <img src="` + e.target.result + `" alt="">
                                </div>`);
                                };
                                reader.readAsDataURL(value);
                            });
                        }
                    }
                }
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_purchase\instructor_purchase_order_details.blade.php ENDPATH**/ ?>