<?php $config = require_once BASE_PATH . '/App/functions/config.php' ?>
<?php


?>

<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/nav.php'; ?>
<?php require_once 'partials/banner.php'; ?>

<main>
  <!-- COMPONENT CODE -->
  <div class="container mx-auto my-4 px-4 lg:px-20">
    <form method="POST">
      <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
        <div class="my-4">
          <textarea id="body" name="body" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" placeholder="Type what is in you mind..."></textarea>
        </div>
        <div class="my-2 w-1/2 lg:w-1/4">
          <button type="submit" class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
            Save
          </button>
        </div>
      </div>
    </form>

  </div>


</main>
<?php require_once 'partials/foot.php'; ?>