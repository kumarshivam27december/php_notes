<?php
// Function for printing the current date in a specified format
function date_i18n($today, $format = "Y-m-d") {
    echo date($format, strtotime($today));
}

// Getting today's date in 'Y-m-d' format
$today = date("Y-m-d");

date_i18n($today);

