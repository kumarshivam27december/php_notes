<?php
// Function to check if a year is a leap year
// Initialize variables
$age = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the year from the form input
    $age = isset($_POST['age']) ? intval($_POST['age']) : 0;

    // Validate year
    if ($age >= 18) {
       $message = "you are eligible for driving licence";
    } else {
        $message = "You are not eligible for the driving licence";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>
    <h1>Driving eligiblity test</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="age">Enter the  age:</label>
        <input type="number" id="age" name="age" placeholder="enter the age" required>
        <input type="submit" value="Check">
    </form>
    <?php
    // Display the message if available
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
