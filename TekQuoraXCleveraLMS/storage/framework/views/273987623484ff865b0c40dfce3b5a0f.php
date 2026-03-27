<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale() === 'th' ? 'th' : 'en'); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard - TekQuora</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/layout.css')); ?>?v=<?php echo e(time()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/staff-dashboard.css')); ?>?v=<?php echo e(time()); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo.png')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .shared-shell { grid-template-columns: 260px 1fr !important; }
        .main-card-override { background: transparent !important; box-shadow: none !important; padding: 0 !important; }
    </style>
</head>
<body style="background: #f8fafc;">
    <?php echo $__env->make('partials.staff-header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="shared-shell">
        <?php echo $__env->make('partials.staff-sidebar', ['activePage' => 'dashboard'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <main class="shared-content main-card-override">
            <div class="notice-bar">
                <span>login as <strong>demoinstructor@gmail.com</strong></span>
                <a href="#" class="exit-btn">Exit Now</a>
            </div>

            <div style="margin-bottom: 25px;">
                <h2 style="font-size: 16px; font-weight: 800; color: #64748b; text-transform: uppercase; letter-spacing: 0.5px;">Dashboard</h2>
            </div>

            <!-- Stats Grid -->
            <div class="staff-stats-grid">
                <div class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-card-title">Subjects</span>
                        <span class="stat-card-value">1</span>
                    </div>
                    <div class="stat-card-sub">Number of Subjects</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-card-title">Enrolled</span>
                        <span class="stat-card-value">0</span>
                    </div>
                    <div class="stat-card-sub">Number of Enrolled</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-card-title">Enrolled Amount</span>
                        <span class="stat-card-value">0</span>
                    </div>
                    <div class="stat-card-sub">Total Enrolled Amount</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-card-title">Revenue</span>
                        <span class="stat-card-value">0</span>
                    </div>
                    <div class="stat-card-sub">Total Revenue</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-card-title">Enrolled Today</span>
                        <span class="stat-card-value">0</span>
                    </div>
                    <div class="stat-card-sub">Total Enrolled Today</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-card-title">This Month</span>
                        <span class="stat-card-value">0</span>
                    </div>
                    <div class="stat-card-sub">Total Enrolled This Month</div>
                </div>
            </div>

            <!-- Charts Row 1 -->
            <div class="charts-grid">
                <div class="chart-card">
                    <h3>Monthly Income Stats for 2026</h3>
                    <canvas id="incomeChart" height="200"></canvas>
                </div>
                <div class="chart-card">
                    <h3>Payment Statistics for March</h3>
                    <canvas id="paymentChart" height="200"></canvas>
                </div>
                <div class="chart-card">
                    <h3>Overview of Topics</h3>
                    <canvas id="topicsChart" height="200"></canvas>
                </div>
            </div>

            <!-- Charts Row 2 -->
            <div class="chart-card" style="margin-bottom: 30px;">
                <h3>Daily Wise Enroll Status for March</h3>
                <canvas id="dailyEnrollChart" height="250"></canvas>
            </div>

            <!-- Tables Row -->
            <div class="tables-grid">
                <div class="table-card">
                    <div class="t-header">
                        <h3>Total student by each course</h3>
                    </div>
                    <table class="staff-table">
                        <thead>
                            <tr>
                                <th>Course Title</th>
                                <th>Instructor</th>
                                <th>Enrolled</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Test Courses</td>
                                <td>Demo Instructor</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-card">
                    <div class="t-header">
                        <h3>Recent Enrolls</h3>
                    </div>
                    <table class="staff-table">
                        <thead>
                            <tr>
                                <th>Course Title</th>
                                <th>Instructor</th>
                                <th>Email Address</th>
                                <th>Recent Enrolls</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" style="text-align: center; color: #94a3b8; padding: 40px;">No data available in the table</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Badge Carousel -->
            <div class="badge-carousel-card">
                <h3 style="font-size: 15px; font-weight: 800; color: #1e293b;">Upcoming Badge</h3>
                <button class="badge-nav badge-prev"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m15 18-6-6 6-6"/></svg></button>
                <button class="badge-nav badge-next"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg></button>
                <div class="badge-track">
                    <div class="badge-item">
                        <p style="font-size: 10px; margin-bottom: 8px;">Newbie - Sales Badge</p>
                        <div class="badge-img-circle"><img src="<?php echo e(asset('assets/images/icons/4.png')); ?>" style="width: 32px; opacity:0.8;"></div>
                        <h4>Required 1</h4>
                    </div>
                    <div class="badge-item">
                        <p style="font-size: 10px; margin-bottom: 8px;">Master - Registration Badge</p>
                        <div class="badge-img-circle" style="background: #ecfdf5; box-shadow: 0 4px 15px rgba(209,250,229,0.5);"><img src="<?php echo e(asset('assets/images/icons/1.png')); ?>" style="width: 32px; opacity:0.8;"></div>
                        <h4>Required 150 Days</h4>
                    </div>
                    <div class="badge-item">
                        <p style="font-size: 10px; margin-bottom: 8px;">Newbie - Rating Badge</p>
                        <div class="badge-img-circle" style="background: #fff7ed; box-shadow: 0 4px 15px rgba(255,237,213,0.5);"><img src="<?php echo e(asset('assets/images/icons/5.png')); ?>" style="width: 32px; opacity:0.8;"></div>
                        <h4>Required 1</h4>
                    </div>
                    <div class="badge-item">
                        <p style="font-size: 10px; margin-bottom: 8px;">Newbie - Blog Badge</p>
                        <div class="badge-img-circle" style="background: #ede9fe; box-shadow: 0 4px 15px rgba(237,233,254,0.5);"><img src="<?php echo e(asset('assets/images/icons/8.png')); ?>" style="width: 32px; opacity:0.8;"></div>
                        <h4>Required 1</h4>
                    </div>
                    <div class="badge-item">
                        <p style="font-size: 10px; margin-bottom: 8px;">Newbie - Sales Badge</p>
                        <div class="badge-img-circle"><img src="<?php echo e(asset('assets/images/icons/4.png')); ?>" style="width: 32px; opacity:0.8;"></div>
                        <h4>Required 1</h4>
                    </div>
                </div>
            </div>

            <footer style="text-align: center; padding: 20px; color: #94a3b8; font-size: 12px; margin-top: 40px;">
                Copyright © 2025. All rights reserved
            </footer>
        </main>
    </div>

    <script>
        // Income Chart
        new Chart(document.getElementById('incomeChart'), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Monthly Income Stats for March 2026',
                    data: [0.1, 0.2, 0.1, 0, 0, 0],
                    backgroundColor: '#a78bfa',
                    borderRadius: 5
                }]
            },
            options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, max: 1.0 } } }
        });

        // Payment Chart
        new Chart(document.getElementById('paymentChart'), {
            type: 'line',
            data: {
                labels: ['1', '5', '10', '15', '20', '25', '30'],
                datasets: [{
                    label: 'Payment Statistics for March',
                    data: [0, 0, 0, 0, 0, 0, 0],
                    borderColor: '#f87171',
                    tension: 0.4,
                    fill: false
                }]
            },
            options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, max: 1.0 } } }
        });

        // Topics Chart
        new Chart(document.getElementById('topicsChart'), {
            type: 'doughnut',
            data: {
                labels: ['Courses', 'Quizzes', 'Classes'],
                datasets: [{
                    data: [1, 0, 0],
                    backgroundColor: ['#fed7d7', '#e9d5ff', '#fff3bf'],
                    borderWidth: 0
                }]
            },
            options: { responsive: true, cutout: '70%', plugins: { legend: { position: 'bottom' } } }
        });

        // Daily Enroll Chart
        new Chart(document.getElementById('dailyEnrollChart'), {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                datasets: [{
                    label: 'Daily Wise Enroll Status for March',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    backgroundColor: '#c084fc',
                    borderRadius: 4
                }]
            },
            options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true, max: 1.0 } } }
        });
    </script>
</body>
</html>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/staff/dashboard.blade.php ENDPATH**/ ?>