<div class="main_content_iner main_content_padding">

    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-12">
                    <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="section__title3 mb_40">
                                    <h3 class="mb-0"><?php echo e(__('certificate.My Certificates')); ?></h3>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($certificate_records)==0): ?>
                            <div class="col-12">
                                <div class="section__title3 margin_50">
                                    <p class="text-center"><?php echo e(__('certificate.Certificate Not Found!')); ?></p>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        <table class="table custom_table3 mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Date')); ?></th>
                                                <th scope="col"><?php echo e(__('common.Course')); ?></th>
                                                <th scope="col"><?php echo e(__('certificate.Certificate No')); ?></th>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('MyClass')): ?>
                                                    <th scope="col"><?php echo e(__('class.Transcript')); ?></th>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Invoice')): ?>
                                                    <th scope="col"><?php echo e(__('invoice.Printed Certificate')); ?></th>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <th scope="col" style="text-align: center"><?php echo e(__('common.Action')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($certificate_records)): ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $certificate_records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td scope="row"><?php echo e(@$key+1); ?></td>

                                                        <td><?php echo e(date(Settings('active_date_format'), strtotime($certificate->created_at))); ?></td>

                                                        <td>
                                                            <?php echo e(@$certificate->course->title); ?>


                                                        </td>
                                                        <td>
                                                            <?php echo e(@$certificate->certificate_id); ?>


                                                        </td>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('MyClass') && routeIsExist('get-transcript')): ?>
                                                            <td>
                                                                <a href="<?php echo e(route('get-transcript', [$certificate->course_id, auth()->user()->id])); ?>"
                                                                   class="link_value theme_btn small_btn4"
                                                                   target="__blank"><?php echo e(__('common.View')); ?></a>
                                                                <a href="<?php echo e(route('get-transcript', [$certificate->course_id, auth()->user()->id, 'download'])); ?>"
                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.Download')); ?></a>
                                                            </td>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Invoice')): ?>
                                                            <td>

                                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$certificate->orderCertificate): ?>
                                                                    <a href="<?php echo e(route('prc.order.now', [$certificate->certificate_id])); ?>"
                                                                       class="link_value theme_btn small_btn4"
                                                                       target="__blank"><?php echo e(__('invoice.Order Now')); ?></a>
                                                                <?php else: ?>
                                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($certificate->nonPaid()): ?>
                                                                        <a href="<?php echo e(route('prc.order.now', [$certificate->certificate_id])); ?>"
                                                                           class="link_value theme_btn small_btn4"
                                                                           target="__blank"><?php echo e(__('invoice.Pay Now')); ?></a>
                                                                    <?php else: ?>
                                                                        <strong><?php echo e(strtoupper($certificate->orderCertificate ? $certificate->orderCertificate->status : '')); ?></strong>
                                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                            </td>

                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        <td class="text-center">
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('CertificatePro') && Settings('use_certificate_template') == 'pro'): ?>
                                                                <a href="<?php echo e(route('certificateDownload',$certificate->certificate_id)); ?>"
                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('certificateDownload',$certificate->certificate_id)); ?>"
                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.Download')); ?></a>
                                                                <a href="<?php echo e(route('certificateCheck',$certificate->certificate_id)); ?>"
                                                                   class="link_value theme_btn small_btn4"><?php echo e(__('common.View')); ?></a>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </tbody>
                                        </table>
                                        <div class="mt-4">
                                            <?php echo e($certificate_records->links()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-certificate-page-section.blade.php ENDPATH**/ ?>