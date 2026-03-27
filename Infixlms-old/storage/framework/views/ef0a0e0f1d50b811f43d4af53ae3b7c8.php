<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/daterangepicker.css')); ?><?php echo e(assetVersion()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">

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
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"> <?php echo e(__('payment.Purchase history')); ?></h3>
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
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                            <th scope="col"><?php echo e(__('common.Order No')); ?></th>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Total Courses')); ?> <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                                / <?php echo e(__('product.Products')); ?>

                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></th>
                                        <th scope="col"><?php echo e(__('payment.Total Price')); ?></th>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store')): ?>
                                            <th scope="col"><?php echo e(__('product.Delivery Fee')); ?></th>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <th scope="col"><?php echo e(__('common.Discount')); ?></th>
                                        <th scope="col"><?php echo e(__('tax.TAX')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Payment Type')); ?></th>
                                        <th scope="col"><?php echo e(__('payment.Invoice')); ?></th>
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

            <input type="hidden" value="<?php echo e(route('users.my_purchase.datatable')); ?>" id="my_purchase_route">
            <input type="hidden" value="<?php echo e(hasTax()); ?>" id="hasTax">
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/daterangepicker.min.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/common/date_range_init.js')); ?><?php echo e(assetVersion()); ?>"></script>

    <script>

        dataTableOptions.serverSide = true
        dataTableOptions.processing = true
        dataTableOptions.ajax = {
            url: $('#my_purchase_route').val(),
            data: function (d) {
                d.f_date = $('.date_range_input').val()
            }
        };

        dataTableOptions.columns = [
            {data: 'DT_RowIndex', name: 'id'},
                <?php if(isModuleActive('Store')): ?>
            {
                data: 'order_number', name: 'order_number', orderable: false, searchable: false
            },
                <?php endif; ?>
            {
                data: 'updated_at', name: 'updated_at'
            },
            {data: 'total_courses', name: 'total_courses', searchable: false},
            {data: 'purchase_price', name: 'purchase_price'},
                <?php if(isModuleActive('Store')): ?>
            {
                data: 'delivery_fee', name: 'delivery_fee', orderable: false, searchable: false
            },
                <?php endif; ?>
            {
                data: 'discount', name: 'discount'
            },
            {data: 'tax', name: 'tax', visible: hasTax, orderable: false, searchable: false},
            {data: 'payment_method', name: 'payment_method'},
            {data: 'invoice', name: 'invoice', orderable: false, searchable: false},

        ]
        const hasTax = $("#hasTax").val();
        let table = $('#lms_table').DataTable(dataTableOptions);
        (function ($) {
            "use strict";
            $(document).ready(function () {

                $(document).on('click', '.reset_btn', function (event) {
                    event.preventDefault();
                    $('.date_range_input').val('');
                    resetAfterChange();
                });

                function resetAfterChange() {
                    let table = $('#lms_table').DataTable();
                    table.ajax.reload();
                }

            });

        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_purchase\index.blade.php ENDPATH**/ ?>