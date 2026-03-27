<div class="tab-pane fade" id="skills_tab">
    <div class="row">
        <div class="col-12">

           <div class="d-flex justify-content-between align-items-center">
               <h3><?php echo e(__('profile.skills')); ?></h3>
               <a href="javascript:void(0)" class="primary-btn fix-gr-bg add_skills_btn"><?php echo e(__('profile.add_or_update_skills')); ?></a>
           </div>
            <hr>
            <div class="skills_list">
               <?php echo $__env->make('backend.profile.skills.list', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_skills_tab.blade.php ENDPATH**/ ?>