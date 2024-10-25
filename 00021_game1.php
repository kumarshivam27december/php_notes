<?php
    $a = rand(1,6);
    
    $points = 0;
    while($a != 6){
        echo "The dice number is $a <br>";
        if($a % 2 == 1){
            echo "since the number is odd i.e $a we are going to add it to the total points $<br>";
            $points +=5;
        }else{
            echo "since the number is even i.e $a we are not going to add it to the total points $<br>";

        }
        $a = rand(1,6); 
    }
    
    echo "Total points = $points";

