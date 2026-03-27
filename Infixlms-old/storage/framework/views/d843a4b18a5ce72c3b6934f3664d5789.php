<div>
    <div class="courses_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <?php if (isset($component)) { $__componentOriginal71dcaef01898064a08aaab310679088f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71dcaef01898064a08aaab310679088f = $attributes; } ?>
<?php $component = App\View\Components\ClassPageSectionSidebar::resolve(['level' => $level,'type' => $type,'categories' => $categories,'category' => $category,'languages' => $languages,'language' => $language,'mode' => $mode] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('class-page-section-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ClassPageSectionSidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71dcaef01898064a08aaab310679088f)): ?>
<?php $attributes = $__attributesOriginal71dcaef01898064a08aaab310679088f; ?>
<?php unset($__attributesOriginal71dcaef01898064a08aaab310679088f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71dcaef01898064a08aaab310679088f)): ?>
<?php $component = $__componentOriginal71dcaef01898064a08aaab310679088f; ?>
<?php unset($__componentOriginal71dcaef01898064a08aaab310679088f); ?>
<?php endif; ?>
                </div>
                <div class="col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-12">
                            <div class="box_header d-flex flex-wrap align-items-center justify-content-between">

                                <h5 class="font_16 f_w_500 ">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($search) && !empty($search)): ?>

                                        <?php echo e(__('courses.Search result for')); ?> "<?php echo e($search); ?>

                                        "<br style="line-break: auto">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($courses->count()==0): ?>

                                        <?php else: ?>
                                            <span
                                                class="subtitle"><?php echo e($total); ?> <?php echo e(__('coupons.Topics are available')); ?></span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </h5>

                                <div class="box_header_right mb_30">
                                    <div class="short_select d-flex align-items-center">
                                        <h5 class="mr_10 font_16 f_w_500 mb-0"><?php echo e(__('frontend.Order By')); ?>:</h5>
                                        <select class="small_select" id="order">
                                            <option value="" data-display="None"><?php echo e(__('frontend.None')); ?></option>
                                            <option
                                                value="price" <?php echo e($order=="price"?'selected':''); ?>><?php echo e(__('frontend.Price')); ?></option>
                                            <option
                                                value="date" <?php echo e($order=="date"?'selected':''); ?>><?php echo e(__('frontend.Date')); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($courses)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-6 col-xl-4">

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
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($courses)==0): ?>

                            <div class="col-lg-12">
                                <div
                                    class="Nocouse_wizged text-center d-flex align-items-center justify-content-center">
                                    <h1>
                                        <div class="thumb">
                                            <img style="width: 50px"
                                                 src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/img/not-found.png"
                                                 alt="">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!isset($search)): ?>
                                                <?php echo e(__('frontend.No Course Found')); ?>

                                            <?php else: ?>
                                                <?php echo e(__('frontend.No results found for')); ?> <?php echo e($search); ?>

                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>

                                    </h1>
                                </div>
                            </div>

                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="mt-4">
                        <?php echo e($courses->appends(Request::all())->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" class="class_route" name="class_route" value="<?php echo e(url()->current()); ?>">

    <input type="hidden" class="search" value="<?php echo e(isset($search)?$search:''); ?>">
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\search-page-section.blade.php ENDPATH**/ ?>