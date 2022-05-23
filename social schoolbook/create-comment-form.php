<form  action="create-comment.php" method="post">
    <input id="like" type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <textarea  type="text" name="comment" rows="3" cols="65" required></textarea>
    <br>
    <input type="submit" value="comment" class="btn btn-primary"><br><br>
</form>