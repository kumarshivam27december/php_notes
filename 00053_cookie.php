<!DOCTYPE html>
<?php
    setcookie("username","LPUuser",time()+86400,"/");
    setcookie("userdesign","CEO",time()+86400,"/");

    if(isset($_COOKIE["username"])){
        echo "cookie is set";
        echo "the value of the username is ".$_COOKIE["username"]."<br>";
        echo "the value of the userdesign is ".$_COOKIE["userdesign"]."<br>";

    }else{
        echo "cookie value is not set";
    }

    $cnt = 0;
    foreach ($_COOKIE as $key => $value) {
        echo "$key:$value";
        $cnt++;
    }
    echo "<br>";
    echo "total number of cookie is ".$cnt;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MY COOKIE</h1>
  
</body>
</html>








































