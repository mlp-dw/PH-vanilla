<?php
include __DIR__ . '/../utils/connexion_bdd.php';

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

function showCountDislikes($mysqlConnection, $selected, $i){
    $seeDislikes = $mysqlConnection->query("SELECT *
                                         FROM dislikes
                                         WHERE product_id = ' ". $selected[$i]["id"] ."'
                                        ");
    $dislikes = $seeDislikes->fetchAll();
    return $dislikes;
}

if($isSearchProvided){
    
    $selected = showSearchingProduct($mysqlConnection);

    // SELCTION DES LIKES EN FONCTION DES ID PRODUIT
    for ($i=0; $i < count($selected); $i++) { 
        $likes = showCountLikes($mysqlConnection, $selected, $i);
        $selected[$i]["likes"] = $likes;
    }

    // SELCTION DES DILSKES EN FONCTION DES ID PRODUIT
    for ($i=0; $i < count($selected); $i++) { 
        $dislikes = showCountDislikes($mysqlConnection, $selected, $i);
        $selected[$i]["dislikes"] = $dislikes;
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
        $dislikes = showCountDislikes($mysqlConnection, $noSelection, $i);
        $noSelection[$i]["dislikes"] = $dislikes;
    }

	echo json_encode($noSelection);
}
?>