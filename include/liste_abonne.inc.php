<?php
include("connexiondb.php");

$req = $DBcon->prepare('SELECT NOM, PRENOM, USERNAME from user JOIN abonnee ON abonnee.IDUSERABONNE=user.ID WHERE abonnee.IDUSER = ? '); // fausse
$req->bindValue(1,$_SESSION['id'],PDO::PARAM_INT);
$check=$req->execute();  

if($check){
	while ($resultat=$req->fetch()){
		print_r("Nom: ".$resultat["NOM"]."  , Prénom: ".$resultat["PRENOM"]."  , Username: ".$resultat["USERNAME"]."<br/>");
	}
}
else
	echo "Erreur de requete.<br>";

?>