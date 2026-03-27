<a href="<?php echo e(route('users.profile',$row->id)); ?>">
    <div class="d-flex align-items-center">
        <div class="">
            <img style="width: 40px;height: 40px; border-radius: 50%; "
                 src="<?php echo e(getProfileImage(@$row->image,$row->name)); ?>"
                 class="img-cover" alt="profile photo">
        </div>
        <div class="ms-3">
            <span class="d-block"><?php echo e($row->name); ?></span>
            <span class="d-block"><?php echo e($row->email); ?></span>
        </div>
    </div>
</a>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\_user_td.blade.php ENDPATH**/ ?>