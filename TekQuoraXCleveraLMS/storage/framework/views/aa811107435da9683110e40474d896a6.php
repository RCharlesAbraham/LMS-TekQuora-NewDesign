<?php
    $activePage = $activePage ?? '';
?>
<aside class="admin-sidebar">
    <div class="sidebar-header">
        <h3 class="sidebar-title">Admin Panel</h3>
    </div>
    
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
        <img src="<?php echo e(asset('assets/images/icons/1.png')); ?>" style="width: 22px; height: 22px;" alt="">
        Overview
    </a>
    <a href="#" class="nav-link">
        <img src="<?php echo e(asset('assets/images/icons/6.png')); ?>" style="width: 22px; height: 22px;" alt="">
        User Management
    </a>
    <a href="#" class="nav-link">
        <img src="<?php echo e(asset('assets/images/icons/4.png')); ?>" style="width: 22px; height: 22px;" alt="">
        Course Approval
    </a>
    <a href="#" class="nav-link">
        <img src="<?php echo e(asset('assets/images/icons/8.png')); ?>" style="width: 22px; height: 22px;" alt="">
        Reports
    </a>
    <a href="#" class="nav-link">
        <img src="<?php echo e(asset('assets/images/icons/9.png')); ?>" style="width: 22px; height: 22px;" alt="">
        Settings
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
    .admin-sidebar {
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
        padding: 10px 18px 20px;
        margin-bottom: 10px;
    }

    .sidebar-title {
        font-size: 12px;
        text-transform: uppercase;
        color: #94a3b8;
        letter-spacing: 1px;
        font-weight: 700;
        margin: 0;
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/partials/admin-sidebar.blade.php ENDPATH**/ ?>