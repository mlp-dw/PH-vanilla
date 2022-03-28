<?php
include "C:\laragon\www\product-hunt\utils\connexion_bdd.php";
$isLanguageProvided = isset($_POST["groupByLanguage"]) && !empty($_POST["groupByLanguage"]);
$language = $_POST["groupByLanguage"];

function showProductsGroupedByLanguage($mysqlConnection, $language){

	$categorySelected = $mysqlConnection->prepare("SELECT *
										FROM products	
										WHERE category_id = ?					
										");
	$categorySelected->execute([$language]);
	$category = $categorySelected->fetchAll();
	return $category;
}

function showCountLikes($mysqlConnection, $category, $i){
    $seeLikes = $mysqlConnection->query("SELECT *
                                         FROM likes
                                         WHERE product_id = ' ". $category[$i]["id"] ."'
                                        ");
    $likes = $seeLikes->fetchAll();
    return $likes;
}

function showCountComment($mysqlConnection, $category, $i){
    $seeComments = $mysqlConnection->query("SELECT *
                                         FROM comments
                                         WHERE product_id = ' ". $category[$i]["id"] ."'
                                        ");
    $comments = $seeComments->fetchAll();
    return $comments;
}

if($isLanguageProvided){
    
    $category = showProductsGroupedByLanguage($mysqlConnection, $language);

    // SELCTION DES LIKES EN FONCTION DES ID PRODUIT
    for ($i=0; $i < count($category); $i++) { 
        $likes = showCountLikes($mysqlConnection, $category, $i);
        $category[$i]["likes"] = $likes;
    }

    // SELCTION DES COMMENTS EN FONCTION DES ID PRODUIT
    for ($i=0; $i < count($category); $i++) { 
        $comments = showCountComment($mysqlConnection, $category, $i);
        $category[$i]["comments"] = $comments;
    }

 	echo json_encode($category);
// }else{
//     echo "nope";
}	
?>
