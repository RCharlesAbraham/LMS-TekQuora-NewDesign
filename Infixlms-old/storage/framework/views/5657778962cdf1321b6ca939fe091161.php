<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/daterangepicker.css')); ?><?php echo e(assetVersion()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>


    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">


            <div class="row justify-content-center">

                <div class="col-lg-12">
                    <div class="QA_section QA_section_heading_custom check_box_table">
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <div class="">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Total Courses')); ?>

                                            / <?php echo e(__('product.Products')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($packages)): ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td scope="row"><?php echo e($key+1); ?></td>
                                                <td><?php echo e(@$product->course->title); ?></td>
                                                <td>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->course->product?->soft_file): ?>
                                                        <a href="<?php if(isset($product->course->product?->soft_file)): ?> <?php echo e(route('users.downloadVirtualFile', [$product->course->slug])); ?> <?php else: ?> javascript:void(0) <?php endif; ?>"
                                                           class="btn btn-secondary text-white"><?php echo e(__('product.Download')); ?></a>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" value="<?php echo e(route('users.my_refund.datatable')); ?>" id="my_refund_route">
            <div class="modal fade admin-query" id="reasonShowModal">
                <div class="modal-dialog modal_650px modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="reason_heading"></h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ti-close "></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="reason_body"></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/daterangepicker.min.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/common/date_range_init.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/my_panel/my_refund.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\my_panel\my_purchase\virtual_file_index.blade.php ENDPATH**/ ?>