<?php
function my_error($err_level, $err_str, $err_file, $err_line) {
    $error_message = "Error Level: $err_level\n";
    $error_message .= "Error Message: $err_str\n";
    $error_message .= "File: $err_file\n";
    $error_message .= "Line: $err_line\n";

    echo nl2br($error_message); 

    error_log($error_message, 3, 'error_log.txt');

    $to = '@gmail.com'; 
    $subject = 'PHP Error Notification';
    $headers = 'From: kumarbipin1009@gmail.com' . "\r\n" .
               'Reply-To: ry1817680@gmail.com' . "\r\n" . 
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $error_message, $headers);
}

set_error_handler("my_error");

echo $undefinedvar; 