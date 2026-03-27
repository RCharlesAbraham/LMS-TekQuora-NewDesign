<aside class="shared-sidebar">
    <a href="<?php echo e(route('dashboard.1')); ?>" class="nav-link <?php echo e(request()->routeIs('dashboard.1') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
        Dashboard
    </a>
    <a href="<?php echo e(route('courses')); ?>" class="nav-link <?php echo e(request()->routeIs('courses') || request()->routeIs('course.detail') || request()->routeIs('modules') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="15" x="2" y="3" rx="2"/><path d="m10 8 5 3-5 3v-6Z"/></svg>
        My Courses
    </a>
    <a href="<?php echo e(route('quiz')); ?>" class="nav-link <?php echo e(request()->routeIs('quiz') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.5 5h3a1.5 1.5 0 1 1 0 3h-3a1.5 1.5 0 1 1 0-3ZM19.5 8.5V11a1.5 1.5 0 1 1-3 0V8.5a1.5 1.5 0 1 1 3 0ZM4.5 9V6.5a1.5 1.5 0 1 1 3 0V9a1.5 1.5 0 1 1-3 0ZM11.5 12h3a1.5 1.5 0 1 1 0 3h-3a1.5 1.5 0 1 1 0-3Z"/><path d="M12 22a7 7 0 0 1-7-7V9a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v6a7 7 0 0 1-7 7Z"/></svg>
        My Quizzes
    </a>
    <a href="<?php echo e(route('learning')); ?>" class="nav-link <?php echo e(request()->routeIs('learning') || request()->routeIs('learning.p2') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        Learning
    </a>
    <a href="<?php echo e(route('calendar')); ?>" class="nav-link <?php echo e(request()->routeIs('calendar') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        Calendar
    </a>
    <a href="<?php echo e(route('certificate')); ?>" class="nav-link <?php echo e(request()->routeIs('certificate') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"/></svg>
        Certificate
    </a>
    <a href="<?php echo e(route('transaction')); ?>" class="nav-link <?php echo e(request()->routeIs('transaction') || request()->routeIs('refund') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1-2-1Z"/><path d="M16 8h-6"/><path d="M16 12h-6"/><path d="M16 16h-6"/></svg>
        Purchase History
    </a>
    <a href="<?php echo e(route('reward.points')); ?>" class="nav-link <?php echo e(request()->routeIs('reward.points') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="14" x="3" y="8" rx="2"/><path d="M12 5V3m0 9v3m0-6h3m-6 0H9"/></svg>
        Reward Point
    </a>
    <a href="<?php echo e(route('devices')); ?>" class="nav-link <?php echo e(request()->routeIs('devices') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="12" x="3" y="4" rx="2" ry="2"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
        Logged In Devices
    </a>
    <a href="<?php echo e(route('account.new')); ?>" class="nav-link <?php echo e(request()->routeIs('account.new') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        Account
    </a>
    <a href="<?php echo e(route('wallet.address')); ?>" class="nav-link <?php echo e(request()->routeIs('wallet.address') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"/><path d="M4 6v12c0 1.1.9 2 2 2h14v-4"/><path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4h-4z"/></svg>
        Wallet Address
    </a>
    <a href="<?php echo e(route('payment.method')); ?>" class="nav-link <?php echo e(request()->routeIs('payment.method') ? 'active' : ''); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
        Payment
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

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>