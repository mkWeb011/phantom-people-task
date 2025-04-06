<?php
require_once get_template_directory() . '/inc/router.php';
require_once get_template_directory() . '/inc/github.php';
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/sitemap.php';
function phantom_people_theme_styles() {
    wp_enqueue_style('phantom-people-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'phantom_people_theme_styles');
