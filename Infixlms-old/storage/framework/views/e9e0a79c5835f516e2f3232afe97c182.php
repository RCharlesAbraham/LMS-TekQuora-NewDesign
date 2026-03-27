<div>


    <div class="main_content_iner main_content_padding reward reward_page">
        <div class="container-fluild">
            <div class="row">
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="reward-card">
                        <div class="reward-card-points d-flex align-items-center">
                            <div class="img">
                                <img src="<?php echo e(asset('public/frontend/infixlmstheme/img/rewards')); ?>/1.png"
                                     alt="">
                            </div>
                            <div class="content">
                                <h4>
                                    <?php echo e(getPriceFormat($totalConvert,false)); ?>

                                </h4>
                                <p><?php echo e(__('frontend.Total Convert')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="reward-card">
                        <div class="reward-card-points d-flex align-items-center">
                            <div class="img"><img src="<?php echo e(asset('public/frontend/infixlmstheme/img/rewards')); ?>/2.png"
                                                  alt=""></div>
                            <div class="content">
                                <h4> <?php echo e($total_remind); ?></h4>
                                <p><?php echo e(__('frontend.Remained Coin')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="reward-card">
                        <div class="reward-card-points d-flex align-items-center">
                            <div class="img"><img src="<?php echo e(asset('public/frontend/infixlmstheme/img/rewards')); ?>/3.png"
                                                  alt=""></div>
                            <div class="content">
                                <h4> <?php echo e($total_earn); ?></h4>
                                <p><?php echo e(__('frontend.Total Earned Coin')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-xxl-3">
                    <div class="reward-card">
                        <div class="reward-card-points d-flex align-items-center">
                            <div class="img"><img src="<?php echo e(asset('public/frontend/infixlmstheme/img/rewards')); ?>/4.png"
                                                  alt=""></div>
                            <div class="content">
                                <h4> <?php echo e($total_spend); ?></h4>
                                <p><?php echo e(__('frontend.Total Spend')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('gamification_status') && Settings('gamification_reward_point_conversion_status') && Settings('gamification_reward_status')): ?>
                <div class="row">
                    <div class="col-xxl-9 col-xl-8 d-flex">
                        <div class="reward-card w-100">
                            <div class="reward-blance d-flex align-items-center flex-wrap">
                                <div class="reward-blance-img">
                                    <img src="<?php echo e(asset('public/frontend/infixlmstheme/img/rewards')); ?>/blance-img.png"
                                         alt="">
                                </div>
                                <div class="reward-blance-content">
                                    <h3><?php echo e(__('frontend.Convert your points')); ?> <?php echo e(__('frontend.&')); ?>

                                        <span><?php echo e(__('frontend.Get free courses')); ?></span></h3>
                                    <p><?php echo e(__('frontend.You can convert your earned points to the wallet charge or get free courses by spending points')); ?></p>
                                    <div class="d-flex align-items-center pb-2">
                                        <div>
                                            <h4 class="mb-0"><?php echo e(getPriceFormat($total_remind/Settings('gamification_reward_point_conversion_rate'),false)); ?></h4>
                                            <p><?php echo e(__('frontend.Amount for your available points')); ?></p>
                                        </div>
                                        <div class="ps-4">
                                            <a href="#" onclick="openConvertModal()"
                                               class="theme_btn rounded-pill me-4"><?php echo e(__('frontend.Convert Now')); ?></a>
                                            <a href="<?php echo e(route('courses')); ?>"
                                               class="theme_btn rounded-pill"><?php echo e(__('frontend.Browse Course')); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 d-flex">
                        <div class="reward-card badge-card">
                            <div class="reward-badge text-center">
                                <div class="img">
                                    <img src="<?php echo e(asset('public/frontend/infixlmstheme/img/rewards/badge.png')); ?>"
                                         alt="">
                                </div>
                                <h4><?php echo e(__('frontend.Want to earn more points?')); ?></h4>
                                <p><?php echo e(__('frontend.Learn how our point rewarding system works and get more points')); ?>

                                    <a class="how_to_point" href="#">
                                        <?php echo e(__('frontend.View Details')); ?>

                                    </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <div class="row">
                <div class="col-xxl-9 col-xl-8 d-flex">
                    <div class="reward-card w-100 p-0">
                        <div class="reward-table">
                            <table class="w-100">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('frontend.Title')); ?></th>
                                    <th><?php echo e(__('frontend.Type')); ?></th>
                                    <th><?php echo e(__('frontend.Point')); ?></th>
                                    <th><?php echo e(__('frontend.Date')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <p>
                                                <?php echo e(trans('setting.' .$history->type)); ?>

                                            </p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($history->status==1): ?>
                                                    <span class="dot dot-green"></span>
                                                    <p><?php echo e(__('frontend.Earn')); ?></p>
                                                <?php else: ?>
                                                    <span class="dot dot-orange"></span>
                                                    <p><?php echo e(__('frontend.Spent')); ?></p>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-<?php echo e($history->status==1?'green':'danger'); ?>">
                                                (<?php echo e($history->status==1?'+':'-'); ?>)<?php echo e($history->point); ?></p>
                                        </td>
                                        <td>
                                            <p class="fw-500"><?php echo e(showDate($history->created_at)); ?></p>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr class="text-center">
                                        <td colspan="4">
                                            <?php echo e(__('common.No data available in the table')); ?>

                                        </td>
                                    </tr>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 d-flex">
                    <div class="reward-card w-100 leader">
                        <div class="reward-leader">
                            <h4><?php echo e(__('frontend.Leaderboard')); ?></h4>

                            <ul class="nav nav-tabsms-0" id="myTab" role="tablist">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('gamification_leaderboard_show_point_status')): ?>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link  active nav-point" data-bs-toggle="tab"
                                                data-bs-target="#nav-point"
                                                data-type="point"
                                                onclick="loadTopData('point')"
                                                type="button" role="tab" aria-controls="point"
                                                aria-selected="true"><?php echo e(__('setting.Points')); ?>

                                        </button>
                                    </li>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('gamification_leaderboard_show_level_status')): ?>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link nav-point" data-bs-toggle="tab"
                                                data-bs-target="#nav-level"
                                                data-type="level"
                                                onclick="loadTopData('level')"
                                                type="button" role="tab" aria-controls="level"
                                                aria-selected="true"><?php echo e(__('setting.Levels')); ?>

                                        </button>
                                    </li>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('gamification_leaderboard_show_badges_status')): ?>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link nav-point" id="badge-tab" data-bs-toggle="tab"
                                                data-bs-target="#badge"
                                                data-type="badge"
                                                onclick="loadTopData('badge')"
                                                type="button" role="tab" aria-controls="badge"
                                                aria-selected="true"><?php echo e(__('setting.Badges')); ?>

                                        </button>
                                    </li>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('gamification_leaderboard_show_courses_status')): ?>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link nav-point" id="courses-tab" data-bs-toggle="tab"
                                                data-bs-target="#courses"
                                                data-type="courses"
                                                onclick="loadTopData('courses')"
                                                type="button" role="tab" aria-controls="courses"
                                                aria-selected="true"><?php echo e(__('courses.Courses')); ?>

                                        </button>
                                    </li>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Settings('gamification_leaderboard_show_certificate_status')): ?>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link nav-point" id="certificate-tab" data-bs-toggle="tab"
                                                data-bs-target="#certificate"
                                                data-type="certificate"
                                                type="button" role="tab" aria-controls="certificate"
                                                onclick="loadTopData('certificate')"
                                                aria-selected="true"><?php echo e(__('setting.certificates')); ?>

                                        </button>
                                    </li>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </ul>

                            <div class="reward-leader-content " id="topLeaderboardBody">
                                <ul>
                                </ul>
                            </div>

                            <div class="text-end mt-3">
                                <a href="#" data-type="point"
                                   class="fw-bold " id="viewALL"><?php echo e(__('frontend.View all')); ?>

                                    <svg class="ms-1 d-inline-block" width="18" height="12" viewBox="0 0 18 12"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.37114e-07 7L14.17 7L10.59 10.59L12 12L18 6L12 -5.24537e-07L10.59 1.41L14.17 5L6.11959e-07 5L4.37114e-07 7Z"
                                            fill="currentColor"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-9 col-xl-8">
                    <?php echo e($histories->links(theme('partials._new_pagination'))); ?>

                </div>
            </div>

        </div>
    </div>

    <div class="modal reward-modal modal fade" id="showConvertModal" tabindex="-1" role="dialog"
         aria-labelledby="showConvertModal"
         aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="<?php echo e(asset('public/frontend/infixlmstheme/img/rewards/exchange-img.png')); ?>" alt="">


                    <h4>
                        <?php echo e(__('frontend.You will get')); ?>

                        <span><?php echo e(getPriceFormat($total_remind/Settings('gamification_reward_point_conversion_rate'),false)); ?></span> <?php echo e(__('frontend.for')); ?>

                        <span> <?php echo e($total_remind); ?></span> <?php echo e(__('frontend.points')); ?>

                    </h4>
                    <p> <?php echo e(__('frontend.The amount will be charged to your wallet immediately')); ?> </p>

                    <form class="text-center modal-actions" action="<?php echo e(route('rewardPontConvert')); ?>" method="post">
                        <?php echo csrf_field(); ?>


                        <button type="submit"
                                class="theme_btn rounded-pill me-1"> <?php echo e(__('frontend.Convert Now')); ?></button>
                        <button type="button" class="theme_btn rounded-pill"
                                data-bs-dismiss="modal"><?php echo e(__('common.Close')); ?></button>


                    </form>
                </div>

            </div>
        </div>

    </div>


    <script>
        function openConvertModal() {
            $('#showConvertModal').modal('show');
        }


        function loadTopData(type) {
            let body = $('#topLeaderboardBody');
            let viewALL = $('#viewALL');
            let url = '<?php echo e(url('/')); ?>';
            let formData = {
                type: type,
                limit: 7,
                modal: 0
            };
            body.html('<div class="d-flex align-items-center justify-content-center py-3"><i class="fas fa-spinner  fa-spin"></i></div>')


            $.ajax({
                type: "get",
                data: formData,
                dataType: "html",
                url: url + '/my-leaderboard',
                success: function (data) {
                    body.html(data);
                },
                error: function (data) {
                    body.html("");
                }

            });
            viewALL.data('type', type)
        }

        $(document).on("click", "#viewALL", function (e) {
            e.preventDefault()
            let type = $(this).data('type');
            let modal = $('#myLeaderBoard')
            modal.modal('show');
            $('.type-' + type).trigger('click')
        });

        loadTopData('point')
    </script>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\reward-page-section.blade.php ENDPATH**/ ?>