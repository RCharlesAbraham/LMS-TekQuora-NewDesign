<div>
    <style>
        .pb_50 {
            padding-bottom: 50px;
        }
    </style>
    <div class="main_content_iner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="purchase_history_wrapper pb_50 pt-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('frontend.Quiz Result History')); ?></h3>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table custom_table3">
                                        <thead>
                                        <tr>
                                        <tr>
                                            <th> <?php echo e(__('common.SL')); ?> </th>
                                            <th><?php echo e(__('courses.Course')); ?></th>
                                            <th><?php echo e(__('quiz.Quiz')); ?></th>
                                            <th><?php echo e(__('common.Pass Rate')); ?></th>
                                            <th> <?php echo e(__('common.Marks')); ?> </th>
                                            <th> <?php echo e(__('common.Result')); ?> </th>
                                            <th> <?php echo e(__('common.Start At')); ?> </th>
                                            <th> <?php echo e(__('common.End At')); ?> </th>
                                            <th> <?php echo e(__('common.Duration')); ?> </th>
                                            <th> <?php echo e(__('common.Status')); ?> </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($quizzes)!=0): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td> <?php echo e(++$key); ?> </td>

                                                    <td><?php echo e($quiz->course->title); ?></td>
                                                    <td><?php echo e($quiz->quiz->title); ?></td>
                                                    <td><?php echo e($quiz->quiz->percentage); ?>%</td>
                                                    <td>
                                                        <?php
                                                            $totalCorrect = $quiz->details->where('status', 1)->sum('mark');
                                                            $totalMark = $quiz->quiz->total_marks;

                                                            echo $totalCorrect . '/' . $totalMark;
                                                        ?>
                                                    </td>


                                                    <td>
                                                        <?php
                                                            $totalCorrect = $quiz->details->where('status', 1)->sum('mark');
                                                         $totalMark = $quiz->quiz->totalMarks();

                                                        if ($totalCorrect == 0 || $totalMark==0) {
                                                             $result = 0;
                                                         } else {
                                                             $result = ($totalCorrect / $totalMark) * 100;
                                                         }
                                                         echo $result . '%';
                                                        ?>
                                                    </td>

                                                    <td><?php echo e($quiz->start_at); ?> </td>
                                                    <td><?php echo e($quiz->end_at); ?> </td>
                                                    <td><?php echo e($quiz->duration.' '.trans('common.Min')); ?> </td>

                                                    <td>
                                                        <?php
                                                            if ($quiz->pass == 1) {
                                                                    echo trans('common.Pass');
                                                                } else {
                                                                    echo trans('common.Fail');
                                                                }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="8">
                                                    <p class="text-center">
                                                        <?php echo e(__('student.No Course Purchased Yet')); ?>!
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                        </tbody>
                                    </table>
                                    <div class="mt-4">
                                        <?php echo e($quizzes->links()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-report-quiz-page-section.blade.php ENDPATH**/ ?>