<?php
    $tz = isset($userTimeZone) ? $userTimeZone : Settings('active_time_zone');
?>

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
                <?php echo e($key + 1); ?>. <a data-bs-toggle="modal" id="" data-bs-target="#showDetail<?php echo e($scheduleInfo['id']); ?>"
                                   href="#" class="primary-btn small icon-only" data-modal-size="modal-md">
                    <span class="ti-eye selected" id=""></span>
                </a> <br>
            </div>

            <div class="modal fade admin-query" id="showDetail<?php echo e($scheduleInfo['id']); ?>">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Schedule</h4>
                            <button type="button" class="close " data-bs-dismiss="modal">
                                <i class="ti-close "></i>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <?php echo e(\Carbon\Carbon::parse($date->format('Y-m-d') . ' ' . $scheduleInfo['start_time'])->setTimeZone($tz)->format('h:i A')); ?>

                                    -
                                    <?php echo e(\Carbon\Carbon::parse($date->format('Y-m-d') . ' ' . $scheduleInfo['end_time'])->setTimeZone($tz)->format('h:i A')); ?>


                                    <p> <?php echo e($scheduleInfo['category']); ?>

                                        <?php echo e($scheduleInfo['subCategory'] ? '(' . $scheduleInfo['subCategory'] . ')' : ''); ?>

                                    </p>
                                    <p> <?php echo e(__('common.Instructor')); ?> :
                                        <?php echo e($scheduleInfo['instructor']); ?></p>
                                    <p><?php echo e(__('appointment.Link')); ?> :
                                        <a href="<?php echo e($scheduleInfo['share_link']); ?>">Link</a>
                                        <?php echo e($scheduleInfo['share_link']); ?>

                                    </p>
                                    <p> <?php echo e(__('common.Note')); ?> :
                                        <?php echo e($scheduleInfo['note']); ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_myAppointment_calendar_body.blade.php ENDPATH**/ ?>