<div class="col-md-6 col-lg-3">
    <a href="javascript:void(0)" class="d-block">
        <div class="white-box single-summery">
            <div class="d-flex justify-content-between">
                <div>
                    <h3><?php echo e(@$title); ?></h3>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$subtitle): ?>
                        <p class="mb-0"><?php echo e(@$subtitle); ?></p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <h1 class="gradient-color2" id="totalStudent"><?php echo e($value?$value:'...'); ?>

                </h1>
            </div>
        </div>
    </a>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\components\card-component.blade.php ENDPATH**/ ?>