<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['language'])) {
        $language = $_POST['language'];
        setcookie("preferred_language", $language, time() + 604800, "/");
        echo "Language preference has been set to: " . $language . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Preferred Language</title>
</head>
<body>
    <h1>Select Your Preferred Language</h1>
    <form method="POST" action="">
        <label for="language">Choose a language:</label>
        <select id="language" name="language" required>
            <option value="english">English</option>
            <option value="bengali">Bengali</option>
        </select><br><br>

        <button type="submit">Set Language</button>
    </form>

    <br><br>
    <a href="greet_user.php">Go to the Greeting Page</a>
</body>
</html>

