<?php
include "scripts/connectdb.php";


$id = $_GET['id'];

$sql = "SELECT * FROM post WHERE id =:id";

$st = $db->prepare($sql);

$st->execute(['id' => $id]);

$row = $st->fetch();



unlink("C:/xampp/htdocs/GitHub/helloworldsource-HenryBodemeijer/social schoolbook/uploaded/". $row['afbeelding']);



$sql = "DELETE FROM post WHERE id = :id";

$st = $db->prepare($sql);

$st->execute(['id' => $id]);

header('location: admin.php');
