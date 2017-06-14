<?php
include("connexiondb.php");

if(isset($_POST['recherchea']) && !empty($_POST['recherchea'])){
	$userrecherche=htmlspecialchars($_POST['recherchea']);
	$req = $DBcon->prepare('SELECT NOM, PRENOM, USERNAME, ID, IMAGE_PROFIL FROM user  WHERE USERNAME=? AND ID NOT IN (SELECT IDUSERABONNE FROM abonnee WHERE IDUSER=?)'); 
	$req->bindValue(1,$userrecherche,PDO::PARAM_INT);
	$req->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
	$check=$req->execute();  

	if($check){
		if($resultat=$req->fetch()){
			print_r("Nom : ".$resultat["NOM"]." ");
			print_r("Prenom : ".$resultat["PRENOM"]." ");
			print_r("Username : ".$resultat["USERNAME"]." ");
			$_SESSION["rechabonne"]=$resultat["ID"];
			?>
			<div>
				<form method="POST">
					<input type="submit" name="abonne" value="S'abonner">
				</form>
			</div>

			<?php
		}
	else {
		echo "L'utilisateur ".$userrecherche." n'existe pas. Veuillez rentrer le bon pseudo. Voici la liste possible.<br>";
		$req = $DBcon->prepare('SELECT NOM, PRENOM, USERNAME, IMAGE_PROFIL FROM user  WHERE USERNAME LIKE ?'); 
		$req->bindValue(1,"%".$userrecherche."%",PDO::PARAM_INT);
		$check=$req->execute();
		?>
		<br><div class="container col-md-10">
	    <!--<div class="row ">    
	        <div id="profil" class="fade in active"> 
	        	<div class="container" style="width:100%;"> 
	        		<div class="panel-group">
					    <div class="panel panel-default">
						    <div class="panel-body"> 
								<div class="row">
								<table class="table table-user-information">
						            <tbody>-->
									
		<?php

		if($check){
			while ($resultat=$req->fetch()){
				//print_r("Nom : ".$resultat["NOM"]." ");
			//	print_r("Prenom : ".$resultat["PRENOM"]." ");
			//	print_r("Username : ".$resultat["USERNAME"]."<br>");
			?>
								<div class="col-md-5 col-lg-5" align="left">
									<img src="<?php echo "image/".$resultat['IMAGE_PROFIL'].".png"?>" class="media-object" style="width:100px;margin-top: 10px; margin-left: 10px;margin-bottom: 10px;"> 
        						   	</div>
                					
	                				<div class=" col-md-7 col-lg-7 ">
						            Prénom et Nom :
						            <?php print_r($resultat["PRENOM"]." ".$resultat["NOM"])?>
						            <br>Username
						            <?php print_r($resultat["USERNAME"]) ?>
						            </div>
						            <!--</tbody>
						            </table>
						            
					            </div>
						    </div>
					    </div>
					    </div>
		        </div>
	        </div>

	  </div>-->
	</div><?php
			}
		}
		else
			echo "Erreur de requete.<br>";
	}

	}
}

include("abonnement.php");