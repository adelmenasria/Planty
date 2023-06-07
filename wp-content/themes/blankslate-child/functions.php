<?php
// inherit the styles from the parent theme
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );
function enqueue_custom_scripts() {
    // CSS
    wp_enqueue_style( 'child-custom-styles', get_stylesheet_directory_uri() . '/style.css' );

    // JS file if page order
    if ( is_page( 'order' ) ) {
        wp_enqueue_script( 'child-custom-scripts', get_stylesheet_directory_uri() . '/custom-script.js', array( 'jquery' ), '1.0', true );
    }
}


// Disable p and span tags (cf7)
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});


// Display Header if user logged-in/out
function my_wp_nav_menu_args( $args = '' ) {
    if( is_user_logged_in() ) {
    // Logged in menu to display
    $args['menu'] = 4;
    } else {
    // Non-logged-in menu to display
    $args['menu'] = 5;
    }
    return $args;
    }
    add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );