<div class="main_content_iner main_content_padding">

    <?php
        $week_number = isset($week_number) ? $week_number : $this_week;
        $start_date = date('Y-m-d', strtotime($weekDates[0]));
        $end_date = date('Y-m-d', strtotime($weekDates[6]));
    ?>
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div class="section__title3 mb_40">
                        <h3 class="mb-0">
                            <?php echo e(__('appointment.Schedule')); ?>

                        </h3>
                    </div>
                </div>

                <div class="col-12">
                    <div class="view_full_shedule_inner p-0">
                        <div class="view_full_shedule_inner_calendar">
                            <div class="view_full_shedule_inner_calendar_header">
                                <div class="d-flex align-items-center" id="calendarChanges">
                                    <button id='icon' class="preWeekSchedule me-1"
                                        <?php echo e(date('Y-m-d', strtotime($weekDates[0])) < \Carbon\Carbon::now()->format('Y-m-d') ? 'disabled' : ''); ?>>
                                        <i
                                            class="fa fa-angle-left"></i></button>
                                    <button id='icon' class="nextWeekSchedule"><i
                                            class="fa fa-angle-right"></i></button>
                                    <span class='text-primary-2 font-weight-semibold ms-4' id="schedule_date">
                                        <?php echo e(date('F j', strtotime($weekDates[0])) . ' - ' . date('F j', strtotime($weekDates[6])) . ' , ' . date('Y', strtotime($weekDates[0]))); ?>

                                    </span>
                                </div>

                            </div>

                            <div class="schedule_loader d-none" id="calender_pre_loader">
                                <div class="row position-relative text-center">
                                    <div class="course-preloader ">
                                        <i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="view_full_shedule_inner_calendar_body" id="calendar_body">


                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $periods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div id="calender_date">
                                        <?php
                                            $bookingList = \Modules\Appointment\Entities\Booking::bookingList($date, auth()->user());
                                        ?>
                                        <div id="header" <?php echo e(count($bookingList) == 0 ? 'event-offday' : ''); ?>>
                                            <span><?php echo e($date->format('l')); ?></span>
                                            <h4><?php echo e($date->format('d')); ?></h4>
                                        </div>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $bookingList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $scheduleInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $tz = $scheduleInfo->timezone ?? Settings('active_time_zone');
                                            ?>
                                            <div id="event_date" class="selected m-1">

                                                <?php echo e($key+1); ?>. <a data-bs-toggle="modal" id=""
                                                                 data-bs-target="#showDetail<?php echo e($scheduleInfo['id']); ?>"
                                                                 href="#"
                                                                 class="primary-btn small icon-only"
                                                                 data-bs-modal-size="modal-md">
                                                    <span class="ti-eye selected" id=""></span>
                                                </a> <br>


                                            </div>

                                            <div class="modal fade admin-query"
                                                 id="showDetail<?php echo e($scheduleInfo['id']); ?>">
                                                <div class="modal-dialog  modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4><?php echo e(__('frontend.Schedule')); ?></h4>
                                                            <button type="button" class="close "
                                                                    data-bs-dismiss="modal">
                                                                <i class="ti-close "></i>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="pb-3">
                                                                        <table class="table table-striped">
                                                                            <tr>
                                                                                <th>
                                                                                    <?php echo e(__('common.Time')); ?>

                                                                                </th>
                                                                                <td>
                                                                                    <?php echo e(\Carbon\Carbon::parse($date->format('Y-m-d') . ' ' . $scheduleInfo['start_time'])->setTimeZone($tz)->format('h:i A')); ?>

                                                                                    -
                                                                                    <?php echo e(\Carbon\Carbon::parse($date->format('Y-m-d') . ' ' . $scheduleInfo['end_time'])->setTimeZone($tz)->format('h:i A')); ?>

                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>
                                                                                    <?php echo e(__('common.Category')); ?>

                                                                                </th>
                                                                                <td>
                                                                                    <?php echo e($scheduleInfo['category']); ?>

                                                                                    <?php echo e($scheduleInfo['subCategory'] ? '(' . $scheduleInfo['subCategory'] . ')' : ''); ?>

                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th> <?php echo e(__('common.Instructor')); ?></th>
                                                                                <td> <?php echo e($scheduleInfo['instructor']); ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th><?php echo e(__('appointment.Link')); ?></th>
                                                                                <td>
                                                                                    <a href="<?php echo e($scheduleInfo['share_link']??"#"); ?>"><?php echo e(__('common.Link')); ?></a>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th><?php echo e(__('common.Note')); ?></th>
                                                                                <td>
                                                                                    <?php echo e($scheduleInfo['note']); ?>

                                                                                </td>
                                                                            </tr>
                                                                        </table>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </div>

                            <div class="view_full_shedule_inner_calendar_bottom d-none">
                                <p><?php echo e(__('appointment.The calendar is in your time zone')); ?> </p>
                                <a href="#" class="theme_btn"><?php echo e(__('appointment.Confirm time')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\appointment-my-appointment-page-section.blade.php ENDPATH**/ ?>