<?php
    $restrictedRoutes = [
        'home', 
        'login', 
        'register', 
        'password.request', 
        'password.reset', 
        'password.update', 
        'password.email', 
        'verification.notice', 
        'verification.verify', 
        'verification.resend'
    ];
    $showIcons = !in_array(Route::currentRouteName(), $restrictedRoutes);
    $user = auth()->user();
?>

<header class="shared-header lms-ui-header" role="banner">
    <div class="header-pill">
        <div class="header-left">
            <a href="<?php echo e(route('dashboard.1')); ?>" class="logo"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="Logo"></a>
            <div class="search-wrap">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" placeholder="<?php echo e(__('lms_ui::course_flow.search_placeholder')); ?>">
            </div>
        </div>
        <div class="header-right">
            <?php if($showIcons): ?>
                <a href="<?php echo e(route('favorites')); ?>" class="h-icon-btn" title="Wishlist">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </a>
                <a href="#" class="h-icon-btn" title="Shopping Cart">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </a>
                <a href="#" class="h-icon-btn" title="Notifications">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <span class="notif-badge">2</span>
                </a>
                
                <a href="<?php echo e(route('account.new')); ?>" class="profile-pill">
                    <div class="avatar-head"></div>
                    <span><?php echo e($user->name ?? 'Student'); ?></span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="m6 9 6 6 6-6"/></svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/partials/header.blade.php ENDPATH**/ ?>