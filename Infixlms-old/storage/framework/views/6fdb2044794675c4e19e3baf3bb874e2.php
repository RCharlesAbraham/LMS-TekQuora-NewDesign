<div>
    <div class="about_gallery_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb_30">
                    <div class="about_gallery">
                        <div class="gallery_box">
                            <div class="thumb">
                                <img class="w-100" src="<?php echo e(asset($about->image1)); ?>" alt="">
                            </div>
                            <div class="thumb small_thumb">
                                <img class="w-100" src="<?php echo e(asset($about->image2)); ?>" alt="">
                            </div>
                        </div>
                        <div class="gallery_box">
                            <div class="thumb">
                                <img class="w-100" src="<?php echo e(asset($about->image3)); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section__title">
                        <h3><?php echo e($about->story_title); ?></h3>
                        <p><?php echo e($about->story_description); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\about-page-gallery.blade.php ENDPATH**/ ?>