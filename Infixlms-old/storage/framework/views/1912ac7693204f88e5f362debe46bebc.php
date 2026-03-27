<div>
    <div class="main_content_iner main_content_padding">
        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title3 margin-50">
                            <h3><?php echo e(__('frontend.Wishlist')); ?></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($bookmarks)==0): ?>
                                <div class="col-12">
                                    <div class="section__title3 margin_50">
                                        <p class="text-center"><?php echo e(__('student.Empty')); ?>!</p>
                                    </div>
                                </div>
                            <?php else: ?>
                                <table class="table custom_table mb-0">
                                    <thead>
                                    <tr>
                                        <th><?php echo e(__('student.Product')); ?></th>
                                        <th><?php echo e(__('student.Price')); ?></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($bookmarks)): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $bookmarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookmark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td>
                                                    <div class="product_name d-flex align-items-center">
                                                        <div class="p-3">
                                                            <a href="<?php echo e(route('bookmarkSave',[$bookmark->course_id])); ?>">
                                                                <svg id="icon3" xmlns="http://www.w3.org/2000/svg"
                                                                     width="16"
                                                                     height="16" viewBox="0 0 16 16">
                                                                    <path data-name="Path 174" d="M0,0H16V16H0Z"
                                                                          fill="none"/>
                                                                    <path data-name="Path 175"
                                                                          d="M14.95,6l-1-1L9.975,8.973,6,5,5,6,8.973,9.975,5,13.948l1,1,3.973-3.973,3.973,3.973,1-1L10.977,9.975Z"
                                                                          transform="translate(-1.975 -1.975)"
                                                                          fill="var(--system_primery_color)"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="thumb">
                                                            <img class="h-100"
                                                                 src="<?php echo e(getCourseImage($bookmark->course->thumbnail)); ?>"
                                                                 alt="">
                                                        </div>
                                                        <span><?php echo e(@$bookmark->course->title); ?></span>
                                                    </div>
                                                </td>
                                                <td class="f_w_400">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(@$bookmark->course->discount_price!=null): ?>
                                                    <?php echo e(getPriceFormat($bookmark->course->discount_price)); ?>

                                                <?php else: ?>
                                                    <?php echo e(getPriceFormat($bookmark->course->price)); ?>

                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                <td class="f_w_600">
                                                    <a href="<?php echo e(courseDetailsUrl($bookmark->course->id,$bookmark->course->type,$bookmark->course->slug)); ?>"
                                                       class="theme_btn small_btn4"><?php echo e(__('student.View')); ?></a>

                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!onlySubscription()&& !$bookmark->course->isLoginUserEnrolled): ?>
                                                        <a href="<?php echo e(route('addToCart',[@$bookmark->course->id])); ?>"
                                                           class="theme_btn small_btn4"><?php echo e(__('common.Add To Cart')); ?></a>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </td>


                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\wish-list-page-section.blade.php ENDPATH**/ ?>