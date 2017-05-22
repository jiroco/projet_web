
<html>
<head>
	<title>test include</title>
	

</head>
<body >
	<?php include 'navBar.php';?>

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
		        	<p>Les publications</p>
					
					<div class="container" style="width:100%;"> <!--container de publication début -->
					    <div class="panel panel-default"> <!--Publier début -->
					      <div class="panel-heading">
					      	<h3>Publier</h3>
					      	<form>
							    <div class="form-group ">
							      <label for="comment">Comment :</label>
							      <textarea class="form-control taille-textarea" rows="5" id="comment"></textarea><br/>
							      <div class='btn-toolbar pull-right '>
							    	<button type="button" class="btn btn-default btn-xs button-bas-droite ">Publier</button>
							      </div><br/>
							    </div>

							 </form>
					  	  </div>
					    </div> <!--Publier fin -->

					    <div class="panel panel-default"> <!--Twitt début -->
					      	<div class="panel-heading"> <!--panel heading pour toutes les publications début -->
					      		<h3>Publication</h3>
					      		<br>
					      		<div class="panel-group"> <!--panel group debut-->
					      		  <div class="panel panel-default"> <!--panel 1 début-->

								      	<div class="media">
										    <div class="media-left media-top">
										      	<img src="" class="media-object" style="width:100px;margin-top: 10px; margin-left: 10px;"> <!--mettre une image de profil dans src -->
											</div>
											<div class="media-body">
											    <h4 class="media-heading"><br/>Nom Prénom</h4>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <br/>
											</div>
										</div>
								   </div> <!--panel 1 fin-->
									<hr/>
									<div class="panel panel-default">	<!--panel 2 début-->									
										<div class="media"> <!--debut media -->
										    <div class="media-left media-top">
										      	<img src="" class="media-object" style="width:100px;margin-top: 10px; margin-left: 10px;">
											</div>
										    <div class="media-body">
										      	<h4 class="media-heading"><br/>Nom Prénom  2</h4>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>

											    <p>Lorem ipsum dolor sit amet,</p>
											     <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>
											    <p>Lorem ipsum dolor sit amet,</p>

											    <p>Lorem ipsum dolor sit amet,</p>
											    <br/>
											</div>
										</div><!--fin media-->
									</div> <!--panel 2 fin-->
									
								</div> <!--panel group fin -->
							</div><!--panel heading pour toutes les publications fin -->
					    </div><!--Twitt fin -->			    
					</div> <!--container de publication fin -->
				</div><!-- Acceuil fin -->
		      

		        <div id="profil" class="tab-pane fade "> <!--Home début -->
		          	<h3>Mon profil</h3>
		          	<p>
		          		nom : Depelley<br>
		          		prenom : Alo<br>
		          		age : 21<br>
		          	</p>

	 			  	
		        </div> <!-- Home fin -->


		        <div id="paramètre" class="tab-pane fade"> <!--Paramètre début -->
		          <h3>Parametre</h3>
		          <p>Régler les parmètres</p>
		        </div> <!-- Paramètre fin -->


		        <div id="groupe" class="tab-pane fade"> <!--Groupe début -->
		          <h3>Mes groupes</h3>
		          <p>La liste de mes groupes ou les dernière publication des groupes</p>
		        </div> <!-- Groupe fin -->
			  

		        <div id="abonne" class="tab-pane fade"> <!--Abonnés début -->
		          <h3>Mes abonnés</h3>
		          <p>La liste de mes abonnés ou leur dernière publication ?</p>
		        </div> <!-- Abonnés fin -->
			  </div> <!--tab content fin -->

		      </div><!--colonne 10 fin -->
	  </div><!--row fin -->

		   

		</div>
	  </div>
	</div>

</body>
</html>

