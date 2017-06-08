<?php
session_start();
?>

<div>
	<form action="recherche_abonne.php" method="POST">
			<p>Recherche d'abonné : </p>
			<input type="text" name="recherchea" placeholder="Entrer le pseudo de l'utilisateur"/><br>
			<input class="c" type="submit" value="rechercher">
	</form>
</div>

<?php
include("include/recherche_abonne.inc.php");
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(.c).click(function recherche(event){
	
<?php
include("connexiondb.php");

if(isset($_POST['recherchea']) && !empty($_POST['recherchea'])){
	$userrecherche=htmlspecialchars($_POST['recherchea']);
	$req = $DBcon->prepare('SELECT NOM, PRENOM, USERNAME, ID FROM user  WHERE USERNAME=? AND ID NOT IN (SELECT IDUSERABONNE FROM abonnee WHERE IDUSER=?)'); 
	$req->bindValue(1,$userrecherche,PDO::PARAM_INT);
	$req->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
	$check=$req->execute();  

	if($check){
		if($resultat=$req->fetch()){
			print_r("Nom : ".$resultat["NOM"]." ");
			print_r("Prenom : ".$resultat["PRENOM"]." ");
			print_r("Username : ".$resultat["USERNAME"]." ");
			$_SESSION["rechabonne"]=$resultat["ID"];
			}
			return "abonner"
	else {
		return "L'utilisateur ".$userrecherche." n'existe pas.<br>. Veuillez rentrer le bon pseudo<br>.Voici la liste possible<br>";
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
			echo "Erreur";
	}

	}
}

include("abonnement.php");
}
</script>