<?php
include("connexiondb.php");

if(isset($_POST['textpublie']) && !empty($_POST['textpublie']) && isset($_POST['click']) ){
	$text=htmlspecialchars($_POST['textpublie']);
	
	$req = $DBcon->prepare('INSERT INTO `messages`(`ID`, `IDUSER`, `CONTENU`) VALUES (NULL,?,?)');
					
    $req->bindValue(1, $_SESSION['id'], PDO::PARAM_STR);
    $req->bindValue(2, $text, PDO::PARAM_STR);

    $check=$req->execute();
    
    if($check){
        echo "<meta http-equiv='refresh' content='0; URL=accueil_connecte.php'>";    
        //header('Location: accueil_connecte.php');
    }
    else
        echo "Un problème s'est produit lors de la requete.<br>";
    
    $req->closeCursor();
}
?>