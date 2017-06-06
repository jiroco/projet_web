<html>
<head>
  <title>Test</title>

</head>
<body>
  <?php include 'htmlnavBar.php'; ?>
  <?php
  session_start();
  if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
      echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
      exit();
  }
  include("head.php");
  ?>


  <div class="container">
    <div class="row ">

      <nav class="col-md-2 sidebar-offcanvas " > <!--nav vertical début -->

          <ul class="nav nav-pills-changer nav-stacked "  data-spy="affix">
            <li><a  href="accueil_connecte.php">Accueil</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li class="active"><a href="parametre.php" >Paramètre</a></li>
            <li><a href="htmlgroupe.php">Groupe</a></li>
            <li><a href="abonne.php">Mes abonnés</a></li>

          </ul>
        </nav> <!--nav vertical fin -->

      <div class="col-md-10 col-md-offset-2" > <!--colonne 10 debut -->

        <div id="paramètre" class="fade in active"> <!--Paramètre début -->
          <div class="container" style="width:100%;"><!--container début -->

              <div class="panel panel-default"> <!--Paramètre début -->
                  <div class="panel-heading"> <!--panel heading pour tous les paramètres -->
                    <h3>Paramètres</h3>

                <div class="panel-body"> <!-- panel body debut  -->
                  <div class="row"> <!-- row debut -->
                          
                            <div class=" col-md-12 col-lg-12 "> <!-- colone machin chose debut -->
                              <table class="table table-user-information">
                                <tbody>
                                  <form class="" action="accueil_connecte.php" method="post">
                                  <tr>
                                    <td>Changer votre Nom</td>
                                    <td><input type="text" class="form-control" placeholder="Change surname..." name="nom" value=""></td>
                                    <td><input type="submit" value="Changer" class="btn btn-default"></td>
                                    <br/>
                                  </tr>
                                  <tr>
                                    <td>Changer votre Prénom</td>
                                    <td><input type="text" class="form-control" placeholder="Change firstname..." name="prenom" value=""></td>
                                    <td><input type="submit" value="Changer" class="btn btn-default"></td>
                                    <br/>
                                  </tr>

                                  <tr>
                                    <td>Changer votre E-mail</td>
                                    <td><input type="text" class="form-control" placeholder="Change e-mail..." name="mail" value=""></td>
                                    <td><input type="submit" name="" value="changer" class="btn btn-default"></td>
                                    <br/>
                                  </tr>
                                  <tr>
                                    <td>Changer votre Username</td>
                                    <td><input type="text" class="form-control" placeholder="Change username..." name="username" value=""></td>
                                    <td><input type="submit" value="Changer" class="btn btn-default"></td>
                                    <br/>
                                  </tr>                                  
                                  <tr>
                                    <td>Changer votre mot de Passe</td>
                                    <td><input type="text" class="form-control" placeholder="Change password..." name="username" value=""></td>
                                    <td><input type="submit" value="Changer" class="btn btn-default"></td>
                                    <br/>
                                  </tr>
                                  
                                 </form>
                                </tbody>
                              </table>
                            </div> <!-- colone machin chose fin -->
                          </div> <!-- row fin -->
                  </div> <!-- panel body  fin --> 
                  

                  <?php

                  if (empty($_POST['password'])) {$_POST['password']=NULL;}
                  if (empty($_POST['username'])) {$_POST['username']=NULL;}
                  if (empty($_POST['mail'])) {$_POST['mail']=NULL;}
                  if (empty($_POST['nom'])) {$_POST['nom']=NULL;}
                  if (empty($_POST['prenom'])) {$_POST['prenom']=NULL;}

                  include("include/connexiondb.php");

                  if ($_POST['password'] != NULL) {
                    $change = $DBcon->prepare('UPDATE user SET PASSWORD = ? WHERE ID = ?');
                    $change->bindValue(1,sha1($_POST['password']),PDO::PARAM_INT);
                    $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                    $change->execute();
                    echo "Votre mot de passe a bien été changé  ";
                  }
                  elseif ($_POST['username'] != NULL) {
                    $change = $DBcon->prepare('UPDATE user SET USERNAME = ? WHERE ID = ?');
                    $change->bindValue(1,$_POST['username'],PDO::PARAM_INT);
                    $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                    $change->execute();
                    $_SESSION['username']=$_POST['username'];
                    echo "Votre username a bien été changé";
                  }
                  elseif ($_POST['mail'] != NULL) {
                    $change = $DBcon->prepare('UPDATE user SET MAIL = ? WHERE ID = ?');
                    $change->bindValue(1,$_POST['mail'],PDO::PARAM_INT);
                    $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                    $change->execute();
                    $_SESSION['mail']=$_POST['mail'];
                    echo "Votre adresse mail a bien été changé";
                  }
                  elseif ($_POST['nom'] != NULL) {
                    $change = $DBcon->prepare('UPDATE user SET NOM = ? WHERE ID = ?');
                    $change->bindValue(1,$_POST['nom'],PDO::PARAM_INT);
                    $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
                    $change->execute();
                    $_SESSION['nom']=$_POST['nom'];
                    echo "Votre nom a bien été changé";
                  }
                  elseif ($_POST['prenom'] != NULL) {
                    $change = $DBcon->prepare('UPDATE user SET PRENOM = ? WHERE ID = ?');
                    $change->bindValue(1,$_POST['prenom'],PDO::PARAM_INT);
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