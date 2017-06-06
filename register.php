<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

<?php include("htmlnavBar.php")?>

<div class="container">

      <form action="htmlpageAccueil.php" class="form-signin" method="POST">
        <h2 class="titre">Inscription</h2>

        <label for="inputFisrtName" class="sr-only">First Name</label>
        <input id="inputFisrtName" class="form-control" placeholder="First Name" required="" autofocus="" type="prenom">

        <label for="inputLastName" class="sr-only">Name</label>
        <input id="inputLastName" class="form-control" placeholder="Last Name" required="" autofocus="" type="nom">

        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="email" class="form-control" placeholder="Email address" required="" autofocus="" type="email">

        <label for="inputUsername" class="sr-only">Username</label>
        <input id="inputUsername" class="form-control" placeholder="Username" required="" type="username">

        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">

        <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
</body>
</html>
<?php
include("register.inc.php")
?>