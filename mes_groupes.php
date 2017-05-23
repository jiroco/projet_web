<?php
$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','root');

$req = $DBcon->prepare('SELECT NOM, ID from groupe JOIN atog ON atog.IDGROUPE=groupe.ID WHERE atog.IDUSER=?');
$req->bindValue(1,$_SESSION['id'],PDO::PARAM_INT);
$check=$req->execute();  

if($check){
	while ($resultat=$req->fetch()){
		//$_SESSION["IDGROUPE"]=$resultat["ID"];
		//print_r($resultat["ID"]);
		echo ("<a href='groupe.php?Idgroupe=".$resultat['ID']."' name = 'groupe_valeur' value=".'$resultat["IDG"]'.">".$resultat["NOM"]." / ");
	}
}
else
	echo "Erreur de requete.<br>";
?>