<?php
$url = "https://www.google.com";
echo filter_var($url,FILTER_SANITIZE_URL);
echo "<br>";
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "Valid URL";
} else {
    echo "Invalid URL";
}
echo "<br>";

$num = 1;

if((empty($num)) || !filter_var($num,FILTER_VALIDATE_INT)){
    echo "invalid age";
}else{
    echo $num." is valid";
}

