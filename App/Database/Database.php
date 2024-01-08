<?php

namespace Beginners\Database;

use PDO;

class Database
{
  public $connection; // proterty
  public $statement;
  public function __construct($config)
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';');
    // connect to PDO
    $this->connection = new PDO($dsn, $config['username'], $config['pass'], [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
  public function query($query, $params = [])
  {
    $this->statement  = $this->connection->prepare($query);
    $this->statement->execute($params);
    return $this;
  }
  // fetchAll
  public function get()
  {
    return $this->statement->fetchAll(PDO::FETCH_ASSOC);
  }
  // fetch
  public function find()
  {
    return $this->statement->fetch();
  }

  // find or fail if not found id
  public function findOrFail()
  {
    $result = $this->find();
    if (!$result) {
      abort();
    }
    return $result;
  }
}
