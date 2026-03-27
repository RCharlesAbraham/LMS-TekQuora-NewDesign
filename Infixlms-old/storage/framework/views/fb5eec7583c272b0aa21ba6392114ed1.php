<div class="testmonail_active owl-carousel">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="single_testmonial">
            <div class="testmonial_header d-flex align-items-center">
                <div class="thumb profile_info ">
                    <div class="profile_img">
                        <div class="testimonialImage"
                             style="background-image: url('<?php echo e(getProfileImage($testimonial->image,$testimonial->author)); ?>')"></div>
                    </div>

                </div>
                <div class="reviewer_name">
                    <h4><?php echo e(@$testimonial->author); ?></h4>
                    <div class="rate d-flex align-items-center">

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i=1;$i<=$testimonial->star;$i++): ?>
                            <i class="fas fa-star"></i>
                        <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>
                </div>
            </div>
            <p> “<?php echo e(@$testimonial->body); ?>”</p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

</div>
<script>

</script>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/frontend/infixlmstheme/snippets/components/_single_testimonial.blade.php ENDPATH**/ ?>