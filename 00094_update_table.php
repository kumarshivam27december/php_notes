<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully\n";

    $sql = "UPDATE students SET email='updatedemail@example.com' WHERE id=3";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>