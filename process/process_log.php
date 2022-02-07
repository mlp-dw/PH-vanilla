<?php

//on teste si tous les champs du formulaire sont remplits
if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo'])	
    )
    {
    // ON SE CONNECTE A LA BDD
        
    include "../utils/connexion_bdd.php";
        
    // ON VERIFIE QUE LE PSEUDO N'EXISTE PAS DÉJà
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $password = htmlspecialchars($_POST["password"]);  

    $pseudo_verification = $mysqlConnection->prepare("SELECT * FROM users WHERE pseudo = ?");
    $pseudo_verification->execute([$pseudo]);

    $user = $pseudo_verification->fetch(PDO::FETCH_ASSOC);
            
    if($user){
        header("Location: ../register.php?error=Ce pseudo existe déjà !");
    }
    //---------------------------------------------------------------------------------------------
    // SINON ON LE CREE
    else{

        $pdoStmnt = $mysqlConnection->prepare("INSERT INTO users (pseudo, password, created_at) VALUES (?, ?, ?)");
        $isSuccess = $pdoStmnt->execute([$pseudo, $password, date('Y-m-d H:i:s')]);
                    
        if (!$isSuccess) {
            header("Location: ../register.php?error=Echec lors de la connexion à votre compte"); 
        }else{
            header("Location: ../index.php?success=Bienvenue sur votre compte !");
        }
    
    }
        
}
else{
    header("Location: ../register.php?error=Le formulaire n'est pas valide"); 
}

?>