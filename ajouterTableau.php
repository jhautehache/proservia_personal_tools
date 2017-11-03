<?php
$target_dir = "uploads/";
$target_file = $target_dir . hash('sha256', basename($_FILES["fileToUpload"]["name"])) . '.' . substr($_FILES["fileToUpload"]["name"], -3);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br />";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if($uploadOk == 1) {
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
    {
        echo 'Upload effectu&eacute; avec succ&egrave;s !';
    }
    else //Sinon (la fonction renvoie FALSE).
    {
        echo 'Echec de l\'upload de ' . $_FILES["fileToUpload"]["tmp_name"] . ' > '. $target_file . ' !';
    }
}
?>

