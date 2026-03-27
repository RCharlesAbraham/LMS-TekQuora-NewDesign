<!DOCTYPE html>
<html dir="<?php echo e(isRtl() ? 'rtl' : ''); ?>" class="<?php echo e(isRtl() ? 'rtl' : ''); ?>" lang="en" itemscope itemtype="<?php echo e(url('/')); ?>">

<head>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>

    <meta property="og:url" content="<?php echo e(url()->current()); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo e(Settings('site_title')); ?>"/>
    <meta property="og:description" content="<?php echo e(Settings('footer_about_description')); ?>"/>
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image'); ?>"/>

    <meta name="title" content="<?php echo e(Settings('site_title')); ?> | <?php echo e($row->title); ?>">
    <meta name="description" content="<?php echo e(Settings('meta_description')); ?>">
    <meta name="keywords" content="<?php echo e(Settings('meta_keywords')); ?>">

    <title><?php echo e(Settings('site_title')); ?> | <?php echo e($row->title); ?></title>
    <link rel="icon" href="<?php echo e(asset(Settings('favicon'))); ?><?php echo e(assetVersion()); ?>" type="image/png"/>

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/themify-icons.css')); ?><?php echo e(assetVersion()); ?>"/>


    <link rel="stylesheet" href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/fontawesome.css')); ?>"
          data-type="aoraeditor-style"/>

    <link rel="stylesheet" href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/aoraeditor.css')); ?>"
          data-type="aoraeditor-style"/>
    <link rel="stylesheet" href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/aoraeditor-components.css')); ?>"
          data-type="aoraeditor-style"/>


    <link rel="stylesheet" type="text/css" data-type="aoraeditor-style"
          href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/style.css')); ?>">

    
    
    <?php
        $currentTheme =currentTheme();
//      $default =[
//          "/affiliate"
//];
//        if (in_array($row->slug,$default)){
//            $currentTheme ='infixlmstheme';
//
//        }
    ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($currentTheme == 'infixlmstheme'): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
            <link rel="stylesheet"
                  href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/bootstrap.rtl.min.css')); ?><?php echo e(assetVersion()); ?>"
                  data-type="aoraeditor-style"/>
        <?php else: ?>
            <link rel="stylesheet"
                  href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/bootstrap.min.css')); ?><?php echo e(assetVersion()); ?>"
                  data-type="aoraeditor-style"/>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/fontawesome.css<?php echo e(assetVersion()); ?> "
              data-type="aoraeditor-style">

        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/app.css') . assetVersion()); ?>"
              data-type="aoraeditor-style">

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
            <link rel="stylesheet" type="text/css" data-type="aoraeditor-style"
                  href="<?php echo e(asset('public/frontend/infixlmstheme/css/frontend_style_rtl.css') . assetVersion()); ?>">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" data-type="aoraeditor-style"
                  href="<?php echo e(asset('public/frontend/infixlmstheme/css/frontend_style.css') . assetVersion()); ?>">
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/mega_menu.css')); ?>">

        


        <link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/custom.css')); ?>">

    <?php elseif($currentTheme=='edume'): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
            <link rel="stylesheet" href="<?php echo e(asset('public')); ?>/css/bootstrap.rtl.min.css">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo e(asset('public')); ?>/css/bootstrap.min.css">
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <link rel="stylesheet" type="text/css" data-type="aoraeditor-style"
              href="<?php echo e(asset('public/frontend/infixlmstheme/css/frontend_style.css') . assetVersion()); ?>">

        
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/edume')); ?>/css/zeynep.min.css">
        

        

        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/edume')); ?>/css/style.css"/>
        <link rel="stylesheet" href="<?php echo e(asset('public/frontend/edume')); ?>/css/dynamic_page.css"/>

    <?php elseif($currentTheme=='kidslms'): ?>
        <link rel="stylesheet" href="<?php echo e(themeAsset('css')); ?>/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo e(themeAsset('plugins/magnific')); ?>/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo e(themeAsset('plugins/select2')); ?>/select2.min.css">
        
        
        <link rel="stylesheet" href="<?php echo e(themeAsset('css')); ?>/frontend_style.css">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

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

    <?php echo $__env->yieldContent('styles'); ?>
    <style>

    </style>
    <script src="<?php echo e(asset('public/js/common.js')); ?>"></script>

    <script type="text/javascript"
            src="<?php echo e(asset('public/frontend/infixlmstheme/js/jquery.lazy.min.js')); ?>"></script>


    <link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?>"/>


