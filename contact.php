<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>    
    <!--la barre de navigation-->
    <div class="navbar sticky-top navbar-expand-md bg-body">
                     
        <a class="navbar-brand" href="#"><img src="assets/images/logo-garage.png"  alt="Logo du garage" class="img-fluid rounded" width="100" height="100"></a>
        
        <div class="ms-auto">   
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link pe-5 active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="index.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="occasions.php">Occasions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="avis.php">Avis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="index.php#blochoraires">Horaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="connexion/login.php" target= "_blank">Connexion</a>
                    </li>
                </ul>
            </div>
        
    </div>
    
    
  
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider:'>'">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="text-danger">Accueil</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
    </nav>
    
    <!--Début du formulaire-->
    <div class="container">
        <h2 class="p-2 text-center">CONTACTEZ-NOUS( formulaire encore en travaux)</h2>
            <p class="text-center">Nous vous répondrons dans les plus brefs délais.</p>
     <section id="contact" style="background-color: #efefef;">
            
            <form action="" method="POST">
  <?php include('connexion/contactpost.php'); ?>

                  <div class="row col-12">
                    <div class="col-5 m-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                    <div class="col-5 m-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" name="prenom">
                    </div>
                    <div class="col-9 m-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email"
                            placeholder="(champ obligatoire)" required>
                    </div>
                    <div class="col-5 m-3">
                        <label for="telephone" class="form-label">Numéro de téléphone</label>
                        <input type="text" class="form-control" name="telephone" placeholder="ex 01-23-45-67-89" required>
                    </div>
                    <div class="col-9 m-3">
                        <label for="objet" class="form-label">Objet</label>
                        <input type="text" class="form-control" name="objet">
                            
                    </div>
                    <div class="col-12 m-3">
                        <label for="message" class="form-label">Votre message</label>
                        <textarea class="form-control" name="message" rows="4"></textarea>
                    </div>
                    <div class="col-12 m-3 d-flex justify-content-center">
                        <button class="btn btn-light" name="submit" type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
    
    </section>
   </div> 
   <!--Fin du formulaire-->
    
    <!--Inclusion du bloc horaires-->
<?php require 'blochoraires.php'; ?>

    <!--Inclusion du footer-->


<div class="container col-12 mt-5">
<?php require 'footer.html'; ?>_
</div>

    <script src="assets/bootstrap.bundle.min.js"></script>
</body>

</html>