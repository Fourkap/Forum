<?php
include ("includes/header.php");
require('functions.php');
require('function_forum.php');

  
   $get_id = ($_GET['id_t']);
   
   
      $topic = $bdd->prepare('SELECT * FROM topics WHERE id_t = ?');
      $topic->execute(array($get_id));
      $topic = $topic->fetch();
     
   



if(isset($_POST['topic_reponse_submit'],$_POST['topic_reponse'])) {
         $reponse = htmlspecialchars($_POST['topic_reponse']);
         if(isset($_SESSION['id_u'])) {
            if(!empty($reponse)) {
               $ins = $bdd->prepare('INSERT INTO posts(id_t,id_u,contenu,date_p) VALUES (?,?,?,NOW())');
               $ins->execute(array($get_id,$_SESSION['id_u'],$reponse));
               $reponse_msg = "Votre réponse a bien été postée";
               unset($reponse);
            } else {
               $reponse_msg = "Votre réponse ne peut pas être vide !";
            }
         } else {
            $reponse_msg = "Veuillez vous connecter ou créer un compte pour poster une réponse";
         }
}


if(isset($_GET['page']) AND $_GET['page'] > 1) {
         $reponsesParPage = 10;
      } else {
         $reponsesParPage = 10;
      }
      $reponsesTotalesReq = $bdd->prepare('SELECT * FROM posts WHERE id_t = ?');
      $reponsesTotalesReq->execute(array($get_id));
      $reponsesTotales = $reponsesTotalesReq->rowCount();
      $pagesTotales = ceil($reponsesTotales/$reponsesParPage);
      if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales) {
         $_GET['page'] = intval($_GET['page']);
         $pageCourante = $_GET['page'];
      } else {
         $pageCourante = 1;
      }
      $depart = ($pageCourante-1)*$reponsesParPage;
      $reponses = $bdd->prepare('SELECT * FROM posts WHERE id_t = ? LIMIT '.$depart.','.$reponsesParPage);
      $reponses->execute(array($get_id));


$reponses = $bdd->prepare('SELECT * FROM posts WHERE id_t = ? LIMIT '.$depart.','.$reponsesParPage);
$reponses->execute(array($get_id));

	require('topic.view.php');
?>