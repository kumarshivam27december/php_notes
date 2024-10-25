<!-- process_login.php -->
<?php
session_start();

// Predefined username and password (you can replace these with your own)
$validUsername = 'myuser';
$validPassword = 'mypassword';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];

    if ($submittedUsername === $validUsername && $submittedPassword === $validPassword) {
        // Credentials are correct; store username in session
        $_SESSION['username'] = $submittedUsername;
        header('Location: welcome.php');
        exit;
    } else {
        // Invalid credentials; show an error message
        echo 'Invalid username or password. Please try again.';
    }
}
?>
w