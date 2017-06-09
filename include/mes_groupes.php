<?php
include("connexiondb.php");

$req = $DBcon->prepare('SELECT NOM, ID from groupe JOIN atog ON atog.IDGROUPE=groupe.ID WHERE atog.IDUSER=?');
$req->bindValue(1,$_SESSION['id'],PDO::PARAM_INT);
$check=$req->execute();?>



<?php
if($check){ ?>

	<div class="container col-md-10 col-md-offset-1 ">
	  <div class="list-group  ">
	  <?php while ($resultat=$req->fetch()){
		//$_SESSION["IDGROUPE"]=$resultat["ID"];
		//print_r($resultat["ID"]);?>
			<?php echo ("<a href='groupe.php?Idgroupe=".$resultat['ID']."' name='groupe_valeur' value='".$resultat["ID"]."'' class='list-group-item'".">".$resultat["NOM"]."</a>"); ?>   

<a href=""></a>

<?php } ?>
  </div>
</div>

<?php
}}
else
	echo "Erreur de requete.<br>";
?>

<?php //echo ("<a href='groupe.php?Idgroupe=".$resultat['ID']."' name = 'groupe_valeur' value=".'$resultat["IDG"]'.">".$resultat["NOM"]);
		//echo (" / "); ?>