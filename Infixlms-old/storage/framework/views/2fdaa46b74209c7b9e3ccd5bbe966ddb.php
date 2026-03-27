<div class="row">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($sectionWidgets)): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($sectionWidgets['one'])!=0): ?>
            <div class="col-lg-4 col-md-4">
                <div class="footer_widget">
                    <div class="footer_title">
                        <h3><?php echo e(function_exists('footerSettings')?footerSettings('footer_section_one_title'):''); ?></h3>
                    </div>
                    <ul class="footer_links">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sectionWidgets['one']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($page->frontpage->id)): ?>
                                <?php
                                    $route = $page->is_static == 0 ? route('frontPage',$page->frontpage->slug) : url($page->frontpage->slug);
                                ?>
                                <li><a href="<?php echo e($route); ?>"><?php echo e($page->name); ?> </a></li>
                            <?php elseif($page->custom==1): ?>
                                <li><a href="<?php echo e($page->custom_link); ?>"><?php echo e($page->name); ?> </a></li>
                            <?php else: ?>
                                <li><a href="#"><?php echo e($page->name); ?> </a></li>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>

                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($sectionWidgets['two'])!=0): ?>
            <div class="col-lg-4 col-md-4">
                <div class="footer_widget">
                    <div class="footer_title">
                        <h3><?php echo e(function_exists('footerSettings')?footerSettings('footer_section_two_title'):''); ?></h3>
                    </div>
                    <ul class="footer_links">

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sectionWidgets['two']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($page->frontpage->id)): ?>
                                <?php
                                    $route = $page->is_static == 0 ? route('frontPage',$page->frontpage->slug) : url($page->frontpage->slug)
                                ?>
                                <li><a href="<?php echo e($route); ?>"><?php echo e($page->name); ?> </a></li>
                            <?php elseif($page->custom==1): ?>
                                <li><a href="<?php echo e($page->custom_link); ?>"><?php echo e($page->name); ?> </a></li>
                            <?php else: ?>
                                <li><a href="#"><?php echo e($page->name); ?> </a></li>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </ul>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($sectionWidgets['three'])!=0): ?>
            <div class="col-lg-4 col-md-4">
                <div class="footer_widget">
                    <div class="footer_title">
                        <h3><?php echo e(function_exists('footerSettings')?footerSettings('footer_section_three_title'):''); ?></h3>
                    </div>
                    <ul class="footer_links">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sectionWidgets['three']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($page->frontpage->id)): ?>
                                <?php
                                    $route = $page->is_static == 0 ? route('frontPage',$page->frontpage->slug) : url($page->frontpage->slug)
                                ?>
                                <li><a href="<?php echo e($route); ?>"><?php echo e($page->name); ?> </a></li>
                            <?php elseif($page->custom==1): ?>
                                <li><a href="<?php echo e($page->custom_link); ?>"><?php echo e($page->name); ?> </a></li>
                            <?php else: ?>
                                <li><a href="#"><?php echo e($page->name); ?> </a></li>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/frontend/infixlmstheme/components/footer-section-widgets.blade.php ENDPATH**/ ?>