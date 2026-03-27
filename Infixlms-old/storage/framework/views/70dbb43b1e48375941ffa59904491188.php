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


                                <div class="col-lg-3 mb-3">
                                    <label class="primary_input_label" for="f_type"><?php echo e(__('common.Type')); ?></label>
                                    <select class="primary_select" name="f_type" id="f_type">
                                        <option value=""><?php echo e(__('common.Select One')); ?></option>
                                        <option value="1"><?php echo e(trans('courses.Course')); ?></option>
                                        <option value="2"><?php echo e(trans('courses.Quiz')); ?></option>
                                        <option value="3"><?php echo e(trans('courses.Virtual Class')); ?></option>
                                    </select>
                                </div>

                                <div class="col-lg-3">
                                    <label class="primary_input_label"
                                           for="f_category"><?php echo e(__('courses.Category')); ?></label>
                                    <select class="primary_select" name="f_category" id="f_category">
                                        <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Category')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Category')); ?></option>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($category->parent_id==0): ?>
                                                <?php echo $__env->make('backend.categories._single_select_option',['category'=>$category,'level'=>1], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </select>
                                </div>

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
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"> <?php echo e(trans('courses.My Topics')); ?></h3>
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
                                        <th scope="col"><?php echo e(__('common.Title')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Type')); ?></th>
                                        <th scope="col"><?php echo e(__('courses.Curriculum')); ?></th>
                                        <th scope="col"><?php echo e(__('courses.Enroll Date')); ?></th>
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

            <input type="hidden" value="<?php echo e(route('users.my_topics.datatable')); ?>" id="my_topics_route">
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
            url: $('#my_topics_route').val(),
            data: function (d) {
                d.f_type = $('#f_type').val();
                d.f_category = $('#f_category').val();
                d.f_date = $('.date_range_input').val()
            }
        };

        dataTableOptions.columns = [
            {data: 'DT_RowIndex', name: 'id'},
            {data: 'topic_title', name: 'course.title'},
            {data: 'topic_type', name: 'course.type'},
            {data: 'curriculum', name: 'curriculum', orderable: false, searchable: false},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        let table = $('#lms_table').DataTable(dataTableOptions);
        (function ($) {
            "use strict";
            $(document).ready(function () {


                $(document).on('change', '#f_type, #f_category', function (event) {
                    event.preventDefault();
                    resetAfterChange();
                });

                $(document).on('click', '.reset_btn', function (event) {
                    event.preventDefault();
                    $('#f_type').val('').niceSelect('update');
                    $('#f_category').val('').niceSelect('update');
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

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_topics\index.blade.php ENDPATH**/ ?>