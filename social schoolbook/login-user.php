<?php
include "login-account-form-user.php";

if(!empty($_POST['user'])){
    if($_POST['user'] == "user" && $_POST['pass'] == "password"){
        $_SESSION['user'] = "user";
        $_SESSION['logon'] = true;

        $_SESSION['role']= "password";
        echo '<p> U bent ingelocht!</p>';
        echo '<a href="user.php" class="btn btn-outline-success">Naar u berichten.</a>';

    } else{
        echo '<p>Dit is geen correcte login!</p>';
    }
}

