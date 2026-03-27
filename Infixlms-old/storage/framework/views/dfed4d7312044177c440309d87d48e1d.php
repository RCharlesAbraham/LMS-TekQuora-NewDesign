<div>
    <style>
        .list-group-item2 {
            padding: 10px;
            margin: 5px;
            border: 2px solid #ccc;
        }
    </style>

    <div class="question_list d-none">

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $quiz->assign; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $qus= $assign->questionBank;
            ?>
            <div class="card" id="question<?php echo e($qus->id); ?>">
                <div class="card-header">
                    <b><?php echo e(__('quiz.Question')); ?> <?php echo e(++$key); ?></b>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo $qus->question; ?></p>
                    <a href="#" class="btn theme_btn_mini hide_show_btn"
                       data-id="<?php echo e($qus->id); ?>" data-type="check"><?php echo e(__('quiz.Check')); ?></a>
                    <a href="#" class="btn theme_btn_mini hide_show_btn"
                       data-id="<?php echo e($qus->id); ?>" data-type="hide"><?php echo e(__('quiz.Hide Answer')); ?></a>

                    <div class="answer<?php echo e($qus->id); ?> d-none list mt-4">
                        <ul class="">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $qus->questionMuInSerial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item2 list-option" id="list_option<?php echo e($option->id); ?>">
                                    <label
                                        class="primary_checkbox2 d-flex ">
                                        <input id="option<?php echo e($option->id); ?>"
                                               disabled
                                               type="checkbox">
                                        <span
                                            class="checkmark mr_10"></span>
                                        <span
                                            class="label_name"><?php echo e($option->title); ?>


                                                                           <span
                                                                               class="mr_10  ti-close text-danger d-none"></span>
                                                                           <span
                                                                               class="mr_10  ti-check text-success d-none"></span>
                                                                        </span>
                                    </label>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="card-footer answer<?php echo e($qus->id); ?> d-none ">
                    <b>
                        <?php echo e(__('quiz.Explanation')); ?>

                    </b>
                </div>
                <div class="card-body answer<?php echo e($qus->id); ?> d-none">
                    <p class="card-text">
                        <?php echo $qus->explanation; ?>

                    </p>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    </div>


    <?php echo $__env->make(theme('partials._quiz_exp_script'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\quiz-details-question-list.blade.php ENDPATH**/ ?>