<?php include "includes/header.php"; 

	
	
	
	if(isset($_POST['submit']))
	{
		$requete = $bdd->query("UPDATE users SET
								login = '".$_POST['login']."',
								mdp = '".sha1($_POST['mdp'])."',
								prenom = '".$_POST['prenom']."',
								nom = '".$_POST['nom']."',
								email = '".$_POST['email']."',
								adresse = '".$_POST['adresse']."'
								WHERE id_u = ".$_SESSION['id_u']);
		
		echo '<div class="alert alert-success">
  <strong>Vos informations ont été mis a jour, Veuillez vous reconectez pour que cela prenne effet</strong> 
</div>';
	



if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
   $tailleMax = 2097152;
   $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
   if($_FILES['avatar']['size'] <= $tailleMax) {
      $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
      if(in_array($extensionUpload, $extensionsValides)) {
         $chemin = "users/avatar/".$_SESSION['id_u'].".".$extensionUpload;
         $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
         if($resultat) {
            $updateavatar = $bdd->prepare('UPDATE users SET avatar = :avatar WHERE id_u = :id_u');
            $updateavatar->execute(array(
               'avatar' => $_SESSION['id_u'].".".$extensionUpload,
               'id_u' => $_SESSION['id_u']
               ));
           
         } else {
            $msg = "Erreur durant l'importation de votre photo de profil";
         }
      } else {
         $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
      }
   } else {
      $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
   }
}
}

$requete = $bdd->query("SELECT * FROM users WHERE id_u = ".$_SESSION['id_u']);
	$reponse = $requete->fetch();
?>





<div class="container">
	<div class="py-5 text-center">
		
		<h2>Editer Mon profil</h2>

	</div>

	<div class="row">

		<div class="col-md-12">

			<form method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
				<div class="row">
					
					<div class="col-md-12 mb-12">
						<label for="prenom"><br>Prénom</label>
						<input type="text" class="form-control" id="fn" value="" name="prenom" placeholder="<?= $reponse['prenom']; ?>" required>

					</div>
					
					
					<div class="col-md-12 mb-12">
						<label for="nom"><br>Nom</label>
						<input type="text" class="form-control" id="Ln" value="" name="nom" placeholder="<?= $reponse['nom']; ?>" required>

					</div>
					
					<div class="col-md-12 mb-12">
						<label for="login"><br>Login</label>
						<input type="text" class="form-control" id="firstName" value="" name="login" placeholder="<?= $reponse['login']; ?>" required>

					</div>
					<div class="col-md-12 mb-12">
						<label for="mdp"><br>Mot de passe</label>
						<input type="password" class="form-control" id="lastName" placeholder="Mot de passe" value="" name="mdp" required>

					</div>
					<div class="col-md-12 mb-12">
						<label for="adresse"><br>Adresse</label>
						<input type="text" class="form-control" id="lastName" value="" name="adresse" placeholder="<?= $reponse['adresse']; ?>" required>

					</div>

					<div class="col-md-12 mb-12">
						<label for="email"><br>email</label>
						<input type="text" class="form-control" id="lastName" value="" name="email" placeholder="<?= $reponse['email']; ?>" required>

					</div>
					
					<div class="col-md-12 mb-12">
						<label for="avatar"><br>avatar</label><br>
						<input type="file" name="avatar">
					</div>

				</div>



				<hr class="mb-12">
				<button class="btn btn-primary btn-lg btn-block bouton-inscription" type="submit" name="submit">Mettre a jour mes informations</button>
			</form>
		</div>
	</div>


</div>

<?php include "includes/footer.php"; ?>
