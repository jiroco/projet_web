<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="mes_groupes.css">

</head>
<body>
	<?php include 'htmlnavBar.php'; ?>
	<?php session_start();?>



	<div class="container col-md-10 col-md-offset-1 ">
	  <div class="row ">

			<nav class="col-md-2 sidebar-offcanvas " > <!--nav vertical début -->

		      <ul class="nav nav-pills-changer nav-stacked "  data-spy="affix">
		        <li><a  href="accueil_connecte.php">Accueil</a></li>
		        <li><a href="profil.php">Profil</a></li>
		        <li><a href="parametre.php" >Paramètre</a></li>
		        <li class="active"><a href="htmlgroupe.php">Groupe</a></li>
		        <li><a href="abonne.php">Mes abonnés</a></li>

		      </ul>
		    </nav> <!--nav vertical fin -->

			<div class="col-md-10 col-md-offset-2" > <!--colonne 10 debut -->
		        <div id="groupe" class="fade in active"> <!--Groupe début -->
		        	<div class="container" style="width:100%;">

					  	<div class="panel panel-default">
					    	<div class="panel-heading"><h3>Mes groupes</h3></div>
					    	<div class="panel-body">
					    		<p>La liste de mes groupes ou les dernière publication des groupes</p>
									<?php include("include/mes_groupes.php");?>
								</div>
					    	</div>
					  	</div>
					</div>
		        </div> <!-- Groupe fin -->		      

		        


		    </div><!--colonne 10 fin -->

	  </div><!--row fin -->	   
	</div><!--container fin -->


</body>
</html>















