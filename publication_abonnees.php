<?php
$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','root');

$req = $DBcon->prepare('SELECT CONTENU from messages WHERE IDUSER IN (SELECT `IDUSERABONNE` FROM `abonnee` WHERE `IDUSER`=?) or IDUSER=? GROUP BY ID DESC '); 
$req->bindValue(1,$_SESSION['id'],PDO::PARAM_INT);
$req->bindValue(2,$_SESSION['id'],PDO::PARAM_INT);
$check=$req->execute(); 
if($check){
	while ($resultat=$req->fetch()){
		print_r($resultat["CONTENU"]."<br/>");
	}
}
else
	echo "Erreur de requete.<br>";

?>