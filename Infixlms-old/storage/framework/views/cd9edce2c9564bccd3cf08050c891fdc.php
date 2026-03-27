<div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Settings('hide_social_share_btn') =='1'): ?>
        <div class="social_btns">
            <a target="_blank"
               href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(URL::current()); ?>"
               class="social_btn fb_bg"> <i class="fab fa-facebook-f"></i>
                <?php echo e(__('frontend.Facebook')); ?> </a>
            <a target="_blank"
               href="https://twitter.com/intent/tweet?text=<?php echo e($blog->title); ?>&amp;url=<?php echo e(URL::current()); ?>"
               class="social_btn Twitter_bg"> <i
                    class="fab fa-twitter"></i> <?php echo e(__('frontend.Twitter')); ?></a>
            <a target="_blank"
               href="https://pinterest.com/pin/create/link/?url=<?php echo e(URL::current()); ?>&amp;description=<?php echo e($blog->title); ?>"
               class="social_btn Pinterest_bg"> <i
                    class="fab fa-pinterest-p"></i> <?php echo e(__('frontend.Pinterest')); ?></a>
            <a target="_blank"
               href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo e(URL::current()); ?>&amp;title=<?php echo e($blog->title); ?>&amp;summary=<?php echo e($blog->title); ?>"
               class="social_btn Linkedin_bg"> <i
                    class="fab fa-linkedin-in"></i> <?php echo e(__('frontend.Linkedin')); ?></a>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\blog-details-share-section.blade.php ENDPATH**/ ?>