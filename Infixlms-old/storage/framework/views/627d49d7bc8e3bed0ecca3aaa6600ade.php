<div>
    <div class="main_content_iner main_content_padding">
        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="my_courses_wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__title3 margin-50">
                                <h3>
                                    <?php echo e($page_heading); ?>

                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="row d-flex align-items-center mb-4 mb-lg-5">
                        <div class="col-xl-6 col-md-6">
                            <div class="short_select d-flex align-items-center pt-0 pb-3">
                                <h5 class="mr_10 font_16 f_w_500 mb-0"><?php echo e(__('frontend.Filter By')); ?>:</h5>
                                <input type="hidden" id="siteUrl" value="<?php echo e(route(\Request::route()->getName())); ?>">
                                <select class="theme_select my-course-select w-50" id="categoryFilter">
                                    <option value="" data-display="<?php echo e(__('frontend.All Categories')); ?>">
                                        <?php echo e(__('frontend.All Categories')); ?></option>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories->where('parent_id',0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make('backend.categories._single_select_option',['category'=>$category,'level'=>1], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class=" col-xl-6 col-md-6 pb-3">
                            <form action="<?php echo e(route(\Request::route()->getName())); ?>">
                                <div class="input-group theme_search_field pt-0 pb-3 float-end  w-50">
                                    <div class="input-group-prepend">
                                        <button class="btn" type="button" id="button-addon1"><i class="ti-search"></i>
                                        </button>
                                    </div>

                                    <input type="text" class="form-control" name="search"
                                           placeholder="<?php echo e($search_text); ?>" value="<?php echo e($search); ?>"
                                           onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = '<?php echo e($search_text); ?>'">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($courses)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SingleCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $course = $SingleCourse->course;
                                ?>
                                <div class="col-xl-4 col-md-6">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->type == 1): ?>
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
                                                <a href="<?php echo e(route('courseDetailsView', [$course->slug])); ?>">
                                                    <h4 class="noBrake" title="<?php echo e($course->title); ?>">
                                                        <?php echo e($course->title); ?>

                                                    </h4>
                                                </a>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($SingleCourse->pathway_id != null): ?>
                                                    <?php if (isset($component)) { $__componentOriginal27ee5b1b3d8de728e9ee9971a9b36b80 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal27ee5b1b3d8de728e9ee9971a9b36b80 = $attributes; } ?>
<?php $component = App\View\Components\MyCoursePathwayInfo::resolve(['enrolld' => $SingleCourse] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('my-course-pathway-info'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MyCoursePathwayInfo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal27ee5b1b3d8de728e9ee9971a9b36b80)): ?>
<?php $attributes = $__attributesOriginal27ee5b1b3d8de728e9ee9971a9b36b80; ?>
<?php unset($__attributesOriginal27ee5b1b3d8de728e9ee9971a9b36b80); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal27ee5b1b3d8de728e9ee9971a9b36b80)): ?>
<?php $component = $__componentOriginal27ee5b1b3d8de728e9ee9971a9b36b80; ?>
<?php unset($__componentOriginal27ee5b1b3d8de728e9ee9971a9b36b80); ?>
<?php endif; ?>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <div class="d-flex align-items-center gap_15">
                                                    <div class="rating_cart">
                                                        <div class="rateing">
                                                            <span><?php echo e($course->total_rating); ?>/5</span>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="progress_percent flex-fill text-end">
                                                        <div class="progress theme_progressBar ">
                                                            <div class="progress-bar" role="progressbar"
                                                                 style="width: <?php echo e(round($course->loginUserTotalPercentage)); ?>%"
                                                                 aria-valuenow="25" aria-valuemin="0"
                                                                 aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                        <p class="font_14 f_w_400">
                                                            <?php echo e(round($course->loginUserTotalPercentage)); ?>

                                                            % <?php echo e(__('student.Complete')); ?></p>
                                                    </div>
                                                </div>
                                                <div class="course_less_students">
                                                    <a>
                                                        <i class="ti-agenda"></i> <?php echo e($course->total_lessons); ?>

                                                        <?php echo e(__('student.Lessons')); ?>

                                                    </a>
                                                    <a>
                                                        <i class="ti-user"></i> <?php echo e($course->total_enrolled); ?>

                                                        <?php echo e(__('student.Students')); ?>

                                                    </a>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('CPD') && isset($cpds)): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count((array)$cpds)>0): ?>
                                                            <a class="cpd cpdValue"
                                                               data-course_id=<?php echo e($course->id); ?> data-bs-toggle="modal"
                                                               data-bs-target="#exampleModal">
                                                                <i class="ti-bolt"></i>
                                                                <?php echo e(__('cpd.CPD')); ?>

                                                            </a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif($course->type == 2): ?>
                                        <div class="quiz_wizged">
                                            <a href="<?php echo e(courseDetailsUrl($course->id, $course->type, $course->slug)); ?>">
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
                                                <a href="<?php echo e(courseDetailsUrl($course->id, $course->type, $course->slug)); ?>">
                                                    <h4 class="noBrake"
                                                        title="<?php echo e($course->title); ?>"> <?php echo e($course->title); ?>

                                                    </h4>
                                                </a>
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span><?php echo e($course->total_rating); ?>/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="course_less_students">

                                                    <a> <i class="ti-agenda"></i><?php echo e($course->quiz->total_questions); ?>

                                                        <?php echo e(__('student.Question')); ?></a>
                                                    <a>
                                                        <i class="ti-user"></i> <?php echo e($course->total_enrolled); ?>

                                                        <?php echo e(__('student.Students')); ?>

                                                    </a>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('CPD')): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($cpds)>0): ?>
                                                            
                                                            <a class="cpd cpdvalue" data-bs-toggle="modal"
                                                               data-course_id=<?php echo e($course->id); ?> data-bs-target="#exampleModal">
                                                                <i class="ti-bolt"></i>
                                                                <?php echo e(__('cpd.CPD')); ?>

                                                            </a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif($course->type == 3): ?>
                                        <div class="quiz_wizged">
                                            <div class="thumb">
                                                <a href="<?php echo e(courseDetailsUrl($course->id, $course->type, $course->slug)); ?>">
                                                    <div class="thumb">
                                                        <div class="thumb_inner lazy"
                                                             data-src="<?php echo e(getCourseImage($course->thumbnail)); ?>">
                                                            <?php if (isset($component)) { $__componentOriginal8fa9e2eb0992735be77e27a071f370a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8fa9e2eb0992735be77e27a071f370a1 = $attributes; } ?>
