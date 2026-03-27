<div>
    <div class="main_content_iner main_content_padding">

        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title3 margin-50">
                            <h3><?php echo e(__('noticeboard.Noticeboard')); ?></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="noticeboard-wrap">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $noticeboards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticeboard): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="noticeboard-card"
                                     style="--noticeboard_bg:<?php echo e($noticeboard->noticeType->color); ?>">
                                    <div class="noticeboard-card-left">
                                            <span
                                                class="d-block"><?php echo e(showDate($noticeboard->created_at)); ?> </span>
                                        <a href="#"><?php echo e($noticeboard->title); ?></a>
                                    </div>
                                    <div class="noticeboard-card-right">
                                        <a href="#" data-url="<?php echo e(route('showNoticeboard',$noticeboard->id)); ?>"
                                           class="showNoticeboard theme-btn btn_sm"><?php echo e(__('frontend.View Details')); ?></a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mt-4 mt-lg-5">

                            <?php echo e($noticeboards->links(theme('partials._new_pagination'))); ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\noticeboard.blade.php ENDPATH**/ ?>