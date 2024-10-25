<?php
$a = 'a';
if (is_int($a)) {
    if ($a > 0) {
        echo $a."this is positive";
        echo "break";
    } else if ($a == 0) {
        echo $a."this is zero";
        echo "break";
    } else {
        echo $a."this is negative";
        echo "break";
    }
} else {
    EcHO $a." this is not an integer";
}


//  PHP_INT_MAX PHP_INT_MIN PHP_INT_SIZE

