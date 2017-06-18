<?php
include("connexiondb.php");

$req = $DBcon->prepare('SELECT THUMBSUP, ID, CONTENU, NOM, PRENOM, IMAGE from messages WHERE IDUSER IN (SELECT `IDUSERABONNE` FROM `abonnee` WHERE `IDUSER`=?) or IDUSER=? GROUP BY ID DESC ');
$req->bindValue(1,$_SESSION['id'],PDO::PARAM_INT);
$req->bindValue(2,$_SESSION['id'],PDO::PARAM_INT);
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
				    <h4 class="media-heading"><br/> <?php print_r($resultat["NOM"]." ".$resultat['PRENOM']) ?> </h4>
							<?php
							print_r($resultat["CONTENU"]."<br/>");
							?>
						<br/>
						<button id="<?php echo $resultat["ID"]; ?>" class="jaimeb btn btn-default btn-xs" type="button" value="J'aime">
						    <span class="glyphicon glyphicon-thumbs-up"></span> J'aime
						</button>
						<span class="label label-success" id="<?php echo -$resultat["ID"]; ?>"><?php echo $resultat["THUMBSUP"]; ?></span>
					<br/>
				</div>
			</div>
   		</div> <!--panel 1 fin-->
		<hr/>

	<?php
	}
}
else
	echo "Erreur de requete.<br/>";

?>
