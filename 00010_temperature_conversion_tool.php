<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
</head>

<body>
    <form action="" method="POST">
        <label for="firstnum">Enter the first number:</label>
        <input type="number" id="firstnum" name="num1" placeholder="Enter the temperature in celcius" required>
        <br>
        
        <input type="submit" class="btn btn-primary"  value="change">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $n1 = $_POST["num1"];

        $n2 = (9/5)*$n1+32;

        echo "<h2> the value of $n1 in fahrenheit is $n2 ";
    }

    ?>
</body>

</html>