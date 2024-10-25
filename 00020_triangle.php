<?php
    $a = 4;
    $b = 2;
    $c = 3;
    $valid = true;
    if(($a+$b<=$c) or ($a+$c<=$c) or ($b+$c<=$a)){
        $valid = false;
    }


    if($valid==true){
        if($a==$b){
            if($a==$c){
                echo "equilateral";
            }else{
                echo "isoscales";
            }
        }
        else if($b==$c){
            echo "isoceles";
        }else{
            echo "scalene";
        }
    }else{
        echo "the triangle is not valid";
    }

