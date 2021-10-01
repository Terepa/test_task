<?php
include "./includes/class-autoload.inc.php";
$posts = new Posts();
echo $posts->checkSku($_POST['sku']);
