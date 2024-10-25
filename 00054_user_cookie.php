<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['userdesign'])) {
        $username = $_POST['username'];
        $userdesign = $_POST['userdesign'];
        setcookie("username", $username, time() + 86400, "/"); // 1 day expiration
        setcookie("userdesign", $userdesign, time() + 86400, "/"); // 1 day expiration
        echo "Cookies have been set.<br>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        setcookie("username", "", time() - 3600, "/");
        setcookie("userdesign", "", time() - 3600, "/");
        echo "Cookies have been deleted.<br>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['display'])) {
        if (isset($_COOKIE["username"]) && isset($_COOKIE["userdesign"])) {
            echo "Cookies are set.<br>";
            echo "The value of the username is: " . $_COOKIE["username"] . "<br>";
            echo "The value of the userdesign is: " . $_COOKIE["userdesign"] . "<br>";
        } else {
            echo "Cookies are not set.<br>";
        }

        $cnt = 0;
        foreach ($_COOKIE as $key => $value) {
            echo "$key: $value<br>";
            $cnt++;
        }

        echo "Total number of cookies is: " . $cnt . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set, Display, and Delete Cookies</title>
</head>
<body>
    <h1>Manage Your Cookies</h1>
    
    <form method="POST" action="">
        <label for="username">Enter Username: </label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="userdesign">Enter Designation: </label>
        <input type="text" id="userdesign" name="userdesign" required><br><br>

        <button type="submit" name="submit">Set Cookies</button>
    </form>
    
    <br><br>

    <form method="POST" action="">
        <button type="submit" name="display">Display Cookies</button>
    </form>

    <br><br>

    <form method="POST" action="">
        <button type="submit" name="delete">Delete Cookies</button>
    </form>
</body>
</html>

