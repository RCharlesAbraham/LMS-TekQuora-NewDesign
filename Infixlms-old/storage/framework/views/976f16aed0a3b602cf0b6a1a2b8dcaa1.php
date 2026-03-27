<div class="lms_blog_details_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-xl-7 col-lg-7 ">
                <div class="blog_details_inner">
                    <div class="blog_details_banner">
                        <img class="w-100" src="<?php echo e(getBlogImage($blog->image)); ?>" alt="">
                    </div>

                    <div class="blog_post_date d-flex align-items-center"><p><?php echo e($blog->user->name); ?>

                            . <?php echo e(showDate(@$blog->authored_date )); ?> <?php echo e(@$blog->authored_time); ?></p></div>
                    <h3><?php echo e($blog->title); ?></h3>
                    <p class="mb_25">

                        <?php echo $blog->description; ?>

                    </p>
                    <br>

                    <?php if (isset($component)) { $__componentOriginal5f753df4e13d4a056c2f436dd832e6a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f753df4e13d4a056c2f436dd832e6a7 = $attributes; } ?>
<?php $component = App\View\Components\BlogDetailsShareSection::resolve(['blog' => $blog] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blog-details-share-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BlogDetailsShareSection::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f753df4e13d4a056c2f436dd832e6a7)): ?>
<?php $attributes = $__attributesOriginal5f753df4e13d4a056c2f436dd832e6a7; ?>
<?php unset($__attributesOriginal5f753df4e13d4a056c2f436dd832e6a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f753df4e13d4a056c2f436dd832e6a7)): ?>
<?php $component = $__componentOriginal5f753df4e13d4a056c2f436dd832e6a7; ?>
<?php unset($__componentOriginal5f753df4e13d4a056c2f436dd832e6a7); ?>
<?php endif; ?>
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('hide_blog_comment')!=1): ?>
                    <div class="blog_reviews">
                        <h3 class="font_30 f_w_800 mb_35 lh-1"><?php echo e(__('frontend.Comments')); ?></h3>
                        <div class="blog_reviews_inner">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    if (empty($comment->user_id)){
                                        $name =$comment->name;
                                    }else{
                                        $name =$comment->user->name;
                                    }

                                ?>
                                <div class="lms_single_reviews">
                                    <div class="thumb">
                                        <?php echo e(substr($name,0,2)); ?>

                                    </div>
                                    <div class="review_content">
                                        <div
                                            class="review_content_head d-flex justify-content-between align-items-start flex-wrap">
                                            <div class="review_content_head_left">
                                                <h4 class="f_w_700 font_20"><?php echo e($name); ?></h4>
                                                <div class="rated_customer d-flex align-items-center">
                                                    <span><?php echo e($comment->created_at->diffforhumans()); ?></span>
                                                </div>
                                            </div>
                                            <div class="comment_box_text link">


                                                <a class="position_right reply_btn     mr_20"
                                                   data-comment="<?php echo e(@$comment->id); ?>" href="#">
                                                    <?php echo e(__('frontend.Reply')); ?>

                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(blogCommentCanDelete()): ?>
                                                    <a class="position_right deleteBtn" href="#"
                                                       data-bs-toggle="modal"
                                                       onclick="deleteCommnet('<?php echo e(route('deleteBlogComment',$comment->id)); ?>','<?php echo e($comment->id); ?>_single_comment')"
                                                       data-bs-target="#deleteComment">
                                                        <i class="fas fa-trash  fa-xs"></i>
                                                    </a>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        </div>
                                        <p><?php echo e($comment->comment); ?></p>
                                    </div>
                                </div>

                                <div class=" replyBox d-none inputForm reply_form_<?php echo e(@$comment->id); ?>   pe-0  w-100">
                                    <form action="<?php echo e(route('blogCommentSubmit')); ?>" method="post">
                                        <input type="hidden" name="blog_id" value="<?php echo e($blog->id); ?>">
                                        <input type="hidden" name="type" value="2">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="comment_id"
                                               value="<?php echo e(@$comment->id); ?>">
                                        <div class="row">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->guest()): ?>
                                                <div class="col-lg-6">
                                                    <input name="name" placeholder="<?php echo e(__('common.Enter Full Name')); ?>"
                                                           onfocus="this.placeholder = ''"
                                                           onblur="this.placeholder = '<?php echo e(__('common.Enter Full Name')); ?>'"
                                                           class="primary_input5 bg_style1   "
                                                           required="" type="text">
                                                    <div class="rounded_border_bottom mb_20"></div>
                                                </div>
                                                <div class="col-6">
                                                    <input name="email"
                                                           placeholder="<?php echo e(__('common.Enter Email Address')); ?>"
                                                           onfocus="this.placeholder = ''"
                                                           onblur="this.placeholder = '<?php echo e(__('common.Enter Email Address')); ?>'"
                                                           class="primary_input5  "
                                                           required="" type="email">
                                                    <div class="rounded_border_bottom mb_20"></div>
                                                </div>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <div class="col-12">
                                <textarea name="comment" placeholder="<?php echo e(__('common.Write your comments here')); ?>…"
                                          onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = '<?php echo e(__('common.Write your comments here')); ?>…'"
                                          class="primary_textarea5   " required=""></textarea>
                                                <div class="rounded_border_bottom mb_20"></div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="theme_btn small_btn2 w-100  text-center   text-uppercase  text-center mb_25">
                                                    <?php echo e(__('frontend.Reply')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $replay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        if (empty($replay->user_id)){
                                            $name =$replay->name;
                                        }else{
                                            $name =$replay->user->name;
                                        }

                                    ?>
                                    <div class="lms_single_reviews replyBox">
                                        <div class="thumb">
                                            <?php echo e(substr($name,0,2)); ?>

                                        </div>
                                        <div class="review_content">
                                            <div
                                                class="review_content_head d-flex justify-content-between align-items-start flex-wrap">
                                                <div class="review_content_head_left">
                                                    <h4 class="f_w_700 font_20"><?php echo e($name); ?></h4>
                                                    <div class="rated_customer d-flex align-items-center">

                                                        <span><?php echo e($comment->created_at->diffforhumans()); ?></span>
                                                    </div>
                                                </div>
                                                <div class="comment_box_text link">
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(blogCommentCanDelete()): ?>
                                                        <a class="position_right deleteBtn" href="#"
                                                           data-bs-toggle="modal"
                                                           onclick="deleteCommnet('<?php echo e(route('deleteBlogComment',$replay->id)); ?>','<?php echo e($replay->id); ?>_single_reply_comment')"
                                                           data-bs-target="#deleteComment">
                                                            <i class="fas fa-trash  fa-xs"></i>
                                                        </a>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </div>
                                            </div>
                                            <p> <?php echo e($replay->comment); ?></p>
                                        </div>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </div>
                    </div>
                    <div class="blog_reply_box mb_30 blogComment">
                        <h3 class="font_30 f_w_800  lh-1 mb_5 "><?php echo e(__('frontend.Leave a comment')); ?></h3>
                        <form action="<?php echo e(route('blogCommentSubmit')); ?>" method="post">
                            <input type="hidden" name="blog_id" value="<?php echo e($blog->id); ?>">
                            <input type="hidden" name="type" value="1">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->guest()): ?>
                                    <div class="col-lg-6">
                                        <input name="name" placeholder="<?php echo e(__('common.Enter Full Name')); ?>"
                                               onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = '<?php echo e(__('common.Enter Full Name')); ?>'"
                                               class="primary_input5 bg_style1   "
                                               required="" type="text">
                                        <div class="rounded_border_bottom mb_20"></div>
                                    </div>
                                    <div class="col-6">
                                        <input name="email" placeholder="<?php echo e(__('common.Enter Email Address')); ?>"
                                               onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = '<?php echo e(__('common.Enter Email Address')); ?>'"
                                               class="primary_input5  "
                                               required="" type="email">
                                        <div class="rounded_border_bottom mb_20"></div>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <div class="col-12">
                                <textarea name="comment" placeholder="<?php echo e(__('common.Write your comments here')); ?>…"
                                          onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = '<?php echo e(__('common.Write your comments here')); ?>…'"
                                          class="primary_textarea5   " required=""></textarea>
                                    <div class="rounded_border_bottom mb_20"></div>
                                </div>
                                <div class="col-12">
                                    <button type="submit"
                                            class="theme_btn small_btn2 w-100  text-center   text-uppercase  text-center">
                                        <?php echo e(__('frontend.Post comment')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <div class="col-xl-3 col-lg-3">
                <?php if (isset($component)) { $__componentOriginal2a6ed378116418275fa78d9c5c3622ac = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a6ed378116418275fa78d9c5c3622ac = $attributes; } ?>
<?php $component = App\View\Components\BlogSidebarSection::resolve(['tag' => $blog->tags] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
    <?php echo $__env->make(theme('partials._delete_model'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\blog-details-page-section.blade.php ENDPATH**/ ?>