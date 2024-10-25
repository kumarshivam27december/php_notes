<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
</head>

<body>

    <?php
    $nameerror = "";
    $numbererror = "";
    $emailerror = "";
    $fullname = "";
    $mobile = "";
    $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['submit'])) {
            $fullname = $_POST['fullname'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];

            if (empty($fullname)) {
                $nameerror = "Name is required";
            } else if (!preg_match("/^[A-Za-z ]+$/", $fullname)) {
                $nameerror = "Only letters and spaces are allowed";
            } else {
                echo "Full name is: $fullname<br>";
            }

            if (empty($mobile)) {
                $numbererror = "Mobile number is required";
            } else if (!preg_match("/^[0-9]{10}$/", $mobile)) {
                $numbererror = "Invalid mobile number. It must be 10 digits.";
            } else {
                echo "Mobile number is: $mobile<br>";
            }

            

            if (empty($email)) {
                $emailerror = "Email is required";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailerror = "Invalid email format";
            } else {
                echo "Email is: $email<br>";
            }
        }
    }
    ?>

    <h1>Registration Form</h1>

    <form method="post" action="">
        <label for="fullname">Enter Full Name:</label>
        <input type="text" name="fullname" placeholder="Enter Full Name" value="<?php echo $fullname; ?>">
        <p style="color: red;"><?php echo $nameerror; ?></p>
        <br><br>

        <label for="mobile">Enter Mobile Number:</label>
        <input type="text" name="mobile" placeholder="Enter your mobile number" value="<?php echo $mobile; ?>">
        <p style="color: red;"><?php echo $numbererror; ?></p>
        <br><br>

        <label for="email">Enter Email:</label>
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
        <p style="color: red;"><?php echo $emailerror; ?></p>
        <br><br>

        <input type="submit" name="submit" value="SUBMIT FORM">
    </form>

</body>

</html>

<!-- create a image of a racoon showing his third finger of both of his hand in a sarcastic manner so that
 i could teach of the student about this -->
