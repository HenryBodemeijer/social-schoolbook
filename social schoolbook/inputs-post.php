<?php
$auteur = "";

if (!empty($post)) {

$auteur = $post["auteur"];

}

$titel = "";

if (!empty($post)) {

$titel = $post["titel"];
}

$bericht = "";

if (!empty($post)) {

$bericht = $post["bericht"];
}

$name_file = "";

if (!empty($post)) {

$name_file = $post["afbeelding"];
}
?>

    <input type="hidden" name="id" value="<?php echo $post["id"]; ?>">

    <div class="form-group">
    <h2>auteur</h2>
    <input class="form-control" type="text" name="auteur" value="<?php echo $auteur;?>" required>
    <br>

    <h2>titel</h2>
    <input class="form-control" type="text" name="titel" value="<?php echo $titel;?>" required>
    <br>

    <h2>post</h2>
    <input class="form-control" type="text" name="bericht" value="<?php echo $bericht;?>" required>
    <br>

    <h2>image</h2>
    <input class="form-control" type="file" name="file" value="<?php echo $name_file;?>" required>
    <br>
    <input class="btn btn-primary" type="submit" value="verstuur">
</div>
</form>