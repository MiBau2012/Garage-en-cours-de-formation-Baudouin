<?php
     session_start();
     include('../bd/connexionBD.php'); /*Fichier PHP contenant la connexion à votre BDD
 
    S'il y a une session alors on ne retourne plus sur cette page*/
    if (isset($_SESSION['id'])){
        header('Location: ../connexion/login.php');
     exit;
    }
    //Si la variable "$-post" contient des infos alors on les traite
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
 
        //On se place sur le bon formulaire grâce au "name" de la balise "input"
     if (isset($_POST['inscription'])){

         $nom = htmlentities(trim($nom)); // On récupère le nom
         $prenom = htmlentities(trim($prenom)); // on récupère le prénom
         $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
         $mdp = trim($mdp); // On récupère le mot de passe 
         $confmdp = trim($confmdp); //  On récupère la confirmation du mot de passe
 
        //  Vérification du nom
        if(empty($nom)){
        $valid = false;
        $er_nom = ("Le nom d' utilisateur ne peut pas être vide");
        }
 
        //  Vérification du prénom
         if(empty($prenom)){
            $valid = false;
            $er_prenom = ("Le prenom d' utilisateur ne peut pas être vide");
        }
 
        // Vérification du mail
        if(empty($mail)){
                $valid = false;
                $er_mail = "Le mail ne peut pas être vide";
 
            // On vérifie que le mail est dans le bon format
            }elseif(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $mail)){
                 $valid = false;
                $er_mail = "Le mail n'est pas valide";
 
             }else{
            // On vérifie que le mail est disponible    
             $req_mail = $DB->query("SELECT mail FROM utilisateurs WHERE mail = ?",
             array($mail));
 
             $req_mail = $req_mail->fetch();
 
             if ($req_mail['mail'] <> ""){
             $valid = false;
                 $er_mail = "Ce mail existe déjà";
                }
            }
 
                // Vérification du mot de passe
            if(empty($mdp)) {
                $valid = false;
                $er_mdp = "Le mot de passe ne peut pas être vide";
 
                 }elseif($mdp != $confmdp){
             $valid = false;
             $er_mdp = "La confirmation du mot de passe ne correspond pas";
              }
 
            // Si toutes les conditions sont remplies alors on fait le traitement
             if($valid){
 
             $mdp = crypt($mdp, "$6$rounds=5000$saltandpepperforevert$");
             $date_creation_compte = date('Y-m-d H:i:s');
 
            // On insert nos données dans la table utilisateur
             $DB->insert("INSERT INTO utilisateurs (nom, prenom, mail, mdp, date_creation_compte) VALUES
             (?, ?, ?, ?, ?)",
             array($nom, $prenom, $mail, $mdp, $date_creation_compte));
 
            header('Location: ../connexion/login.php');
             exit;
            }
        }
   }
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Inscription</title>
       <link rel="stylesheet" href="../assets/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
     </head>
      <body>
           
    <nav class="navbar sticky-top navbar-expand-lg bg-body">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
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
                        <a class="nav-link pe-5" href="login.php" target= "_blank">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



         <div class="container"><h2 class="text-center">Inscription à l'espace professionnel</h2>
         <p class="text-center">Formulaire de création de compte pour nouvel utilisateur</p>
        <form method="post">
            <div class="row col-12">
                    <div class="col-5 m-3">
                        <label for="nom" class="form-label">Nom</label>
                      <input type="text" class="form-control" placeholder="Nom" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>
        <?php
             if (isset($er_nom)){
                 ?>
                    <div><?= $er_nom ?></div>
                 <?php
                 }
             ?>
                    </div>
                    <div class="col-5 m-3">
                        <label for="prenom" class="form-label">Prénom</label>  
                        <input type="text" class="form-control" placeholder="Prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>" required>
             <?php
                if (isset($er_prenom)){
                ?>
                     <div><?= $er_prenom ?></div>
                <?php
                }
             ?>
                         
              </div>
              <div class="col-9 m-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
             <?php
                if (isset($er_mail)){
                 ?>
                     <div><?= $er_mail ?></div>
                 <?php
                 }
             ?>
            </div>
            
             </div>
              <div class="row col-12">
                <div class="col-5 m-3">
             <?php
                 if (isset($er_mdp)){
                 ?>
                     <div><?= $er_mdp ?></div>
                 <?php
                 }
             ?>
                      <label for="mdp" class="form-label">Saisissez un mot de passe</label>
                        <input type="password" class="form-control" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
                </div>
               <div class="col-5 m-3">
                        <label for="confmdp" class="form-label">Confirmez le mot de passe</label>
                        <input type="password" class="form-control" placeholder="Confirmez le mot de passe" name="confmdp" required>
               </div>
            </div>
                    <div class="col-12 m-3 d-flex justify-content-center">
                        <button class="btn btn-light" type="submit" name="inscription">Créer le compte</button>
                    </div>
            </div>
        </form>
        

    <script src="assets/bootstrap.bundle.min.js"></script>
</body>

</html>