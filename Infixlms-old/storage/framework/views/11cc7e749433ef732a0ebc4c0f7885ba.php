<div>
    <?php
        function secondsToTime($seconds) {
         $dtF = new \DateTime('@0');
         $dtT = new \DateTime("@$seconds");
         return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes');
     }

             function secondsToHour($seconds) {
              $dtF = new \DateTime('@0');
              $dtT = new \DateTime("@$seconds");
           return $dtF->diff($dtT)->format('%h : %i Hour(s)');

          }

    if (Auth::check() &&  $isEnrolled){
        $allow=true;
    }else{
        $allow=false;
    }
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

    <input type="hidden" name="start_time" class="class_start_time"
           value="<?php echo e(isset($course->nextMeeting->start_time)?$course->nextMeeting->start_time:''); ?>">
    <!-- course_details::start  -->
    <div class="course__details">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-10">
                    <div class="course__details_title">
                        <div class="single__details">
                            <div class="thumb"
                                 style="background-image: url('<?php echo e(getProfileImage(@$course->user->image,$course->user->name)); ?>')">
                            </div>
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
                                <h4 class="f_w_700"><?php echo e(@$course->class->category->name); ?></h4>
                            </div>
                        </div>
                        <div class="single__details">
                            <div class="details_content">
                                <span><?php echo e(__('frontend.Reviews')); ?></span>


                                <div class="rating_star">
                                    <div class="stars">
                                        <?php
                                            $main_stars=@$course->user->totalRating()['rating'];

                                            $stars=intval(@$course->user->totalRating()['rating']);

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
                                    <p><?php echo e(@$course->user->totalRating()['rating']); ?>

                                        (<?php echo e(@$course->user->totalRating()['total']); ?> <?php echo e(__('frontend.rating')); ?>)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video_screen theme__overlay mb_60">
                        <div class="video_play text-center">

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check()): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isEnrolled): ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->class->host=="Zoom"): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->nextMeeting->currentStatus=="started"): ?>
                                            <a target="_blank"
                                               href="<?php echo e(route('classStart', [$course->slug,'Zoom',$course->nextMeeting->id])); ?>"
                                               class="theme_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('common.Watch Now')); ?>

                                            </a>
                                        <?php elseif(@$course->nextMeeting->currentStatus== 'waiting'): ?>
                                            <span
                                                class="theme_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('frontend.Waiting')); ?>

                                           </span>
                                        <?php else: ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                <span
                                                    class="theme_line_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                </span>
                                            <?php else: ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($certificateCanDownload): ?>
                                                    <a href="<?php echo e(route('getCertificate',[$course->id,$course->title])); ?>"
                                                       class="theme_btn certificate_btn mt-5">
                                                        <?php echo e(__('frontend.Get Certificate')); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <span
                                                        class="theme_line_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('frontend.Closed')); ?>

                                            </span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->class->host=="BBB"): ?>
                                        <?php
                                            $hasClass=false;
                                        ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->class->bbbMeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$hasClass): ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$meeting->isRunning()): ?>
                                                    <a target="_blank"
                                                       href="<?php echo e(route('classStart', [$course->slug,'BBB',$meeting->id])); ?>"
                                                       class="theme_btn d-block text-center height_50 mb_10">
                                                        <?php echo e(__('common.Watch Now')); ?>

                                                    </a>
                                                    <?php
                                                        $hasClass=true;
                                                    ?>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$hasClass): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                <span
                                                    class="theme_line_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                </span>
                                            <?php else: ?>
                                                <span
                                                    class="theme_line_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('frontend.Closed')); ?>

                                            </span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->class->host=="Jitsi"): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->nextMeeting): ?>
                                            <?php
                                                $start = \Illuminate\Support\Carbon::parse($course->nextMeeting->date . ' ' .$course->nextMeeting->time);
                                                 $nowDate = \Illuminate\Support\Carbon::now();
                                                 $not_start = $start->gt($nowDate);

                                                 $end =$start->addMinutes($course->nextMeeting->duration);
                                                 $not_end =$end->gt($nowDate);
                                            ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$not_start && $not_end): ?>
                                                <a target="_blank"
                                                   href="<?php echo e(route('classStart', [$course->slug,'Jitsi',$course->nextMeeting->id])); ?>"
                                                   class="theme_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('common.Watch Now')); ?>

                                                </a>

                                            <?php else: ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                    <span
                                                        class="theme_line_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                </span>
                                                <?php else: ?>
                                                    <span
                                                        class="theme_line_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('frontend.Closed')); ?>

                                            </span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->class->host=="Custom"): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->nextMeeting): ?>
                                            <?php
                                                $start = \Illuminate\Support\Carbon::parse($course->nextMeeting->date . ' ' .$course->nextMeeting->time);
                                                 $nowDate = \Illuminate\Support\Carbon::now();
                                                 $not_start = $start->gt($nowDate);

                                                 $end =$start->addMinutes($course->nextMeeting->duration);
                                                 $not_end =$end->gt($nowDate);
                                            ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$not_start && $not_end): ?>
                                                <a target="_blank"
                                                   href="<?php echo e(route('classStart', [$course->slug,'Custom',$course->nextMeeting->id])); ?>"
                                                   class="theme_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('common.Watch Now')); ?>

                                                </a>

                                            <?php else: ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                    <span
                                                        class="theme_line_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                </span>
                                                <?php else: ?>
                                                    <span
                                                        class="theme_line_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('frontend.Closed')); ?>

                                            </span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->class->host=="InAppLiveClass"): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->nextMeeting): ?>
                                            <?php
                                                $start = \Illuminate\Support\Carbon::parse($course->nextMeeting->date . ' ' .$course->nextMeeting->time);
                                                 $nowDate = \Illuminate\Support\Carbon::now();
                                                 $not_start = $start->gt($nowDate);

                                                 $end =$start->addMinutes($course->nextMeeting->duration);
                                                 $not_end =$end->gt($nowDate);
                                            ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$not_start && $not_end): ?>
                                                <a target="_blank"
                                                   href="<?php echo e(route('classStart', [$course->slug,'InAppLiveClass',$course->nextMeeting->id])); ?>"
                                                   class="theme_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('common.Watch Now')); ?>

                                                </a>

                                            <?php else: ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                    <span
                                                        class="theme_line_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                </span>
                                                <?php else: ?>
                                                    <span
                                                        class="theme_line_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('frontend.Closed')); ?>

                                            </span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->class->host=="GoogleMeet"): ?>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$course->nextMeeting->currentStatus=="started"): ?>
                                            <a target="_blank"
                                               href="<?php echo e(route('classStart', [$course->slug,'GoogleMeet',$course->nextMeeting->id])); ?>"
                                               class="theme_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('common.Watch Now')); ?>

                                            </a>
                                        <?php elseif(@$course->nextMeeting->currentStatus== 'waiting'): ?>
                                            <span
                                                class="theme_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('frontend.Waiting')); ?>

                                           </span>
                                        <?php else: ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                <span
                                                    class="theme_line_btn d-block text-center height_50 mb_10">
                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                </span>
                                            <?php else: ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($certificateCanDownload): ?>
                                                    <a href="<?php echo e(route('getCertificate',[$course->id,$course->title])); ?>"
                                                       class="theme_btn certificate_btn mt-5">
                                                        <?php echo e(__('frontend.Get Certificate')); ?>

                                                    </a>
                                                <?php else: ?>
                                                    <span
                                                        class="theme_line_btn d-block text-center height_50 mb_10">
                                                <?php echo e(__('frontend.Closed')); ?>

                                            </span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <?php else: ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!onlySubscription()): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isFree): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_cart == 1): ?>
                                                <a href="javascript:void(0)"
                                                   class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Added To Cart')); ?></a>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('addToCart',[@$course->id])); ?>"
                                                   class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php else: ?>
                                            <a href=" <?php echo e(route('addToCart',[@$course->id])); ?> "
                                               class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                            <a href="<?php echo e(route('buyNow',[@$course->id])); ?>"
                                               class="theme_line_btn d-block text-center height_50 mb_20"><?php echo e(__('common.Buy Now')); ?></a>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php else: ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!onlySubscription()): ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isFree): ?>
                                        <a href=" <?php echo e(route('addToCart',[@$course->id])); ?> "
                                           class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                    <?php else: ?>
                                        <a href=" <?php echo e(route('addToCart',[@$course->id])); ?> "
                                           class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                        <a href="<?php echo e(route('buyNow',[@$course->id])); ?>"
                                           class="theme_line_btn d-block text-center height_50 mb_20"><?php echo e(__('common.Buy Now')); ?></a>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="<?php echo e(onlySubscription()?"col-xl-12 col-lg-12":"col-xl-8 col-lg-8"); ?>">
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
                                           aria-selected="false"><?php echo e(__('frontend.Course Schedule')); ?></a>
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
                                        <div class="row mb_40">
                                            <div class="col-12">
                                                <div class="description_grid">

                                                    <div class="single_description_grid">
                                                        <h5> <?php echo e(__('common.Start Date & Time')); ?></h5>
                                                        <p>
                                                            <?php echo e(showDate($course->class->start_date)); ?>  <?php echo e(__('common.At')); ?>

                                                            <?php echo e(date('h:i A', strtotime($course->class->time))); ?>

                                                        </p>
                                                    </div>
                                                    <div class="single_description_grid">
                                                        <h5> <?php echo e(__('common.End Date & Time')); ?></h5>
                                                        <p><?php echo e(showDate($course->class->end_date)); ?> <?php echo e(__('common.At')); ?>

                                                            <?php
                                                                $duration =$course->class->duration??0;

                                                            ?>
                                                            <?php echo e(date('h:i A', strtotime("+".$duration." minutes", strtotime($course->class->time)))); ?>

                                                        </p>
                                                    </div>

                                                    <div class="single_description_grid">
                                                        <h5> <?php echo e(__('common.Duration')); ?></h5>
                                                        <?php

                                                            $days =1;
                                                            if ($course->class->host=="Zoom"){
                                                                $days=count($course->class->zoomMeetings);
                                                            }elseif($course->class->host=="BBB"){
                                                                $days=count($course->class->bbbMeetings);
                                                            }elseif ($course->class->host=="Jitsi"){
                                                                $days=count($course->class->jitsiMeetings);
                                                            }elseif ($course->class->host=="InAppLiveClass"){
                                                                $days=count($course->class->inAppMeetings);
                                                            }elseif ($course->class->host=="Custom"){
                                                                $days=count($course->class->customMeetings);
                                                            }

                                                                $str = ($course->class->duration?? 0)*$days;
                                                                $duration =preg_replace('/[^0-9]/', '', $str);

                                                        ?>
                                                        <p class="nowrap"><?php echo e(MinuteFormat($duration)); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_overview">
                                            <h4 class="font_22 f_w_700 mb_20"><?php echo e(__('frontend.Course Description')); ?></h4>
                                            <div class="theme_border"></div>
                                            <div class="">
                                                <?php echo $course->about; ?>

                                            </div>
                                            <p class="mb_20">

                                            </p>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Installment') && $course_price > 0): ?>
                                                <?php if ($__env->exists(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'bottom_of_page'])) echo $__env->make(theme('partials._installment_plan_details'), ['course' => $course,'position'=>'bottom_of_page'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Settings('hide_social_share_btn') =='1'): ?>
                                                <div class="social_btns">
                                                    <a target="_blank"
                                                       href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(URL::current()); ?>"
                                                       class="social_btn fb_bg"> <i class="fab fa-facebook-f"></i>
                                                        <?php echo e(__('frontend.Facebook')); ?></a>
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
                                    <h4 class="font_22 f_w_700 mb_20"><?php echo e(__('frontend.Course Schedule')); ?></h4>

                                    <div class="single_description mb_25">


                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->class->host=="BBB"): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->class->bbbMeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="row justify-content-between text-center p-3 m-2"
                                                     style="border:1px solid #E1E2E6">
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto "
                                                         style="border-right: 1px solid #E1E2E6;">
                                                        <span>
                                                      <?php echo e(__('common.Start Date')); ?>

                                                    </span>

                                                        <h6 class="mb-0"><?php echo e(date('d M Y',$meeting->datetime)); ?>  </h6>
                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                         <span>
                                                       <?php echo e(__('common.Time')); ?> <br>
                                                             (<?php echo e(__('common.Start')); ?> - <?php echo e(__('common.End')); ?>)
                                                    </span>
                                                        <h6 class="mb-0"><?php echo e(date('g:i A',$meeting->datetime)); ?>

                                                            - <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($meeting->duration==0): ?>
                                                                N/A
                                                            <?php else: ?>
                                                                <?php echo e(date('g:i A',$meeting->datetime+($meeting->duration*60))); ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></h6>

                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="<?php echo e($allow?'border-right: 1px solid #E1E2E6;':''); ?>">
                                                        <span>
                                                       <?php echo e(__('common.Duration')); ?>

                                                    </span>
                                                        <?php

                                                            $str = $meeting->duration?? 0;
                                                            $duration =preg_replace('/[^0-9]/', '', $str);

                                                        ?>
                                                        <h6 class="mb-0 nowrap"><?php echo e(MinuteFormat($duration)); ?></h6>
                                                    </div>


                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() &&  $isEnrolled): ?>

                                                        <div class="col-sm-3 margin_auto">

                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$meeting->isRunning()): ?>
                                                                <a target="_blank"
                                                                   href="<?php echo e(route('classStart', [$course->slug,'BBB',$meeting->id])); ?>"
                                                                   class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('common.Watch Now')); ?>

                                                                </a>

                                                            <?php else: ?>

                                                                <?php
                                                                    $last_time = Illuminate\Support\Carbon::parse($meeting->date. ' ' . $meeting->time);
                                                                   $nowDate = Illuminate\Support\Carbon::now();
                                                                   $isWaiting = $last_time->gt($nowDate);

                                                                ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                                    <span
                                                                        class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                                </span>
                                                                <?php else: ?>
                                                                    <span
                                                                        class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Closed')); ?>

                                                                </span>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php elseif($course->class->host=="Jitsi"): ?>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->class->jitsiMeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="row justify-content-between text-center p-3 m-2"
                                                     style="border:1px solid #E1E2E6">
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                        <span>
                                                        <?php echo e(__('common.Start Date')); ?>

                                                    </span>

                                                        <h6 class="mb-0"><?php echo e(date('d M Y',$meeting->datetime)); ?>  </h6>
                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                         <span>
                                                        <?php echo e(__('common.Time')); ?> <br>
                                                             (<?php echo e(__('common.Start')); ?> - <?php echo e(__('common.End')); ?>)
                                                    </span>
                                                        <h6 class="mb-0"><?php echo e(date('g:i A',$meeting->datetime)); ?>

                                                            - <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($meeting->duration==0): ?>
                                                                N/A
                                                            <?php else: ?>
                                                                <?php echo e(date('g:i A',$meeting->datetime+($meeting->duration*60))); ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></h6>

                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="<?php echo e($allow?'border-right: 1px solid #E1E2E6;':''); ?>">
                                                        <span>
                                                       <?php echo e(__('common.Duration')); ?>

                                                    </span>
                                                        <?php
                                                            $str = $meeting->duration?? 0;
                                                            $duration =preg_replace('/[^0-9]/', '', $str);

                                                        ?>
                                                        <h6 class="mb-0 nowrap"><?php echo e(MinuteFormat($duration)); ?></h6>
                                                    </div>


                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() &&  $isEnrolled): ?>

                                                        <div class="col-sm-3 margin_auto">
                                                            <?php
                                                                $start = \Illuminate\Support\Carbon::parse($meeting->date . ' ' .$meeting->time);
                                                                 $nowDate = \Illuminate\Support\Carbon::now();
                                                                 $not_start = $start->gt($nowDate);
                                                                 $end =$start->addMinutes($meeting->duration);
                                                                 $not_end =$end->gt($nowDate);
                                                            ?>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$not_start && $not_end): ?>

                                                                <a target="_blank"
                                                                   href="<?php echo e(route('classStart', [$course->slug,'Jitsi',$meeting->id])); ?>"
                                                                   class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('common.Watch Now')); ?>

                                                                </a>

                                                            <?php else: ?>

                                                                <?php
                                                                    $last_time = Illuminate\Support\Carbon::parse($meeting->date. ' ' . $meeting->time);
                                                                   $nowDate = Illuminate\Support\Carbon::now();
                                                                   $isWaiting = $last_time->gt($nowDate);

                                                                ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                                    <span
                                                                        class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                                </span>
                                                                <?php else: ?>
                                                                    <span
                                                                        class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Closed')); ?>

                                                                </span>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php elseif($course->class->host=="Custom"): ?>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->class->customMeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="row justify-content-between text-center p-3 m-2"
                                                     style="border:1px solid #E1E2E6">
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                        <span>
                                                        <?php echo e(__('common.Start Date')); ?>

                                                    </span>

                                                        <h6 class="mb-0"><?php echo e(date('d M Y',$meeting->datetime)); ?>  </h6>
                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                         <span>
                                                        <?php echo e(__('common.Time')); ?> <br>
                                                             (<?php echo e(__('common.Start')); ?> - <?php echo e(__('common.End')); ?>)
                                                    </span>
                                                        <h6 class="mb-0"><?php echo e(date('g:i A',$meeting->datetime)); ?>

                                                            - <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($meeting->duration==0): ?>
                                                                N/A
                                                            <?php else: ?>
                                                                <?php echo e(date('g:i A',$meeting->datetime+($meeting->duration*60))); ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></h6>

                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="<?php echo e($allow?'border-right: 1px solid #E1E2E6;':''); ?>">
                                                        <span>
                                                       <?php echo e(__('common.Duration')); ?>

                                                    </span>
                                                        <?php
                                                            $str = $meeting->duration?? 0;
                                                            $duration =preg_replace('/[^0-9]/', '', $str);

                                                        ?>
                                                        <h6 class="mb-0 nowrap"><?php echo e(MinuteFormat($duration)); ?></h6>
                                                    </div>


                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() &&  $isEnrolled): ?>

                                                        <div class="col-sm-3 margin_auto">
                                                            <?php
                                                                $start = \Illuminate\Support\Carbon::parse($meeting->date . ' ' .$meeting->time);
                                                                 $nowDate = \Illuminate\Support\Carbon::now();
                                                                 $not_start = $start->gt($nowDate);
                                                                 $end =$start->addMinutes($meeting->duration);
                                                                 $not_end =$end->gt($nowDate);
                                                            ?>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$not_start && $not_end && !empty($meeting->link)): ?>

                                                                <a target="_blank"
                                                                   href="<?php echo e(route('classStart', [$course->slug,'Custom',$meeting->id])); ?>"
                                                                   class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('common.Watch Now')); ?>

                                                                </a>

                                                            <?php else: ?>

                                                                <?php
                                                                    $last_time = Illuminate\Support\Carbon::parse($meeting->date. ' ' . $meeting->time);
                                                                   $nowDate = Illuminate\Support\Carbon::now();
                                                                   $isWaiting = $last_time->gt($nowDate);

                                                                ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                                    <span
                                                                        class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                                </span>
                                                                <?php else: ?>
                                                                    <span
                                                                        class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Closed')); ?>

                                                                </span>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php elseif($course->class->host=="InAppLiveClass"): ?>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->class->inAppMeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="row justify-content-between text-center p-3 m-2"
                                                     style="border:1px solid #E1E2E6">
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                        <span>
                                                        <?php echo e(__('common.Start Date')); ?>

                                                    </span>

                                                        <h6 class="mb-0"><?php echo e(date('d M Y',$meeting->datetime)); ?>  </h6>
                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                         <span>
                                                        <?php echo e(__('common.Time')); ?> <br>
                                                             (<?php echo e(__('common.Start')); ?> - <?php echo e(__('common.End')); ?>)
                                                    </span>
                                                        <h6 class="mb-0"><?php echo e(date('g:i A',$meeting->datetime)); ?>

                                                            - <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($meeting->duration==0): ?>
                                                                N/A
                                                            <?php else: ?>
                                                                <?php echo e(date('g:i A',$meeting->datetime+($meeting->duration*60))); ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></h6>

                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="<?php echo e($allow?'border-right: 1px solid #E1E2E6;':''); ?>">
                                                        <span>
                                                       <?php echo e(__('common.Duration')); ?>

                                                    </span>
                                                        <?php
                                                            $str = $meeting->duration?? 0;
                                                            $duration =preg_replace('/[^0-9]/', '', $str);

                                                        ?>
                                                        <h6 class="mb-0 nowrap"><?php echo e(MinuteFormat($duration)); ?></h6>
                                                    </div>


                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() &&  $isEnrolled): ?>

                                                        <div class="col-sm-3 margin_auto">
                                                            <?php
                                                                $start = \Illuminate\Support\Carbon::parse($meeting->date . ' ' .$meeting->time);
                                                                 $nowDate = \Illuminate\Support\Carbon::now();
                                                                 $not_start = $start->gt($nowDate);
                                                                 $end =$start->addMinutes($meeting->duration);
                                                                 $not_end =$end->gt($nowDate);
                                                            ?>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$not_start && $not_end): ?>

                                                                <a target="_blank"
                                                                   href="<?php echo e(route('classStart', [$course->slug,'InAppLiveClass',$meeting->id])); ?>"
                                                                   class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('common.Watch Now')); ?>

                                                                </a>

                                                            <?php else: ?>

                                                                <?php
                                                                    $last_time = Illuminate\Support\Carbon::parse($meeting->date. ' ' . $meeting->time);
                                                                   $nowDate = Illuminate\Support\Carbon::now();
                                                                   $isWaiting = $last_time->gt($nowDate);

                                                                ?>
                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isWaiting): ?>
                                                                    <span
                                                                        class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                                </span>
                                                                <?php else: ?>
                                                                    <span
                                                                        class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Closed')); ?>

                                                                </span>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php elseif($course->class->host=="Zoom"): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->class->zoomMeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="row justify-content-between text-center p-3 m-2"
                                                     style="border:1px solid #E1E2E6">
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                        <span>
                                                     <?php echo e(__('common.Start Date')); ?>

                                                    </span>

                                                        <h6 class="mb-0"><?php echo e(date('d M Y',strtotime($meeting->start_time))); ?>  </h6>
                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                         <span>
                                                       <?php echo e(__('common.Time')); ?> <br>
                                                             (<?php echo e(__('common.Start')); ?> - <?php echo e(__('common.End')); ?>)
                                                    </span>
                                                        <h6 class="mb-0"><?php echo e(date('g:i A',strtotime($meeting->start_time))); ?>

                                                            -<?php echo e(date('g:i A',strtotime($meeting->end_time))); ?></h6>


                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="<?php echo e($allow?'border-right: 1px solid #E1E2E6;':''); ?>">
                                                        <span>
                                                       <?php echo e(__('common.Duration')); ?>

                                                    </span>
                                                        <?php

                                                            $str = $meeting->meeting_duration?? 0;
                                                            $duration =preg_replace('/[^0-9]/', '', $str);


                                                        ?>
                                                        <h6 class="mb-0 nowrap"><?php echo e(MinuteFormat($duration)); ?></h6>
                                                    </div>


                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() &&  $isEnrolled): ?>
                                                        <div class="col-sm-3 margin_auto">
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$meeting->currentStatus=="started"): ?>
                                                                <a target="_blank"
                                                                   href="<?php echo e(route('classStart', [$course->slug,'Zoom',$meeting->id])); ?>"
                                                                   class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('common.Watch Now')); ?>

                                                                </a>
                                                            <?php elseif(@$meeting->currentStatus== 'waiting'): ?>
                                                                <span
                                                                    class="theme_line_btn  small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Waiting')); ?>

                                                               </span>
                                                            <?php else: ?>
                                                                <span
                                                                    class="theme_line_btn  small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('frontend.Closed')); ?>

                                                                </span>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php elseif($course->class->host=="GoogleMeet"): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $course->class->googleMeetMeetings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="row justify-content-between text-center p-3 m-2"
                                                     style="border:1px solid #E1E2E6">
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                    <span>
                                                 <?php echo e(__('common.Start Date')); ?>

                                                </span>

                                                        <h6 class="mb-0"><?php echo e(date('d M Y',strtotime($meeting->start_date_time))); ?>  </h6>
                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="border-right: 1px solid #E1E2E6;">
                                                     <span>
                                                   <?php echo e(__('common.Time')); ?> <br>
                                                         (<?php echo e(__('common.Start')); ?> - <?php echo e(__('common.End')); ?>)
                                                </span>
                                                        <h6 class="mb-0"><?php echo e(date('g:i A',strtotime($meeting->start_date_time))); ?>

                                                            -<?php echo e(date('g:i A',strtotime($meeting->end_date_time))); ?></h6>


                                                    </div>
                                                    <div class="<?php echo e($allow?'col-sm-3':'col-sm-4'); ?> margin_auto"
                                                         style="<?php echo e($allow?'border-right: 1px solid #E1E2E6;':''); ?>">
                                                    <span>
                                                   <?php echo e(__('common.Duration')); ?>

                                                </span>

                                                        <h6 class="mb-0 nowrap"><?php echo e(MinuteFormat(\Carbon\Carbon::parse($meeting->start_date_time)->diffInMinutes($meeting->end_date_time))); ?></h6>
                                                    </div>


                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check() &&  $isEnrolled): ?>
                                                        <div class="col-sm-3 margin_auto">
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$meeting->currentStatus=="started"): ?>
                                                                <a target="_blank"
                                                                   href="<?php echo e(route('classStart', [$course->slug,'GoogleMeet',$meeting->id])); ?>"
                                                                   class="theme_btn small_btn2 d-block text-center height_50   p-3 ">
                                                                    <?php echo e(__('common.Watch Now')); ?>

                                                                </a>
                                                            <?php elseif(@$meeting->currentStatus== 'waiting'): ?>
                                                                <span
                                                                    class="theme_line_btn  small_btn2 d-block text-center height_50   p-3 ">
                                                                <?php echo e(__('frontend.Waiting')); ?>

                                                           </span>
                                                            <?php else: ?>
                                                                <span
                                                                    class="theme_line_btn  small_btn2 d-block text-center height_50   p-3 ">
                                                                <?php echo e(__('frontend.Closed')); ?>

                                                            </span>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </div>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>

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
                                                    <p><?php echo @$course->user->short_details; ?></p>
                                                </div>
                                                <div class="intractor_qualification">
                                                    <div class="single_qualification">
                                                        <i class="ti-star"></i> <?php echo e(@$course->user->totalRating()['rating']); ?>

                                                        <?php echo e(__('frontend.Rating')); ?>

                                                    </div>
                                                    <div class="single_qualification">
                                                        <i class="ti-comments"></i> <?php echo e(@$course->user->totalRating()['total']); ?>

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
                                            <?php echo @$course->user->about; ?>                                        </p>
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
                                                                                               class="theme_color2">Sign
                                                                    In</a>
                                                                or <a
                                                                    class="theme_color2" href="<?php echo e(url('register')); ?>">Sign
                                                                    Up</a>
                                                                as student to post a review</p>
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
                                               class="theme_button mr_10 sm_mb_10"><?php echo e(__('frontend.Already In Wishlist')); ?>

                                            </a>
                                        <?php elseif(Auth::check() && !$isBookmarked ): ?>
                                            <a href="<?php echo e(route('bookmarkSave',[$course->id])); ?>"
                                               class="">
                                                <i
                                                    class="far fa-heart"></i>
                                                <?php echo e(__('frontend.Add To Wishlist')); ?>  </a>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

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
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check()): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isEnrolled): ?>
                                            <a href="#"
                                               class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Already Enrolled')); ?></a>

                                            
                                            
                                            
                                            
                                            
                                            
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
                                                    <a href=" <?php echo e(route('addToCart',[@$course->id])); ?> "
                                                       class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Add To Cart')); ?></a>
                                                    <a href="<?php echo e(route('buyNow',[@$course->id])); ?>"
                                                       class="theme_line_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Buy Now')); ?></a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
                                                   class="theme_line_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Buy Now')); ?></a>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal789188bfd382860b2c0ef494bc4706a4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal789188bfd382860b2c0ef494bc4706a4 = $attributes; } ?>
