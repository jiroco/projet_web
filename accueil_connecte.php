<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>

<html>
<head>
	<title>Test</title>

</head>
<body >
	<?php include 'htmlnavBar.php';?>



	<div class="container">
	  <div class="row">

			<nav class="col-md-2" > <!--nav vertical début -->
		      <ul class="nav nav-pills nav-stacked " data-spy="affix" >
		        <li class="active"><a data-toggle="tab"  href="#accueil">Accueil</a></li>
		        <li><a data-toggle="tab" href="#profil">Profil</a></li>
		        <li><a data-toggle="tab" href="#paramètre" >Paramètre</a></li>
		        <li><a data-toggle="tab" href="#groupe">Groupe</a></li>
		        <li><a data-toggle="tab" href="#abonne">Mes abonnés</a></li>

		      </ul>
		    </nav> <!--nav vertical fin -->


			<div class="col-md-10" > <!--colonne 10 debut -->
		      <div class="tab-content"> <!--tab content début -->
		      	
		      	<div id="accueil" class="tab-pane fade in active"> <!--Accueil début -->
		        	<h3>Accueil</h3>					
					<div class="container" style="width:100%;"> <!--container de publication début -->
					    <div class="panel panel-default"> <!--Publier début -->
					      <div class="panel-heading">
					      	<h3>Publier</h3>
					      	<form action="accueil_connecte.php" method="POST">
							    <div class="form-group ">
							      <label for="comment">Comment :</label>
							      <textarea class="form-control taille-textarea" rows="5" id="comment" type="text" name="textpublie" placeholder="Entrer votre texte"></textarea><br/>
							      <div class='btn-toolbar pull-right '>
							    	<input type="submit" class="btn btn-default btn-xs button-bas-droite" name="click" value="publier">
							      </div><br/>
							    </div>

							 </form>
					  	  </div>
					    </div> <!--Publier fin -->


					    <div class="panel panel-default"> <!--Twitt début -->
					      	<div class="panel-heading"> <!--panel heading pour toutes les publications début -->
					      		<h3>Publication</h3>
					      		<br>
					      		<div class="panel-group" id="addMessage" > <!--panel group debut-->
									<?php
									include("include/publication_abonnees.php");
									include("include/publication_message.php");
									?>					      		  
								</div> <!--panel group fin -->
							</div><!--panel heading pour toutes les publications fin -->
					    </div><!--Twitt fin -->			    
					</div> <!--container de publication fin -->
				</div><!-- Acceuil fin -->
		      

		        <div id="profil" class="tab-pane fade "> <!--profil début -->
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
						                        <td>Date of Birth</td>
						                        <td>30/05/1996</td>
						                      </tr>						                   
						                      <tr>					                 
							                    <tr>
							                        <td>Home Address</td>
							                        <td>Kathmandu,Nepal</td>
							                    </tr>
							                    <tr>
							                        <td>Email</td>
							                        <td><a href="mailto:"><?php print_r($_SESSION['mail']) ?></a></td>
							                    </tr>
							                        <td>Phone Number</td>
							                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
							                    </td>
						                           
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


		        <div id="paramètre" class="tab-pane fade"> <!--Paramètre début -->
		        	<div class="container" style="width:100%;"><!--container début -->
					  <div class="panel-group"><!--panel group début -->
					    <div class="panel panel-default">
					      <div class="panel-heading"><h3>Paramètres</h3></div>
					      <div class="panel-body">
					      	<?php include("parametre.php");?>
					      </div>
					    </div>

					  </div><!--panel group fin -->
					</div><!--Container fin -->
		        </div> <!-- Paramètre fin -->


		        <div id="groupe" class="tab-pane fade"> <!--Groupe début -->
		        	<div class="container">
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
			  

		        <div id="abonne" class="tab-pane fade"> <!--Abonnés début -->
		        	<div class="container">
					  	<div class="panel panel-default">
					    	<div class="panel-heading"><h3>Mes abonnés</h3></div>
					    	<div class="panel-body">
					    		<p>La liste de mes abonnés / leur dernière publication / recherche de nouveau pour s'abonner</p>
					    		<div>
									<a href="recherche_abonne.php"><span class="glyphicon glyphicon-search" ></span> Recherche d'abonné</a>
				  				</div>
					    	</div>
					  	</div>
					</div>

		        </div> <!-- Abonnés fin -->
			  

			  </div> <!--tab content fin -->
		    </div><!--colonne 10 fin -->
	  </div><!--row fin -->	   
	</div><!--container fin -->



<!--
	<div>
		<br/>Mes messages : <?php include("include/mes_messages.php");?><br/>
	</div>

	

	<div>
		mes groupes: <?php include("include/mes_groupes.php");?>
	</div>



	<div>
		<a href="deconnexion.php">Deconnexion</a>
	</div>
-->
</body>
</html>




<script src="bootstrap/js/message.js"></script>
