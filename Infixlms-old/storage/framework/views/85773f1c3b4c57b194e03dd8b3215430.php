<?php $__env->startPush('styles'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="white-box">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box_header common_table_header">
                            <div class="main-title d-md-flex">
                                <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('profile.delete_account_request')); ?></h3>
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
                                            <th scope="col"><?php echo e(__('common.Name')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Email')); ?></th>
                                            <th scope="col"><?php echo e(__('profile.request_date')); ?></th>
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
                    <div class="modal fade admin-query" id="deleteItem">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><?php echo e(__('common.Delete')); ?></h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                            class="ti-close "></i></button>
                                </div>

                                <div class="modal-body">
                                    <form action="<?php echo e(route('admin.user_delete_request.destroy')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>

                                        <div class="text-center">

                                            <h4><?php echo e(__('common.Are you sure to delete ?')); ?> </h4>
                                        </div>
                                        <input type="hidden" name="id" value="" id="itemDeleteId">
                                        <div class="mt-40 d-flex justify-content-between">
                                            <button type="button" class="primary-btn tr-bg"
                                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                                            <button class="primary-btn fix-gr-bg"
                                                    type="submit"><?php echo e(__('common.Delete')); ?></button>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal fade admin-query" id="rejectItem">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><?php echo e(__('common.Reject')); ?></h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                            class="ti-close "></i></button>
                                </div>

                                <div class="modal-body">
                                    <form action="<?php echo e(route('admin.user_delete_request.reject')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>

                                        <div class="text-center">

                                            <h4>Are you sure to reject ? </h4>
                                        </div>
                                        <input type="hidden" name="id" value="" id="itemRejectId">
                                        <div class="mt-40 d-flex justify-content-between">
                                            <button type="button" class="primary-btn tr-bg"
                                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                                            <button class="primary-btn fix-gr-bg"
                                                    type="submit"><?php echo e(__('common.Reject')); ?></button>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

    <?php
        $url = route('admin.user_delete_request.datatable');
    ?>

    <script type="application/javascript">
        dataTableOptions.serverSide = true
        dataTableOptions.processing = true
        dataTableOptions.ajax = '<?php echo $url; ?>';
        dataTableOptions.columns = [
            {data: 'DT_RowIndex', name: 'id', orderable: true},
            {data: 'name', name: 'user.name'},
            {data: 'email', name: 'user.email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false},
        ]
        let table = $('#lms_table').DataTable(dataTableOptions);

        $(document).on('click', '.delete_item', function () {
            let id = $(this).data('id');
            $('#itemDeleteId').val(id);
            $("#deleteItem").modal('show');
        });

        $(document).on('click', '.reject_item', function () {
            let id = $(this).data('id');
            $('#itemRejectId').val(id);
            $("#rejectItem").modal('show');
        });


    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\delete_request\index.blade.php ENDPATH**/ ?>