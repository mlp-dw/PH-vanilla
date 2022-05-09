<?php session_start(); 
$isPseudo = isset($_POST["pseudo"]) && !empty($_POST["pseudo"]);
$isPassword = isset($_POST["password"]) && !empty($_POST["password"]);
$pseudo = htmlspecialchars($_POST["pseudo"]);
$password = htmlspecialchars($_POST["password"]); 

function createSession($user){
    $_SESSION['pseudo'] = $user["pseudo"];
    $_SESSION['password'] = $user["password"];
    $_SESSION["id"] = $user["id"];

}

if($isPseudo && $isPassword){
    include "../utils/connexion_bdd.php";
     
    $pdoStmnt = $mysqlConnection->prepare("SELECT * FROM users WHERE pseudo = ? AND password = ?");
    $isSuccess = $pdoStmnt->execute([$pseudo, $password]);
    $user = $pdoStmnt->fetch();

    createSession($user);

    if (!$isSuccess) {
        header("Location: ../log.php"); 
    }else{
        header("Location: ../index.php");
    }
        
}else{
    header("Location: ../log.php");
}
?>