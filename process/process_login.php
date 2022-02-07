<?php session_start(); 
 
// ON CONNECTE L'UTILISATEUR A SA SESSION--SON COMPTE

if(
    isset($_POST["pseudo"]) && !empty($_POST["pseudo"]) && isset($_POST["password"]) && !empty($_POST["password"])
    )
    {
       
        // ON SE CONNECTE A LA BDD
        
        include "../utils/connexion_bdd.php";
        
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $password = htmlspecialchars($_POST["password"]); 
       
        $pdoStmnt = $mysqlConnection->prepare("SELECT * FROM users WHERE pseudo = ? AND password = ?");
        $isSuccess = $pdoStmnt->execute([$pseudo, $password]);

        $user = $pdoStmnt->fetch();

        $_SESSION['pseudo'] = $user["pseudo"];
        $_SESSION['password'] = $user["password"];
        $_SESSION["id"] = $user["id"];

        if (!$isSuccess) {
            header("Location: ../log.php?error=Echec lors de la connexion à votre compte"); 
        }else{
            header("Location: ../index.php?success=Bienvenue sur votre compte !");
        }
        
    }
else{
    header("Location: ../log.php?error=Echec lors de la connexion");

}


?>