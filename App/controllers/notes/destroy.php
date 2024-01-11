<?php
// this controllers is responsible for deleting data.
use Beginners\Database\Database;

$config = require_once base_path('App/functions/config.php');
$db = new Database($config['database']);
$currentUserId = 1;
$note = $db->query("SELECT * FROM notes WHERE  id = :id", [
  'id' => $_POST['id']
])->findOrFail();

// magic numbers, on func.php
authorized($note['user_id'] === $currentUserId);
$db->query('DELETE FROM notes WHERE id = :id', ['id' => $_POST['id']]);
header('Location: /notes');
exit();
