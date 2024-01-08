<?php

use Beginners\Database\Database;

$heading = 'New Note';
$config = require_once __DIR__ . '/../functions/config.php';
require_once __DIR__ . '/../functions/bootstrap.php';
$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $query = "INSERT INTO notes (user_id, body) VALUES (:user_id, :body)";
  $db->query($query, [
    ':user_id' => 1,
    ':body' => $_POST['body']
  ]);
}

require_once 'views/note_create.view.php';
