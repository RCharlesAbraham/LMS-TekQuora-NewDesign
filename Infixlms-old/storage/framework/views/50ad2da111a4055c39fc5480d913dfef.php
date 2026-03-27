<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/daterangepicker.css')); ?><?php echo e(assetVersion()); ?>">
    <style>
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
                            <div class="col-md-6">
                                <div class="mb-20">
                                    <h3 class="mb-0"><?php echo e(__('communication.Your referral link')); ?></h3>
                                    <p><?php echo e(__('communication.Share the referral link with your friends.')); ?></p>
                                </div>
                                <div class="input-group mb-20">
                                    <input readonly type="text" class="form-control" id="referral_link"
                                           value="<?php echo e(route('referralCode',Auth::user()->referral)); ?>">
                                    <div class="input-group-text">
                                        <button onclick="copyCurrentUrl();"
                                                class="primary-btn fix-gr-bg custom_append_group_btn"
                                                type="button"><?php echo e(__('communication.Copy Link')); ?></button>
                                    </div>
                                </div>
                            </div>

                        </div>

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
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('communication.Your referral list')); ?></h3>
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
                                        <th scope="col"><?php echo e(__('common.User')); ?></th>
                                        <th scope="col"><?php echo e(__('payment.Discount Amount')); ?></th>
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

            <input type="hidden" value="<?php echo e(route('users.my_referral.datatable')); ?>" id="referral_history_route">

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/daterangepicker.min.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/common/date_range_init.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/my_panel/referral_history.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_referral\index.blade.php ENDPATH**/ ?>