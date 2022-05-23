<?php
include "scripts/connectdb.php";

$sql = "SELECT * FROM post ORDER BY datum DESC";

$sth = $db->prepare($sql);

$sth->execute();

?>

<script>

    function confirmDelete(postId) {

        $("#modal-confirm").modal('show');


        $('#btn-delete-confirmed').on('click', function(){deletepost(postId);});

    }
    function deletepost(postId) {

        $('#modal-confirm').modal('hide');

        $.get('delete-post.php',

            {id: postId}).then(

            function() {

                window.location.href = 'index.php';

                window.location.reload(true);});

    }

    function deletepost(postId) {

        $('#modal-confirm').modal('hide');

        $.get('delete-post.php',

            {id: postId}).then(

            function() {

                window.location.href = 'index.php';

                window.location.reload(true);});

    }



</script>

    <?php while($row = $sth->fetch()) { ?>

    <div class="bericht">

        <p>

            <?php echo $row["id"]; ?><br>

            <?php echo $row["datum"]; ?><br>

            <?php echo $row["auteur"]; ?><br>

            <a class="link" href="show-post.php?id=<?php echo $row["id"]?>"><?php echo $row["titel"];?></a><br><br>

            <img src="uploaded/<?php echo $row["afbeelding"]; ?>" alt="afbeelding" class="foto_lists"><br><br>

            <?php echo $row["bericht"];?><br><br>

            <a class="btn btn-primary" href="update-post-form.php?id=<?php echo $row["id"]?>">Wijzig</a><br><br>

            <button onclick="confirmDelete(<?php echo $row["id"]?>)" class="btn btn-danger">Verwijder</button><br>

        </p>

    </div>
    <?php } ?>

<div id="modal-confirm" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Weet je zeker dat je deze post wil verwijderen.</p>
            </div>
            <div class="modal-footer">
                <button id="btn-delete-confirmed" onclick="confirmDelete()" class="btn btn-danger">Verwijder</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
            </div>
        </div>
    </div>
</div>
