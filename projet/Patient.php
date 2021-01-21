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

	<link rel = "stylesheet" type="text/css" href="Patient.css">

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



	<form class="box" action="" method="post" name="login">
	<h1 class="box-title">Connexion</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
	<input type="password" class="box-input" name="password" placeholder="Mot de passe">
	<input type="submit" value="Connexion " name="submit" class="box-button">
	<p class="box-register">Vous êtes nouveau ici? <a href="Nouveau.php">S'inscrire</a></p>
	<?php
	require('config.php');
	session_start();
	if (isset($_POST['username'])){
	  $username = stripslashes($_REQUEST['username']);
	  $username = mysqli_real_escape_string($conn, $username);
	  $password = stripslashes($_REQUEST['password']);
	  $password = mysqli_real_escape_string($conn, $password);
	    $query = "SELECT * FROM `compte` WHERE username='$username' and password='".hash('sha256', $password)."'";
	  $result = mysqli_query($conn,$query) or die(mysql_error());
	  $rows = mysqli_num_rows($result);
	  if($rows==1){
	      $_SESSION['username'] = $username;
	      header("Location: membre.php");
	  }else{
	    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	  }
	}
	?>	
	<?php if (! empty($message)) { ?>
	    <p class="errorMessage"><?php echo echec; ?></p>
	<?php } ?>
	</form>




	<footer>
		<p>VeschLab</p>
		<li>
			<a href="Contact.php">Contacts</a>
		</li>
	</footer>


</body>
</html>