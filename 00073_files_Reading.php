<?php
$sourcefile = 'newfile.txt';
$dest_path = 'text.txt';
if(file_exists($sourcefile) && file_exists($dest_path)){
    if(copy($sourcefile,$dest_path)){
        echo "file copied";
    }else{
        echo "file failed to copy";
    }
}else{
    echo " source file not exist";
}