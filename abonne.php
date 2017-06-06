<html>
<head>
	<title>Test</title>

</head>
<body>
	<?php include 'htmlnavBar.php'; ?>
	<?php session_start();?>



	<div class="container">
	  <div class="row ">

			<nav class="col-md-2 sidebar-offcanvas " > <!--nav vertical début -->

		      <ul class="nav nav-pills-changer nav-stacked "  data-spy="affix">
		        <li><a  href="accueil_connecte.php">Accueil</a></li>
		        <li><a href="profil.php">Profil</a></li>
		        <li><a href="parametre.php" >Paramètre</a></li>
		        <li><a href="htmlgroupe.php">Groupe</a></li>
		        <li class="active"><a href="abonne.php">Mes abonnés</a></li>

		      </ul>
		    </nav> <!--nav vertical fin -->

			<div class="col-md-10 col-md-offset-2" > <!--colonne 10 debut -->

		        <div id="abonne" class="tab-pane fade in active"> <!--Abonnés début -->
		        	<div class="container" style="width:100%;"><!--container debut -->
		        		<div class="panel-group"><!--panel group début -->
						  	<div class="panel panel-default">
						    	<div class="panel-heading">
						    		<h3>Mes abonnés</h3>
									<form class="navbar-form navbar-right">
								      	<div class="form-group">
								        	<input type="search" class="input-sm form-control" placeholder="Recherche">
								        	<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> rechercher</button>
								      	</div>
									</form>						    	
								</div>
						    	<div class="panel-body">
						    		<p>La liste de mes abonnés / leur dernière publication / recherche de nouveau pour s'abonner</p>
						    		<div>
										<a href="recherche_abonne.php"><span class="glyphicon glyphicon-search" ></span> Recherche d'abonné</a>
					  				</div>
						    	</div>
						  	</div>
					  	</div><!--panel group fin -->
					</div><!--container fin -->
		        </div> <!-- Abonnés fin -->      

		        


		    </div><!--colonne 10 fin -->
	  </div><!--row fin -->	   
	</div><!--container fin -->


</body>
</html>















