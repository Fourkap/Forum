<?php include"includes/header.php";

if(!isset($_SESSION['connecte']) || $_SESSION['lvl'] < 2)
{
	header("Location:login.php");
	die();
}
?>




<?php 

	if(isset($_GET['id_u']))
	{
		$requete = $bdd->query("DELETE FROM users WHERE id_u = ".$_GET['id_u']);
	}


	$requete = $bdd->query("SELECT * FROM users");
	
	while($reponse = $requete->fetch())
	{
		echo $reponse['login']." <a href='admin.php?id_u=".$reponse['id_u']."'>X</a><br>";
	}

	 ?>