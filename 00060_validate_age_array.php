<?php
$age = 75;
if(filter_var($age,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>0,"max-range"=>100)))){
    echo "the <br> $age </br> is within the range of 0 to 100";
}else{
    echo "the <br> $age </br> is not within the range of 0 to 100";
}
