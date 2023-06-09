<?php
/* Not necessary because Blankslate theme doesn't have default styles

    // Enqueue (inherit) parent styles in child theme
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    function enqueue_parent_styles() {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    }

*/


// Enqueue a JS file in order page only
add_action( 'wp_enqueue_scripts', 'my_custom_script' );
function my_custom_script() {
    if ( is_page( 'order' ) ) {
        wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/my-script.js', array( 'jquery' ), '1.0', true );
    }
}


// Display menu if user logged-in/out
add_filter( 'wp_nav_menu_args', 'my_navs' );
function my_navs( $args = '' ) {
    if ( is_user_logged_in() ) {
        // Show logged-in menu
        $args['menu'] = 4;
    } else {
        // Show logged-out menu
        $args['menu'] = 5;
    }
    return $args;
}


// Plugin ContactForm7
// Disable p tags
add_filter( 'wpcf7_autop_or_not', '__return_false' );
// Disable span tags
add_filter( 'wpcf7_form_elements', 'cf7_disable_span' );
function cf7_disable_span($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
}