<div>
    <div class="quiz__details">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-12">

                            <div class="result_sheet_wrapper mb_30">
                                <!-- quiz_test_header  -->
                                <div class="quiz_test_header">
                                    <h3><?php echo e(__('student.Result Sheet')); ?></h3>
                                </div>
                                <!-- quiz_test_body  -->
                                <div class="quiz_test_body">
                                    <div class="result_sheet_view">
                                        <?php
                                            $count=1;
                                        ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($questions)): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    if ($quiz->show_only_wrong_ans_in_ans_sheet==1 && !$question['isWrong'] && $quiz->total_correct_ans!=count($questions) ){
                                                       continue;
                                                    }
                                                ?>

                                                <div class="single_result_view">
                                                    <p><?php echo e(__('frontend.Question')); ?>: <?php echo e($count); ?></p>
                                                    <h4><?php echo @$question['qus']; ?>

                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$question['isSubmit']): ?>

                                                            <small class="text-danger">
                                                                (<?php echo e(!$question['isSubmit']?trans('quiz.Not Submitted'):''); ?>

                                                                )
                                                            </small>

                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </h4>
                                                    <div class="row">
                                                        <div class="col-lg-6">

                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($question['type']=="M"): ?>
                                                                <ul>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($question['option'])): ?>
                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $question['option']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php
                                                                                $showRightAns =true;
                                                                               if ($quiz->show_correct_ans_in_ans_sheet!=1){
                                                                                   if(isset($option['submit']) && $option['submit']){
                                                                                       $showRightAns=true;
                                                                                   }else{
                                                                                       $showRightAns=false;
                                                                                   }
                                                                               }

                                                                            ?>
                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($option['right'] && $showRightAns): ?>
                                                                                <li>
                                                                                    <label
                                                                                        class="primary_checkbox2 d-flex">
                                                                                        <input checked=""
                                                                                               type="checkbox"
                                                                                               disabled>
                                                                                        <span
                                                                                            class="checkmark mr_10"></span>
                                                                                        <span
                                                                                            class="label_name "><?php echo e($option['title']); ?></span>
                                                                                    </label>
                                                                                </li>

                                                                            <?php else: ?>

                                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($option['wrong']) && $option['wrong']): ?>
                                                                                    <li>
                                                                                        <label
                                                                                            class="primary_checkbox2 error_ans  d-flex">
                                                                                            <input checked=""
                                                                                                   type="checkbox"
                                                                                                   disabled>
                                                                                            <span
                                                                                                class="checkmark mr_10"></span>
                                                                                            <span
                                                                                                class="label_name "><?php echo e($option['title']); ?> </span>
                                                                                        </label>
                                                                                    </li>
                                                                                <?php else: ?>
                                                                                    <li>
                                                                                        <label
                                                                                            class="primary_checkbox2 d-flex">
                                                                                            <input type="checkbox"
                                                                                                   disabled>
                                                                                            <span
                                                                                                class="checkmark mr_10"></span>
                                                                                            <span
                                                                                                class="label_name "><?php echo e($option['title']); ?></span>
                                                                                        </label>
                                                                                    </li>
                                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                </ul>
                                                            <?php elseif($question['type']=="X"): ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($question['qusBank'])): ?>
                                                                    <?php
                                                                        $qusBank=     $question['qusBank']
                                                                    ?>
                                                                    <?php echo $__env->make(theme('partials._quiz_matching_type_preview'),compact('qusBank'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            <?php else: ?>
                                                                <?php echo $question['answer']??""; ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="marking_img">
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($question['isSubmit'])): ?>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($question['isWrong']) &&  $question['isWrong']): ?>
                                                                        <img
                                                                            src="<?php echo e(asset('public/frontend/infixlmstheme/img/course_details/wrong.png')); ?>"
                                                                            alt="">
                                                                    <?php else: ?>
                                                                        <img
                                                                            src="<?php echo e(asset('public/frontend/infixlmstheme/img/course_details/correct.png')); ?>"
                                                                            alt="">
                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                <?php else: ?>
                                                                    <img
                                                                        src="<?php echo e(asset('public/frontend/infixlmstheme/img/course_details/wrong.png')); ?>"
                                                                        alt="">
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                    $count++;
                                                ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\quiz-result-preview-page-section.blade.php ENDPATH**/ ?>