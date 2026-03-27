<div class="tab-pane fade" id="images_tab">
    <div class="row">
        <div class="col-12">

            <h3><?php echo e(__('profile.images')); ?></h3>
            <hr>

            <form action="<?php echo e(route('users.photo.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php if (isset($component)) { $__componentOriginal3c189c37dfafa3e6853f94906c245d36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c189c37dfafa3e6853f94906c245d36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'profile_picture','type' => 'image','mediaId' => ''.e($user->image_media?->media_id??0).'','label' => ''.e(__('common.Image')).'','note' => ''.e(__('student.Recommended size')).' (330x400)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'profile_picture','type' => 'image','media_id' => ''.e($user->image_media?->media_id??0).'','label' => ''.e(__('common.Image')).'','note' => ''.e(__('student.Recommended size')).' (330x400)']); ?>
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
                    <div class="col-md-6">
                        <?php if (isset($component)) { $__componentOriginal3c189c37dfafa3e6853f94906c245d36 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c189c37dfafa3e6853f94906c245d36 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload-file','data' => ['name' => 'cover_photo','type' => 'image','mediaId' => ''.e($user->userInfo->cover_photo_media?->media_id??0).'','label' => ''.e(__('profile.select_cover_photo')).'','note' => ''.e(__('student.Recommended size')).' (1920x500)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('upload-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'cover_photo','type' => 'image','media_id' => ''.e($user->userInfo->cover_photo_media?->media_id??0).'','label' => ''.e(__('profile.select_cover_photo')).'','note' => ''.e(__('student.Recommended size')).' (1920x500)']); ?>
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
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_images_tab.blade.php ENDPATH**/ ?>