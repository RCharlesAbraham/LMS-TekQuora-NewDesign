<div class="backend-top-nav">
    <nav class="navbar navbar-expand-lg mb-0">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="backendNavBarToggler">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($sections)): ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $count = $section->activeMenus->count();
                                if ($count == 0){
                                    continue;
                                }
                            ?>
                            <li class="nav-item dropdown hoverable d-flex ">
                                <a class="nav-link dropdown-toggle " role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false" href="#">
                                    <i class="<?php echo e($section->icon); ?>"></i>

                                    <span>
                                                                            <?php echo e(!empty($section->name)?$section->name:' '); ?>


                                    </span>
                                </a>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($section->activeMenus->count()): ?>
                                    <ul class="dropdown-menu">

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
                                                    <li class="  <?php if($hasChild): ?>has-submenu <?php endif; ?>"><a
                                                            class="dropdown-item"
                                                            href="<?php if(!$hasChild && validRouteUrl($menu->route)): ?> <?php echo e(validRouteUrl($menu->route)); ?> <?php else: ?> # <?php endif; ?>">
                                                            <?php echo e($menu->name); ?>

                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if((env('APP_SYNC') || config('app.demo_mode'))&& !empty($menu->module)): ?>
                                                                <span class="demo_addons">Addon</span>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        </a>
                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($hasChild): ?>
                                                            <ul class="dropdown-menu submenu">
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
                                                                            <li>
                                                                                <a class="dropdown-item"
                                                                                   href="<?php if(!empty(validRouteUrl($submenu->route))): ?>
                                                                                        <?php echo e(validRouteUrl($submenu->route)); ?>

                                                                                    <?php else: ?>
                                                                                        #
                                                                                    <?php endif; ?>"><?php echo e($submenu->name); ?></a>
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
                                    </ul>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\nav.blade.php ENDPATH**/ ?>