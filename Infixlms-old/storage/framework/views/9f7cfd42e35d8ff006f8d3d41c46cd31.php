<div>
    <input type="hidden" value="<?php echo e(asset('/')); ?>" id="baseUrl">
    <?php
        if (@$course->discount_price!=null) {
            $course_price=@$course->discount_price;
        } else {
            $course_price=@$course->price;
        }
        $showWaitList =false;
        $alreadyWaitListRequest =false;
        if(isModuleActive('WaitList') && $course->waiting_list_status == 1 && auth()->check()){
           $count = $course->waitList->where('user_id',auth()->id())->count();
            if ($count==0){
                $showWaitList=true;
            }else{
                $alreadyWaitListRequest =true;
            }
        }
    ?>

        <!-- course_details::start  -->
    <div class="course__details">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-10">
                    <div class="course__details_title">
                        <div class="single__details">
                            <div class="thumb"
                                 style="background-image: url('<?php echo e(getProfileImage(@$course->user->image,$course->user->name)); ?>')"></div>
                            <div class="details_content">
                                <span><?php echo e(__('frontend.Instructor Name')); ?></span>
                                <a href="<?php echo e(route('instructorDetails',[$course->user->id,$course->user->name])); ?>">
                                    <h4 class="f_w_700"><?php echo e(@$course->user->name); ?></h4>
                                </a>
                            </div>
                        </div>
                        <div class="single__details">
                            <div class="details_content">
                                <span><?php echo e(__('frontend.Category')); ?></span>
                                <h4 class="f_w_700"><?php echo e(@$course->category->name); ?></h4>
                            </div>
                        </div>
                        <div class="single__details">
                            <div class="details_content">
                                <span><?php echo e(__('frontend.Reviews')); ?></span>


                                <div class="rating_star">


                                    <div class="stars">
                                        <?php

                                            $main_stars= @$userRating['rating'] ;

                                            $stars=intval($userRating['rating']);

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
                                    <p><?php echo e(@$userRating['rating']); ?>

                                        (<?php echo e(@$userRating['total']); ?> <?php echo e(__('frontend.Rating')); ?>)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="video_screen  <?php if($course->host!='ImagePreview' && $course->host!=''): ?> theme__overlay <?php endif; ?> mb_60">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->host!='ImagePreview' && $course->host!=''): ?>
                            <div class="video_play text-center">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->host=="Self" || $course->host=="AmazonS3"): ?>
                                    <div id="vidBox">
                                        <div id="videCont">
                                            <video id="videoPlayer" loop controls controlsList="nodownload">
                                                <source src="<?php echo e(asset($course->trailer_link)); ?>" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <a href="<?php echo e(youtubeVideo($course->trailer_link)); ?>" id="SelfVideoPlayer"></a>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <a id="playTrailer"
                                   <?php if($course->host=="Vimeo"): ?>
                                       video-url="https://vimeo.com/<?php echo e(getVideoId(showPicName(@$course->trailer_link))); ?>?autoplay=1"

                                   <?php else: ?>
                                       video-url="<?php echo e($course->trailer_link); ?>"
                                   <?php endif; ?>

                                   data-host="<?php echo e($course->host); ?>"
                                   class="play_button ">
                                    <i class="ti-control-play"></i>
                                </a>
                                <p><?php echo e(__('frontend.Preview this course')); ?></p>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="course_tabs text-center">
                                <ul class="w-100 nav lms_tabmenu justify-content-between  mb_55" id="myTab"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Overview-tab" data-bs-toggle="tab"
                                           href="#Overview"
                                           role="tab" aria-controls="Overview"
                                           aria-selected="true"><?php echo e(__('frontend.Overview')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Curriculum-tab" data-bs-toggle="tab" href="#Curriculum"
                                           role="tab" aria-controls="Curriculum"
                                           aria-selected="false"><?php echo e(__('frontend.Curriculum')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Instructor-tab" data-bs-toggle="tab" href="#Instructor"
                                           role="tab" aria-controls="Instructor"
                                           aria-selected="false"><?php echo e(__('frontend.Instructor')); ?></a>
                                    </li>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('hide_review_section')!='1'): ?>
                                        <li class="nav-item">
                                            <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews"
                                               role="tab" aria-controls="Instructor"
                                               aria-selected="false"><?php echo e(__('frontend.Reviews')); ?></a>
                                        </li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('hide_qa_section')!='1'): ?>
                                        <li class="nav-item">
                                            <a class="nav-link" id="QA-tab" data-bs-toggle="tab" href="#QASection"
                                               role="tab" aria-controls="Instructor"
                                               aria-selected="false"><?php echo e(__('frontend.QA')); ?></a>
                                        </li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </ul>
                            </div>
                            <div class="tab-content lms_tab_content" id="myTabContent">
                                <div class="tab-pane fade show active " id="Overview" role="tabpanel"
                                     aria-labelledby="Overview-tab">
                                    <!-- content  -->
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Installment') && $course_price > 0): ?>
                                        <?php if ($__env->exists(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'top_of_page'])) echo $__env->make(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'top_of_page'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <div class="course_overview_description">

                                        <div class="single_overview">

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($course->requirements)): ?>
                                                <h4 class="font_22 f_w_700 mb_20"><?php echo e(__('frontend.Course Requirements')); ?></h4>
                                                <div class="theme_border"></div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <?php echo $course->requirements; ?>

                                                        </div>
                                                    </div>

                                                </div>
                                                <p class="mb_20">
                                                </p>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($course->about)): ?>
                                                <h4 class="font_22 f_w_700 mb_20"><?php echo e(__('frontend.Course Description')); ?></h4>
                                                <div class="theme_border"></div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <?php echo $course->about; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb_20">
                                                </p>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($course->outcomes)): ?>
                                                <h4 class="font_22 f_w_700 mb_20"><?php echo e(__('frontend.Course Outcomes')); ?></h4>
                                                <div class="theme_border"></div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <?php echo $course->outcomes; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb_20">
                                                </p>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Installment') && $course_price > 0): ?>
                                                <?php if ($__env->exists(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'bottom_of_page'])) echo $__env->make(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'bottom_of_page'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Settings('hide_social_share_btn') =='1'): ?>
                                                <div class="social_btns">
                                                    <a target="_blank"
                                                       href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(URL::current()); ?>"
                                                       class="social_btn fb_bg"> <i class="fab fa-facebook-f"></i>
                                                        <?php echo e(__('frontend.Facebook')); ?>   </a>
                                                    <a target="_blank"
                                                       href="https://twitter.com/intent/tweet?text=<?php echo e($course->title); ?>&amp;url=<?php echo e(URL::current()); ?>"
                                                       class="social_btn Twitter_bg"> <i
                                                            class="fab fa-twitter"></i> <?php echo e(__('frontend.Twitter')); ?></a>
                                                    <a target="_blank"
                                                       href="https://pinterest.com/pin/create/link/?url=<?php echo e(URL::current()); ?>&amp;description=<?php echo e($course->title); ?>"
                                                       class="social_btn Pinterest_bg"> <i
                                                            class="fab fa-pinterest-p"></i> <?php echo e(__('frontend.Pinterest')); ?>

                                                    </a>
                                                    <a target="_blank"
                                                       href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(URL::current()); ?>&amp;title=<?php echo e($course->title); ?>&amp;summary=<?php echo e($course->title); ?>"
                                                       class="social_btn Linkedin_bg"> <i
                                                            class="fab fa-linkedin-in"></i> <?php echo e(__('frontend.Linkedin')); ?>

                                                    </a>
                                                </div>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                    </div>
                                    <!--/ content  -->
                                </div>
                                <div class="tab-pane fade " id="Curriculum" role="tabpanel"
                                     aria-labelledby="Curriculum-tab">
                                    <!-- content  -->
                                    <h4 class="font_22 f_w_700 mb_20"><?php echo e(__('frontend.Course Curriculum')); ?></h4>
                                    <div class="theme_according accordion" id="accordion1">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($course->chapters)): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading<?php echo e($chapter->id); ?>">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link text_white collapsed"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse<?php echo e($chapter->id); ?>"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapse<?php echo e($chapter->id); ?>">
                                                                <?php echo e($chapter->name); ?>

                                                                <span
                                                                    class="course_length"> <?php echo e(count($chapter->lessons)); ?> <?php echo e(__('frontend.Lectures')); ?></span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse" id="collapse<?php echo e($chapter->id); ?>"
                                                         aria-labelledby="heading<?php echo e($chapter->id); ?>"
                                                         data-bs-parent="#accordion1">
                                                        <div class="accordion-body">
                                                            <div class="curriculam_list">
                                                                <!-- curriculam_single  -->
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $chapter->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                    <div class="curriculam_single">
                                                                        <div class="curriculam_left">
                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_lock==1): ?>
                                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check()): ?>
                                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isEnrolled): ?>
                                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_quiz==1): ?>

                                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $lesson->quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <span
                                                                                                    onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($lesson->id); ?>)"
                                                                                                    class="quizLink active"

                                                                                                >
                                                                    <i class="ti-check-box"></i>
                                                                    <span
                                                                        class="quiz_name"><?php echo e(@$key+1); ?> <?php echo e(@$quiz->title); ?></span>
                                                                </span>

                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                        <?php else: ?>

                                                                                            <i class="ti-control-play"></i>
                                                                                            <span
                                                                                                onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($lesson->id); ?>)"><?php echo e(@$key+1); ?> <?php echo e(@$lesson->name); ?></span>
                                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                    <?php else: ?>
                                                                                        <i class="ti-lock"></i>
                                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_quiz==1): ?>
                                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $lesson->quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <span
                                                                                                    class="quiz_name"><?php echo e(@$key+1); ?> <?php echo e(@$quiz->title); ?> [Quiz]</span>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                        <?php else: ?>
                                                                                            <span
                                                                                                data-host="<?php echo e($lesson->host); ?>"
                                                                                                data-url="<?php echo e(youtubeVideo($lesson->video_url)); ?>"><?php echo e(@$key+1); ?> <?php echo e(@$lesson->name); ?></span>
                                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                <?php else: ?>
                                                                                    <i class="ti-lock"></i>
                                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_quiz==1): ?>
                                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $lesson->quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <span
                                                                                                class="quiz_name"><?php echo e(@$key+1); ?> <?php echo e(@$quiz->title); ?> [Quiz]</span>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                    <?php else: ?>
                                                                                        <span
                                                                                            data-host="<?php echo e($lesson->host); ?>"
                                                                                            data-url="<?php echo e(youtubeVideo($lesson->video_url)); ?>"><?php echo e(@$key+1); ?> <?php echo e(@$lesson->name); ?></span>
                                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                            <?php else: ?>
                                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_quiz==1): ?>
                                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $lesson->quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() && $isEnrolled): ?>
                                                                                            <span
                                                                                                onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($lesson->id); ?>)"
                                                                                                class="quizLink active"

                                                                                            >
                                                                  <i class="ti-check-box"></i>
                                                        <span
                                                            class="quiz_name"><?php echo e(@$key+1); ?> <?php echo e(@$quiz->title); ?> [Quiz]</span>
                                                        </span>
                                                                                            
                                                                                        <?php else: ?>
                                                                                            <i class="ti-check-box"></i>
                                                                                            <span
                                                                                                class="quiz_name"><?php echo e(@$key+1); ?> <?php echo e(@$quiz->title); ?> [Quiz]</span>
                                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                <?php else: ?>
                                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->host=='Youtube'): ?>
                                                                                        <i class="ti-control-play"></i>
                                                                                        <span class="lesson_name"
                                                                                              data-host="<?php echo e($lesson->host); ?>"
                                                                                              data-url="<?php echo e(youtubeVideo($lesson->video_url)); ?>"><?php echo e(@$key+1); ?> <?php echo e(@$lesson->name); ?></span>

                                                                                    <?php elseif($lesson->host=='Self'|| $lesson->host=="AmazonS3"): ?>
                                                                                        <i class="ti-control-play"></i>

                                                                                        <span class="lesson_name"
                                                                                              data-host="<?php echo e($lesson->host); ?>"
                                                                                              data-url="<?php echo e(asset($lesson->video_url)); ?>"><?php echo e(@$key+1); ?> <?php echo e(@$lesson->name); ?></span>

                                                                                    <?php else: ?>

                                                                                        <i class="ti-control-play"></i>
                                                                                        <span class="lesson_name"
                                                                                              data-host="<?php echo e($lesson->host); ?>"
                                                                                              data-url="<?php echo e($lesson->video_url); ?>"><?php echo e(@$key+1); ?> <?php echo e(@$lesson->name); ?></span>
                                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                        </div>
                                                                        <div class="curriculam_right">
                                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_lock==0): ?>
                                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_quiz==0): ?>
                                                                                    <a href="#"
                                                                                       
                                                                                       data-course="<?php echo e($course->id); ?>"
                                                                                       data-lesson="<?php echo e($lesson->id); ?>"
                                                                                       class="theme_btn_lite goFullScreen"
                                                                                    ><?php echo e(__('frontend.Preview')); ?></a>
                                                                                <?php else: ?>
                                                                                    <a href="#"
                                                                                       class="theme_btn_lite quizLink"
                                                                                       onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($lesson->id); ?>)"
                                                                                        
                                                                                    ><?php echo e(__('frontend.Start')); ?></a>
                                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                            <?php else: ?>
                                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() && $isEnrolled): ?>
                                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->is_quiz==0): ?>
                                                                                        <a href="#"
                                                                                           data-course="<?php echo e($course->id); ?>"
                                                                                           data-lesson="<?php echo e($lesson->id); ?>"
                                                                                           class="theme_btn_lite goFullScreen"
                                                                                        ><?php echo e(__('common.View')); ?></a>
                                                                                    <?php else: ?>
                                                                                        <a href="#"
                                                                                           onclick="goFullScreen(<?php echo e($course->id); ?>,<?php echo e($lesson->id); ?>)"
                                                                                           class="theme_btn_lite quizLink"
                                                                                            
                                                                                        ><?php echo e(__('frontend.Start')); ?></a>
                                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                            <?php
                                                                                $duration =0;
                                                                                 if ($lesson->is_quiz==0 || count($lesson->quiz)==0){
                                                                                    $duration= $lesson->duration;
                                                                                }else{
                                                                                    $quiz =$lesson->quiz[0];
                                                                                    $type =$quiz->question_time_type;
                                                                                    if ($type==0){
                                                                                        $duration = $quiz->question_time*$quiz->total_questions;
                                                                                    }else{
                                                                                        $duration = $quiz->question_time;

                                                                                    }

                                                                                }
                                                                            ?>
                                                                            <span
                                                                                class="nowrap"><?php echo e(MinuteFormat($duration)); ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <p>
                                                                        <?php echo e($lesson->description); ?>

                                                                    </p>
                                                                    <hr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($course_exercises)): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($course_exercises)!=0): ?>
                                            <div class="theme_according accordion" id="accordion0">
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link text_white"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapse">
                                                                <?php echo e(__('courses.Exercise')); ?> <?php echo e(__('common.Files')); ?>


                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div class="collapse show" id="collapse"
                                                         aria-labelledby="heading"
                                                         data-bs-parent="#accordion0">
                                                        <div class="accordion-body">
                                                            <div class="curriculam_list">

                                                                <!-- curriculam_single  -->
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($course_exercises)): ?>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course_exercises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=>$file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                        <div class="curriculam_single">
                                                                            <div class="curriculam_left">
                                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($file->lock==0): ?>
                                                                                    <i class="ti-unlock"></i>
                                                                                <?php else: ?>
                                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() && $isEnrolled): ?>
                                                                                        <i class="ti-unlock"></i>
                                                                                    <?php else: ?>
                                                                                        <i class="ti-lock"></i>
                                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                                <span><?php echo e(@$key2+1); ?>. <?php echo e(@$file->fileName); ?></span>
                                                                            </div>

                                                                            <div class="curriculam_right">

                                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($file->lock==0): ?>
                                                                                    <a href="<?php echo e(asset($file->file)); ?>"
                                                                                       class="theme_btn_lite  me-0"
                                                                                       download>Download</a>
                                                                                <?php else: ?>
                                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() && $isEnrolled): ?>
                                                                                        <a href="<?php echo e(asset($file->file)); ?>"
                                                                                           class="theme_btn_lite  me-0"
                                                                                           download>Download</a>
                                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                </div>
                                <div class="tab-pane fade " id="Instructor" role="tabpanel"
                                     aria-labelledby="Instructor-tab">
                                    <div class="instractor_details_wrapper">
                                        <div class="instractor_title">
                                            <h4 class="font_22 f_w_700"><?php echo e(__('frontend.Instructor')); ?></h4>
                                            <p class="font_16 f_w_400"><?php echo e(@$course->user->headline); ?></p>
                                        </div>
                                        <div class="instractor_details_inner">
                                            <div class="thumb">
                                                <img class="w-100"
                                                     src="<?php echo e(getProfileImage(@$course->user->image,$course->user->name)); ?>"
                                                     alt="">
                                            </div>
                                            <div class="instractor_details_info">
                                                <a href="<?php echo e(route('instructorDetails',[$course->user->id,$course->user->name])); ?>">
                                                    <h4 class="font_22 f_w_700"><?php echo e(@$course->user->name); ?></h4>
                                                </a>
                                                <h5>  <?php echo e(@$course->user->headline); ?></h5>
                                                <div class="ins_details">
                                                    <p> <?php echo e(@$course->user->short_details); ?></p>
                                                </div>
                                                <div class="intractor_qualification">
                                                    <div class="single_qualification">
                                                        <i class="ti-star"></i> <?php echo e(@$userRating['rating']); ?>

                                                        <?php echo e(__('frontend.Rating')); ?>

                                                    </div>
                                                    <div class="single_qualification">
                                                        <i class="ti-comments"></i> <?php echo e(@$userRating['total']); ?>

                                                        <?php echo e(__('frontend.Reviews')); ?>

                                                    </div>
                                                    <div class="single_qualification">
                                                        <i class="ti-user"></i> <?php echo e(@$course->user->totalEnrolled()); ?>

                                                        <?php echo e(__('frontend.Students')); ?>

                                                    </div>
                                                    <div class="single_qualification">
                                                        <i class="ti-layout-media-center-alt"></i> <?php echo e(@$course->user->totalCourses()); ?>

                                                        <?php echo e(__('frontend.Courses')); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <?php echo @$course->user->about; ?>

                                        </p>
                                    </div>
                                    <div class="author_courses">
                                        <div class="section__title mb_80">
                                            <h3><?php echo e(__('frontend.More Courses by Author')); ?></h3>
                                        </div>
                                        <div class="row">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = @$course->user->courses->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-xl-6">
                                                    <div class="couse_wizged mb_30">
                                                        <div class="thumb">
                                                            <a href="<?php echo e(courseDetailsUrl(@$c->id,@$c->type,@$c->slug)); ?>">
                                                                <img class="w-100"
                                                                     src="<?php echo e(file_exists($c->thumbnail) ? asset($c->thumbnail) : asset('public/\uploads/course_sample.png')); ?>"
                                                                     alt="">
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
                                                            </a>
                                                        </div>
                                                        <div class="course_content">
                                                            <a href="<?php echo e(courseDetailsUrl(@$c->id,@$c->type,@$c->slug)); ?>">
                                                                <h4><?php echo e(@$c->title); ?></h4>
                                                            </a>
                                                            <div class="rating_cart">
                                                                <div class="rateing">
                                                                    <span><?php echo e($c->totalReview); ?>/5</span>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$c->isLoginUserEnrolled && !$c->isLoginUserCart): ?>
                                                                        <a href="#" class="cart_store"
                                                                           data-id="<?php echo e($c->id); ?>">
                                                                            <i class="fas fa-shopping-cart"></i>
                                                                        </a>
                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->guest()): ?>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$c->isGuestUserCart): ?>
                                                                        <a href="#" class="cart_store"
                                                                           data-id="<?php echo e($c->id); ?>">
                                                                            <i class="fas fa-shopping-cart"></i>
                                                                        </a>
                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            </div>
                                                            <div class="course_less_students">
                                                                <a href="#"> <i
                                                                        class="ti-agenda"></i> <?php echo e(count($c->lessons)); ?>

                                                                    <?php echo e(__('frontend.Lessons')); ?></a>
                                                                <a href="#"> <i
                                                                        class="ti-user"></i> <?php echo e($c->total_enrolled); ?>

                                                                    <?php echo e(__('frontend.Students')); ?> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                    <!-- content  -->
                                    <div class="course_review_wrapper">
                                        <div class="details_title">
                                            <h4 class="font_22 f_w_700"><?php echo e(__('frontend.Student Feedback')); ?></h4>
                                            <p class="font_16 f_w_400"><?php echo e($course->title); ?></p>
                                        </div>
                                        <div class="course_feedback">
                                            <div class="course_feedback_left">
                                                <h2><?php echo e($course->total_rating); ?></h2>
                                                <div class="feedmak_stars">
                                                    <?php
                                                        $main_stars=$course->total_rating;
                                                        $stars=intval($main_stars);
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
                                                            $PickId=$course->id;
                                                        ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() && Auth::user()->role_id==3): ?>
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
                                                        <?php else: ?>

                                                            <p class="font_14 f_w_400 mt-0"><a href="<?php echo e(url('login')); ?>"
                                                                                               class="theme_color2"><?php echo e(__('frontend.Sign In')); ?></a>
                                                                <?php echo e(__('frontend.or')); ?> <a
                                                                    class="theme_color2"
                                                                    href="<?php echo e(url('register')); ?>"><?php echo e(__('frontend.Sign Up')); ?></a>
                                                                <?php echo e(__('frontend.as student to post a review')); ?></p>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="course_cutomer_reviews">
                                            <div class="details_title">
                                                <h4 class="font_22 f_w_700"><?php echo e(__('frontend.Reviews')); ?></h4>

                                            </div>
                                            <div class="customers_reviews" id="customers_reviews">


                                            </div>
                                        </div>

                                        <div class="author_courses">
                                            <div class="section__title mb_80">
                                                <h3><?php echo e(__('frontend.Course you might like')); ?></h3>
                                            </div>
                                            <div class="row">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = @$related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-xl-6">
                                                        <div class="couse_wizged mb_30">
                                                            <div class="thumb">
                                                                <a href="<?php echo e(courseDetailsUrl(@$r->id,@$r->type,@$r->slug)); ?>">
                                                                    <img class="w-100"
                                                                         src="<?php echo e(file_exists($r->thumbnail) ? asset($r->thumbnail) : asset('public/\uploads/course_sample.png')); ?>"
                                                                         alt="">
                                                                    <?php if (isset($component)) { $__componentOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc1cda8d9ec000fb2f55ff05ba682c990 = $attributes; } ?>
