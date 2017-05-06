<?php 
include("head.php") 
//include("include/bdd_connexion.php");
//session_start(); ?>

<div>

	<div>
		<div >
			<form action="accueil.php" method="POST">
				<p>Inscription</p>
			    <input type="hidden" name="role"/>
				Adresse :<input type="email" name="email" placeholder="Entrer votre adresse mail"/><br>
				Prénom :<input type="text" name="prenom" placeholder="Entrer votre prénom"/><br>
				Nom :<input type="text" name="nom" placeholder="Entrer votre nom"/><br>
				Mot de passe:	<input type="password" name="passwd" placeholder="Mot de passe"/><br>
				Confirmation du mot de passe: <input type="password" name="passwd2" placeholder="Confirmation mot de passe" /><br> <br><br> <br>
				<input type="submit" value="S'inscrire"/>	
			</form>
		</div>
	</div>
</div>
