<?php

use Beginners\Database\Database;
use Beginners\functions\Validator;

$config = require_once base_path('App/functions/config.php');
$errors = [];

// ========== classes ============
$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // call string from Validate.php, check string length
  if (!Validator::string($_POST['body'], 1, 100)) {
    $errors['body'] = 'A body of no more than 1,000 character is required';
  }

  if (empty($errors)) {

    $query = "INSERT INTO notes (user_id, body) VALUES (:user_id, :body)";
    $db->query($query, [
      ':user_id' => 1,
      ':body' => $_POST['body']
    ]);
  }
}


views('notes/create.view.php', [
  'heading' => 'My Notes',
  'errors' => $errors
]);
