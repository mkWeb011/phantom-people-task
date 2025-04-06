<?php /* People Directory Listing */ get_header(); ?>
<div class="people-directory-container">
  <h1 class="directory-title">People Directory</h1>
  <div class="people-grid">
    <?php
    $csv_path = get_template_directory() . '/csv/people.csv';
    if (file_exists($csv_path)) {
      $rows = array_map('str_getcsv', file($csv_path));
      $headers = array_map('trim', array_shift($rows));
      foreach ($rows as $row) {
        $person = array_combine($headers, $row);
        $slug = sanitize_title($person['slug']);
        $name = esc_html($person['name']);
        $avatar = 'https://robohash.org/' . md5($slug) . '.png';
        $url = home_url('/people/' . $slug . '/');
        echo "<a class='person-tile' href='$url'>";
        echo "<img class='person-avatar' src='$avatar' alt='$name' />";
        echo "<span class='person-name'>$name</span>";
        echo "</a>";
      }
    } else {
      echo '<p>CSV file not found.</p>';
    }
    ?>
  </div>
</div>
<?php get_footer(); ?>
