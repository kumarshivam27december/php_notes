<?php
    $name = "amit is well i don't know him";
    echo "string length is ".strlen($name);
    echo "<br>";
    echo "str_word_count".str_word_count($name);
    echo "<br>";
    echo "str_rec".strrev($name);
    echo "<br>";
    echo "strpos".strpos($name,"well");
    echo "<br>";
    echo "str_replace".str_replace("amit","shivam", $name);
    echo "<br>";
    echo "str_repeat".str_repeat("well",4);
    echo "<br>";
    echo "<pre>";
    echo "rtrim".rtrim("  this is well  ");
    echo "<br>";
    echo "ltrim".ltrim("  this is good   ");
    echo "</pre>";
