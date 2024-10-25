<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="process_form.php" method="post">
    <label for="website">Website URL:</label>
    <input type="url" name="website" id="website" required>
    
    <label for="description">Description:</label>
    <textarea name="description" id="description" maxlength="500" required></textarea>
    <input type="submit" value="Submit">
</form>
</body>
</html>
