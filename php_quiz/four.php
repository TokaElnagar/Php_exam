<?php


$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$sum=0;
$length = count($array);
for ($i=0; $i < $length ; $i++) { 
$sum +=$array[$i];
}

echo "sum :"." ".$sum;
$avg = $sum / $length;
echo "<br>";
echo "avg :"." ".$avg;