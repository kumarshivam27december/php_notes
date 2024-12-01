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

    $sql = "INSERT INTO students (firstname, lastname, email) VALUES 
            ('Shivam', 'kumar', 'shivam@example.com'),
            ('shiv', 'kumar', 'shiv@example.com'),
            ('Shiva', 'kumar', 'shiva@example.com'),
            ('rahul', 'gandhi', 'rahulgandhi@example.com')";

    if (mysqli_query($conn, $sql)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>