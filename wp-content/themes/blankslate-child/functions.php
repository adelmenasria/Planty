<?php

// Enqueue (inherit) parent styles and our custom css
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
function theme_enqueue_assets() {
    // Not necessary because Blankslate theme doesn't have default styles and we use Elementor as Page Builder
    // wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    if ( is_page( 'order' ) ) {
        wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/my-script.js', array( 'jquery' ), '1.0', true );
    }
}


// Display menu if user logged-in/out
add_filter( 'wp_nav_menu_args', 'display_navs' );
function display_navs( $args = '' ) {
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