<div>
    <div>
        <div class="main_content_iner main_content_padding">
            <div class="container">
                <div class="my_courses_wrapper pricing_plan">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__title3 margin-50">
                                <h3>
                                    <?php echo e(__('org-subscription.My Plan')); ?>

                                </h3>
                            </div>
                        </div>


                        <div class="col-xl-6 col-md-6">
                            <div class="short_select d-flex align-items-center pt-0 pb-3">

                            </div>
                        </div>
                        <div class=" col-xl-6 col-md-6">
                            <form action="<?php echo e(route(\Request::route()->getName())); ?>">
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
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($plans)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $plan=$plan->plan;
                                ?>
                                <div class="col-xl-4 col-md-6">

                                    <div class="couse_wizged single_pricing_plan  row_padding d-flex flex-column">

                                        <div class="course_content pt-1  pe-0 d-flex flex-column flex-fill">
                                            <a href="<?php echo e(route('orgSubscriptionPlanList',$plan->id)); ?>">
                                                <h4 class="twoLine_ellipsis" title="<?php echo e($plan->title); ?>">
                                                    <?php echo e($plan->title); ?>

                                                </h4>
                                            </a>
                                            <p class="pb-2">
                                                <?php echo e(Str::limit($plan->about,'90','...')); ?>

                                            </p>
                                            <div class="d-flex align-items-end gap_15 flex-fill ">

                                                <div class="progress_percent flex-fill text-end">
                                                    <div class="progress theme_progressBar ">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: <?php echo e(round($plan->totalCompleted()['totalProgress'])); ?>%"
                                                             aria-valuenow="25"
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <p class="font_14 f_w_400"><?php echo e(round($plan->totalCompleted()['totalProgress'])); ?>

                                                        % <?php echo e(__('student.Complete')); ?></p>
                                                </div>
                                            </div>
                                            <div class="course_less_students subscriptionPlanItem">
                                                <div class="d-flex justify-content-between">
                                                    <div class="text-nowrap">
                                                        <a>
                                                            <i class="ti-agenda"></i><?php echo e(count($plan->assign)); ?> <?php echo e(__('org.Items')); ?>

                                                        </a>
                                                    </div>
                                                    <div class="text-nowrap">
                                                        <a>
                                                            <i class="ti-timer"></i><?php echo e($plan->remaining()); ?> <?php echo e(__('org.Day')); ?>

                                                        </a>

                                                    </div>
                                                    <div class="text-nowrap">
                                                        <a>
                                                            <i class="ti-user"></i><?php echo e($plan->total_enrolled); ?> <?php echo e(__('student.Students')); ?>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($plans)==0): ?>
                                <div class="col-12">
                                    <div class="section__title3 margin_50">
                                        <p class="text-center"><?php echo e(__('org-subscription.No Plan Purchased Yet')); ?>!</p>

                                    </div>
                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-org-subscription-plan-section.blade.php ENDPATH**/ ?>