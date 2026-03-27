<!doctype html>
<html class="no-js" lang="zxx" dir="<?php echo e(isRtl() == 1 ? 'rtl' : ''); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e(Settings('site_title')); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(getCourseImage(Settings('favicon') )); ?><?php echo e(assetVersion()); ?>">

    <?php if (isset($component)) { $__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc88d99ae715b8ed9e702fcba32a10c8c = $attributes; } ?>
<?php $component = App\View\Components\FrontendDynamicStyleColor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend-dynamic-style-color'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FrontendDynamicStyleColor::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc88d99ae715b8ed9e702fcba32a10c8c)): ?>
<?php $attributes = $__attributesOriginalc88d99ae715b8ed9e702fcba32a10c8c; ?>
<?php unset($__attributesOriginalc88d99ae715b8ed9e702fcba32a10c8c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c)): ?>
<?php $component = $__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c; ?>
<?php unset($__componentOriginalc88d99ae715b8ed9e702fcba32a10c8c); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf91750f5c7e1fb819a0d20d1a9aa39e9 = $attributes; } ?>
<?php $component = App\View\Components\BackendDynamicColor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('backend-dynamic-color'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BackendDynamicColor::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf91750f5c7e1fb819a0d20d1a9aa39e9)): ?>
<?php $attributes = $__attributesOriginalf91750f5c7e1fb819a0d20d1a9aa39e9; ?>
<?php unset($__attributesOriginalf91750f5c7e1fb819a0d20d1a9aa39e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9)): ?>
<?php $component = $__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9; ?>
<?php unset($__componentOriginalf91750f5c7e1fb819a0d20d1a9aa39e9); ?>
<?php endif; ?>


    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/bootstrap.rtl.min.css<?php echo e(assetVersion()); ?> ">
    <?php else: ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/bootstrap.min.css<?php echo e(assetVersion()); ?> ">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/app.css<?php echo e(assetVersion()); ?>">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style_rtl.css<?php echo e(assetVersion()); ?>">
    <?php else: ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style.css<?php echo e(assetVersion()); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <script src="<?php echo e(asset('public/js/common.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/app.js')); ?><?php echo e(assetVersion()); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/gijgo.min.css<?php echo e(assetVersion()); ?>">
    <script src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/js/gijgo.min.js<?php echo e(assetVersion()); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/themify-icons.css')); ?><?php echo e(assetVersion()); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?><?php echo e(assetVersion()); ?>"/>

    <script>
        window._locale = '<?php echo e(app()->getLocale()); ?>';
        window._translations = <?php echo $jsonLang??''; ?>;
    </script>
    <?php if (isset($component)) { $__componentOriginal62bff4316f09998f88f8c57239452682 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62bff4316f09998f88f8c57239452682 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.analytics-tool','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('analytics-tool'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62bff4316f09998f88f8c57239452682)): ?>
<?php $attributes = $__attributesOriginal62bff4316f09998f88f8c57239452682; ?>
<?php unset($__attributesOriginal62bff4316f09998f88f8c57239452682); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62bff4316f09998f88f8c57239452682)): ?>
<?php $component = $__componentOriginal62bff4316f09998f88f8c57239452682; ?>
<?php unset($__componentOriginal62bff4316f09998f88f8c57239452682); ?>
<?php endif; ?>

</head>

<body>
<?php echo $__env->make('secret_login', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>


<?php echo \Brian2694\Toastr\Facades\Toastr::message(); ?>

<?php echo NoCaptcha::renderJs(); ?>


<script>
    if ($('.small_select').length > 0) {
        $('.small_select').niceSelect();
    }

    if ($('.datepicker').length > 0) {
        $('.datepicker').datepicker();
    }
    setTimeout(function () {
        $('.preloader').fadeOut('hide', function () {
            // $(this).remove();

        });
    }, 0);
</script>

</body>


</html>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/frontend/infixlmstheme/auth/layouts/app.blade.php ENDPATH**/ ?>