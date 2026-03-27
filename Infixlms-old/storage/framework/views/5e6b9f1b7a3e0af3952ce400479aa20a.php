<div>
    <?php
        if ($quiz->random_question==1){
        $questions =$quiz->assignRand;
        }else{
        $questions =$quiz->assign;
        }
      $losing_count =$quiz->losing_focus_acceptance_number;
      $question_time_type =$quiz->question_time_type;
      $losing_type =$quiz->losing_type;
    ?>
    <input type="hidden" name="quiz_assign" class="quiz_assign" value="<?php echo e(count($questions)); ?>">
    <input type="hidden" name="" class="losing_count" value="<?php echo e($losing_count); ?>">
    <input type="hidden" name="" class="question_time_type" value="<?php echo e($question_time_type); ?>">
    <input type="hidden" name="" class="losing_question_time_type" value="<?php echo e($losing_type); ?>">
    <input type="hidden" name="" class="losing_count_message" value="<?php echo e(trans('quiz.times you have been out of quiz')); ?>">
    <input type="hidden" name="" class="losing_message"
           value="<?php echo e(trans('quiz.times you have been out of quiz').' '.trans('quiz.Your answer has been submitted')); ?>">

    <div class="quiz__details">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="quiz_questions_wrapper mb_30">
                                <!-- quiz_test_header  -->

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($alreadyJoin!=0 && $quiz->multiple_attend==0): ?>
                                    <div class="quiz_test_header d-flex justify-content-between align-items-center">
                                        <div class="quiz_header_left text-center">
                                            <h3><?php echo e(__('frontend.Sorry! You already attempted this quiz')); ?></h3>
                                        </div>


                                    </div>
                                <?php else: ?>
                                    <div class="quiz_test_header d-flex justify-content-between align-items-center">
                                        <div class="quiz_header_left">
                                            <h3><?php echo e($quiz->title); ?></h3>
                                        </div>

                                        <div class="quiz_header_right">

                                            <span class="question_time">
                                <?php
                                    $timer =0;
                                        if (!empty($course->duration)){
                                            $timer =$course->duration;
                                        }else{
                                            if(!empty($quiz->question_time_type==1)){
                                            $timer=$quiz->question_time;
                                        }else{
                                           $timer= $quiz->question_time*count($questions);
                                        }
                                        }

                                ?>

                                                <span id="timer"><?php echo e($timer); ?>:00</span>
                                                <?php echo e(__('quiz.Min')); ?></span>
                                            <p><?php echo e(__('student.Left of this Section')); ?></p>
                                        </div>
                                    </div>
                                    <!-- quiz_test_body  -->
                                    <form action="<?php echo e(route('quizSubmit')); ?>" method="POST" id="quizForm">
                                        <input type="hidden" name="quizType" value="2">
                                        <input type="hidden" name="courseId" value="<?php echo e($course->id); ?>">
                                        <input type="hidden" name="quizId" value="<?php echo e($quiz->id); ?>">
                                        <input type="hidden" name="question_review" id="question_review"
                                               value="<?php echo e($quiz->question_review); ?>">
                                        <input type="hidden" name="start_at" value="">
                                        <input type="hidden" name="quiz_test_id" value="">
                                        <input type="hidden" name="quiz_start_url"
                                               value="<?php echo e(route('quizTestStart')); ?>">
                                        <input type="hidden" name="single_quiz_submit_url"
                                               value="<?php echo e(route('singleQuizSubmit')); ?>">
                                        <input type="hidden" name="show_ans"
                                               value="<?php echo e($quiz->question_review != 1 && $quiz->show_result_each_submit == 1 ? 1 : 0); ?>">
                                        <input type="hidden" name="show_ans_success"
                                               value="<?php echo e(__('quiz.Correct Answer')); ?>">
                                        <input type="hidden" name="show_ans_failed"
                                               value="<?php echo e(__('quiz.Wrong Answer')); ?>">
                                        <?php echo csrf_field(); ?>

                                        <div class="quiz_test_body ">
                                            <div class="tabControl">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="tab-content" id="pills-tabContent">
                                                            <?php
                                                                $count = 1;
                                                            ?>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($questions)): ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php
                                                                        $options = [];
                                                                        if (isset($assign->questionBank->questionMu)) {
                                                                            $options = $assign->questionBank->questionMu;
                                                                        }

                                                                           $totalCurrentAns = count($options->where('status',1));


                                                            $qusBank =$assign->questionBank;
                                                            $already=null;
                                                            if (isset($previous)){
                                                                $already=$previous->where('qus_id',$qusBank->id)->first();
                                                            }
                                                                    ?>
                                                                    <div
                                                                        class="tab-pane fade  <?php echo e($key == 0 ? 'active show' : ''); ?> singleQuestion"
                                                                        data-qus-id="<?php echo e($assign->id); ?>"
                                                                        data-qus-type="<?php echo e($assign->questionBank->type); ?>"
                                                                        id="pills-<?php echo e($assign->id); ?>" role="tabpanel"
                                                                        aria-labelledby="pills-home-tab<?php echo e($assign->id); ?>">
                                                                        <!-- content  -->
                                                                        <div class="question_list_header">


                                                                        </div>
                                                                        <div class="multypol_qustion mb_30">
                                                                            <h4 class="font_18 f_w_700 mb-0">
                                                                                <?php echo @$assign->questionBank->question; ?></h4>
                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$quiz->show_total_correct_answer == 1): ?>
                                                                                <small>(<?php echo e(__('quiz.Choose')); ?> <span
                                                                                        class="questionAnsTotal text-danger fw-bold">
                                                                                        <?php echo e(count($options->where('status', 1))); ?></span>
                                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($options->where('status', 1)) <= 1): ?>
                                                                                        <?php echo e(__('quiz.answer')); ?>)
                                                                                    <?php else: ?>
                                                                                        <?php echo e(__('quiz.answers')); ?>)
                                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                </small>
                                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                        </div>
                                                                        <input type="hidden" class="question_type"
                                                                               name="type[<?php echo e($assign->questionBank->id); ?>]"
                                                                               value="<?php echo e(@$assign->questionBank->type); ?>">
                                                                        <input type="hidden" class="question_id"
                                                                               name="question[<?php echo e($assign->questionBank->id); ?>]"
                                                                               value="<?php echo e(@$assign->questionBank->id); ?>">

                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($assign->questionBank->type=="M"): ?>
                                                                            <ul class="quiz_select">
                                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                    <li>
                                                                                        <label
                                                                                            class="primary_bulet_checkbox d-flex">
                                                                                            <input class="quizAns"
                                                                                                   name="ans[<?php echo e($option->question_bank_id); ?>][]"
                                                                                                   type="radio"
                                                                                                   value="<?php echo e($option->id); ?>">

                                                                                            <span
                                                                                                class="checkmark mr_10"></span>
                                                                                            <span
                                                                                                class="label_name"><?php echo e($option->title); ?> </span>
                                                                                        </label>
                                                                                    </li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                            </ul>
                                                                        <?php elseif($assign->questionBank->type=="X"): ?>

                                                                            <?php echo $__env->make(theme('partials._quiz_matching_type'),compact('qusBank','already'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                                                        <?php else: ?>
                                                                            <div style="margin-bottom: 20px;">
                                                                                <textarea
                                                                                    class="textArea lms_summernote quizAns"
                                                                                    id="editor<?php echo e($assign->id); ?>"
                                                                                    cols="30" rows="10"
                                                                                    name="ans[<?php echo e($assign->questionBank->id); ?>]"></textarea>
                                                                            </div>
                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($assign->questionBank->image)): ?>
                                                                            <div class="ques_thumb mb_50">
                                                                                <img
                                                                                    src="<?php echo e(asset($assign->questionBank->image)); ?>"
                                                                                    class="img-fluid" alt="">
                                                                            </div>
                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                        <div
                                                                            class="sumit_skip_btns d-flex align-items-center mb_50">
                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($questions) != $count): ?>
                                                                                <span
                                                                                    class="theme_btn small_btn  mr_20 next"
                                                                                    data-question_id="<?php echo e($assign->questionBank->id); ?>"
                                                                                    data-assign_id="<?php echo e($assign->id); ?>"
                                                                                    data-question_type="<?php echo e($assign->questionBank->type); ?>"
                                                                                    id="next"><?php echo e(__('common.Confirm')); ?></span>
                                                                                <span
                                                                                    class=" font_1 font_16 f_w_600 theme_text3 submit_q_btn skip"
                                                                                    id="skip"><?php echo e(__('student.Skip')); ?>

                                                                                    <?php echo e(__('frontend.Question')); ?></span>
                                                                            <?php else: ?>
                                                                                <button type="button"
                                                                                        data-question_id="<?php echo e($assign->questionBank->id); ?>"
                                                                                        data-assign_id="<?php echo e($assign->id); ?>"
                                                                                        data-question_type="<?php echo e($assign->questionBank->type); ?>"
                                                                                        class="submitBtn theme_btn small_btn  mr_20">
                                                                                    <?php echo e(__('student.Submit')); ?>

                                                                                </button>
                                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                        </div>


                                                                        <!-- content::end  -->
                                                                    </div>
                                                                    <?php
                                                                        $count++;
                                                                    ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">

                                                        <?php
                                                            $count2 = 1;
                                                        ?>

                                                        <div class="question_list_header">
                                                            <div class="question_list_top">
                                                                <p><?php echo e(__('quiz.Question')); ?> <span
                                                                        id="currentNumber"><?php echo e($count2); ?></span>
                                                                    <?php echo e(__('common.out of')); ?> <?php echo e(count($questions)); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="nav question_number_lists" id="nav-tab"
                                                             role="tablist">
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($questions)): ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <a class="nav-link questionLink link_<?php echo e($assign->id); ?> <?php echo e($key2 == 0 ? 'skip_qus' : 'pouse_qus'); ?>"
                                                                       data-bs-toggle="tab"
                                                                       href="#pills-<?php echo e($assign->id); ?>"
                                                                       role="tab" aria-controls="nav-home"
                                                                       data-qus="<?php echo e($assign->id); ?>"
                                                                       aria-selected="true"><?php echo e($count2); ?></a>
                                                                    <?php
                                                                        $count2++;
                                                                    ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\quiz-start-page-section.blade.php ENDPATH**/ ?>