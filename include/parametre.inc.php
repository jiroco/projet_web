<?php

session_start();

include("connexiondb.php");

if ((isset($_POST['nom']) && !empty($_POST['nom'])) ||
  (isset($_POST['prenom']) && !empty($_POST['prenom'])) ||
  (isset($_POST['mail']) && !empty($_POST['mail'])) ||
  (isset($_POST['username']) && !empty($_POST['username'])) ||
  (isset($_POST['password']) && !empty($_POST['password']))) {

  if ($_POST['password'] != NULL) {
    $change = $DBcon->prepare('UPDATE user SET PASSWORD = ? WHERE ID = ?');
    $change->bindValue(1,strip_tags(sha1($_POST['password'])),PDO::PARAM_INT);
    $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
    $change->execute();
    echo "Votre mot de passe a bien été changé ";
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

}

echo "<meta http-equiv='refresh' content='0; URL=../accueil_connecte.php'>";

?>
