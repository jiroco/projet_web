<?php
session_start();
$target_dir = "image/";
$_FILES["pictureprofil"]["name"]=$_SESSION["username"].".png";
$target_file = $target_dir . basename($_FILES["pictureprofil"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pictureprofil"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image or too large"; 
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["pictureprofil"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "png") {
    echo "Sorry, only PNG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    header("Refresh: 3; URL=profil.php");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pictureprofil"]["tmp_name"], $target_file)) { 
   
        echo "<meta http-equiv='refresh' content='0; URL=profil.php'>";
   
    } else {
        echo "Sorry, there was an error uploading your file.";
        header("Refresh: 3; URL=profil.php");
    }
}
?>