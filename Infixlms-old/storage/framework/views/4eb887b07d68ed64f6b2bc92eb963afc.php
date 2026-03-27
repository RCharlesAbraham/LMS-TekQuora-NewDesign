<!doctype html>
<html dir="<?php echo e(isRtl()?'rtl':''); ?>" class="<?php echo e(isRtl()?'rtl':''); ?>" lang="en" itemscope
      itemtype="<?php echo e(url('/')); ?>">

<head>
    <?php $config = (new \LaravelPWA\Services\ManifestService)->generate(); echo $__env->make( 'laravelpwa::meta' , ['config' => $config])->render(); ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
    <link rel="icon" href="<?php echo e(asset(Settings('favicon'))); ?><?php echo e(assetVersion()); ?>" type="image/png"/>

    <meta property="og:url" content="<?php echo e(url()->current()); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo $__env->yieldContent('meta_title',Settings('site_title')); ?>;"/>
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description',Settings('footer_about_description')); ?>"/>
    <meta property="og:image" content="<?php echo $__env->yieldContent('og_image',Settings('logo')); ?>"/>
    <meta property="og:type" content="website">
    <meta property="og:image:type" content="image/png"/>
    <meta name="title" content="<?php echo $__env->yieldContent('meta_title',Settings('site_title')); ?>;">
    <meta name="description" content="<?php echo e(Settings('meta_description')); ?>">
    <meta name="keywords" content="<?php echo e(Settings('meta_keywords')); ?>">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(Settings('google_analytics') )): ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(Settings('google_analytics')); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', '<?php echo e(Settings('google_analytics')); ?>');
        </script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="<?php echo e(Settings('site_name')); ?>">

    <meta itemprop="image" content="<?php echo e(asset(Settings('logo') )); ?>">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(routeIs('frontendHomePage')): ?>
        <meta itemprop="description" content="<?php echo e(Settings('meta_description')); ?>">
        <meta property="og:description" content="<?php echo e(Settings('meta_description')); ?>">
        <meta itemprop="keywords" content="<?php echo e(Settings('meta_keywords')); ?>">

    <?php elseif(routeIs('courseDetailsView')): ?>
        <meta itemprop="description" content="<?php echo e($course->meta_description); ?>">
        <meta property="og:description" content="<?php echo e($course->meta_description); ?>">
        <meta itemprop="keywords" content="<?php echo e($course->meta_keywords); ?>">
    <?php elseif(routeIs('quizDetailsView')): ?>
        <meta itemprop="description" content="<?php echo e($course->meta_description); ?>">
        <meta property="og:description" content="<?php echo e($course->meta_description); ?>">
        <meta itemprop="keywords" content="<?php echo e($course->meta_keywords); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <meta itemprop="author" content="<?php echo e(Settings('site_name')); ?>">

    <!-- Facebook Meta Tags -->

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset(Settings('favicon') )); ?>">
    <!-- Place favicon.ico in the root directory -->


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

    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/themify-icons.css')); ?><?php echo e(assetVersion()); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/notification.css<?php echo e(assetVersion()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/mega_menu.css')); ?>">

    <link href="<?php echo e(asset('public/backend/css/summernote-bs4.min.css')); ?><?php echo e(assetVersion()); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/preloader.css')); ?><?php echo e(assetVersion()); ?>"/>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(str_contains(request()->url(), 'chat')): ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/jquery-ui.css')); ?><?php echo e(assetVersion()); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('public/backend/vendors/select2/select2.css')); ?><?php echo e(assetVersion()); ?>"/>
        <link rel="stylesheet" href="<?php echo e(asset('public/chat/css/style-student.css')); ?><?php echo e(assetVersion()); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->check() && auth()->user()->role_id == 3 && !str_contains(request()->url(), 'chat')): ?>
        <link rel="stylesheet" href="<?php echo e(asset('public/chat/css/notification.css')); ?><?php echo e(assetVersion()); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive("WhatsappSupport")): ?>
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
        window._translations = <?php echo $jsonLang??''; ?>;

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

    <input type="hidden" name="lat" class="lat" value="<?php echo e(Settings('lat')); ?>">
    <input type="hidden" name="lng" class="lng" value="<?php echo e(Settings('lng')); ?>">
    <input type="hidden" name="zoom" class="zoom" value="<?php echo e(Settings('zoom_level')); ?>">
    <input type="hidden" id="baseUrl" value="<?php echo e(url('/')); ?>">
    <input type="hidden" name="chat_settings" id="chat_settings" value="<?php echo e(env('BROADCAST_DRIVER')); ?>">
    <input type="hidden" name="slider_transition_time" id="slider_transition_time"
           value="<?php echo e(Settings('slider_transition_time')?Settings('slider_transition_time'):5); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/app.css<?php echo e(assetVersion()); ?>"
          media="screen,print">

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isRtl()): ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style_rtl.css<?php echo e(assetVersion()); ?>"
              media="screen,print">
    <?php else: ?>
        <link rel="stylesheet"
              href="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/css/frontend_style.css<?php echo e(assetVersion()); ?>"
              media="screen,print">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/js/common.js<?php echo e(assetVersion()); ?>"></script>
    <?php echo $__env->yieldContent('css'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/custom.css')); ?>">
</head>

<body>

<?php echo $__env->make('secret_login', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/frontend/infixlmstheme/partials/_header.blade.php ENDPATH**/ ?>