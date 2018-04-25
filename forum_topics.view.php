
 

   <div class="col-md-12">
   <h2>Listes des TOPICS </h2>
  <div class=" table table-striped" style="margin-bottom: 1.5rem !important; margin-top: 1.5rem !important; ">   
  <table class="table table-striped">
   <tr class="header">
      <th class="main">Sujet</th>
     
      
      
   </tr>
   <?php while($t = $topics->fetch()) { ?>
   <tr>
      <td class="main">
         <h4><a href="topic.php?id_t=<?= $t['id_t'] ?>"><?= $t['titre_c'] ?></a></a></h4>
      </td>
      
      
   </tr>
   <?php } ?>
   
   <a href="/Forum_AK/newtopic.php?categories=<?=$id_categorie ?>">Créer un nouveau topic</a>
	 </table>
</div>
</div>
  


<?php include ("includes/footer.php"); ?>
 

