<div>

    <div class="main_content_iner main_content_padding">

        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title3 mb_40">
                            <h3 class="mb-0">
                                <?php echo e(__('frontend.My Bundle')); ?>

                            </h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($BundleCourse)): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $BundleCourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php
                                    $oldPrice = 0;
                                    foreach ($value->course as $raw){
                                      $oldPrice += $raw->course->price;
                                    }

                                ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="package_widget mb_30">
                                        <div class="package_header text-center">
                                            <h3><?php echo e($value->title); ?></h3>
                                            <div
                                                class="package_rating d-flex align-items-center justify-content-center">
                                                <div class="feedmak_stars d-flex align-items-center">

                                                    <?php
                                                        $star = 5;
                                                    ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($x=0; $x < $value->reviews->avg('star'); $x++): ?>
                                                        <i class="fas fa-star"></i>
                                                        <?php
                                                            $star -= 1;
                                                        ?>
                                                    <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($x=0; $x < $star; $x++): ?>
                                                        <i class="far fa-star"></i>
                                                    <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                                <p>(<?php echo e($value->student); ?> <?php echo e(__('bundleSubscription.students')); ?>)</p>
                                            </div>
                                        </div>
                                        <div class="package_body">
                                            <div class="package_lists">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $value->course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$raw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div
                                                        class="single_packageList <?php echo e($key>2?'d-none extra_'.$value->id:''); ?>">
                                                        <p><?php echo e(Str::limit($raw->course->title, 40)); ?></p>
                                                        <span><?php echo e(getPriceFormat($raw->course->price)); ?></span>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($value->course)>3): ?>
                                                <div class="package_seperator" onclick="openAllCourse(<?php echo e($value->id); ?>)">
  <span>
                                <i class="fa fa-angle-down" id="seperator_<?php echo e($value->id); ?>"></i>
                            </span>
                                                </div>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <div
                                                class="package_footer d-flex justify-content-between align-items-center flex-column">

                                                <div class="prise_tag">
                                                    <h4>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($oldPrice!=0): ?>
                                                            <span><?php echo e(getPriceFormat($oldPrice)); ?></span>
                                                            <?php echo e(getPriceFormat((int)$value->price)); ?>

                                                        <?php else: ?>
                                                            <h4 class="text-center"><?php echo e(getPriceFormat((int)$value->price)); ?></h4>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </h4>
                                                    <p><?php echo e(__('bundleSubscription.Total')); ?> <?php echo e(count($value->course)); ?> <?php echo e(__('bundleSubscription.Course')); ?></p>
                                                </div>
                                                <a href="<?php echo e(route('bundle.show')); ?>?id=<?php echo e($value->id); ?>"
                                                   class="theme_btn small_btn2 w-100 text-center"><?php echo e(__('bundleSubscription.View Details')); ?></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="text-center">
                                    <?php echo e(__('common.No data available in the table')); ?>

                                </p>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function openAllCourse(plan_id) {
            var seperator = $('#seperator_' + plan_id);
            var seperator_class = seperator.attr('class');
            if (seperator_class == "fa fa-angle-down") {
                seperator.removeClass("fa fa-angle-down");
                seperator.addClass("fa fa-angle-up");
                $('.extra_' + plan_id).removeClass('d-none');
            } else if (seperator_class == "fa fa-angle-up") {
                seperator.removeClass("fa fa-angle-up");
                seperator.addClass("fa fa-angle-down");
                $('.extra_' + plan_id).addClass('d-none');


            }
        }
    </script>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-bundle-page-section.blade.php ENDPATH**/ ?>