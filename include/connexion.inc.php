<?php
include("connexiondb.php");
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['passwd']) && !empty($_POST['passwd']) && is_string($_POST['username']) && is_string($_POST['passwd'])){
        
        $username=htmlspecialchars($_POST['username']); //Certains caractères ont des significations spéciales en HTML, et doivent être remplacés par des entités HTML pour conserver leurs significations.
        $pass=htmlspecialchars(sha1($_POST['passwd']));//hachage
        $req = $DBcon->prepare('SELECT ID, USERNAME, PASSWORD, MAIL, NOM, PRENOM, DEPARTEMENT from user WHERE USERNAME = ? ');
        $req->bindValue(1,$username,PDO::PARAM_STR);
        $check=$req->execute(); 
        echo $check;
        if($check){
            echo "coucou"; 
            if($donnee = $req->fetch()){
                if($pass == $donnee['PASSWORD']){
                    session_start(); 
                    $_SESSION['id'] = $donnee['ID'];
                    $_SESSION['mail']=$donnee['MAIL'];
                    $_SESSION['nom'] = $donnee['NOM'];
                    $_SESSION['prenom']=$donnee['PRENOM'];
                    $_SESSION['username']= $donnee['USERNAME'];
                    $_SESSION['departement']= $donnee['DEPARTEMENT'];
                    echo "c'est bon <meta http-equiv='refresh' content='0; URL=htmlpageAccueil.php'>";    
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