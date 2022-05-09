<?php
$isPseudoProvided = isset($_POST['pseudo']) && !empty($_POST['pseudo']);
$pseudo = htmlspecialchars($_POST["pseudo"]);
$password = htmlspecialchars($_POST["password"]);

function pseudoExist($mysqlConnection, $pseudo){
    $pseudo_verification = $mysqlConnection->prepare("SELECT * FROM users WHERE pseudo = ?");
    $pseudo_verification->execute([$pseudo]);
    $user = $pseudo_verification->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function createUser($mysqlConnection, $pseudo, $password){
    $pdoStmnt = $mysqlConnection->prepare("INSERT INTO users (pseudo, password, created_at) VALUES (?, ?, ?)");
    $isSuccess = $pdoStmnt->execute([$pseudo, $password, date('Y-m-d H:i:s')]);
    return $isSuccess;
}

if ($isPseudoProvided){ 
    include __DIR__ . '/../utils/connexion_bdd.php';
    
    $user = pseudoExist($mysqlConnection, $pseudo);  
    if($user){
        header("Location: ../register.php?error=Ce pseudo existe déjà !");
    }else{
        $isSuccess = createUser($mysqlConnection, $pseudo, $password);               
        if (!$isSuccess) {
            header("Location: ../register.php"); 
        }else{
            header("Location: ../log.php");
        }
    }     
}
else{
    header("Location: ../register.php"); 
}

?>