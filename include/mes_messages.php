<?php
include("connexiondb.php");

$req = $DBcon->prepare('SELECT CONTENU from messages WHERE IDUSER = ? GROUP BY ID DESC'); // fausse
$req->bindValue(1,$_SESSION['id'],PDO::PARAM_INT);
$check=$req->execute();  

if($check){
	while ($resultat=$req->fetch()){
		print_r($resultat["CONTENU"]."<br/>");
	}
}
else
	echo "Erreur de requete.<br>";

?>