<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Shift Management</title>
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['shifts'])) {
    $_SESSION['shifts'] = [];
}

$action = isset($_POST['action']) ? $_POST['action'] : '';
$employee = isset($_POST['employee']) ? $_POST['employee'] : '';
$shift_start = isset($_POST['shift_start']) ? $_POST['shift_start'] : '';
$shift_end = isset($_POST['shift_end']) ? $_POST['shift_end'] : '';

switch ($action) {
    case 'add':
        if ($employee && $shift_start && $shift_end) {
            $_SESSION['shifts'][$employee] = ['shift_start' => $shift_start, 'shift_end' => $shift_end];
        }
        break;
    case 'update':
        if (isset($_SESSION['shifts'][$employee]) && $shift_start && $shift_end) {
            $_SESSION['shifts'][$employee]['shift_start'] = $shift_start;
            $_SESSION['shifts'][$employee]['shift_end'] = $shift_end;
        }
        break;
    case 'remove':
        if (isset($_SESSION['shifts'][$employee])) {
            unset($_SESSION['shifts'][$employee]);
        }
        break;
    case 'calculate':
        break; // No action needed here
    default:
        break;
}

// Calculate total hours worked
$totalHours = 0;
foreach ($_SESSION['shifts'] as $details) {
    $start = strtotime($details['shift_start']);
    $end = strtotime($details['shift_end']);
    $totalHours += ($end - $start) / 3600; // Convert seconds to hours
}

// Display employee shifts and total hours worked
echo '<h2>Employee Shifts:</h2>';
echo '<table border="1">';
echo '<tr><th>Employee</th><th>Shift Start</th><th>Shift End</th></tr>';
foreach ($_SESSION['shifts'] as $employee => $details) {
    echo "<tr><td>{$employee}</td><td>{$details['shift_start']}</td><td>{$details['shift_end']}</td></tr>";
}
echo '</table>';

echo "<h3>Total Hours Worked by All Employees: {$totalHours} hours</h3>";

?>

<h2>Manage Employee Shifts</h2>
<form method="post"> 
    <label for="employee">Employee Name:</label>
    <input type="text" id="employee" name="employee" required>
    <br>
    <label for="shift_start">Shift Start (YYYY-MM-DD HH:MM):</label>
    <input type="datetime-local" id="shift_start" name="shift_start" required>
    <br>
    <label for="shift_end">Shift End (YYYY-MM-DD HH:MM):</label>
    <input type="datetime-local" id="shift_end" name="shift_end" required>
    <br>
    <button type="submit" name="action" value="add">Add Shift</button>
    <button type="submit" name="action" value="update">Update Shift</button>
    <button type="submit" name="action" value="remove">Remove Shift</button>
    <button type="submit" name="action" value="calculate">Calculate Total Hours</button>
</form>

</body>
</html>
