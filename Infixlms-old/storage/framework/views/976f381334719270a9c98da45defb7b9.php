
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $payout_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <div class="col-md-6">
        <div class="primary_input mb-25">
            <label class="primary_input_label"
                   for=""><?php echo e($data->title); ?> <strong
                    class="text-danger">*</strong></label>
            <input value="<?php echo e(@$payout_account_specifications[$data->id]['value']); ?>" required class="primary_input_field" name="specifications[<?php echo e($data->id); ?>]"
                   type="text"  placeholder="-" >
        </div>

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\finance\payout_data.blade.php ENDPATH**/ ?>