<?php $component = App\View\Components\GoogleCalendarReminder::resolve(['title' => $course->title,'date' => $course->class->start_date,'time' => $course->class->time,'duration' => $course->class->duration] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('google-calendar-reminder'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GoogleCalendarReminder::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal789188bfd382860b2c0ef494bc4706a4)): ?>
<?php $attributes = $__attributesOriginal789188bfd382860b2c0ef494bc4706a4; ?>
<?php unset($__attributesOriginal789188bfd382860b2c0ef494bc4706a4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal789188bfd382860b2c0ef494bc4706a4)): ?>
<?php $component = $__componentOriginal789188bfd382860b2c0ef494bc4706a4; ?>
<?php unset($__componentOriginal789188bfd382860b2c0ef494bc4706a4); ?>
<?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <?php if ($__env->exists('gift::buttons.course_details_page_button', ['course' => $course])) echo $__env->make('gift::buttons.course_details_page_button', ['course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Installment') && $course_price > 0): ?>
                                    <?php if ($__env->exists(theme('partials._installment_plan_button'), ['course' => $course])) echo $__env->make(theme('partials._installment_plan_button'), ['course' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Cashback')): ?>
                                    <?php if ($__env->exists(theme('partials._cashback_card'), ['product' => $course])) echo $__env->make(theme('partials._cashback_card'), ['product' => $course], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <p class="font_14 f_w_500 text-center mb_30"></p>
                                <h4 class="f_w_700 mb_10"><?php echo e(__('frontend.This class includes')); ?>:</h4>
                                <ul class="course_includes">

                                    <li>
                                        <i class="ti-calendar"></i>
                                        <p class="nowrap">  <?php echo e(__('common.Start Date')); ?>  <?php echo e(showDate($course->class->start_date)); ?>  <?php echo e(__('common.At')); ?>

                                            <?php echo e(date('h:i A', strtotime($course->class->time))); ?>

                                        </p>
                                    </li>

                                    <li>
                                        <i class="ti-user"></i>
                                        <p class="nowrap"> <?php echo e(__('virtual-class.Capacity')); ?> <?php echo e($course->class->capacity??"Unlimited"); ?></p>
                                    </li>


                                    <li>
                                        <i class="ti-timer"></i>
                                        <p class="nowrap"> <?php echo e(__('frontend.Duration')); ?> <?php echo e(convertMinutesToHourAndMinute($course->class->duration)); ?>

                                            Hours</p>
                                    </li>

                                    <li>
                                        <i class="ti-agenda"></i>
                                        <p><?php echo e(__('frontend.Sessions')); ?> <?php echo e($course->class->total_class); ?> </p>
                                    </li>
                                    <li>
                                        <i class="ti-user"></i>
                                        <p><?php echo e(__('frontend.Enrolled')); ?> <?php echo e($course->total_enrolled); ?> <?php echo e(__('frontend.students')); ?></p>
                                    </li>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->certificate): ?>
                                        <li>
                                            <i class="ti-crown"></i>
                                            <p><?php echo e(__('frontend.Certificate of Completion')); ?></p>
                                        </li>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

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
                        <div class="mt-40 d-flex justify-content-between">
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\class-details-page-section.blade.php ENDPATH**/ ?>