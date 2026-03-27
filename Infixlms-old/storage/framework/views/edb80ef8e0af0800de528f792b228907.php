<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('MyClass') && routeIsExist('get-transcript')): ?>
    <div class="dropdown CRM_dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button"
                id="dropdownMenu2"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
            <?php echo e(__('common.Select')); ?>

        </button>
        <div class="dropdown-menu dropdown-menu-right"
             aria-labelledby="dropdownMenu2">
            <a class="dropdown-item"
               href="<?php echo e(route('get-transcript', [$certificate->course_id, auth()->user()->id, 'download'])); ?>"><?php echo e(__('common.Download')); ?></a>
            <a class="dropdown-item"
               href="<?php echo e(route('get-transcript', [$certificate->course_id, auth()->user()->id])); ?>"><?php echo e(__('common.View')); ?></a>
        </div>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_certificates\components\_my_class.blade.php ENDPATH**/ ?>