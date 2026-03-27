<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="single_notify d-flex align-items-top"
         id="menu_notification_show_<?php echo e($notification->id); ?>">
        <div class="notify_thumb">
            <i class="fa fa-bell"></i>
        </div>
        <a href="#" class="unread_notification" title="Mark As Read"
           data-notification_id="<?php echo e($notification->id); ?>">
            <div class="notify_content">
                <h5><?php echo strip_tags(\Illuminate\Support\Str::limit(@$notification->data['title'], 30, $end='...')); ?></h5>
                
                <p><?php echo e($notification->created_at->diffForHumans()); ?></p>
            </div>
        </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <span class="text-center"><?php echo e(__('common.No Unread Notification')); ?></span>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\_notification.blade.php ENDPATH**/ ?>