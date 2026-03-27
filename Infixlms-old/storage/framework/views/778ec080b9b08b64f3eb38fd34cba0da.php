<div class="main_content_iner main_content_padding">

    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">

            <div class="row">
                <div class="col-12">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('membership.My Membership')); ?></h3>
                                    <h4></h4>
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
                                            <th scope="col"><?php echo e(__('membership.Membership Number')); ?></th>
                                            <th scope="col"><?php echo e(__('membership.Plan')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Start Date')); ?></th>
                                            <th scope="col"><?php echo e(__('membership.End Date')); ?></th>
                                            <th scope="col"><?php echo e(__('certificate.Certificate')); ?></th>
                                            <th><?php echo e(__('membership.Update Level')); ?> <br></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $checkouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $checkout): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td class="m-2"><?php echo e($key+1); ?></td>
                                                <td><?php echo e($checkout->user->membership_number); ?></td>
                                                <td><?php echo e(@$checkout->plan->title); ?>

                                                    [<?php echo e($checkout->plan->level->title); ?>]
                                                </td>
                                                <td> <?php echo e(showDate($checkout->start_date)); ?></td>
                                                <td> <?php echo e(showDate($checkout->end_date)); ?></td>
                                                <td>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($checkout->hasCertificate): ?>
                                                        <a href="<?php echo e(route('membership.certificateDownload',$checkout->hasCertificate->certificate_id)); ?>"
                                                           class="link_value theme_btn small_btn4"><?php echo e(__('common.Download')); ?></a>
                                                        <a href="<?php echo e(route('membership.certificateCheck',$checkout->hasCertificate->certificate_id)); ?>"
                                                           class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                    <?php else: ?>
                                                        <a href="<?php echo e(route('membership.getCertificate',[$checkout->plan_id])); ?>"
                                                           class="link_value theme_btn small_btn4">
                                                            <?php echo e(__('frontend.Get Certificate')); ?>

                                                        </a>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(route('membership.upgrade', [$checkout->plan_id])); ?>"
                                                       class="link_value theme_btn small_btn4"><?php echo e(__('common.Click')); ?></a>
                                                </td>
                                                <td>
                                                    <?php
                                                        $renewStart = null;
                                                        $today = Carbon\Carbon::now()->format('Y-m-d');

                                                        if ($settings->renew_before > 0) {
                                                            $renewStart = Carbon\Carbon::parse($checkout->end_date)->subDays($settings->renew_before);
                                                        }
                                                    ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($renewStart): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($today > $renewStart): ?>
                                                            <a href="<?php echo e(route('membership.myMembershipRenew', [$checkout->plan_id, $checkout->id])); ?>"
                                                               class="link_value theme_btn small_btn4"><?php echo e(__('membership.Renew')); ?></a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php else: ?>
                                                        <a href="<?php echo e(route('membership.myMembershipRenew', [$checkout->plan_id, $checkout->id])); ?>"
                                                           class="link_value theme_btn small_btn4"><?php echo e(__('membership.Renew')); ?></a>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                    <a href="<?php echo e(route('membership.myMembershipCourseEbook', [$checkout->plan_id])); ?>"
                                                       class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td class="text-center" colspan="8">
                                                    <?php echo e(__('common.No data available in the table')); ?>

                                                </td>
                                            </tr>
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
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-membership.blade.php ENDPATH**/ ?>