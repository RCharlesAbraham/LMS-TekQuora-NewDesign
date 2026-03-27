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
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"> <?php echo e(__('frontend.Logged In Devices')); ?></h3>
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
                                        <th scope="col"><?php echo e(__('frontend.OS')); ?></th>
                                        <th scope="col"><?php echo e(__('frontend.Browser')); ?></th>
                                        <th scope="col"><?php echo e(__('frontend.LogOut Date')); ?></th>
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

            <input type="hidden" value="<?php echo e(route('users.logged_in_devices.datatable')); ?>" id="logged_in_device_route">
            <div class="modal fade admin-query" id="logOutModal"
                 role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                                <?php echo e(__('frontend.Enter Your Password To Continue')); ?></h5>
                            <button type="button" class="btn-close"
                                    data-bs-dismiss="modal">
                                <i class="ti-close "></i>
                            </button>
                        </div>
                        <form action="<?php echo e(route('log.out.device')); ?>"
                              method="post"><?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <input type="hidden" id="rowId" name="id" value="">
                                <div class="col-12">
                                    <div
                                        class="input-group custom_group_field mb_25">
                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"
                                                                                  id="basic-addon4">
                                                                                <!-- svg -->
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="10.697" height="14.039"
                                                                                     viewBox="0 0 10.697 14.039">
                                                                                <path id="Path_46" data-name="Path 46"
                                                                                      d="M9.348,11.7A1.337,1.337,0,1,0,8.011,10.36,1.341,1.341,0,0,0,9.348,11.7ZM13.36,5.68h-.669V4.343a3.343,3.343,0,0,0-6.685,0h1.27a2.072,2.072,0,0,1,4.145,0V5.68H5.337A1.341,1.341,0,0,0,4,7.017V13.7a1.341,1.341,0,0,0,1.337,1.337H13.36A1.341,1.341,0,0,0,14.7,13.7V7.017A1.341,1.341,0,0,0,13.36,5.68Zm0,8.022H5.337V7.017H13.36Z"
                                                                                      transform="translate(-4 -1)"
                                                                                      fill="#687083"/>
                                                                                </svg>
                                                                                <!-- svg -->
                                                                            </span>
                                        </div>
                                        <input type="password" name="password"
                                               class="form-control"
                                               placeholder="<?php echo e(__('common.Enter Password')); ?>"
                                               aria-label="password"
                                               aria-describedby="basic-addon4">
                                    </div>
                                </div>

                                <div class="mt-40 d-flex justify-content-between">
                                    <button type="button" class="primary-btn tr-bg"
                                            data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                                    <button class="primary-btn fix-gr-bg"
                                            type="submit"><?php echo e(__('frontend.LogOut')); ?></button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/daterangepicker.min.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/common/date_range_init.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/my_panel/logged_in_device.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\logged_in_device\index.blade.php ENDPATH**/ ?>