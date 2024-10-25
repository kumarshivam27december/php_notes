<?php
// Define the array
$arr1 = [1, 2, 63, 2, 1, 8, 9];

echo "initial array was"."<br>";

print_r($arr1);

echo "<br>";

echo "the unique element of the array are";
echo "<br>";

$unique  = array_unique($arr1);

print_r($unique);

// Sort the array
sort($arr1);

// Get the size of the array
$size = count($arr1);
echo "<br>";
// Output the maximum and minimum elements
echo "max element is " . $arr1[$size - 1] . "\n";
echo "<br>";

echo "min element is " . $arr1[0] . "\n";

