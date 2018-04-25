
 <!-- Page Content -->

<br><br><br>
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-6">
        <div class="card ">
  <table class="table table-striped">
   <tr class="header">
      <th scope="col">Catégories</th>
      <th scope="col">Messages</th>
      <th scope="col">Dernier message</th>
   </tr>
   <?php
   while($c = $categories->fetch()) {
      
     
   ?>
   <tr>
      <td class="main">
         <h4><a href=""><?= $c['titre'] ?></a></h4>
         <p>
         
         </p>
      </td>
      <td class="sub-info">4083495</td>
      <td class="sub-info">04.12.2015 à 14h52<br />de PrimFX</td>
   </tr>
   <?php } ?>
</table>

				</div>
			</div>
</div>





