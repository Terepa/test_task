<?php

class Dbh
{
  private $host = "remotemysql.com";
  private $user = "NsJrfw5ErR";
  private $pwd = "t5ySGQwak2";
  private $dbName = "NsJrfw5ErR";

  public function connect()
  {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
