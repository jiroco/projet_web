<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
include 'navBar.php';

?>

<div>
	<form action="accueil_connecte.php" method="POST">
			<p>Publication</p>
			Contenu :<input type="text" name="textpublie" placeholder="Entrer votre texte"/><br>
			<input type="submit" name="click" value="publier">
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
	<a href="recherche_abonne.php">recherche d'abonne</a>
</div>

<div>
	mes groupes: <?php include("mes_groupes.php");?>
</div>



<div>
	<a href="deconnexion.php">Deconnexion</a>
</div>