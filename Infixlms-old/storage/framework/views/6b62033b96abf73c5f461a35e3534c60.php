<ul class="list-group list-group-flush">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $user->userExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-1"><?php echo e($experience->title); ?></h4>
                <p class="text-muted"><?php echo e($experience->company_name); ?></p>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($experience->duration()): ?>
                    <small class="text-muted"><?php echo e(showDate($experience->start_date)); ?>

                        - <?php echo e($experience->currently_working?'Present':showDate($experience->end_date)); ?>

                        [ <?php echo e($experience->duration()); ?> ]</small>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a data-id="<?php echo e($experience->id); ?>" href="javascript:void(0);"
                   class="primary-btn fix-gr-bg edit_experience_btn"><?php echo e(__('common.Edit')); ?></a>
                <a href="<?php echo e(route('users.experiences.destroy',$experience->id)); ?>"
                   class="primary-btn fix-gr-bg delete_item"><?php echo e(__('common.Delete')); ?></a>
            </div>

        </li>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php echo $__env->make('backend.profile._empty_data_msg', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

</ul>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\experience\list.blade.php ENDPATH**/ ?>