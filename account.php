<?php include ("includes/header.php"); ?>
<?php
$requete = $bdd->query("SELECT * FROM users WHERE id_u = '".$_SESSION['id_u']."'");
$nomprenom = $_SESSION['prenom']." ".$_SESSION['nom'];
$date = $_SESSION['date_inscription'];
$PhpDate = strtotime($date);
$FormattedPhpDate = date('d M, Y', $PhpDate );
$email = $_SESSION['email'];
$login = $_SESSION['login'];
$avatar = $_SESSION['avatar'];

	
?>
	<br>
	<div class="container">
		<div class="py-5 text-center">
			
			<h2>Mon Profil</h2>
	<div class="col-lg-12 col-sm-12 text-center mb-4">
	<?php if (isset($_SESSION['avatar']))
	{
		echo "<img src='users/avatar/".$avatar."' class=' img-fluid d-block mx-auto' height=400 width=400  alt=''>";
	}
else
{
	echo "<img class='rounded-circle img-fluid d-block mx-auto' height=400 width=350 src='http://placehold.it/300x300' alt=''>";
}
?>
		<h3><br>Bonjour
			<?php echo $nomprenom;?> !</h3>
			<h5>Votre login est: <?php echo $login; ?></h5>
			<h5>Vous comptez parmi nos rangs depuis le <?php echo $FormattedPhpDate; ?>.</h5>
		<h5>Votre adresse e-mail est: <?php echo $email; ?></h5>
		<br>
		<a href="updateaccount.php" class="btn btn-outline-secondary">Editer mon Profil</a>

	</div>
		</div>
</div>
	<?php include ("Includes/footer.php"); ?>
