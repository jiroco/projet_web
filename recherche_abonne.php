<?php

?>

<div>
	<form action="accueil_connecte.php" method="POST">
			<p>Recherche d'abonné : </p>
			<input type="text" name="recherchea" placeholder="Entrer le pseudo de l'utilisateur"/><br>
			<input type="submit" value="rechercher">
	</form>
</div>

<?php
include("recherche_abonne.inc.php");
?>

