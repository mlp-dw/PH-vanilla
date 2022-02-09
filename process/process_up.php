<?php
session_start();


    if(isset($_POST['like']) && !empty($_POST['like'])
    && isset($_SESSION['id'])  && !empty($_SESSION['id'])
    ) {	
            // ON CONNECTE A LA BDD
            include "../utils/connexion_bdd.php";
        
            date_default_timezone_set('Europe/Paris');
            $today= date("Y-m-d H:i:s"); //format pour la bdd


        
       // $pdoStmnt = $mysqlConnection->prepare("INSERT INTO likes (user_id, product_id, up, comment, created_at) VALUES (?,?,?,?,?)");
       // $isSuccess = $pdoStmnt->execute([$_SESSION['id'],  , $_POST["content"], $today]);
    
                    
        if (!$isSuccess) {
            header("Location: ../tchat.php?error=Echec d'envoi"); 
        }else{
            header("Location: ../tchat.php?success=Message bien envoyé !");
        }

   
    }else{
        header("Location: ../tchat.php?error=Problème avec le message.");
    }
    

?>