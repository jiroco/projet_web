<?php
include("connexiondb.php");
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['passwd']) && !empty($_POST['passwd']) && is_string($_POST['username']) && is_string($_POST['passwd'])){
        
        $username=htmlspecialchars($_POST['username']);
        $pass=htmlspecialchars(sha1($_POST['passwd']));
        $req = $DBcon->prepare('SELECT ID, USERNAME, PASSWORD, MAIL, NOM, PRENOM, DEPARTEMENT, IMAGE_PROFIL from user WHERE USERNAME = ? ');
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
                    $_SESSION['username']= $donnee['USERNAME'];
                    $_SESSION['departement']= $donnee['DEPARTEMENT'];
                    $_SESSION['imgprofil']=$donnee['IMAGE_PROFIL'];
                    echo "<meta http-equiv='refresh' content='0; URL=accueil_connecte.php'>";    
                }
                else
                    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Identifiants incorrects. </div></div>";
            }
            else                
                echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Identifiants incorrects. </div></div>";        
        }
        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();
    }
?>