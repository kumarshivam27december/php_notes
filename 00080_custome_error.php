<?php
function my_error($err_level, $err_str, $err_file, $err_line) {
    $error_message = "The error with error level $err_level is present in the file $err_file and in the line $err_line. Error message: $err_str\n";

   
    echo $error_message;

    
    error_log($error_message, 3, 'error_log.txt');
    //3 means logging to a text file
}

set_error_handler("my_error");

echo $undefinedvar; 
