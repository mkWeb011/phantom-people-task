<?php
header('Content-Type: application/xml; charset=utf-8');
$people = pd_get_people(); // Funkcija koja vraća sve osobe iz CSV-a ili baze podataka

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($people as $p) {
    echo '<url>';
    echo '<loc>' . esc_url(home_url("/people/{$p['slug']}/")) . '</loc>';
    echo '<lastmod>' . date('Y-m-d') . '</lastmod>'; // Dodajemo datum poslednje izmene
    echo '<changefreq>monthly</changefreq>'; // Možete promeniti učestalost ažuriranja
    echo '<priority>0.8</priority>'; // Prioritet URL-a
    echo '</url>';
}

echo '</urlset>';
?>
