<div>
    <div class="main_content_iner main_content_padding">
        <div class="dashboard_lg_card">
            <div class="container-fluid g-0">
                <div class="my_courses_wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="section__title3 margin-50">
                                <h3>
                                    <?php echo e(__("blog.My Blogs")); ?>

                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 mb-4">
                        <div class="col d-flex justify-content-end">
                            <a class="link_value theme_btn small_btn4" href="<?php echo e(route('users.blog.create')); ?>">
                                <?php echo e(__('blog.Add Post')); ?>

                            </a>
                        </div>
                    </div>

                    <div class="row d-flex align-items-center mb-4 mb-lg-5">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table custom_table3">
                                    <thead>
                                    <tr>
                                        <th><?php echo e(__('common.SL')); ?></th>
                                        <th><?php echo e(__('common.Title')); ?></th>
                                        <th><?php echo e(__('common.Image')); ?></th>
                                        <th><?php echo e(__('blog.Published Date')); ?></th>
                                        <th><?php echo e(__('common.Status')); ?></th>
                                        <th><?php echo e(__('common.Action')); ?></th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($blogs) > 0): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e(Str::limit($blog->title,50)); ?></td>
                                                <td>
                                                    <img class="img-fluid blog-img"
                                                         src="<?php echo e(getBlogImage($blog->image)); ?>">
                                                </td>
                                                <td>
                                                    <?php echo e($blog->authored_date); ?>

                                                </td>
                                                <td>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blog->status == '1'): ?>
                                                        <span
                                                            class="badge badge-success"><?php echo e(__("blog.Published")); ?></span>
                                                    <?php else: ?>
                                                        <span
                                                            class="badge badge-secondary"><?php echo e(__("blog.Pending")); ?></span>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <?php echo e(__("blog.Action")); ?>

                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item"
                                                               href="<?php echo e(route('users.blogs.edit',$blog->id)); ?>"><?php echo e(__("common.Edit")); ?></a>
                                                            <a class="dropdown-item"
                                                               href="<?php echo e(route('users.blogs.delete',$blog->id)); ?>"><?php echo e(__("common.Delete")); ?></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan='6' class='text-center'>
                                                <?php echo e(__('blog.Blog is not published yet')); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-blog-page-section.blade.php ENDPATH**/ ?>