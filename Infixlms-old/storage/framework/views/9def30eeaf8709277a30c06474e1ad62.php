<div class="modal-dialog modal-dialog-centered  modal_800px">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"><?php echo e(__('common.User')); ?> <?php echo e(__('common.Details')); ?></h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
                <i class="ti-close "></i>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="QA_section QA_section_heading_custom check_box_table">
                        <div class="QA_table ">

                            <table id="lms_table_student" class="table table-data ">
                                <tbody>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Name')); ?></th>
                                    <td class="text-start"><?php echo e($user->name); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Email')); ?></th>
                                    <td class="text-start"><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Phone')); ?></th>
                                    <td class="text-start"><?php echo e($user->phone); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Currency')); ?></th>
                                    <td class="text-start"><?php echo e($user->currency->name); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Language')); ?></th>
                                    <td class="text-start"><?php echo e($user->language_name); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.timezone')); ?></th>
                                    <td class="text-start"><?php echo e($user->userInfo?->timezone?->time_zone); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.job_title')); ?></th>
                                    <td class="text-start"><?php echo e($user->job_title); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.short_description')); ?></th>
                                    <td class="text-start"><?php echo e($user?->userInfo?->short_description); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.biography')); ?></th>
                                    <td class="text-start"><?php echo e($user?->about); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.education')); ?></th>
                                    <td class="text-start">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $user?->userEducations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h4 class="mb-1"><?php echo e($education->institution); ?></h4>
                                            <p class="text-muted"><?php echo e($education->degree); ?></p>
                                            <small
                                                class="text-muted"><?php echo e(showDate($education->start_date)); ?> <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($education->end_date): ?>
                                                    -
                                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?> <?php echo e(showDate($education->end_date)); ?></small>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.experience')); ?></th>
                                    <td class="text-start">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $user?->userExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h4 class="mb-1"><?php echo e($experience->title); ?></h4>
                                            <p class="text-muted"><?php echo e($experience->company_name); ?></p>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($experience->duration()): ?>
                                                <small class="text-muted"><?php echo e(showDate($experience->start_date)); ?>

                                                    - <?php echo e($experience->currently_working?'Present':showDate($experience->end_date)); ?>

                                                    [ <?php echo e($experience->duration()); ?> ]</small>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.skills')); ?></th>
                                    <td class="text-start">
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($user->userSkill && $user->userSkill->skills): ?>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = explode(',',$user->userSkill->skills); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="javascript:void(0);" class="badge badge-custom"><?php echo e($skill); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.financial')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user?->userPayoutAccount?->payoutAccount?->title); ?>

                                    </td>
                                </tr>

                                <tr>
                                    <th class="text-start"><?php echo e(__('common.gender')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user?->gender); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Date of Birth')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user->dob?date('m/d/Y',strtotime(@$user->dob)):''); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Country')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user->userCountry->name); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.State')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user->stateDetails->name); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.City')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user->cityDetails->name); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Address')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user->address); ?>

                                    </td>
                                </tr>

                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.nid')); ?></th>
                                    <td class="text-start">
                                        <img id="nid_show" class="center image_preview p-1"
                                             src="<?php echo e($nid_document?showImage($nid_document->document): showImage()); ?>"
                                             alt="NID">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('profile.passport')); ?></th>
                                    <td class="text-start">
                                        <img id="passport_show" class="center image_preview p-1"
                                             src="<?php echo e($passport_document?showImage($passport_document->document): showImage()); ?>"
                                             alt="Passport">
                                    </td>
                                </tr>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $others_documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th class="text-start"><?php echo e($document->name); ?></th>
                                        <td class="text-start">

                                            <img data-id="<?php echo e($document->id); ?>"
                                                 id="ex_document_show_<?php echo e($document->id); ?>"
                                                 class="center image_preview ex_document_show p-2"
                                                 src="<?php echo e(showImage($document->document)); ?>" alt="Document">

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Facebook URL')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user->facebook); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Twitter URL')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user->twitter); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-start"><?php echo e(__('common.Instagram URL')); ?></th>
                                    <td class="text-start">
                                        <?php echo e($user->LinkedIn); ?>

                                    </td>
                                </tr>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $instant_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i_msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th class="text-start"><?php echo e($i_msg->service); ?></th>
                                        <td class="text-start">
                                            <?php echo e($i_msg->username); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\backend\partials\_profile_modal_details.blade.php ENDPATH**/ ?>