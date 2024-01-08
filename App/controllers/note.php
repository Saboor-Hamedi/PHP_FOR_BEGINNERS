<?php

use Beginners\Database\Database;
use Beginners\functions\Response;

$heading = 'My Notes';
$config = require_once __DIR__ . '/../functions/config.php';
require_once __DIR__ . '/../functions/bootstrap.php';

$db = new Database($config['database']);
$note = $db->query("SELECT * FROM notes WHERE  id = :id", [
  'id' => $_GET['id']
])->fetch();
// check if the id is not from current user
if (!$note) {
  abort();
}
// magic numbers
$currentUserId = 1;
if ($note['id'] !== $currentUserId) {
  abort(Response::FORBIDDEN);
}

require_once 'views/note.view.php';
