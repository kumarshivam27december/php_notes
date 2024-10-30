<!DOCTYPE html>
<html>
<head>
    <title>Interactive Calculator</title>
</head>
<body>
    <h1>Interactive Calculator</h1>

    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter first number">
        <input type="text" name="num2" placeholder="Enter second number">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        if (empty($num1) || empty($num2)) {
            echo "<p>Please enter both numbers.</p>";
        } else {
            switch ($operator) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    if ($num2 == 0) {
                        echo "<p>Division by zero is not allowed.</p>";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    echo "<p>Invalid operator.</p>";
            }

            if (isset($result)) {
                echo "<p>Result: $result</p>";
            }
        }
    }
    ?>
</body>
</html>