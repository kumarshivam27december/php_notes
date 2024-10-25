<?php
    // find the first non null value in php
    $a = null;
    $b = null;
    $c = 69;

    // we will use chained non-collision operator
    $result = $a ?? $b ?? $c;
    echo $result;