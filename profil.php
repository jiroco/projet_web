<html>
<head>
	<title>Test</title>

</head>
<body>
	<?php include 'htmlnavBar.php'; ?>
	<?php session_start();?>
	<div class="container container col-md-10 col-md-offset-1">
	  <div class="row ">
		      
		        <div id="profil" class="fade in active"> <!--profil début -->
		        	<div class="container" style="width:100%;"> <!--container de profil début -->
		        		<div class="panel-group"><!-- panel group debut -->
						    <div class="panel panel-default"><!-- panel debut -->
							    <div class="panel-heading">
							    	<h3>Mon Profil 
							    		<small>
							    			<div class='btn-toolbar pull-right '>
						    					<input type="submit" class="btn btn-default" name="" value="Editer" >
						      				</div>
						      			</small>
						      		</h3>							    	
							    </div>
							    <div class="panel-body"> <!-- panel body debut  -->
									<div class="row"> <!-- row debut -->
                						<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo "image/".$_SESSION['imgprofil'].".png"?>" class="img-circle img-responsive"> 
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

	  </div><!--row fin -->	   
	</div><!--container fin -->


</body>
</html>