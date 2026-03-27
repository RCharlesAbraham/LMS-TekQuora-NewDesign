<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isModuleActive('CPD')): ?>
    <div class="col-lg-12">
        <div class="white_box chart_box mt-20">
            <h4><?php echo e(__('cpd.CPD')); ?> <?php echo e(date('Y')); ?></h4>
            <div class="">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="myChartCPD" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('public/backend/vendors/chartlist/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/backend/js/daterangepicker.min.js')); ?>"></script>
    <script>
        var course_title = [];
        var complete_percentage = [];
        <?php if(isset($courses)): ?>

        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        course_title.push('<?php echo e($val->title); ?>');
        complete_percentage.push('<?php echo e(round($val->loginUserTotalPercentage)); ?>');
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        var ctx = document.getElementById('myChartCPD').getContext('2d');
        var myChartCPD = new Chart(ctx, {
            type: 'bar',
            data: {

                labels: course_title,
                datasets: [{
                    label: '<?php echo e(__('cpd.Student Course Statistic')); ?>',
                    data: complete_percentage,
                    backgroundColor: 'rgba(124, 50, 255, 0.5)',
                    borderColor: 'rgba(124, 50, 255, 0.5)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                maintainAspectRatio: false,
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\frontend\infixlmstheme\components\cpd-graph.blade.php ENDPATH**/ ?>