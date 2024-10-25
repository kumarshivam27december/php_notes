<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username" id="username" placeholder="enter username">
        <input type="password" name="pass" id="" placeholder="enter password">
        <input type="submit" name="login" id="">

    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST["username"];
        $pass = $_POST["pass"];
        $def_user="admin";
        $def_pass = 123;
        if($username==$def_user && $pass==$def_pass){
            session_start();
            $_SESSION["username"]=$username;
            header('Location: 0001_operators.php');
        }else{
            echo "wrong username or password";
        }
    }
    ?>
</body>
</html>