</head>

<body>
<?php echo $__env->make('preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(str_contains(request()->url(), 'chat')): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/jquery-ui.css')); ?><?php echo e(assetVersion()); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/vendors/select2/select2.css')); ?><?php echo e(assetVersion()); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/chat/css/style-student.css')); ?><?php echo e(assetVersion()); ?>">
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->check() && auth()->user()->role_id == 3 && !str_contains(request()->url(), 'chat')): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/chat/css/notification.css')); ?><?php echo e(assetVersion()); ?>">
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('WhatsappSupport')): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/whatsapp-support/style.css')); ?><?php echo e(assetVersion()); ?>">
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<script>
    window.Laravel = {
        "baseUrl": '<?php echo e(url('/')); ?>' + '/',
        "current_path_without_domain": '<?php echo e(request()->path()); ?>',
        "csrfToken": '<?php echo e(csrf_token()); ?>',
    }
</script>


<script>
    window._locale = '<?php echo e(app()->getLocale()); ?>';
    window._translations = <?php echo $jsonLang??''; ?>

        window.jsLang = function (key, replace) {
        let translation = true

        let json_file = window._translations;
        translation = json_file[key]
            ? json_file[key]
            : key
        $.each(replace, (value, key) => {
            translation = translation.replace(':' + key, value)
        })
        return translation
    }
</script>


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(Settings('facebook_pixel'))): ?>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', <?php echo e(Settings('facebook_pixel')); ?>);
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=<?php echo e(Settings('facebook_pixel')); ?>/&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="lat" class="lat" value="<?php echo e(Settings('lat')); ?>">
<input type="hidden" name="lng" class="lng" value="<?php echo e(Settings('lng')); ?>">
<input type="hidden" name="zoom" class="zoom" value="<?php echo e(Settings('zoom_level')); ?>">
<input type="hidden" name="slider_transition_time" id="slider_transition_time"
       value="<?php echo e(Settings('slider_transition_time') ? Settings('slider_transition_time') : 5); ?>">
<input type="hidden" name="base_url" class="base_url" value="<?php echo e(url('/')); ?>">
<input type="hidden" name="csrf_token" class="csrf_token" value="<?php echo e(csrf_token()); ?>">
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->check()): ?>
    <input type="hidden" name="balance" class="user_balance" value="<?php echo e(auth()->user()->balance); ?>">
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<input type="hidden" name="currency_symbol" class="currency_symbol" value="<?php echo e(Settings('currency_symbol')); ?>">
<input type="hidden" name="app_debug" class="app_debug" value="<?php echo e(env('APP_DEBUG')); ?>">
<div data-aoraeditor="html">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Settings('mobile_app_only_mode')): ?>
        <?php echo $__env->make(theme('partials._menu'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div id="content-area">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Settings('mobile_app_only_mode')): ?>
        <?php echo $__env->make(theme('partials._footer'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>


<script type="text/javascript" src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/bootstrap.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/jquery-ui.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/ckeditor.js')); ?>"></script>
<script type="text/javascript"
        src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/form-builder.min.js')); ?>"></script>
<script type="text/javascript"
        src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/form-render.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/aoraeditor.js')); ?>"></script>

<script type="text/javascript"
        src="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/js/aoraeditor-components.js')); ?>"></script>


<?php echo $__env->yieldContent('scripts'); ?>


<script type="text/javascript" data-aoraeditor="script">
    $(function () {
        // $('.dynamicData').each(function (i, obj) {
        //     aoraEditor.loadDynamicContent($(this));
        // });


    });
    // $(function () {
    //     if ($.isFunction($.fn.lazy)) {
    //         $('.lazy').lazy();
    //     }
    // });

    setTimeout(function () {
        $('.preloader').fadeOut('hide', function () {
            // $(this).remove();

        });
    }, 0);
</script>
</body>

<input type="hidden" name="lat" class="lat" value="<?php echo e(Settings('lat')); ?>">
<input type="hidden" name="lng" class="lng" value="<?php echo e(Settings('lng')); ?>">
<input type="hidden" name="zoom" class="zoom" value="<?php echo e(Settings('zoom_level')); ?>">


</html>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\Modules/AoraPageBuilder\Resources/views/layouts/master.blade.php ENDPATH**/ ?>