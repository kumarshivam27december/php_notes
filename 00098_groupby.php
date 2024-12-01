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

    $sql = "SELECT lastname, COUNT(*) AS count FROM students GROUP BY lastname";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "Last Name: " . $row["lastname"] . ", Count: " . $row["count"] . "<br>";
            }
        } else {
            echo "0 results";
        }
    } else {
        echo "Error fetching data: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


