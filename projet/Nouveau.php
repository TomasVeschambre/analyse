<!DOCTYPE html>
<html>
<head>
	<title>VeschLab</title>

  	<link rel ="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  	<link rel = "stylesheet" type="text/css" href="Nouveau.css">


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

    <section id = "corps">
    	<div class ="row">
      		<div class = "col-lg-6">
      			<div>
        			<h1> Bienvenue </h1>
      			</div>

      			<p>
      				<h3> Entrez vos identifiant ci-desosus </h3>
      			</p>
  	</section>

  		<div id = "connexion">
			<div class = "row">
				<div class = "col-lg-6">
				            <!-- zone de connexion --> 
				    
				        <form id= "Connexion" action="controller.php" method="POST">
				            <p>
				            	<h1>Inscription</h1>
				            </p>
				           		<label><b>Nom</b></label>
				            </br>
				            	<input type="text" placeholder="Entrez votre nom" name="nom" required>
				            <p>
				            	<label><b>Prenom</b></label>  </br>              	
				            	<input type="text" placeholder="Prenom" name="prenom" required>
				            </p>
				           		<label><b>Sexe</b></label>
				            </br>
				            	<input type="text" placeholder="H/F" name="sexe" required>
				            <p>
				            	<label><b>Adresse</b></label>  </br>              	
				            	<input type="text" placeholder="Adresse mail" name="adresse" required>
				            </p>
				           		<label><b>Nom d'utilisateur</b></label>
				            </br>
				            	<input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
				            <p>
				            	<label><b>Mot de passe</b></label>  </br>              	
				            	<input type="password" placeholder="Entrer le mot de passe" name="password" required>
				            </p>
				            <p>
				            	<input type="submit" value='S inscrire' >
				       	 	</p>
				       	 </form>
				    
			</div>
		</div>
	</div>

	<footer>
		<p>VeschLab</p>
		<li>
			<a href="Contact.php">Contacts</a>
		</li>
	</footer>



</body>
</html>