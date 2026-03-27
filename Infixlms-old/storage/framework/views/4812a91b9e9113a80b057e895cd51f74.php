<?php $__env->startSection('title'); ?><?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('Permission Denied')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('message'); ?>
    <?php echo e(__('Permission Denied')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('details'); ?>
    <?php echo e(__($exception->getMessage() ?: 'Permission Denied, you have no permission to access this page !')); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('errors.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\errors\403.blade.php ENDPATH**/ ?>