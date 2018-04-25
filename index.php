<?php include("includes/header.php"); ?>
 <?php include("functions.php"); ?>

   <?php

$categories = $bdd->query('SELECT * FROM categories ORDER BY titre');

?>
<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image:url('images/Mac-Family.png') ">
            <div class="carousel-caption d-none d-md-block">
              <h3>Mac Family</h3>
              
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/macbook1.png')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Macbook pro</h3>
              
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/macpro.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Mac PRO</h3>
              
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
   <div class=" table table-striped" style="margin-bottom: 1.5rem !important; margin-top: 1.5rem !important; padding-left: 2rem !important;">     
  <table class="table table-striped" >
   <tr class="header">
      <th scope="col">Catégories</th>
      
      <th scope="col">Dernier message</th>
   </tr>
   <?php
   while($c = $categories->fetch()) {
      
     
   ?>
   <tr>
      <td class="main">
         
				<h5><a href="/Forum_AK/forum_topic.php?categories=<?= url_custom_encode($c['id_cat']) ?>"><?= $c['titre'] ?></a></h5>
        
        
         <p>
         
         <p>
         
         </p>
      </td>
      
      <td class="sub-info">25.03.2018 à 14h52<br />de Fourkap</td>
   </tr>
   <?php } ?>
</table>
</div>

				</div>
			

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4" style=" padding-right: 15rem !important;">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Recherche</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="recherche...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Aller</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Réseau sociaux</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="https://www.facebook.com">Facebook</a>
                    </li>
                    <li>
                      <a href="https://www.twitter.com">Twitter</a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com">Linkedin</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="https://www.instagram.com">Instagram</a>
                    </li>
                    <li>
                      <a href="https://www.snapchat.com">Snapchat</a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Apple</h5>
            <div class="card-body">
              Apple est une entreprise multinationale américaine qui conçoit et commercialise des produits électroniques grand public, des ordinateurs personnels et des logiciels informatiques. Parmi les produits les plus connus 
            </div>
          </div>

        </div>
</div>

      
    <!-- /.container -->

    <?php include("includes/footer.php");