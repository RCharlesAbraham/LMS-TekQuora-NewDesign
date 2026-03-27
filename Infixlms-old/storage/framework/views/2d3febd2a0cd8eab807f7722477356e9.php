<div>
    <style>
        .skill_grid_box {
            border: 2px solid var(--system_primery_color);
            height: 100px;
        }

        .badge_image {
            width: 80px;
            height: 80px;
            margin: 5px;
        }

        .badge_text {
            margin-top: 18px;
        }

        .badge_date {
            font-size: 12px;
            font-weight: 400;
            line-height: 26px;
            color: #373737;
            margin-bottom: 0;
            font-family: "Jost", sans-serif;
        }

        .badge_body {
            display: flex;
            flex-wrap: wrap;
            margin-right: 0px;
            margin-left: -5px;
        }

        /* Cart design */
        .single-cart {
            border: 1px solid #d6d6da;
            padding: 20px 20px 20px 20px;
            margin-bottom: 5px;
            border-radius: 10px;
        }

        .single-cart .cart-cap {
            padding-left: 20px;
        }

        .single-cart .cart-cap h4 {
            color: #000;
            font-size: 20px;
            font-weight: 700;
        }

        .single-cart .cart-cap p {
            color: #000;
            margin-bottom: 0;
            line-height: 1;
            font-size: 15px;
        }
    </style>
    <div class="main_content_iner main_content_padding">

        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="my_courses_wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__title3 margin-50">
                                <h3>
                                    <?php echo e(__('skill.My Skill')); ?>

                                </h3>
                            </div>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-xl-4 col-md-6">
                                <div class="single-cart d-flex align-items-center">
                                    <img style="max-width: 80px; height:auto" src="<?php echo e(asset($skill->skill_info->badge)); ?>"
                                         alt="">
                                    <div class="cart-cap">
                                        <h4><?php echo e($skill->skill_info->name); ?></h4>
                                        <p><?php echo e(__('common.Date Achieved')); ?>: <?php echo e(showDate($skill->created_at)); ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="col-xl-12 mb-4">
                                <p class="text-center"><?php echo e(__('common.Skill Not Found')); ?></p>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-skill.blade.php ENDPATH**/ ?>