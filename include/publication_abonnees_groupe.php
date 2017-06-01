<?php

include("connexiondb.php");

$req = $DBcon->prepare('SELECT MESSAGE from messagetog WHERE IDGROUPE = ? GROUP BY ID DESC'); 
$req->bindValue(1,$_SESSION['IDGROUPE'],PDO::PARAM_INT);
$check=$req->execute(); 
if($check){
	while ($resultat=$req->fetch()){
		print_r($resultat["MESSAGE"]."<br/>");
	}
}
else
	echo "Erreur de requete.<br>";

?>