<div>
    <input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
    <div class="main_content_iner main_content_padding">

        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title3 margin-50">
                            <h3><?php echo e(__('frontendmanage.Notifications')); ?></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::user()->notifications->count()==0): ?>
                                <div class="col-12">
                                    <div class="section__title3 margin_50">
                                        <p class="text-center"><?php echo e(__('student.Empty')); ?>!</p>
                                    </div>
                                </div>
                            <?php else: ?>
                                <table class="table custom_table mb-0" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th><?php echo e(__('frontendmanage.Notification')); ?></th>
                                        <th><?php echo e(__('common.Date')); ?></th>
                                        <th><?php echo e(__('common.Action')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($all_notifications): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $all_notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td class="text-red" style="max-width: 80%;">
                                                    <?php
                                                        $text=explode('.',$notification->data['body']);
                                                    ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($notification->read_at==null): ?>
                                                        <a href="#" class="unread_notification"
                                                           id="<?php echo e($notification->id); ?>" title="Mark As Read"
                                                           data-notification_id="<?php echo e($notification->id); ?>">

                                                            <p class="notifi_par notify_<?php echo e($notification->id); ?>">
                                                                <?php echo strip_tags($notification->data['body']); ?>.
                                                                <br>
                                                            </p>

                                                        </a>
                                                    <?php else: ?>
                                                        <?php echo strip_tags($notification->data['body']); ?>.
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                </td>
                                                <td style="max-width: 10%">
                                                    <?php echo e(showDate($notification->created_at)); ?>

                                                </td>
                                                <td style="max-width: 10%">
                                                    <a target="_blank"
                                                       href="<?php echo e($notification->data['actionURL']); ?>"><?php echo e($notification->data['actionText']); ?></a>
                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>
                                <div class="mt-4">
                                    <?php echo e($all_notifications->links()); ?>

                                </div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\notification.blade.php ENDPATH**/ ?>