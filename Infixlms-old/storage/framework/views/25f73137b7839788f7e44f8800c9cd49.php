<div class="main_content_iner main_content_padding">
    <div class="dashboard_lg_card  mb-4 mb-lg-5">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('communication.Your referral link')); ?></h3>
                                    <p><?php echo e(__('communication.Share the referral link with your friends.')); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="col-12">
                                    <div class="referral_copy_link mb_30">
                                        <div class="referral_copy_inner">
                                            <div class="single_input">
                                                <input type="text" id="referral_link"
                                                       placeholder="-"
                                                       readonly
                                                       value="<?php echo e(route('referralCode',Auth::user()->referral)); ?>"
                                                       class="primary_input white_input">
                                            </div>
                                            <button onclick="copyCurrentUrl()"
                                                    class="theme_btn mt-3 height_50"><?php echo e(__('communication.Copy Link')); ?></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($referrals)!=0): ?>
        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section__title3 mb_40">
                                        <h3 class="mb-0"><?php echo e(__('communication.Your referral list')); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table custom_table3 mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                                <th scope="col"><?php echo e(__('common.User')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                                <th scope="col"><?php echo e(__('payment.Discount Amount')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($referrals)): ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $referral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($key+1); ?></td>
                                                        <td>
                                                            <div
                                                                class="CourseMeta d-flex align-items-center">
                                                                <div class="profile_info">
                                                                    <img class=""
                                                                         src="<?php echo e(getProfileImage(@$referral->image,$referral->name)); ?>"
                                                                         alt="">
                                                                </div>
                                                                <div class="reffer_meta">
                                                                    <a href="#"><h4
                                                                            class="font_16 f_w_400 mb-0 d-inline-block"><?php echo e(@$referral->name); ?></h4>
                                                                    </a>
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><?php echo e(showDate($referral->created_at)); ?></td>
                                                        <td><?php echo e(Settings('currency_symbol') ??'৳'); ?>  <?php echo e(@$referral->bonus_amount); ?></td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\referal-page-section.blade.php ENDPATH**/ ?>