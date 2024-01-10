<?php require_once base_path('public/views/partials/head.php'); ?>
<?php require_once base_path('public/views/partials/nav.php'); ?>
<?php require_once base_path('public/views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <a href="/note/create" class="text-blue-500 hover:underline">Create Note</a>
    <h5>Welcome back to your notes</h5>
    <?php foreach ($results as $note) : ?>
      <li>
        <a href="/note/?id=<?php echo $note['id']; ?>" class=" text-blue-500 hover:underline"><?php echo $note['body'] ?></a>
      </li>
    <?php endforeach; ?>

  </div>

</main>

<?php require_once base_path('public/views/partials/foot.php'); ?>