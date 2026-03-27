<div class="main_content_iner main_content_padding">

    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div class="section__title3 mb_40">
                        <h3 class="mb-0">
                            <?php echo e(__('appointment.My WishList')); ?>

                        </h3>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="tutor_listing_title">

                        <p> <?php echo e(isset($wishlists) ? count($wishlists) : 0); ?> <?php echo e(__('appointment.saved tutors')); ?></p>
                    </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($wishlists)): ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $wishlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $instructor=   $list->instructor;
                            ?>
                            <div class="tutor_listing_item">
                                <div class="tutor_listing_item_left">
                                    <div class="tutor_listing_item_profile_img">
                                        <img src="<?php echo e(getProfileImage($instructor->image,$instructor->name)); ?>" alt="">
                                    </div>
                                </div>
                                <div class="tutor_listing_item_right">
                                    <div class="tutor_listing_item_info">
                                        <div class="tutor_listing_item_info_profile">
                                            <h4>
                                                <a href="<?php echo e(route('appointment.instructor',[$instructor->slug])); ?>"><?php echo e($instructor->name); ?>

                                                    <img
                                                        src="<?php echo e(asset('Modules/Appointment/Resources/assets/frontend/')); ?>/img/all-icons/country/<?php echo e(strtolower($instructor->userCountry->iso2)); ?>.svg"
                                                        alt="" width="21" height="15">
                                                    </span><span>
                                         </span>
                                            </h4>
                                            <ul>
                                                <li class='star'><i
                                                        class="fa fa-star"></i>(<?php echo e($instructor->instructor_reviews_count); ?> <?php echo e(__('appointment.Ratings')); ?>

                                                    )
                                                </li>
                                                <li><i class="fa fa-user-friends"></i>
                                                    <?php echo e($instructor->bookStudents ? count($instructor->bookStudents) : 0); ?> <?php echo e(__('appointment.students')); ?>

                                                </li>
                                                
                                            </ul>


                                            <p><?php echo e(__('appointment.Speaks')); ?> :
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $instructor->teachingLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($language->language->name); ?> <span
                                                        style="color:<?php echo e($language->level->color); ?>;background-color:<?php echo e($language->level->background_color); ?> "><?php echo e($language->level->title); ?></span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </p>
                                        </div>
                                        <p> <?php echo $instructor->about ?></p>

                                    </div>
                                    <div class="tutor_listing_item_info_price text-end">
                                        <h3 class="mb-0"><?php echo e(getPriceFormat($instructor->hour_rate)); ?>

                                            <small>/ <?php echo e(__('appointment.Hr.')); ?></small></h3>

                                    </div>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\appointment-my-wishlist-page-section.blade.php ENDPATH**/ ?>