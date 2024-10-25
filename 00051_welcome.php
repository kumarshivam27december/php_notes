<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="LOGOUT" name="" id="">
    </form>
    <?php
        echo "welcome".$_SESSION["username"];
        if(isset($_POST["logout"])){
            session_unset();
            session_destroy();
        }
    ?>
</body>
</html>