<?php
include ("includes/header.php");



if(isset($_GET['categories']))
{
	$get_categorie = htmlspecialchars($_GET['categories']);
	$categorie = $bdd->prepare('SELECT * FROM categories WHERE id_cat = ?');
	$categorie->execute(array($get_categorie));
	$categorie = $categorie->fetch();
	$categorie =$categorie['titre'];

/* Traitement du formulaire de création de Topic */
if(isset($_SESSION['id_u'])) {
   if(isset($_POST['submit'])) {
		 $titre = $_POST['titre'];
		 $description = $_POST['description'];
		 
		 if(!empty($_POST['titre']) AND !empty($_POST['description']))
		 {
		 	$requete = $bdd->query("INSERT INTO topics(titre_c,description,id_cat) VALUES('$titre', '$description',$get_categorie)");
			 echo '<div class="alert alert-success">
  <strong>OK</strong> 
</div>';
		 }
	 }
}
	}else{
		echo "Aucune categorie";
	}


?>
<div class="container">
	<div class="py-5 text-center">

<div class="col-md-12">
<h2>Nouveau Topic</h2>
<div class="row">

		<div class="col-md-12">
<form method="POST">
   <table>
      <div class="col-md-12 mb-12">
      <tr>
         <td>Sujet</td>
         <td><input type="text" name="titre"/></td>
      </tr>
		 </div>
      <div class="col-md-12 mb-12">
        <tr>
         <td>Catégorie</td>
         <td>
            <?= $categorie ?>
         </td>
      </tr>
		 </div>
     <div class="col-md-12 mb-12">
      <tr>
         <td>Message</td>
         <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea></td>
      </tr>
		 </div>
     
      <tr>
         <td colspan="2"><input type="submit" name="submit" value="Poster le Topic" /></td>
      </tr>
      <?php if(isset($terror)) { ?>
      <tr>
         <td colspan="2"><?= $terror ?></td>
      </tr>
      <?php } ?>
   </table>
</form>
</div>
	</div>
</div>
	</div>
</div>


<?php include ("includes/footer.php"); ?>