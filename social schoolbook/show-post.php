<?php
include "templates/header.php";
include "templates/user-navbar.php";
?>
<div class="container">
<?php
include "scripts/connectdb.php";
$id = $_GET['id'];

$sql = "SELECT * FROM post WHERE id = :id";

$sth = $db->prepare($sql);

$sth->execute([':id' => $id]);

?>

    <?php while($row = $sth->fetch()) {?>

    <div class="bericht">

        <p>

            <?php echo $row["id"]; ?><br>

            <?php echo $row["datum"]; ?><br>

            <?php echo $row["auteur"]; ?><br>

            <?php echo $row["titel"];?><br><br>

            <img src="uploaded/<?php echo $row["afbeelding"]; ?>" alt="afbeelding" class="foto_lists"><br><br>

            <?php echo $row["bericht"];?><br><br>

            <a>
                <?php include('create-comment-form.php') ?>
                <div>
                    <?php
                    $sql2 = "SELECT * FROM post b JOIN comment c ON (c.post_id = b.id) WHERE c.post_id = b.id AND b.id = :id";
                    $sth2 = $db->prepare($sql2);
                    $sth2->execute(['id' => $row["id"]]);
                    while($comment = $sth2->fetch()){ ?>
                        <div>
                            <?php echo $comment["comment"]; echo "<br>"?>
                        </div>
                    <?php } ?>
            </a>
        </p>
    </div>

    <?php } ?>

<?php include "templates/footer.php"; ?>
