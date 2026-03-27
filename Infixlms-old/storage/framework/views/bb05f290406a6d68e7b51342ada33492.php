<div class="instractos_details_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="instractos_profile">
                    <div class="thumb">
                        <img src="<?php echo e(getProfileImage($instructor->image,$instructor->name)); ?>" alt="#">
                    </div>
                    <div class="instractor_meta">
                        <h4><?php echo e($instructor->name); ?></h4>
                        <span><?php echo e($instructor->headline); ?></span>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($instructor->facebook) || !empty($instructor->twitter) || !empty($instructor->instagram) || !empty($instructor->linkedin)): ?>

                            <div class="social_media">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($instructor->facebook)): ?>
                                    <a href="https://facebook.com/<?php echo e($instructor->facebook); ?>" class="facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($instructor->twitter)): ?>
                                    <a href="https://twitter.com/<?php echo e($instructor->twitter); ?>" class="twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($instructor->instagram)): ?>
                                    <a href="https://instagram.com/<?php echo e($instructor->instagram); ?>" class="pinterest">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($instructor->linkedin)): ?>
                                    <a href="https://linkedin.com/<?php echo e($instructor->linkedin); ?>" class="linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 offset-xl-1">
                <div class="instractos_main_details mb_30">
                    <div class="course__details_title">
                        <div class="single__details">
                            <div class="details_content">
                                <span><?php echo e(__('frontend.Student')); ?></span>
                                <h4 class="f_w_700"><?php echo e($students); ?> <?php echo e(__('frontend.Students')); ?></h4>
                            </div>
                        </div>
                        <div class="single__details">
                            <div class="details_content">
                                <span><?php echo e(__('frontend.Category')); ?></span>
                                <h4 class="f_w_700"><?php echo e($instructor->category()); ?></h4>
                            </div>
                        </div>
                        <div class="single__details">
                            <div class="details_content">
                                <span><?php echo e(__('frontend.Reviews')); ?></span>
                                <div class="rating_star">
                                    <div class="stars">
                                        <?php
                                            $total =$instructor->totalRating();
                                            $totalReviews =$total['total'];
                                            $rating =$total['rating'];
                                                    $main_stars=$rating;
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


                                    <p><?php echo e(($rating)); ?>/5 (<?php echo e($totalReviews); ?> rating)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="instractos_info_Details">
                        <p>
                            <?php echo $instructor->about; ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\instructor-page-section.blade.php ENDPATH**/ ?>