<?php $component = App\View\Components\PriceTag::resolve(['price' => $r->price,'discount' => $r->discount_price] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                                                </a>
                                                            </div>
                                                            <div class="course_content">
                                                                <a href="<?php echo e(courseDetailsUrl(@$r->id,@$r->type,@$r->slug)); ?>">
                                                                    <h4><?php echo e(@$r->title); ?></h4>
                                                                </a>
                                                                <div class="rating_cart">
                                                                    <div class="rateing">
                                                                        <span><?php echo e($r->totalReview); ?>/5</span>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$r->isLoginUserEnrolled && !$r->isLoginUserCart): ?>
                                                                            <a href="#" class="cart_store"
                                                                               data-id="<?php echo e($r->id); ?>">
                                                                                <i class="fas fa-shopping-cart"></i>
                                                                            </a>
                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->guest()): ?>
                                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$r->isGuestUserCart): ?>
                                                                            <a href="#" class="cart_store"
                                                                               data-id="<?php echo e($r->id); ?>">
                                                                                <i class="fas fa-shopping-cart"></i>
                                                                            </a>
                                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                </div>
                                                                <div class="course_less_students">
                                                                    <a href="#"> <i
                                                                            class="ti-agenda"></i> <?php echo e(count($r->lessons)); ?>

                                                                        <?php echo e(__('frontend.Lessons')); ?></a>
                                                                    <a href="#"> <i
                                                                            class="ti-user"></i> <?php echo e($r->total_enrolled); ?>

                                                                        <?php echo e(__('frontend.Students')); ?> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content  -->
                                </div>
                                <div class="tab-pane fade " id="QASection" role="tabpanel" aria-labelledby="QA-tab">
                                    <!-- content  -->

                                    <div class="conversition_box">

                                        <div id="conversition_box"></div>

                                        <div class="row">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isEnrolled): ?>
                                                <div class="col-lg-12 " id="mainComment">
                                                    <form action="<?php echo e(route('saveComment')); ?>" method="post" class="">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="course_id" value="<?php echo e(@$course->id); ?>">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="section_title3 mb_20">
                                                                    <h3><?php echo e(__('frontend.Leave a question/comment')); ?></h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="single_input mb_25">
                                                                                        <textarea
                                                                                            placeholder="<?php echo e(__('frontend.Leave a question/comment')); ?>"
                                                                                            name="comment"
                                                                                            class="primary_textarea gray_input"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb_30">

                                                                <button type="submit"
                                                                        class="theme_btn height_50">
                                                                    <i class="fas fa-comments"></i>
                                                                    <?php echo e(__('frontend.Question')); ?>/
                                                                    <?php echo e(__('frontend.comment')); ?>

                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-lg-12 text-center" id="mainComment">
                                                    <h4><?php echo e(__('frontend.You must be enrolled to ask a question')); ?></h4>
                                                </div>

                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="sidebar__widget mb_30">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('EarlyBird') && Auth::check() && !$isEnrolled): ?>
                                    <?php if ($__env->exists(theme('partials._early_bird_offer'), ['price_plans' => $course->pricePlans, 'product' => $course])) echo $__env->make(theme('partials._early_bird_offer'), ['price_plans' => $course->pricePlans, 'product' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <div class="sidebar__title">
                                    <div id="price-container">
                                        <h3 id="price_show_tag">
                                            <?php echo e(getPriceFormat($course_price)); ?>

                                        </h3>
                                        <div class="price_loader"></div>
                                    </div>
                                    <p>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() && $isBookmarked ): ?>
                                            <i class="fas fa-heart"></i>
                                            <a href="<?php echo e(route('bookmarkSave',[$course->id])); ?>"
                                               class=""><?php echo e(__('frontend.Already In Wishlist')); ?>

                                            </a>
                                        <?php elseif(Auth::check() && !$isBookmarked ): ?>
                                            <a href="<?php echo e(route('bookmarkSave',[$course->id])); ?>"
                                               class="">
                                                <i class="far fa-heart"></i>
                                                <?php echo e(__('frontend.Add To Wishlist')); ?>  </a>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </p>
                                </div>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($showWaitList): ?>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#courseWaitList"
                                       class="theme_btn d-block text-center height_50 mb_10">
                                        <?php echo e(__('frontend.Enter to Wait List')); ?>

                                    </a>
                                    <?php echo $__env->make(theme('partials._course_wait_list_form'),['course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($alreadyWaitListRequest): ?>
                                    <a href="#"
                                       class="theme_btn d-block text-center height_50 mb_10">
                                        <?php echo e(__('frontend.Already In Wait List')); ?>

                                    </a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!onlySubscription()): ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->is_upcoming_course && $course->publish_status == 'pending'): ?>
                                        <?php if (isset($component)) { $__componentOriginal63d48049d2cb5320a81eb4f7ad52e181 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal63d48049d2cb5320a81eb4f7ad52e181 = $attributes; } ?>
<?php $component = App\View\Components\UpcomingCourseAction::resolve(['course' => $course] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('upcoming-course-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\UpcomingCourseAction::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal63d48049d2cb5320a81eb4f7ad52e181)): ?>
<?php $attributes = $__attributesOriginal63d48049d2cb5320a81eb4f7ad52e181; ?>
<?php unset($__attributesOriginal63d48049d2cb5320a81eb4f7ad52e181); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal63d48049d2cb5320a81eb4f7ad52e181)): ?>
<?php $component = $__componentOriginal63d48049d2cb5320a81eb4f7ad52e181; ?>
<?php unset($__componentOriginal63d48049d2cb5320a81eb4f7ad52e181); ?>
<?php endif; ?>
                                    <?php else: ?>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check()): ?>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isEnrolled): ?>
                                                <a href="<?php echo e(route('continueCourse',[$course->slug])); ?>"
                                                   class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Continue Watch')); ?></a>
                                            <?php else: ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isFree): ?>

                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_cart == 1): ?>
                                                        <a href="javascript:void(0)"
                                                           class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Added To Cart')); ?></a>
                                                    <?php else: ?>
                                                        <a href="<?php echo e(route('addToCart',[@$course->id])); ?>"
                                                           class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php else: ?>

                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_cart == 1): ?>
                                                        <a href="javascript:void(0)"
                                                           class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Added To Cart')); ?></a>
                                                    <?php else: ?>
                                                        <a href=" <?php echo e(route('addToCart',[@$course->id])); ?>"
                                                           class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <a href="<?php echo e(route('buyNow',[@$course->id])); ?>"
                                                       class="theme_line_btn d-block text-center height_50 mb_20"><?php echo e(__('common.Buy Now')); ?></a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php else: ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isFree): ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_cart == 1): ?>
                                                    <a href="javascript:void(0)"
                                                       class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Added To Cart')); ?></a>
                                                <?php else: ?>
                                                    <a href=" <?php echo e(route('addToCart',[@$course->id])); ?> "
                                                       class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php else: ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_cart == 1): ?>
                                                    <a href="javascript:void(0)"
                                                       class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Added To Cart')); ?></a>
                                                <?php else: ?>
                                                    <a href=" <?php echo e(route('addToCart',[@$course->id])); ?> "
                                                       class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                                    <a href="<?php echo e(route('buyNow',[@$course->id])); ?>"
                                                       class="theme_line_btn d-block text-center height_50 mb_20"><?php echo e(__('common.Buy Now')); ?></a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if ($__env->exists('gift::buttons.course_details_page_button', ['course' => $course])) echo $__env->make('gift::buttons.course_details_page_button', ['course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Installment') && $course_price > 0): ?>
                                    <?php if ($__env->exists(theme('partials._installment_plan_button'), ['course' => $course])) echo $__env->make(theme('partials._installment_plan_button'), ['course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Cashback')): ?>
                                    <?php if ($__env->exists(theme('partials._cashback_card'), ['product' => $course])) echo $__env->make(theme('partials._cashback_card'), ['product' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <p class="font_14 f_w_500 text-center mb_30"></p>
                                <h4 class="f_w_700 mb_10"><?php echo e(__('frontend.This course includes')); ?>:</h4>
                                <ul class="course_includes">
                                    <li><i class="ti-alarm-clock"></i>
                                        <p class="nowrap"> <?php echo e(__('frontend.Duration')); ?> <?php echo e(MinuteFormat($course->duration)); ?>


                                        </p></li>
                                    <li><i class="ti-thumb-up"></i>
                                        <p><?php echo e(__('frontend.Skill Level')); ?>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->level==$level->id): ?>
                                                    <?php echo e($level->title); ?>

                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </p></li>
                                    <li><i class="ti-agenda"></i>
                                        <p><?php echo e(__('frontend.Lectures')); ?> <?php echo e($course->total_lessons); ?> <?php echo e(__('frontend.lessons')); ?></p>
                                    </li>
                                    <li><i class="ti-user"></i>
                                        <p><?php echo e(__('frontend.Enrolled')); ?> <?php echo e($course->total_enrolled); ?> <?php echo e(__('frontend.students')); ?></p>
                                    </li>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->certificate): ?>
                                        <li><i class="ti-crown"></i>
                                            <p><?php echo e(__('frontend.Certificate of Completion')); ?></p></li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    <li><i class="ti-blackboard"></i>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->access_limit>0): ?>
                                            <p><?php echo e($course->access_limit); ?> <?php echo e(__('frontend.Days')); ?> <?php echo e(__('frontend.Access')); ?></p>
                                        <?php else: ?>
                                            <p><?php echo e(__('frontend.Full lifetime access')); ?></p>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </li>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('SupportTicket') && $course->support): ?>
                                        <li>
                                            <i class="ti-support"></i>
                                            <p><?php echo e(__('common.Support')); ?></p>
                                        </li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal cs_modal fade admin-query" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo e(__('frontend.Review')); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                            class="ti-close "></i></button>
                </div>

                <form action="<?php echo e(route('submitReview')); ?>" method="Post">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="course_id" id="rating_course_id"
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
    <?php echo $__env->make(theme('partials._delete_model'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\course-details-page-section.blade.php ENDPATH**/ ?>