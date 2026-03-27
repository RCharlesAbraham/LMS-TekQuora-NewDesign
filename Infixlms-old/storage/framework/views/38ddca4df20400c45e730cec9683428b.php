<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5 footer-copyright">
                <p class="p-3 mb-0"><?php echo Settings('copyright_text'); ?></p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<div class="modal fade admin-query" id="commonModal">

</div>

<div id="mediaManagerDiv">
</div>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive("AIContent")): ?>
    <?php echo $__env->make('aicontent::content_generator_modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive("WhatsappSupport")): ?>
    <?php echo $__env->make('whatsappsupport::partials._popup', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php echo $__env->make('backend.partials.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo Toastr::message(); ?>


<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
    <script>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        toastr.error('<?php echo e($error); ?>', '<?php echo e(trans('common.Error')); ?>', {
            closeButton: true,
            progressBar: true,
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(env('APP_SYNC') || config('app.demo_mode')): ?>
    <a target="_blank" href="https://aorasoft.com/" class="float_button"> <i class="ti-shopping-cart-full"></i>
        <h3>Purchase InfixLMS</h3>
    </a>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<script src="<?php echo e(asset('public/js/alpine.min.js')); ?><?php echo e(assetVersion()); ?>"></script>

<script>
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
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('real_time_qa_update') == 1): ?>

    <script src="<?php echo e(asset('public/js/pusher.min.js')); ?>"></script>

    <script>
        let footerPusher = new Pusher('<?php echo e(config('broadcasting.connections.pusher.key')); ?>', {
            cluster: '<?php echo e(config('broadcasting.connections.pusher.options.cluster')); ?>'
        });

        let channel2 = footerPusher.subscribe('new-notification-channel');

        channel2.bind('new-notification', function (data) {
            if (data.login_user_id != '<?php echo e(auth()->id()); ?>' && data.type != 'Reply') {
                $.ajax({
                    url: '<?php echo e(route('getNotificationUpdate')); ?>',
                    method: 'GET',
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (response) {
                        $('.Notification_body').html(response.notification_body);
                        $('.notification_count').html(response.total);
                        toastr.success("<?php echo e(__('frontend.New notification')); ?>");
                    },
                    error: function (response) {
                    }
                });
            }
        });

    </script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php echo $__env->make('backend.partials.media_script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldPushContent('js'); ?>

    </body>
    </html>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\footer.blade.php ENDPATH**/ ?>