<!DOCTYPE html>
<html>
<head>
  <title>Paramètres</title>

</head>
<body>
  <?php include 'htmlnavBar.php'; ?>
  <?php
  session_start();
  if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
      echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
      exit();
  }
  ?>

  <div class="container container col-md-10 col-md-offset-1">
    <div class="row ">

        <div id="paramètre" class="fade in active"> <!--Paramètre début -->
          <div class="container" style="width:100%;"><!--container début -->
            <div class="panel-group"><!-- panel group debut -->
              <div class="panel panel-default"> <!--Paramètre début -->
                <div class="panel-heading"> <!--panel heading pour tous les paramètres -->
                  <h2>Paramètres</h2>
                </div>
                <div class="panel-body"> <!-- panel body debut  -->
                  <div class="row"> <!-- row debut -->
                      <div class=" col-md-10 col-lg-10 col-md-offset-1" > <!-- colone machin chose debut -->
                        <table class="table table-user-information" style="font-size: inherit;">
                          <tbody>
                            <form action="include/parametre.inc.php" method="post">
                            <tr>
                              <td>Changer votre Nom</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre nom..." name="nom" value=""></td>
                              <td><input type="submit" value="Changer" class="btn btn-default"></td>
                            </tr>
                            <tr>
                              <td>Changer votre Prénom</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre prénom..." name="prenom" value=""></td>
                              <td><input type="submit" value="Changer" class="btn btn-default"></td>
                            </tr>

                            <tr>
                              <td>Changer votre E-mail</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre e-mail..." name="mail" value=""></td>
                              <td><input type="submit" name="" value="changer" class="btn btn-default"></td>
                            </tr>
                            <tr>
                              <td>Changer votre Username</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre username..." name="username" value=""></td>
                              <td><input type="submit" value="Changer" class="btn btn-default"></td>
                            </tr>
                            <tr>
                              <td>Changer votre mot de Passe</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre mot de passe..." name="password" value=""></td>
                              <td><input type="submit" value="Changer" class="btn btn-default"></td>
                            </tr>

                           </form>


                          </tbody>
                        </table>
                      </div> <!-- colone machin chose fin -->
                  </div> <!-- row fin -->
                </div> <!-- panel body  fin -->
              </div><!-- panel fin -->
            </div><!-- panel group fin  -->




            </div>
            </div>

           </div><!--panel heading pour tous les paramètres fin -->

          </div><!--Container fin -->
        </div> <!-- Paramètre fin -->




        </div><!--colonne 10 fin -->
    </div><!--row fin -->
  </div><!--container fin -->

<!-- <?php include("include/parametre.inc.php"); ?> -->

</body>
</html>
