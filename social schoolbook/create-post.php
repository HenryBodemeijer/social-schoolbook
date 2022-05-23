<?php
include "scripts/connectdb.php";
include "templates/function.php";

if (isset($_FILES['file'])) {
    $name_file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $file_ext=explode('.',$_FILES['file']['name']);
    $extensions=array("jpeg","jpg","png");

    if(in_array($file_ext[1],$extensions)===true)
    {
        // verplaatw bestand
        $local_image = "uploaded/";
        $upload = move_uploaded_file($tmp_name, $local_image . $name_file);
        move_uploaded_file($tmp_name,"uploads/".$name_file);

        $auteur = $_POST['auteur'];
        $titel = $_POST['titel'];
        $bericht = $_POST['bericht'];

        $sql = "INSERT INTO post (auteur, titel, bericht, afbeelding) VALUES (:auteur, :titel, :bericht, :afbeelding)";

        $st = $db->prepare($sql);
        $st->execute(['auteur' => $auteur, 'titel' => $titel, 'bericht' => $bericht, 'afbeelding' => $name_file]);


        echo 'File Upload Successfully.';
        header('location: user.php');
    }

    else
    {
        echo ' File Extension should be .jpeg,jpg,png.';
    }
}

