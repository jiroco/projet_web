<html>
<head>
	<title>Test</title>

</head>
<body>
	<?php include 'htmlnavBar.php'; ?>
	<?php session_start();?>



	<div class="container col-md-10 col-md-offset-1 ">
	  <div class="row ">
        <div id="groupe" class="fade in active"> <!--Groupe début -->
        	<div class="container" style="width:100%;">

			  	<div class="panel panel-default">
			    	<div class="panel-heading"><h3>Mes groupes</h3></div>
			    	<div class="panel-body">
			    		<p>La liste de mes groupes ou les dernière publication des groupes</p>
			    		<div>
							Mes groupes: <?php include("include/mes_groupes.php");?>
						</div>
			    	</div>
			  	</div>
			</div>
        </div> <!-- Groupe fin -->		      
	  </div><!--row fin -->	   
	</div><!--container fin -->


</body>
</html>















