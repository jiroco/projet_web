<?php

include("connexiondb.php");

$check = $DBcon->prepare('SELECT IDGROUPE from atog WHERE IDUSER=?');
$check->bindValue(1,$_SESSION['id'],PDO::PARAM_INT);
$check->execute();
$autorisation=False;
while($autor=$check->fetch()) {
	if ($_GET["Idgroupe"] == $autor["IDGROUPE"]) {
		$autorisation=True;
	}
}

if ($autorisation == False) {
	exit();
}

$req = $DBcon->prepare('SELECT ID, THUMBSUP, MESSAGE, NOM, PRENOM, IMAGE from messagetog WHERE IDGROUPE = ? GROUP BY ID DESC');
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
						<button id="<?php echo $resultat["ID"]; ?>" class="jaimeb btn btn-default btn-xs" type="button" value="J'aime">
						    <span class="glyphicon glyphicon-thumbs-up"></span> J'aime
						</button> <!-- fin button j'aime avec le pouce !!!-->
						<span class="label label-info" id="<?php echo -$resultat["ID"]; ?>"><?php echo $resultat["THUMBSUP"]; ?></span>
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
