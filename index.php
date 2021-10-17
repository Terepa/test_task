<?php
include "./includes/class-autoload.inc.php";
require_once("./templates/header.php");
require_once("./objects/product.php");
require_once("./objects/view_type.php");
require_once("./objects/view_products.php");
?>
<nav class="navbar navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand">Product list</a>
    <div>
      <a class="btn btn-primary me-2" href="addproduct.php">ADD</a>
      <button class="btn btn-primary me-2" id="delete-product-btn" value="MASS DELETE" onclick=massDelete()>MASS DELETE</button>
    </div>
  </div>
</nav>

<div class="row row-cols-1 row-cols-md-4 g-3">

  <?php
  $database = new Dbh();
  $db = $database->connect();

  $view = new viewProducts($db);
  $view->productsView();
  ?>

</div>

<script src="./js/massDelete.js"></script>

<?php
require_once("./templates/footer.php");
?>
