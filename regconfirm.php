<?php
session_start(); // Start the session

// Check if the session variables are set
if (!isset($_SESSION['fullname'])) {
    header('Location: index.php'); // Redirect to the form if session is not set
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Confirmation</title>
</head>
<body>
    <h1>Registration Confirmation</h1>
    <h3>Submitted Information:</h3>
    <p><strong>Full Name:</strong> <?php echo htmlspecialchars($_SESSION['fullname']); ?></p>
    <p><strong>Mobile Number:</strong> <?php echo htmlspecialchars($_SESSION['mobile']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <p><strong>Password:</strong> <?php echo htmlspecialchars($_SESSION['password']); ?></p>

    <?php if (!empty($_SESSION['profilepic'])): ?>
        <h3>Uploaded Profile Picture:</h3>
        <img src="<?php echo htmlspecialchars($_SESSION['profilepic']); ?>" alt="Profile Picture">
    <?php endif; ?>

    <a href="index.php">Go back to Registration Form</a>

    <?php
    // Clear session data after displaying it
    session_destroy();
    ?>
</body>
</html>
