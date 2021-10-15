<?php
require_once("./templates/header.php");
?>


<nav class="navbar navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand">Product Add</a>
  </div>
</nav>

<!-- form input -->
<form method="POST" action="./php/new_product.php" id="product_form">
  <div class="row">
    <div class="col-md-3">
      <label for="sku">SKU
        <input class="form-control" name="sku" id="sku" type="text" pattern="^[a-zA-Z0-9]*$" required />
      </label>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <label for="name">Name
        <input class="form-control" name="name" id="name" type="text" pattern="^[a-zA-Z]*$" required />
      </label>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <label for="price">Price ($)
        <input class="form-control" name="price" id="price" type="text" pattern="^[0-9]*$" required />
      </label>
    </div>
  </div> <br>


  <!-- Tipe Swither -->
  <div class="col-md-4">
    <div class="input-group mb-3">
      <label class="input-group-text" for="Type-Switcher" required>Type Switcher</label>
      <select class="form-select" id="productType" name="Type-Switcher">
        <option value="">Choose...</option>
        <option id="furniture" value="furniture">FURNITURE</option>
        <option id="book" value="book">BOOK</option>
        <option id="dvd" value="dvd">DVD</option>
      </select>
    </div>
    <div id="type" class="type">
    </div>
  </div>

  <div>
    <button type="submit" id="saveButton" class="btn btn-primary me-2">Save</button>
    <a class="btn btn-primary me-2" href="index.php">Cancel</a>
  </div>

</form>


<script src="./js/type.js"></script>

<?php
require_once("./templates/footer.php");
?>