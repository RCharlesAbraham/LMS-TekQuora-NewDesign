<div>
    <div class="cart_wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="new_cart_wrapper">
                        <h4><?php echo e(__('coupons.My Cart')); ?></h4>
                        <?php

                            $totalSum=0;
                             if (!Auth::check()) {
                               $carts=[];
                               if (session()->has('cart')){
                                    foreach (session()->get('cart') as $key => $cart) {
                                  $carts[]=$cart;
                               }
                               }

                            }

                        ?>


                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($carts)!=0): ?>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    if (isModuleActive('Store') && ($cart['is_store']??0) == 1) {
                                         $price = $cart['price'] * ($cart['qty']*1);
                                     }else{
                                         $price = $cart['price'];
                                     }

                                     $totalSum =  $totalSum + @$price;

                                ?>
                                <div class="single_cart">
                                    <div class="product_name d-flex align-items-center">
                                        <a href="<?php echo e(route('removeItem',[$cart['id']])); ?>">
                                            <div class="">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     viewBox="0 0 16 16">
                                                    <path data-name="Path 174" d="M0,0H16V16H0Z" fill="none"/>
                                                    <path data-name="Path 175"
                                                          d="M14.95,6l-1-1L9.975,8.973,6,5,5,6,8.973,9.975,5,13.948l1,1,3.973-3.973,3.973,3.973,1-1L10.977,9.975Z"
                                                          transform="translate(-1.975 -1.975)"
                                                          fill="var(--system_primery_color)"/>
                                                </svg>
                                            </div>
                                        </a>
                                        <div class="thumb">
                                            <img src="<?php echo e(asset($cart['image'])); ?>" alt="">
                                        </div>
                                        <span>
                                            <a href="<?php echo e(route('courseDetailsView',@$cart['slug'])); ?>">
                                            <h5><?php echo e(@$cart['title']); ?></h5></a>
                                        </span>
                                    </div>

                                    <div class="f_w_400">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('Store') && ($cart->is_store??0) == 1): ?>
                                            <?php echo e($cart['qty'] . ' x ' . getPriceFormat($cart['price']) . ' = ' . getPriceFormat($price)); ?>

                                        <?php else: ?>
                                            <?php echo e(getPriceFormat($price)); ?>

                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    </div>


                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        <?php else: ?>
                            <div class="col-lg-12">
                                <h1 class="text-center text-secondary"> <?php echo e(__('common.No Item found')); ?> <i
                                        class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </h1>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    </div>
                    <div class="cart_table_wrapper mb-0">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($carts)!=0): ?>
                            <div class="row mt_30">
                                <div class="col-12 text-end">
                                    <a href="<?php echo e(route('CheckOut')); ?>"
                                       class="theme_btn"><?php echo e(__('student.Proceed to checkout')); ?></a>
                                </div>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\my-cart-with-out-login-page-section.blade.php ENDPATH**/ ?>