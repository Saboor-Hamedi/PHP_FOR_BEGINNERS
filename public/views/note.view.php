<?php $config = require_once BASE_PATH . '/App/functions/config.php' ?>
<?php


?>

<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/nav.php'; ?>
<?php require_once 'partials/banner.php'; ?>

<main>
  <div class="mx-auto max-w-7-xl py-6 sm:px-6 lg:px-8">
    <h5>Welcome back to your notes</h5>
    <p><a href="/notes" class="text-blue-500">Go Back</a></p>
    <form class="max-w-sm mx-auto">

      <div class="mb-5">
        <input type="text" id="note_id" name="note_id" value="<?php echo $note['id'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write User ID" required>
      </div>
      <div class="mb-5">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Content</label>
        <textarea id="message" name="body_paragraph" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."><?php echo $note['body'] ?></textarea>
      </div>
      <div class="flex items-start mb-5">
      </div>
      <button type="submit" name="edit_note" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

  </div>
</main>

<?php require_once 'partials/foot.php'; ?>