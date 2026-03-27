<div class="tab-pane fade" id="fa_tab">
    <div class="row">
        <div class="col-12">

            <h3><?php echo e(__('profile.2FA')); ?></h3>
            <hr>
            <form action="<?php echo e(route('users.2Fa.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('TwoFA')): ?>

                        <div class="col-lg-6 col-md-6 mt_20">
                            <div class="single_input">
                                <span class="primary_label2"><?php echo e(__('common.Two FA')); ?>  </span>
                                <select class="primary_select theme_select" name="two_step_verification"
                                        id="two_step_verification">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!Settings('force_two_fa')): ?>
                                        <option value="0"
                                                <?php if($user->two_step_verification == 0): ?> selected <?php endif; ?>>
                                            <?php echo e(__('common.None')); ?></option>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <option value="1"
                                            <?php if($user->two_step_verification == 1): ?> selected <?php endif; ?>>
                                        <?php echo e(__('common.Email')); ?></option>

                                    <option value="2"
                                            <?php if($user->two_step_verification == 2): ?> selected <?php endif; ?>>
                                        <?php echo e(__('common.Google Auth')); ?></option>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sms): ?>
                                        <option value="3"
                                                <?php if($user->two_step_verification ==3): ?> selected <?php endif; ?>>
                                            <?php echo e(__('setting.SMS')); ?></option>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <option value="4"
                                            <?php if($user->two_step_verification == 4): ?> selected <?php endif; ?>>
                                        <?php echo e(__('setting.Push Notification')); ?></option>
                                </select>
                                <span class="text-danger" role="alert"><?php echo e($errors->first('city')); ?></span>
                            </div>
                        </div>



                        <div
                            class="col-lg-6 col-md-6 mt_20 <?php echo e(($user->two_step_verification == 1 || $user->two_step_verification == 3 )? '' : 'd-none'); ?>"
                            id="expired_time">

                            <label class="primary_input_label"
                                   for="password-field2"><?php echo e(__('setting.Two FA Expired Time')); ?>

                                <small>(<?php echo e(__('setting.In Minute')); ?>)</small>
                            </label>

                            <input type="text" placeholder="<?php echo e(__('setting.Two FA Expired Time')); ?>"
                                   class="primary_input_field"
                                   name="two_fa_expired_time"
                                   value="<?php echo e(@$user->two_fa_expired_time); ?>"
                                   id="two_fa_expired_time">


                        </div>

                        <div
                            class="col-lg-6 col-md-6 mt_20 <?php echo e($user->two_step_verification == 2 ? '' : 'd-none'); ?>"
                            id="googleQr">

                            <label class="primary_input_label"
                                   for="password-field2"><?php echo e(__('setting.Two FA Expired Time')); ?>

                            </label>

                            <?php
                                $google2fa = app('pragmarx.google2fa');
                                $user =auth()->user();
                                if(empty($user ->google2fa_secret)){
                                    $registration_data['google2fa_secret'] = $google2fa->generateSecretKey();
                                    \App\User::where('email', Auth::user()->email)->update(['google2fa_secret' => $registration_data['google2fa_secret']]);
                                }else{
                                    $registration_data['google2fa_secret'] =$user ->google2fa_secret;
                                }

                                $QR_Image = $google2fa->getQRCodeInline(Settings('site_title'), $user->email, $registration_data['google2fa_secret']);
                            ?>

                            <p><?php echo e(__('setting.Set up your two factor authentication by scanning the barcode below. Alternatively, you can use the code')); ?>

                                <strong><?php echo e($registration_data['google2fa_secret']); ?></strong></p>
                            
                            
                            
                            <div>
                                <?php echo $QR_Image; ?>

                            </div>


                            
                            
                            
                            

                            
                            
                            
                            
                            

                        </div>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>


                <div class="row">

                    <div class="col-12 text-end">
                        <hr>
                        <button class="primary-btn fix-gr-bg" type="submit"><i
                                class="ti-check"></i> <?php echo e(__('common.Save')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).on('change', '#two_step_verification', function () {
            let type = $(this).find(":selected").val();
            let expireTypeDiv = $('#expired_time');
            let googleQr = $('#googleQr');
            if (type == 1 || type == 3) {
                expireTypeDiv.removeClass('d-none');
                googleQr.addClass('d-none');
            } else if (type == 2) {
                expireTypeDiv.addClass('d-none');
                googleQr.removeClass('d-none');
            } else {
                googleQr.addClass('d-none');
                expireTypeDiv.addClass('d-none');

            }
        });
    </script>
</div>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\profile\_2fa_tab.blade.php ENDPATH**/ ?>