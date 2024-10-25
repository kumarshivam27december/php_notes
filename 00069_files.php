<?php

$file = fopen("HUsection.txt","w");
if($file){
    echo "file successfully created";
}else{
    echo "not created";
}
?>