<?php $component = App\View\Components\ClassCloseTag::resolve(['class' => $course->class] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('class-close-tag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ClassCloseTag::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8fa9e2eb0992735be77e27a071f370a1)): ?>
<?php $attributes = $__attributesOriginal8fa9e2eb0992735be77e27a071f370a1; ?>
<?php unset($__attributesOriginal8fa9e2eb0992735be77e27a071f370a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8fa9e2eb0992735be77e27a071f370a1)): ?>
<?php $component = $__componentOriginal8fa9e2eb0992735be77e27a071f370a1; ?>
<?php unset($__componentOriginal8fa9e2eb0992735be77e27a071f370a1); ?>
<?php endif; ?>

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
                                                <a href="<?php echo e(courseDetailsUrl($course->id, $course->type, $course->slug)); ?>">
                                                    <h4 class="noBrake"
                                                        title="<?php echo e($course->title); ?>"> <?php echo e($course->title); ?>

                                                    </h4>
                                                </a>
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span><?php echo e($course->total_rating); ?>/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="course_less_students">
                                                    <a> <i class="ti-agenda"></i> <?php echo e($course->class->total_class); ?>

                                                        <?php echo e(__('student.Classes')); ?></a>
                                                    <a>
                                                        <i class="ti-user"></i> <?php echo e($course->total_enrolled); ?>

                                                        <?php echo e(__('student.Students')); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <div class="mt-4">
                                <?php echo e($courses->links()); ?>

                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($courses) == 0): ?>
                            <div class="col-12">
                                <div class="section__title3 margin_50">
                                    <p class="text-center"><?php echo e(__('student.No Data found')); ?>!</p>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-upcoming-following-courses-page-section.blade.php ENDPATH**/ ?>