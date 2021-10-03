<?php
include "./includes/class-autoload.inc.php";
require_once("./templates/header.php");
$param_prefix['Furniture'] = 'Dimensions';
$param_prefix['Book'] = 'Weight';
$param_prefix['DVD'] = 'Size';
$param_postfix['Furniture'] = '';
$param_postfix['Book'] = 'KG';
$param_postfix['DVD'] = 'MB';
?>


<form method="POST">
  <input type="hidden" name="delete" value="1">
  <nav class="navbar navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand">Product list</a>
      <div>
        <a class="btn btn-primary me-2" href="addproduct.php">ADD</a>
        <button class="btn btn-primary me-2" id="delete-product-btn" type="submit">MASS DELETE</button>
      </div>
    </div>
  </nav>

  <div class="row row-cols-1 row-cols-md-4 g-3">
    <?php
    $posts = new Posts();
    if (isset($_POST['delete']) && !empty($_POST['postToDelete'])) {
      $posts->massDeletePosts($_POST['postToDelete']);
    }
    if ($posts->getPost()) {
      foreach ($posts->getPost() as $post) {
    ?>
        <div class="col">
          <div class="card text-center">
            <input type='checkbox' name='postToDelete[]' class='delete-checkbox' value="<?= $post['id']; ?>" />
            <div class="card-body">
              <p class='card-title'><?= $post['sku']; ?></p>
              <p class='card-title'><?= $post['name']; ?></p>
              <p class='card-title'><?= $post['price']; ?> $</p>
              <?php
              $param_html = @$param_prefix[$post['brand']] . ': ';

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

                $param_html .= ' ' . @$param_postfix[$post['brand']];
              }
              ?>
              <p class='card-title'><?= $param_html; ?></p>
            </div>
          </div>
        </div>
      <?php
      }
    } else {
      ?>
      <p class='mt-5 mx-auto'>Post is empty...</p>
    <?php
    }
    ?>
  </div>

</form>
<?php
require_once("./templates/footer.php");
?>