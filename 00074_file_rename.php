<?php
$oldfile = 'about.php';
$newfile = 'moreabout.php';

if(file_exists($oldfile)){
    if(rename($oldfile,$newfile)){
        echo "file renamed successfully from $oldfile  to $newfile";
    }else{
        echo "filed to rename the file";
    }
}else{
    echo "the file $oldfile does not exist";
}
