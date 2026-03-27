<div>
    <style>
        .pb_50 {
            padding-bottom: 50px;
        }
    </style>
    <div class="main_content_iner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="purchase_history_wrapper pb_50">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('frontend.Learning Progress')); ?></h3>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="table-responsive">
                                    <table class="table custom_table3">
                                        <thead>
                                        <tr>
                                        <tr>
                                            <th> <?php echo e(__('common.SL')); ?> </th>
                                            <th><?php echo e(__('courses.Course')); ?></th>
                                            <th><?php echo e(__('common.Type')); ?></th>
                                            <th><?php echo e(__('courses.Delivery Mode')); ?></th>
                                            <th> <?php echo e(__('courses.Enroll Date')); ?> </th>
                                            <th> <?php echo e(__('courses.Completion Rate')); ?> </th>
                                            <th> <?php echo e(__('courses.Completion Date')); ?> </th>
                                            <th> <?php echo e(__('common.Status')); ?> </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($courses)!=0): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e(++$key); ?></td>
                                                    <td><?php echo e($course->course->title); ?></td>
                                                    <td><?php echo e($course->required_type == 1 ? trans('courses.Compulsory') : trans('courses.Open')); ?></td>
                                                    <td>
                                                        <?php
                                                            if ($course->mode_of_delivery == 1) {
                                                              $title = trans('courses.Online');

                                                          } elseif ($course->mode_of_delivery == 2) {
                                                              $title = trans('courses.Distance Learning');
                                                          } else {
                                                              if (isModuleActive('Org')) {
                                                                  $title = trans('courses.Offline');
                                                              } else {
                                                                  $title = trans('courses.Face-to-Face');
                                                              }
                                                          }
                                                          echo $title;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo e(showDate($course->created_at)); ?>

                                                    </td>
                                                    <td>
                                                        <?php
                                                            if ($course->course->type == 1) {
                                                              echo $course->userTotalPercentage . '%';
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo e($course->userCompleteDate); ?>

                                                    </td>
                                                    <td>
                                                        <?php
                                                            $percentage = $course->userTotalPercentage;
                                                           if ($percentage == 0) {
                                                               echo trans('courses.Not Started yet');
                                                           }else{
                                                                 if ($course->course->type == 1) {
                                                               if ($percentage == 100) {
                                                                   echo trans('courses.Completed');
                                                               } else {
                                                                   echo trans('courses.Studying');
                                                               }
                                                           } else {
                                                               if ($percentage == 100) {
                                                                   echo trans('common.Pass');
                                                               } else {
                                                                   echo trans('common.Fail');
                                                               }
                                                           }
                                                           }

                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="8">
                                                    <p class="text-center">
                                                        <?php echo e(__('student.No Course Purchased Yet')); ?>!
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                        </tbody>
                                    </table>
                                    <div class="mt-4">
                                        <?php echo e($courses->links()); ?>

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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-report-course-page-section.blade.php ENDPATH**/ ?>