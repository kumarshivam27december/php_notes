<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Counter</title>
</head>
<body>

    <form method="post" action="">
        <label for="inputString">Enter a string:</label>
        <input type="text" id="inputString" name="inputString" required>
        <br><br>
        <input type="submit" name="submit" value="Click to Find Total Number of Vowels">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];
        $vowelCount = preg_match_all('/[aeiouAEIOU]/', $inputString);

        echo "<h3>Total number of vowels in the input string: $vowelCount</h3>";
    }
    ?>

</body>
</html>
