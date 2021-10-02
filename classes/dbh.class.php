<?php

class Dbh
{
  private $host;
  private $user;
  private $pwd;
  private $dbName;
  private $charset;

  public function connect()
  {
    $this->host = "remotemysql.com";
    $this->user = "NsJrfw5ErR";
    $this->pwd = "t5ySGQwak2";
    $this->dbName = "NsJrfw5ErR777";
    $this->charset = "utf8mb4";

    try {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName  . ';charset=' . $this->charset;
      $pdo = new PDO($dsn, $this->user, $this->pwd);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}
