<?php
ini_set('max_execution_time', 300);
$to = "ry1817680@gmail.com";
$subject = "spam mail";
$msg = "this is a text mail from my local server";
$from = "kumarbipin1009@gmail.com";
$header = "From: $from";

for ($i = 1; $i <= 50; $i++) {
    $check = mail($to, $subject, $msg, $header);
    if ($check) {
        echo "Mail sent: $i<br>";
    } else {
        echo "Email cannot be sent: $i<br>";
    }
}
?>
