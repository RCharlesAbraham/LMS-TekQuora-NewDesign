<?php $__env->startSection('title'); ?>
    <?php echo e(Settings('site_title')  ? Settings('site_title')  : 'Infix LMS'); ?> | <?php echo e(__('frontend.Bundle')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/frontend/infixlmstheme/css/class_details.css')); ?><?php echo e(assetVersion()); ?>"/>
    <style>
        .lms_pricing_box .lms_pricing_head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            grid-gap: 15px;
            padding: 25.5px 25px 26.5px 40px;
            border-bottom: 1px solid #ebebeb;
            flex-wrap: wrap
        }

        .lms_pricing_box .lms_pricing_head h3 {
            font-size: 30px;
            font-weight: 900
        }

        .lms_pricing_box .lms_pricing_body .single_list {
            display: flex;
            justify-content: space-between;
            align-items: center;
            grid-gap: 15px;
            padding: 15px 25px;
            flex-wrap: wrap
        }

        .lms_pricing_box .lms_pricing_body .single_list:not(:last-child) {
            border-bottom: 1px solid #ebebeb
        }

        .lms_pricing_box .lms_pricing_head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            grid-gap: 15px;
            padding: 25.5px 25px 26.5px 40px;
            border-bottom: 1px solid #ebebeb;
            flex-wrap: wrap
        }

        .lms_pricing_box .lms_pricing_head h3 {
            font-size: 30px;
            font-weight: 900
        }

        .package_widget .package_footer {
            padding: 15px 25px 15px
        }

        .package_widget .package_footer .theme_btn.small_btn2 {
            padding: 13.5px 22px
        }

        .package_widget .package_footer .prise_tag h4 {
            font-size: 18px;
            font-weight: 900;
            color: var(--system_primery_color);
            margin-bottom: 0;
            line-height: 1;
            text-align: right
        }

        .package_widget .package_footer .prise_tag h4 span {
            text-decoration: line-through;
            color: #687083
        }

        .package_widget .package_footer .prise_tag p {
            font-size: 14px;
            font-weight: 600;
            font-family: var(--font_family1), sans-serif;
            color: #687083;
            margin-bottom: 5px
        }

        .gray-bg,
        .lms_pricing_box .lms_pricing_body {
            background: #fafafa
        }

        .lms_pricing_box {
            border: 1px solid #ebebeb;
        }

        .white_btn2 {
            background: rgba(251, 17, 89, .1);
            border-radius: 5px;
            font-family: var(--font_family2), sans-serif;
            font-size: 16px;
            color: var(--system_primery_color);
            font-weight: 600;
            padding: 13.5px 26px;
            border: 1px solid transparent;
            text-transform: capitalize;
            display: inline-block;
            line-height: 1;
        }
    </style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('mainContent'); ?>
    <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal269900abaed345884ce342681cdc99f6 = $attributes; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['banner' => $frontendContent->course_page_banner,'title' => $frontendContent->course_page_title,'subTitle' => $frontendContent->course_page_sub_title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

    <div class="pricing_area section_padding">
        <div class="container">

            <div class="row">
                <div class="col-xl-9 offset-xl-1">

                    <div class="lms_pricing_box mb_25">
                        <div class="lms_pricing_head">
                            <h3><?php echo e($course->title); ?></h3>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->course->count() > 0): ?>

                                <?php
                                    $enroll = \Modules\CourseSetting\Entities\CourseEnrolled::where('user_id',Auth::id())->where('bundle_course_id',$course->id)->first()
                                ?>

                                <div class="show-button d-flex">
                                    <div class="package_widget">
                                        <div class="package_footer">
                                            <div class="prise_tag">
                                                <h4> <?php echo e(getPriceFormat((int)$course->price)); ?> </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$enroll): ?>
                                        <a href="<?php echo e(route('bundle.cart',['bundle_id'=>$course->id])); ?>"
                                           class="theme_btn small_btn5"><?php echo e(__('common.Buy Now')); ?></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('student.dashboard')); ?>"
                                           class="theme_btn small_btn5"><?php echo e(__('common.Continue Watch')); ?></a>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>

                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>
                        <div class="lms_pricing_body">


                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->course->count() > 0): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bundleCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="single_list">
                                        <p><?php echo e(++$key); ?>. <?php echo e($bundleCourse->course->title); ?></p>
                                        <a href="<?php echo e(route('courseDetailsView', [$bundleCourse->course->slug] )); ?>"
                                           class="theme_line_btn small_btn3">View Details</a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php else: ?>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="dd-handle">
                                            <div
                                                class="text-center text-danger"> <?php echo e(__('bundleSubscription.No course found')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                        </div>
                    </div>
                    <a href="#"
                       class="white_btn2"><?php echo e(__('Course Duration')); ?> <?php echo e($course->days !== '' && $course->days!=0 ? $course->days.' '.trans('Days') : 'Life Time'); ?> </a>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->about): ?>
                        <br><br><br>
                        <h4 class="font_22 f_w_700"><?php echo e(__('bundleSubscription.Bundle Description')); ?></h4>
                        <hr>
                        <p><?php echo e($course->about); ?></p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('show_review_for_bundle_subscription')): ?>
                        <br> <br> <br> <br> <br> <br>
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-8">
                                <div class="course_review_wrapper">
                                    <div class="details_title">
                                        <h4 class="font_22 f_w_700"><?php echo e(__('frontend.Student Feedback')); ?></h4>
                                        <p class="font_16 f_w_400"><?php echo e($course->title); ?></p>
                                    </div>

                                    <div class="course_feedback">
                                        <div class="course_feedback_left">
                                            <h2><?php echo e($course->reviews->sum('star')); ?></h2>
                                            <div class="feedmak_stars">
                                                <?php

                                                    $main_stars=$course->reviews->avg('star');

                                                    $stars=intval($course->reviews->sum('star'));

                                                ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i = 0; $i <  $stars; $i++): ?>
                                                    <i class="fas fa-star"></i>
                                                <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($main_stars>$stars): ?>
                                                    <i class="fas fa-star-half"></i>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($main_stars==0): ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i = 0; $i <  5; $i++): ?>
                                                        <i class="far fa-star"></i>
                                                    <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                            <span><?php echo e(__('frontend.Course Rating')); ?></span>
                                        </div>

                                        <div class="feedbark_progressbar">
                                            <div class="single_progrssbar">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                         style="width: <?php echo e(getPercentageRating($course->starWiseReview,5)); ?>%"
                                                         aria-valuenow="<?php echo e(getPercentageRating($course->starWiseReview,5)); ?>"
                                                         aria-valuemin="0" aria-valuemax="100">


                                                    </div>
                                                </div>
                                                <div class="rating_percent d-flex align-items-center">
                                                    <div class="feedmak_stars d-flex align-items-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span><?php echo e(getPercentageRating($course->starWiseReview,5)); ?>%</span>
                                                </div>
                                            </div>
                                            <div class="single_progrssbar">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                         style="width: <?php echo e(getPercentageRating($course->starWiseReview,4)); ?>%"
                                                         aria-valuenow="<?php echo e(getPercentageRating($course->starWiseReview,4)); ?>"
                                                         aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="rating_percent d-flex align-items-center">
                                                    <div class="feedmak_stars d-flex align-items-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span><?php echo e(getPercentageRating($course->starWiseReview,4)); ?>%</span>
                                                </div>
                                            </div>
                                            <div class="single_progrssbar">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                         style="width: <?php echo e(getPercentageRating($course->starWiseReview,3)); ?>%"
                                                         aria-valuenow="<?php echo e(getPercentageRating($course->starWiseReview,3)); ?>"
                                                         aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="rating_percent d-flex align-items-center">
                                                    <div class="feedmak_stars d-flex align-items-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>

                                                    </div>
                                                    <span><?php echo e(getPercentageRating($course->starWiseReview,3)); ?>%</span>
                                                </div>
                                            </div>
                                            <div class="single_progrssbar">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                         style="width: <?php echo e(getPercentageRating($course->starWiseReview,2)); ?>%"
                                                         aria-valuenow="<?php echo e(getPercentageRating($course->starWiseReview,2)); ?>"
                                                         aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="rating_percent d-flex align-items-center">
                                                    <div class="feedmak_stars d-flex align-items-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span><?php echo e(getPercentageRating($course->starWiseReview,2)); ?>%</span>
                                                </div>
                                            </div>
                                            <div class="single_progrssbar">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                         style="width: <?php echo e(getPercentageRating($course->starWiseReview,1)); ?>%"
                                                         aria-valuenow="<?php echo e(getPercentageRating($course->starWiseReview,1)); ?>"
                                                         aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <div class="rating_percent d-flex align-items-center">
                                                    <div class="feedmak_stars d-flex align-items-center">
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <span><?php echo e(getPercentageRating($course->starWiseReview,1)); ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="course_review_header mb_20">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="review_poients">
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->reviews->count()<1): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() && $isEnrolled): ?>
                                                            <p class="theme_color font_16 mb-0"><?php echo e(__('frontend.Be the first reviewer')); ?></p>
                                                        <?php else: ?>

                                                            <p class="theme_color font_16 mb-0"><?php echo e(__('frontend.No Review found')); ?></p>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                    <?php else: ?>

                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="rating_star text-end">

                                                    <?php
                                                        $PickId=$course->id
                                                    ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check()): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->role_id==3): ?>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!in_array(Auth::user()->id,$reviewer_user_ids) && $isEnrolled): ?>

                                                                <div
                                                                    class="star_icon d-flex align-items-center justify-content-end">
                                                                    <a class="rating">
                                                                        <input type="radio" id="star5" name="rating"
                                                                               value="5"
                                                                               class="rating"/><label
                                                                            class="full" for="star5" id="star5"
                                                                            title="Awesome - 5 stars"
                                                                            onclick="Rates(5, <?php echo e(@$PickId); ?>)"></label>

                                                                        <input type="radio" id="star4" name="rating"
                                                                               value="4"
                                                                               class="rating"/><label
                                                                            class="full" for="star4"
                                                                            title="Pretty good - 4 stars"
                                                                            onclick="Rates(4, <?php echo e(@$PickId); ?>)"></label>

                                                                        <input type="radio" id="star3" name="rating"
                                                                               value="3"
                                                                               class="rating"/><label
                                                                            class="full" for="star3"
                                                                            title="Meh - 3 stars"
                                                                            onclick="Rates(3, <?php echo e(@$PickId); ?>)"></label>

                                                                        <input type="radio" id="star2" name="rating"
                                                                               value="2"
                                                                               class="rating"/><label
                                                                            class="full" for="star2"
                                                                            title="Kinda bad - 2 stars"
                                                                            onclick="Rates(2, <?php echo e(@$PickId); ?>)"></label>

                                                                        <input type="radio" id="star1" name="rating"
                                                                               value="1"
                                                                               class="rating"/><label
                                                                            class="full" for="star1"
                                                                            title="Bad  - 1 star"
                                                                            onclick="Rates(1,<?php echo e(@$PickId); ?>)"></label>

                                                                    </a>
                                                                </div>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="course_cutomer_reviews">
                                        <div class="details_title">
                                            <h4 class="font_22 f_w_700"><?php echo e(__('frontend.Reviews')); ?></h4>

                                        </div>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <div class="customers_reviews">
                                                <div class="customers_reviews">
                                                    <div class="single_reviews">


                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(reviewCanDelete($review->user_id,$course->user_id)): ?>
                                                            <div class="thumb link">
                                                                <?php echo e(substr($review->user->name, 0, 1)); ?>

                                                                <a class="position_right deleteBtn"
                                                                   href="<?php echo e(route('delete.bundle.review',$review->id)); ?>">
                                                                    <i class="fas fa-trash  fa-xs"></i> </a>
                                                            </div>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                        <div class="review_content"><h4
                                                                class="f_w_700"><?php echo e($review->user->name); ?></h4>
                                                            <div class="rated_customer d-flex align-items-center">
                                                                <div class="feedmak_stars">
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($x = 0; $x < $review->star; $x++ ): ?>
                                                                        <i class="fas fa-star"></i>
                                                                    <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                </div>
                                                                <span><?php echo e($review->updated_at->diffForHumans()); ?></span>
                                                            </div>
                                                            <p> <?php echo e($review->comment); ?> </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
    </div>


    <div class="modal cs_modal fade admin-query" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('bundleSubscription.Bundle Review')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <form action="<?php echo e(route('submit.bundle.review')); ?>" method="Post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="bundle_id" id="rating_course_id"
                               value="">
                        <input type="hidden" name="rating" id="rating_value" value="">

                        <div class="text-center">
                                                                <textarea class="lms_summernote" name="review" name=""
                                                                          id=""
                                                                          placeholder="<?php echo e(__('frontend.Write your review')); ?>"
                                                                          cols="30"
                                                                          rows="10"><?php echo e(old('review')); ?></textarea>
                            <span class="text-danger" role="alert"><?php echo e($errors->first('review')); ?></span>
                        </div>


                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="mt-40">
                            <button type="button" class="theme_line_btn me-2"
                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?>

                            </button>
                            <button class="theme_btn "
                                    type="submit"><?php echo e(__('common.Submit')); ?></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal cs_modal fade admin-query" id="deleteReview" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('common.Delete Confirmation')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <form action="" id="deleteReviewForm" method="Post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <?php echo e(__('common.Are you sure to delete ?')); ?>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="mt-40">
                            <button type="button" class="theme_line_btn me-2 small_btn2"
                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?>

                            </button>
                            <a class="theme_btn  small_btn2"
                               href="#" id="formSubmitBtn"><?php echo e(__('common.Submit')); ?></a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

    <script>
        $(".deleteBtn").click(function (e) {
            e.preventDefault();
            var url = $(".deleteBtn").attr('href');
            $('#deleteReview').modal('show')
            $('#formSubmitBtn').attr('href', url)
        });
    </script>
    <script src="<?php echo e(asset('public/frontend/infixlmstheme/js/class_details.js')); ?>"></script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make(theme('layouts.master'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\bundlesubscription_show.blade.php ENDPATH**/ ?>