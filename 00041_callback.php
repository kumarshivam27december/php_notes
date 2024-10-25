<?php
    $arr = ["shivam","rahul","kumar","singh"];


    function find_len($str) {
        $len = strlen($str);
        return $len;
    }
    foreach ($arr as $k){
        echo find_len($k)."<br>";
    }
