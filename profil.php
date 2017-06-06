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
		        <li class="active"><a href="profil.php">Profil</a></li>
		        <li><a href="parametre.php" >Paramètre</a></li>
		        <li><a href="htmlgroupe.php">Groupe</a></li>
		        <li><a href="abonne.php">Mes abonnés</a></li>

		      </ul>
		    </nav> <!--nav vertical fin -->

			<div class="col-md-10 col-md-offset-2" > <!--colonne 10 debut -->
		      

		        <div id="profil" class="fade in active"> <!--profil début -->
		        	<div class="container" style="width:100%;"> <!--container de profil début -->
		        		<div class="panel-group"><!-- panel group debut -->
						    <div class="panel panel-default"><!-- panel debut -->
							    <div class="panel-heading">
							    	<h3>Mon Profil</h3>
							    </div>
							    <div class="panel-body"> <!-- panel body debut  -->
									<div class="row"> <!-- row debut -->
                						<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> 
                						</div>
                					
	                					<div class=" col-md-9 col-lg-9 "> 
						                  <table class="table table-user-information">
						                    <tbody>
						                      <tr>
						                        <td>Department:</td>
						                        <td><?php print_r($_SESSION['departement']) ?></td>
						                      </tr>
						                      <tr>
						                        <td>Prénom et Nom :</td>
						                        <td><?php print_r($_SESSION['prenom']." ".$_SESSION["nom"]) ?></td>
						                      </tr>
						                      <tr>
						                        <td>Username</td>
						                        <td><?php print_r($_SESSION['username']) ?></td>
						                      </tr>						               
							                  <tr>
							                    <td>Email</td>
							                    <td><a href="mailto:"><?php print_r($_SESSION['mail']) ?></a></td>
							                  </tr>
							                    <td>Phone Number</td>
							                    <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)</td>						                           
						                      </tr>
						                     
						                    </tbody>
						                  </table>
						                </div>
					                </div> <!-- row fin -->
							    </div> <!-- panel body  fin -->
						    </div><!-- panel fin -->
			          </div><!-- panel group fin  -->
			        </div><!--container de profil fin -->
		        </div> <!-- profil fin -->


		    </div><!--colonne 10 fin -->
	  </div><!--row fin -->	   
	</div><!--container fin -->


</body>
</html>