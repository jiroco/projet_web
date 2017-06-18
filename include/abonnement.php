<?php
include("connexiondb.php");
session_start();
if (isset($_POST["abonne"])){
	$req = $DBcon->prepare('INSERT INTO `abonnee`(`IDUSER`, `IDUSERABONNE`) VALUES (?,?)');
					
	$req->bindValue(1, $_SESSION['id'], PDO::PARAM_STR);
	$req->bindValue(2, $_SESSION['rechabonne'], PDO::PARAM_STR);
	$check=$req->execute();
	if($check){
		echo "Abonnement réussi, vous allez être redirigé !";
	    header("Refresh: 3; URL=../accueil_connecte.php");?>
<?php
	}
	else
	    echo "Un problème s'est produit lors de la requete.<br>";

	$req->closeCursor();
}
else{
	echo "erreur";
}
?>