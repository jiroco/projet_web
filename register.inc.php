<?php
$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','root');

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['passwd']) && !empty($_POST['passwd']) && isset($_POST['username']) && !empty($_POST['username'])){
	$email=htmlspecialchars($_POST['email']);
	$nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $passwd=htmlspecialchars($_POST['passwd']);
    $passwd=sha1($passwd);
    $username=htmlspecialchars($_POST['username']);
	$req = $DBcon->prepare('INSERT INTO `user`(`ID`, `NOM`, `PRENOM`, `MAIL`, `USERNAME`, `PASSWORD`) VALUES (NULL,?,?,?,?,?)');
					
    $req->bindValue(1, $nom, PDO::PARAM_STR);
    $req->bindValue(2, $prenom, PDO::PARAM_STR);
    $req->bindValue(3, $email, PDO::PARAM_STR);
    $req->bindValue(4, $username, PDO::PARAM_STR);
    $req->bindValue(5, $passwd, PDO::PARAM_STR);

    $check=$req->execute();
    
    if($check){
        include("connexion.inc.php");
    }
    else
        echo "Un problème s'est produit lors de la requete.<br>";
    
    $req->closeCursor();
}
?>