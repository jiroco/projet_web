<html>
<head>
	<title>Test</title>

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

		  </div><!--row fin -->	   
	</div><!--container fin -->


</body>
</html>















