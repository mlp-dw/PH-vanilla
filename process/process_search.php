<?php
//include "C:\laragon\www\product-hunt\utils\connexion_bdd.php";
include "D:/laragon/www/PRODUCT-HUNT-main/utils/connexion_bdd.php";

if(isset($_GET['search']) && !empty($_GET['search']))
{
    $_POST['search'] = htmlspecialchars($_GET['search']); //pour empêcher l'execution de balise
    $select = $mysqlConnection->prepare("SELECT * FROM products WHERE description LIKE ? OR name LIKE ?");

    $select->execute([$_GET['search'].'%' , $_GET['search'].'%']);
    $selected = $select->fetchAll();
    for ($i=0; $i < count($selected); $i++) { 
        $seeLikes = $mysqlConnection->query("SELECT up
                                             FROM likes
                                             WHERE product_id = ' ". $selected[$i]['id'] ."'
        ");
        $likes = $seeLikes->fetchAll();
        $selected[$i]["likes"] = $likes;
        
    }
    
    for ($i=0; $i < count($selected); $i++) { 
        
        $seeComments = $mysqlConnection->query("SELECT comment
                                             FROM likes
                                             WHERE product_id = ' ". $selected[$i]['id'] ."'
        ");
        $comments = $seeComments->fetchAll();
        $selected[$i]["comments"] = $comments;
        
    }
  
	echo json_encode($selected);
};
?>

