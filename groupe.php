<?php
session_start();

$_SESSION["IDGROUPE"]=$_GET["Idgroupe"];
?>

<?php include 'htmlnavBar.php';?>

	<div class="container">
	  <div class="row ">

			<div class="col-md-10 col-md-offset-2" > <!--colonne 10 debut -->

		      <div class="tab-content"> <!--tab content début -->
		      	
		      	<div id="accueil" class="tab-pane fade in active"> <!--Accueil début -->
					<div class="container" style="width:100%;"> <!--container de publication début -->
					    <div class="panel panel-default"> <!--Publier début -->
					      <div class="panel-heading">
					      	<h3>Publier</h3>
					      	<form action="accueil_connecte.php" method="POST">
							    <div class="form-group ">
							      <label for="comment">Comment :</label>
							      <textarea class="form-control taille-textarea" rows="5" id="comment" type="text" name="textpublie" placeholder="Entrer votre texte"></textarea><br/>
							      <div class='btn-toolbar pull-right '>
							    	<input type="submit" class="btn btn-default btn-xs button-bas-droite" name="click" value="publier">
							      </div><br/>
							    </div>
							 </form>
					  	  </div>
					    </div> <!--Publier fin -->


					    <div class="panel panel-default"> <!--Twitt début -->
					      	<div class="panel-heading"> <!--panel heading pour toutes les publications début -->
					      		<h3>Publication</h3>
					      		<br>
					      		<div class="panel-group" id="addMessage" > <!--panel group debut-->

<?php
include("include/publication_abonnees_groupe.php");
?>
</div> <!--panel group fin -->
							</div><!--panel heading pour toutes les publications fin -->
					    </div><!--Twitt fin -->			    
					</div> <!--container de publication fin -->
				</div><!-- Acceuil fin -->
			  

			  </div> <!--tab content fin -->
		    </div><!--colonne 10 fin -->
	  </div><!--row fin -->	   
	</div><!--container fin -->
</body>
</html>