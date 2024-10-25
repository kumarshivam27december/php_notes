<?php
    $ip = "1.1.1.1";
    if(filter_var($ip,FILTER_VALIDATE_IP)){
        echo "the <b>$ip</b> is a valid ip address";
    }else{
        echo "Invalid ip $ip";
    }

    