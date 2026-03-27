<div class="main_content_iner main_content_padding">
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('class.My Class')); ?></h3>
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
                                            <th scope="col"><?php echo e(__('class.Class')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Course')); ?></th>
                                            <th scope="col"><?php echo e(__('cpd.Completed')); ?>(%)</th>
                                            <th scope="col"><?php echo e(__('class.Transcript')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $class->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $studentCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $percentage = round($studentCourse->course->loginUserTotalPercentage) ?? 0;
                                                ?>
                                                <tr>
                                                    <td class="m-2">
                                                        <strong> <?php echo e($studentCourse->id); ?> </strong></td>
                                                    <td><?php echo e(@$class->name); ?></td>
                                                    <td><?php echo e(@$studentCourse->course->title); ?></td>
                                                    <td> <?php echo e($percentage); ?>

                                                        % <?php echo e(__('student.Complete')); ?>

                                                    </td>
                                                    <td>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($percentage == 100): ?>
                                                            <a href="<?php echo e(route('get-transcript', [$studentCourse->course_id, auth()->user()->id])); ?>"
                                                               class="link_value theme_btn small_btn4"
                                                               target="__blank"><?php echo e(__('common.View')); ?></a>
                                                            <a href="<?php echo e(route('get-transcript', [$studentCourse->course_id, auth()->user()->id, 'download'])); ?>"
                                                               class="link_value theme_btn small_btn4"><?php echo e(__('common.Download')); ?></a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a target="_blank"
                                                           href="<?php echo e(route('continueCourse', [$studentCourse->course->slug])); ?>"
                                                           class="link_value theme_btn small_btn4">
                                                            <?php echo e(__('common.View')); ?>

                                                        </a>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td class="text-center" colspan="6">
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-class.blade.php ENDPATH**/ ?>