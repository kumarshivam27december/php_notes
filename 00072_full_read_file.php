<?php
$file_name = "HUsection.txt";
$file = fopen($file_name,"r");
if($file){
    $file_size = filesize($file_name);
    $content = fread($file,$file_size);
    fclose($file);
    echo "File content:\n";
    echo $content;
}else{
    echo "error opening file";
}