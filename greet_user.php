<?php
    if (isset($_COOKIE['preferred_language'])) {
        $language = $_COOKIE['preferred_language'];
    } else {
        $language = 'english'; 
    }

    if ($language == 'english') {
        $greeting = "Hello, welcome!";
    } else if ($language == 'bengali') {
        $greeting = "bengali me i love you ka matlab i love you hi hota hai";
    } else {
        $greeting = "Hello, welcome!";
    }

    echo "<h1>" . $greeting . "</h1>";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['language'])) {
        $new_language = $_POST['language'];
        setcookie("preferred_language", $new_language, time() + 604800, "/");
        header("Location: greet_user.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
</head>
<body>
    <h1>Update Your Preferred Language</h1>
    
    <form method="POST" action="">
        <label for="language">Choose a new language:</label>
        <select id="language" name="language" required>
            <option value="english" <?php if($language == 'english') echo 'selected'; ?>>English</option>
            <option value="french" <?php if($language == 'french') echo 'selected'; ?>>French</option>
        </select><br><br>

        <button type="submit">Update Language</button>
    </form>

    <br><br>
    <a href="set_language.php">Go to Language Selection Page</a>
</body>
</html>
