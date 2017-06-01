<?php 
include("head.php") 
?>


<div >
	<form action="register.php" method="POST">
		<p>Inscription</p>
	    <input type="hidden" name="role"/>
		Adresse mail :<input type="email" name="email" placeholder="Entrer votre adresse mail"/><br>
		Prénom :<input type="text" name="prenom" placeholder="Entrer votre prénom"/><br>
		Nom :<input type="text" name="nom" placeholder="Entrer votre nom"/><br>
		Département:	<input type="text" name="departement" placeholder="Département"/><br>
		Username:<input type="text" name="username" placeholder="Entrer votre username"/><br>
		Mot de passe:	<input type="password" name="passwd" placeholder="Mot de passe"/><br>
		<input type="submit" value="S'inscrire"/>	
	</form>
</div>

<?php
include("include/register.inc.php");
?>