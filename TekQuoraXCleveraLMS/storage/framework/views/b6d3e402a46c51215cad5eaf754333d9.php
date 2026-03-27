<?php $__env->startSection('title', 'Forgot Password'); ?>

<?php $__env->startSection('content'); ?>
<div class="login-wrapper">
    <div class="login-card">
        <!-- Header Section -->
        <div class="login-header">
            <div class="logo-container">
                <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="IL2 Logo" class="logo" onerror="this.src='https://placehold.co/180x90/ffffff/0f2b60?text=IL%C2%B2+Logo'">
            </div>
            <h1 class="login-title" style="color: var(--deep-navy);">Enter Email Address</h1>
        </div>

        <!-- Form Section -->
        <form action="<?php echo e(route('password.email')); ?>" method="POST" class="auth-form" id="forgotPasswordForm">
            <?php echo csrf_field(); ?>
            <div class="input-group" style="margin-bottom: 40px;">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-actions" style="margin-bottom: 25px;">
                <button type="submit" class="btn btn-primary" style="width: 100%; max-width: 220px; margin: 0 auto; display: block;">Send</button>
            </div>
        </form>

        <div class="text-center">
            <a href="<?php echo e(route('login')); ?>" class="back-link">Back to Sign In</a>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\TekQuoraXCleveraLMS\resources\views/main/forgot-password.blade.php ENDPATH**/ ?>