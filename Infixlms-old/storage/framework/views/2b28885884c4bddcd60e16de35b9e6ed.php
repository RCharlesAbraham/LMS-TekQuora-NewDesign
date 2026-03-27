<div>
    <div class="lms_section section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9">
                    <div class="section__title text-center mb_80">
                        <h3><?php echo e(__('saas.Choose a plan')); ?></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-xl-12">
                    <div class="row">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2=>$plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-4 col-lg-6">
                                <div class="lms_pricing_wized mb_30">
                                    <div class="lms_pricing_hader">
                                        <span><?php echo e($plan->name); ?></span>
                                        <h3>
                                            <?php echo e(getPriceFormat($plan->price)); ?></h3>
                                        <h5>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->days==0): ?>
                                                <?php echo e(__('saas.Unlimited')); ?>

                                            <?php else: ?>
                                                <?php echo e($plan->days); ?> <?php echo e(__('common.Days')); ?>

                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </h5>
                                    </div>
                                    <div class="lms_pricing_body">
                                        <ul>

                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('LmsSaasMD')): ?>
                                                {
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->course_access): ?>
                                                    <li><?php echo e(__('saas.Course Limit')); ?>

                                                        : <?php echo e($plan->course_limit==0?trans('saas.Unlimited'):$plan->course_limit); ?></li>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->instructor_access): ?>

                                                    <li><?php echo e(__('saas.Instructor Limit')); ?>:
                                                        <?php echo e($plan->instructor_limit==0?trans('saas.Unlimited'):$plan->instructor_limit); ?> </li>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->student_access): ?>

                                                    <li><?php echo e(__('saas.Student Limit')); ?>:
                                                        <?php echo e($plan->student_limit==0?trans('saas.Unlimited'):$plan->student_limit); ?> </li>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->meeting_access): ?>

                                                    <li><?php echo e(__('saas.Virtual Class Limit')); ?>:
                                                        <?php echo e($plan->meeting_limit==0?trans('saas.Unlimited'):$plan->meeting_limit); ?>  </li>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                <li><?php echo e(__('saas.Course File Limit')); ?>:
                                                    <?php echo e($plan->upload_limit==0?trans('saas.Unlimited'):$plan->upload_limit/1024); ?>

                                                    MB
                                                </li>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->quiz_access): ?>
                                                    <?php echo e($plan->upload_limit==0?trans('saas.Unlimited'):$plan->upload_limit/1024); ?>

                                                    MB
                                                    </li>
                                                    <li><?php echo e(__('saas.Quiz Question Limit')); ?>:
                                                        <?php echo e($plan->quiz_question_limit==0?trans('saas.Unlimited'):$plan->quiz_question_limit); ?> </li>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($plan->blog_access): ?>
                                                    <li><?php echo e(__('saas.Blog post limit')); ?>:
                                                        <?php echo e($plan->blog_post_limit==0?trans('saas.Unlimited'):$plan->blog_post_limit); ?>  </li>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php else: ?>
                                                <li><?php echo e(__('saas.Course Limit')); ?>

                                                    : <?php echo e($plan->course_limit==0?trans('saas.Unlimited'):$plan->course_limit); ?></li>

                                                <li><?php echo e(__('saas.Instructor Limit')); ?>:
                                                    <?php echo e($plan->instructor_limit==0?trans('saas.Unlimited'):$plan->instructor_limit); ?> </li>

                                                <li><?php echo e(__('saas.Student Limit')); ?>:
                                                    <?php echo e($plan->student_limit==0?trans('saas.Unlimited'):$plan->student_limit); ?> </li>

                                                <li><?php echo e(__('saas.Virtual Class Limit')); ?>:
                                                    <?php echo e($plan->meeting_limit==0?trans('saas.Unlimited'):$plan->meeting_limit); ?>  </li>

                                                <li><?php echo e(__('saas.Course File Limit')); ?>:
                                                    <?php echo e($plan->upload_limit==0?trans('saas.Unlimited'):$plan->upload_limit/1024); ?>

                                                    MB
                                                </li>
                                                <li><?php echo e(__('saas.Quiz Question Limit')); ?>:
                                                    <?php echo e($plan->quiz_question_limit==0?trans('saas.Unlimited'):$plan->quiz_question_limit); ?> </li>

                                                <li><?php echo e(__('saas.Blog post limit')); ?>:
                                                    <?php echo e($plan->blog_post_limit==0?trans('saas.Unlimited'):$plan->blog_post_limit); ?>  </li>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                        </ul>
                                    </div>
                                    <div class="lms_pricing_footer">
                                        <form action="<?php echo e(route('saasCheckout')); ?>">
                                            <input type="hidden" name="price"
                                                   value="<?php echo e($plan->price); ?>">
                                            <input type="hidden" name="plan"
                                                   value="<?php echo e($plan->id); ?>">
                                            <button type="submit"
                                                    class="theme_btn small_btn2 w-100 text-center">
                                                <?php echo e($plan->btn_txt); ?>

                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\saas-page-section.blade.php ENDPATH**/ ?>