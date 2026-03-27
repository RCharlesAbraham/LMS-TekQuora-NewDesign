<div>

    <div class="contact_section ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="contact_address">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="row justify-content-between">
                                    <div class="col-lg-5">
                                        <div class="contact_info mb_30">
                                            <div class="contact_title">
                                                <h4 class="mb-0"><?php echo e(__('frontend.Contact Information')); ?></h4>
                                            </div>
                                            <p><?php echo e(__('frontend.contact_subtitle')); ?></p>


                                            <div class="address_lines">
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(Settings('address') )): ?>
                                                    <div class="single_address_line d-flex">
                                                        <i class="ti-direction-alt"></i>
                                                        <div class="address_info">
                                                            <p> <?php echo Settings('address')  ? Settings('address')  : '89/2 Panthapath, Dhaka 1215, Bangladesh'; ?></p>

                                                        </div>
                                                    </div>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(Settings('phone') )): ?>
                                                    <div class="single_address_line d-flex">
                                                        <i class="ti-headphone-alt"></i>
                                                        <div class="address_info">
                                                            <p> <?php echo Settings('phone'); ?></p>
                                                        </div>
                                                    </div>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty(Settings('email') )): ?>

                                                    <div class="single_address_line d-flex">
                                                        <i class="ti-email"></i>
                                                        <div class="address_info">
                                                            <p> <?php echo Settings('email'); ?></p>
                                                            <p><?php echo e(__('frontend.Send us your query anytime')); ?>!</p>
                                                        </div>
                                                    </div>
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="contact_form_box mb_30">
                                            <div class="contact_title">
                                                <h4 class="mb-0"><?php echo e(__('frontend.Send Us Message')); ?></h4>
                                            </div>
                                            <form class="form-area contact-form" id="myForm"
                                                  action="<?php echo e(route('contactMsgSubmit')); ?>"
                                                  method="post">
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="primary_label"><?php echo e(__('frontend.Name')); ?></label>
                                                        <input name="name" placeholder="<?php echo e(__('frontend.Enter Name')); ?>"
                                                               onfocus="this.placeholder = ''"
                                                               onblur="this.placeholder = '<?php echo e(__('frontend.Enter Name')); ?>'"
                                                               class="primary_input mb_20" type="text" required
                                                               value="<?php echo e(old('name')); ?>">
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('name')); ?></span>

                                                        <label
                                                            class="primary_label"><?php echo e(__('frontend.Email Address')); ?></label>
                                                        <input name="email" required
                                                               placeholder="<?php echo e(__('frontend.Type e-mail address')); ?>"
                                                               pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                               onfocus="this.placeholder = ''"
                                                               onblur="this.placeholder = '<?php echo e(__('frontend.Type e-mail address')); ?>'"
                                                               class="primary_input mb_20"
                                                               type="email" value="<?php echo e(old('email')); ?>">
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('email')); ?></span>
                                                        <label class="primary_label"><?php echo e(__('frontend.Subject')); ?></label>
                                                        <input name="subject" required
                                                               placeholder="<?php echo e(__('frontend.Enter your subject')); ?>"
                                                               onfocus="this.placeholder = ''"
                                                               onblur="this.placeholder = '<?php echo e(__('frontend.Enter your subject')); ?>'"
                                                               class="primary_input mb_20" type="text"
                                                               value="<?php echo e(old('subject')); ?>">
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('subject')); ?></span>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="primary_label"><?php echo e(__('frontend.Message')); ?></label>
                                                        <textarea required class="primary_textarea mb-0" name="message"
                                                                  placeholder="<?php echo e(__('frontend.Write your message')); ?>"
                                                                  onfocus="this.placeholder = ''"
                                                                  onblur="this.placeholder = '<?php echo e(__('frontend.Write your message')); ?>'"
                                                        ><?php echo e(old('message')); ?></textarea>
                                                        <span class="text-danger"
                                                              role="alert"><?php echo e($errors->first('message')); ?></span>
                                                    </div>

                                                    <div class="col-12 mt_10 mb_20">


                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(saasEnv('NOCAPTCHA_FOR_CONTACT')=='true'): ?>
                                                            <input type="hidden" name="hasCaptcha"
                                                                   value="<?php echo e(saasEnv('NOCAPTCHA_FOR_CONTACT')); ?>">
                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true"): ?>
                                                                <?php echo NoCaptcha::display(["data-size"=>"invisible"]); ?>

                                                                <?php echo NoCaptcha::renderJs(); ?>

                                                            <?php else: ?>
                                                                <?php echo NoCaptcha::display(); ?>

                                                                <?php echo NoCaptcha::renderJs(); ?>

                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->has('g-recaptcha-response')): ?>
                                                                <span class="text-danger"
                                                                      role="alert"><?php echo e($errors->first('g-recaptcha-response')); ?></span>
                                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


                                                    </div>
                                                    <div class="col-lg-12 text-start">
                                                        <div class="alert-msg"></div>


                                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(saasEnv('NOCAPTCHA_FOR_CONTACT')=='true' && saasEnv('NOCAPTCHA_IS_INVISIBLE')=="true"): ?>
                                                            <button type="button"
                                                                    class="g-recaptcha theme_btn small_btn submit-btn w-100 text-center"
                                                                    data-sitekey="<?php echo e(saasEnv('NOCAPTCHA_SITEKEY')); ?>"
                                                                    data-size="invisible"
                                                                    data-callback="onSubmit"
                                                            >
                                                                <?php echo e(__('frontend.Send Message')); ?>

                                                            </button>

                                                            <script src="https://www.google.com/recaptcha/api.js"
                                                                    async
                                                                    defer></script>
                                                            <script>
                                                                function onSubmit(token) {
                                                                    document.getElementById("myForm").submit();
                                                                }
                                                            </script>
                                                        <?php else: ?>

                                                            <button type="submit"
                                                                    class="theme_btn small_btn submit-btn w-100 text-center">
                                                                <?php echo e(__('frontend.Send Message')); ?>

                                                            </button>
                                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\contact-page-section.blade.php ENDPATH**/ ?>