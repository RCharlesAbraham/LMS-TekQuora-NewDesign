<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | IL2 RMUTTO</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/layout.css')); ?>?v=<?php echo e(time()); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo.png')); ?>">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>?v=<?php echo e(time()); ?>">
    <style>
        body {
            background-color: #f1f4f9;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            color: #1e293b;
        }

        /* Dashboard Layout */
        .dashboard-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 20px 20px 80px;
            display: grid;
            grid-template-columns: 260px 1fr;
            gap: 30px;
        }

        /* Fix: Override global flex centering from style.css */
        body .main-content {
            display: flex !important;
            flex-direction: column !important;
            align-items: stretch !important;
            justify-content: flex-start !important;
            background: #fff;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.02);
            min-height: 600px;
        }

        .content-header {
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content-title {
            font-size: 24px;
            font-weight: 800;
            color: #1e293b;
        }

        /* Dummy Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
            width: 100%;
        }

        .stat-card {
            background: #f8fafc;
            padding: 24px;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
        }

        .stat-label {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 8px;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 800;
            color: #0f172a;
        }

        /* Dummy Table */
        .data-section {
            background: #fff;
            border-radius: 16px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1e293b;
        }

        .dummy-table {
            width: 100%;
            border-collapse: collapse;
        }

        .dummy-table th {
            text-align: left;
            padding: 12px 16px;
            background: #f1f5f9;
            color: #64748b;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dummy-table td {
            padding: 16px;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
            color: #334155;
        }

        .status-pill {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-active { background: #dcfce7; color: #166534; }
        .status-pending { background: #fef9c3; color: #854d0e; }

        @media (max-width: 1024px) {
            .dashboard-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="dashboard-container">
        <?php echo $__env->make('partials.admin-sidebar', ['activePage' => 'dashboard'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <main class="main-content">
            <div class="content-header">
                <h1 class="content-title">Admin Overview</h1>
                <div class="header-actions">
                    <button style="padding: 10px 20px; background: #003a70; color: #fff; border: none; border-radius: 10px; font-weight: 600; cursor: pointer;">
                        Generate Report
                    </button>
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-label">Total Students</div>
                    <div class="stat-value">1,284</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Total Staff</div>
                    <div class="stat-value">156</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Active Courses</div>
                    <div class="stat-value">42</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Platform Revenue</div>
                    <div class="stat-value">$12.4k</div>
                </div>
            </div>

            <div class="data-section">
                <h2 class="section-title">Recent User Registrations</h2>
                <table class="dummy-table">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Role</th>
                            <th>Date Joined</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Student</td>
                            <td>Mar 24, 2026</td>
                            <td><span class="status-pill status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td>Sarah Smith</td>
                            <td>Staff</td>
                            <td>Mar 23, 2026</td>
                            <td><span class="status-pill status-active">Active</span></td>
                        </tr>
                        <tr>
                            <td>Mike Johnson</td>
                            <td>Student</td>
                            <td>Mar 22, 2026</td>
                            <td><span class="status-pill status-pending">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>