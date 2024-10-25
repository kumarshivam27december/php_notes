<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['inventory'])) {
    $_SESSION['inventory'] = [];
}

$action = isset($_POST['action']) ? $_POST['action'] : '';
$item = isset($_POST['item']) ? $_POST['item'] : '';
$quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;
$price = isset($_POST['price']) ? (float)$_POST['price'] : 0.0;

switch ($action) {
    case 'add':
        if ($item && $quantity > 0 && $price > 0) {
            $_SESSION['inventory'][$item] = ['quantity' => $quantity, 'price' => $price];
        }
        break;
    case 'update':
        if (isset($_SESSION['inventory'][$item]) && $quantity >= 0) {
            $_SESSION['inventory'][$item]['quantity'] = $quantity;
        }
        break;
    case 'remove':
        if (isset($_SESSION['inventory'][$item])) {
            unset($_SESSION['inventory'][$item]);
        }
        break;
    case 'calculate':
        break; // No action needed here
    default:
        break;
}

// Calculate total value
$totalValue = 0;
foreach ($_SESSION['inventory'] as $details) {
    $totalValue += $details['quantity'] * $details['price'];
}

// Display inventory and total value
echo '<h2>Inventory:</h2>';
echo '<table border="1">';
echo '<tr><th>Item</th><th>Quantity</th><th>Price</th></tr>';
foreach ($_SESSION['inventory'] as $item => $details) {
    echo "<tr><td>{$item}</td><td>{$details['quantity']}</td><td>\${$details['price']}</td></tr>";
}
echo '</table>';

echo "<h3>Total Value: \${$totalValue}</h3>";

?>

<h2>Manage Inventory</h2>
<!-- empty means in the same file --> 
<form method="post"> 
    <label for="item">Item Name:</label>
    <input type="text" id="item" name="item" required>
    <br>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="0" required>
    <br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" min="0" required>
    <br>
    <button type="submit" name="action" value="add">Add Item in the inventory</button>
    <button type="submit" name="action" value="update">Update Quantity in the inventory</button>
    <button type="submit" name="action" value="remove">Remove the item from the  inventory</button>
    <button type="submit" name="action" value="calculate">Calculate Total Value</button>
</form>

</body>
</html>
























<!-- /* use an associative array to stor inventory ites with their quantities and prices
e.g ['item'=>{'quantity'=>10,'price'=>50}]
1.add new item  (prompt the user to add a new item to the inventory)
2.update item quantity(prompt the user to update the quantity of  an existing item)
3.remove item(prompt the user to remove an item from the inventory)
4.calculate total value(calculate and display the total value of the inventory (quantity*price))
if-else switch foreach while for managing inventory and user choices
print the updated inventory after each operation */ -->