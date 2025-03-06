<?php
// Add theme support for dynamic features
function ixhh_theme_setup() {
    add_theme_support('title-tag'); // Enables dynamic <title> tag
    add_theme_support('post-thumbnails'); // Enables featured images
    add_theme_support('custom-logo'); // Enables custom logo functionality
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'ixhh_theme_setup');

// Enqueue styles and scripts
function ixhh_enqueue_assets() {
    // Enqueue the main stylesheet
    wp_enqueue_style('ixhh-style', get_stylesheet_uri());

    // Enqueue the Font Awesome library
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

    // Enqueue custom styles from the assets directory
    wp_enqueue_style('ixhh-custom', get_template_directory_uri() . '/assets/css/styles.css', array('ixhh-style'), '1.0.0');

    // Optional: Enqueue custom JavaScript if needed in the future
    // wp_enqueue_script('ixhh-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ixhh_enqueue_assets');
?>
