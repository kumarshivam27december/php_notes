<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $website = filter_var(trim($_POST['website']), FILTER_SANITIZE_URL);
    $description = trim($_POST['description']);
    
    $errors = [];

    if (!filter_var($website, FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid URL format.";
    }

    if (strlen($description) > 500) {
        $errors[] = "Description must not exceed 500 characters.";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        echo "<p style='color: green;'>Form submitted successfully!</p>";
    }
}
?>
