<?php
 $file = 'anotherfile';
 if(file_exists($file)){
    if(unlink($file)){
        echo "File '$file' has been successsfully";
    }else{
        echo "file is not deleted";
    }
 }else{
    echo "file not found";
 }