<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('common.Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

    <link href="<?php echo e(asset('public/frontend/infixlmstheme/css/class_details.css')); ?><?php echo e(assetVersion()); ?>" rel="stylesheet"/>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>
    <div class="main_content_iner main_content_padding">

        <div class="container">


            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="recommended_courses">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__title3 margin_50">
                                <h3><?php echo e($value->title); ?></h3>
                                <span style="color: red">Expiry Date : <?php echo e($value->expire); ?></span> <span><a
                                            href="<?php echo e(route('bundle.renew',['bundle_id'=>$value->id])); ?>"> <?php echo e(__('bundleSubscription.Renew')); ?> </a> </span>
                                <p><?php echo e($value->about); ?></p>
                            </div>
                        </div>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $value->course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $raw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="col-xl-4 col-md-6">
                                <div class="quiz_wizged">

                                    <a href="<?php echo e(route('continueCourse',[$raw->course->slug])); ?>">
                                        <div class="thumb">
                                            <div class="thumb_inner lazy"
                                                 data-src="<?php echo e(file_exists($raw->course->thumbnail) ? asset($raw->course->thumbnail) : asset('public/\uploads/course_sample.png')); ?>">

<span class="prise_tag">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$raw->course->discount_price!=null): ?>
        <?php echo e(getPriceFormat($raw->course->discount_price)); ?>

    <?php else: ?>
        <?php echo e(getPriceFormat($raw->course->price)); ?>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</span>


                                            </div>

                                        </div>
                                    </a>

                                    <div class="course_content">
                                        <a href="<?php echo e(route('continueCourse',[$raw->course->slug])); ?>">
                                            <h4 class="noBrake"
                                                title="<?php echo e($raw->course->title); ?>"> <?php echo e($raw->course->title); ?></h4>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($data)==0): ?>
                <div class="col-12">
                    <div class="section__title3 margin_50">
                        <p class="text-center"><?php echo e(__('bundleSubscription.No Bundle Purchased Yet')); ?>!</p>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        </div>


    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/class_details.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(theme('layouts.dashboard_master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\bundlesubscription_panel.blade.php ENDPATH**/ ?>