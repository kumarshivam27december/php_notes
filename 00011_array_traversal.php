<?php
 
$a = ["10","50","9"];
for($i = 0;$i<sizeof($a);$i++){
    echo "$a[$i]  ";
}


//find max and min for an array in php

function findmaxmin($a){
    if(!empty(($a))){
        $maxval = max($a);
        $minval = min($a);

        echo " the max element is $maxval ";
        echo " the min element is $minval ";
    }
}

findmaxmin($a);


