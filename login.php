<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
</script>
</head>
<body>

<?php include("htmlnavBar.php");?>

<div w3-include-html="htmlnavBar.php"></div> 
<div>
	<form class="form-signin" method="POST">
		<div class="titre">
			<p>Connexion</p>
			<br>
			<input type="hidden"/>
			<input name="username" id="username" class="form-control" placeholder="username" required="" autofocus="" type="username" text=""/>
			<br>
			<input name="passwd" id="passwd" class="form-control" placeholder="passwd" required="" type="password"/><br>
			<br>
			<input type="submit" value="Connexion"/>
		</div>
	</form>
</div>

<?php include("include/connexion.inc.php")?>

</body>
</html>