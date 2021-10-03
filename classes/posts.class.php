<?php

class Posts extends Dbh
{
  public function getPost()
  {
    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function checkSku($sku)
  {
    $sql = "SELECT 1 as OK FROM posts WHERE sku = ? limit 1";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$sku]);
    $result = $stmt->fetch();
    return (@$result['OK'] ? 1 : 0);
  }

  public function getParams($post_id)
  {
    $sql = "SELECT * FROM post_vals where post_id = ? ORDER BY param_name";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$post_id]);
    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function addPost($sku, $name, $price, $brand)
  {
    $sql = "INSERT INTO posts(sku, name, price, brand) VALUES (?, ?, ?, ?)";
    $pdo = $this->connect();
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$sku, $name, $price, $brand]);
    return $pdo->lastInsertId();
  }

  public function addParams($post_id, $param_name, $param_value)
  {
    $sql = "INSERT INTO post_vals(post_id, param_name, param_value) VALUES (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$post_id, $param_name, $param_value]);
  }


  public function massDeletePosts(array $ids)
  {
    $sql = "DELETE FROM posts WHERE id IN (" . str_repeat("?,", count($ids) - 1) . "?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute($ids);
  }
}
