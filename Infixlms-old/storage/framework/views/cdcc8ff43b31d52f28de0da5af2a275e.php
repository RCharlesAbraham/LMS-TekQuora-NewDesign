<?php
    $table_name='course_enrolleds';
?>
<?php $__env->startSection('table'); ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="white_box_tittle list_header main-title mb-0">
                            <h3 class="mb-20"><?php echo e(__('student.Filter Enroll History')); ?></h3>
                        </div>
                        <form action="<?php echo e(route('admin.enrollFilter')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="primary_input ">
                                        <label class="primary_input_label"
                                               for="courseSelect"><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Course')); ?></label>
                                    </div>
                                    <select class="primary_select" name="course" id="courseSelect">
                                        <option data-display="<?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Course')); ?>"
                                                value=""><?php echo e(__('common.Select')); ?> <?php echo e(__('courses.Course')); ?></option>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="<?php echo e($course->id); ?>" <?php echo e(isset($courseId)?$courseId==$course->id?'selected':'':''); ?>><?php echo e(@$course->title); ?> </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </select>
                                </div>

                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="primary_input mb-15">
                                        <label class="primary_input_label"
                                               for="startDate"><?php echo e(__('common.Select')); ?> <?php echo e(__('common.Start Date')); ?></label>
                                        <div class="primary_datepicker_input">
                                            <div class="g-0  input-right-icon">
                                                <div class="col">
                                                    <div class="">
                                                        <input placeholder="<?php echo e(__('common.Date')); ?>"
                                                               class="primary_input_field primary-input date form-control"
                                                               id="startDate" type="text" name="start_date"
                                                               value="<?php echo e(isset($start)?!empty($start)?date('m/d/Y', strtotime($start)):'':''); ?>"
                                                               autocomplete="off">
                                                    </div>
                                                </div>
                                                <button class="" type="button">
                                                    <i class="ti-calendar" id="start-date-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="primary_input mb-15">
                                        <label class="primary_input_label"
                                               for="admissionDate"><?php echo e(__('common.Select')); ?> <?php echo e(__('common.End Date')); ?></label>
                                        <div class="primary_datepicker_input">
                                            <div class="g-0  input-right-icon">
                                                <div class="col">
                                                    <div class="">
                                                        <input placeholder="<?php echo e(__('common.Date')); ?>"
                                                               class="primary_input_field primary-input date form-control"
                                                               id="admissionDate" type="text" name="end_date"
                                                               value="<?php echo e(isset($end)?!empty($end)?date('m/d/Y', strtotime($end)):'':''); ?>"
                                                               autocomplete="off">
                                                    </div>
                                                </div>
                                                <button class="" type="button">
                                                    <i class="ti-calendar" id="admission-date-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4 col-lg-4">
                                    <div class="search_course_btn text-center">
                                        <button type="submit"
                                                class="primary-btn radius_30px  fix-gr-bg"><?php echo e(__('common.Filter History')); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="box_header common_table_header">
                                    <div class="main-title d-md-flex">
                                        <h3 class="mb-15 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('student.Enrolled Student')); ?> <?php echo e(__('common.List')); ?></h3>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="QA_section QA_section_heading_custom check_box_table">
                                    <div class="QA_table ">

                                        <div class="">
                                            <table id="lms_table" class="table Crm_table_active3">
                                                <thead>
                                                <tr>
                                                    <th scope="col"><?php echo e(__('common.SL')); ?> </th>
                                                    <th scope="col"><?php echo e(__('common.Image')); ?> </th>
                                                    <th scope="col"><?php echo e(__('common.Name')); ?> </th>
                                                    <th scope="col"><?php echo e(__('common.Email Address')); ?> </th>
                                                    <th scope="col"><?php echo e(__('courses.Courses')); ?> <?php echo e(__('courses.Enrolled')); ?></th>
                                                    <th scope="col"><?php echo e(__('common.Price')); ?></th>
                                                    <th scope="col"><?php echo e(__('courses.Enrollment')); ?> <?php echo e(__('common.Date')); ?> </th>
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
                    </div>
                </div>
                <!-- Add Modal Item_Details -->
            </div>
        </div>
    </section>
    <div class="modal fade admin-query" id="confirm_refund_delete">
        <div class="modal-dialog modal-dialog-centered modal_650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e(__('common.Refund Confirmation')); ?> </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <div class="modal-body">
                    <p class="text-center">
                        <?php echo e(__('common.Student can not access course anymore')); ?>.
                    </p>
                    <p class="text-center">
                        <?php echo e(__('common.But also refund money to student')); ?>

                    </p>
                    <form action="<?php echo e(route('admin.enrollDelete')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="comment"><?php echo e(__('frontend.Reason')); ?> <strong
                                        class="text-danger">*</strong> </label>

                                <textarea required id="my-textarea" class="primary_input_field"
                                          name="reason" style="height: 200px"
                                          rows="3"><?php echo e(old('reason')); ?></textarea>
                            </div>
                            <span id="error_comment" class="text-danger error_msg"></span>
                        </div>
                        <input type="hidden" name="refund" value="1">
                        <input type="hidden" name="id" value="" id="itemId">
                        <div class="mt-40 d-flex justify-content-between">
                            <button type="button" class="primary-btn tr-bg"
                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                            <button class="primary-btn fix-gr-bg"><?php echo e(__('common.Refund')); ?></button>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade admin-query" id="confirm_cancel_delete">
        <div class="modal-dialog modal-dialog-centered modal_650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> <?php echo e(__('common.Cancel Confirmation')); ?> </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <div class="modal-body">
                    <p class="text-center">
                        <?php echo e(__('common.Student can not access course anymore')); ?>.
                    </p>
                    <p class="text-center">
                        <?php echo e(__('common.But not refund money to student')); ?>

                    </p>
                    <form action="<?php echo e(route('admin.enrollDelete')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="col-xl-12">
                            <div class="primary_input mb-25">
                                <label class="primary_input_label"
                                       for="comment"><?php echo e(__('frontend.Reason')); ?> <strong
                                        class="text-danger">*</strong> </label>

                                <textarea required id="my-textarea" class="primary_input_field"
                                          name="reason" style="height: 200px"
                                          rows="3"><?php echo e(old('reason')); ?></textarea>
                            </div>
                            <span id="error_comment" class="text-danger error_msg"></span>
                        </div>
                        <input type="hidden" name="id" value="" id="cancelItemId">
                        <div class="mt-40 d-flex justify-content-between">
                            <button type="button" class="primary-btn tr-bg"
                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                            <button class="primary-btn fix-gr-bg"><?php echo e(__('common.Delete')); ?></button>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade admin-query" id="confirm_generate_certificate">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> <?php echo e(__('certificate.Generate Certificate')); ?> </h4>
                    <button type="button" class="close" data-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <div class="modal-body">
                    <p class="text-center">
                        <?php echo e(__('certificate.Generate Certificate for student')); ?>.
                    </p>
                    <form action="<?php echo e(route('admin.generateCertificate')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="" id="generate_certificate_id">
                        <div class="mt-40 d-flex justify-content-between">
                            <button type="button" class="primary-btn tr-bg"
                                    data-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                            <button class="primary-btn fix-gr-bg"><?php echo e(__('common.Confirm')); ?></button>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade admin-query" id="confirm_remove_certificate">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> <?php echo e(__('certificate.Remove Certificate')); ?> </h4>
                    <button type="button" class="close" data-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <div class="modal-body">
                    <p class="text-center">
                        <?php echo e(__('certificate.Remove Certificate from student')); ?>.
                    </p>
                    <form action="<?php echo e(route('admin.removeCertificate')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="id" value="" id="cancel_certificate_id">
                        <div class="mt-40 d-flex justify-content-between">
                            <button type="button" class="primary-btn tr-bg"
                                    data-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>

                            <button class="primary-btn fix-gr-bg"><?php echo e(__('common.Confirm')); ?></button>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

    <?php
        $url =route('admin.getEnrollLogsData').'?course='.$courseId.'&start_date='.$start.'&end_date='.$end;
    ?>

    <script>
        function confirm_generate_certificate_modal(id) {
            $('#generate_certificate_id').val(id);
            jQuery('#confirm_generate_certificate').modal('show', {backdrop: 'static'});
        }

        function confirm_remove_certificate_modal(id) {
            $('#cancel_certificate_id').val(id);
            jQuery('#confirm_remove_certificate').modal('show', {backdrop: 'static'});
        }

        function confirm_refund_modal(id) {
            $('#confirm_refund_delete #itemId').val(id);
            jQuery('#confirm_refund_delete').modal('show', {backdrop: 'static'});
        }

        function confirm_cancel_modal(id) {
            $('#confirm_cancel_delete #cancelItemId').val(id);
            jQuery('#confirm_cancel_delete').modal('show', {backdrop: 'static'});
        }
    </script>
    <script>

        dataTableOptions.serverSide = true
        dataTableOptions.processing = true
        dataTableOptions.ajax = '<?php echo $url; ?>';
        dataTableOptions.columns = [
            {data: 'DT_RowIndex', name: 'id'},
            {data: 'image', name: 'image', orderable: false},
            {data: 'user.name', name: 'user.name'},
            {data: 'user.email', name: 'user.email'},
            {data: 'course.title', name: 'course.title'},
            {data: 'purchase_price', name: 'purchase_price'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false},
        ]

        let table = $('#lms_table').DataTable(dataTableOptions);


    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\student\enroll_student.blade.php ENDPATH**/ ?>