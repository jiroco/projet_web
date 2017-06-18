<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
</head>
<body>

<?php include("navbar_deconnecte.php");?>
<div w3-include-html="htmlnavBar.php"></div> 
<div>
	<form class="form-signin" method="POST">
		<div class="titre">
			<p>Connexion</p>
			<br>
			<input type="hidden"/>
			<input name="username" id="username" class="form-control" placeholder="username" required="" autofocus="" type="username" text=""/>
			<br>
			<input name="passwd" id="passwd" class="form-control" placeholder="Mot de passe" required="" type="password"/>
			<br>
			<input type="submit" class="btn btn-danger btn-lg active" value="Connexion"/>
		</div>
	</form>
</div>

<?php include("include/connexion.inc.php");?>

</body>
</html>