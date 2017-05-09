<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>

<div>
	<form action="accueil_connecte.php" method="POST">
			<p>Publication</p>
			Contenu :<input type="text" name="textpublie" placeholder="Entrer votre texte"/><br>
			<input type="submit" value="publier">
	</form>
</div>

<?php
include("publication_abonnees.php");
include("publication_message.php");
?>

<div>
	<br/>Mes messages : <?php include("mes_messages.php");?><br/>
</div>

<div>
	<?php include("recherche_abonne.php"); ?>
</div>

<div>
	<a href="deconnexion.php">Deconnexion</a>
</div>