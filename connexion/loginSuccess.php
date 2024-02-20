<?php //document inutile pour l'instant//

session_start();
    include('../bd/connexionBD.php'); // Fichier PHP contenant la connexion à votre BDD

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Accueil</h1>
    <?php
        if(isset($_SESSION['id'])){
            ?>
            <a href="Déconnexion.php">Déconnexion</a>
            <?php
        }else{
            ?>
            <a href="inscription.php">Se connecter</a>
            <a href="seconnecterdev.php">Se connecter</a>
            <?php
        }
    ?>

    <?php
        if(isset($_SESSION['ID'])){
                echo 'ID : ' .  $_SESSION['id'] . ',Nom : ' . $_SESSION['nom'] . ', Prénom : ' . $_SESSION['prenom'] . ', mail : ' . $_SESSION['mail']
        }

    ?>


</body>
</html>