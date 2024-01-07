<?php

namespace Beginners\Database;

use PDO;

class Database
{
  public $connection; // proterty
  public function __construct($config)
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    // connect to PDO
    $this->connection = new PDO($dsn, $config['username'], $config['pass'], [
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
