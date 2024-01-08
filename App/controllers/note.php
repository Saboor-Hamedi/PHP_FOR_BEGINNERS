<?php

use Beginners\Database\Database;

$heading = 'My Notes';
$currentUserId = 1;
$config = require_once __DIR__ . '/../functions/config.php';
require_once __DIR__ . '/../functions/bootstrap.php';

$db = new Database($config['database']);
$note = $db->query("SELECT * FROM notes WHERE  id = :id", [
  'id' => $_GET['id']
])->findOrFail();

// magic numbers, on func.php
authorized($note['user_id'] === $currentUserId);

require_once 'views/note.view.php';
