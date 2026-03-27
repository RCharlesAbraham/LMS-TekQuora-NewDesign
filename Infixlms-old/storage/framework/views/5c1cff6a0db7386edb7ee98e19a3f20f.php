<?php
    $flag = true;
    if (isModuleActive('Organization') && Auth::user()->isOrganization()) {
        if($query->course->user_id == auth()->id() || $query->course->user->organization_id ==  auth()->id()){
           $flag = true;
        }else{
             $flag = false;
        }

    }
?>


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($query->refund != 1 && permissionCheck('course.delete') && $flag): ?>

    <?php
        $deleteUrl = route('admin.enrollDelete', $query->id);
        $refundUrl = route('admin.enrollDelete', $query->id) . '?refund';


        $hasCertificate=false;
        if ($query->course->certificate_records->where('student_id', $query->user_id)->count() > 0) {
            $hasCertificate = true;
        }
    ?>

    <div class="dropdown CRM_dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button"
                id="dropdownMenu2" data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
            <?php echo e(trans('common.Action')); ?>

        </button>
        <div class="dropdown-menu dropdown-menu-right"
             aria-labelledby="dropdownMenu2">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('manually_assign_certificate') == '1'): ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($hasCertificate): ?>
                    <a onclick="confirm_remove_certificate_modal('<?php echo e($query->id); ?>')"
                       class="dropdown-item  ">
                        <?php echo e(trans('certificate.Remove Certificate')); ?>

                    </a>
                <?php else: ?>
                    <a onclick="confirm_generate_certificate_modal('<?php echo e($query->id); ?>')"
                       class="dropdown-item  ">
                        <?php echo e(trans('certificate.Generate Certificate')); ?>

                    </a>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <a onclick="confirm_refund_modal('<?php echo e($query->id); ?>')"
               class="dropdown-item edit_brand">
                <?php echo e(trans('common.Refund') .' '. trans('common.Course')); ?>

            </a>
            <a onclick="confirm_cancel_modal('<?php echo e($query->id); ?>')"
               class="dropdown-item edit_brand"><?php echo e(trans('common.Cancel') . ' ' . trans('common.Course')); ?></a>
        </div>
    </div>

<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\student\_td_enroll_log.blade.php ENDPATH**/ ?>