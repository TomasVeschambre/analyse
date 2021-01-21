  <?php
    // Vérifie qu'il provient d'un formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //identifiants mysql
      require('config.php');
      
      $prenom = $_POST["prenom"];
      $nom = $_POST["nom"];
      $sexe = $_POST["sexe"];
      $email = $_POST["email"];
      $username = $_POST["username"];
      $password = $_POST["password"];  

      //Ouvrir une nouvelle connexion au serveur MySQL
      $mysqli = new mysqli($host, $username, $password, $database);
      
      //Afficher toute erreur de connexion
      if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
      }  
      
      //préparer la requête d'insertion SQL
      $statement = $mysqli->prepare("INSERT INTO compte (nom, prenom, sexe, email, username, password) VALUES(?, ?, ?, ?, ?, ?)"); 
      //Associer les valeurs et exécuter la requête d'insertion
      $statement->bind_param('ss', $name, $email); 
      
      if($statement->execute()){
        print "Salut " . $name . "!, votre adresse e-mail est ". $email;
      }else{
        print $mysqli->error; 
      }
    }
  ?>