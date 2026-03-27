<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="box_header common_table_header">
                        <div class="main-title d-md-flex">
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('product.Store Refund & Dispute')); ?></h3>
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
                                        <th scope="col"><?php echo e(__('product.Order ID')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                        <th scope="col"><?php echo e(__('product.Request Sent Date')); ?></th>
                                        <th scope="col"><?php echo e(__('product.Order Amount')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Action')); ?></th>
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

            <input type="hidden" value="<?php echo e(route('users.myRefundDispute.datatable')); ?>" id="my_purchase_route">
            
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

    <script>
        dataTableOptions.serverSide = true
        dataTableOptions.processing = true
        dataTableOptions.ajax = {
            url: $('#my_purchase_route').val(),
            data: function (d) {
                d.f_date = $('.date_range_input').val()
            }
        };

        dataTableOptions.columns = []
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

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_purchase\instructor_refund_dispute.blade.php ENDPATH**/ ?>