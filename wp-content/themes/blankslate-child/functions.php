<?php
// inherit the styles from the parent theme
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );
function enqueue_custom_scripts() {
    // Chargement du fichier CSS personnalisé
    wp_enqueue_style( 'child-custom-styles', get_stylesheet_directory_uri() . '/style.css' );

    // Vérifier si c'est la page spécifique sur laquelle vous souhaitez charger le fichier JavaScript
    if ( is_page( 'order' ) ) {
        wp_enqueue_script( 'child-custom-scripts', get_stylesheet_directory_uri() . '/custom-script.js', array( 'jquery' ), '1.0', true );
    }
}


/** Disable p and span tags (cf7) **/
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});