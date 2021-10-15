<?php
class viewProducts extends Product
{
  function __construct($db)
  {
    parent::__construct($db);
  }

  public function productsView()
  {
    $arrProducts = $this->getProducts();

    foreach ($arrProducts as $products) {
      $id = $products['id'];
      $sku = $products['sku'];
      $name = $products['name'];
      $price =  $products['price'];
      $type = $products['type'];
      $attribute = $products['attribute'];
      $typeView = new $type();

      echo "
      <div class='col'>
          <div class='card product_card' id='{$id}'>
            <div class='checkbox_delete'>
              <input class='delete-checkbox ms-2' type='checkbox' name='' id=''>
            </div>
            <div class='product_info card-body text-center'>
              <p>{$sku}</p>
              <p>{$name}</p>
              <p>{$price} $</p>
              <p>{$typeView->typeHandler($attribute)}</p>
            </div>
      </div>
    </div>";
    }
  }
}
