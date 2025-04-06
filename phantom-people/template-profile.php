<?php /* Single Person Profile */ get_header(); ?>
<div class="profile-container">
  <div class="profile-header">
  <nav>
  <a href="<?php echo home_url('/people/'); ?>">Browse All People</a>
</nav>
    <h1 class="profile-name"><?php echo esc_html($person['name']); ?></h1>
  </div>
  <div class="profile-card">
    <img class="profile-avatar" src="https://robohash.org/<?php echo md5($person['slug']); ?>.png" alt="<?php echo esc_html($person['name']); ?>" />
    <div class="profile-details">
      <p><strong>GitHub Username:</strong> <?php echo esc_html($person['github_username']); ?></p>
      <p><strong>Bio:</strong> <?php echo esc_html($person['bio']); ?></p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
