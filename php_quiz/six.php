<?php

$array= [10,30,20];
if($array[0]>$array[1] && $array[0]>$array[2]){
    $max=$array[0];
}elseif ($array[1]>$array[2] && $array[1]>$array[0] ) {
    $max=$array[1];
}elseif ($array[2]>$array[0] && $array[2]>$array[1]) {
    $max=$array[2];
}else{
    echo "they are equal";
};

echo "max : ".$max;

