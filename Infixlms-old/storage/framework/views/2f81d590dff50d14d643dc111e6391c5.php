<?php $__env->startSection('content'); ?>


    <style>
        .error_wrapper{
            padding: 243px 0 250px 0;

        }
    </style>

    <div class="error_wrapper">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="error_wrapper_info text-center">
                        <div class="thumb">
                            <img src="<?php echo e(asset('/public/infixlmstheme/')); ?>/img/banner/error_thumb.png" alt="">
                        </div>
                        <h3><?php echo e(__('frontend.Verify Your Email Address')); ?></h3>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('resent')): ?>
                            <p><?php echo e(__('frontend.A fresh verification link has been sent to your email address')); ?></p>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <br>

                        <p class="mb-2 h6">
                            <?php echo e(__('frontend.Before proceeding, please check your email for a verification link Login in Using that Link')); ?>

                        </p>
                        <form method="POST" class="" action="<?php echo e(route('verification_mail_resend')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="">
                                <button type="submit" class="theme_btn">
                                    <?php echo e(__('frontend.Resend Mail')); ?>

                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.infixlmstheme.auth.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\auth\verify.blade.php ENDPATH**/ ?>