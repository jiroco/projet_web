
<?php 
include("htmlnavBar.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="htmllogin.css">
</head>
<body>


<div w3-include-html="htmlnavBar.php"></div> 
<div>
	<form action="accueil_connecte.php" method="POST">
		<div class="titre">
			<p>Connexion</p>
			<br>
			<input type="hidden" name="role"/>
			<input id="inputusername" class="form-control" placeholder="username" required="" autofocus="" type="username">
			<br>
			<input id="inputpasswd" class="form-control" placeholder="passwd" required="" type="passwd"><br>
			<br>
			<input type="submit" value="Connexion">
		</div>
	</form>
</div>

</body>

<?php
include("connexion.inc.php")
?>
</html>