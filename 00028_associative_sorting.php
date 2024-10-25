<?php
    $product  = ["laptop"=>1200,
                "tablet"=>600
                ];

    print_r($product);
    echo "<br>";
    
    asort($product);

    print_r($product);
    echo "<br>";

    arsort($product);
    print_r($product);
    echo "<br>";


    ksort($product);
    print_r($product);
    echo "<br>";


    krsort($product);
    print_r($product);
    echo "<br>";



