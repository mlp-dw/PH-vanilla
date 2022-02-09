<?php
session_start();


    if(isset($_POST['content']) && !empty($_POST['content'])
    && isset($_SESSION['id'])  && !empty($_SESSION['id'])
    ) {	
            // ON CONNECTE A LA BDD
            include "../utils/connexionBDD.php";
        
            date_default_timezone_set('Europe/Paris');
            $today= date("Y-m-d H:i:s"); //format pour la bdd
        
        //$pdoStmnt = $mysqlConnection->prepare("INSERT INTO messages (user_id, date_time, adress_ip, content) VALUES (?,?,?,?)");
      //  $isSuccess = $pdoStmnt->execute([$_SESSION['id'], $today, $_SERVER["REMOTE_ADDR"], $_POST["content"]]);
    
                    
        if (!$isSuccess) {
            header("Location: ../tchat.php?error=Echec d'envoi"); 
        }else{
            header("Location: ../tchat.php?success=Message bien envoyé !");
        }

   
    }else{
        header("Location: ../tchat.php?error=Problème avec le message.");
    }
    

?>