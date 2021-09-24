<?php 

  include "./includes/class-autoload.inc.php";

  $posts = new Posts();
  
  if(isset($_POST['submit'])) {
    $sku = $_POST['add-sku'];
    $name = $_POST['add-name'];
    $price = $_POST['add-price'];
    $brand = $_POST['add-brand'];
  
    $posts->addPost($sku, $name, $price, $brand);
  
    header("location: {$_SERVER['HTTP_ORIGIN']}/test_task/index.php?status=added");
  
 
    }
    
   