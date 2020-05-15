<?php
    
    function btdc_school_files() {
        
        wp_enqueue_script('javascrpt_file', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
        
        wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        
        wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('btdc_main_styles', get_stylesheet_uri());
        
    }

    add_action('wp_enqueue_scripts', 'btdc_school_files');




?>