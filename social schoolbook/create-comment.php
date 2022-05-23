<?php
include "scripts/connectdb.php";
print_r($_POST);
$post_id = $_POST['id'];
$comment = $_POST['comment'];
$sql = "INSERT INTO comment(post_id, comment)VALUES (:post_id, :comment)";
$stmt = $db->prepare($sql);
$stmt->execute([':post_id' => $post_id, ':comment' => $comment]);

header('location:show-post.php?id=' . $post_id);
?>