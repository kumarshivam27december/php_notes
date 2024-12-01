<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully\n";

    $sql = "SELECT id, firstname, lastname FROM students"; // Corrected table name
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            }
        } else {
            echo "0 results";
        }
    } else {
        echo "Error fetching data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}