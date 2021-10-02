<?php

class Dbh
{
  public $host = "remotemysql.com";
  public $user = "NsJrfw5ErR";
  public $pwd = "t5ySGQwak2";
  public $dbName = "NsJrfw5ErR";
  public $charset = "utf8mb4";

  public function connect()
  {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName  . ';charset=' . $this->charset;
    $pdo = new PDO($dsn, $this->user, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
}
