<?php
require_once '../App/Router/router.php';

$db =  new Database($config['database']);
$posts = $db->query('select * from posts where id >1');

foreach ($posts as $post) {
  echo '<li>' . $post['title'] . '</li>';
}
