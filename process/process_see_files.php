<?php
// ON CONNECTE A LA BDD
include "C:\laragon\www\product-hunt\utils\connexion_bdd.php";

// VOIR LES FICHIERS
$seeData = $mysqlConnection->query("SELECT images, name, category, description, up, comment
										FROM products
										JOIN likes
											ON products.id=likes.product_id
										ORDER BY products.created_at ASC
										");
$files = $seeData->fetchAll();

	echo json_encode($files);
	
?>