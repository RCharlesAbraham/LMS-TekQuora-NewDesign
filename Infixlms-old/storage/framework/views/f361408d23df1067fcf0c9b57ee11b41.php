<ul class="nav nav-tabs ms-0 mb-3 border-0">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab"
           href="#basic_information_tab"><?php echo e(__('profile.basic_information')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#change_password_tab"><?php echo e(__('profile.change_password')); ?></a>
    </li>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('TwoFA') && Settings('enable_two_fa')): ?>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#fa_tab"><?php echo e(__('profile.2FA')); ?></a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#images_tab"><?php echo e(__('profile.images')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#about_tab"><?php echo e(__('common.About')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#education_tab"><?php echo e(__('profile.education')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#experience_tab"><?php echo e(__('profile.experience')); ?></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#skills_tab"><?php echo e(__('profile.skills')); ?></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#financial_tab"><?php echo e(__('profile.financial')); ?></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#api_tab"><?php echo e(__('profile.api')); ?></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#extra_info_tab"><?php echo e(__('profile.extra_information')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#identity_tab"><?php echo e(__('profile.identity_and_documents')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#social_tab"><?php echo e(__('profile.social_and_contact')); ?></a>
    </li>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->id !== 1): ?>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#delete_account_tab"><?php echo e(__('profile.delete_account')); ?></a>
        </li>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</ul>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_tab_link.blade.php ENDPATH**/ ?>