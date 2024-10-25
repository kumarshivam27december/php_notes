<?php
$arr1 = [50, 50, 50, 50, 67, 30, 11, 88];
$newarr = [];
$len = count($arr1);
for ($i = $len - 1; $i >= 0; $i--) {
    $newarr[] = $arr1[$i];
}
$sum1 = 0;
for ($i = 0; $i < $len; $i++) {
    $sum1 += $arr1[$i];
}
$sum2 = 0;
for ($i = 0; $i < $len; $i++) {
    $sum2 += $newarr[$i];
}
$minInReveresedArray = min($newarr);
$maxInReveresedArray = max($newarr);
echo "sum of original array " . $sum1;
echo "<br>";
echo "sum of reversed array " . $sum2;
echo "<br>";

echo "smallest value in reversed array" . $minInReveresedArray;
echo "<br>";
echo "largest value in reversed array" . $maxInReveresedArray;







