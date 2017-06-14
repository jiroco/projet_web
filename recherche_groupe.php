<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}?>

<html>
<head>
	<title>Recherche Groupe</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

</head>
<body>
	<?php include 'htmlnavBar.php'; ?>



<div class="container col-md-10 col-md-offset-1">
  <div class="row ">
	        <div id="abonne" class="tab-pane fade in active"> <!--Abonnés début -->
	        	<div class="container" style="width:100%;"><!--container debut -->
	        		<div class="panel-group"><!--panel group début -->
					  	<div class="panel panel-default">
					    	<div class="panel-heading">
					    		<h3>Rechercher de groupe</h3>
							</div>
					    	<div class="panel-body">
								<form action="recherche_groupe.php" method="POST">

									<input type="text" name="rechercheag" placeholder="Nom de groupe"/>
									<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Rechercher</button>
								</form>

<?php
include("include/recherche_groupe.inc.php");
include("include/abonnement_groupe.php");
?>
						    	</div>
						  	</div>
					  	</div><!--panel group fin -->
					</div><!--container fin -->
		        </div> <!-- Abonnés fin -->

		  </div><!--row fin -->
	</div><!--container fin -->

</body>
</html>
