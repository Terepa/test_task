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
<form method="POST" action="post.process.php" id="product_form">
  <div class="row">
    <div class="col-md-3">
      <label>SKU
        <input class="form-control" name="add-sku" id="sku" type="text" />
      </label>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <label>Name
        <input class="form-control" name="add-name" id="name" type="text" />
      </label>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <label>Price ($)
        <input class="form-control" name="add-price" id="price" type="number" min="0.00" step="0.01" />
      </label>
    </div>
  </div> <br>


  <!-- Tipe Swither -->
  <div class="col-md-4">
    <div class="input-group mb-3">
      <label class="input-group-text" for="productType" required>Type Switcher</label>
      <select class="form-select" id="productType" name="add-brand">
        <option value="">Choose...</option>
        <option value="FURNITURE">FURNITURE</option>
        <option value="BOOK">BOOK</option>
        <option value="DVD">DVD</option>
      </select>
    </div>
    <div id="paramHolder">
      <i>Select one of Product Type...</i>
    </div>
  </div>

  <div>
    <button type="button" id="saveButton" class="btn btn-primary me-2">Save</button>
    <a class="btn btn-primary me-2" href="index.php">Cancel</a>
  </div>

</form>

<script type="text/javascript">
  $("#productType").change(function() {
    $.post(
      "ajax_get_fieldset.php", {
        setid: $(this).val()
      },
      function(fieldset) {
        $("#paramHolder").html(fieldset);
      }
    );
  });

  $("#saveButton").click(function() {

    if ($("#sku").val().length < 2) {
      alert('SKU need to be at least 2 characters');
      $("#sku").focus();
      return;
    }

    $.post(
      "ajax_check_sku.php", {
        sku: $("#sku").val()
      },
      function(ret) {

        if (ret == 1) {
          alert('SKU already exists');
          $("#sku").focus();
          return;
        }

        if ($("#name").val().length < 2) {
          alert('Name need to be at least 2 characters');
          $("#name").focus();
          return;
        }

        if (!checkNumber($("#price").val())) {
          alert('Price is not like #.##');
          $("#price").focus();
          return;
        }

        if ($("#productType").val() == '') {
          alert("Please select Product Type!");
          return;
        }

        if ($("#productType").val() == 'FURNITURE') {


          if (!checkNumber($("#height").val())) {
            alert('Item height should be number...');
            $("#height").focus();
            return;
          }


          if (!checkNumber($("#width").val())) {
            alert('Item width should be number...');
            $("#width").focus();
            return;
          }

          if (!checkNumber($("#length").val())) {
            alert('Item length should be number...');
            $("#length").focus();
            return;
          }

        }

        if ($("#productType").val() == 'BOOK') {
          if (!checkNumber($("#weight").val())) {
            alert('Item weight should be number...');
            $("#weight").focus();
            return;
          }

        }
        if ($("#productType").val() == 'DVD') {

          if (!checkNumber($("#size").val())) {
            alert('Item size should be number...');
            $("#size").focus();
            return;
          }

        }
        $("#product_form").submit();
      }
    );


  });

  function checkNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n) && (parseFloat(n) > 0);
  }
</script>

<?php
require_once("./templates/footer.php");
?>