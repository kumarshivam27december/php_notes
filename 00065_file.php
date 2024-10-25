<?php
if (file_exists("about.php")) {
    $file = fopen("about.php", "r");
    if ($file) {
        echo fread($file, filesize("about.php"));
        fclose($file);
    } else {
        echo "Unable to open file";
    }
} else {
    echo "File not found";
}
?> 
