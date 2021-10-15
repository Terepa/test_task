<?php
require_once("../classes/dbh.class.php");
require_once("../objects/product.php");

$database = new Dbh();
$db = $database->connect();

if ($_POST) {
  $newObject = new $_POST['Type-Switcher']($db);

  if ($newObject->getSpecs($_POST)) {
    header('Location: ../index.php');
  } else {
    header('Location: /addproduct.php');
  }
}
