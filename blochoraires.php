<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bloc Horaires Garage</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="horaire.js" defer></script>
</head>
<body>
  <div class="container text-center mt-5" id="blochoraires">
    
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <h2>Nous contacter </h2>
                    <p>adresse : 25, Avenue Bellevue 31500 Toulouse</p>
                    <a href="mailto:garage.parrot@gmail.com" target="_blank">garage.parrot@gmail.com</a>
                    <p>téléphone : XX XX XX XX XX</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.1084108621785!2d1.4609647999999997!3d43.625102500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebcb5b1130d25%3A0x50cce40502ff3007!2sAv.%20Bellevue%2C%2031500%20Toulouse!5e0!3m2!1sfr!2sfr!4v1707233920319!5m2!1sfr!2sfr" width="200" height="200
                    " style="border: 2px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="text-center">Nos horaires d'ouverture</h2>
                    <div id="horaires" class="table-responsive-md">
                    <!-- le tableau d'horaires -->
   
                    <table class="table table-warning table-striped table-hover table-bordered border-primary caption-top" id="schedule">
                    
                  </div>
                </div>
            </div>
    
                                  
                                     
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
</div>

<script src="assets/bootstrap.bundle.min.js"></script>
</body>

</html>