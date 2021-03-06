<?php

include("connexiondb.php");
$id_message = $_POST["id_message"];
$id_user = $_POST["id_user"];

$checkAutor = $DBcon->prepare('SELECT * FROM aime WHERE ID_USER=? AND ID_MESSAGE=?');
$checkAutor->bindValue(1,$id_user,PDO::PARAM_INT);
$checkAutor->bindValue(2,$id_message,PDO::PARAM_INT);
$checkAutor->execute();
$autorisation=$checkAutor->fetch();

if ($autorisation != '') {
  $recupLike = $DBcon->prepare('SELECT THUMBSUP FROM messages WHERE ID = ?');
  $recupLike->bindValue(1,$id_message,PDO::PARAM_INT);
  $recupLike->execute();
  $statement = $recupLike->fetch();
  $nb_likes = $statement[0];
  echo $nb_likes;
}

else {
  $recupLike = $DBcon->prepare('SELECT THUMBSUP FROM messages WHERE ID = ?');
  $recupLike->bindValue(1,$id_message,PDO::PARAM_INT);
  $recupLike->execute();
  $statement = $recupLike->fetch();
  $nb_likes = $statement[0];

  $nb_likes = $nb_likes + 1;

  $majLike = $DBcon->prepare('UPDATE messages SET THUMBSUP = ? WHERE ID = ?');
  $majLike->bindValue(1,$nb_likes,PDO::PARAM_INT);
  $majLike->bindValue(2,$id_message,PDO::PARAM_INT);
  $majLike->execute();

  $majAutor = $DBcon->prepare('INSERT INTO aime(ID_USER, ID_MESSAGE) VALUES (?,?)');
  $majAutor->bindValue(1,$id_user,PDO::PARAM_INT);
  $majAutor->bindValue(2,$id_message,PDO::PARAM_INT);
  $majAutor->execute();

  echo $nb_likes;

}


?>
