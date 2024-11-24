<?php

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$length = count($array);
$even_array=[];

for ($i=0; $i < $length; $i++) { 
    if ($array[$i] % 2 == 0) {
        unset($array[$i]); 
    }
}

echo "Array after removing even numbers: ";
print_r($array);

?>