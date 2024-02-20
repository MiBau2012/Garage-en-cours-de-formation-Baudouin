<?php
    session_start();
    include('../bd/connexionBD.php'); // Fichier PHP contenant la connexion à votre BDD
 
    // S'il y a une session alors on ne retourne plus sur cette page  
    if (isset($_SESSION['id'])){
        header('Location: ../connexion/loginPostAd.php');
        exit;
    }
 
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
         extract($_POST);
        $valid = true;
 
    if (isset($_POST['connexion'])){
         $mail = htmlentities(strtolower(trim($mail)));
         $mdp = trim($mdp);
 
            if(empty($mail)){ // Vérification qu'il y ait bien un mail de renseigné
                $valid = false;
                $er_mail = "Veuillez saisir votre adresse mail";
            }
 
            if(empty($mdp)){ // Vérification qu'il y ait bien un mot de passe de renseigné
                $valid = false;
                $er_mdp = "Veuillez saisir votre mot de passe";
            }

             // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
            $req = $DB->query("SELECT *
                FROM utilisateurs
                WHERE mail = ? AND mdp = ?",
                array($mail, crypt($mdp, '$6$rounds=5000$saltandpepperforevert$')));
            $req = $req->fetch();
 
            // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
             if ($valid){
                $_SESSION['id'] = $req['id']; // id de l'utilisateur unique pour les requêtes futures
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
 
                header('Location: ../connexion/loginPostAd.php');
                exit;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

</head>

<body>    
    <!--la barre de navigation-->
    <div class="navbar sticky-top navbar-expand-md bg-body">
                     
        <a class="navbar-brand" href="#"><img src="../assets/images/logo-garage.png"  alt="Logo du garage" class="img-fluid rounded" width="100" height="100"></a>
        
        <div class="ms-auto">   
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link pe-5 active" aria-current="page" href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../index.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../occasions.php">Occasions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../avis.php">Avis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../index.php#blochoraires">Horaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="login.php">Connexion</a>
                    </li>
                </ul>
            </div>
    </div>
    
    
  
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider:'>'">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-danger">Accueil</a></li>
            <li class="breadcrumb-item active">Connexion</li>
        </ol>
    </nav>
    
    <!--Début du formulaire de connexion-->
    <div class="container">
        <h1 class="m-5 p-2 text-center">Espace professionnel</h1>
            <h2 class="text-center">Formulaire de connexion</h2>
     <section id="connexion" style="background-color: #efefef;">
            
            <form method="POST">
                <div class="row col-12">
                    <div class="col-9 m-3">
                    <?php
                        if (isset($er_mail)){
                     ?>
                        <div><?= $er_mail ?></div>
                     <?php
                        }
                    ?>
                        <label for="mail" class="form-label">Saisissez votre adresse e-mail</label>
                        <input type="email" class="form-control" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required> <br>
                    </div>
                    <div class="col-5 m-3">

                    <?php
                         if (isset($er_mdp)){
                     ?>
                        <div><?= $er_mdp ?></div>
                    <?php
                        }
                    ?>
                        <label for="password" class="form-label">Saisissez votre mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required> <br>
                    </div>
                    <div class="col-12 m-3 d-flex justify-content-center">
                        <button class="btn btn-light" type="submit" name="connexion">Se connecter</button>
                    </div>
                </div>
            </form>
    
    </section>
   </div> 
   <!--Fin du formulaire-->
    
 

    <script src="../assets/bootstrap.bundle.min.js"></script>
</body>

</html>




