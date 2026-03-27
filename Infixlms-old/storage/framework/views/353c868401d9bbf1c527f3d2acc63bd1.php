<div>
    <section class="work_process section_padding bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section__title  text-center mb_50">
                        <h3>
                            <?php echo e($work->section); ?>

                        </h3>
                        <p>
                            <?php echo e($work->title); ?>


                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5 col-xl-4">
                    <div class="work_process_content">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($processes)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $processes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single_work_process">
                                    <div class="list_number">
                                        0<?php echo e(++$key); ?>

                                    </div>
                                    <h4><?php echo e($p->title); ?></h4>
                                    <p>
                                        <?php echo e($p->description); ?>

                                    </p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
                <div class="col-md-7 col-xl-7">
                    <div class="work_process_video">
                        <div class="video_img">
                            <img src="<?php echo e(asset($work->image)); ?>" alt="#"
                                 class="img-fluid">
                            <a href="<?php echo e(youtubeVideo($work->video)); ?>" class="popup_video popup-video"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\become-instructor-page-process.blade.php ENDPATH**/ ?>