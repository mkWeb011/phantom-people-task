<?php
function pd_fetch_github_data($username) {
    $url = "https://api.github.com/users/{$username}";
    $response = wp_remote_get($url, [
        'headers' => ['User-Agent' => 'PeopleDirectoryTheme']
    ]);
    if (is_wp_error($response)) return [];
    return json_decode(wp_remote_retrieve_body($response), true);
}
