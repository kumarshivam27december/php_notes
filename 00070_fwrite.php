<?php
$file = fopen("HUsection.txt", "w");
if ($file) {
    echo "File successfully created\n";
    $content = "This is some sample text.\n";
    fwrite($file, $content);
    echo "Content written to file successfully.";
} else {
    echo "File not created.";
}

