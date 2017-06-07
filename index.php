<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'include_html.php';?>
    
    <title>Accueil</title>

  </head>

  <body>
<?php include("navbar_deconnecte.php");?>
    <div class="container">
      <div class="starter-template">
        <h1>INSA'Twitter</h1>
        <p class="lead">Un Twitter réservé à l'INSA !!!</p>
      </div>

      <div class="bouton">
      <form methode="POST" action="login.php">
        <button type="submit" class="btn btn-XL btn-default">Login</button>
        </form>
        <br><br>
        <form methode="POST" action="register.php">
        <button type="submit" class="btn btn-XL btn-default">Register</button>
        </form>

      </div>
  </body>
</html>

