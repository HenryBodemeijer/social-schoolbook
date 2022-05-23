<?php
include "scripts/connectdb.php";

$sql = "SELECT * FROM post ORDER BY datum DESC";

$sth = $db->prepare($sql);

$sth->execute();

?>

<script>
    function likePost(postId) {
        console.log(postId);

        fetch( 'like.php?id=' + postId )
            .then(
                function() {
                    window.location.href = 'user.php';

                    window.location.reload(true);});
    }

        /*
        $.get('like.php',
            {id: postId}).then(
            function() {
                var likeStr = document.getElementById("likes"+postId).innerHTML;
                likeInt = parseInt(likeStr);
                likeInt++;
                document.getElementById("likes"+postId).innerHTML = '' + likeInt;
            });

         */


    function deletelikePost(postId) {
        console.log(postId);

        fetch( 'delete-like.php?id=' + postId )
            .then(
                function() {
                window.location.href = 'user.php';

                window.location.reload(true);});
            }






        /*
        $.get('delete-like.php',

            {id: postId}).then(

            function() {

                var likeStr = document.getElementById("likes"+postId).innerHTML;
                likeInt = parseInt(likeStr);
                likeInt--;
                document.getElementById("likes"+postId).innerHTML = '' + likeInt;

            });
*/

</script>

    <?php while($row = $sth->fetch()) {?>


        <div class="bericht">

            <p>

                <?php echo $row["id"]; ?><br>

                <?php echo $row["datum"]; ?><br>

                <?php echo $row["auteur"]; ?><br>

                <a class="link" href="show-post.php?id=<?php echo $row["id"]?>"><?php echo $row["titel"];?></a><br><br>

                <img src="uploaded/<?php echo $row["afbeelding"]; ?>" alt="afbeelding" class="foto_lists"></td><br><br>

                <?php echo $row["bericht"];?><br><br>


                <button onclick="likePost(<?php echo $row["id"]?>)" class="like__btn">
                    <span id="icon" class="fa fa-thumbs-o-up"</span> Like
                </button>

                <a <?php echo $row['id']?>"><?php echo $row["likes"];?>

                <button onclick="deletelikePost(<?php echo $row["id"]?>)" class="like__btn">
                    <span id="icon" class="fa fa-thumbs-o-down"</span> Dislike
                    </button><br>

            </p>

        </div>

    <?php } ?>



