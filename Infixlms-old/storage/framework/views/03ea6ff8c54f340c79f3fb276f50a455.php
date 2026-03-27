<div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Auth::check()): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->role_id == 1): ?>

            <a href="<?php echo e(route('continueCourse',[$course->slug])); ?>"
               class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('common.Continue Watch')); ?></a>
        <?php else: ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_following): ?>
                <a data-bs-toggle="tooltip" data-placement="right"
                   title="<?php echo e(__("frontend.You'll get notified about course publish")); ?>"
                   href="<?php echo e(route('upcoming_courses.unfollow',$course->id)); ?>"
                   class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('frontend.Unfollow')); ?></a>
            <?php else: ?>
                <a data-bs-toggle="tooltip" data-placement="right"
                   title="<?php echo e(__("frontend.You'll get notified about course publish")); ?>"
                   href="<?php echo e(route('upcoming_courses.following',$course->id)); ?>"
                   class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('frontend.Following')); ?></a>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($is_booked): ?>
                <a href="javascript:void(0);"
                   class="theme_line_btn d-block text-center height_50 mb_20"><?php echo e(__('frontend.Already Booked')); ?></a>
            <?php else: ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->is_allow_prebooking): ?>
                    <a href="<?php echo e(route('upcoming_courses.prebooking',encrypt($course->id))); ?>"
                       class="theme_line_btn d-block text-center height_50 mb_20"><?php echo e(__('frontend.Pre Booking')); ?></a>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php else: ?>
        <a data-bs-toggle="tooltip" data-placement="right"
           title="<?php echo e(__("frontend.You'll get notified about course publish")); ?>"
           href="<?php echo e(route('upcoming_courses.following',$course->id)); ?>"
           class="theme_btn d-block text-center height_50 mb_10"><?php echo e(__('frontend.Following')); ?></a>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($course->is_allow_prebooking): ?>

            <a href="<?php echo e(route('upcoming_courses.prebooking',encrypt($course->id))); ?>"
               class="theme_line_btn d-block text-center height_50 mb_20"><?php echo e(__('frontend.Pre Booking')); ?></a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\upcoming-course-action.blade.php ENDPATH**/ ?>