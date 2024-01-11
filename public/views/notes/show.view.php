<?php require_once base_path('public/views/partials/head.php'); ?>
<?php require_once base_path('public/views/partials/nav.php'); ?>
<?php require_once base_path('public/views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7-xl py-6 sm:px-6 lg:px-8">
    <p><a href="/notes" class="text-blue-500">Go Back</a></p>
    <?php echo htmlspecialchars($note['body']); ?>
    <form class="mt-4" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?php echo $note['id']; ?>">
      <button type="submit" class="bg-red-500 hover:bg-red-800 text-white py-2 px-4">
        Delete Note
      </button>
    </form>
  </div>
</main>

<?php require_once base_path('public/views/partials/foot.php'); ?>