<?php
$array1 = [1, 2, 3, 4, 5];
echo "initial array 1 is ";
echo "<br>";
print_r($array1);
echo "<br>";
$array2 = [3, 7, 11, 15, 100];
echo "initial array 2 is ";
echo "<br>";
print_r($array2);
echo "<br>";
$array3 = array_merge($array1, $array2);
echo "after merging array 1 is ";
echo "<br>";
print_r($array3);

echo "<br>";
$array4 = array_intersect($array1, $array2);
echo "after intersecting array 1 is ";
echo "<br>";

print_r($array4);
echo "<br>";

$array5 = array_diff($array1, $array2);
echo "after differencing the  array 1 is ";

echo "<br>";
print_r($array5);
echo "<br>";

$even_numbers = array_filter($array1, function($x) {
    return $x %2== 0;
});


print_r($even_numbers);

$array_pop = $array1;

