<?php
$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','');

if (isset($_POST["abonne"])){
	$req = $DBcon->prepare('INSERT INTO `abonnee`(`IDUSER`, `IDUSERABONNE`) VALUES (?,?)');
					
	$req->bindValue(1, $_SESSION['id'], PDO::PARAM_STR);
	$req->bindValue(2, $_SESSION['rechabonne'], PDO::PARAM_STR);
	$check=$req->execute();
	if($check){
		echo "Abonnement réussi";?>
		<a href="accueil_connecte.php">Retour à l'accueil</a>
<?php
	}
	else
	    echo "Un problème s'est produit lors de la requete.<br>";

	$req->closeCursor();
}
?>