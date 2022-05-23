<?php
include "scripts/connectdb.php";
$id=$_GET['id'];
$likes=$_GET['likes'];

$sql = "UPDATE post SET likes = likes-1 WHERE id = :id";
$st = $db->prepare($sql);
$st->execute([':id' => $id]);

?>