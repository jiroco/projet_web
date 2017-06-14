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
                            <form action="accueil_connecte.php" method="post">
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
                              <td><input type="text" class="form-control" placeholder="Changez votre mot de passe..." name="username" value=""></td>
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

                <?php

                if (empty($_POST['password'])) {$_POST['password']=NULL;}
                if (empty($_POST['username'])) {$_POST['username']=NULL;}
                if (empty($_POST['mail'])) {$_POST['mail']=NULL;}
                if (empty($_POST['nom'])) {$_POST['nom']=NULL;}
                if (empty($_POST['prenom'])) {$_POST['prenom']=NULL;}

                include("include/connexiondb.php");

                if ($_POST['password'] != NULL) {
                  $change = $DBcon->prepare('UPDATE user SET PASSWORD = ? WHERE ID = ?');
                  $change->bindValue(1,strip_tags(sha1($_POST['password'])),PDO::PARAM_INT);
                  $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                  $change->execute();
                  echo "Votre mot de passe a bien été changé  ";
                }
                elseif ($_POST['username'] != NULL) {
                  $change = $DBcon->prepare('UPDATE user SET USERNAME = ? WHERE ID = ?');
                  $change->bindValue(1,strip_tags($_POST['username']),PDO::PARAM_INT);
                  $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                  $change->execute();
                  $_SESSION['username']=strip_tags($_POST['username']);
                  echo "Votre username a bien été changé";
                }
                elseif ($_POST['mail'] != NULL) {
                  $change = $DBcon->prepare('UPDATE user SET MAIL = ? WHERE ID = ?');
                  $change->bindValue(1,strip_tags($_POST['mail']),PDO::PARAM_INT);
                  $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                  $change->execute();
                  $_SESSION['mail']=strip_tags($_POST['mail']);
                  echo "Votre adresse mail a bien été changé";
                }
                elseif ($_POST['nom'] != NULL) {
                  $change = $DBcon->prepare('UPDATE user SET NOM = ? WHERE ID = ?');
                  $change->bindValue(1,strip_tags($_POST['nom']),PDO::PARAM_INT);
                  $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                  $change->execute();
                  $_SESSION['nom']=strip_tags($_POST['nom']);
                  echo "Votre nom a bien été changé";
                }
                elseif ($_POST['prenom'] != NULL) {
                  $change = $DBcon->prepare('UPDATE user SET PRENOM = ? WHERE ID = ?');
                  $change->bindValue(1,strip_tags($_POST['prenom']),PDO::PARAM_INT);
                  $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                  $change->execute();
                  $_SESSION['prenom']=$_POST['prenom'];
                  echo "Votre prenom a bien été changé";
                }

                ?>
              </div>
            </div>

           </div><!--panel heading pour tous les paramètres fin -->

          </div><!--Container fin -->
        </div> <!-- Paramètre fin -->




        </div><!--colonne 10 fin -->
    </div><!--row fin -->
  </div><!--container fin -->


</body>
</html>
