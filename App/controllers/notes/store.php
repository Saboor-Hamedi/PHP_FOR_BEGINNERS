<?php
// this controller is responsible for storing data.
$config = require_once base_path('App/functions/config.php');

use Beginners\functions\Validator;
use Beginners\Database\Database;

$errors = [];
$db = new Database($config['database']);
// call string from Validate.php, check string length
if (!Validator::string($_POST['body'], 1, 100)) {
  $errors['body'] = 'A body of no more than 1,000 character is required';
}

if (!empty($errors)) {
  return views('notes/create.view.php', [
    'heading' => 'My Notes',
    'errors' => $errors
  ]);
}
$query = "INSERT INTO notes (user_id, body) VALUES (:user_id, :body)";
$db->query($query, [
  ':user_id' => 1,
  ':body' => $_POST['body']
]);
header('Location: /notes');
die();
