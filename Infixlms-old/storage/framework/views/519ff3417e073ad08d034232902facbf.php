<!DOCTYPE html>
<html>

<head>
    <title>Document Player</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="<?php echo csrf_token(); ?>"/>
    <style>
        iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>

<body>
<div class="responsive-container">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->host == 'Word'): ?>
        <iframe src="https://docs.google.com/gview?url=<?php echo e(asset($lesson->video_url)); ?>&embedded=true"></iframe>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->host == 'Excel' && $lesson->host == 'PowerPoint' || $lesson->host == 'PPT' || $lesson->host == 'PPTX'): ?>
        <iframe src="https://view.officeapps.live.com/op/view.aspx?src=<?php echo e(asset($lesson->video_url)); ?>"></iframe>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    
    
    
    
    
    
    
    
    
    


    

    
    
    
    
    
    
    
    
    

    
    
    

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->host == 'Text'): ?>
        <iframe src="<?php echo e(asset($lesson->video_url)); ?>"></iframe>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lesson->host == 'Iframe'): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($lesson->video_url)): ?>
            <iframe class="video_iframe" id="video-id" src="<?php echo e(asset($lesson->video_url)); ?>"></iframe>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
</body>

</html>
<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views\document_player.blade.php ENDPATH**/ ?>