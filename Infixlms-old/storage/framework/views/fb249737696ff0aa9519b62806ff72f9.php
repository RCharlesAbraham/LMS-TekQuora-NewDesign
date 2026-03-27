<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title') ? Settings('site_title') : 'Infix LMS'); ?> | <?php echo e($instructor->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

    

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.rtl.css')); ?><?php echo e(assetVersion()); ?>"/>
    <?php else: ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css')); ?><?php echo e(assetVersion()); ?>"/>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
    <?php if (isset($component)) { $__componentOriginalb435506ed19cddd3b0bbe7b1c5f6cca2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb435506ed19cddd3b0bbe7b1c5f6cca2 = $attributes; } ?>
<?php $component = App\View\Components\AppointmentSingleInstructor::resolve(['slug' => $slug] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment-single-instructor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppointmentSingleInstructor::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb435506ed19cddd3b0bbe7b1c5f6cca2)): ?>
<?php $attributes = $__attributesOriginalb435506ed19cddd3b0bbe7b1c5f6cca2; ?>
<?php unset($__attributesOriginalb435506ed19cddd3b0bbe7b1c5f6cca2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb435506ed19cddd3b0bbe7b1c5f6cca2)): ?>
<?php $component = $__componentOriginalb435506ed19cddd3b0bbe7b1c5f6cca2; ?>
<?php unset($__componentOriginalb435506ed19cddd3b0bbe7b1c5f6cca2); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.13/moment-timezone-with-data.js"></script>
    <script>
        $(document).ready(function () {

            let timeZone = moment.tz.guess();
            $(document).on('change', '#changeTimeZone', function () {
                changeTimeZone();
            })
            $('#changeTimeZone').val(timeZone).niceSelect('update');

            changeTimeZone();

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

            })

            function changeWeek(next_date, pre_date, first_date_of_week, last_date_of_week, weeknumber) {

                var url = $("#url").val();

                let timeZone = $('#changeTimeZone').val();

                let instructor = "<?php echo e($instructor->slug); ?>";
                var formData = {
                    instructor: instructor,
                    next_date: next_date,
                    pre_date: pre_date,
                    timeZone: timeZone,
                };
                console.log(formData);
                $('#calender_body').html('');
                $('#calender_pre_loader').removeClass('d-none');
                $.ajax({
                    type: "get",
                    data: formData,
                    dataType: "html",
                    url: url + '/appointment/timezone/user',


                    success: function (data) {

                        $('#calender_body').html(data);
                        $('#weeknumber').html(weeknumber);
                        $("#pre_date").val(first_date_of_week);
                        $("#next_date").val(last_date_of_week);
                        $('#calender_pre_loader').addClass('d-none');

                    },

                    error: function (data) {

                    }

                });

                // change calender date period weekly

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

            }


            function changeTimeZone() {
                let timeZone = $('#changeTimeZone').val();
                let url = $("#url").val();
                let instructor = "<?php echo e($instructor->slug); ?>";
                formData = {
                    instructor: instructor,
                    timeZone: timeZone,
                }
                $.ajax({
                    type: 'get',
                    data: formData,
                    dataType: 'html',
                    url: url + '/appointment/timezone/user',
                    success: function (data) {
                        $('#calender_body').html('');
                        $('#calender_body').html(data);
                    },
                    error: function (data) {

                    }
                })
            }

            $(document).on('click', '.scheduleBook', function () {
                $(this).addClass('selected');
            })

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_single_instructor_page.blade.php ENDPATH**/ ?>