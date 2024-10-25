
    <!-- /* write a php script tp calculate the percentage of a student in 5 subject*/ -->
    <?php
    $hindi = 45.0;
    $english = 65.9;
    $science = 98.10;
    $math = 100.0;
    $computer = 95.25;

    // Calculate total and average
    $total = $hindi + $english + $science + $math + $computer;
    $average = $total / 5;
    echo "total marks obtained in hindi is ".number_format($hindi,2);
    echo "</br>";
    echo "total marks obtained in english is ".number_format($english,2);
    echo "</br>";
    echo "total marks obtained in science is ".number_format($science,2);
    echo "</br>";
    echo "total marks obtained in math is ".number_format($math,2);
    echo "</br>";
    echo "total marks obtained in computer is ".number_format($computer,2);
    echo "</br>";
    echo "total marks obtained overall is ".number_format($total,2);
    echo "</br>";
    echo "total marks is 500.00";
    echo "</br>";
    echo "total percenatage obtained is ".number_format($average,2);

?>



















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Marksheet</h1>
    <table>
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td>Hindi</td>
            <td><?php echo number_format($hindi, 2); ?></td>
        </tr>
        <tr>
            <td>English</td>
            <td><?php echo number_format($english, 2); ?></td>
        </tr>
        <tr>
            <td>Science</td>
            <td><?php echo number_format($science, 2); ?></td>
        </tr>
        <tr>
            <td>Math</td>
            <td><?php echo number_format($math, 2); ?></td>
        </tr>
        <tr>
            <td>Computer</td>
            <td><?php echo number_format($computer, 2); ?></td>
        </tr>
        <tr>
            <th>Total</th>
            <th><?php echo number_format($total, 2); ?></th>
        </tr>
        <tr>
            <th>Average</th>
            <th><?php echo number_format($average, 2); ?></th>
        </tr>
    </table>
</body>
</html>
