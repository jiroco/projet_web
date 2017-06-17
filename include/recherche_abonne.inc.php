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
			echo "L'utilisateur '".$userrecherche."' n'existe pas. Veuillez rentrer le bon pseudo. <br/>Voici la liste des utilisateurs possible :<br/><br/>";
			$req = $DBcon->prepare('SELECT NOM, PRENOM, USERNAME, IMAGE_PROFIL FROM user  WHERE USERNAME LIKE ?'); 
			$req->bindValue(1,"%".$userrecherche."%",PDO::PARAM_INT);
			$check=$req->execute();
			?>

		   	<div class="searchable-container"><!-- searchable-container debut -->        
				<?php
				if($check){
					while ($resultat=$req->fetch()){
					?>
					<div class="items col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix"><!-- items debut -->  
						<div class="info-block block-info clearfix"><!-- info-block debut -->  
		     				<div class="square-box pull-left">
								<img src="<?php echo "image/".$resultat['IMAGE_PROFIL'].".png"?>" class="media-object" style="width:100px;margin-top: 10px; margin-left: 10px;margin-bottom: 10px;"> 
		                	</div>
							<br/>
				            <h5><b>Prénom et Nom :</b></h5> <tab/><?php print_r($resultat["PRENOM"]." ".$resultat["NOM"]);?>
				            <br>
				            <h5><b>Username : </b></h5> <tab/><?php print_r($resultat["USERNAME"]);?>

	             		</div><!-- info-block fin -->  
	     			</div><!-- items fin -->  
		    </div><!-- searchable-container fin -->  
				<?php
					} //fin while
				}//fin if 
			else
	            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
		}
	}
}
include("abonnement.php");