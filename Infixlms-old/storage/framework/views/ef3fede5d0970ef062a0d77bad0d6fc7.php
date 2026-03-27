<div class="category_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($homeContent)): ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($homeContent->show_key_feature==1): ?>

                        <div class="couses_category">
                            <div class="row">


                                <div class="col-xl-4 col-md-4">
                                    <div class="single_course_cat">
                                        <div class="icon">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->key_feature_logo1)): ?>
                                                <img
                                                    src="<?php echo e(asset($homeContent->key_feature_logo1)); ?>"
                                                    alt="">
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                        <div class="course_content">
                                            <h4>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->feature_link1)): ?>
                                                    <a
                                                        href="<?php echo e($homeContent->feature_link1); ?>"> <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        <?php echo e($homeContent->key_feature_title1); ?>

                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->feature_link1)): ?>   </a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </h4>
                                            <p><?php echo e($homeContent->key_feature_subtitle1); ?> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4">
                                    <div class="single_course_cat">
                                        <div class="icon">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->key_feature_logo2)): ?>
                                                <img
                                                    src="<?php echo e(asset($homeContent->key_feature_logo2)); ?>"
                                                    alt="">
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                        <div class="course_content">
                                            <h4>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->feature_link2)): ?>
                                                    <a
                                                        href="<?php echo e($homeContent->feature_link2); ?>"> <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        <?php echo e($homeContent->key_feature_title2); ?>

                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->feature_link2)): ?>   </a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </h4>
                                            <p><?php echo e($homeContent->key_feature_subtitle2); ?> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-4">
                                    <div class="single_course_cat">
                                        <div class="icon">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->key_feature_logo3)): ?>
                                                <img
                                                    src="<?php echo e(asset($homeContent->key_feature_logo3)); ?>"
                                                    alt="">
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                        <div class="course_content">
                                            <h4>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->feature_link3)): ?>
                                                    <a
                                                        href="<?php echo e($homeContent->feature_link3); ?>"> <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        <?php echo e($homeContent->key_feature_title3); ?>

                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($homeContent->feature_link3)): ?>   </a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </h4>
                                            <p><?php echo e($homeContent->key_feature_subtitle3); ?> </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section__title mb_40">
                    <h3>
                        <?php echo e(@$homeContent->category_title); ?>

                    </h3>
                    <p>
                        <?php echo e(@$homeContent->category_sub_title); ?>

                    </p>

                    <a href="<?php echo e(route('courses')); ?>"
                       class="line_link"><?php echo e(__('frontend.View All Courses')); ?></a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($categories )): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($key==0): ?>
                                    <div class="category_wiz mb_30">
                                        <div class="thumb cat1"
                                             style="background-image: url('<?php echo e(asset($category->thumbnail)); ?>')">
                                            <a href="<?php echo e(route('courses')); ?>?category=<?php echo e($category->id); ?>"
                                               class="cat_btn"><?php echo e($category->name); ?></a>
                                        </div>
                                    </div>
                                    <a href="<?php echo e(route('courses')); ?>"
                                       class="brouse_cat_btn ">
                                        <?php echo e(__('frontend.Browse all of other categories')); ?>

                                    </a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($categories )): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($key==1): ?>
                                    <div class="category_wiz mb_30">
                                        <div class="thumb cat2"
                                             style="background-image: url('<?php echo e(asset($category->thumbnail)); ?>')">
                                            <a href="<?php echo e(route('courses')); ?>?category=<?php echo e($category->id); ?>"
                                               class="cat_btn"><?php echo e($category->name); ?></a>
                                        </div>
                                    </div>
                                <?php elseif($key==2): ?>
                                    <div class="category_wiz mb_30">
                                        <div class="thumb  cat3"
                                             style="background-image: url('<?php echo e(asset($category->thumbnail)); ?>')">
                                            <a href="<?php echo e(route('courses')); ?>?category=<?php echo e($category->id); ?>"
                                               class="cat_btn"><?php echo e($category->name); ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\home-page-category-section.blade.php ENDPATH**/ ?>