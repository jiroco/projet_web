<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
?>
    <!DOCTYPE html>
    <html lang="fr">
      <head>
        <title>A propos INSA'Twitter</title>
      </head>

      <body>
        <?php include 'navbar_deconnecte.php';?>

        <div class="container col-md-10 col-md-offset-1">
          <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header">A propos :
                          <small>Rencontrons nous!</small>
                      </h1>
                  </div>
              </div>

              <!-- Team Members Row -->
              <div class="row">
                  <div class="col-lg-12">
                      <h2 class="page-header">Notre équipe</h2>
                  </div>
                  <div class="col-lg-6 col-sm-6 text-center">
                      <img class="img-circle img-responsive img-center" src="image/jean.png" alt="">
                      <h3>Jean Savoldeli
                          <small>Backend</small>
                      </h3>
                      <p>Le fait que, grâce au web, toute la connaissance soit accessible en un clic, ça me semble être une bonne chose.</p><br/><br/>
                  </div>
                  <div class="col-lg-6 col-sm-6 text-center">
                      <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                      <h3>Claire Hamonet
                          <small>Frontend</small>
                      </h3>
                      <p>What does this team member to? Keep it short! This is also a great spot for social links!</p><br/><br/>
                  </div>
                  <div class="col-lg-6 col-sm-6 text-center">
                      <img class="img-circle img-responsive img-center" src="image/aloise.png" alt="">
                      <h3>Aloïse Depelley
                          <small>Frontend</small>
                      </h3>
                      <p>What does this team member to? Keep it short! This is also a great spot for social links!</p><br/><br/>
                  </div>
                  <div class="col-lg-6 col-sm-6 text-center">
                      <img class="img-circle img-responsive img-center" src="image/david.png" alt="">
                      <h3>David Neyron
                          <small>Backend</small>
                      </h3>
                      <p>What does this team member to? Keep it short! This is also a great spot for social links!</p><br/><br/>
                  </div>              
              </div>

              <hr>

              <!-- Footer -->
              <footer>
                  <div class="row">
                      <div class="col-lg-12">
                          <p>Copyright &copy; INSA'Twitter 2017</p>

                      </div>
                      <!-- /.col-lg-12 -->
                  </div>
                  <!-- /.row -->
              </footer>

          </div>
          <!-- /.container -->
        </div>
      </body>
    </html>
<?php
}
else{
  ?>
 <html lang="fr">
  <head>
    <title>A propos INSA'Twitter</title>
  </head>

  <body>
    <?php include 'htmlnavBar.php';?>

    <div class="container col-md-10 col-md-offset-1">
      <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">A propos :
                      <small>Rencontrons nous!</small>
                  </h1>
              </div>
          </div>

          <!-- Team Members Row -->
          <div class="row">
              <div class="col-lg-12">
                  <h2 class="page-header">Notre équipe</h2>
              </div>
              <div class="col-lg-6 col-sm-6 text-center">
                  <img class="img-circle img-responsive img-center" src="image/jean.png" alt="">
                  <h3>Jean Savoldeli
                      <small>Backend</small>
                  </h3>
                  <p>Le fait que, grâce au web, toute la connaissance soit accessible en un clic, ça me semble être une bonne chose.</p><br/><br/>
              </div>
              <div class="col-lg-6 col-sm-6 text-center">
                  <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                  <h3>Claire Hamonet
                      <small>Frontend</small>
                  </h3>
                  <p>What does this team member to? Keep it short! This is also a great spot for social links!</p><br/><br/>
              </div>
              <div class="col-lg-6 col-sm-6 text-center">
                  <img class="img-circle img-responsive img-center" src="image/aloise.png" alt="">
                  <h3>Aloïse Depelley
                      <small>Frontend</small>
                  </h3>
                  <p>What does this team member to? Keep it short! This is also a great spot for social links!</p><br/><br/>
              </div>
              <div class="col-lg-6 col-sm-6 text-center">
                  <img class="img-circle img-responsive img-center" src="image/david.png" alt="">
                  <h3>David Neyron
                      <small>Backend</small>
                  </h3>
                  <p>What does this team member to? Keep it short! This is also a great spot for social links!</p><br/><br/>
              </div>              
          </div>

          <hr>

          <!-- Footer -->
          <footer>
              <div class="row">
                  <div class="col-lg-12">
                      <p>Copyright &copy; INSA'Twitter 2017</p>

                  </div>
                  <!-- /.col-lg-12 -->
              </div>
              <!-- /.row -->
          </footer>

      </div>
      <!-- /.container -->
    </div>
  </body>
</html> 
<?php
}
?>