<?php
require_once __DIR__ . '/../functions/func.php';

class Database
{
  public $connection; // proterty
  public function __construct()
  {
    $config = [
      'host' => 'db',
      'port' => '3306',
      'dbname' => 'blog',
      'username' => 'admin',
      'pass' => 'saboor123'
    ];


    $dsn = 'mysql:' . http_build_query($config, '', ';');
    // connect to PDO
    $this->connection = new \PDO($dsn, $config['username'], $config['pass'], [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($query)
  {

    $statement  = $this->connection->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
  }
}

$db =  new Database();
$posts = $db->query('select * from posts where id >1');

foreach ($posts as $post) {
  echo '<li>' . $post['title'] . '</li>';
}
