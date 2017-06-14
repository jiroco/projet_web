<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

<?php include("navbar_deconnecte.php");?>

<div class="container">

      <form action="include/register.inc.php" class="form-signin" method="POST">
        <h2 class="titre">Inscription</h2>

        <label for="inputFisrtName" class="sr-only">Prénom</label>
        <input id="inputFisrtName" class="form-control" placeholder="Prénom" type="text", name="prenom">

        <label for="inputLastName" class="sr-only">Nom</label>
        <input id="inputLastName" class="form-control" placeholder="Nom" name="nom" type="nom">

        <label for="inputdepartement" class="sr-only">Departement</label>
        <input id="inputdepartement" class="form-control" placeholder="Departement" name="departement" type="text">

        <label for="inputEmail" class="sr-only">Email</label>
        <input id="email" class="form-control" type="email" name="email" placeholder="Entrer votre adresse mail"/>

        <label for="inputUsername" class="sr-only">Username</label>
        <input id="inputUsername" class="form-control" placeholder="Username" name="username" type="text">

        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input id="inputPassword" class="form-control" placeholder="Mot de passe" name="passwd" type="password">

        <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
      </form>

    </div>
</body>
</html>