<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'LMS'); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/logo.png')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/layout.css')); ?>?v=<?php echo e(time()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>?v=<?php echo e(time()); ?>">

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <?php if(!in_array(Route::currentRouteName(), ['login', 'register', 'password.request', 'password.reset', 'verification.notice'])): ?>
        <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <main class="main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="<?php echo e(asset('js/script.js')); ?>?v=<?php echo e(time()); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/layouts/app.blade.php ENDPATH**/ ?>