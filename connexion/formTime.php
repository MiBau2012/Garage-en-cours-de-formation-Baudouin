<?php

//$days=$_GET["jour"];
//$time_am=$_GET["heurem"];
//$time_pm=$_GET["heures"];


// Paramètres de connexion à la base de données
$serveur = "localhost";
$user = "root";
$pass = "";
$bd = "garage";

$mysqli = new mysqli($serveur, $user, $pass, $bd);

//echo $mysqli->host_info . "\n";
  


  $sql = "UPDATE horaires SET time_am = '".$_GET['heurem']."', time_pm = '".$_GET['heures']."' WHERE days='".$_GET['jour']."'";
$resultat = $mysqli->query($sql);
//echo  $resultat ;
$mysqli->close();
// Redirection vers une autre page PHP
header('Location: loginPostAd.php');
exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire


?>
