<div>
    <div>
        <div class="main_content_iner main_content_padding">
            <div class="container">
                <div class="my_courses_wrapper">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="section__title3 margin-50">
                                <h3>
                                    <?php echo e(__('org-subscription.My Plan')); ?> | <?php echo e($plan->title); ?>

                                </h3>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <form action="">
                                <div class="input-group theme_search_field pt-0 pb-3 float-end w-50">
                                    <div class="input-group-prepend">
                                        <button class="btn" type="button" id="button-addon1"><i
                                                class="ti-search"></i>
                                        </button>
                                    </div>

                                    <input type="text" class="form-control" name="search"
                                           placeholder="" value="<?php echo e($request->search); ?>"
                                           onfocus="this.placeholder = '<?php echo e(__('org-subscription.My Plan')); ?>'"
                                           onblur="this.placeholder = '<?php echo e(__('org-subscription.My Plan')); ?>'">

                                </div>
                            </form>
                        </div>
                        <div class="col-xl-12 col-md-6 pb-4">
                            <div class="statistic d-flex flex-wrap gap_15  justify-content-between">
                                <div class="item d-flex gap_15 align-items-center">
                                    <i class="far fa-calendar-minus"></i>
                                    <div class="status text-nowrap">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->type ==1): ?>
                                            <?php echo e(showDate($plan->join_date)); ?>

                                        <?php else: ?>
                                            <?php echo e(showDate($plan->subscription->start_date)); ?>

                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <br>
                                        <?php echo e(__('frontend.Start Date')); ?>

                                    </div>
                                </div>
                                <div class="item d-flex gap_15 align-items-center">
                                    <i class="far fa-calendar-minus"></i>
                                    <div class="status text-nowrap">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->type ==1): ?>
                                            <?php echo e(showDate($plan->end_date)); ?>

                                        <?php else: ?>
                                            <?php echo e(showDate($plan->subscription->end_date)); ?>

                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <br>
                                        <?php echo e(__('frontend.End Date')); ?>

                                    </div>
                                </div>
                                <div class="item d-flex gap_15 align-items-center">
                                    <i class="far fa-clock"></i>
                                    <div class="status text-nowrap">
                                        <?php echo e($plan->remaining()); ?>

                                        <br>
                                        <?php echo e(__('frontend.Day remaining')); ?>

                                    </div>
                                </div>
                                <div class="item d-flex gap_15 align-items-center">
                                    <i class="fas fa-code-branch"></i>
                                    <div class="status text-nowrap">
                                        <?php echo e($plan->sequence == 1 ? 'Yes' : "No"); ?>

                                        <br>
                                        <?php echo e(__('frontend.Complete By Sequence')); ?>

                                    </div>
                                </div>
                                <div class="item d-flex gap_15 align-items-center">
                                    <i class="far fa-check-circle"></i>
                                    <div class="status text-nowrap">
                                        <?php echo e($plan->totalCompleted()['completed_course']); ?>/<?php echo e(count($plan->assign)); ?>

                                        <br>
                                        <?php echo e(__('frontend.Complete Item')); ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($courses)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SingleCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $course=$SingleCourse->course;

                                ?>

                                <div class="col-xl-4 col-md-6">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->type==1): ?>
                                        <div class="couse_wizged">
                                            <div class="thumb">
                                                <div class="thumb_inner lazy"
                                                     data-src="<?php echo e(getCourseImage($course->thumbnail)); ?>">


                                                </div>

                                            </div>
                                            <div class="course_content">
                                                <a href="<?php echo e(courseDetailsUrl($course->id,$course->type,$course->slug)); ?>">
                                                    <h4 class="twoLine_ellipsis" title="<?php echo e($course->title); ?>">
                                                        <?php echo e($course->title); ?>

                                                    </h4>
                                                </a>
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
                                                                 aria-valuenow="25"
                                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <p class="font_14 f_w_400"><?php echo e(round($course->loginUserTotalPercentage)); ?>

                                                            % <?php echo e(__('student.Complete')); ?></p>
                                                    </div>
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


                                                    </div>
                                                    <span class="quiz_tag"><?php echo e(__('quiz.Quiz')); ?></span>
                                                </div>
                                            </a>
                                            <div class="course_content">
                                                <a href="<?php echo e(courseDetailsUrl($course->id,$course->type,$course->slug)); ?>">
                                                    <h4 class="twoLine_ellipsis"
                                                        title="<?php echo e($course->title); ?>"> <?php echo e($course->title); ?></h4>
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


                                                        </div>
                                                        <span class="live_tag"><?php echo e(__('student.Live')); ?></span>
                                                    </div>
                                                </a>


                                            </div>
                                            <div class="course_content">
                                                <a href="<?php echo e(courseDetailsUrl($course->id,$course->type,$course->slug)); ?>">
                                                    <h4 class="twoLine_ellipsis"
                                                        title="<?php echo e($course->title); ?>"> <?php echo e($course->title); ?></h4>
                                                </a>
                                                <div class="rating_cart">
                                                    <div class="rateing">
                                                        <span><?php echo e($course->total_rating); ?>/5</span>
                                                        <i class="fas fa-star"></i>
                                                    </div>
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
                            <div class="col-12">
                                <div class="section__title3 margin_50">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if( routeIs('myClasses')): ?>
                                        <p class="text-center"><?php echo e(__('student.No Class Purchased Yet')); ?>!</p>
                                    <?php elseif( routeIs('myQuizzes')): ?>
                                        <p class="text-center"><?php echo e(__('student.No Quiz Purchased Yet')); ?>!</p>
                                    <?php else: ?>
                                        <p class="text-center"><?php echo e(__('student.No Course Purchased Yet')); ?>!</p>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-org-subscription-plan-list-section.blade.php ENDPATH**/ ?>