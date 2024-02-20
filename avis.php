<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ECF Baudouin Garage</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="scripts/rating.js" defer></script>

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
                    <a class="nav-link pe-5 active" href="#avis">Avis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-5" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-5" href="index.php#blochoraires">Horaires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-5 active" href="connexion/login.php" target= "_blank">Connexion</a>
                </li>
            </ul>
        </div>
    
</div> 

<nav aria-label="breadcrumb" style="--bs-breadcrumb-divider:'>'">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html" class="text-danger">Accueil</a></li>
        <li class="breadcrumb-item active">Avis</li>
    </ol>
</nav>


    <!--Début du formulaire-->
    <div class="container">
        <h2 class="p-2 text-center">Votre avis nous intéresse</h2>
            
     <section id="contact" style="background-color: #efefef;">
            
            <form action="">
                <div class="row col-12">
                    <div class="col-5 m-3">
                        <label for="votreNom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="votreNom" >
                    </div>
                    <div class="col-5 m-3">
                        <label for="votrePrenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="votrePrenom">
                    </div>
                    <div class="col-12 m-3">
                        <label for="votreAvis" class="form-label">Votre avis</label>
                        <textarea class="form-control" id="votreAvis" rows="4"></textarea>
                    </div>
                    
                    <div class="col-3 m-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" placeholder="JJ/MM/AAAA" required>
                    </div>
                    <div class="col-6 m-3">
                        <label for="note" class="form-label">Note</label>
                        <div id="rating" class="rating form-control";>
                            <div id="rating" class="rating text-center">
                                <input type="hidden" id="ratingValue" name="rating">
                                <i class="far fa-star" data-index="1"></i>
                                <i class="far fa-star" data-index="2"></i>
                                <i class="far fa-star" data-index="3"></i>
                                <i class="far fa-star" data-index="4"></i>
                                <i class="far fa-star" data-index="5"></i>
                            </div>
                        </div>                      
                    </div>
                    <div class="col-12 m-3 d-flex justify-content-center">
                    <button class="btn btn-light" type="submit"><a href="mailto:garage.parrot@gmail.com"></a>Soumettre</button>
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



