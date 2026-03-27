<div>
    <input type="hidden" class="class_route" name="class_route" value="<?php echo e(route('freeCourses')); ?>">
    <div class="courses_area">
        <div class="container">
            <div class="row">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(courseSetting()->show_cql_left_sidebar==1): ?>

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
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php
                    if(courseSetting()->show_cql_left_sidebar==1){
                        $col_lg=8;
                        $col_xl=9;
                        $grid_size_lg=6;
                        $grid_size_xl=courseSetting()->size_of_grid;
                    }else{
                        $col_lg=12;
                        $col_xl=12;
                        $grid_size_lg=6;
                        $grid_size_xl=courseSetting()->size_of_grid;
                    }
                ?>
                <div class="col-lg-<?php echo e(@$col_lg); ?> col-xl-<?php echo e(@$col_xl); ?>">
                    <div class="row">
                        <div class="col-12">
                            <div class="box_header d-flex flex-wrap align-items-center justify-content-between">
                                <h5 class="font_16 f_w_500 mb_30"><?php echo e($total); ?> <?php echo e(__('frontend.Course are found')); ?></h5>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(courseSetting()->show_search_in_category==1): ?>

                                    <div class="mb_30">
                                        <form action="<?php echo e(route('search')); ?>">
                                            <div class="input-group theme_search_field">
                                                <div class="input-group-prepend">
                                                    <button class="btn" type="button" id="button-addon1"><i
                                                            class="ti-search"></i>
                                                    </button>
                                                </div>

                                                <input type="text" class="form-control" name="query"
                                                       placeholder="<?php echo e(__('frontend.Search for course, skills and Videos')); ?>"
                                                       onfocus="this.placeholder = ''"
                                                       onblur="this.placeholder = '<?php echo e(__('frontend.Search for course, skills and Videos')); ?>'">

                                            </div>
                                        </form>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
                                <div class="col-lg-<?php echo e(@$grid_size_lg); ?> col-xl-<?php echo e(@$grid_size_xl); ?>">
                                    <div class="couse_wizged">
                                        <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">
                                            <div class="thumb">

                                                <div class="thumb_inner lazy"
                                                     data-src="<?php echo e(getCourseImage($course->thumbnail)); ?>">
                                                </div>
                                                <span class="prise_tag">
                                        <span>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->discount_price!=null): ?>
                                                <?php echo e(getPriceFormat($course->discount_price)); ?>

                                            <?php else: ?>
                                                <?php echo e(getPriceFormat($course->price)); ?>

                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                          </span>
                                    </span>
                                            </div>
                                        </a>
                                        <div class="course_content">
                                            <a href="<?php echo e(courseDetailsUrl(@$course->id,@$course->type,@$course->slug)); ?>">

                                                <h4 class="noBrake" title=" <?php echo e($course->title); ?>">
                                                    <?php echo e($course->title); ?>

                                                </h4>
                                            </a>
                                            <div class="rating_cart">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(courseSetting()->show_rating==1): ?>
                                                    <div class="rateing">
                                                        <span><?php echo e($course->total_rating); ?>/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(courseSetting()->show_cart==1): ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$course->isLoginUserEnrolled && !$course->isLoginUserCart): ?>
                                                            <a href="#" class="cart_store"
                                                               data-id="<?php echo e($course->id); ?>">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->guest()): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$course->isGuestUserCart): ?>
                                                            <a href="#" class="cart_store"
                                                               data-id="<?php echo e($course->id); ?>">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                            </div>
                                            <div class="course_less_students">
                                                <a> <i class="ti-agenda"></i> <?php echo e($course->total_lessons); ?>

                                                    <?php echo e(__('frontend.Lessons')); ?>

                                                </a>

                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(courseSetting()->show_enrolled_or_level_section==1): ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(courseSetting()->enrolled_or_level==1): ?>
                                                        <a>
                                                            <i class="ti-user"></i> <?php echo e($course->total_enrolled); ?> <?php echo e(__('frontend.Students')); ?>

                                                        </a>
                                                    <?php elseif(courseSetting()->enrolled_or_level==3): ?>
                                                        <a>
                                                            <i class="ti-thumb-up"></i>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->mode_of_delivery==1): ?>
                                                                <?php echo e(__('courses.Online')); ?>

                                                            <?php elseif($course->mode_of_delivery==2): ?>
                                                                <?php echo e(__('courses.Distance Learning')); ?>

                                                            <?php else: ?>
                                                                <?php echo e(__('courses.Face-to-Face')); ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </a>
                                                    <?php else: ?>
                                                        <a>
                                                            <i class="ti-thumb-up"></i> <?php echo e(@$course->courseLevel->title); ?>

                                                        </a>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($courses)==0): ?>
                            <div class="col-lg-12">
                                <div
                                    class="Nocouse_wizged text-center d-flex align-items-center justify-content-center">
                                    <div class="thumb">
                                        <img style="width: 50px"
                                             src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/img/not-found.png"
                                             alt="">
                                    </div>
                                    <h1>
                                        <?php echo e(__('frontend.No Course Found')); ?>

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
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\free-course-page-section.blade.php ENDPATH**/ ?>