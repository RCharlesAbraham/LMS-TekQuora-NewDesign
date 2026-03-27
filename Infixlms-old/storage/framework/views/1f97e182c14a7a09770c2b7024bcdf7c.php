<?php
    $table_name='sub_categories';
?>
<?php $__env->startSection('table'); ?>
    <?php echo e($table_name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <?php echo $__env->make("backend.partials.alertMessage", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section class="sms-breadcrumb mb-10 white-box">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1><?php echo e(__('courses.Subcategory List')); ?></h1>
                <div class="bc-pages">
                    <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('common.Dashboard')); ?></a>
                    <a href="#"><?php echo e(__('courses.Course')); ?></a>
                    <a class="active" href="<?php echo e(route('course.subcategory')); ?>"><?php echo e(__('courses.Subcategory')); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="box_header common_table_header">
                        <div class="main-title d-md-flex">
                            <h3 class="mb-0 mr-30 mb_xs_15px mb_sm_20px"> <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!isset($edit)): ?>
                                    <?php echo e(__('courses.Add New Subcategory')); ?>

                                <?php else: ?>
                                    <?php echo e(__('courses.Update Subcategory')); ?>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></h3>
                        </div>
                    </div>
                    <div class="white-box mb_30">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($edit)): ?>
                            <form action="<?php echo e(route('course.subcategory.update')); ?>" method="POST" id="category-form"
                                  name="category-form" enctype="multipart/form-data">
                                <input type="hidden" name="id"
                                       value="<?php echo e(@$edit->id); ?>">
                                <?php else: ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('course.subcategory.store')): ?>
                                        <form action="<?php echo e(route('course.subcategory.store')); ?>" method="POST"
                                              id="category-form" name="category-form" enctype="multipart/form-data">
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                            <?php echo csrf_field(); ?>

                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="category_id"><?php echo e(__('courses.Category')); ?> <strong
                                                                class="text-danger">*</strong></label>
                                                        <select class="primary_select mb-25" name="category_id"
                                                                id="category_id">
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    value="<?php echo e(@$cat->id); ?>" <?php echo e(isset($edit)?(@$edit->category->id == @$cat->id?'selected':''):''); ?> ><?php echo e(@$cat->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="nameInput"><?php echo e(__('common.Name')); ?> <strong
                                                                class="text-danger">*</strong></label>
                                                        <input name="name" id="nameInput"
                                                               class="primary_input_field name <?php echo e(@$errors->has('name') ? ' is-invalid' : ''); ?>"
                                                               placeholder="<?php echo e(__('common.Name')); ?>" type="text"
                                                               value="<?php echo e(isset($edit)?@$edit->name:old('name')); ?>">
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->has('name')): ?>
                                                            <span class="invalid-feedback d-block mb-10" role="alert">
                                            <strong><?php echo e(@$errors->first('name')); ?></strong>
                                        </span>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 d-none">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="show_home"><?php echo e(__('course.Show on home page')); ?></label>
                                                        <select class="primary_select mb-25" name="show_home"
                                                                id="show_home">
                                                            <option value="1"
                                                                    <?php echo e(isset($edit)?(@$edit->show_home==1?'selected':''):''); ?> selected><?php echo e(__('Yes')); ?></option>
                                                            <option
                                                                value="0" <?php echo e(isset($edit)?(@$edit->show_home==0?'selected':''):''); ?>><?php echo e(__('No')); ?></option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="position_order"><?php echo e(__('courses.Position Order')); ?></label>
                                                        <select class="primary_select mb-25" name="position_order"
                                                                id="position_order">
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i=1; $i<=10; $i++): ?>
                                                                <option
                                                                    value="<?php echo e($i); ?>" <?php echo e(isset($edit)?(@$edit->position_order==$i?'selected':old('position_order')):old('position_order')); ?> > <?php echo e($i); ?></option>
                                                            <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="primary_input mb-25">
                                                        <label class="primary_input_label"
                                                               for="status"><?php echo e(__('courses.Status')); ?></label>
                                                        <select class="primary_select mb-25" name="status" id="status"
                                                        >
                                                            <option
                                                                value="1" <?php echo e(isset($edit)?(@$edit->status==1?'selected':''):''); ?>><?php echo e(__('common.Active')); ?></option>
                                                            <option
                                                                value="0" <?php echo e(isset($edit)?(@$edit->status==0?'selected':''):''); ?>><?php echo e(__('common.Inactive')); ?></option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 d-none">
                                                    <div class="primary_input mb-15">
                                                        <label class="primary_input_label"
                                                               for="placeholderFileOneName"><?php echo e(__('courses.Image')); ?></label>
                                                        <div class="primary_file_uploader">
                                                            <input class="primary-input" type="text"
                                                                   id="placeholderFileOneName"
                                                                   placeholder="<?php echo e(__('student.Browse Image file')); ?>"
                                                                   readonly="">
                                                            <button class="" type="button">
                                                                <label class="primary-btn small fix-gr-bg"
                                                                       for="document_file_1"><?php echo e(__('common.Browse')); ?></label>
                                                                <input type="file" class="d-none" name="photo"
                                                                       id="document_file_1">
                                                            </button>
                                                        </div>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->has('photo')): ?>
                                                            <span class="invalid-feedback d-block mb-10" role="alert">
                                            <strong><?php echo e(@$errors->first('photo')); ?></strong>
                                        </span>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </div>
                                                    <p class="image_size"><?php echo e(__('courses.Recommended size 200px x 200px')); ?></p>
                                                </div>
                                                <?php
                                                    $tooltip = "";
                                                    if(permissionCheck('course.subcategory.store')){
                                                          $tooltip = "";
                                                      }else{
                                                          $tooltip = trans('courses.You have no permission to add');
                                                      }
                                                ?>
                                                <div class="col-lg-12 text-center">
                                                    <div class="d-flex justify-content-center pt_20">
                                                        <button type="submit" class="primary-btn semi_large fix-gr-bg"
                                                                data-bs-toggle="tooltip" title="<?php echo e(@$tooltip); ?>"
                                                                id="save_button_parent">
                                                            <i class="ti-check"></i>
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!isset($edit)): ?>
                                                                <?php echo e(__('common.Save')); ?>

                                                            <?php else: ?>
                                                                <?php echo e(__('common.Update')); ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="box_header common_table_header">
                        <div class="main-title d-md-flex">
                            <h3 class="mb-0"><?php echo e(__('courses.Subcategory List')); ?></h3>
                        </div>
                    </div>
                    <div class="QA_section QA_section_heading_custom check_box_table">
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <div class="">
                                <table id="lms_table" class="table Crm_table_active3">
                                    <thead>
                                    <tr>
                                        <th scope="col"><?php echo e(__('common.SL')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Name')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Category')); ?> <?php echo e(__('common.Name')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Status')); ?></th>
                                        <th scope="col"><?php echo e(__('common.Action')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th class="m-2"><?php echo e($key+1); ?></th>
                                            <td><?php echo e(@$sub_category->name); ?></td>
                                            <td><?php echo e(@$sub_category->category->name); ?></td>


                                            <td class="nowrap">
                                                <label class="switch_toggle">
                                                    <input type="checkbox"
                                                           class="<?php if(permissionCheck('course.subcategory.status_update')): ?>  status_enable_disable <?php endif; ?> "
                                                           <?php if(@$sub_category->status == 1): ?> checked
                                                           <?php endif; ?> value="<?php echo e(@$sub_category->id); ?>">
                                                    <i class="slider round"></i>
                                                </label>
                                            </td>

                                            <td>
                                                <!-- shortby  -->
                                                <div class="dropdown CRM_dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="dropdownMenu1<?php echo e(@$sub_category->id); ?>"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <?php echo e(__('common.Select')); ?>

                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                         aria-labelledby="dropdownMenu1<?php echo e(@$sub_category->id); ?>">
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('course.subcategory.edit')): ?>
                                                            <a class="dropdown-item edit_brand"
                                                               href="<?php echo e(route('course.subcategory.edit',@$sub_category->id)); ?>"><?php echo e(__('common.Edit')); ?></a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('course.subcategory.delete')): ?>
                                                            <a onclick="confirm_modal('<?php echo e(route('course.subcategory.delete', @$sub_category->id)); ?>');"
                                                               class="dropdown-item edit_brand"><?php echo e(__('common.Delete')); ?></a>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    </div>
                                                </div>
                                                <!-- shortby  -->
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="edit_form">

    </div>
    <div id="view_details">

    </div>
    <input type="hidden" name="status_route" class="status_route"
           value="<?php echo e(route('course.subcategory.status_update')); ?>">

    <?php echo $__env->make('backend.partials.delete_modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/category.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\categories\subcategories.blade.php ENDPATH**/ ?>