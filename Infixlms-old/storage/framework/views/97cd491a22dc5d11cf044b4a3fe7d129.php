<div>
    <style>
        .counter_area::before {
            background-image: url('<?php echo e(asset($about->image4)); ?>');
        }
    </style>
    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="counter_wrapper">
                        <div class="single_counter">
                            <h3><span class=""><?php echo e($about->total_teacher); ?></span></h3>
                            <div class="counter_content">
                                <h4><?php echo e($about->teacher_title); ?></h4>
                                <p><?php echo e($about->teacher_details); ?></p>
                            </div>
                        </div>
                        <div class="single_counter">
                            <h3><span class=""><?php echo e($about->total_student); ?></span></h3>
                            <div class="counter_content">
                                <h4><?php echo e($about->student_title); ?></h4>
                                <p><?php echo e($about->student_details); ?></p>
                            </div>
                        </div>
                        <div class="single_counter">
                            <h3><span class=""><?php echo e($about->total_courses); ?></span></h3>
                            <div class="counter_content">
                                <h4><?php echo e($about->student_title); ?></h4>
                                <p><?php echo e($about->student_details); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\about-page-counter.blade.php ENDPATH**/ ?>