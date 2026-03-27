<div>
    <div class="quiz__details">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-12">


                            <div class="quiz_score_wrapper mb_30">
                                <!-- quiz_test_header  -->
                                <div class="quiz_test_header">
                                    <h3><?php echo e(__('student.Your Exam Score')); ?></h3>
                                </div>
                                <!-- quiz_test_body  -->
                                <div class="quiz_test_body">
                                    <h3><?php echo e(__('student.Congratulations! You’ve completed')); ?> <?php echo e($course->quiz->title); ?></h3>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($quiz->publish==1): ?>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="score_view_wrapper">
                                                        <div class="single_score_view">
                                                            <p><?php echo e(__('student.Exam Score')); ?>:</p>
                                                            <ul>
                                                                <li class="mb_15">
                                                                    <label class="primary_checkbox2 d-flex">
                                                                        <input checked="" type="checkbox" disabled>
                                                                        <span class="checkmark mr_10"></span>
                                                                        <span
                                                                            class="label_name"><?php echo e($result['totalCorrect']); ?> <?php echo e(__('student.Correct Answer')); ?></span>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="primary_checkbox2 error_ans d-flex">
                                                                        <input checked="" name="qus" type="checkbox"
                                                                               disabled>
                                                                        <span class="checkmark mr_10"></span>
                                                                        <span
                                                                            class="label_name"><?php echo e($result['totalWrong']); ?> <?php echo e(__('student.Wrong Answer')); ?></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="single_score_view d-flex">
                                                            <div class="row">
                                                                <div class="col md-2">
                                                                    <p><?php echo e(__('frontend.Start')); ?></p>
                                                                    <span> <?php echo e($result['start_at']); ?> </span>
                                                                </div>

                                                                <div class="col md-2">
                                                                    <p><?php echo e(__('frontend.Finish')); ?></p>
                                                                    <span> <?php echo e($result['end_at']); ?>      </span>
                                                                </div>

                                                                <div class="col md-2">
                                                                    <p><?php echo e(__('frontend.Duration')); ?>

                                                                        (<?php echo e(__('frontend.Minute')); ?>)</p>
                                                                    <h4 class="f_w_700 "> <?php echo e($result['duration']); ?> </h4>
                                                                </div>

                                                                <div class="col md-2">
                                                                    <p><?php echo e(__('frontend.Mark')); ?></p>
                                                                    <h4 class="f_w_700 "> <?php echo e($result['score']); ?>

                                                                        /<?php echo e($result['totalScore']); ?> </h4>
                                                                </div>

                                                                <div class="col md-2">
                                                                    <p><?php echo e(__('frontend.Percentage')); ?></p>
                                                                    <h4 class="f_w_700 "> <?php echo e($result['mark']); ?>% </h4>
                                                                </div>

                                                                <div class="col md-2">
                                                                    <p><?php echo e(__('frontend.Rating')); ?></p>
                                                                    <h4 class="f_w_700 theme_text <?php echo e($result['text_color']); ?>">
                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($result['pass']): ?>
                                                                            <?php echo e(__("frontend.Pass")); ?>

                                                                        <?php else: ?>
                                                                            <?php echo e(__("frontend.Failed")); ?>

                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                    </h4>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sumit_skip_btns d-flex align-items-center">
                                            <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>"
                                               class="theme_btn   mr_20"><?php echo e(__('student.Done')); ?></a>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($preResult)!=0): ?>
                                                <button type="button"
                                                        class="theme_line_btn  showHistory  mr_20"><?php echo e(__('frontend.View History')); ?></button>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            <a href="<?php echo e($quiz->quiz->show_ans_sheet==1?route('quizResultPreview',$quiz->id):'#'); ?>"
                                               title="<?php echo e($quiz->quiz->show_ans_sheet!=1?__('quiz.Answer Sheet is currently locked by Teacher'):''); ?>"
                                               class=" font_1 font_16 f_w_600 theme_text3 submit_q_btn"><?php echo e(__('student.See Answer Sheet')); ?></a>

                                        </div>
                                    <?php else: ?>
                                        <span><?php echo e(__('quiz.Please wait till completion marking process')); ?></span>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($preResult)!=0): ?>
                                        <div id="historyDiv" class="pt-5 " style="display:none;">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th><?php echo e(__('frontend.Date')); ?></th>
                                                    <th><?php echo e(__('frontend.Mark')); ?></th>
                                                    <th><?php echo e(__('frontend.Percentage')); ?></th>
                                                    <th><?php echo e(__('frontend.Rating')); ?></th>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($quiz->quiz->show_result_each_submit==1): ?>
                                                        <th><?php echo e(__('frontend.Details')); ?></th>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </tr>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $preResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($pre['date']); ?></td>
                                                        <td><?php echo e($pre['score']); ?>/<?php echo e($pre['totalScore']); ?></td>
                                                        <td><?php echo e($pre['mark']); ?>%</td>
                                                        <td class="<?php echo e($pre['text_color']); ?>"><?php echo e($pre['status']); ?></td>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($quiz->quiz->show_result_each_submit==1): ?>
                                                            <td>
                                                                <a href="<?php echo e(route('quizResultPreview',$pre['quiz_test_id'])); ?>"
                                                                   class=" font_1 font_16 f_w_600 theme_text3 submit_q_btn"><?php echo e(__('student.See Answer Sheet')); ?></a>
                                                            </td>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </table>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\quiz-result-page-section.blade.php ENDPATH**/ ?>