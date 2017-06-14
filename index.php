<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php include 'include_html.php';?>
    
    <title>INSA'Twitter</title>

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
        <button type="submit" class="btn btn-XL btn-default">Connexion</button>
        </form>
        <br><br>
        <form methode="POST" action="register.php">
        <button type="submit" class="btn btn-XL btn-default">Inscription</button>
        </form>

      </div>
  </body>
</html>

