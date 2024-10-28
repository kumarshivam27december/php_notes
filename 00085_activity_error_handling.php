<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division</title>
</head>
<body>
    <form method="post">
        <label for="numerator">Numerator:</label>
        <input type="number" name="numerator" id="numerator" required>
        <br><br>
        <label for="denominator">Denominator:</label>
        <input type="number" name="denominator" id="denominator" required>
        <br><br>
        <input type="submit" value="Divide">
    </form>
</body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numerator = $_POST['numerator'];
    $denominator = $_POST['denominator'];

    try {
        if ($denominator == 0) {
            throw new Exception("Denominator cannot be zero.");
        }

        $result = $numerator / $denominator;
        echo "Result: $result";
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>


</html>

