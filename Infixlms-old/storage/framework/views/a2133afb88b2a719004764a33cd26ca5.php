    <?php
    $week_number = isset($week_number) ? $week_number : $this_week;
    $start_date = date('Y-m-d', strtotime($weekDates[0]));
    $end_date = date('Y-m-d', strtotime($weekDates[6]));
    ?>
    <input type="hidden" name="user_id" id="user_id" value="<?php echo e($instructor->id); ?>">
    <input type="hidden" name="next_date" id="next_date" value="<?php echo e($end_date); ?>">
    <input type="hidden" name="pre_date" id="pre_date" value="<?php echo e($start_date); ?>">
    <input type="hidden" name="timezone" id="timezone" value="">
    <!-- tutor list details:start -->
    <main class="tutor_listing_details">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-xl-10 offset-xl-1 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <?php if ($__env->exists('appointment::frontend.inc.instructor_details')) echo $__env->make('appointment::frontend.inc.instructor_details', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <?php if ($__env->exists('appointment::frontend.inc.instructor_preview')) echo $__env->make('appointment::frontend.inc.instructor_preview', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- tutor list details:end -->

    <!-- bg-shade:start -->
    <div class="bg-shade"></div>
    <!-- bg-shade:end -->

    <!-- view full schedule modal:start -->
    <?php if ($__env->exists('appointment::frontend.inc.schedule_modal')) echo $__env->make('appointment::frontend.inc.schedule_modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- view full schedule modal:end --><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\appointment-single-instructor.blade.php ENDPATH**/ ?>