<div>

    <div class="lms_blog_details_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-xl-7 col-lg-7 ">
                    <div class="blog_page_wrapper pt-0">
                        <div class="container">
                            <div class="row">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($blogs)): ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-6">
                                            <div class="single_blog">
                                                <a href="<?php echo e(route('blogDetails',[$blog->slug])); ?>">
                                                    <div class="thumb">

                                                        <div class="thumb_inner lazy"
                                                             data-src="<?php echo e(getBlogImage($blog->thumbnail)); ?>">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="blog_meta">
                                                    <span><?php echo e($blog->user->name); ?> . <?php echo e(showDate(@$blog->authored_date )); ?> <?php echo e(@$blog->authored_time); ?></span>

                                                    <a href="<?php echo e(route('blogDetails',[$blog->slug])); ?>">
                                                        <h4><?php echo e($blog->title); ?></h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($blogs)==0): ?>
                                    <div class="col-lg-12">
                                        <div
                                            class="Nocouse_wizged text-center d-flex align-items-center justify-content-center">
                                            <div class="thumb">
                                                <img style="width: 50px"
                                                     src="<?php echo e(asset('public/frontend/infixlmstheme')); ?>/img/not-found.png"
                                                     alt="">
                                            </div>
                                            <h1>
                                                <?php echo e(__('frontend.No Post Found')); ?>

                                            </h1>
                                        </div>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </div>
                            <div class="mt-4">
                                <?php echo e($blogs->appends(Request::all())->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3">

                    <?php if (isset($component)) { $__componentOriginal2a6ed378116418275fa78d9c5c3622ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a6ed378116418275fa78d9c5c3622ac = $attributes; } ?>
<?php $component = App\View\Components\BlogSidebarSection::resolve(['tag' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blog-sidebar-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BlogSidebarSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a6ed378116418275fa78d9c5c3622ac)): ?>
<?php $attributes = $__attributesOriginal2a6ed378116418275fa78d9c5c3622ac; ?>
<?php unset($__attributesOriginal2a6ed378116418275fa78d9c5c3622ac); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a6ed378116418275fa78d9c5c3622ac)): ?>
<?php $component = $__componentOriginal2a6ed378116418275fa78d9c5c3622ac; ?>
<?php unset($__componentOriginal2a6ed378116418275fa78d9c5c3622ac); ?>
<?php endif; ?>


                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\blog-page-section.blade.php ENDPATH**/ ?>