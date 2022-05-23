<?php
include "scripts/connectdb.php";

$auteur = $_POST['auteur'];
$titel = $_POST['titel'];
$bericht = $_POST['bericht'];
$id = $_POST['id'];

$sql = "UPDATE post SET auteur = :auteur , titel = :titel, bericht = :bericht WHERE id = :id ";

$st = $db->prepare($sql);
$st->execute([':auteur' => $auteur, ':titel' => $titel, ':bericht' => $bericht, ':id' => $id]);
header('location: admin.php');