<?php 
  require_once("./templates/header.php");
  include "./includes/class-autoload.inc.php";

?>
<!-- <form method="POST" action="post.process.php"> -->
<form method="POST" action="post.process.php">

  <nav class="navbar navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand">Product Add</a>
    </div>
  </nav>

      <!-- form input -->
      <form method="POST" action="post.process.php">
          <div class="form-group">
            <label>SKU </label>
            <input class="form-control" name="add-sku" type="text" required>
          </div>
          <div class="form-group">
            <label>Name </label>
            <textarea class="form-control"  name="add-name" required></textarea>
          </div>
          <div class="form-group">
            <label>Price ($) </label>
            <input class="form-control" name="add-price" type="text" required>
          </div> <br>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Type Switcher</label>
            <select class="form-select" id="inputGroupSelect01" name="add-brand">
                <option selected></option>
                <option name="add-brand" value="DVD"  data-bs-toggle="collapse"  data-bs-target="#DVD" >DVD</option>
                <option name="add-brand" value="Book">Book</option>
                <option name="add-brand" value="Furniture">Furniture</option>
            </select>
            <div class="collapse" id="DVD">
            <div class="card card-body">
              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
          </div>
          </div>
          <div>
              <button type="submit" name="submit" class="btn btn-primary me-2">Save</button>
              <a href="http://localhost/test_task/index.php" class="btn btn-primary">Cancel</a>
          </div>

          
        </form>

<?php 
  require_once("./templates/footer.php");
?>