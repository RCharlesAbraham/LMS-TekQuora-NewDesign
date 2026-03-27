<div>
    <style data-type="aoraeditor-style">
        :root {
            --system_primery_color: <?php echo e($color->primary_color??'#FB1159'); ?>;
            --system_secendory_color: <?php echo e($color->secondary_color??'#202E3B'); ?> ;
            --footer_background_color: <?php echo e($color->footer_background_color??'#1E2147'); ?> ;
            --footer_headline_color: <?php echo e($color->footer_headline_color??'#ffffff'); ?> ;
            --footer_text_color: <?php echo e($color->footer_text_color??'#5B5C6E'); ?> ;
            --footer_text_hover_color: <?php echo e($color->footer_text_hover_color??'#FB1159'); ?> ;
            --bg_color: <?php echo e($color->bg_color??'#FFFFFF'); ?> ;

            --menu_bg: <?php echo e(Settings('menu_bg')?Settings('menu_bg'):'#f8f9fa'); ?>;
            --menu_text: <?php echo e(Settings('menu_text')?Settings('menu_text'):'#2b3d4e'); ?> ;
            --menu_hover_text: <?php echo e(Settings('menu_hover_text')?Settings('menu_hover_text'):'#FB1159'); ?>;
            --menu_title_text: <?php echo e(Settings('menu_title_text')?Settings('menu_title_text'):'#202E3B'); ?> ;


            --system_primery_color_0: <?php echo e(($color->primary_color??'#FB1159').'00'); ?>;
            --system_primery_color_05: <?php echo e(($color->primary_color??'#FB1159').'0d'); ?>;
            --system_primery_color_07: <?php echo e(($color->primary_color??'#FB1159').'12'); ?>;
            --system_primery_color_08: <?php echo e(($color->primary_color??'#FB1159').'14'); ?>;
            --system_primery_color_10: <?php echo e(($color->primary_color??'#FB1159').'1a'); ?>;
            --system_primery_color_20: <?php echo e(($color->primary_color??'#FB1159').'33'); ?>;
            --system_primery_color_30: <?php echo e(($color->primary_color??'#FB1159').'4d'); ?>;
            --system_primery_color_50: <?php echo e(($color->primary_color??'#FB1159').'80'); ?>;
            --system_primery_color_60: <?php echo e(($color->primary_color??'#FB1159').'99'); ?>;
            --system_primery_color_70: <?php echo e(($color->primary_color??'#FB1159').'b3'); ?>;
            --system_secendory_color_10: <?php echo e(($color->secondary_color??'#202E3B').'1a'); ?> ;
            --sytem_gradient_2: <?php echo e(($color->secondary_color??'#202E3B')); ?>;


            --font_family1: "<?php echo e(Settings('google_font_is_active') && Settings('google_font_family1') ? Settings('google_font_family1'):'Source Sans Pro'); ?>", sans-serif;
            --font_family2: "<?php echo e(Settings('google_font_is_active') && Settings('google_font_family2') ? Settings('google_font_family2'):'Jost'); ?>", sans-serif;


        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: [
                    "<?php echo e(Settings('google_font_is_active') && Settings('google_font_family1') ? Settings('google_font_family1'):'Source Sans Pro'); ?>",
                    "<?php echo e(Settings('google_font_is_active') && Settings('google_font_family2') ? Settings('google_font_family2'):'Jost'); ?>"
                ]
            }
        });
    </script>
</div>

<?php /**PATH C:\Users\Charl\LMS-TekQuora-NewDesign\Infixlms-old\resources\views/frontend/infixlmstheme/components/frontend-dynamic-style-color.blade.php ENDPATH**/ ?>