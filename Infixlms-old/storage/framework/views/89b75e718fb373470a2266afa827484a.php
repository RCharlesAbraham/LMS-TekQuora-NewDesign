<div>
    <div class="main_content_iner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="purchase_history_wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('membership.Membership Plan')); ?> [<?php echo e($plan->title); ?>]</h3>
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
                                            <th scope="col"><?php echo e(__('membership.Level')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Price')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $planLevels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="m-2"><?php echo e($key+1); ?></td>
                                                <td><?php echo e($level->level->title); ?>

                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($level->membership_level_id == $checkout->current_level): ?>
                                                        [<?php echo e(__('membership.Ongoing Level')); ?>]
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </td>
                                                <td> <?php echo e($level->price ?? __('common.Free')); ?></td>
                                                <td>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(upgradeLevelPayment($checkout->id, $level->membership_level_id)==false && $level->price): ?>

                                                        <a href="<?php echo e(route('membership.upgradeCheckout', [$level->membership_level_id, $checkout->id])); ?>"><?php echo e(__('membership.Payment')); ?></a>
                                                    <?php elseif(upgradeLevelPayment($checkout->id, $level->membership_level_id)==false && !$level->price): ?>

                                                        <button type="button" class="link_value theme_btn small_btn4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#upModal_<?php echo e($level->id); ?>">
                                                            Upgrade
                                                        </button>
                                                    <?php elseif(upgradeLevelPayment($checkout->id, $level->membership_level_id) && $level->membership_level_id != $checkout->current_level): ?>
                                                        <button type="button" class="link_value theme_btn small_btn4"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#onModal_<?php echo e($level->id); ?>">
                                                            <?php echo e(__('membership.Make it Ongoing')); ?>

                                                        </button>

                                                        
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="upModal_<?php echo e($level->id); ?>" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel"><?php echo e(__('membership.Upgrade')); ?> </h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">

                                                                <span aria-hidden="true"><i class="ti-close"></i></span>
                                                            </button>
                                                        </div>

                                                        <?php echo Form::open(['route'=>'membership.upgrade-level', 'method'=>'POST']); ?>

                                                        <input type="hidden" name="level_id" value="<?php echo e($level->id); ?>">
                                                        <input type="hidden" name="checkout_id"
                                                               value="<?php echo e($checkout->id); ?>">

                                                        <div class="modal-body">
                                                            <h4><?php echo e(__('membership.Upgrade You Membership Plan Level')); ?></h4>
                                                        </div>
                                                        <div class="modal-footer mntop">
                                                            <button type="button"
                                                                    class="theme_btn small_btn bg-transparent"
                                                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>
                                                            <button type="submit"
                                                                    class="theme_btn small_btn "><?php echo e(__('common.Submit')); ?></button>
                                                        </div>
                                                        <?php echo Form::close(); ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="onModal_<?php echo e($level->id); ?>" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel"><?php echo e(__('membership.Ongoing')); ?> </h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true"><i class="ti-close"></i></span>
                                                            </button>
                                                        </div>

                                                        <?php echo Form::open(['route'=>'membership.upgrade-or-default-level', 'method'=>'POST']); ?>

                                                        <input type="hidden" name="level_id" value="<?php echo e($level->id); ?>">
                                                        <input type="hidden" name="checkout_id"
                                                               value="<?php echo e($checkout->id); ?>">

                                                        <div class="modal-body">
                                                            <h4><?php echo e(__('membership.Make it Ongoing')); ?></h4>
                                                        </div>
                                                        <div class="modal-footer mntop">
                                                            <button type="button"
                                                                    class="theme_btn small_btn bg-transparent"
                                                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>
                                                            <button type="submit"
                                                                    class="theme_btn small_btn "><?php echo e(__('common.Submit')); ?></button>
                                                        </div>
                                                        <?php echo Form::close(); ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="doModal_<?php echo e($level->id); ?>" tabindex="-1"
                                                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel"><?php echo e(__('membership.Upgrade')); ?> </h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true"><i class="ti-close"></i></span>
                                                            </button>
                                                        </div>

                                                        <?php echo Form::open(['route'=>'membership.upgrade-or-default-level', 'method'=>'POST']); ?>

                                                        <input type="hidden" name="level_id" value="<?php echo e($level->id); ?>">
                                                        <input type="hidden" name="checkout_id"
                                                               value="<?php echo e($checkout->id); ?>">

                                                        <div class="modal-body">
                                                            <h2><?php echo e(__('membership.Upgrade You Membership Plan Level')); ?></h2>
                                                        </div>
                                                        <div class="modal-footer mntop">
                                                            <button type="button"
                                                                    class="theme_btn small_btn bg-transparent"
                                                                    data-bs-dismiss="modal"><?php echo e(__('common.Cancel')); ?></button>
                                                            <button type="button"
                                                                    class="theme_btn small_btn "><?php echo e(__('common.Submit')); ?></button>
                                                        </div>
                                                        <?php echo Form::close(); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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



<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\membership-level-upgrade.blade.php ENDPATH**/ ?>