<?php
session_start();
$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','');

if(isset($_POST['textpubliegroupe']) && !empty($_POST['textpubliegroupe']) && isset($_POST['clickgroupe']) ){
    
    $text=htmlspecialchars($_POST['textpubliegroupe']);
    
    $req = $DBcon->prepare('INSERT INTO `messagetog`(`ID`, `IDGROUPE`, `MESSAGE`) VALUES (NULL,?,?)');
    
    $req->bindValue(1, $_SESSION['IDGROUPE'], PDO::PARAM_STR);
    $req->bindValue(2, $text, PDO::PARAM_STR);

    $check=$req->execute();
    echo "salut";
    if($check){
        header("Location: groupe.php?Idgroupe=".$_SESSION["IDGROUPE"]);
    }
    else
        echo "Un problème s'est produit lors de la requete.<br>";
    
    $req->closeCursor();
}
?>