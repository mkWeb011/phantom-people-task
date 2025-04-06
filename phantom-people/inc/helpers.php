<?php
function pd_get_people() {
    $csv = get_template_directory() . '/csv/people.csv';
    if (!file_exists($csv)) return [];
    $rows = array_map('str_getcsv', file($csv));
    $header = array_shift($rows);
    return array_map(fn($row) => array_combine($header, $row), $rows);
}
function pd_find_person($slug) {
    foreach (pd_get_people() as $person) {
        if ($person['slug'] === $slug) return $person;
    }
    return null;
}
