<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection to server failed: " . mysqli_connect_error());
} else {
    echo "Connected to server successfully\n";
}

$dbname = "my_db";
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sqlCreateDB)) {
    echo "Database created successfully or already exists.\n";
} else {
    die("Error creating database: " . mysqli_error($conn));
}

mysqli_select_db($conn, $dbname);

$sqlCreateTable = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    age INT(3) NOT NULL
)";

if (mysqli_query($conn, $sqlCreateTable)) {
    echo "Table 'users' created successfully or already exists.\n";
} else {
    die("Error creating table: " . mysqli_error($conn));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['insert'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "INSERT INTO users (firstname, lastname, email, age) VALUES ('$firstname', '$lastname', '$email', $age)";
        if (mysqli_query($conn, $sql)) {
            echo "New record inserted successfully.\n";
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM users WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully.\n";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', age=$age WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully.\n";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
<form method="post">
    <h2>Insert User</h2>
    <input type="text" name="firstname" placeholder="First Name" required><br>
    <input type="text" name="lastname" placeholder="Last Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="number" name="age" placeholder="Age" required><br>
    <input type="submit" name="insert" value="Insert"><br><br>

    <h2>Delete User</h2>
    <input type="number" name="id" placeholder="User ID" required><br>
    <input type="submit" name="delete" value="Delete"><br><br>

    <h2>Update User</h2>
    <input type="number" name="id" placeholder="User ID" required><br>
    <input type="text" name="firstname" placeholder="First Name" required><br>
    <input type="text" name="lastname" placeholder="Last Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="number" name="age" placeholder="Age" required><br>
    <input type="submit" name="update" value="Update">
</form>
