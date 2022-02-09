<?php
if(isset($_POST['search']) && !empty($_POST['search']))
{
    $_POST["search"] = htmlspecialchars($_POST["search"]); //pour empêcher l'execution de balise
    $select = $mysqlConnection->prepare("SELECT * FROM products WHERE description LIKE ? OR name LIKE ?");
    $select->execute([$_POST["search"]."%" , $_POST["search"]."%"]);

    if (!$select) {
        header("Location: ../liste-patient.php?error=Echec lors de la recherche"); 
    }else{
    }
    ?>