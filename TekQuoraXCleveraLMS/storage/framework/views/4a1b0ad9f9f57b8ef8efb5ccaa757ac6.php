<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In Devices | IL2</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/layout.css')); ?>">
</head>
<body>
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="shared-shell">
        <?php echo $__env->make('partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <main class="shared-content">
            <div style="background: #fff; padding: 60px; border-radius: 26px; border: 1px solid #e2e8f0; text-align: center;">
                <h1 style="font-size: 24px; font-weight: 800; margin-bottom: 15px;">Logged In Devices</h1>
                <p style="color: #64748b;">You are currently logged in from 1 device.</p>
            </div>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/main/devices.blade.php ENDPATH**/ ?>