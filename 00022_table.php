<?php
// Function to check if a year is a leap year
// Initialize variables
$num = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the year from the form input
    $num = isset($_POST['num']) ? intval($_POST['num']) : 0;

    // // Validate year
    // if ($age >= 18) {
    //    $message = "you are eligible for driving licence";
    // } else {
    //     $message = "You are not eligible for the driving licence";
    // }

    for( $i = 1; $i < 11; $i++ ){
        $x = $num*$i;
        echo "$num * $i = $x";
        echo "$<br>";
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
        <label for="num">Enter the  number:</label>
        <input type="number" id="num" name="num" placeholder="enter the number" required>
        <input type="submit" value="Check">
    </form>
    <?php
    // // Display the message if available
    // if ($message) {
    //     echo "<p>$message</p>";
    // }
    ?>
</body>
</html>
