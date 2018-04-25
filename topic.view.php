<div class="col-md-12">
 <h2><?= $topic['titre_c'] ?></h2>
  <div class=" table table-striped" style="margin-bottom: 1.5rem !important; margin-top: 1.5rem !important; padding-left: 2rem !important;">     
  <table class="table table-striped">
   <tr class="header">
      <th class="sub-info w10">Auteur</th>
      <th class="main center"> <?= $topic['titre_c'] ?></th>
   </tr>
   <tr>
   	<td><td><?= $topic['description'] ?></td></td>
   </tr>
   <tr>
      <?php while($r = $reponses->fetch()){ ?>
      	
      <td><?= get_pseudo($r['id_u']) ?></td>
      <td><?= $r['contenu'] ?></td>
  </tr>
  <?php } ?>
</table>

<?php
  for($i=1;$i<=$pagesTotales;$i++) {
     if($i == $pageCourante) {
        echo $i.' ';
     } else {
        echo '<a href="topic.php?id_t='.$get_id.'&page='.$i.'">'.$i.'</a> ';
			 
			
     }
     }
		
  
 ?>


<?php if(isset($_SESSION['id_u'])) { ?>
   <form method="POST">
      <textarea placeholder="Votre réponse" name="topic_reponse" style="width:80%">
      <?php if(isset($reponse)) { echo $reponse; } ?></textarea><br />
      <input type="submit" name="topic_reponse_submit" value="Poster ma réponse"></form>
   </form>
   <?php if(isset($reponse_msg)) { echo $reponse_msg; } ?>
<?php } else { ?>
   <p>Veuillez vous connecter ou créer un compte pour poster une réponse</p>
<?php } ?>

</div>
</div>
<?php include ("includes/footer.php"); ?> 