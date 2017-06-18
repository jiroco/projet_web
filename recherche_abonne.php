<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>

<div>
	<form action="recherche_abonne.php" method="POST">
			<p>Recherche d'abonné : </p>
			<input type="text" name="recherchea" placeholder="Entrer le pseudo de l'utilisateur"/><br>
			<input type="submit" value="rechercher">
	</form>
</div>

<?php
include("include/recherche_abonne.inc.php");
include("include/liste_abonne.inc.php");
?>