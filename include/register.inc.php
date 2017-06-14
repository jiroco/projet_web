<?php
include("connexiondb.php");
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['passwd']) && !empty($_POST['passwd']) && isset($_POST['username']) && !empty($_POST['username'])){

    $email=htmlspecialchars($_POST['email']);
	$nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $passwd=htmlspecialchars($_POST['passwd']);
    $departement=htmlspecialchars($_POST['departement']);
    $passwd=sha1($passwd);
    $username=htmlspecialchars($_POST['username']);
	$req = $DBcon->prepare('INSERT INTO `user`(`ID`, `NOM`, `PRENOM`, `MAIL`, `USERNAME`, `PASSWORD`,`DEPARTEMENT`) VALUES (NULL,?,?,?,?,?,?)');
					
    $req->bindValue(1, $nom, PDO::PARAM_STR);
    $req->bindValue(2, $prenom, PDO::PARAM_STR);
    $req->bindValue(3, $email, PDO::PARAM_STR);
    $req->bindValue(4, $username, PDO::PARAM_STR);
    $req->bindValue(5, $passwd, PDO::PARAM_STR);
    $req->bindValue(6, $departement, PDO::PARAM_STR);

    $check=$req->execute();
    
    if($check){
        echo "<meta http-equiv='refresh' content='0; URL=../login.php'>";    
    }
    else
        echo "Un problème s'est produit lors de la requete.<br>";

}
else
    include("../register.php");
    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> un champ est vide. </div></div>";
    
$req->closeCursor();
?>