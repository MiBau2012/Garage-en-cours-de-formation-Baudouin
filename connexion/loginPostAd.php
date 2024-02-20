<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Espace Administrateur</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!--la barre de navigation-->
    <nav class="navbar sticky-top navbar-expand-lg bg-body">
        <div class="container">
           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link pe-5" aria-current="page" href="../index.php" target= "_blank">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../index.php#services" target= "_blank">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../occasions.php" target= "_blank">Occasions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../avis.php" target= "_blank">Avis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../contact.php" target= "_blank">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="../index.php#blochoraires" target= "_blank">Horaires </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pe-5" href="login.php">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Fin de la barre de navigation-->


    
        <h1 class="text-center">Espace administrateur du site Garage V. Parrot</h1>
        
            <h2>Modifier le tableau d'horaires</h2>
   
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                        }
    
                table, th, td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: center;
                         }
    
                form {
                     margin-bottom: 20px;
                    }
            </style>
    
    
    
    <form action="formTime.php" id="horaireForm" method="GET">
        <label for="jour">Choisir un jour :</label>
        <select id="jour" name="jour">
            <option value="lundi">lundi</option>
            <option value="mardi">mardi</option>
            <option value="mercredi">mercredi</option>
            <option value="jeudi">jeudi</option>
            <option value="vendredi">vendredi</option>
            <option value="samedi">samedi</option>
        </select>
        <label for="heurem">Saisir l'horaire matin :</label>
        <input type="text" id="heurem" name="heurem" placeholder="HH:MM - HH:MM" required>
        <label for="heures">Saisir l'horaire soir :</label>
        <input type="text" id="heures" name="heures" placeholder="HH:MM - HH:MM" required>
        <button type="submit">Modifier</button>
    </form>
    
    
        <div class="col-12 col-md-6">
            <h2 class="text-center">Nos horaires d'ouverture</h2>
            <div id="horaires" class="table-responsive-md ">
            <table class="table table-warning table-striped table-hover table-bordered border-primary" id="schedule">
            <?php 
     // Paramètres de connexion à la base de données
    $serveur = "localhost";
    $user = "root";
    $pass = "";
    $bd = "garage";                    
                        
    $mysqli = new mysqli($serveur, $user, $pass, $bd);
                        
    //echo $mysqli->host_info . "\n";
                          
    $sql = "SELECT * FROM horaires;";              
    $resultat = $mysqli->query($sql);
    //echo  $resultat ;
    $mysqli->close();
                        
    // Afficher les données de la table dans le tableau HTML
    if ($resultat->num_rows > 0) {
        while ($row = $resultat->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["days"] . "</td>";
                echo "<td>" . $row["time_am"] . "</td>";
                echo "<td>" . $row["time_pm"] . "</td>";
    // Ajoutez plus de colonnes si nécessaire
                echo "</tr>";
                          }
          } else {
           echo "<tr><td colspan='3'>Aucune donnée trouvée dans la table</td></tr>";
                 }
    ?>  
    </table>  
        </div>  
    <div>
           
   
    <!--Suite de la page non faite-->
           
     <div>    
            <h2>Suite de la page en travaux</h2>
            <h3>Modifier les services de réparation</h3>
            <h3>Générer un compte pour un nouvel employé</h3>
            <h3>Générer un compte pour un administrateur</h3>
            <h3>Approuver un témoignage</h3>
            <h3>Ajouter un témoignage approuvé</h3>
            <h3>Ajouter de nouvelles voitures</h3>
    </div>       
       
    





    <script src="../assets/bootstrap.bundle.min.js"></script>
    




</body>

</html>