<?php
include "./includes/class-autoload.inc.php";
require_once("./templates/header.php");
<<<<<<< HEAD
require_once("./objects/product.php");
require_once("./objects/view_type.php");
require_once("./objects/view_products.php");
=======
>>>>>>> 8c3c32253f8a7f0bd50ff8c664f97aa7d99dd941
$param_prefix['Furniture'] = 'Dimensions';
$param_prefix['Book'] = 'Weight';
$param_prefix['DVD'] = 'Size';
$param_postfix['Furniture'] = '';
$param_postfix['Book'] = 'KG';
$param_postfix['DVD'] = 'MB';
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

<<<<<<< HEAD
  $view = new viewProducts($db);
  $view->productsView();
  ?>
=======
              if ($posts->getParams($post['id'])) {
                if ($post['brand'] == "Furniture") {
                  foreach ($posts->getParams($post['id']) as $params) {
                    $param_html .= $params['param_value'] . "x";
                  }
                  $param_html = substr($param_html, 0, -1);
                } else {
                  $params = $posts->getParams($post['id']);
                  $param_html .= $params[0]['param_value'];
                }
>>>>>>> 8c3c32253f8a7f0bd50ff8c664f97aa7d99dd941

  <<<<<<< HEAD </div>
    =======
    if ($posts->getParams($post['id'])) {
    if ($post['brand'] == "Furniture") {
    foreach ($posts->getParams($post['id']) as $params) {
    $param_html .= $params['param_value'] . "x";
    }
    $param_html = substr($param_html, 0, -1);
    } else {
    $params = $posts->getParams($post['id']);
    $param_html .= $params[0]['param_value'];
    }
    >>>>>>> 8c3c32253f8a7f0bd50ff8c664f97aa7d99dd941

    <script src="./js/massDelete.js"></script>

    <?php
    require_once("./templates/footer.php");
    ?>