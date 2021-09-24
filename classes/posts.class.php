<?php 

class Posts extends Dbh {
  public function getPost() {
    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function addPost($sku, $name, $price, $brand) {
    $sql = "INSERT INTO posts(sku, name, price, brand) VALUES (?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$sku, $name, $price, $brand]);
  }


  public function massDeletePosts(array $ids) 
  {
    $sql = "DELETE FROM posts WHERE id IN (?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([implode(',', $ids)]);

  }
}