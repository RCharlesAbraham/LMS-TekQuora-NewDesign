<div class="modal fade admin-query admin_view_modal" id="viewAttachment<?php echo e($submit_info->id); ?>">
    <div class="modal-dialog modal_1000px modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo e(__('common.View')); ?> <?php echo e(__('assignment.Attachment')); ?></h4>
                <button type="button" class="close " data-bs-dismiss="modal">
                    <i class="ti-close "></i>
                </button>
            </div>
            <div class="modal-body">

                
                <?php
                    $std_file =$submit_info->file;
                    $ext =strtolower(str_replace('"]','',pathinfo($std_file, PATHINFO_EXTENSION)));
                    $attached_file=str_replace('"]','',$std_file);
                    $attached_file=str_replace('["','',$attached_file);
                    $preview_files=['jpg','jpeg','png','heic','mp4','mov','mp3','mp4','pdf'];
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='heic'): ?>
                    <img class="img-responsive mt-20" style="width: 100%; height:auto" src="<?php echo e(asset($attached_file)); ?>">
                <?php elseif($ext=='mp4' || $ext=='mov'): ?>
                    <video class="mt-20 video_play" width="100%" controls>
                        <source src="<?php echo e(asset($attached_file)); ?>" type="video/mp4">
                        <source src="mov_bbb.ogg" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                <?php elseif($ext=='mp3'): ?>
                    <audio class="mt-20 audio_play" controls style="width: 100%">
                        <source src="<?php echo e(asset($attached_file)); ?>" type="audio/ogg">
                        <source src="horse.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                <?php elseif($ext=='pdf'): ?>
                    <object data='<?php echo e(asset($attached_file)); ?>' type="application/pdf" width="100%" height="800">
                        <iframe src='<?php echo e(asset($attached_file)); ?>' width="100%" height="800">
                            <p>This browser does not support PDF!</p>
                        </iframe>
                    </object>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!in_array($ext,$preview_files)): ?>
                    <div class="alert alert-warning">
                        <?php echo e($ext); ?> File Not Previewable</a>.
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <div class="mt-40 d-flex justify-content-between" style="margin-top: 40px;">
                    
                    <?php
                        $set_filename=time().'_'.$std_file;
                    ?>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(file_exists($attached_file)): ?>
                        <a class="link_value theme_btn small_btn4" download="<?php echo e($set_filename); ?>"
                           href="<?php echo e(asset($attached_file)); ?>"> <span
                                class="pl ti-download"> <?php echo e(__('common.Download')); ?></span></a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>
                <hr>
            </div>

        </div>
    </div>
</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\pages\details_attachment_view.blade.php ENDPATH**/ ?>