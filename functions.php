<?php
function ixhh_enqueue_scripts() {
    wp_enqueue_style('ixhh-style', get_stylesheet_uri());
    wp_enqueue_script('ixhh-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ixhh_enqueue_scripts');

function ixhh_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'ix-hostage-house'),
    ));
}
add_action('after_setup_theme', 'ixhh_register_menus');
?>
