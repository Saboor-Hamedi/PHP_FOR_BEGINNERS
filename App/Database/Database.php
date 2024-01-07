<?php
require_once __DIR__ . '/../functions/func.php';
$host = 'db';
$port = '3306';
$db = 'blog';
$username = 'admin';
$pass = 'saboor123';
// connect to PDO
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=UTF8";
$pdo = new \PDO($dsn, $username, $pass);
$statement  = $pdo->prepare('select * from posts');
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $x) {
  echo '<li>' . $x['title'];
}
