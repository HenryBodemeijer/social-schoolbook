<?php
include "login-account-form-admin.php";



if(!empty($_POST['user'])){
    if($_POST['user'] == "admin" && $_POST['pass'] == "password"){
        $_SESSION['user'] = "admin";
        $_SESSION['logon'] = true;

        $_SESSION['role']= "password";
        echo '<p> U bent ingelocht!</p>';
        echo '<a href="admin.php" class="btn btn-outline-success">Naar u berichten.</a>';

    } else{
        echo '<p>Dit is geen correcte login!</p>';
    }
}
