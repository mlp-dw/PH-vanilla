<?php
include "C:\laragon\www\product-hunt\utils\connexion_bdd.php";
//include "D:/laragon/www/PRODUCT-HUNT-main/utils/connexion_bdd.php";

if(isset($_POST['search']) && !empty($_POST['search']))
{
    $_POST['search'] = htmlspecialchars($_POST['search']); //pour empêcher l'execution de balise

    $select = $mysqlConnection->prepare("SELECT * 
                                         FROM products 
                                         WHERE name LIKE ? OR description LIKE ?
    ");
    $select->execute([$_POST['search'].'%' , $_POST['search'].'%']);
    $selected = $select->fetchAll();


        // SELCTION DES LIKES EN FONCTION DES ID PRODUIT
        for ($i=0; $i < count($selected); $i++) { 

        $seeLikes = $mysqlConnection->query("SELECT up
                                            FROM likes
                                            WHERE product_id = ' ". $selected[$i]["id"] ."'
        ");
        $likes = $seeLikes->fetchAll();
        $selected[$i]["likes"] = $likes;

        }

        // SELCTION DES COMMENTS EN FONCTION DES ID PRODUIT
        for ($i=0; $i < count($selected); $i++) { 

        $seeComments = $mysqlConnection->query("SELECT comment
                                                FROM likes
                                                WHERE product_id = ' ". $selected[$i]["id"] ."'
        ");
        $comments = $seeComments->fetchAll();
        $selected[$i]["comments"] = $comments;

        }


	echo json_encode($selected);
}
?>