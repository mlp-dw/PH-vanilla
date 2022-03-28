<?php
session_start();
$isUserProvided = isset($_SESSION['id'])  && !empty($_SESSION['id']);
$isProductProvided = isset($_POST['product_id'])  && !empty($_POST['product_id']);
$comment = htmlspecialchars($_POST['comment']);
$isCommentProvided = isset($comment)  && !empty($comment);


function setDateZone(){
    date_default_timezone_set('Europe/Paris');
    $today= date("Y-m-d H:i:s"); //format pour la bdd
    return $today;
}

function addComment($mysqlConnection, $today, $comment){
    $pdoStmnt = $mysqlConnection->prepare("INSERT INTO comments (user_id, product_id, comment, created_at) 
                                           VALUES (?,?,?,?) 
                                        ");
    $isSuccess = $pdoStmnt->execute([$_SESSION['id'], $_POST["product_id"], $comment, $today]);
    return $isSuccess;
}

if($isUserProvided && $isProductProvided) {	
    
    include "../utils/connexion_bdd.php";
        
    $today = setDateZone();
    $isSuccess = addComment($mysqlConnection, $today, $comment);
    if (!$isSuccess) {
        header("Location: ../index.php"); 
    }else{
        header("Location: ../index.php");
    }
}else{
    header("Location: ../index.php");
}
    
?>