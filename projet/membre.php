<!DOCTYPE html>
<html>
<head>

 	<meta charset="utf-8">	
	<title> VeschLab </title>


  	<link rel="stylesheet" href="css/styles.css">
  	<link rel ="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  	<link rel = "stylesheet" type="text/css" href="EspaceC.css">




</head>
<body>
	<section id = "nav">

		<div class = "container-fluid">
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<img src="Icon.JPG" alt="Image" height="50" width="50">
  			<a class="navbar-brand" href="Accueil.php">VeschLab</a>
  			<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
       					 <a class="nav-link" href="Patient.php">Patient</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="#">Professionnel</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="#">Covid-19</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="#">Laboratoires</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="Contact.php">Contacts</a>
      				</li>
    			</ul>
  			</div>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
 			</button>
		</nav>
    </section>

	<?php
	try
	{
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=compte;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
	        die('Erreur : '.$e->getMessage());
	}

	// On récupère tout le contenu de la table jeux_video
	$reponse = $bdd->query('SELECT * FROM compte');
	$reponse1 = $bdd->query('SELECT * FROM analyse');


	// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
	while ($donnees1 = $reponse1->fetch())
	{
	?>
	    <p>
	    <strong> <h1>Bonjour <?php echo $donnees['prenom'] ;?> <?php echo $donnees['nom']; ?> </h1> </strong><br/>
	   </p>

	   <p>
	   	<strong> <h3> Resultats des analyses effectué : </h3> </strong> <br/><br/> 
	   </p>

	   <div id = result>
		   <h4> Leucocytes : <?php echo $donnees1['Leucocytes']; ?> </h4>  <br/><br/> 

		   <h4> Hematies : <?php echo $donnees1['Hematies']; ?> </h4>  <br/><br/> 

		   <h4> Hemoglobine : <?php echo $donnees1['Hemoglobine']; ?> </h4>  <br/><br/> 
		</div>

	<?php
	}

	$reponse->closeCursor(); // Termine le traitement de la requête

	?>


	<footer>
		<p>VeschLab</p>
		<li>
			<a href="Contact.php">Contacts</a>
		</li>
	</footer>

</body>
</html>