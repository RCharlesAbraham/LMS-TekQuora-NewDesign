<style>
    .nice-select.small_select {
        min-width: 200px;
    }
</style>
<section class="pricing_plan pt_100 pb_100  bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle mb-3"><h2
                    ><?php echo e(__('subscription.Pricing Plan & Package')); ?></h2>
                    <p></p></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box_header d-flex flex-wrap align-items-center justify-content-center">
                    <div class="box_header_right mb_30">
                        <div class="short_select d-flex align-items-center">
                            <h5 class="mr_10 font_16 f_w_500 mb-0"><?php echo e(__('frontend.Category')); ?>:</h5>
                            <select class="small_select" id="category">
                                <option value="" data-display="<?php echo e(__('frontend.All')); ?>"><?php echo e(__('frontend.All')); ?></option>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"
                                            <?php if(request('category')==$category->id): ?> selected <?php endif; ?>><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=>$plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-sm-6 d-flex">
                    <div
                        class="single_pricing_plan row_padding w-100">
                        <h5><?php echo e($plan->title); ?></h5>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($setting->type==1): ?>
                            <h4><?php echo e(__('subscription.All Courses')); ?></h4>
                        <?php elseif($setting->type==2): ?>
                            <h4>
                                <a href="<?php echo e(route('subscriptionCourseList',$plan->id)); ?>"><?php echo e(__('subscription.Selected Courses')); ?></a>
                            </h4>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <h2>
                            <?php
                                $type =Settings('currency_show');
                            ?>
                            <span
                                class="<?php if($type==3|| $type==4): ?> right <?php endif; ?>"><?php echo e(Settings('currency_symbol')); ?></span>

                            <?php echo e(translatedNumber($plan->price)); ?></h2>
                        <p class="pb-2"><?php echo e($plan->about); ?></p>
                        <form action="<?php echo e(route('courseSubscriptionCheckout')); ?>">
                            <input type="hidden" name="price"
                                   value="<?php echo e($plan->price); ?>">
                            <input type="hidden" name="plan"
                                   value="<?php echo e($plan->id); ?>">
                            <button type="submit"
                                    class="theme_btn small_btn2 payment-link">
                                <?php echo e($plan->btn_txt); ?>

                            </button>
                        </form>


                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($plans)==0): ?>
                <div class="col-lg-4 col-sm-6 d-flex justify-content-center">
                    <h5>
                        <?php echo e(__('common.No data Found')); ?>

                    </h5>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10">
                <div class="features_list pt_100 pb_100 list_style">
                    <h5><?php echo e(__('subscription.Included features')); ?> <span>(<?php echo e(__('subscription.These features for both of the plan')); ?>)</span>
                    </h5>
                    <ul>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $plan_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <?php echo e($feature->title); ?>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_tittle">
                    <h2><?php echo e(__('subscription.Frequently Ask Question')); ?></h2>
                </div>
            </div>
            <div class="col-md-10">
                <div class="theme_according" id="accordion1">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="card-header pink_bg" id="headingFour<?php echo e($key); ?>">
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
                                 data-bs-parent="#accordion1">
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
</section>
<script>
    $(document).ready(function () {
        $("#category").on('change keyup paste', function (e) {
            let category = $('#category').find(":selected").val();
            let url = "<?php echo e(route('courseSubscription')); ?>";
            url += '?category=' + category.toString();
            window.location.href = url;
        });
    });
</script>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\subscription-page-section.blade.php ENDPATH**/ ?>