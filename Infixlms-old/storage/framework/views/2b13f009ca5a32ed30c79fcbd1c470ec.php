<section class="pricing_plan pt_100 pb_100 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle mb-4">
                    <h2 class="mb-0 fw-bold"><?php echo e(__('membership.Membership Pricing Plan & Package')); ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6 d-flex mt-4">
                    <div class="single_pricing_plan row_padding w-100">
                        <h5><?php echo e($plan->title); ?></h5>
                        <h4>
                            <a href="<?php echo e(route('membershipCourseEbookList',$plan->id)); ?>"><?php echo e(__('membership.Selected Courses & Ebooks')); ?></a>
                        </h4>
                        <h2 class="mb-3">
                            <?php
                                $type = Settings('currency_show');
                            ?>
                            <span
                                class="<?php if($type == 3 || $type == 4): ?> right <?php endif; ?>"><?php echo e(Settings('currency_symbol')); ?></span>
                            <?php echo e($plan->price); ?>.00
                        </h2>
                        / <?php echo e($plan->expire !=1 ? '('.$plan->expire.')' :''); ?>

                        <?php echo e($plan->expire_type); ?>

                        <p class="pb-2"><?php echo e($plan->detail); ?></p>
                        <form
                            action="<?php echo e(route('membershipPlanCheckout')); ?>">
                            <input type="hidden" name="price"
                                   value="<?php echo e($plan->price); ?>">
                            <input type="hidden" name="plan_id"
                                   value="<?php echo e($plan->id); ?>">
                            <button type="submit"
                                    class="theme_btn small_btn2 payment-link">
                                <?php echo e($plan->btn_txt ?? __('membership.Started Now')); ?>

                            </button>
                        </form>


                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($plan_features)): ?>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="features_list pt_100 pb_100 list_style  ">
                        <h5><?php echo e(__('subscription.Included features')); ?>

                            <span>(<?php echo e(__('subscription.These features for both of the plan')); ?>)</span>
                        </h5>
                        <ul>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $plan_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <?php echo e($feature->title); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($faqs)): ?>
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h3 style="text-align: center;margin-bottom: 72px;">
                                <?php echo e(__('subscription.Frequently Ask Question')); ?> </h3>
                            <div class="theme_according mb_100" id="accordion1">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card">
                                        <div class="card-header pink_bg"
                                             id="headingFour<?php echo e($key); ?>">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link text_white collapsed"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseFour<?php echo e($key); ?>"
                                                        aria-expanded="false"
                                                        aria-controls="collapseFour<?php echo e($key); ?>">
                                                    <?php echo e($faq->question); ?>

                                                </button>
                                            </h5>
                                        </div>
                                        <div class="collapse" id="collapseFour<?php echo e($key); ?>"
                                             aria-labelledby="headingFour<?php echo e($key); ?>"
                                             data0bs-parent="#accordion1">
                                            <div class="card-body">
                                                <div class="curriculam_list">

                                                    <div class="curriculam_single">
                                                        <div class="curriculam_left">

                                                            <span><?php echo $faq->answer; ?></span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\membership-page-section.blade.php ENDPATH**/ ?>