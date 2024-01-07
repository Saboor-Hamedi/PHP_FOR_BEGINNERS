<?php $config = require_once BASE_PATH . '/App/functions/config.php' ?>
<?php


?>

<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/nav.php'; ?>
<?php require_once 'partials/banner.php'; ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h5>Welcome back to your notes</h5>
    <?php

    foreach ($results as $note) {
      echo '<li>' . $note['body'] . '</li>';
    }
    ?>
  </div>
</main>

<?php require_once 'partials/foot.php'; ?>