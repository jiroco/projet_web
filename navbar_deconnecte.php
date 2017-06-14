<!DOCTYPE html>
<html>
  <head>
    <title>Barre de navigation</title>
    <?php include 'include_html.php';?>

  </head>

  <body>


    <!-- Fixed navbar début-->
    <nav class="navbar navbar-inverse navbar-fixed-top ">
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
            <li><a id="surligne" href="index.php">Accueil</a></li>
            <li><a href="htmlabout.php">A propos</a></li>
            <li><a href="htmlcontact.php">Contact</a></li>
          </ul>

        </div>
      </div><!--Container fin -->
    </nav><!-- Fixed navbar fin -->
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/offcanvas.js"></script>
    

  </body>
</html>