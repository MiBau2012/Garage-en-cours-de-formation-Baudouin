<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ECF Baudouin Garage</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="horaire.js" defer></script>

    
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
                        <a class="nav-link pe-5 active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="#services">Services</a>
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
                        <a class="nav-link pe-5" href="#blochoraires">Horaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="connexion/login.php" target= "_blank">Connexion</a>
                    </li>
                </ul>
            </div>
   
    </div>
    <!--Fin de la barre de navigation-->
<section>
    <div class="container col-12 mt-5">
        <h1 class="text-center ">Bienvenue au Garage V. Parrot</h1>
        <h2 class="text-center my-5">Votre satisfaction et votre sécurité sont notre priorité</h2>
        <hr class="m-3 invisible">
            <div class="row">
                <div class="col-md-6 ">
                  <img src="assets/images/mechanics.png" alt="V. Parrot et son collaborateur" class="img-fluid rounded justify-content-center" width="300px">
                </div>
                <div class="col-md-6 justify-content-start">
                    <h4>Fondé en 2021 par Vincent Parrot, notre garage automobile à Toulouse est le fruit de plus de 15 années
                         d'experience dans le domaine de la réparation automobile. Il est entouré d'une équipe de collaborateurs
                          performante qui saura vous offrir des services de réparation et d'entretien de qualité.
                          Nous prenons en charge votre véhicule, quelle que soit la marque, pour toute réparation, qu'il soit moteur essence, diesel, électrique ou hybride.
                    </h4>
                </div>
            </div>
    </div>
</section>    


<div id="services">
    <div class="container mt-5">
        <h2 class="text-center mb-5">Nos services</h2>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <img src="assets/images/bodywork.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center">Carrosserie</h5>
                        <ul class="card-text list-group list-group-flush">
                            <li class="list-group-item">Restauration, carrosserie et sellerie</li>
                            <li class="list-group-item">Lustrage et reconditionnement pour vente</li>
                            <li class="list-group-item">Chassimétrie (marbre SHARK 2000)</li>
                            <li class="list-group-item">Réparations aluminium et matériaux composites</li>
                            <li class="list-group-item">Débosselage sans peinture</li>
                            <li class="list-group-item">Vitrage</li>
                            <li class="list-group-item">Prêt d'un véhicule de courtoisie</li>
                          </ul></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <img src="assets/images/repair.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center">Mécanique</h5>
                        <ul class="card-text list-group list-group-flush">
                            <li class="list-group-item">Disques, plaquettes</li>
                            <li class="list-group-item">Courroie de distribution</li>
                            <li class="list-group-item">Echappement</li>
                            <li class="list-group-item">Amortisseurs</li>
                            <li class="list-group-item">Rotules, cardans</li>
                            <li class="list-group-item">Diagnotic</li>
                            <li class="list-group-item">Préparation au contrôle technique</li>
                          </ul></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <img src="assets/images/tyre.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center">Entretien</h5>
                        <ul class="card-text list-group list-group-flush">
                            <li class="list-group-item">Vente et montage pneus</li>
                            <li class="list-group-item">Géométrie, parallélisme</li>
                            <li class="list-group-item">Révision, vidange</li>
                            <li class="list-group-item">Filtration</li>
                            <li class="list-group-item">Freinage</li>
                            <li class="list-group-item">Entretien climatisation auto</li>
                            <li class="list-group-item">Batterie, éclairage</li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="avis" class="container text-center">
        <h2>Les avis</h2>
       
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col">  
                        <div class="p-3 bg-white">
                            <h3>Irréprochable. Je recommande!</h3>
                            <h5>Avril 2022</h5>
                            <p class="my-4">Paulette Pichon</p>
                            <p><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"></p>
                        </div>
                    </div>
                </div>
                    <div class="carousel-item">
                    <div class="col">  
                        <div class="p-3 bg-white">
                            <h3>Réparation rapide et véhicule prêté pendant 2 jours.</h3>
                            <h5>mai 2022</h5>
                            <p class="my-4">Auguste Bonnet</p>
                            <p><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"></p>
                        </div>
                    </div>
            </div>
            
            <div class="carousel-item">
                    <div class="col">  
                        <div class="p-3 bg-white">
                            <h3>Très bon garage, je recommande.</h3>
                            <h5>Décembre 2023</h5>
                            <p class="my-4">Estelle Duquey</p>
                            <p><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"></p>
                        </div>
                    </div>
            </div>
            <div class="carousel-item">
                    <div class="col">  
                        <div class="p-3 gx-5 bg-white">
                            <h3>Bon dépannage. Travail rapide et efficace! </h3>
                            <h5>Janvier 2024</h5>
                            <p class="my-4">Emile Turner</p>
                            <p><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"><img src="assets/images/star-fill.svg" alt="star-fill" width="20" height="20"></p>
                        </div>
                    </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
  </div>


 <!--Inclusion du bloc horaires-->
 <?php require 'blochoraires.php'; ?>

<!--Inclusion du footer-->

<br>

<?php require 'footer.html'; ?>_



    <script src="assets/bootstrap.bundle.min.js"></script>
</body>

</html>