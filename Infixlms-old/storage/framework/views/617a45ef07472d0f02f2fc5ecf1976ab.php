<input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">

<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title') ? Settings('site_title') : 'Infix LMS'); ?> |
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(routeIs('myAppointment')): ?>
        <?php echo e(__('appointment.My Appointment')); ?>

    <?php elseif(routeIs('myClasses')): ?>
        <?php echo e(__('courses.Live Class')); ?>

    <?php elseif(routeIs('myQuizzes')): ?>
        <?php echo e(__('courses.My Quizzes')); ?>

    <?php else: ?>
        <?php echo e(__('courses.My Courses')); ?>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css')); ?><?php echo e(assetVersion()); ?>"/>
    <style>
        .selected {
            cursor: pointer;
            padding: 15px;
            border: red;
            color: #fb1159;
            font-size: 25px;
        }

        #calendar_body .modal-content {
            text-align: left;
        }

        #calendar_body .modal-content .table th {
            width: 20%;
        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.preWeekSchedule', function (e) {
                e.preventDefault();
                $('#pre_loader').removeClass('d-none');
                let next_date = '';
                let pre_date = $("#pre_date").val();
                let last_date_of_week = moment(pre_date).subtract(1, 'd').format('YYYY-MM-DD');
                let first_date_of_week = moment(pre_date).subtract(7, 'd').format('YYYY-MM-DD');
                let weeknumber = moment(first_date_of_week, "YYYY-MM-DD").week();
                changeWeek(next_date, pre_date, first_date_of_week, last_date_of_week, weeknumber);

            })
            $(document).on('click', '.nextWeekSchedule', function (e) {
                e.preventDefault();
                $('#pre_loader').removeClass('d-none');
                let next_date = $("#next_date").val();
                let pre_date = '';
                let first_date_of_week = moment(next_date).add(1, 'd').format('YYYY-MM-DD');
                let last_date_of_week = moment(next_date).add(7, 'd').format('YYYY-MM-DD');
                let weeknumber = moment(first_date_of_week, "YYYY-MM-DD").week();
                let weekNumber = weeknumber - 1;
                changeWeek(next_date, pre_date, first_date_of_week, last_date_of_week, weeknumber);
                console.log(next_date);

            })

            function changeWeek(next_date, pre_date, first_date_of_week, last_date_of_week, weeknumber) {

                var url = $("#url").val();

                let timeZone = $('#changeTimeZone').val();

                let instructor = 1;
                var formData = {
                    instructor: instructor,
                    next_date: next_date,
                    pre_date: pre_date,
                    timeZone: timeZone,
                };
                console.log(formData);
                $('#calendar_body').html('');
                $('#calender_pre_loader').removeClass('d-none');
                $.ajax({
                    type: "get",
                    data: formData,
                    dataType: "html",
                    url: url + '/appointment/timezone/change-calendar',
                    success: function (data) {
                        $('#calendarChanges').html(data);
                    },
                    error: function (data) {

                    }

                });
                $.ajax({
                    type: "get",
                    data: formData,
                    dataType: "html",
                    url: url + '/change-calendar',


                    success: function (data) {

                        $('#calendar_body').html(data);
                        $('#weeknumber').html(weeknumber);
                        $("#pre_date").val(first_date_of_week);
                        $("#next_date").val(last_date_of_week);
                        $('#calender_pre_loader').addClass('d-none');

                    },

                    error: function (data) {

                    }

                });


            }

        })
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginal72416059d369a83b2bb8ece4ce3bfec2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal72416059d369a83b2bb8ece4ce3bfec2 = $attributes; } ?>
<?php $component = App\View\Components\AppointmentMyAppointmentPageSection::resolve(['request' => $request] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment-my-appointment-page-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppointmentMyAppointmentPageSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal72416059d369a83b2bb8ece4ce3bfec2)): ?>
<?php $attributes = $__attributesOriginal72416059d369a83b2bb8ece4ce3bfec2; ?>
<?php unset($__attributesOriginal72416059d369a83b2bb8ece4ce3bfec2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal72416059d369a83b2bb8ece4ce3bfec2)): ?>
<?php $component = $__componentOriginal72416059d369a83b2bb8ece4ce3bfec2; ?>
<?php unset($__componentOriginal72416059d369a83b2bb8ece4ce3bfec2); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_myAppointment.blade.php ENDPATH**/ ?>