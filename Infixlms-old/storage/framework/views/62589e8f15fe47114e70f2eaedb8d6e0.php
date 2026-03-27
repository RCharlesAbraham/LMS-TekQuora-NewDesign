<?php
    $user =\Illuminate\Support\Facades\Auth::user();
?>
    <!-- sidebar part here -->
<nav id="sidebar" class="sidebar  <?php echo e($user->sidebar!=1?'d-none':''); ?>">

    <div class="sidebar-header update_sidebar">
        <a class="large_logo" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(getLogoImage(Settings('logo'))); ?>" alt="">
        </a>
        <a class="mini_logo" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(getLogoImage(Settings('logo'))); ?>" alt="">
        </a>
        <a id="close_sidebar" class="d-lg-none">
            <i class="ti-close"></i>
        </a>
    </div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($user->role_id!=1): ?>
        <div class="sidebar-user text-center">
            <div class="sidebar-profile mx-auto">
                <img src="<?php echo e(getProfileImage($user->image,Auth::user()->name)); ?>"
                     alt="">
            </div>
            <h4><?php echo e($user->name); ?> </h4>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('UserGroup') && $user->userGroup  && $user->userGroup->group->status): ?>
                <p class="text-nowrap mb-2"><?php echo e($user->userGroup->group->title); ?></p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <div class="sidebar-badge">
                <?php
                    $already=[];
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $user->userLatestBadges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $badge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $b =$badge->badge;

                        if (in_array($b->type,$already)){
                            continue;
                        }else{
                            $already[]=$b->type;
                        }
                    ?>
                    <div class="sidebar-badge-list"
                         data-bs-toggle="tooltip" data-placement="top"
                         title="<?php echo e($b->title); ?> <?php echo e(ucfirst($b->type)); ?> <?php echo e(trans('setting.Badge')); ?>">
                        <img
                            src="<?php echo e(asset($b->image)); ?>" alt=""></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            </div>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <ul id="sidebar_menu">

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if((isModuleActive('LmsSaas') || isModuleActive('LmsSaasMD')) && SaasDomain() != 'main' && !hasActiveSaasPlan()): ?>
            <li>
                <a href="#" class="has-arrow" aria-expanded="false">
                    <div class="nav_icon_small">
                        <span class="fas fa-university"></span>
                    </div>
                    <div class="nav_title">
                        <span><?php echo e(__('saas.Saas Management')); ?></span>
                    </div>
                </a>

                <ul>
                    <li>
                        <a href="<?php echo e(route('saas.myPlan')); ?>"><?php echo e(__('saas.My Plan')); ?></a>
                    </li>
                </ul>
            </li>
        <?php else: ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if((isModuleActive('LmsSaas') || isModuleActive('LmsSaasMD')) && SaasDomain() != 'main' && hasActiveSaasPlan()): ?>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <div class="nav_icon_small">
                            <span class="fas fa-university"></span>
                        </div>
                        <div class="nav_title">
                            <span><?php echo e(__('saas.Saas Management')); ?></span>
                        </div>
                    </a>

                    <ul>
                        <li>
                            <a href="<?php echo e(route('saas.myPlan')); ?>"><?php echo e(__('saas.My Plan')); ?></a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($sections)): ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $count = $section->activeMenus->count();
                        if ($count == 0){
                            continue;
                        }
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($section->name)): ?>
                        <span class="menu_seperator">
                    <?php echo e($section->name); ?>

                </span>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($section->activeMenus->count()): ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $section->activeMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                if (isModuleActive('LmsSaas')){
                                    if ($menu->power==1){
                                        continue;
                                    }
                                }
                                    $ignoreDynamicPage=[];
                                        $submenus =$section->activeSubmenus->where('parent_route',$menu->route)->where('parent_route','!=','dashboard');
                                        if(hasDynamicPage()){
                                            $ignoreDynamicPage=[
        //                                        'frontend.homeContent',
                                                'frontend.privacy_policy',
                                                'frontend.privacy_policy',
                                                'frontend.AboutPage',
                                                'frontend.ContactPageContent',
        //                                        'frontend.pageContent'
                                        ];

                                        }
                                           if (isModuleActive('AdvanceQuiz')){
                                                $setup =\Modules\Quiz\Entities\QuizeSetup::getData();
                                                if ($setup->advance_test_mode_status!=1){
                                                    $ignoreDynamicPage[] ='quiz.test-list';
                                                    $ignoreDynamicPage[] ='quiz.mark-test';
                                                    $ignoreDynamicPage[] ='quiz.supervisor';
                                                }
                                            }
                                           $submenus =   $submenus->whereNotIn('route',$ignoreDynamicPage);
                            ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->role_id==1): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($menu->route == 'users.my_panel.index'): ?>
                                    <?php continue; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck($menu->route)): ?>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$menu->module ||  isModuleActive($menu->module)): ?>
                                    <?php
                                        $hasChild =$submenus->count();

                                        if ($menu->theme && $menu->theme!=currentTheme()){
                                            $hasChild--;
                                            continue;
                                        }
                                    ?>
                                    <li class="<?php echo e(spn_active_link(childrenRoute($menu))); ?>">
                                        <a href="<?php if(!$hasChild && validRouteUrl($menu->route)): ?> <?php echo e(validRouteUrl($menu->route)); ?> <?php else: ?> # <?php endif; ?>"
                                           class=" <?php if($hasChild): ?> has-arrow <?php endif; ?>"
                                           aria-expanded="false">
                                            <div class="nav_icon_small">
                                                <span class="<?php echo e(@$menu->icon??'fas fa-th'); ?>"></span>
                                            </div>
                                            <div class="nav_title">
                                                <span><?php echo e($menu->name); ?></span>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if((env('APP_SYNC') || config('app.demo_mode'))&& !empty($menu->module)): ?>
                                                    <span class="demo_addons">Addon</span>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>
                                        </a>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($hasChild): ?>
                                            <ul>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $submenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <?php
                                                        if (isModuleActive('LmsSaas')){
                                                           if ($submenu->power==1){
                                                               continue;
                                                           }
                                                       }
                                                    ?>
                                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(permissionCheck($submenu->route)): ?>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$submenu->module ||  isModuleActive($submenu->module)): ?>
                                                            <?php
                                                                if ($submenu->theme && $submenu->theme!=currentTheme()){
                                                                      continue;
                                                                  }
                                                            ?>
                                                            <li class="<?php echo e(spn_active_link(childrenRoute($submenu))); ?>">
                                                                <a href="<?php if(!empty(validRouteUrl($submenu->route))): ?> <?php echo e(validRouteUrl($submenu->route)); ?> <?php else: ?> # <?php endif; ?>"> <?php echo e($submenu->name); ?></a>
                                                            </li>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </ul>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </li>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </ul>

</nav>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\sidebar.blade.php ENDPATH**/ ?>