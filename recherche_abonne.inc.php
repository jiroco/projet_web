<?php
$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','');

if(isset($_POST['recherchea']) && !empty($_POST['recherchea'])){
	$userrecherche=htmlspecialchars($_POST['recherchea']);
	$req = $DBcon->prepare('SELECT NOM, PRENOM, USERNAME, ID FROM user  WHERE USERNAME=?'); 
	$req->bindValue(1,$userrecherche,PDO::PARAM_INT);
	$check=$req->execute();  

	if($check){
		if($resultat=$req->fetch()){
			print_r("Nom : ".$resultat["NOM"]." ");
			print_r("Prenom : ".$resultat["PRENOM"]." ");
			print_r("Username : ".$resultat["USERNAME"]." ");
			$_SESSION["rechabonne"]=$resultat["ID"];
			?>
			<div>
					<form method="POST">
						<input type="submit" name="abonne" value="S'abonner">
					</form>
			</div>
			<?php
		}
		else {
			echo "L'utilisateur ".$userrecherche." n'existe pas.<br>";
			echo "Veuillez rentrer le bon pseudo<br>";
			echo "voici la liste possible<br>";
			$req = $DBcon->prepare('SELECT NOM, PRENOM, USERNAME FROM user  WHERE USERNAME LIKE ?'); 
			$req->bindValue(1,"%".$userrecherche."%",PDO::PARAM_INT);
			$check=$req->execute();  

			if($check){
				while ($resultat=$req->fetch()){
					print_r("Nom : ".$resultat["NOM"]." ");
					print_r("Prenom : ".$resultat["PRENOM"]." ");
					print_r("Username : ".$resultat["USERNAME"]."<br>");
				}
			}
			else
				echo "Erreur de requete.<br>";
		}

	}
}

include("abonnement.php");