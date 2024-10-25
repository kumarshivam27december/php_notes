<!-- welcome.php -->
<?php
session_start();

// Check if user is logged in (session variable set)
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Display welcome message
echo 'Welcome, ' . $_SESSION['username'] . '!';

// Logout button
echo '<br><a href="logout.php">Logout</a>';
?>
