<?php $__env->startPush('styles'); ?>
    <!-- tag input css -->
    <link rel="stylesheet"
          href="<?php echo e(asset('Modules/Blog/Resources/views/assets/taginput/tagsinput.css')); ?><?php echo e(assetVersion()); ?>"/>
    <!-- select2 design  -->
    <style>
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            width: 100%;
            height: 46px;
            line-height: 46px;
            font-size: 13px;
            padding: 3px 20px;
            padding-left: 20px;
            font-weight: 300;
            border-radius: 30px;
            color: var(--base_color);
            border: 1px solid var(--backend-border-color);
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 46px;
            position: absolute;
            top: 1px;
            right: 20px;
            width: 20px;
            color: var(--text-color);
        }

        .select2-dropdown {
            background-color: white;
            border: 1px solid var(--backend-border-color);
            border-radius: 4px;
            box-sizing: border-box;
            display: block;
            position: absolute;
            left: -100000px;
            width: 100%;
            width: 100%;
            background: var(--bg_white);
            overflow: auto !important;
            border-radius: 0px 0px 10px 10px;
            margin-top: 1px;
            z-index: 9999 !important;
            border: 0;
            box-shadow: 0px 10px 20px rgb(108 39 255 / 30%);
            z-index: 1051;
            min-width: 200px;
        }

        .select2-search--dropdown .select2-search__field {
            padding: 4px;
            width: 100%;
            box-sizing: border-box;
            box-sizing: border-box;
            background-color: #fff;
            border: 1px solid rgba(130, 139, 178, 0.3) !important;
            border-radius: 3px;
            box-shadow: none;
            color: #333;
            display: inline-block;
            vertical-align: middle;
            padding: 0px 8px;
            width: 100% !important;
            height: 46px;
            line-height: 46px;
            outline: 0 !important;
        }

        .select2-container {
            width: 100% !important;
            min-width: 90px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 40px;
        }
    </style>
    <style>
        .profile-photo {
            border-radius: 50%;
            height: 180px;
            width: 180px;
        }

        .cover-photo {
            height: 180px;
            width: 76%;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .cursor-pointer {
            cursor: pointer !important;
        }

        .badge-custom {
            color: #fff !important;
            background-color: #415094e8 !important;
            padding: 15px 20px;
            font-size: 14px;
            font-weight: bold;
        }

        .custom-hr {
            background-color: rgba(0, 0, 0, .1);
            width: 100%;
            height: 2px;
        }

        .bootstrap-tagsinput {
            min-height: 48px;
            height: fit-content;
        }

        .image_preview {
            height: 120px;
            width: 180px;
        }

        .profile_delete_photo {
            width: 100%;
            height: 90%;
            padding: 20%;
        }

        .switch_toggle {
            margin-left: 10px;
        }

        .switch_toggle .slider {
            background-color: #cfd3ff !important;
        }

        .checkbox_wrap label {
            color: #415094;
            font-weight: 500;
        }


    </style>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>

    <section class="admin-visitor-area up_st_admin_visitor student-details">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="box_header mt-3">
                        <div class="align-items-center d-flex justify-content-between main-title w-100">
                            <h3 class="mb-0 mr-30"><?php echo e(__('profile.profile_settings')); ?></h3>
                            <div class="checkbox_wrap d-flex align-items-center text-end ml-auto">
                                <label class="mb-0 me-1"><?php echo e(__('profile.active_offline_status')); ?></label>
                                <label for="offline_status" class="switch_toggle">
                                    <input <?php echo e(@$user->userInfo->offline_status?'checked':""); ?>  type="checkbox"
                                           name="offline_status"
                                           class="offline_status_change" id="offline_status" value="1">
                                    <i class="slider round"></i>
                                </label>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- tab link -->
                    <?php echo $__env->make("backend.profile._tab_link", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <div class="white-box">
                        <div class="tab-content mt-20">
                            <!-- basic information -->
                            <?php echo $__env->make('backend.profile._basic_information_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- change password tab -->
                            <?php echo $__env->make('backend.profile._change_password_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('TwoFA') && Settings('enable_two_fa')): ?>
                                <?php echo $__env->make('backend.profile._2fa_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <!-- image tab -->
                            <?php echo $__env->make('backend.profile._images_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- about tab -->
                            <?php echo $__env->make('backend.profile._about_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- education tab -->
                            <?php echo $__env->make('backend.profile._education_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- experience tab -->
                            <?php echo $__env->make('backend.profile._experience_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- skills tab -->
                            <?php echo $__env->make('backend.profile._skills_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- financial tab -->
                            <?php echo $__env->make('backend.profile._financial_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- api tab -->
                            <?php echo $__env->make('backend.profile._api_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- extra information tab -->
                            <?php echo $__env->make('backend.profile._extra_info_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- identity & documents tab -->
                            <?php echo $__env->make('backend.profile._identity_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- social & contact tab -->
                            <?php echo $__env->make('backend.profile._social_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <!-- delete account -->
                            <?php echo $__env->make('backend.profile._delete_account_tab', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


                        </div>
                    </div>
                </div>
                <?php echo $__env->make('backend.profile._route', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('backend.profile._delete_modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php echo $__env->make('backend.profile._offline_message_modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                <div id="append_html"></div>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- ajax setup -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name=_token]').attr('content')
            }
        });
    </script>
    <!-- repeater js -->
    <script src="<?php echo e(asset('public/modules/profile/repeater/repeater.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/profile/repeater/indicator-repeater.js')); ?><?php echo e(assetVersion()); ?>"></script>

    <!-- tag input plugin js -->
    <script src="<?php echo e(asset('Modules/Blog/Resources/views/assets/taginput/tagsinput.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <!-- education js -->
    <script src="<?php echo e(asset('public/modules/profile/education.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <!-- experience js -->
    <script src="<?php echo e(asset('public/modules/profile/experience.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <!-- skill js -->
    <script src="<?php echo e(asset('public/modules/profile/skill.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script src="<?php echo e(asset('public/modules/profile/common.js')); ?><?php echo e(assetVersion()); ?>"></script>
    <script>

        (function ($) {
            "use strict";
            $(document).ready(function () {


                $('[data-bs-toggle="tooltip"]').tooltip();
                // delete modal show
                $(document).on('click', '.delete_item', function (event) {
                    event.preventDefault();
                    let href = $(this).attr('href');
                    $(".modal-body #delete_confirm_btn").attr('href', href);
                    $('#deleteModal').modal('show');
                });
                // delete confirm
                $(document).on('click', '#delete_confirm_btn', function (event) {
                    event.preventDefault();
                    let url = $(this).attr('href');
                    $.ajax({
                        url: url,
                        type: "GET",
                        success: function (response) {
                            $('#deleteModal').modal('hide');

                            if (response.type && response.type === 'reload') {
                                toastr.success(response.msg, 'Success');
                                location.reload();
                            } else {
                                resetAfterChange(response.selector, response.response);
                                toastr.success(response.msg, 'Success');
                            }

                        },
                        error: function (response) {
                            $('#deleteModal').modal('hide');
                            toastr.error(response.responseJSON.error);
                        }
                    });

                });

                //after delete
                function resetAfterChange(selector, TableData) {
                    $(selector).html(TableData);
                }

                //payout account data
                financialAccountData();
                $(document).on('change', '#account_type', function (event) {
                    event.preventDefault();
                    financialAccountData();
                });

                function financialAccountData() {
                    let id = $('#account_type').val();
                    let url = $('#payout_account_type_change_route').val();
                    url = url.replace(':id', id);
                    if (id) {
                        $.ajax({
                            url: url,
                            type: "GET",
                            success: function (response) {
                                $('#payout_data_div').html(response);
                            },
                            error: function (response) {
                                toastr.error(response.responseJSON.error);
                            }
                        });
                    }
                }


                //active tab state
                $('a[data-bs-toggle="tab"]').on('show.bs.tab', function (e) {
                    localStorage.setItem('activeSettingsTab', $(e.target).attr('href'));
                });
                let activeSettingsTab = localStorage.getItem('activeSettingsTab');

                if (activeSettingsTab) {
                    $('a[href="' + activeSettingsTab + '"]').tab('show');
                }

                //onchange profile picture
                $(document).on('change', '#profile_picture', function () {
                    imageChangeWithFile($(this)[0], '#profile_picture_show');
                });

                //onchange cover photo
                $(document).on('change', '#cover_photo', function () {
                    imageChangeWithFile($(this)[0], '#cover_photo_show');
                });

                //city
                $('.cityList').select2({
                    ajax: {
                        url: '<?php echo e(route('ajaxCounterCity')); ?>',
                        type: "GET",
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            var query = {
                                search: params.term,
                                page: params.page || 1,
                                id: $('#state').find(':selected').val(),
                            }
                            return query;
                        },
                        cache: false
                    }
                });
                //state
                $('.stateList').select2({
                    ajax: {
                        url: '<?php echo e(route('ajaxCounterState')); ?>',
                        type: "GET",
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            var query = {
                                search: params.term,
                                page: params.page || 1,
                                id: $('#country').find(':selected').val(),
                            }
                            return query;
                        },
                        cache: false
                    }
                });

                //onchange country
                $(document).on('change', '#country', function () {
                    $('.stateList').val(null).trigger('change');
                    $('.cityList').val(null).trigger('change');
                });

                //onchange state
                $(document).on('change', '.stateList', function () {
                    $('.cityList').val(null).trigger('change');
                });

                //user document
                $(document).on('change', '#passport', function () {
                    showFileName($(this).val(), '#placeholderPassportName');
                    imageChangeWithFile($(this)[0], '#passport_show');
                });

                $(document).on('change', '#nid', function () {
                    showFileName($(this).val(), '#placeholderNidName');
                    imageChangeWithFile($(this)[0], '#nid_show');
                });

                $(document).on('click', '.document_add', function (event) {
                    event.preventDefault();
                    let itemNo = $(".document_items").find('.mt-repeater-row').length;
                    let selectRow = $(".document_item");
                    selectRow.find('.placeholder_field').last().prop('id', 'placeholderDocumentName_' + itemNo);
                    selectRow.find('.file_input_field').last().prop('id', 'document_' + itemNo);
                    selectRow.find('.document_show').last().prop('id', 'document_show_' + itemNo);
                    selectRow.find('.label_id').last().attr('for', 'document_' + itemNo);
                    selectRow.find('.placeholder_field').last().attr('data-id', itemNo);
                    selectRow.find('.file_input_field').last().attr('data-id', itemNo);
                    selectRow.find('.document_show').last().attr('data-id', itemNo);
                });
                $(document).on('change', '.file_input_field', function (event) {
                    event.preventDefault();
                    let id = $(this).data('id');
                    let ph = '#placeholderDocumentName_' + id;
                    let ps = '#document_show_' + id;
                    showFileName($('#document_' + id).val(), ph);
                    imageChangeWithFile($(this)[0], ps);
                });

                $(document).on('change', '.ex_file_input_field', function (event) {
                    event.preventDefault();
                    let id = $(this).data('id');
                    let ph = '#exPlaceholderDocumentName_' + id;
                    let ps = '#ex_document_show_' + id;
                    showFileName($('#ex_document_' + id).val(), ph);
                    imageChangeWithFile($(this)[0], ps);
                });


                $(document).on('click', '.toggle-password4', function (event) {
                    console.log('click')
                    $(this).toggleClass("fa-eye fa-eye-slash");
                    var input = $($(this).attr("toggle"));
                    if (input.attr("type") === "password") {
                        input.attr("type", "text");
                    } else {
                        input.attr("type", "password");
                    }
                });


                //onchange image show function
                function imageChangeWithFile(input, srcId) {

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $(srcId)
                                .attr('src', e.target.result);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function showFileName(value, placeholder) {
                    if (value) {
                        var startIndex = (value.indexOf('\\') >= 0 ? value.lastIndexOf('\\') : value.lastIndexOf('/'));
                        var filename = value.substring(startIndex);
                        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                            filename = filename.substring(1);
                        }
                        $(placeholder).attr('placeholder', '');
                        $(placeholder).attr('placeholder', filename);

                    }
                }

            });

            $('.select2').select2();
        })(jQuery);
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\settings.blade.php ENDPATH**/ ?>