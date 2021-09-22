<?php 
  include "./includes/class-autoload.inc.php";
  require_once("./templates/header.php");
?>

<nav class="navbar navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand">Product List</a>
    <form class="d-flex">
      <a class="btn btn-primary me-2" href="addproduct.php">ADD</a>
      <button class="btn btn-primary me-2" type="submit">MASS DELETE</button>
    </form>
  </div>
</nav>



<div class="row row-cols-1 row-cols-md-4 g-3">
  <?php 
    $posts = new Posts();
    if($posts->getPost()) {
      foreach($posts->getPost() as $post) {
        echo '<div class="col">';
        echo '<div class="card text-center">';
        echo "<input type='checkbox' class='form-check-input pl-2' value= ". $post['id'] ."  >";
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>" . $post['sku'] . "</h5>";
        echo "<p class='card-title'>" . $post['name'] . "</p>";
        echo "<p class='card-title'>" . $post['price'] . "</p>";
        echo "<p class='card-title'>" . $post['brand'] . "</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
    }  else {
      echo "<p class='mt-5 mx-auto'>Post is empty...</p>";
    }
  ?>
</div>

<?php 
  require_once("./templates/footer.php");
?>