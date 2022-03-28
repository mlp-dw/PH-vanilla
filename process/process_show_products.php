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

// SELCTION DES COMMENTS EN FONCTION DES ID PRODUIT
for ($i=0; $i < count($files); $i++) { 
	
	$seeComments = $mysqlConnection->query("SELECT *
										 FROM comments
										 WHERE product_id = ' ". $files[$i]["id"] ."'
	");
	$comments = $seeComments->fetchAll();
	$files[$i]["comments"] = $comments;
	
}

echo json_encode($files);
	
	
?>