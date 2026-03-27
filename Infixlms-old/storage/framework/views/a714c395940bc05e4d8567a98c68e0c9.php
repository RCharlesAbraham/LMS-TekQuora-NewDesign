<div>
    <div class="pathway_section">

        <div class="">
            <?php echo e(__('frontend.Date Enrolled')); ?> : <?php echo e(showDate($enrolld->created_at)); ?>

        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($enrolld->enrolled_by!=null): ?>
            <div class="">
                <?php echo e(__('frontend.Enrolled By')); ?> : <?php echo e(@$enrolld->enrolledBy->name); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($enrolld->pathway_id!=null): ?>
            <div class="">
                <?php echo e(__('frontend.Pathway')); ?> : <?php echo e(@$enrolld->pathway->name); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-course-pathway-info.blade.php ENDPATH**/ ?>