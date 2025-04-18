<?php
require_once get_template_directory() . '/inc/router.php';
require_once get_template_directory() . '/inc/github.php';
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/sitemap.php';
function phantom_people_theme_styles() {
    wp_enqueue_style('phantom-people-style', get_stylesheet_uri());
}

add_action('init', function() {
    add_rewrite_rule('^people-sitemap/?$', 'index.php?people_sitemap=1', 'top');
});

add_filter('query_vars', function($vars) {
    $vars[] = 'people_sitemap';
    return $vars;
});

add_action('template_redirect', function() {
    if (!get_query_var('people_sitemap')) return;
    
    include get_template_directory() . '/inc/sitemap.php';
    exit;
});

add_action('wp_enqueue_scripts', 'phantom_people_theme_styles');
