<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Invoice')): ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$certificate->orderCertificate): ?>
        <a href="<?php echo e(route('prc.order.now', [$certificate->certificate_id])); ?>"
           class="primary-btn fix-gr-bg"
           target="__blank"><?php echo e(__('invoice.Order Now')); ?></a>
    <?php else: ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($certificate->nonPaid()): ?>
            <a href="<?php echo e(route('prc.order.now', [$certificate->certificate_id])); ?>"
               class="primary-btn fix-gr-bg"
               target="__blank"><?php echo e(__('invoice.Pay Now')); ?></a>
        <?php else: ?>
            <strong><?php echo e(strtoupper($certificate->orderCertificate ? $certificate->orderCertificate->status : '')); ?></strong>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_certificates\components\_invoice.blade.php ENDPATH**/ ?>