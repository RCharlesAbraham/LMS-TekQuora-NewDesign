<div>
    <div class="blog_sidebar_wrap mb_30">
        <input type="hidden" class="blog_route" name="blog_route" value="<?php echo e(route('blogs')); ?>">
        <form action="<?php echo e(route('blogs')); ?>" method="GET">

            <div class="input-group  theme_search_field4 w-100 mb_20 style2">
                <div class="input-group-prepend">
                    <button class="btn" type="button"><i class="ti-search"></i></button>
                </div>
                <input type="text" name="query" value="<?php echo e(request('query')); ?>" class="form-control search"
                       placeholder="<?php echo e(__('common.Search')); ?>…">
            </div>
        </form>

        <div class="blog_sidebar_box mb_30">
            <h4 class="font_18 f_w_700 mb_10">
                <?php echo e(__('frontend.Blog categories')); ?>

            </h4>
            <div class="home6_border w-100 mb_20"></div>
            <ul class="Check_sidebar mb-0">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <label class="primary_checkbox d-flex">
                            <input type="checkbox" value="<?php echo e($cat->id); ?>"
                                   class="category" <?php echo e(in_array($cat->id,explode(',',$category))?'checked':''); ?>>
                            <span class="checkmark mr_15"></span>
                            <span class="label_name"><?php echo e($cat->title); ?></span>
                        </label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            </ul>
        </div>
        <div class="blog_sidebar_box mb_60">
            <h4 class="font_18 f_w_700 mb_10">
                <?php echo e(__('frontend.Recent Posts')); ?>

            </h4>
            <div class="home6_border w-100 mb_20"></div>
            <div class="news_lists">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $latestPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single_newslist">
                        <a href="<?php echo e(route('blogDetails',[$post->slug])); ?>">
                            <h4><?php echo e($post->title); ?></h4>
                        </a>
                        <p><?php echo e(showDate(@$post->authored_date )); ?> / <?php echo e($post->category->title); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            </div>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($tags)!=0): ?>
            <div class="blog_sidebar_box mb_30 p-0 border-0">
                <h4 class="font_18 f_w_700 mb_10">
                    <?php echo e(__('frontend.Keywords')); ?>

                </h4>
                <div class="home6_border w-100 mb_20"></div>
                <div class="keyword_lists d-flex align-items-center flex-wrap gap_10">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="#"><?php echo e($tag); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </div>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\blog-sidebar-section.blade.php ENDPATH**/ ?>