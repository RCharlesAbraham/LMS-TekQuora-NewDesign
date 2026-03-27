<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('frontend.Bundle')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('public/frontend/infixlmstheme/css/package.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('Modules/AoraPageBuilder/Resources/assets/css/style1.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainContent'); ?>

    <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal269900abaed345884ce342681cdc99f6 = $attributes; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['banner' => $frontendContent->subscription_page_banner,'title' => $frontendContent->subscription_page_title,'subTitle' => $frontendContent->subscription_page_sub_title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Breadcrumb::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal269900abaed345884ce342681cdc99f6)): ?>
<?php $attributes = $__attributesOriginal269900abaed345884ce342681cdc99f6; ?>
<?php unset($__attributesOriginal269900abaed345884ce342681cdc99f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal269900abaed345884ce342681cdc99f6)): ?>
<?php $component = $__componentOriginal269900abaed345884ce342681cdc99f6; ?>
<?php unset($__componentOriginal269900abaed345884ce342681cdc99f6); ?>
<?php endif; ?>


    <!-- pricing_area::start  -->
    <div class="pricing_area">
        <div class="container">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('hide_category_for_bundle_subscription')!=1): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="pricing_carousel owl-carousel">


                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($categories )): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="single_course_slide text-center">
                                        <div class="icon">
                                            <img style="width: 80px!important;height: 60px"
                                                 src="<?php echo e(asset($category->thumbnail)); ?>" alt="">
                                        </div>
                                        <a href="<?php echo e(route('courses')); ?>?category=<?php echo e($category->id); ?>"
                                           class="cat_btn">
                                            <h4>
                                                <?php echo e($category->name); ?>


                                            </h4>
                                            <span><?php echo e(translatedNumber($category->courses_count)); ?> <?php echo e(__('frontend.Courses')); ?></span>
                                        </a>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="mt-5"></div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <div class="row">

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($BundleCourse)): ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $BundleCourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $oldPrice = 0;
                            foreach ($value->course as $raw){
                              $oldPrice += empty($raw->course->discount_price)?$raw->course->price:$raw->course->discount_price;
                            }

                        ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="package_widget mb_30 d-flex flex-column">
                                <div class="package_header text-center">
                                    <h3 class="oneLine_ellipsis"><?php echo e($value->title); ?></h3>
                                    <div class="package_rating d-flex align-items-center justify-content-center">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('show_review_for_bundle_subscription')): ?>
                                            <div class="feedmak_stars d-flex align-items-center">
                                                <?php
                                                    $star = 5;
                                                ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($x=0; $x < $value->reviews->avg('star'); $x++): ?>
                                                    <i class="fas fa-star"></i>
                                                    <?php
                                                        $star -= 1;
                                                    ?>
                                                <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($x=0; $x < $star; $x++): ?>
                                                    <i class="far fa-star"></i>
                                                <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <p>(<?php echo e($value->student); ?> <?php echo e(__('bundleSubscription.students')); ?>)</p>
                                    </div>
                                </div>
                                <div class="package_body d-flex flex-column flex-fill">
                                    <div class="package_lists flex-fill">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $value->course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$raw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div
                                                class="w-100 justify-content-between single_packageList <?php echo e($key>2?'d-none extra_'.$value->id:''); ?>">
                                                <p><?php echo e(Str::limit($raw->course->title, 40)); ?></p>
                                                <span><?php echo e(getPriceFormat(empty($raw->course->discount_price)?$raw->course->price:$raw->course->discount_price)); ?></span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($value->course)>3): ?>
                                        <div class="package_seperator" onclick="openAllCourse(<?php echo e($value->id); ?>)">
  <span>
                                <i class="fa fa-angle-down" id="seperator_<?php echo e($value->id); ?>"></i>
                            </span>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <div
                                        class="package_footer d-flex justify-content-between align-items-center flex-column">

                                        <div class="prise_tag">
                                            <h4>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($oldPrice!=0): ?>
                                                    <span><?php echo e(getPriceFormat($oldPrice)); ?></span>
                                                    <?php echo e(getPriceFormat($value->price)); ?>

                                                <?php else: ?>
                                                    <h4 class="text-center"><?php echo e(getPriceFormat($value->price)); ?></h4>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </h4>
                                            <p><?php echo e(__('bundleSubscription.Total')); ?> <?php echo e(count($value->course)); ?> <?php echo e(__('bundleSubscription.Course')); ?></p>
                                        </div>
                                        <a href="<?php echo e(route('bundle.show')); ?>?id=<?php echo e($value->id); ?>"
                                           class="theme_btn small_btn2 w-100 text-center"><?php echo e(__('bundleSubscription.View Details')); ?></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
    <!-- pricing_area::end  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script>
        function openAllCourse(plan_id) {
            var seperator = $('#seperator_' + plan_id);
            var seperator_class = seperator.attr('class');
            if (seperator_class == "fa fa-angle-down") {
                seperator.removeClass("fa fa-angle-down");
                seperator.addClass("fa fa-angle-up");
                $('.extra_' + plan_id).removeClass('d-none');
            } else if (seperator_class == "fa fa-angle-up") {
                seperator.removeClass("fa fa-angle-up");
                seperator.addClass("fa fa-angle-down");
                $('.extra_' + plan_id).addClass('d-none');


            }
        }
    </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\bundlesubscription_index.blade.php ENDPATH**/ ?>