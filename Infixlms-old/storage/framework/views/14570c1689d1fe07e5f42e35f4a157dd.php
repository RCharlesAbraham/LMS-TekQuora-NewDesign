<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | Calendar
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules/Calendar/Resources/assets/js/frontend/calender_js/core/main.css')); ?><?php echo e(assetVersion()); ?>">
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules/Calendar/Resources/assets/js/frontend/calender_js/daygrid/main.css')); ?><?php echo e(assetVersion()); ?>">
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules/Calendar/Resources/assets/js/frontend/calender_js/timegrid/main.css')); ?><?php echo e(assetVersion()); ?>">
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules/Calendar/Resources/assets/js/frontend/calender_js/list/main.css')); ?><?php echo e(assetVersion()); ?>">

    <link rel="stylesheet"
          href="<?php echo e(asset('Modules/Calendar/Resources/assets/css/frontend_claendar.css')); ?><?php echo e(assetVersion()); ?>">
    <style>
        .fc-event-container .fc-content .fc-title {
            padding-left: 15px;
        }

        .fc-timeGridWeek-button {
            display: none;
        }

        .fc-day-grid-event {
            padding: 10px 15px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('Modules/Calendar/Resources/assets/js')); ?>/frontend/calender_js/core/main.js"></script>
    <script src="<?php echo e(asset('Modules/Calendar/Resources/assets/js')); ?>/frontend/calender_js/daygrid/main.js"></script>
    <script src="<?php echo e(asset('Modules/Calendar/Resources/assets/js')); ?>/frontend/calender_js/timegrid/main.js"></script>
    <script src="<?php echo e(asset('Modules/Calendar/Resources/assets/js')); ?>/frontend/calender_js/interaction/main.js"></script>
    <script src="<?php echo e(asset('Modules/Calendar/Resources/assets/js')); ?>/frontend/calender_js/list/main.js"></script>

    <script>
        $(document).ready(function () {
            $('.fc-timeGridWeek-button').hide();
        });
        if ($("#calendar").length > 0) {
            document.addEventListener("DOMContentLoaded", function () {
                var calendarEl = document.getElementById("calendar");
                var today_date = document.getElementById("today_date").value;
                let data =<?php echo $calendars; ?>;

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    plugins: ["dayGrid", "timeGrid", "list", "interaction"],
                    initialView: "timeGridWeek",
                    header: {
                        left: "prev, title , next",
                        center: "dayGridMonth,timeGridWeek",
                        right: "title",
                    },
                    height: "",
                    defaultDate: today_date,
                    navLinks: true,
                    editable: false,
                    eventLimit: true,

                    events: data,


                    eventClick: function (info, event) {
                        let system_url = $('#system_url').val();
                        let selectedDateView = info.event.start;
                        var date = new Date(selectedDateView);
                        var date = date.toLocaleDateString();
                        var date = new Date(date);
                        let formatedDate = date.toDateString();

                        let new_end_date = "";
                        let formatedend_date = "";
                        if (info.event.end == null) {
                            new_end_date = info.event.start;
                        } else {
                            new_end_date = info.event.end;
                            let selectedEndDateView = new_end_date;

                            let end_date = new Date(selectedEndDateView);
                            end_date = end_date.toLocaleDateString();
                            end_date = new Date(end_date);
                            formatedend_date = " - " + end_date.toDateString();
                        }


                        $('#calendar_title').html(info.event.title);
                        $('#calendar_date_time').html(formatedDate + formatedend_date);
                        if (info.event.extendedProps.calendar_url != null) {
                            $('#calendar_link').attr('href', info.event.extendedProps.calendar_url);
                        } else {
                            $('#calendar_link').hide();
                        }
                        $('#calendar_banner').attr("src", system_url + "/" + info.event.extendedProps.banner);
                        $('.description_text').html(info.event.extendedProps.description);

                        let host_name = "";
                        if (info.event.extendedProps.course_id == null) {
                            host_name = info.event.extendedProps.event.host;
                            $('#host_title').html('<?php echo e(__('calender.Event Host')); ?>');
                            $('#host_image').attr('src', system_url + '/public/demo/user/admin.jpg');
                        } else {
                            host_name = info.event.extendedProps.course.user.name;
                            $('#host_title').html(info.event.extendedProps.course.user.role.name);
                            $('#host_image').attr('src', system_url + '/' + info.event.extendedProps.course.user.image);
                        }
                        $('#host_name').html(host_name);
                        console.log(host_name);

                        var modal = $("#lms_view_modal");
                        modal.modal();
                    },
                    dateClick: function (date, jsEvent, view) {
                    },

                });
                calendar.render();
            });
        }

    </script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginal5634c7f6f7628207039877b8c2255c0e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5634c7f6f7628207039877b8c2255c0e = $attributes; } ?>
<?php $component = App\View\Components\CalendarView::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('calendar-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CalendarView::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5634c7f6f7628207039877b8c2255c0e)): ?>
<?php $attributes = $__attributesOriginal5634c7f6f7628207039877b8c2255c0e; ?>
<?php unset($__attributesOriginal5634c7f6f7628207039877b8c2255c0e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5634c7f6f7628207039877b8c2255c0e)): ?>
<?php $component = $__componentOriginal5634c7f6f7628207039877b8c2255c0e; ?>
<?php unset($__componentOriginal5634c7f6f7628207039877b8c2255c0e); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\calendarView.blade.php ENDPATH**/ ?>