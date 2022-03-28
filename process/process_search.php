<?php
include "C:\laragon\www\product-hunt\utils\connexion_bdd.php";

$isSearchProvided = isset($_POST['search']) && !empty($_POST['search']);

function showSearchingProduct($mysqlConnection){

    $_POST['search'] = htmlspecialchars($_POST['search']); //pour empêcher l'execution de balise
    
    $select = $mysqlConnection->prepare("SELECT * 
                                         FROM products 
                                         WHERE name LIKE ? OR description LIKE ?
                                        ");
    $select->execute(['%'.$_POST['search'].'%' , '%'. $_POST['search'].'%']);
    $selected = $select->fetchAll();
    return $selected;
}

function showAllProducts($mysqlConnection){
    $select = $mysqlConnection->prepare("SELECT * 
                                         FROM products 
                                         ORDER BY created_at DESC
                                        ");
    $select->execute();
    $selectNone = $select->fetchAll();
    return $selectNone;
}

function showCountLikes($mysqlConnection, $selected, $i){
    $seeLikes = $mysqlConnection->query("SELECT *
                                         FROM likes
                                         WHERE product_id = ' ". $selected[$i]["id"] ."'
                                        ");
    $likes = $seeLikes->fetchAll();
    return $likes;
}

function showCountComment($mysqlConnection, $selected, $i){
    $seeComments = $mysqlConnection->query("SELECT *
                                         FROM comments
                                         WHERE product_id = ' ". $selected[$i]["id"] ."'
                                        ");
    $comments = $seeComments->fetchAll();
    return $comments;
}

if($isSearchProvided){
    
    $selected = showSearchingProduct($mysqlConnection);

    // SELCTION DES LIKES EN FONCTION DES ID PRODUIT
    for ($i=0; $i < count($selected); $i++) { 
        $likes = showCountLikes($mysqlConnection, $selected, $i);
        $selected[$i]["likes"] = $likes;
    }

    // SELCTION DES COMMENTS EN FONCTION DES ID PRODUIT
    for ($i=0; $i < count($selected); $i++) { 
        $comments = showCountComment($mysqlConnection, $selected, $i);
        $selected[$i]["comments"] = $comments;
    }

	echo json_encode($selected);
}else{
    $noSelection = showAllProducts($mysqlConnection);

    // SELCTION DES LIKES EN FONCTION DES ID PRODUIT
    for ($i=0; $i < count($noSelection); $i++) { 
        $likes = showCountLikes($mysqlConnection, $noSelection, $i);
        $noSelection[$i]["likes"] = $likes;
    }

    // SELCTION DES COMMENTS EN FONCTION DES ID PRODUIT
    for ($i=0; $i < count($noSelection); $i++) { 
        $comments = showCountComment($mysqlConnection, $noSelection, $i);
        $noSelection[$i]["comments"] = $comments;
    }

	echo json_encode($noSelection);
}
?>