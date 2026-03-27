<!-- hero area:start -->

<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title') ? Settings('site_title') : 'Infix LMS'); ?> | <?php echo e(__('appointment.Post Request')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

    <link rel="stylesheet"
          href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\jquery-ui.min.css')); ?><?php echo e(assetVersion()); ?>"/>
    <style>
        .primary_checkbox input:checked ~ .checkmark {
            background: var(--system_primery_color);
            border-color: var(--system_primery_color);
        }

        .tutor_post .primary_checkbox {
            align-items: flex-start !important;
        }
    </style>
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules\Appointment\Resources\assets\frontend\css\appointment.css')); ?><?php echo e(assetVersion()); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

    <main class="tutor_post">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="tutor_post_inner">
                        <h4><?php echo e(__('appointment.Post a Request')); ?></h4>
                        <form action="" method='POST'>
                            <?php echo Form::open(['route' => 'appointment.post.store', 'method' => 'POST']); ?>

                            <div class="input-control clearfix">
                                <label for="#"
                                       class="input-control-label"><?php echo e(__('appointment.Tutoring Category')); ?></label>
                                <select class="input-control-input active_nice_select" name="teaching_category">
                                    <option value=""><?php echo e(__('appointment.Select Category')); ?></option>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>" <?php echo e(isset($request) ? $request[0]['teaching_category'] == $item->id?'selected':'':''); ?>><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </select>
                            </div>
                            <div class="input-control">
                                <label for="#" class="input-control-label"><?php echo e(__('appointment.Headline')); ?></label>
                                <input type="text" name="headline" class="input-control-input"
                                       placeholder='Type headline here'
                                       value="<?php echo e(isset($request) ? $request[0]['headline'] : ''); ?>">
                            </div>
                            <div class="input-control">
                                <label for="#" class="input-control-label"><?php echo e(__('appointment.Requirements')); ?></label>
                                <textarea class="input-control-input" name="requirement"
                                          placeholder='Specify additional details'><?php echo e(isset($request) ? $request[0]['requirement'] : ''); ?></textarea>
                            </div>
                            <div class="input-control">
                                <label for="#" class="input-control-label"><?php echo e(__('appointment.Price Range')); ?></label>
                                <div class="price_range">
                                    <div class='price_range_width'>
                                        <div class="price_range_inner">
                                            <input type="text" class="input-control-input d-inline-block" id='min_price'
                                                   value="<?php echo e(isset($request) ? $request[0]['min_price'] : 100); ?>"
                                                   name="min_price">
                                            <span>–</span>
                                            <input type="text" name="max_price"
                                                   class="input-control-input d-inline-block"
                                                   id='max_price'
                                                   value="<?php echo e(isset($request) ? $request[0]['max_price'] : 300); ?>">
                                            <span>USD</span>
                                        </div>
                                        <div id="price-range"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="input-control">
                                <label for="#" class="input-control-label"><?php echo e(__('common.Name')); ?></label>
                                <input type="text" class="input-control-input" name="name"
                                       value="<?php echo e(isset($request) ? $request[0]['name'] : ''); ?>"
                                       placeholder='Enter Name'>
                            </div>
                            <div class="input-control">
                                <label for="#"
                                       class="input-control-label"><?php echo e(__('appointment.E-mail Address')); ?></label>
                                <input type="email" class="input-control-input" name="email"
                                       value="<?php echo e(isset($request) ? $request[0]['email'] : ''); ?>"
                                       placeholder='Type e-mail address here'>
                            </div>
                            <div class="input-control">
                                <input type="submit" value="Save and Continue" class="input-control-input w-auto">
                            </div>
                            <div class="input-control">
                                <label class="primary_checkbox d-flex m-0">
                                    <input type="checkbox" checked>
                                    <span class="checkmark mr_15"></span>
                                    <span class="label_name"><?php echo e(__('appointment.By clicking Save and continue, you agree to Mastery’s')); ?> <a
                                                href="<?php echo e(url('/pages/terms')); ?>"><?php echo e(__('appointment.Terms of Service')); ?></a>
                                            <?php echo e(__('appointment.And')); ?> <a href="<?php echo e(url('/pages/terms')); ?>">
                                                <?php echo e(__('appointment.Privacy Policy')); ?></a></span>
                                </label>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\appointment_tutor_post_page.blade.php ENDPATH**/ ?>