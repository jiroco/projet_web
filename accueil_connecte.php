<?php
session_start();


if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}

include("publication_abonnees.php");
include("publication_message.php");
?>
