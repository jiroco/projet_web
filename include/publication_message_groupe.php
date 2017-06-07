<?php
include("connexiondb.php");
session_start();
if(isset($_POST['textpubliegroupe']) && !empty($_POST['textpubliegroupe']) && isset($_POST['clickgroupe']) ){
    
    $text=htmlspecialchars($_POST['textpubliegroupe']);
    
    $req = $DBcon->prepare('INSERT INTO `messagetog`(`ID`, `IDGROUPE`, `MESSAGE`, `NOM`, `PRENOM`, `IMAGE`) VALUES (NULL,?,?,?,?,?)');
    
    $req->bindValue(1, $_SESSION['IDGROUPE'], PDO::PARAM_STR);
    $req->bindValue(2, $text, PDO::PARAM_STR);
    $req->bindValue(3, $_SESSION['nom'], PDO::PARAM_STR);
    $req->bindValue(4, $_SESSION['prenom'], PDO::PARAM_STR);
    $req->bindValue(5, $_SESSION['imgprofil'], PDO::PARAM_STR);
    $check=$req->execute();
    
    if($check){
        header("Location: ../groupe.php?Idgroupe=".$_SESSION["IDGROUPE"]);
    }
    else
        echo "Un problème s'est produit lors de la requete.<br>";
    
    $req->closeCursor();
}
?>