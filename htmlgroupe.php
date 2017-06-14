<html>
<head>
	<title>Test</title>

</head>
<body style="height:100%">
	<?php include 'htmlnavBar.php'; ?>
	<?php session_start();?>



	<div class="container col-md-10 col-md-offset-1 ">
	  <div class="row ">
        <div id="groupe" class="fade in active"> <!--Groupe début -->
        	<div class="container" style="width:100%;">

			  	<div class="panel panel-default">
			    	<div class="panel-heading">
			    		<h3>Mes groupes</h3>
			    	</div>
			    	<div class="panel-body">
						<div>	
							<?php include("include/mes_groupes.php");?>
						</div>
			    	</div>
				</div>
			</diov>
		</div> <!-- Groupe fin -->		      
	  </div><!--row fin -->	   
	</div><!--container fin -->

<footer>
</footer>


</body>
</html>















