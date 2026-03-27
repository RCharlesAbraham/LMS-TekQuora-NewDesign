<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/css/communication.css')); ?><?php echo e(assetVersion()); ?>"/>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('mainContent'); ?>

    <?php echo generateBreadcrumb(); ?>

    <section class="admin-visitor-area up_st_admin_visitor">
        <div class="container-fluid plr_30">
            <div class="row justify-content-center">
                <div class="col-lg-12 p-0">
                    <div class="messages_box_area">
                        <div class="messages_list">
                            <div class="white_box ">
                                <div class="white_box_tittle list_header main-title mb-0">
                                    <h3 class="main-title"><?php echo e(__('communication.Message List')); ?></h3>
                                </div>
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form active="#">
                                            <div class="search_field">
                                                <input type="text" id="search_input" onkeyup="searchReceiver()"
                                                       placeholder="<?php echo e(__('communication.Search content here')); ?>...">
                                            </div>
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <ul id="receiver_list">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $sentMessage=       $user->sentLastMessages;
                                            $receivedMessage=       $user->receivedLastMessages;
                                            $last_msg=    collect([$sentMessage, $receivedMessage])->sortByDesc('created_at')->first();

                                        ?>
                                        <li class="<?php echo e($user->sentLastMessages?$user->sentLastMessages->seen=='0'?'unseen':'':''); ?>">
                                            <a href="#" id="user<?php echo e($user->id); ?>" class="user_list"
                                               onClick="getMessage(<?php echo e($user->id); ?>)">
                                                <div class="message_pre_left">
                                                    <div class="message_preview_thumb profile_info">
                                                        <div class="profileThumb"
                                                             style="background-image: url('<?php echo e(getProfileImage($user->image,$user->name)); ?>')">

                                                        </div>
                                                    </div>
                                                    <div class="messges_info">
                                                        <h4 id="receiver_name<?php echo e($user->id); ?>"><?php echo e($user->name); ?></h4>
                                                        <p id="last_mesg<?php echo e($user->id); ?>"><?php echo e(@$last_msg->message); ?></p>
                                                    </div>
                                                </div>
                                                <div class="messge_time">
                                                    <span> <?php echo e(@$last_msg->messageFormat); ?> </span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="messages_chat ">
                            <div class="white_box ">
                                <div class="message_box_heading"><h3
                                        id="receiver_name"></h3></div>
                                <div id="all_massages"></div>

                                <div class="message_send_field">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck('communication.send')): ?>
                                        <form action="<?php echo e(route('communication.StorePrivateMessage')); ?>" name="submitForm"
                                              id="submitForm" method="POST" style="display: contents;">
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>">
                                            <input type="hidden" name="reciever_id" id="reciever_id"
                                                   value="">
                                            <input type="text" name="message"
                                                   placeholder="<?php echo e(__('communication.Write your message')); ?>" value=""
                                                   id="message">

                                            <button class="btn_1 submitMessageBtn" type="submit" id="submitMessage"
                                                    data-bs-toggle="tooltip"
                                            ><?php echo e(__('common.Send')); ?></button>
                                        </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <input type="hidden" name="store_message" class="store_message"
           value="<?php echo e(route('communication.StorePrivateMessage')); ?>">
    <input type="hidden" name="get_messages" class="get_messages"
           value="<?php echo e(route('communication.getMessage')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('public/backend/js/communication.js')); ?><?php echo e(assetVersion()); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\communication\private_messages.blade.php ENDPATH**/ ?>