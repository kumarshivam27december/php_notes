<?php
    session_start();
    echo "welcome".$_SESSION["username"]="Admin";
    echo "Your designation is ".$_SESSION["designation"];
    if(isset($_SESSION["username"])&& isset($_SESSION["designation"])){
        echo "My session variables are set";
    }
?>