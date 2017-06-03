<?php
include("connexiondb.php");

$req = $DBcon->prepare('SELECT CONTENU from messages WHERE IDUSER IN (SELECT `IDUSERABONNE` FROM `abonnee` WHERE `IDUSER`=?) or IDUSER=? GROUP BY ID DESC '); 
$req->bindValue(1,$_SESSION['id'],PDO::PARAM_INT);
$req->bindValue(2,$_SESSION['id'],PDO::PARAM_INT);
$check=$req->execute(); 
if($check){
	while ($resultat=$req->fetch()){
		?>
  		<div class="panel panel-default"> <!--panel 1 début-->
	      	<div class="media">
			    <div class="media-left media-top">
			      	<img src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="media-object" style="width:100px;margin-top: 10px; margin-left: 10px;margin-bottom: 10px;"> <!--mettre une image de profil dans src -->
				</div>
				<div class="media-body">
				    <h4 class="media-heading"><br/> <?php print_r($_SESSION['prenom']." ".$_SESSION['nom']) ?> </h4>
				    	<?php 
							print_r($resultat["CONTENU"]."<br/>");
						?>
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