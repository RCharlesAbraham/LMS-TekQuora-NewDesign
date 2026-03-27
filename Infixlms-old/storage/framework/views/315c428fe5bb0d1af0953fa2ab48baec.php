<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/student_list.css')); ?>"/>
<?php $__env->stopPush(); ?>
<?php
    $table_name='users';
?>
<?php $__env->startSection('table'); ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="white-box">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box_header common_table_header">
                            <div class="main-title d-md-flex">
                                <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"><?php echo e(__('student.Students List')); ?></h3>

                                <ul class="d-flex">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('student.store')): ?>
                                        <li><a class="primary-btn radius_30px   fix-gr-bg"
                                               id=""
                                               href="<?php echo e(route('student.store')); ?>"><i
                                                    class="ti-plus"></i><?php echo e(__('student.Add Student')); ?></a>
                                        </li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('TeachOffline')): ?>
                                        <li><a class="primary-btn radius_30px   fix-gr-bg"
                                               href="<?php echo e(route('student_import')); ?>"><i
                                                    class="ti-plus"></i><?php echo e(__('student.Import Student')); ?></a></li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="QA_section QA_section_heading_custom check_box_table">
                            <div class="QA_table ">
                                <!-- table-responsive -->
                                <div class="">
                                    <table id="lms_table" class="table Crm_table_active3">
                                        <thead>
                                        <tr>
                                            <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Image')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Name')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Email')); ?></th>
                                            <th scope="col"><?php echo e(__('student.Phone')); ?></th>
                                            <th scope="col"><?php echo e(__('courses.Courses')); ?></th>
                                            <th scope="col"><?php echo e(__('common.gender')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Date of Birth')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Country')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Status')); ?></th>
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


                    <div class="modal fade admin-query" id="deleteStudent">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><?php echo e(__('common.Delete')); ?> <?php echo e(__('student.Student')); ?> </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                            class="ti-close "></i></button>
                                </div>

                                <div class="modal-body">
                                    <form action="<?php echo e(route('student.delete')); ?>" method="post">
                                        <?php echo csrf_field(); ?>

                                        <div class="text-center">

                                            <h4><?php echo e(__('common.Are you sure to delete ?')); ?> </h4>
                                        </div>
                                        <input type="hidden" name="id" value="" id="studentDeleteId">
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
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
        <script>
            <?php if(Session::has('type')): ?>
            <?php if(Session::get('type')=="store"): ?>
            $('#add_student').modal('show');
            <?php else: ?>
            $('#editStudent').modal('show');
            <?php endif; ?>
            <?php endif; ?>
        </script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    <?php
        $url = route('student.getAllStudentData');
    ?>

    <script>
        dataTableOptions.serverSide = true
        dataTableOptions.processing = true
        dataTableOptions.ajax = '<?php echo $url; ?>';
        dataTableOptions.columns = [
            {data: 'DT_RowIndex', name: 'id', orderable: true},
            {data: 'image', name: 'image', orderable: false},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'course_count', name: 'course_count'},
            {data: 'gender', name: 'gender'},
            {data: 'dob', name: 'dob'},
            {data: 'country', name: 'country'},
            {data: 'status', name: 'status', orderable: false},
            {data: 'action', name: 'action', orderable: false},
        ];

        dataTableOptions = updateColumnExportOption(dataTableOptions, [0, 2, 3, 4, 5, 6, 7, 8]);
        let table = $('#lms_table').DataTable(dataTableOptions);


    </script>

    <script src="<?php echo e(asset('public/backend/js/student_list.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\Modules\StudentSetting\Providers/../Resources/views/student_list.blade.php ENDPATH**/ ?>