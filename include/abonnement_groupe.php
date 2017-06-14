<?php
include("connexiondb.php");

if (isset($_POST["groupe"])){
	$req = $DBcon->prepare('INSERT INTO `atog`(`IDUSER`, `IDGROUPE`) VALUES (?,?)');
					
	$req->bindValue(1, $_SESSION['id'], PDO::PARAM_STR);
	$req->bindValue(2, $_SESSION['rechgroupe'], PDO::PARAM_STR);
	$check=$req->execute();
	if($check){
		echo "Abonnement réussi";?>
		<a href="htmlgroupe.php">Retour à l'accueil</a>
<?php
	}
	else
	    echo "Un problème s'est produit lors de la requete.<br>";

	$req->closeCursor();
}
?>