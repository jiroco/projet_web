<?php session_start(); ?>
<html>
<head>
	<title>Mes groupes</title>

</head>
<body style="height:100%">
	<?php
	include 'htmlnavBar.php';
	include('include/connexiondb.php');
	?>



	<div class="container col-md-10 col-md-offset-1 ">
	  <div class="row ">
        <div id="groupe" class="fade in active"> <!--Groupe début -->
        	<div class="container" style="width:100%;">

			  	<div class="panel panel-default">
			    	<div class="panel-heading">
			    		<h3>Mes groupes</h3>
			    	</div>

			    	<div class="panel-body">
			    		<br/>
						<div>
							<?php include("include/mes_groupes.php");?>
						</div>
			    	</div>
					<div class="panel-body" align="center">
						<a href='recherche_groupe.php'><button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Recherche de groupe</button></a>
						<a href='creer_groupe.php'><button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Créer un groupe</button></a>
					</div>
					<br/>
				</div>
			</diov>
		</div> <!-- Groupe fin -->
	  </div><!--row fin -->
	</div><!--container fin -->

<footer>
</footer>


</body>
</html>
