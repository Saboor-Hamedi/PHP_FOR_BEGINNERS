<?php $config = require_once BASE_PATH . '/App/functions/config.php' ?>
<?php


?>

<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/nav.php'; ?>
<?php require_once 'partials/banner.php'; ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h5>Welcome back to your notes</h5>
    <?php foreach ($results as $note) : ?>
      <li>
        <a href="/note?id=<?php echo $note['id']; ?>" class="text-blue-500 hover:underline"><?php echo $note['body'] ?></a>
      </li>
    <?php endforeach; ?>
    <a href="/note/create" class="text-blue-500 hover:underline">Create Note</a>
  </div>
</main>

<?php require_once 'partials/foot.php'; ?>