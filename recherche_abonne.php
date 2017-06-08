<?php
session_start();
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
?>