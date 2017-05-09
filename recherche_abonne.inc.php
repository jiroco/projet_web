<?php
$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','');

if(isset($_POST['recherchea']) && !empty($_POST['recherchea'])){

	$req = $DBcon->prepare('SELECT NOM, PRENOM, USERNAME FROM user  WHERE USERNAME LIKE ?'); 
	$req->bindValue(1,"%".$_POST['recherchea']."%",PDO::PARAM_INT);
	$check=$req->execute();  

	if($check){
		while ($resultat=$req->fetch()){
			print_r("Nom : ".$resultat["NOM"]." ");
			print_r("Prenom : ".$resultat["PRENOM"]." ");
			print_r("Username : ".$resultat["USERNAME"]." ");
			?>
			<a href="abonnement.php">s'abonner</a> <br/>
			<?php
		}
	}
	else
		echo "Erreur de requete.<br>";
}
?>