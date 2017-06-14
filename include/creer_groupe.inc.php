<?php
include("connexiondb.php");
if(isset($_POST['nomgroupe']) && !empty($_POST['nomgroupe'])){

    $nom=htmlspecialchars($_POST['nomgroupe']);
	$req = $DBcon->prepare('INSERT INTO `groupe`(`ID`, `NOM`) VALUES (NULL,?)');

    $req->bindValue(1, $nom, PDO::PARAM_STR);

    $check=$req->execute();

    if($check){
        $req2 = $DBcon->prepare('SELECT ID FROM groupe where nom=?');
        $req2->bindValue(1, $nom, PDO::PARAM_STR);

        $check2=$req2->execute();
        $IDGROUPE=$req2->fetch();
        $req = $DBcon->prepare('INSERT INTO `atog`(`IDUSER`, `IDGROUPE`) VALUES (?,?)');

        $req->bindValue(1, $_SESSION['id'], PDO::PARAM_STR);
        $req->bindValue(2, $IDGROUPE['ID'], PDO::PARAM_STR);
        $check=$req->execute();
        if ($check){
            echo "<meta http-equiv='refresh' content='0; URL=htmlgroupe.php'>";
        }

    }
    else
        echo "Un problème s'est produit lors de la requete.<br>";

    $req->closeCursor();
}
?>
