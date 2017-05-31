<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barre de navigation</title>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/navBar.css" rel="stylesheet">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body>


    <!-- Fixed navbar début-->
    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container "><!--Container début -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="nomProjet">INSA'Twitter</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav nav-tabs">
            <li><a id="surligne" href="accueil_connecte.php">Home</a></li>
            <li><a href="htmlabout.php">About</a></li>
            <li><a href="htmlcontact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right"> <!-- button deconexion début-->
            <li>
              <a href="deconnexion.php" style="color: #CF0A1D;">
                <span class="glyphicon glyphicon-off couleurINSA" ></span> Deconnexion</a>
            </li>
          </ul><!-- button deconexion fin-->
        </div>
      </div><!--Container fin -->
    </nav><!-- Fixed navbar fin -->

    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/message.js"></script>


  </body>
</html>