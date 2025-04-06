<?php
/* Template: Router for People Directory */
function people_directory_router() {
    $uri = $_SERVER['REQUEST_URI'];
    $csv_path = get_template_directory() . '/csv/people.csv';

    if (strpos($uri, '/people/') === 0) {
        // People directory main page (/people/)
        if ($uri == '/people/') {
            include get_template_directory() . '/template-people-directory.php';
        }
        // People profile page (/people/{slug}/)
        else {
            $slug = trim(str_replace('/people/', '', $uri), '/');
            $csv = array_map('str_getcsv', file($csv_path));
            $headers = array_shift($csv);
            $person = null;

            // Search for matching person by slug
            foreach ($csv as $row) {
                $person_data = array_combine($headers, $row);
                if ($person_data['slug'] === $slug) {
                    $person = $person_data;
                    break;
                }
            }

            if ($person) {
                // Include profile page template
                include get_template_directory() . '/template-profile.php';
            } else {
                // Profile not found
                echo '<p>Profile not found!</p>';
            }
        }
    }
}
add_action('template_redirect', 'people_directory_router');
?>
