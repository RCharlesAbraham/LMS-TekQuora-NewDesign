<div>
    <style>
        .nice-select-search-box {
            display: none !important;
        }

        .nice-select.open .list {
            padding: 0 !important;
        }

    </style>
    <div class="course_category_chose mb_30 mt_10">
        <div class="popupClose"><i class="ti-close"></i></div>

        <div class="course_title mb_30 d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="13" viewBox="0 0 19.5 13">
                <g id="filter-icon" transform="translate(28)">
                    <rect id="Rectangle_1" data-name="Rectangle 1" width="19.5" height="2" rx="1"
                          transform="translate(-28)" fill="var(--system_primery_color)"/>
                    <rect id="Rectangle_2" data-name="Rectangle 2" width="15.5" height="2" rx="1"
                          transform="translate(-26 5.5)" fill="var(--system_primery_color)"/>
                    <rect id="Rectangle_3" data-name="Rectangle 3" width="5" height="2" rx="1"
                          transform="translate(-20.75 11)" fill="var(--system_primery_color)"/>
                </g>
            </svg>
            <h5 class="font_16 f_w_500 mb-0"><?php echo e(__('frontend.Filter Category')); ?></h5>
        </div>
        <div class="course_category_inner mb_30">
            
            <div class="single_course_categry">
                <h4 class="font_18 f_w_700">
                    <?php echo e(__('frontend.Category')); ?>

                </h4>

                <ul class="Check_sidebar">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($categories)): ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <label class="primary_checkbox d-flex">
                                    <input type="checkbox" value="<?php echo e($cat->id); ?>" class="category"
                                        <?php echo e(isset($categoriesIds) ? (in_array($cat->id, $categoriesIds) ? 'checked' : '') : ''); ?>

                                    >
                                    <span class="checkmark mr_15"></span>
                                    <span class="label_name"><?php echo e($cat->name); ?></span>
                                </label>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                </ul>
            </div>
            
            <div class="single_course_categry">
                <h4 class="font_18 f_w_700">
                    <?php echo e(__('frontend.Level')); ?>

                </h4>
                <ul class="Check_sidebar">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($levels)): ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <label class="primary_checkbox d-flex">
                                    <input name="level" type="checkbox" value="<?php echo e($l->id); ?>" class="level"
                                        <?php echo e(isset($levelIds) ? (in_array($l->id, $levelIds) ? 'checked' : '') : ''); ?>

                                    >
                                    <span class="checkmark mr_15"></span>
                                    <span class="label_name"><?php echo e($l->title); ?></span>
                                </label>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </ul>
            </div>
            
            <div class="single_course_categry">
                <h4 class="font_18 f_w_700">
                    <?php echo e(__('common.Gender')); ?>

                </h4>
                <ul class="Check_sidebar">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($genders)): ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <label class="primary_checkbox d-flex">
                                    <input name="gender" type="checkbox" value="<?php echo e(strtolower($g)); ?>" class="gender"
                                        <?php echo e(isset($genderIds) ? (in_array(strtolower($g), $genderIds) ? 'checked' : '') : ''); ?>

                                    >
                                    <span class="checkmark mr_15"></span>
                                    <span class="label_name"><?php echo e($g); ?></span>
                                </label>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </ul>
            </div>
            
            <div class="single_course_categry">
                <label for="#"><?php echo e(__('appointment.Price Range')); ?></label>
                <input class="category-item-price price_range" name="price_range" id='price_range'/>
            </div>
            
            <div class="single_course_categry">
                <label for="#"><?php echo e(__('appointment.Instructor Age')); ?></label>
                <input class="category-item-price age_range" name="age_range" id='instructor_age'/>
            </div>
            
            <div class="single_course_categry">
                <h4 class="font_18 f_w_700">
                    <?php echo e(__('appointment.Available Day')); ?>

                </h4>
                <ul class="Check_sidebar">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($weekDays)): ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $weekDays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <label class="primary_checkbox d-flex">
                                    <input name="days" type="checkbox" value="<?php echo e(strtolower($d)); ?>" class="days"
                                        <?php echo e(isset($days) ? (in_array(strtolower($d), $days) ? 'checked' : '') : ''); ?>

                                    >
                                    <span class="checkmark mr_15"></span>
                                    <span class="label_name"><?php echo e($d); ?></span>
                                </label>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </ul>
            </div>

        </div>
        <div class="course_category_inner">
            <h4><?php echo e(__('appointment.Instructor Location')); ?></h4>
            <div class="category-item">
                <label for="#"><?php echo e(__('appointment.Country')); ?></label>
                <select name="country" class="category-item-input country" id="country">
                    <option value=""><?php echo e(__('appointment.Select Country')); ?></option>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($c->id); ?>"
                            <?php echo e(isset($country) ? ($c->id==$country ? 'selected' : '') : ''); ?>

                        ><?php echo e($c->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </select>
            </div>
            
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\appointment-tutor-finder-sidebar.blade.php ENDPATH**/ ?>