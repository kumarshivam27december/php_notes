<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully\n";

    $sql = "CREATE DATABASE university";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully\n";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>