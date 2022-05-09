<?php 
// connexion a la base de donnée
try{$mysqlConnection = new PDO(
    'mysql:host=141.94.22.233;dbname=mlpdwwb_product_hunts;charset=utf8', // serveur;base de donnée; encodage de caractère
    'mlpdwwb', // mon compte à moi pour me connecter au serveur
    'mlpdwwb' // mon mot de passe pour me connecter au serveur
);
$mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (\Throwable $th) {
    die('erreur db');
}

?>
