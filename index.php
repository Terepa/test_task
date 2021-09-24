<?php 
  include "./includes/class-autoload.inc.php";
  require_once("./templates/header.php");
  if (isset($_POST['delete'])) { 
   print_r($_POST['postToDelete']);
   
   
  }
?>
    <form method="POST">
      <input type="hidden" name="delete" value="1">
      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand">Product List</a>
            <a class="btn btn-primary me-2" href="addproduct.php">ADD</a>
            <button class="btn btn-primary me-2" id="delete-product-btn" type="submit">MASS DELETE</button>
        </div>
      </nav>



<div class="row row-cols-1 row-cols-md-4 g-3">
  <?php 
    $posts = new Posts();
    if (isset($_POST['delete']) && !empty($_POST['postToDelete'])) { 
      $posts->massDeletePosts($_POST['postToDelete']);
  }
    if($posts->getPost()) {
      foreach($posts->getPost() as $post) {
        echo '<div class="col">';
        echo '<div class="card text-center">';
        echo "<input type='checkbox' name='postToDelete[]' class='delete-checkbox' value= ". $post['id'] ."  >";
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

</form>
<?php 
  require_once("./templates/footer.php");
?>