<!DOCTYPE html>
<html dir="<?php echo e(isRtl()?'rtl':'ltr'); ?>"
      class="<?php echo e(isRtl()?'rtl':'ltr'); ?> <?php echo e(auth()->check() && auth()->user()->dark_mode==1 ? 'dark' : 'light'); ?>"
      lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset(Settings('favicon'))); ?><?php echo e(assetVersion()); ?>" type="image/png"/>
    <title>
        <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?>

    </title>
    <meta name="_token" content="<?php echo csrf_token(); ?>"/>
    <?php echo $__env->make('backend.partials.style', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <script src="<?php echo e(asset('public/js/common.js')); ?><?php echo e(assetVersion()); ?>" type="application/javascript"></script>


    <script>
        window.Laravel = {
            "baseUrl": '<?php echo e(url("/")); ?>' + '/',
            "current_path_without_domain": '<?php echo e(request()->path()); ?>',
            "csrfToken": '<?php echo e(csrf_token()); ?>',
        }
    </script>

    <script>
        window._locale = '<?php echo e(app()->getLocale()); ?>';
        window._translations = <?php echo $jsonLang??''; ?>;
        window.jsLang = function (key, replace) {
            let output = '';

            if (key.includes('.')) {
                const parts = key.split('.');
                key = parts[1];
            }

            if (window._translations.hasOwnProperty(key)) {
                output = window._translations[key];
            } else {
                output = key;
            }
            return output;

        }

        function localizeNumbers(text) {
            let numberMap = {
                '0': '<?php echo e(translatedNumber(0)); ?>',
                '1': '<?php echo e(translatedNumber(1)); ?>',
                '2': '<?php echo e(translatedNumber(2)); ?>',
                '3': '<?php echo e(translatedNumber(3)); ?>',
                '4': '<?php echo e(translatedNumber(4)); ?>',
                '5': '<?php echo e(translatedNumber(5)); ?>',
                '6': '<?php echo e(translatedNumber(6)); ?>',
                '7': '<?php echo e(translatedNumber(7)); ?>',
                '8': '<?php echo e(translatedNumber(8)); ?>',
                '9': '<?php echo e(translatedNumber(9)); ?>',
            };
            text = text.toString();
            return text.replace(/[0-9]/g, function (match) {
                return numberMap[match];
            });
        }

        window.translatedNumber = function (data) {

            var parsedValue = parseFloat(data);

            if (!isNaN(parsedValue) && isFinite(parsedValue)) {
                return localizeNumbers(data);
            } else {
                return data;
            }

        }

    </script>


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

    <script>
        const RTL = "<?php echo e(isRtl()); ?>";
        const LANG = "<?php echo e(app()->getLocale()); ?>";
    </script>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


</head>

<body class="admin">
<?php echo $__env->make('preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<input type="hidden" name="demoMode" id="demoMode" value="<?php echo e(appMode()); ?>">
<input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">
<input type="hidden" name="active_date_format" id="active_date_format" value="<?php echo e(Settings('active_date_format')); ?>">
<input type="hidden" name="js_active_date_format" id="js_active_date_format" value="<?php echo e(getActiveJsDateFormat()); ?>">
<input type="hidden" name="table_name" id="table_name" value="<?php echo $__env->yieldContent('table'); ?>">
<input type="hidden" name="csrf_token" class="csrf_token" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="currency_symbol" class="currency_symbol" value="<?php echo e(Settings('currency_symbol')); ?>">
<input type="hidden" name="currency_show" class="currency_show" value="<?php echo e(Settings('currency_show')); ?>">
<input type="hidden" name="chat_settings" id="chat_settings" value="<?php echo e(env('BROADCAST_DRIVER')); ?>">
<div class="main-wrapper" style="min-height: 600px">
    <!-- Sidebar  -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('LmsSaas') && Auth::user()->is_saas_admin==1 && Auth::user()->active_panel=='saas'): ?>
        <?php echo $__env->make('lmssaas::partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(isModuleActive('LmsSaasMD') && Auth::user()->is_saas_admin==1 && Auth::user()->active_panel=='saas'): ?>
        <?php echo $__env->make('lmssaasmd::partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('backend.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


    <!-- Page Content  -->
    <div id="main-content"
         class="<?php echo e(auth()->check() && auth()->user()->sidebar==1 ? '' : 'top-padding full-width'); ?>"
    >
<?php echo $__env->make('secret_login', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('backend.partials.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\header.blade.php ENDPATH**/ ?>