<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <form action="" method="POST">
        <label for="firstnum">Enter the first number:</label>
        <input type="number" id="firstnum" name="num1" placeholder="Enter the first value" required>
        <br>
        <label for="secondnum">Enter the second number:</label>
        <input type="number" id="secondnum" name="num2" placeholder="Enter the second value" required>
        <br>
        <input type="submit" value="+" name="operation"><br>
        <input type="submit" value="-" name="operation"><br>
        <input type="submit" value="*" name="operation"><br>
        <input type="submit" value="/" name="operation"><br>
        <input type="submit" value="%" name="operation"><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $oper = $_POST["operation"];
       
        if($oper=="+"){
            $n3 = $n1+$n2;
        }else if($oper== "-"){
            $n3 = $n1-$n2;
        }else if($oper== "*"){   
            $n3 = $n1*$n2;
        }else if($oper== "/"){
            $n3 = $n1/$n2;
        }else if($oper== "%"){
            $n3 = $n1%$n2;
        }

        echo "<hr> the answer after the operation will be $n1 $oper $n2 = $n3";
    }
    ?>
    
</body>

</html>
