<?php 
include("head.php") 
?>

<div>
	<form action="login.php" method="POST">
			<p>Connexion</p>
			<input type="hidden" name="role"/>
			Username :<input type="text" name="username" placeholder="Entrer votre username"/><br>
			Password :<input type="password" name="passwd"  placeholder="Entrer votre mot de passe"/><br>
			<input type="submit" value="Connexion">
	</form>
</div>


<?php
include("include/connexion.inc.php")
?>