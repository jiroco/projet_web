<?php

include("connexiondb.php");

$req = $DBcon->prepare('SELECT MESSAGE, NOM, PRENOM, IMAGE from messagetog WHERE IDGROUPE = ? GROUP BY ID DESC'); 
$req->bindValue(1,$_SESSION['IDGROUPE'],PDO::PARAM_INT);
$check=$req->execute(); 
if($check){
	while ($resultat=$req->fetch()){
		?>
  		<div class="panel panel-default"> <!--panel 1 début-->
	      	<div class="media">
			    <div class="media-left media-top">
			      	<img src="<?php echo "image/".$resultat['IMAGE'].".png"?>" class="media-object" style="width:100px;margin-top: 10px; margin-left: 10px;margin-bottom: 10px;"> <!--mettre une image de profil dans src -->
				</div>
				<div class="media-body">
				    <h4 class="media-heading"><br/> <?php print_r($resultat["NOM"]." ".$resultat["PRENOM"]) ?> </h4>
					<?php print_r($resultat["MESSAGE"]."<br/>");?>
				<br/>
				</div>
			</div>
   		</div> <!--panel 1 fin-->
		<hr/>
	<?php
	}
}

else
	echo "Erreur de requete.<br>";

?>