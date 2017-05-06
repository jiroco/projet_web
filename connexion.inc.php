<?php

$DBcon = new PDO('mysql:host=localhost;dbname=insatwitter;charset=utf8','root','');

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['passwd']) && !empty($_POST['passwd']) && is_string($_POST['username']) && is_string($_POST['passwd'])){
		
		$username=htmlspecialchars($_POST['username']);
		$pass=htmlspecialchars(sha1($_POST['passwd']));
        $req = $DBcon->prepare('SELECT ID, USERNAME, PASSWORD, MAIL, NOM, PRENOM from user WHERE USERNAME = ? ');
        $req->bindValue(1,$username,PDO::PARAM_STR);
        $check=$req->execute();  
        if($check){
            if($donnee = $req->fetch()){
                if($pass == $donnee['PASSWORD']){
                    session_start(); 
                    $_SESSION['id'] = $donnee['ID'];
                    $_SESSION['mail']=$donnee['MAIL'];
                    $_SESSION['nom'] = $donnee['NOM'];
                    $_SESSION['prenom']=$donnee['PRENOM'];
                    echo "<meta http-equiv='refresh' content='0; URL=accueil_connecte.php'>";    
                }
                else
                    echo "Mauvais identifiants.<br>";
            }
            else
                echo "Mauvais identifiants.<br>";               
        }
        else
            echo "Erreur de requete.<br>";
        
		$req->closeCursor();
	}

?>
