<div class="main_content_iner main_content_padding">
    <input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
    <div class="dashboard_lg_card">
        <div class="container-fluid g-0">
            <div class="">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title3 margin-50 d-flex w-100  justify-content-between align-items-center">
                            <h3 class=" "><?php echo e(__('setting.Notification Setup')); ?> </h3>

                            <label class="primary_checkbox d-flex ml-12 "
                                   for="select_all">
                                <input type="checkbox" id="select_all"
                                       value="1">
                                <span class="checkmark"></span>
                                <span class="text-nowrap"><?php echo e(__('common.Select')); ?> <?php echo e(__('common.All')); ?></span>
                            </label>

                        </div>
                    </div>
                    <style>
                        .unread_notification {
                            font-weight: bold;
                        }

                        .notifi_par {
                            font-weight: bold;
                        }

                        .notify_normal {
                            color: var(--system_secendory_color);
                        }
                    </style>
                    <div class="col-12">
                        <form action="<?php echo e(route('update_notification_setup')); ?>" name="notification_setup_form"
                              id="notification_setup_form" method="POST">

                            <?php echo csrf_field(); ?>
                            <div class="table-responsive">
                                <table class="table custom_table mb-0" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="pl-4"><?php echo e(__('common.Name')); ?></th>
                                        <th scope="col">
                                            <?php echo e(__('common.Email')); ?>

                                            <label class="primary_checkbox d-flex ml-12 "
                                                   for="email_option_check">
                                                <input type="checkbox" id="email_option_check"
                                                       class="select_all"
                                                       value="1">
                                                <span class="checkmark"></span>
                                            </label>

                                        </th>
                                        <th scope="col">
                                            <?php echo e(__('common.Browser')); ?>

                                            <label class="primary_checkbox d-flex ml-12 "
                                                   for="browser_option_check">
                                                <input type="checkbox" id="browser_option_check"
                                                       class="select_all"
                                                       value="1">
                                                <span class="checkmark"></span>
                                            </label>

                                        </th>
                                        <th scope="col">
                                            <?php echo e(__('setting.SMS')); ?>

                                            <label class="primary_checkbox d-flex ml-12 "
                                                   for="sms_option_check">
                                                <input type="checkbox" id="sms_option_check"
                                                       class="select_all"
                                                       value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $alreadyHave=[];
                                    ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $setup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            if (!in_array($setup->template_act,$alreadyHave)){
                                                                 $alreadyHave[] =$setup->template_act;
                                                             }else{
                                                                 continue;
                                                             }
                                             if($setup['template']->is_system==1 || $setup['template']->name==null){
                                                 continue;
                                             }
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo e(@$setup['template']->subj); ?>

                                            </td>
                                            <td>
                                                <label class="primary_checkbox  d-flex mr-12 "
                                                       for="email_option_check_<?php echo e($setup->id); ?>" yes="">
                                                    <input type="checkbox" id="email_option_check_<?php echo e($setup->id); ?>"
                                                           class="email_option_check"
                                                           name="email[<?php echo e($setup['template']->act); ?>]"
                                                           <?php echo e(isset($user_notification_setup)? in_array($setup['template']->act,$email_ids) ? 'checked':'':'checked'); ?>

                                                           value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="primary_checkbox d-flex ml-12 "
                                                       for="browser_option_check_<?php echo e($setup->id); ?>" yes="">
                                                    <input type="checkbox" id="browser_option_check_<?php echo e($setup->id); ?>"
                                                           class="browser_option_check"
                                                           name="browser[<?php echo e($setup['template']->act); ?>]"
                                                           <?php echo e(isset($user_notification_setup)? in_array($setup['template']->act,$browser_ids) ? 'checked':'':'checked'); ?>

                                                           value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <label class="primary_checkbox d-flex ml-12 "
                                                       for="sms_option_check_<?php echo e($setup->id); ?>" yes="">
                                                    <input type="checkbox" id="sms_option_check_<?php echo e($setup->id); ?>"
                                                           class="sms_option_check"
                                                           name="sms[<?php echo e($setup['template']->act); ?>]"
                                                           <?php echo e(isset($user_notification_setup)? in_array($setup['template']->act,$sms_ids) ? 'checked':'':'checked'); ?>

                                                           value="1">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-12 text-center  ">
                                <button
                                    class="theme_btn   text-center mt_40"><?php echo e(__('student.Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    checkEmail();
    checkBrowser();
    checkSMS();
    checkAll();

    function checkEmail() {
        let selectAll = $('#email_option_check');
        let totalEmail = $('.email_option_check').length;
        let totalSelectedEmail = $('.email_option_check:checked').length;

        if (totalEmail === totalSelectedEmail) {
            selectAll.prop('checked', true);
        } else {
            selectAll.prop('checked', false);
        }
    }


    $(document).on('change', '.email_option_check', function () {
        checkEmail()
        checkAll()
    });
    $(document).on('change', '#email_option_check', function () {
        $('.email_option_check').not(this).prop('checked', this.checked);
        checkEmail()
        checkAll()
    });


    function checkBrowser() {
        let selectAll = $('#browser_option_check');
        let totalEmail = $('.browser_option_check').length;
        let totalSelectedEmail = $('.browser_option_check:checked').length;

        if (totalEmail === totalSelectedEmail) {
            selectAll.prop('checked', true);
        } else {
            selectAll.prop('checked', false);
        }
    }


    $(document).on('change', '.browser_option_check', function () {
        checkBrowser()
        checkAll()
    });
    $(document).on('change', '#browser_option_check', function () {
        $('.browser_option_check').not(this).prop('checked', this.checked);
        checkBrowser()
        checkAll()
    });


    function checkSMS() {
        let selectAll = $('#sms_option_check');
        let totalEmail = $('.sms_option_check').length;
        let totalSelectedEmail = $('.sms_option_check:checked').length;

        if (totalEmail === totalSelectedEmail) {
            selectAll.prop('checked', true);
        } else {
            selectAll.prop('checked', false);
        }
    }


    $(document).on('change', '.sms_option_check', function () {
        checkSMS()
        checkAll()
    });
    $(document).on('input', '#sms_option_check', function () {
        $('.sms_option_check').not(this).prop('checked', this.checked);
        checkSMS()
        checkAll()
    });


    function checkAll() {
        let selectAll = $('#select_all');
        let total = $('.select_all').length;
        let totalSelected = $('.select_all:checked').length;
        if (total === totalSelected) {
            selectAll.prop('checked', true);
        } else {
            selectAll.prop('checked', false);
        }
    }


    $(document).on('change', '.select_all', function () {
        checkAll()
    });
    $(document).on('change', '#select_all', function () {
        $('.select_all').trigger('click')
        $('.select_all').not(this).prop('checked', this.checked);
        checkAll()
    });
</script>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\notification-setup.blade.php ENDPATH**/ ?>