<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Contact</title>

	<link rel="stylesheet" href="css/styles.css">
  	<link rel ="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

	<link rel = "stylesheet" type="text/css" href="Contact.css">

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
		</div>
	</section>


        <div id="container">
            <!-- zone de connexion -->  
    		<p>
        		<h1>Quelle est votre besoin ?</h1>
            </p> 
        </div>	

        <div id = "requete">
               		<label><b>Votre identité</b></label></br>
                	<input type="text" placeholder=" Tomas Veschambre"><br>
                <p>
                	<label><b> Votre email (obligatoire)</b></label> </br>             	
                	<input type="password" placeholder="votremail@gmail.com"></br>
                </p>

                <p>
                	<label><b> Laboratoire des analyses</b></label> </br>    	
                	<input type="password" placeholder=""></br>
                </p>

                <p>
                	<label><b> Votre demande (obligatoire)</b></label>   </br>           	
                	<input type="password" placeholder=""></br>
                </p>


                <p>
                	<input type="submit" id='submit' value='Envoyer' >
           	 	</p>
        </div>

	<footer>
		<p>VeschLab</p>
		<li>
			<a href="Contact.php">Contacts</a>
		</li>
	</footer>



</body>
</html>