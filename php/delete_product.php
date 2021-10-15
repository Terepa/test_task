<?php
require_once("../objects/product.php");
require_once("../classes/dbh.class.php");

$database = new Dbh();
$db = $database->connect();

$product = new Product($db);

if (isset($_POST['toDelete']) and $_POST['toDelete'] != "") {
	$elementsToDelete = $_POST['toDelete'];
	$elementsIndividual = explode("-", $elementsToDelete);
	foreach ($elementsIndividual as $element) {
		$elementMap = explode("_", $element);
		$product->delete($element);
	}
	header("Location: ../index.php");
	exit;
}
header("Location: ../index.php");
exit;
