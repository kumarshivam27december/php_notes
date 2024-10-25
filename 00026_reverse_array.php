<?php
$array1 = [1, 2, 3, 4, 5];
echo "previous array was";
echo "<br>";
print_r($array1);
echo "<br>";

$i = 0;
$j = sizeof($array1) - 1;

while ($i <= $j) {
    $a = $array1[$i];
    $array1[$i] = $array1[$j];
    $array1[$j] = $a;
    $i++;
    $j--;
}
echo "output after reversing the array";
echo "<br>";
print_r($array1);

echo "<br>";
echo "again reversing the array";
echo "<br>";

print_r($array1);