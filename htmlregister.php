<?php 
include("navBar.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="container">

      <form class="form-signin" method="POST">
        <h2 class="titre">Inscription</h2>
        <label for="inputFisrtName" class="sr-only">First Name</label>
        <input id="inputFisrtName" class="form-control" placeholder="Frst Name" required="" autofocus="" type="email">
        <label for="inputName" class="sr-only">Name</label>
        <input id="inputName" class="form-control" placeholder="Name" required="" autofocus="" type="Name">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" type="email">
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