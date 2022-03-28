<?php
include "C:\laragon\www\product-hunt\utils\connexion_bdd.php";

$seeData = $mysqlConnection->query("SELECT *
									FROM categories						
									");
$categories = $seeData->fetchAll();


echo json_encode($categories);

?>
