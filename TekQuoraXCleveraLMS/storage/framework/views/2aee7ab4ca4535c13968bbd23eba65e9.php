<?php
    $activePage = $activePage ?? '';
?>
<aside class="staff-sidebar">
    <div class="sidebar-header">
        <h3 class="sidebar-title">Staff Portal</h3>
    </div>
    
    <a href="<?php echo e(route('staff.dashboard')); ?>" class="nav-link <?php echo e(request()->routeIs('staff.dashboard') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/images/icons/1.png')); ?>" style="width: 20px; height: 20px;" alt="">
        Dashboard
    </a>

    <div class="nav-dropdown">
        <a href="#" class="nav-link">
            <img src="<?php echo e(asset('assets/images/icons/9.png')); ?>" style="width: 20px; height: 20px;" alt="">
            SCORM
            <span class="dropdown-arrow"></span>
        </a>
    </div>

    <div class="sidebar-section">
        <h4 class="section-heading">USERS</h4>
        <div class="nav-dropdown">
            <a href="#" class="nav-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="opacity:0.7"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                Students
                <span class="dropdown-arrow"></span>
            </a>
        </div>
        <div class="nav-dropdown">
            <a href="#" class="nav-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="opacity:0.7"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                Instructors
                <span class="dropdown-arrow"></span>
            </a>
        </div>
    </div>

    <div class="sidebar-section">
        <h4 class="section-heading">EDUCATION</h4>
        <div class="nav-dropdown">
            <a href="#" class="nav-link">
                <img src="<?php echo e(asset('assets/images/icons/4.png')); ?>" style="width: 20px; height: 20px;" alt="">
                Courses
                <span class="dropdown-arrow"></span>
            </a>
        </div>
        <div class="nav-dropdown">
            <a href="#" class="nav-link">
                <img src="<?php echo e(asset('assets/images/icons/5.png')); ?>" style="width: 20px; height: 20px;" alt="">
                Quiz
                <span class="dropdown-arrow"></span>
            </a>
        </div>
        <div class="nav-dropdown">
            <a href="#" class="nav-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="opacity:0.7"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 21 17 13 7 13 7 21"></polyline><path d="M2 9L12 2L22 9"></path></svg>
                Virtual Class
                <span class="dropdown-arrow"></span>
            </a>
        </div>
        <div class="nav-dropdown">
            <a href="#" class="nav-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="opacity:0.7"><path d="M12 15l-2 5l9-9l-9-9l2 5l-10 4z"></path></svg>
                Certificate
                <span class="dropdown-arrow"></span>
            </a>
        </div>
        <div class="nav-dropdown">
            <a href="#" class="nav-link">
                <img src="<?php echo e(asset('assets/images/icons/8.png')); ?>" style="width: 20px; height: 20px;" alt="">
                Report
                <span class="dropdown-arrow"></span>
            </a>
        </div>
    </div>

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
    .staff-sidebar {
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

    .sidebar-header {
        padding: 5px 18px 15px;
        margin-bottom: 5px;
    }

    .sidebar-title {
        font-size: 11px;
        text-transform: uppercase;
        color: #94a3b8;
        letter-spacing: 1px;
        font-weight: 700;
        margin: 0;
    }

    .sidebar-section {
        margin-top: 15px;
    }

    .section-heading {
        font-size: 11px;
        font-weight: 700;
        color: #94a3b8;
        padding: 10px 18px;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 10px 18px;
        border-radius: 12px;
        text-decoration: none;
        color: #64748b;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 2px;
        transition: 0.2s;
        position: relative;
    }

    .nav-link:hover {
        background: #f1f5f9;
        color: #0f172a;
    }

    .nav-link.active {
        background: #f1f5f9;
        color: #ff7f00; /* Vivid Orange for Staff */
        font-weight: 700;
    }

    .dropdown-arrow {
        margin-left: auto;
        width: 10px;
        height: 10px;
        border-right: 2px solid currentColor;
        border-bottom: 2px solid currentColor;
        transform: rotate(45deg);
        opacity: 0.5;
        margin-bottom: 4px;
    }

    .nav-link img, .nav-link svg {
        width: 20px;
        height: 20px;
        opacity: 0.7;
    }

    .nav-link.active img, .nav-link.active svg {
        opacity: 1;
    }
</style>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/partials/staff-sidebar.blade.php ENDPATH**/ ?>