<?php

use Beginners\Database\Database;

$heading = 'My Notes';
$config = require_once __DIR__ . '/../functions/config.php';
require_once __DIR__ . '/../functions/bootstrap.php';

$db = new Database($config['database']);
$query = "SELECT * FROM notes";
$results = $db->query($query)->fetchAll();


require_once 'views/notes.view.php';
