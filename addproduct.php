<?php 
  require_once("./templates/header.php");
  include "./includes/class-autoload.inc.php";

?>


  <nav class="navbar navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand">Product Add</a>
    </div>
  </nav>

      <!-- form input -->
    <form method="POST" action="post.process.php">
        <div class="row">
          <div class="col-md-3">
            <label for="#sku">SKU </label>
            <input class="form-control" name="add-sku" type="text" id="#sku" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <label for="#name">Name </label>
            <input class="form-control" name="add-name" type="text" id="#name" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <label for="#price">Price ($) </label>
            <input class="form-control" name="add-price" type="text" id="#price" required>
          </div> 
        </div> <br>


          <!-- Tipe Swither -->
        <div class="col-md-4">
            <div id="#productType" class="input-group mb-3"> 
              <label class="input-group-text" for="#productType">Type Switcher</label>
                <select class="form-select" id="#productType" name="add-brand">
                  <option selected value>Choose...</option>
                  <option name="add-brand" value="FURNITURE">FURNITURE</option>
                  <option name="add-brand" value="BOOK">BOOK</option>
                  <option name="add-brand" value="DVD">DVD</option>
                </select>
            </div>

          <div class="dvd">
            <label for="#size">Size (MB)</label>
            <input type="text" class="form-control w-100" name="first_name" id="#size"/>
            <p>Please enter disk size in MB</p>
          </div>

          <div class="book"> 
            <label for="#weight">Weight (KG)</label>
            <input type="text" class="form-control w-100" name="fax_num" id="#weight"/>
            <p>Please enter book weight in KG</p>
          </div>

          <div class="furniture">
            <label for="#height">Height (CM)</label>
            <input type="text" class="form-control w-100" name="last_name" id="#height"/>
          </div>


          <div class="furniture"> 
            <label for="#width">Width (CM)</label>
            <input type="text" class="form-control w-100" name="website" id="#width"/>
          </div>

          <div class="furniture"> 
            <label for="#lenght">Lenght (CM)</label>
            <input type="text" class="form-control w-100" name="website" id="#lenght"/>
          </div>

          <div class="furniture"> 
            <p>Please provide dimensions in HxWxL format</p>
          </div>

        </div>
        
        <div>
          <button type="submit" name="submit" class="btn btn-primary me-2">Save</button>
          <a class="btn btn-primary me-2" href="http://localhost/test_task/">Cancel</a>
        </div>

    </form>

<?php 
  require_once("./templates/footer.php");
?>