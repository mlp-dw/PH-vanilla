<?php
// ON CONNECTE A LA BDD
//include "C:\laragon\www\product-hunt\utils\connexion_bdd.php";
include "D:/laragon/www/PRODUCT-HUNT-main/utils/connexion_bdd.php";

$sqlcategory = 'SELECT * FROM categorys';
$pdo = $mysqlConnection->query($sqlcategory);
$categorys = $pdo->fetchAll();

// SELCTION DES LIKES EN FONCTION DES ID PRODUIT
for ($i=0; $i < count($categorys); $i++) { 
	
	$seeLikes = $mysqlConnection->query("SELECT up
										 FROM likes
										 WHERE product_id = ' ". $categorys[$i]["id"] ."'
	");
	$likes = $seeLikes->fetchAll();
	$categorys[$i]["likes"] = $likes;
	
}

// SELCTION DES COMMENTS EN FONCTION DES ID PRODUIT
for ($i=0; $i < count($categorys); $i++) { 
	
	$seeComments = $mysqlConnection->query("SELECT comment
										 FROM likes
										 WHERE product_id = ' ". $categorys[$i]["id"] ."'
	");
	$comments = $seeComments->fetchAll();
	$categorys[$i]["comments"] = $comments;
	
}

echo json_encode($categorys);

?>
