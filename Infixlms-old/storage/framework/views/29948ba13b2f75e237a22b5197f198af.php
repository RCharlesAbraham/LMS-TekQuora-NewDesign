<div>
    <div class="courses_area">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section_tittle">
                                <h2><?php echo e(__('subscription.Plan')); ?>: <?php echo e($plan->title); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($lists)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $course =$list->course;
                                ?>
                                <div class="col-lg-4 col-xl-3">

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->type==1): ?>
                                        <div class="couse_wizged">
                                            <div class="thumb">
                                                <div class="thumb_inner lazy"
                                                     data-src="<?php echo e(getCourseImage($course->thumbnail)); ?>">

                                                    <?php if (isset($component)) { $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $attributes; } ?>
<?php $component = App\View\Components\PriceTag::resolve(['price' => $course->price,'discount' => $course->discount_price] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('price-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PriceTag::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990)): ?>
<?php $attributes = $__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990; ?>
<?php unset($__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990)): ?>
<?php $component = $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990; ?>
<?php unset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990); ?>
<?php endif; ?>

                                                </div>

                                            </div>
                                            <div class="course_content">
                                                <a href="<?php echo e(courseDetailsUrl($course->id,$course->type,$course->slug)); ?>">
                                                    <h4 class="noBrake" title="<?php echo e($course->title); ?>">
                                                        <?php echo e($course->title); ?>

                                                    </h4>
                                                </a>
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span><?php echo e($course->total_rating); ?>/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart): ?>
                                                            <a href="#" class="cart_store"
                                                               data-id="<?php echo e($course->id); ?>">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                                <div class="course_less_students">
                                                    <a>
                                                        <i class="ti-agenda"></i> <?php echo e($course->total_lessons); ?> <?php echo e(__('student.Lessons')); ?>

                                                    </a>
                                                    <a>
                                                        <i class="ti-user"></i> <?php echo e($course->total_enrolled); ?> <?php echo e(__('student.Students')); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif($course->type==2): ?>
                                        <div class="quiz_wizged">
                                            <a href="<?php echo e(courseDetailsUrl($course->id,$course->type,$course->slug)); ?>">
                                                <div class="thumb">
                                                    <div class="thumb_inner lazy"
                                                         data-src="<?php echo e(getCourseImage($course->thumbnail)); ?>">

                                                        <?php if (isset($component)) { $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $attributes; } ?>
<?php $component = App\View\Components\PriceTag::resolve(['price' => $course->price,'discount' => $course->discount_price] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('price-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PriceTag::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990)): ?>
<?php $attributes = $__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990; ?>
<?php unset($__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990)): ?>
<?php $component = $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990; ?>
<?php unset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990); ?>
<?php endif; ?>


                                                    </div>
                                                    <span class="quiz_tag"><?php echo e(__('quiz.Quiz')); ?></span>
                                                </div>
                                            </a>
                                            <div class="course_content">
                                                <a href="<?php echo e(courseDetailsUrl($course->id,$course->type,$course->slug)); ?>">
                                                    <h4 class="noBrake"
                                                        title="<?php echo e($course->title); ?>"> <?php echo e($course->title); ?></h4>
                                                </a>
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span><?php echo e($course->total_rating); ?>/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart): ?>
                                                            <a href="#" class="cart_store"
                                                               data-id="<?php echo e($course->id); ?>">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                                <div class="course_less_students">

                                                    <a>
                                                        <i class="ti-agenda"></i> <?php echo e($course->quiz->total_questions); ?>

                                                        <?php echo e(__('student.Question')); ?></a>
                                                    <a>
                                                        <i class="ti-user"></i> <?php echo e($course->total_enrolled); ?> <?php echo e(__('student.Students')); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php elseif($course->type==3): ?>
                                        <div class="quiz_wizged">
                                            <div class="thumb">
                                                <a href="<?php echo e(courseDetailsUrl($course->id,$course->type,$course->slug)); ?>">
                                                    <div class="thumb">
                                                        <div class="thumb_inner lazy"
                                                             data-src="<?php echo e(getCourseImage($course->thumbnail)); ?>">

                                                            <?php if (isset($component)) { $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $attributes; } ?>
<?php $component = App\View\Components\PriceTag::resolve(['price' => $course->price,'discount' => $course->discount_price] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('price-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\PriceTag::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990)): ?>
<?php $attributes = $__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990; ?>
<?php unset($__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990)): ?>
<?php $component = $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990; ?>
<?php unset($__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990); ?>
<?php endif; ?>


                                                        </div>
                                                        <span class="live_tag"><?php echo e(__('student.Live')); ?></span>
                                                    </div>
                                                </a>


                                            </div>
                                            <div class="course_content">
                                                <a href="<?php echo e(courseDetailsUrl($course->id,$course->type,$course->slug)); ?>">
                                                    <h4 class="noBrake"
                                                        title="<?php echo e($course->title); ?>"> <?php echo e($course->title); ?></h4>
                                                </a>
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span><?php echo e($course->total_rating); ?>/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart): ?>
                                                            <a href="#" class="cart_store"
                                                               data-id="<?php echo e($course->id); ?>">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                                <div class="course_less_students">
                                                    <a> <i
                                                            class="ti-agenda"></i> <?php echo e($course->class->total_class); ?>

                                                        <?php echo e(__('student.Classes')); ?></a>
                                                    <a>
                                                        <i class="ti-user"></i> <?php echo e($course->total_enrolled); ?> <?php echo e(__('student.Students')); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($lists)==0): ?>

                            <div class="col-lg-12">
                                <div
                                    class="Nocouse_wizged text-center d-flex align-items-center justify-content-center">
                                    <h1>
                                        <div class="thumb">
                                            <img style="width: 50px"
                                                 src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/img/not-found.png"
                                                 alt="">
                                            <?php echo e(__('frontend.No Course Found')); ?>

                                        </div>

                                    </h1>
                                </div>
                            </div>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="mt-4">
                        <?php echo e($lists->appends(Request::all())->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\subscription-course-list-page-section.blade.php ENDPATH**/ ?>