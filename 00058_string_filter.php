<?php
    $str = "<h1>This is a string</h1>";
    
    $sanitise_str = filter_var($str,FILTER_SANITIZE_STRING);
    echo $sanitise_str;
    echo "<br>";
    echo $str;