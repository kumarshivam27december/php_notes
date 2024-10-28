<?php

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <h1>Simple Calculator</h1>
    <form method="post">
        <input type="number" name="num1" required placeholder="First Number">
        <input type="number" name="num2" required placeholder="Second Number">
        <select name="operation" required>
            <option value="">Select Operation</option>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $calculator = new Calculator();
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        try {
            switch ($operation) {
                case 'add':
                    $result = $calculator->add($num1, $num2);
                    break;
                case 'subtract':
                    $result = $calculator->subtract($num1, $num2);
                    break;
                case 'multiply':
                    $result = $calculator->multiply($num1, $num2);
                    break;
                case 'divide':
                    $result = $calculator->divide($num1, $num2);
                    break;
                default:
                    throw new InvalidArgumentException("Invalid operation selected.");
            }
            echo "<h2>Result: $result</h2>";
        } catch (Exception $e) {
            echo "<h2>Error: " . $e->getMessage() . "</h2>";
        }
    }
    ?>
</body>

</html>