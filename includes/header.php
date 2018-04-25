<?php session_start();
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=forum;charset=utf8","root","root");
	}
	catch(Exception $e)
	{
		die("erreur de connexion");
	}
?>

 



<!DOCTYPE html>


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   
    <img class="navbar-brand"style="width: 27px;" src="images/Apple_logo_black.png">
    <a class="navbar-brand" href="index.php">Apple Developper Forum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
         
               
	<?php if (isset($_SESSION['avatar']))
	{
		echo 
	"<img class='navbar-brand' style='width: 40px; height: 40px; border-radius: 50%;' src='users/avatar/".$_SESSION['avatar']."'>";
	}

?>
	
	
            
<?php if(isset($_SESSION['connecte']))
    

	
{
	echo "<li class='compteprenom nav-link '><a href='account.php'>".$_SESSION['prenom']." ".$_SESSION['nom']."</a></li>"; 	
	echo "<li class='nav-link'><a href='logout.php'>Se déconnecter</a></li>";
	
	


	}
	

							else
							{
								echo "<li class='nav-link'><a href='login.php'>Se connecter</a></li>";
								
								echo "<li class='nav-link'><a href='signup.php'>S'inscrire</a></li>";
							}

	?>
      
        
         
         
         
          </ul>
        </div>
      </div>
    </nav>