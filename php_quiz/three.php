<?php
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$length = count($array);
for ($i = 0; $i < $length - 1; $i++) {
    for ($j = $i + 1; $j < $length; $j++) {
        if ($array[$j] < $array[$i]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

$desc_array = [];
for ($i = $length - 1; $i >= 0; $i--) {
    $desc_array[] = $array[$i];
}

echo "Ascending Order: " . implode(", ", $array) . "<br>";
echo "Descending Order: " . implode(", ", $desc_array);
?>
