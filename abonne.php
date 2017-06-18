<html>
<head>
	<title>Abonne</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

</head>
<body>
	<?php include 'htmlnavBar.php'; ?>
	<?php session_start();?>
<div class="container col-md-10 col-md-offset-1">
  <div class="tab-content ">
    <div id="abonne" class="tab-pane fade in active"> <!--Abonnés début -->
    	<div class="container" style="width:100%;"><!--container debut -->
		  	<div class="panel panel-default"><!--panel debut -->
		    	<div class="panel-heading"><!--panel-heading debut -->
		    		<h3>Rechercher abonnés</h3>					    	
				</div><!--panel-heading fin -->
			    <div class="panel-body "><!--panel-body debut -->
					<div class="panel-group"><!--panel group début -->
						<div class="panel">
							<form action="abonne.php" method="POST">
								<input type="text" name="recherchea" placeholder="Pseudo de l'abonne"/>
								<button type="submit" class="btn btn-danger btn-sm active"><span class="glyphicon glyphicon-search"></span> Rechercher</button>
							</form>

							<?php
							include("include/recherche_abonne.inc.php");
							?>
						</div>
			    	</div><!--panel group fin -->
		  		</div><!--panel-body fin -->
		  	</div><!--panel fin -->
		</div><!--container fin -->
    </div> <!-- Abonnés fin -->      

  </div><!--row fin -->	   
</div><!--container fin -->



</body>
</html>
