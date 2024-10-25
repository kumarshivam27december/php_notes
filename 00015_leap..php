<?php
// Function to check if a year is a leap year
function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

// Initialize variables
$year = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the year from the form input
    $year = isset($_POST['year']) ? intval($_POST['year']) : 0;

    // Validate year
    if ($year > 0) {
        // Check if the input year is a leap year
        if (isLeapYear($year)) {
            $message = "$year is a leap year.";
        } else {
            $message = "$year is not a leap year.";
        }
    } else {
        $message = "Please enter a valid year.";
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
    <h1>Leap Year Checker</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="year">Enter a year:</label>
        <input type="number" id="year" name="year" placeholder="enter the username" required>
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
