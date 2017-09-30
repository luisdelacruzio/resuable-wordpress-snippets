<?php

// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );

function vc_before_init_actions() {

    // Setup VC to be part of a theme
    if( function_exists('vc_set_as_theme') ){

        vc_set_as_theme( true );

    }

    // Link your VC elements's folder
    if( function_exists('vc_set_shortcodes_templates_dir') ) {

        vc_set_shortcodes_templates_dir( get_stylesheet_directory() . '/library/vc-overrides' );

    }

    // Disable Instructional/Help Pointers
    if( function_exists('vc_pointer_load') ){

        remove_action( 'admin_enqueue_scripts', 'vc_pointer_load' );

    }

}

?>
