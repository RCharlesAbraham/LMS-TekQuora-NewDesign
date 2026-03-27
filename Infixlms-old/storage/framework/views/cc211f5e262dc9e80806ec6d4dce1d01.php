<div class="main_content_iner main_content_padding">
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div class="p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('cpd.My CPD List')); ?></h3>
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
                                            <th scope="col"><?php echo e(__('common.Title')); ?></th>
                                            <th scope="col"><?php echo e(__('cpd.Created Date')); ?></th>
                                            <th scope="col"><?php echo e(__('cpd.End Date')); ?></th>
                                            <th scope="col"><?php echo e(__('cpd.Total Course')); ?></th>
                                            <th scope="col"><?php echo e(__('cpd.Completed')); ?>(%)</th>
                                            <th scope="col"><?php echo e(__('cpd.Certificate')); ?></th>
                                            <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($cpds)): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $cpds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $cpd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td scope="row"><?php echo e($key+1); ?></td>
                                                    <td><?php echo e($cpd->title); ?></td>
                                                    <td><?php echo e(showDate($cpd->created_at)); ?></td>
                                                    <td><?php echo e($cpd->end_date); ?></td>
                                                    <td>
                                                        <?php echo e($cpd->studentCpdCourses->count()); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($cpd->completePercentage()); ?>


                                                    </td>
                                                    <td>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cpd->completePercentage()==100): ?>

                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cpd->hasCertificate): ?>
                                                                <a href="<?php echo e(route('cpd.certificateDownload',$cpd->hasCertificate->certificate_id)); ?>"
                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.Download')); ?></a>
                                                                <a href="<?php echo e(route('cpd.certificateCheck',$cpd->hasCertificate->certificate_id)); ?>"
                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('cpd.getCertificate',[$cpd->id])); ?>"
                                                                   class="link_value theme_btn small_btn4">
                                                                    <?php echo e(__('frontend.Get Certificate')); ?>

                                                                </a>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                        <?php else: ?>

                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(route('myCpdCourse',[$cpd->id])); ?>"
                                                           class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                    </td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td class="text-center"
                                                        colspan="9"><?php echo e(__('common.No data available in the table')); ?> </td>
                                                </tr>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\cpd.blade.php ENDPATH**/ ?>