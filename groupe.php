<?php
session_start();

$_SESSION["IDGROUPE"]=$_GET["Idgroupe"];
?>

<div>
	<form action="include/publication_message_groupe.php" method="POST">
			<p>Publication de groupe</p>
			Contenu :<input type="text" name="textpubliegroupe" placeholder="Entrer votre texte"/><br>
			<input type="submit" name="clickgroupe" value="publier">
	</form>
</div>

<?php
include("include/publication_abonnees_groupe.php");
?>
<div>
	<a href="accueil_connecte.php">Retour à l'accueil</a>
</div>