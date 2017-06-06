
<?php 
include('include/connexiondb.php');
$res = $DBcon->query("SELECT CONTENU from messages WHERE IDUSER IN (SELECT `IDUSERABONNE` FROM `abonnee` WHERE `IDUSER`=2) or IDUSER=2 GROUP BY ID DESC");
$data = array();
while ($productsRow= $res->fetch(PDO::FETCH_ASSOC)){
  $data[] = $productsRow;
}
echo json_encode($data , JSON_UNESCAPED_UNICODE );
?>