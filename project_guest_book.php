<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
</head>
<body>
    <h1>Guestbook</h1>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];

        // Append the message to the guestbook file
        $file = 'guestbook.txt';
        $handle = fopen($file, 'a');
        fwrite($handle, "$name: $message\n");
        fclose($handle);

        echo "<p>Message added successfully!</p>";
    }
    ?>

    <h2>Leave a Message</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <h2>Previous Messages</h2>
    <?php
    $file = 'guestbook.txt';
    if (file_exists($file)) {
        $handle = fopen($file, 'r');
        while (($line = fgets($handle)) !== false) {
            echo "<p>$line</p>";
        }
        fclose($handle);
    } else {
        echo "<p>No messages yet.</p>";
    }
    ?>
</body>
</html>