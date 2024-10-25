<?php
    session_start();
    $_SESSION["username"]="Admin";
    $_SESSION["user_design"]="CEO of google";

    if(isset($_SESSION["username"]) && isset($_SESSION["user_design"])){
        echo "my session variables was set";
    }
