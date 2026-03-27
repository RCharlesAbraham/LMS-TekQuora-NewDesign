<header class="shared-header lms-ui-header" role="banner">
    <div class="header-pill">
        <div class="header-left">
            <a href="<?php echo e(route('dashboard.1')); ?>" class="logo"><img src="<?php echo e(asset('lms-ui/images/logo.png')); ?>" alt="Logo"></a>
            <div class="search-wrap">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" placeholder="<?php echo e(__('lms_ui::course_flow.search_placeholder')); ?>">
            </div>
        </div>
        <div class="header-right">
            <div class="h-icon-btn">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l8.78-8.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </div>
            <div class="h-icon-btn">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
            </div>
            <a href="<?php echo e(route('account.new')); ?>" class="profile-pill">
                <div class="avatar-head"></div>
                <span><?php echo e(Auth::check() ? Auth::user()->name : __('lms_ui::course_flow.student')); ?></span>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" opacity="0.6"><path d="m6 9 6 6 6-6"/></svg>
            </a>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/lms-ui/partials/header.blade.php ENDPATH**/ ?>