<?php
add_action('init', function() {
    add_rewrite_rule('^people-sitemap/?$', 'index.php?people_sitemap=1', 'top');
});
add_filter('query_vars', function($vars) {
    $vars[] = 'people_sitemap';
    return $vars;
});
add_action('template_redirect', function() {
    if (!get_query_var('people_sitemap')) return;
    header('Content-Type: application/xml; charset=utf-8');
    $people = pd_get_people();
    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($people as $p) {
        echo '<url><loc>' . esc_url(home_url("/people/{$p['slug']}/")) . '</loc></url>';
    }
    echo '</urlset>';
    exit;
});
