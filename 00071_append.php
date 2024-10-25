<?php
$file = fopen("HUsection.txt", "a");
if ($file) {
    echo "File successfully created\n";
    $content = "This is some sample text. The content is appending\n";
    fwrite($file, $content);
    echo "Content written to file successfully.";
} else {
    echo "File not created.";
}

