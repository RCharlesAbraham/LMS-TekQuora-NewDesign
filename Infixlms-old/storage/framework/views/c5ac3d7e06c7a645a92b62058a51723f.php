<!-- tutor listing item:start -->
<section class="section_padding tutor_listing">
    <div class="container">
        <div class="row ipad-colmun-reverse">
            <div class="col-xl-3 col-lg-3">

                <input type="hidden" class="class_route" name="class_route"
                       value="<?php echo e(route('appointment.instructors')); ?>">
                <?php if (isset($component)) { $__componentOriginal08fcd7273f4d8f2c0c2b017e66a4d401 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal08fcd7273f4d8f2c0c2b017e66a4d401 = $attributes; } ?>
<?php $component = App\View\Components\AppointmentTutorFinderSidebar::resolve(['categories' => $categories,'levels' => $levels,'genders' => $genders,'weekDays' => $weekDays,'countries' => $countries,'categoriesIds' => $categoriesIds,'levelIds' => $levelIds,'genderIds' => $genderIds,'priceRange' => $priceRange,'ageRange' => $ageRange,'days' => $days,'country' => $country,'type' => $type] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('appointment-tutor-finder-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppointmentTutorFinderSidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal08fcd7273f4d8f2c0c2b017e66a4d401)): ?>
<?php $attributes = $__attributesOriginal08fcd7273f4d8f2c0c2b017e66a4d401; ?>
<?php unset($__attributesOriginal08fcd7273f4d8f2c0c2b017e66a4d401); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08fcd7273f4d8f2c0c2b017e66a4d401)): ?>
<?php $component = $__componentOriginal08fcd7273f4d8f2c0c2b017e66a4d401; ?>
<?php unset($__componentOriginal08fcd7273f4d8f2c0c2b017e66a4d401); ?>
<?php endif; ?>

            </div>
            <div class="col-xl-8 col-lg-9">
                <div class="tutor_listing_title d-flex align-item-center flex-wrap">
                    <p class="d-flex align-items-center">
                        <span class="mobile_filter p-0 mr_10 d-xl-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.5" height="13" viewBox="0 0 19.5 13">
                                <g transform="translate(28)">
                                    <rect id="" data-name="Rectangle 1" width="19.5" height="2" rx="1"
                                          transform="translate(-28)" fill="var(--system_primery_color)"></rect>
                                    <rect id="" data-name="Rectangle 2" width="15.5" height="2" rx="1"
                                          transform="translate(-26 5.5)" fill="var(--system_primery_color)"></rect>
                                    <rect id="" data-name="Rectangle 3" width="5" height="2" rx="1"
                                          transform="translate(-20.75 11)" fill="var(--system_primery_color)"></rect>
                                </g>
                            </svg>
                        </span>
                        <?php echo e(count($instructors)); ?> <?php echo e(__('appointment.Teachers Available')); ?>

                    </p>
                    <select class='active_nice_select' id="order">
                        <option value=""> <?php echo e(__('common.Type')); ?></option>
                        <option
                            <?php echo e(request('order')=='2'?'selected':''); ?> value="2"><?php echo e(__('appointment.In-Person')); ?></option>
                        <option
                            <?php echo e(request('order')=='3'?'selected':''); ?>  value="3"><?php echo e(__('appointment.Online')); ?></option>
                        <option
                            <?php echo e(request('order')=='4'?'selected':''); ?>  value="4"><?php echo e(__('appointment.Individual')); ?></option>
                        <option <?php echo e(request('order')=='5'?'selected':''); ?> value="5"><?php echo e(__('appointment.Group')); ?></option>
                        <option
                            <?php echo e(request('order')=='6'?'selected':''); ?> value="6"><?php echo e(__('appointment.Individual(Online)')); ?></option>
                        <option
                            <?php echo e(request('order')=='7'?'selected':''); ?>  value="7"><?php echo e(__('appointment.Group(Online)')); ?></option>
                    </select>
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tutor_listing_item">
                        <div class="tutor_listing_item_left">
                            <div class="tutor_listing_item_profile_img">
                                <img src="<?php echo e(getProfileImage($instructor->image,$instructor->name)); ?>" alt="">
                            </div>
                        </div>
                        <div class="tutor_listing_item_right">
                            <div class="tutor_listing_item_info">
                                <div class="tutor_listing_item_info_profile">
                                    <h4>
                                        <a
                                            href="<?php echo e(route('appointment.instructor', [$instructor->slug ?? $instructor->id])); ?>">
                                            <?php echo e($instructor->name); ?> </a>
                                        <img
                                            src="<?php echo e(asset('Modules/Appointment/Resources/assets/frontend/')); ?>/img/all-icons/country/<?php echo e(strtolower($instructor->userCountry->iso2)); ?>.svg"
                                            alt="" width="21" height="15">

                                    </h4>
                                    <ul>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings->review_option == 1): ?>
                                            <li class='star'><i
                                                    class="fa fa-star"></i>(<?php echo e($instructor->instructor_reviews_count); ?>

                                                <?php echo e(__('appointment.Ratings')); ?>)
                                            </li>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings->number_of_student == 1): ?>
                                            <li><i class="fa fa-user-friends"></i>
                                                <?php echo e(count($instructor->bookStudents)); ?>

                                                <?php echo e(__('appointment.students')); ?>

                                            </li>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        
                                    </ul>


                                    <p><?php echo e(__('appointment.Speaks')); ?> :
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $instructor->teachingLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($language->language->name); ?> <span
                                                style="color:<?php echo e($language->level->color); ?>;background-color:<?php echo e($language->level->background_color); ?> "><?php echo e($language->level->title); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </p>
                                </div>
                                <p> <?php echo $instructor->about; ?></p>

                            </div>
                            <div class="tutor_listing_item_info_price text-end">
                                <h3><?php echo e(getPriceFormat($instructor->hour_rate)); ?> <small>/
                                        <?php echo e(__('appointment.Hr.')); ?></small></h3>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($settings->trail_lesson == 1): ?>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($trial_booked_instructors) && $trial_booked_instructors->where('instructor_id',$instructor->id)->first()): ?>
                                        <a href="#"
                                           class="theme_btn "><?php echo e(__('appointment.Booked Trial Lesson')); ?></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('book-trail-lesson', [$instructor->slug ?? $instructor->id])); ?>"
                                           class="theme_btn "><?php echo e(__('appointment.Book Trial Lesson')); ?></a>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($wishlist_instructors) && $wishlist_instructors->where('instructor_id',$instructor->id)->first()): ?>
                                    <a href="#"
                                       class="theme_btn bg-transparent">
                                        <?php echo e(__('appointment.Added to Wishlist')); ?>

                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e(route('store.wishlist', [$instructor->slug ?? $instructor->id])); ?>"
                                       class="theme_btn bg-transparent">
                                        <?php echo e(__('appointment.Add to Wishlist')); ?>

                                    </a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </div>
                        </div>

                        <!-- listing popup -->

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <!-- paginations -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($instructors) > 10): ?>
                    <div class="text-center">
                        <nav class="page_pagination">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i>Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#" current-page>3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><span>...</span></a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- tutor listing item:end -->
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\appointment-instructor-page-section.blade.php ENDPATH**/ ?>