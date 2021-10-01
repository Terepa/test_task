<?php

include "./includes/class-autoload.inc.php";

$posts = new Posts();

if (isset($_POST['add-sku'])) {
  $sku = $_POST['add-sku'];
  $name = $_POST['add-name'];
  $price = $_POST['add-price'];
  $brand = $_POST['add-brand'];
  $params = $_POST['param'];

  $post_id = $posts->addPost($sku, $name, $price, $brand);
  if ($post_id != 0) {
    foreach ($params as $id => $value) {
      $posts->addParams($post_id, $id, $value);
    }
  }
  header("location: index.php?status=added");
}
