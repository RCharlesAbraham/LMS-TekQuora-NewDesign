<div>
    <div class="instractors_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section__title2 mb_76">
                        <span><?php echo e(__('frontend.Popular Instructors')); ?></span>
                        <h4><?php echo e(__('frontend.Making sure that our products exceed customer expectations')); ?>

                            <br><?php echo e(__('frontend.for quality, style and performance')); ?>.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($instructors)): ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $instructors->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-md-6 col-lg-4 col-xl-3">
                            <div class="single_instractor mb_30">
                                <a href="<?php echo e(route('instructorDetails',[$instructor->id,Str::slug($instructor->name,'-')])); ?>"
                                   class="thumb">
                                    <img src="<?php echo e(getProfileImage($instructor->image,$instructor->name)); ?>" alt="">
                                </a>
                                <a href="<?php echo e(route('instructorDetails',[$instructor->id,Str::slug($instructor->name,'-')])); ?>">
                                    <h4><?php echo e($instructor->name); ?></h4></a>
                                <span><?php echo e($instructor->headline); ?></span>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\instructors-page-populer-section.blade.php ENDPATH**/ ?>