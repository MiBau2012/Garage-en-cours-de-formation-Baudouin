<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Occasions</title>
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
                        <a class="nav-link pe-5" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="index.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5 active" href="occasions.php">Occasions</a>
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
   
<!--Début du breadcrumb-->
    <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider:'>'"> 
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html" class="text-danger">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page" classe="text-light">Occasions</li>
        </ol>
    </nav>
<!--Fin du breadcrumb-->

<div id="Occasions">
 
<h1>PAGE EN TRAVAUX</h1>
 </div>

       

  <!--Inclusion du bloc horaires-->
<?php require 'blochoraires.php'; ?>


    <!--Inclusion du footer-->
<br>


<div class="container col-12 mt-5">
<?php require 'footer.html'; ?>_
</div>



    <script src="assets/bootstrap.bundle.min.js"></script>


</body>

</html>