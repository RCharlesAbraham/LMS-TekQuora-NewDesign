<a class="dropdown-item"
   href="<?php echo e(route('student.courses', $query->id)); ?>"
   data-id="<?php echo e($query->id); ?>"
   type="button">
    <?php echo e(translatedNumber($query->enrollCourse->count())); ?>

</a>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\Modules\StudentSetting\Providers/../Resources/views/partials/_td_course_count.blade.php ENDPATH**/ ?>