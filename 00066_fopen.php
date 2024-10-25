<?php
$file = fopen("about.php", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {  
        echo $line . "<br>";  }
    fclose($file);  
} else {
    echo "file not found";
}

