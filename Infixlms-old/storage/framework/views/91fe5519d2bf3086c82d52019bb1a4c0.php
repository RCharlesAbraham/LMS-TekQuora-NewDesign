<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> |  <?php echo e($course->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('og_image'); ?>
    <?php echo e(getCourseImage($course->image)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_title'); ?>
    <?php echo e($course->meta_keywords); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_description'); ?>
    <?php echo e($course->meta_description); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('mainContent'); ?>

    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/pdf.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/pdfjs-viewer.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/zoom.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/pdfjs-viewer.css')); ?>"/>

    <script>
        var pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = '<?php echo e(asset('public/frontend/infixlmstheme/js/pdf.worker.min.js')); ?>';
    </script>
    <div class="w-100  h-100 pdfjs-viewer"
         style="border: none;min-height: 400px"></div>
    <script>
        let pdfViewer = new PDFjsViewer($('.pdfjs-viewer'), {
            setZoom: -1,
            maxImageSize: -1,
        });
        pdfViewer.loadDocument("<?php echo e(asset($course->product->pdf)); ?>").then(function () {
            pdfViewer.setZoom('width');
        });
        enablePinchZoom(pdfViewer)
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\downloadSampleFiles.blade.php ENDPATH**/ ?>