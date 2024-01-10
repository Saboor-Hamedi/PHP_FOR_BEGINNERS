<?php

use Beginners\Database\Database;


$config = require_once base_path('App/functions/config.php');

$currentUserId = 1;

$db = new Database($config['database']);
$note = $db->query("SELECT * FROM notes WHERE  id = :id", [
  'id' => $_GET['id']
])->findOrFail();

// magic numbers, on func.php
authorized($note['user_id'] === $currentUserId);

views('notes/show.view.php', [
  'note' => $note,
  'heading' => 'My Notes',
]);
