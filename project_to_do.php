<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <?php
        // Initialize the to-do list if it doesn't exist
        if (!isset($_COOKIE['todo_list'])) {
            setcookie('todo_list', '', time() + 3600); // Cookie expires in 1 hour
        }

        // Add a new task
        if (isset($_POST['new_task'])) {
            $todo_list = $_COOKIE['todo_list'];
            $todo_list .= $_POST['new_task'] . "\n";
            setcookie('todo_list', $todo_list, time() + 3600);
        }

        // Display the to-do list
        $todo_list = explode("\n", $_COOKIE['todo_list']);
        foreach ($todo_list as $task) {
            if (!empty($task)) {
                echo "<p>$task</p>";
            }
        }
    ?>

    <form method="post">
        <input type="text" name="new_task" placeholder="Add a new task">
        <input type="submit" value="Add">
    </form>
</body>
</html>