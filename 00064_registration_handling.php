<?php
session_start(); 

$nameerror = $numbererror = $emailerror = $passworderror = $profileerror = "";
$fullname = $mobile = $email = $password = "";
$uploadedImagePath = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($fullname)) {
            $nameerror = "Name is required";
        } else if (!preg_match("/^[A-Za-z ]+$/", $fullname)) {
            $nameerror = "Only letters and spaces are allowed";
        }

        if (empty($mobile)) {
            $numbererror = "Mobile number is required";
        } else if (!preg_match("/^[0-9]{10}$/", $mobile)) {
            $numbererror = "Invalid mobile number. It must be 10 digits.";
        }

        if (empty($email)) {
            $emailerror = "Email is required";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";
        }

        // Validate password
        if (empty($password)) {
            $passworderror = "Password is required";
        } else if (strlen($password) < 8 || !preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
            $passworderror = "Password must be at least 8 characters long and include both letters and numbers.";
        }

        // Handle file upload
        if (isset($_FILES['profilepic']) && $_FILES['profilepic']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['profilepic']['tmp_name'];
            $fileName = $_FILES['profilepic']['name'];
            $fileSize = $_FILES['profilepic']['size'];
            $fileType = $_FILES['profilepic']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');

            if (in_array($fileExtension, $allowedfileExtensions)) {
                if ($fileSize < 500000) { // less than 500 KB
                    $uploadFileDir = './uploads/';
                    $dest_path = $uploadFileDir . $fileName;

                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        $uploadedImagePath = $dest_path; // Store the path of the uploaded image
                    } else {
                        $profileerror = 'There was an error moving the uploaded file.';
                    }
                } else {
                    $profileerror = "Profile picture must be less than 500KB.";
                }
            } else {
                $profileerror = "Invalid file format. Only JPG, GIF, and PNG are allowed.";
            }
        } else {
            $profileerror = "Please upload a profile picture.";
        }

        // If there are no errors, store the data in session variables and redirect
        if (empty($nameerror) && empty($numbererror) && empty($emailerror) && empty($passworderror) && empty($profileerror)) {
            $_SESSION['fullname'] = $fullname;
            $_SESSION['mobile'] = $mobile;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['profilepic'] = $uploadedImagePath;

            header('Location: regconfirm.php'); // Redirect to confirmation page
            exit(); // Exit to prevent further script execution
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <style>
        /* Your existing CSS styles */
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="fullname">Enter Full Name:</label>
        <input type="text" name="fullname" placeholder="Enter Full Name" value="<?php echo $fullname; ?>">
        <p class="error"><?php echo $nameerror; ?></p>

        <label for="mobile">Enter Mobile Number:</label>
        <input type="text" name="mobile" placeholder="Enter your mobile number" value="<?php echo $mobile; ?>">
        <p class="error"><?php echo $numbererror; ?></p>

        <label for="email">Enter Email:</label>
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
        <p class="error"><?php echo $emailerror; ?></p>

        <label for="password">Enter Password:</label>
        <input type="password" name="password" placeholder="Enter your password" value="<?php echo $password; ?>">
        <p class="error"><?php echo $passworderror; ?></p>

        <label for="profilepic">Upload Profile Picture:</label>
        <input type="file" name="profilepic">
        <p class="error"><?php echo $profileerror; ?></p>

        <input type="submit" name="submit" value="SUBMIT FORM">
    </form>
</body>
</html>

