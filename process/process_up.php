<?php
session_start();
$isUserProvided = isset($_SESSION['id'])  && !empty($_SESSION['id']);
$isProductProvided = isset($_POST['product_id'])  && !empty($_POST['product_id']);


function setDateZone(){
    date_default_timezone_set('Europe/Paris');
    $today= date("Y-m-d H:i:s"); //format pour la bdd
    return $today;
}

function addLike($mysqlConnection, $today){
    $pdoStmnt = $mysqlConnection->prepare("INSERT INTO likes (user_id, product_id, up, created_at) 
                                           VALUES (?,?,?,?) 
                                        ");
    $isSuccess = $pdoStmnt->execute([$_SESSION['id'], $_POST["product_id"], 1, $today]);
    return $isSuccess;
}

if($isUserProvided && $isProductProvided) {	
    include __DIR__ . '/../utils/connexion_bdd.php';
        
    $today = setDateZone();
    $isSuccess = addLike($mysqlConnection, $today);
    if (!$isSuccess) {
        header("Location: ../index.php"); 
    }else{
        header("Location: ../index.php");
    }
}else{
    header("Location: ../index.php");
}
    
?>


