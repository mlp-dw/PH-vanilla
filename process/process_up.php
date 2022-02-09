<?php
session_start();


if(isset($_SESSION['id'])  && !empty($_SESSION['id'])
&& isset($_POST['product_id'])  && !empty($_POST['product_id'])
    ) {	
            // ON CONNECTE A LA BDD
            include "../utils/connexion_bdd.php";
        
            date_default_timezone_set('Europe/Paris');
            $today= date("Y-m-d H:i:s"); //format pour la bdd
            
 
            $pdoStmnt = $mysqlConnection->prepare("INSERT INTO likes (user_id, product_id, up, comment, created_at) 
                                                VALUES (?,?,?,?,?) 
            ");
            $isSuccess = $pdoStmnt->execute([$_SESSION['id'], $_POST["product_id"], 1, "", $today]);
    
                    
            if (!$isSuccess) {
                header("Location: ../index.php?error=Echec d'envoi"); 
            }else{
                header("Location: ../index.php?success=Like envoyé !");
            }

   
    }else{
        header("Location: ../index.php?error=Problème avec le like.");
    }
    
?>


