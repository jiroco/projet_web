<?php
include("connexiondb.php");

if(isset($_POST['rechercheag']) && !empty($_POST['rechercheag'])){
	$grouperecherche=htmlspecialchars($_POST['rechercheag']);
	$req = $DBcon->prepare('SELECT NOM, ID FROM groupe  WHERE NOM=? AND ID NOT IN (SELECT IDGROUPE FROM atog WHERE IDUSER=?)'); 
	$req->bindValue(1,$grouperecherche,PDO::PARAM_INT);
	$req->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
	$check=$req->execute();  

	if($check){
		if($resultat=$req->fetch()){
			print_r("Nom : ".$resultat["NOM"]." ");
			$_SESSION["rechgroupe"]=$resultat["ID"];
			?>
			<div>
				<form method="POST">
					<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span>S'abonner</button>
				</form>
			</div>

			<?php
		}
	else {
		echo "Le groupe ".$grouperecherche." n'existe pas. Veuillez rentrer le bon nom. Voici la liste possible.<br>";
		$req = $DBcon->prepare('SELECT NOM, ID FROM groupe WHERE nom LIKE ?'); 
		$req->bindValue(1,"%".$grouperecherche."%",PDO::PARAM_INT);
		$check=$req->execute();
		?>
		<br>
		<div class="container col-md-10">
		<?php

		if($check){
			while ($resultat=$req->fetch()){
				
			?>
			<div class="col-md-5 col-lg-5" align="right">
			   	<div class=" col-md-7 col-lg-7 ">
	           		Nom :
	            	<?php print_r($resultat["NOM"])?>
	            </div>

			</div>
                					
		</div>

	<?php
			}
		}
		else
			echo "Erreur de requete.<br>";
	}

	}
}
