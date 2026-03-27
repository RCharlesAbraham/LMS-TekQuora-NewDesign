<div class="theme_according mb_100" id="accordion1">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <div class="card-header pink_bg" id="headingFour<?php echo e($key); ?>">
                <h5 class="mb-0">
                    <button class="btn btn-link text_white collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapseFour<?php echo e($key); ?>"
                            aria-expanded="false"
                            aria-controls="collapseFour<?php echo e($key); ?>">
                        <?php echo e($faq->question); ?>

                    </button>
                </h5>
            </div>
            <div class="collapse" id="collapseFour<?php echo e($key); ?>"
                 aria-labelledby="headingFour<?php echo e($key); ?>"
                 data-bs-parent="#accordion1">
                <div class="card-body">
                    <div class="curriculam_list">

                        <div class="curriculam_single">
                            <div class="curriculam_left">

                                <span><?php echo $faq->answer; ?></span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/frontend/infixlmstheme/snippets/components/_single_faq.blade.php ENDPATH**/ ?>