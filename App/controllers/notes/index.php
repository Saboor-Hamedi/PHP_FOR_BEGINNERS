<?php
// this controller is responsible for showing all data
use Beginners\Database\Database;

$config = require_once base_path('App/functions/config.php');
$db = new Database($config['database']);
$query = "SELECT * FROM notes ORDER BY created_at DESC ";
$results = $db->query($query)->get();


views('notes/index.view.php', [
  'results' => $results,
  'heading' => 'My Notes',
]);
