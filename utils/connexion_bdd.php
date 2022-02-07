<?php 
// connexion a la base de donnée
try{$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=product_hunts;charset=utf8', // serveur;base de donnée; encodage de caractère
    'root', // mon compte à moi pour me connecter au serveur
    '' // mon mot de passe pour me connecter au serveur
);
$mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (\Throwable $th) {
    die('erreur db');
}

?>
