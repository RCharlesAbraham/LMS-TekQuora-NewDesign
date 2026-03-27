<?php
    $last_time =null;
    $next_time =null;
    if (Illuminate\Support\Facades\Storage::has('.reset_log')){
        $last_time =Illuminate\Support\Facades\Storage::get('.reset_log');
        $last_time =\Illuminate\Support\Carbon::parse($last_time);
        $next_time =$last_time->addMinutes(env('DEMO_RESET_TIME'));
        $next_time =$next_time->format('Y-m-d H:i:s');
    }
?>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('app.demo_mode') && env('DEMO_RESET_TIME') && \Illuminate\Support\Facades\Storage::has('.reset_log') && !empty($next_time)): ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/vendor/flipdown/flipdown.css')); ?>"/>
    <script src="<?php echo e(asset('public/vendor/flipdown/flipdown.js')); ?>"></script>
    <style>
        .flipdown .rotor {
        }
    </style>
    <div id="flipdown" class="flipdown"></div>
    <script>
        $(document).ready(function () {
            var datetime = (new Date("<?php echo e($next_time); ?>").getTime() / 1000);
            let flipdown = new FlipDown(datetime, {
                theme: "light",
            });
            flipdown.start();
            flipdown.ifEnded(() => {
                toastr.warning('Demo will be reset soon', 'Warning');
            });
        });


    </script>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/partials/timer.blade.php ENDPATH**/ ?>