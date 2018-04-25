<?php
include ("includes/header.php");
require ("functions.php");

if(isset($_GET['categories']) AND !empty($_GET['categories'])) {
   $get_categorie = htmlspecialchars($_GET['categories']);
   $categories = array();
   $req_categories = $bdd->query('SELECT * FROM categories');
   while($c = $req_categories->fetch()) {
      array_push($categories, array($c['id_cat']));
   }
   foreach($categories as $cat) {
      if(in_array($get_categorie, $cat)) {
         $id_categorie = intval($cat[0]);
      }
   }

   if($id_categorie) {
      
      $req = "SELECT * FROM topics
            LEFT JOIN categories ON topics.id_cat = categories.id_cat
						WHERE categories.id_cat = ?";
            
		$exec_array = array($id_categorie);

     
      $req .= " ORDER BY topics.id_t DESC";
      
      $topics = $bdd->prepare($req);
		 $topics->execute($exec_array);
    
   } else {
      die('Erreur: Catégorie introuvable...');
   }
} else {
   die('Erreur: Aucune catégorie sélectionnée...');
}

require('forum_topics.view.php');
?>