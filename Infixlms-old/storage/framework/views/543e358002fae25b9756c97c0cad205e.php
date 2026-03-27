<div class="tab-pane fade" id="experience_tab">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex align-items-center justify-content-between flex-grow-1">
                    <h3><?php echo e(__('profile.experience')); ?></h3>
                    <label data-bs-toggle="tooltip" data-placement="top" title="<?php echo e($show_experience_tooltip); ?>"
                           for="autoNext1" class="switch_toggle me-2">
                        <input value="<?php echo e($show_experience?0:1); ?>" class="hide_show_tab" data-filed="show_experience"
                               type="checkbox" id="autoNext1" <?php echo e($show_experience?'checked':""); ?>>
                        <i class="slider round"></i>
                    </label>
                </div>

                <div class="d-flex align-items-center">


                    <a href="javascript:void(0)"
                       class="primary-btn fix-gr-bg add_experience_btn"><?php echo e(__('profile.add_experience')); ?></a>
                </div>

            </div>
            <hr>
            <div id="experience_list">
                <?php echo $__env->make('backend.profile.experience.list', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_experience_tab.blade.php ENDPATH**/ ?>