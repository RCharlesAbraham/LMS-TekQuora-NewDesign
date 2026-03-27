<?php
    $activePage = $activePage ?? '';
?>
<aside class="sidebar">
    <a href="<?php echo e(route('dashboard.1')); ?>" class="nav-link <?php echo e(request()->routeIs('dashboard.1') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/1.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.dashboard')); ?>

    </a>
    <a href="<?php echo e(route('calendar')); ?>" class="nav-link <?php echo e(request()->routeIs('calendar') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/2.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.calendar')); ?>

    </a>
    <a href="<?php echo e(route('learning')); ?>" class="nav-link <?php echo e(request()->routeIs('learning') || request()->routeIs('learning.p2') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/3.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.learning')); ?>

    </a>
    <a href="<?php echo e(route('courses')); ?>" class="nav-link <?php echo e(request()->routeIs('courses') || request()->routeIs('course.detail') || request()->routeIs('modules') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/4.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.courses')); ?>

    </a>
    <a href="<?php echo e(route('quiz')); ?>" class="nav-link <?php echo e(request()->routeIs('quiz') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/5.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.quiz')); ?>

    </a>
    <a href="<?php echo e(route('account.new')); ?>" class="nav-link <?php echo e(request()->routeIs('account.new') || $activePage === 'account' ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/6.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.account')); ?>

    </a>
    <a href="<?php echo e(route('wallet.address')); ?>" class="nav-link <?php echo e(request()->routeIs('wallet.address') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/7.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.wallet_address')); ?>

    </a>
    <a href="<?php echo e(route('transaction')); ?>" class="nav-link <?php echo e(request()->routeIs('transaction') || request()->routeIs('refund') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/8.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.transaction')); ?>

    </a>
    <a href="<?php echo e(route('payment.method')); ?>" class="nav-link <?php echo e(request()->routeIs('payment.method') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('lms-ui/images/icons/9.png')); ?>" style="width: 22px; height: 22px;" alt="">
        <?php echo e(__('lms_ui::navigation.payment')); ?>

    </a>

    <div style="margin-top: auto; padding-top: 40px; border-top: 1px solid #f1f5f9; margin-left:18px; margin-right: 18px;">
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" style="background:none; border:none; cursor:pointer; color: #ef4444; font-weight: 600; font-size: 14px; display:flex; gap:14px; align-items:center;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                Logout
            </button>
        </form>
    </div>
</aside>

<style>
    .sidebar {
        background: #fff;
        border-radius: 20px;
        padding: 20px 10px 40px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.02);
        min-height: calc(100vh - 120px);
        position: sticky;
        top: 100px;
        display: flex;
        flex-direction: column;
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 18px;
        border-radius: 12px;
        text-decoration: none;
        color: #64748b;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 2px;
        transition: 0.2s;
    }

    .nav-link:hover {
        background: #f1f5f9;
        color: #0f172a;
    }

    .nav-link.active {
        background: #f1f5f9;
        color: #003a70;
        font-weight: 800;
    }

    .nav-link img {
        width: 22px;
        height: 22px;
        opacity: 0.7;
    }

    .nav-link.active img {
        opacity: 1;
    }
</style>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/lms-ui/partials/sidebar.blade.php ENDPATH**/ ?>