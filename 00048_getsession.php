<?php
    session_start();
    echo "welcome".$_SESSION["username"];
    echo "your designation is".$_SESSION["user_design"];
?>



/*
create a login form with fields for username and password
when a user submit the form , check the credentiala against a predefined username and password stored in the php file 

if the credential are correct , store the username in the session and redirect the 

*/