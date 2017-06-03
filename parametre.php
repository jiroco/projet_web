<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
    exit();
}
include("head.php");
?>

<form class="" action="parametre.php" method="post">
  <label for="">Changez votre mot de Passe</label>
  <input type="password" name="password" value="">
  <input type="submit" value="Changer">
  <br/>
  <label for="">Changez votre Username</label>
  <input type="text" name="username" value="">
  <input type="submit" value="Changer">
  <br/>
  <label for="">Changez votre E-mail</label>
  <input type="text" name="mail" value="">
  <input type="submit" name="" value="changer">
  <br/>
  <label for="">Changez votre nom</label>
  <input type="text" name="nom" value="">
  <input type="submit" name="" value="changer">
  <br/>
  <label for="">Changez votre prenom</label>
  <input type="text" name="prenom" value="">
  <input type="submit" name="" value="changer">
</form>

<?php

if (empty($_POST['password'])) {$_POST['password']=NULL;}
if (empty($_POST['username'])) {$_POST['username']=NULL;}
if (empty($_POST['mail'])) {$_POST['mail']=NULL;}
if (empty($_POST['nom'])) {$_POST['nom']=NULL;}
if (empty($_POST['prenom'])) {$_POST['prenom']=NULL;}

$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','root');
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
  echo "Votre username a bien été changé";
}
elseif ($_POST['mail'] != NULL) {
  $change = $DBcon->prepare('UPDATE user SET MAIL = ? WHERE ID = ?');
  $change->bindValue(1,$_POST['mail'],PDO::PARAM_INT);
  $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
  $change->execute();
  echo "Votre adresse mail a bien été changé";
}
elseif ($_POST['nom'] != NULL) {
  $change = $DBcon->prepare('UPDATE user SET NOM = ? WHERE ID = ?');
  $change->bindValue(1,$_POST['nom'],PDO::PARAM_INT);
  $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
  $change->execute();
  echo "Votre nom a bien été changé";
}
elseif ($_POST['prenom'] != NULL) {
  $change = $DBcon->prepare('UPDATE user SET PRENOM = ? WHERE ID = ?');
  $change->bindValue(1,$_POST['prenom'],PDO::PARAM_INT);
  $change->bindValue(2,$_SESSION["id"],PDO::PARAM_INT);
  $change->execute();
  echo "Votre prenom a bien été changé";
}

?>
