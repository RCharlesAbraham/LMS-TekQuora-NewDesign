<div class="tab-pane fade" id="identity_tab">
    <div class="row">
        <div class="col-12">

            <div class="d-flex justify-content-between align-items-center">
                <h3><?php echo e(__('profile.identity_and_documents')); ?></h3>
            </div>
            <hr>
            <form action="<?php echo e(route('users.document.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class=" mb-35">

                            <?php if (isset($component)) { $__componentOriginal3c189c37dfafa3e6853f94906c245d36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c189c37dfafa3e6853f94906c245d36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'passport','type' => 'image','mediaId' => ''.e($passport_document?$passport_document->document_media?->media_id:'').'','label' => ''.e(__('profile.passport')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'passport','type' => 'image','media_id' => ''.e($passport_document?$passport_document->document_media?->media_id:'').'','label' => ''.e(__('profile.passport')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c189c37dfafa3e6853f94906c245d36)): ?>
<?php $attributes = $__attributesOriginal3c189c37dfafa3e6853f94906c245d36; ?>
<?php unset($__attributesOriginal3c189c37dfafa3e6853f94906c245d36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c189c37dfafa3e6853f94906c245d36)): ?>
<?php $component = $__componentOriginal3c189c37dfafa3e6853f94906c245d36; ?>
<?php unset($__componentOriginal3c189c37dfafa3e6853f94906c245d36); ?>
<?php endif; ?>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class=" mb-35">
                            <?php if (isset($component)) { $__componentOriginal3c189c37dfafa3e6853f94906c245d36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c189c37dfafa3e6853f94906c245d36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'nid','type' => 'image','mediaId' => ''.e($nid_document?$nid_document->document_media?->media_id:'').'','label' => ''.e(__('profile.nid')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'nid','type' => 'image','media_id' => ''.e($nid_document?$nid_document->document_media?->media_id:'').'','label' => ''.e(__('profile.nid')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c189c37dfafa3e6853f94906c245d36)): ?>
<?php $attributes = $__attributesOriginal3c189c37dfafa3e6853f94906c245d36; ?>
<?php unset($__attributesOriginal3c189c37dfafa3e6853f94906c245d36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c189c37dfafa3e6853f94906c245d36)): ?>
<?php $component = $__componentOriginal3c189c37dfafa3e6853f94906c245d36; ?>
<?php unset($__componentOriginal3c189c37dfafa3e6853f94906c245d36); ?>
<?php endif; ?>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="">
                            <h4 class="text-nowrap"><?php echo e(__('profile.certificates_or_other_documents')); ?></h4>
                        </div>
                        <div class="custom-hr">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $others_documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="primary_input mb-25">
                                        <label class="primary_input_label"
                                               for="name"> <?php echo e(__('profile.document_name')); ?></label>
                                        <input value="<?php echo e($document->name); ?>" name="document_name[]"
                                               class="primary_input_field document_name" placeholder="-" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class=" mb-25">
                                        <?php if (isset($component)) { $__componentOriginal3c189c37dfafa3e6853f94906c245d36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c189c37dfafa3e6853f94906c245d36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'document_image[]','type' => 'image','mediaId' => ''.e(isset($document)?$document->document_media?->media_id:'').'','label' => ''.e(__('common.Image')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'document_image[]','type' => 'image','media_id' => ''.e(isset($document)?$document->document_media?->media_id:'').'','label' => ''.e(__('common.Image')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c189c37dfafa3e6853f94906c245d36)): ?>
<?php $attributes = $__attributesOriginal3c189c37dfafa3e6853f94906c245d36; ?>
<?php unset($__attributesOriginal3c189c37dfafa3e6853f94906c245d36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c189c37dfafa3e6853f94906c245d36)): ?>
<?php $component = $__componentOriginal3c189c37dfafa3e6853f94906c245d36; ?>
<?php unset($__componentOriginal3c189c37dfafa3e6853f94906c245d36); ?>
<?php endif; ?>
                                    </div>

                                </div>


                                <div class="col-lg-2">
                                    <div class="position-relative form-group ">
                                        <a href="<?php echo e(route('users.document.destroy',$document->id)); ?>" data-repeater-delete
                                           class="primary-btn small icon-only fix-gr-bg mt-35  delete_item  mt-repeater-delete">
                                            <i class="fas fa-trash m-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="col-xl-12 mt-repeater no-extra-space">
                        <div data-repeater-list="other_documents">
                            <div data-repeater-item class="mt-repeater-item document_items">
                                <div class="mt-repeater-row document_item">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="primary_input mb-25">
                                                <label class="primary_input_label"
                                                       for="name"> <?php echo e(__('profile.document_name')); ?></label>
                                                <input name="document_name" class="primary_input_field document_name"
                                                       placeholder="-" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class=" mb-25">
                                                <?php if (isset($component)) { $__componentOriginal3c189c37dfafa3e6853f94906c245d36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c189c37dfafa3e6853f94906c245d36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'document_image[]','type' => 'image','label' => ''.e(__('common.Image')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'document_image[]','type' => 'image','label' => ''.e(__('common.Image')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c189c37dfafa3e6853f94906c245d36)): ?>
<?php $attributes = $__attributesOriginal3c189c37dfafa3e6853f94906c245d36; ?>
<?php unset($__attributesOriginal3c189c37dfafa3e6853f94906c245d36); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c189c37dfafa3e6853f94906c245d36)): ?>
<?php $component = $__componentOriginal3c189c37dfafa3e6853f94906c245d36; ?>
<?php unset($__componentOriginal3c189c37dfafa3e6853f94906c245d36); ?>
<?php endif; ?>
                                            </div>


                                        </div>


                                        <div class="col-lg-2">
                                            <div class="position-relative form-group ">
                                                <a href="javascript:void(0);" data-repeater-delete
                                                   class="primary-btn small icon-only fix-gr-bg mt-35   mt-repeater-delete">
                                                    <i class="fas fa-trash m-0"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <a href="javascript:void(0);" data-repeater-create
                                   class="primary-btn radius_30px  fix-gr-bg mt-repeater-add document_add "><i
                                        class="fa fa-plus"></i><?php echo e(__('common.Add More')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-12 text-end">
                        <hr class="d-block">
                        <button class="primary-btn fix-gr-bg" type="submit"><i
                                class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<script>

</script>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_identity_tab.blade.php ENDPATH**/ ?>