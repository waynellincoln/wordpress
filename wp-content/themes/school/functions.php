<?php
    
    function btdc_school_files() {
        
        wp_enqueue_style('btdc_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'btdc_school_files');




?>