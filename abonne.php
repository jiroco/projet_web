<html>
<head>
	<title>Abonne</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

</head>
<body>
	<?php include 'htmlnavBar.php'; ?>
	<?php session_start();?>



<div class="container col-md-10 col-md-offset-1">
  <div class="row ">
	        <div id="abonne" class="tab-pane fade in active"> <!--Abonnés début -->
	        	<div class="container" style="width:100%;"><!--container debut -->
	        		<div class="panel-group"><!--panel group début -->
					  	<div class="panel panel-default">
					    	<div class="panel-heading">
					    		<h3>Rechercher abonnés</h3>					    	
							</div>
					    	<div class="panel-body">
								<form action="abonne.php" method="POST">
									<input type="text" name="recherchea" placeholder="Pseudo de l'abonne"/>
									<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Rechercher</button>
								</form>

<?php
include("include/recherche_abonne.inc.php");
?>
						    	</div>
						  	</div>
					  	</div><!--panel group fin -->
					</div><!--container fin -->
		        </div> <!-- Abonnés fin -->      

		  </div><!--row fin -->	   
	</div><!--container fin -->


<?php
include("include/abonnement.php");?>
</body>
</html>
