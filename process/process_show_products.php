<?php
include "C:\laragon\www\product-hunt\utils\connexion_bdd.php";

// VOIR LES FICHIERS
$seeData = $mysqlConnection->query("SELECT *
										FROM products
									ORDER BY created_at DESC
									");
$files = $seeData->fetchAll();

// SELCTION DES LIKES EN FONCTION DES ID PRODUIT
for ($i=0; $i < count($files); $i++) { 
	
	$seeLikes = $mysqlConnection->query("SELECT *
										 FROM likes
										 WHERE product_id = ' ". $files[$i]["id"] ."'
	");
	$likes = $seeLikes->fetchAll();
	$files[$i]["likes"] = $likes;
	
}

// SELCTION DES dislikes EN FONCTION DES ID PRODUIT
for ($i=0; $i < count($files); $i++) { 
	
	$seeDislikes = $mysqlConnection->query("SELECT *
										 FROM dislikes
										 WHERE product_id = ' ". $files[$i]["id"] ."'
	");
	$dislikes = $seeDislikes->fetchAll();
	$files[$i]["dislikes"] = $dislikes;
	
}

echo json_encode($files);
	
	
?>