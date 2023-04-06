<?php
/* Enqueue Styles */
if ( ! function_exists('tw_enqueue_styles') ) {
    function tw_enqueue_styles() {
        wp_enqueue_style( 'twenty-twenty-two-style', get_template_directory_uri() .'/style.css' );
    }
    add_action('wp_enqueue_scripts', 'tw_enqueue_styles');
}
