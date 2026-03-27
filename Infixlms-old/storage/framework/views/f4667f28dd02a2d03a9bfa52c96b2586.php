<div class="dropdown CRM_dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button"
            id="dropdownMenu2" data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
        <?php echo e(trans('common.Action')); ?>

    </button>
    <div class="dropdown-menu dropdown-menu-right"
         aria-labelledby="dropdownMenu2">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('student.secretLogin')): ?>
            <a class="dropdown-item" href="<?php echo e(route('secretLogin', $query->id)); ?>"
               type="button"><?php echo e(trans('common.Secret Login')); ?></a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <a class="dropdown-item"
           href="<?php echo e(route('student.show', $query->id)); ?>">
            <?php echo e(trans('common.Show')); ?></a>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('student.update')): ?>
            <a
                href="<?php echo e(route('student.edit',$query->id)); ?>"
                class="dropdown-item "
                type="button"><?php echo e(trans('common.Edit')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('student.delete')): ?>
            <button class="dropdown-item deleteStudent"
                    data-id="<?php echo e($query->id); ?>"
                    type="button"><?php echo e(trans('common.Delete')); ?>

            </button>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('student.courses')): ?>
            <a class="dropdown-item" href="<?php echo e(route('student.courses', $query->id)); ?>"
               data-id="<?php echo e($query->id); ?>" type="button"><?php echo e(trans('courses.Course')); ?></a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('SkillAndPathway')): ?>
            <a class="dropdown-item" href="<?php echo e(route('student.skillgroup', $query->id)); ?>"
               data-id="<?php echo e($query->id); ?>" type="button"><?php echo e(trans('group.group')); ?></a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('student.loginActivity')): ?>
            <a class="dropdown-item" href="<?php echo e(route('student.loginActivity', $query->id)); ?>"
               type="button"><?php echo e(trans('student.Login Activity')); ?></a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\Modules\StudentSetting\Providers/../Resources/views/partials/_td_action.blade.php ENDPATH**/ ?>